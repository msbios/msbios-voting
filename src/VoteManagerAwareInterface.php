<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

/**
 * Interface VoteManagerAwareInterface
 * @package MSBios\Voting
 */
interface VoteManagerAwareInterface
{
    /**
     * @return VoteManagerInterface
     */
    public function getVoteManager(): VoteManagerInterface;

    /**
     * @param VoteManagerInterface $voteManager
     * @return $this
     */
    public function setVoteManager(VoteManagerInterface $voteManager);
}
