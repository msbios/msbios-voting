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

    'form_elements' => [
        'factories' => [
            PollForm::class =>
                Factory\PollFormFactory::class
        ],
        'aliases' => [
            PollManager::class =>
                PollForm::class
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
         * Default: poll_option_identifier
         */
        'default_option_key' => 'poll_option_identifier',

        /**
         *
         * Expects: string
         * Default: poll_relation
         */
        'default_relation_key' => 'poll_relation',

        /**
         *
         * Expects: string
         * Default: poll_handler
         */
        'default_handler_key' => 'poll_identifier',

        //'polls' => [
        //    'SOME_IDENTIFIER_KEY' => [
        //        'subject' => 'Rating of trust',
        //        'total' => 48,
        //        'options' => [
        //            [
        //                'id' => 1,
        //                'name' => 'I totally trust',
        //                'total' => 200,
        //                'percent' => '20%',
        //                'priority' => 1
        //            ], [
        //                'id' => 2,
        //                'name' => 'I\'m more likely to trust',
        //                'total' => 200,
        //                'percent' => '20%',
        //                'priority' => 0
        //            ], [
        //                'id' => 3,
        //                'name' => 'Most likely I do not trust',
        //                'total' => 200,
        //                'percent' => '20%',
        //                'priority' => 2
        //            ], [
        //                'id' => 4,
        //                'name' => 'I totally do not trust',
        //                'total' => 200,
        //                'percent' => '20%',
        //                'priority' => 1
        //            ],
        //        ]
        //    ]
        //]
    ]
];
