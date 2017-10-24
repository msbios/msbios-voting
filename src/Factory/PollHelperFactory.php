<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Voting\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Voting\Module;
use MSBios\Voting\PollManager;
use MSBios\Voting\View\Helper\PollHelper;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class PollHelperFactory
 * @package MSBios\Voting\Factory
 */
class PollHelperFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return PollHelper
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new PollHelper(
            $container->get(PollManager::class),
            $container->get(Module::class)
        );
    }
}
