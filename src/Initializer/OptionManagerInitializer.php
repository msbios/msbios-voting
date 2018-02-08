<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Initialized;

use Interop\Container\ContainerInterface;
use MSBios\Voting\OptionManager;
use MSBios\Voting\OptionManagerAwareInterface;
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
        if ($instance instanceof OptionManagerAwareInterface) {
            $instance->setVoteManager(
                $container->get(OptionManager::class)
            );
        }
    }

    /**
     * @param $an_array
     * @return OptionManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
