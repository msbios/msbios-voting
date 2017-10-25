<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Voting\Controller\Plugin\PollPlugin;
use MSBios\Voting\Module;
use MSBios\Voting\PollManager;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class PollPluginFactory
 * @package MSBios\Voting\Factory
 */
class PollPluginFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return PollPlugin
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new PollPlugin(
            $container->get(PollManager::class),
            $container->get(Module::class)
        );
    }
}
