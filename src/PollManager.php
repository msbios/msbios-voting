<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use MSBios\Stdlib\ObjectInterface;

/**
 * Class PollManager
 * @package MSBios\Voting
 * @link https://www.codexworld.com/online-poll-voting-system-php-mysql/
 */
class PollManager implements PollManagerInterface
{
    /**
     * @param $id
     * @param null $relation
     */
    public function find($id, $relation = null)
    {
    }

    /**
     * @param $id
     * @param null $relation
     */
    public function vote($id, $relation = null)
    {
        // TODO: Implement vote() method.
    }
}
