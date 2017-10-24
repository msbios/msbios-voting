<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Controller\Plugin;

use MSBios\Voting\PollManagerInterface;
use Zend\Config\Config;
use Zend\Form\FormInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class PollPlugin
 * @package MSBios\Voting\Controller\Plugin
 */
class PollPlugin extends AbstractPlugin
{
    /** @var PollManagerInterface */
    protected $pollManager;

    /** @var Config */
    protected $options;

    /** @var array */
    protected $data = [];

    /**
     * PollPlugin constructor.
     * @param PollManagerInterface $pollManager
     * @param Config $options
     */
    public function __construct(PollManagerInterface $pollManager, Config $options)
    {
        $this->pollManager = $pollManager;
        $this->options = $options;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        /** @var FormInterface $formElement */
        $formElement = $this->pollManager->getFormElement();
        return $formElement->setData($this->data)->isValid();
    }

    /**
     * @return bool
     */
    public function vote()
    {
        if ($this->isValid()) {
            $this->pollManager->vote();
            return true;
        }

        return false;
    }
}
