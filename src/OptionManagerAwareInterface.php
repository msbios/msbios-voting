<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

/**
 * Interface OptionManagerAwareInterface
 * @package MSBios\Voting
 */
interface OptionManagerAwareInterface
{
    /**
     * @return OptionManagerInterface
     */
    public function getOptionManager(): OptionManagerInterface;

    /**
     * @param OptionManagerInterface $optionManager
     * @return $this
     */
    public function setOptionManager(OptionManagerInterface $optionManager);
}
