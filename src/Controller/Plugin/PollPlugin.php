<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Controller\Plugin;

use MSBios\Form\FormElementAwareInterface;
use MSBios\Form\FormElementAwareTrait;
use MSBios\Voting\PollManagerInterface;
use Zend\InputFilter\Factory as InputFilterFactory;
use Zend\InputFilter\InputFilterInterface;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class PollPlugin
 * @package MSBios\Voting\Controller\Plugin
 */
class PollPlugin extends AbstractPlugin implements FormElementAwareInterface
{
    use FormElementAwareTrait;

    /** @var PollManagerInterface */
    protected $pollManager;

    /**
     * PollPlugin constructor.
     * @param PollManagerInterface $pollManager
     */
    public function __construct(PollManagerInterface $pollManager)
    {
        $this->pollManager = $pollManager;
    }

    /**
     * @param array $data
     */
    public function setValue(array $data)
    {
        /** @var InputFilterInterface $inputFilter */
        $inputFilter = $this->getInputFilter();

        if ($inputFilter->setData($data)->isValid()) {
            /** @var array $values */
            $values = $inputFilter->getValues();
            $this->pollManager->vote();
        }
    }

    /**
     * @return \Zend\InputFilter\InputFilterInterface
     */
    protected function getInputFilter()
    {
        /** @var InputFilterFactory $factory */
        return (new InputFilterFactory)->createInputFilter([
            'poll_identifier' => [
                'name' => 'poll_identifier',
                'required' => true,
            ],
            'poll_relation' => [
                'name' => 'poll_relation',
                'required' => false,
            ],
            'poll_option_identifier' => [
                'name' => 'poll_option_identifier',
                'required' => true,
            ]
        ]);
    }
}
