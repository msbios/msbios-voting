<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

/**
 * Interface PollManagerAwareInterface
 * @package MSBios\Voting
 */
interface PollManagerAwareInterface
{
    /**
     * @return PollManagerInterface
     */
    public function getPollManager(): PollManagerInterface;

    /**
     * @param PollManagerInterface $pollManager
     * @return $this
     */
    public function setPollManager(PollManagerInterface $pollManager);
}
