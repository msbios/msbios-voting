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
     * @param $id
     * @param $optionId
     * @param null $relation
     * @return mixed
     */
    public function vote($id, $optionId, $relation = null);
}
