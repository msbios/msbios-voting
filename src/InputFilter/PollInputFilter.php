<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\InputFilter;

use Zend\InputFilter\InputFilter;

/**
 * Class PollInputFilter
 * @package MSBios\Voting\InputFilter
 */
class PollInputFilter extends InputFilter
{
    public function init()
    {
        parent::init();

        $this->add([
            'name' => 'poll_option_identifier',
            'required' => true,
        ])->add([
            'name' => 'poll_relation',
            'required' => false,
        ])->add([
            'name' => 'poll_identifier',
            'required' => true,
        ]);
    }
}
