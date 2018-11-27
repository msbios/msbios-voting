<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting\Form;

use Zend\Form\Element;
use Zend\Form\Form;

/**
 * Class PollForm
 * @package MSBios\Voting\Form
 */
class PollForm extends Form
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->add([
            'type' => Element\Hidden::class,
            'name' => 'poll_option_identifier'
        ])->add([
            'type' => Element\Hidden::class,
            'name' => 'poll_relation'
        ])->add([
            'type' => Element\Hidden::class,
            'name' => 'poll_redirect'
        ])->add([
            'type' => Element\Submit::class,
            'name' => 'poll_identifier'
        ]);
    }
}
