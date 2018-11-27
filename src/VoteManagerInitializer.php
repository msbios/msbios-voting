<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class VoteManagerInitializer
 * @package MSBios\Voting
 */
class VoteManagerInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
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
     * @inheritdoc
     *
     * @param $an_array
     * @return VoteManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}
