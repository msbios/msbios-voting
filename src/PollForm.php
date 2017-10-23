<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use Zend\Form\Element\Hidden;
use Zend\Form\Element\Radio;
use Zend\Form\Form;

/**
 * Class PollForm
 * @package MSBios\Voting
 */
class PollForm extends Form
{
    public function init()
    {
        parent::init();
        $this->add([
            'type' => Radio::class,
            'name' => 'poll_option_identifier'
        ])->add([
            'type' => Hidden::class,
            'name' => 'poll_identifier'
        ])->add([
            'type' => Hidden::class,
            'name' => 'poll_relation'
        ]);
    }

}