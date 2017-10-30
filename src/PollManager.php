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
     * @param $idOrCode
     * @param null $relation
     */
    public function find($idOrCode, $relation = null)
    {
        // TODO: Implement find() method.
    }

    /**
     * @param $id
     * @param null $relation
     */
    public function vote($id, $relation = null)
    {
        // TODO: Implement vote() method.
    }

    /**
     * @param ObjectInterface $poll
     * @return mixed
     */
    public function isVoted(ObjectInterface $poll)
    {
        // TODO: Implement isVoted() method.
    }

    /**
     * @param ObjectInterface $poll
     * @return mixed
     */
    public function votes(ObjectInterface $poll)
    {
        // TODO: Implement votes() method.
    }
}
