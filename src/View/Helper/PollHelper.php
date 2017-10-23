<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\View\Helper;

use MSBios\Voting\PollManagerInterface;
use Zend\Form\Element\Hidden;
use Zend\Form\Element\Radio;
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
        $this->identifier = $id;
        $this->relation = $relation;
        return $this->pollManager->find($id, $relation);
    }

    /**
     * @param $option
     * @return \Zend\Form\Element\Radio
     */
    public function optionElement($option)
    {
        return new Radio('poll_option_identifier', [
            'value_options' => [
                [
                    'value' => $option->get('id'),
                    'label' => $option->get('name'),
                    'attributes' => [
                        'checked' => 'checked',
                    ]
                ]
            ]
        ]);
    }

    /**
     * @return \Zend\Form\Element
     */
    public function identifierElement()
    {
        return (new Hidden('poll_identifier'))
            ->setValue($this->identifier);
    }

    /**
     * @return \Zend\Form\Element
     */
    public function relationElement()
    {
        return (new Hidden('poll_relation'))
            ->setValue($this->relation);
    }
}