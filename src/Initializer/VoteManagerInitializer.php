<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting\Doctrine\Initialized;

use Interop\Container\ContainerInterface;
use MSBios\Voting\VoteManager;
use MSBios\Voting\VoteManagerAwareInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class VoteManagerInitializer
 * @package MSBios\Voting\Doctrine\Initialized
 */
class VoteManagerInitializer implements InitializerInterface
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
     * @return VoteManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
