<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

/**
 * Trait VoteManagerAwareTrait
 * @package MSBios\Voting
 */
trait VoteManagerAwareTrait
{
    /** @var VoteManagerInterface */
    protected $voteManager;

    /**
     * @return VoteManagerInterface
     */
    public function getVoteManager(): VoteManagerInterface
    {
        return $this->voteManager;
    }

    /**
     * @param VoteManagerInterface $voteManager
     * @return $this
     */
    public function setVoteManager(VoteManagerInterface $voteManager)
    {
        $this->voteManager = $voteManager;
        return $this;
    }
}
