<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\View\Helper;

use MSBios\Voting\PollManagerInterface;
use Zend\Config\Config;
use Zend\Form\FormInterface;
use Zend\View\Helper\AbstractHelper;

/**
 * Class PollHelper
 * @package MSBios\Voting\View\Helper
 */
class PollHelper extends AbstractHelper
{
    /** @var  PollManagerInterface */
    protected $pollManager;

    /**
     * PollHelper constructor.
     * @param PollManagerInterface $pollManager
     */
    public function __construct(PollManagerInterface $pollManager)
    {
        $this->pollManager = $pollManager;
    }

    /**
     * @return $this
     */
    public function __invoke()
    {
        return $this;
    }

    /**
     * @param $id
     * @param null $relation
     * @return \MSBios\Stdlib\ObjectInterface
     */
    public function find($id, $relation = null)
    {
        return $this->pollManager->find($id, $relation);
    }

    /**
     * @return mixed
     */
    public function form()
    {
        return $this->pollManager->form();
    }
}
