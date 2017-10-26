<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting\Form;

use Zend\Form\Element\Hidden;
use Zend\Form\Element\Submit;
use Zend\Form\Form;

/**
 * Class PollForm
 * @package MSBios\Voting\Form
 */
class PollForm extends Form
{
    public function init()
    {
        parent::init();
        $this->add([
            'type' => Hidden::class,
            'name' => 'poll_option_identifier'
        ])->add([
            'type' => Hidden::class,
            'name' => 'poll_relation'
        ])->add([
            'type' => Submit::class,
            'name' => 'poll_identifier'
        ]);
    }
}
