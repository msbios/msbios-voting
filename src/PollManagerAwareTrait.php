<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

/**
 * Trait PollManagerAwareTrait
 * @package MSBios\Voting
 */
trait PollManagerAwareTrait
{
    /** @var PollManagerInterface */
    protected $pollManager;

    /**
     * @return PollManagerInterface
     */
    public function getPollManager(): PollManagerInterface
    {
        return $this->pollManager;
    }

    /**
     * @param PollManagerInterface $pollManager
     * @return $this
     */
    public function setPollManager(PollManagerInterface $pollManager)
    {
        $this->pollManager = $pollManager;
        return $this;
    }
}
