<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Initialized;

use Interop\Container\ContainerInterface;
use MSBios\Voting\VoteManager;
use MSBios\Voting\VoteManagerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class OptionManagerInitializer
 * @package MSBios\Voting\Initialized
 */
class OptionManagerInitializer implements InitializerInterface
{
    /**
     * Initialize the given instance
     *
     * @param  ContainerInterface $container
     * @param  object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof VoteManagerAwareInterface) {
            $instance->setVoteManager(
                $container->get(VoteManager::class)
            );
        }
    }

    /**
     * @param $an_array
     * @return PollManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}