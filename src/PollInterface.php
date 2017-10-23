<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use MSBios\Stdlib\ObjectInterface;

/**
 * Interface PollInterface
 * @package MSBios\Voting
 */
interface PollInterface extends ObjectInterface
{
    /**
     * @return mixed
     */
    public function getOptions();
}