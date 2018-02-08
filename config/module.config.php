<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'service_manager' => [
        'factories' => [
            Module::class =>
                Factory\ModuleFactory::class,
            PollManager::class =>
                InvokableFactory::class,
            OptionManager::class =>
                InvokableFactory::class,
            VoteManager::class =>
                InvokableFactory::class
        ]
    ],

    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\PollPlugin::class =>
                Factory\PollPluginFactory::class,
        ],
        'aliases' => [
            'poll' => Controller\Plugin\PollPlugin::class
        ]
    ],

    'input_filters' => [
        'factories' => [
            InputFilter\PollInputFilter::class =>
                InvokableFactory::class
        ]
    ],

    'form_elements' => [
        'factories' => [
            Form\PollForm::class => InvokableFactory::class
        ],
    ],

    'view_helpers' => [
        'factories' => [
            View\Helper\PollHelper::class =>
                Factory\PollHelperFactory::class
        ],
        'aliases' => [
            'poll' => View\Helper\PollHelper::class
        ]
    ],

    Module::class => [

        /**
         *
         * Expects: string
         * Default: MSBios\Voting\Doctrine\Provider\Poll\RelationProvider
         */
        'poll_provider' => null,

        /**
         *
         * Expects: string
         * Default: MSBios\Voting\Doctrine\CheckManager
         */
        'vote_manager' => null,

        /**
         *
         * Expects: string
         * Default: MSBios\Voting\Doctrine\CheckManager
         */
        'check_manager' => null,

        /**
         *
         * Expects: array
         * Default: []
         */
        'vote_resolvers' => [
        ],

        /**
         *
         * Expects: array
         * Default: []
         */
        'check_resolvers' => [
        ]
    ]
];
