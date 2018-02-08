<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting;

/**
 * Trait OptionManagerAwareTrait
 * @package MSBios\Voting
 */
trait OptionManagerAwareTrait
{
    /** @var  OptionManagerInterface */
    protected $optionManager;

    /**
     * @return OptionManagerInterface
     */
    public function getOptionManager(): OptionManagerInterface
    {
        return $this->optionManager;
    }

    /**
     * @param OptionManagerInterface $optionManager
     * @return $this
     */
    public function setOptionManager(OptionManagerInterface $optionManager)
    {
        $this->optionManager = $optionManager;
        return $this;
    }
}
