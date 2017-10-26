<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

use MSBios\Stdlib\ObjectInterface;

/**
 * Interface PollManagerInterface
 * @package MSBios\Voting
 */
interface PollManagerInterface
{
    /**
     * @param $id
     * @param null $relation
     * @return ObjectInterface
     */
    public function find($id, $relation = null);

    /**
     * @param array $data
     * @return mixed
     */
    public function vote(array $data);
}
