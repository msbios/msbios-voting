<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\Voting\PollManager;
use MSBios\Voting\PollManagerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class PollManagerInitializer
 * @package MSBios\Voting\Initializer
 */
class PollManagerInitializer implements InitializerInterface
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
        if ($instance instanceof PollManagerAwareInterface) {
            $instance->setPollManager(
                $container->get(PollManager::class)
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
