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
    /** @var null */
    protected $identifier = null;

    /** @var null */
    protected $relation = null;

    /** @var  PollManagerInterface */
    protected $pollManager;

    /** @var Config */
    protected $config;

    /**
     * PollHelper constructor.
     * @param PollManagerInterface $pollManager
     * @param Config $config
     */
    public function __construct(PollManagerInterface $pollManager, Config $config)
    {
        $this->pollManager = $pollManager;
        $this->config = $config;
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
        $this->identifier = $id;
        $this->relation = $relation;
        return $this->pollManager->find($id, $relation);
    }

    /**
     * @return FormInterface
     */
    public function form()
    {
        // add radio values $this->form
        return $this->pollManager->form();
    }

    ///**
    // * @param $label
    // * @param $value
    // * @return Radio
    // */
    //protected function factoryOptionElement($label, $value)
    //{
    //    return new Radio('poll_option_identifier', [
    //        'value_options' => [
    //            [
    //                'label' => $label,
    //                'value' => $value,
    //                'attributes' => [
    //                    'checked' => 'checked',
    //                ]
    //            ]
    //        ]
    //    ]);
    //}
    //
    ///**
    // * @param ObjectInterface $option
    // * @return Radio
    // */
    //public function optionElement(ObjectInterface $option)
    //{
    //    return $this->factoryOptionElement(
    //        $option->get('id'),
    //        $option->get('name')
    //    );
    //}
    //
    ///**
    // * @return \Zend\Form\Element
    // */
    //public function identifierElement()
    //{
    //    return (new Hidden('poll_identifier'))
    //        ->setValue($this->identifier);
    //}
    //
    ///**
    // * @return \Zend\Form\Element
    // */
    //public function relationElement()
    //{
    //    return (new Hidden('poll_relation'))
    //        ->setValue($this->relation);
    //}
}
