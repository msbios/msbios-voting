<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class PollManagerInitializer
 * @package MSBios\Voting
 */
class PollManagerInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
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
     * @inheritdoc
     *
     * @param $an_array
     * @return PollManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
