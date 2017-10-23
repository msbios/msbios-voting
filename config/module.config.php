<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Voting;

use MSBios\Form\Initializer\FormElementAwareInitializer;
use MSBios\Form\Initializer\FormInitializer;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'service_manager' => [
        'factories' => [
            Module::class => Factory\ModuleFactory::class,
            PollManager::class => Factory\PollManagerFactory::class,
        ],
    ],

    'controller_plugins' => [
        'factories' => [
            Controller\Plugin\PollPlugin::class =>
                InvokableFactory::class,
        ],
        'aliases' => [
            'poll' => Controller\Plugin\PollPlugin::class
        ]
    ],

    'form_elements' => [
        'factories' => [
            PollForm::class =>
                InvokableFactory::class
        ],
        'aliases' => [
            View\Helper\PollHelper::class =>
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
        ],
        'initializers' => [
            new FormElementAwareInitializer
        ]
    ],

    Module::class => [
        'polls' => [
            'SOME_IDENTIFIER_KEY' => [
                'subject' => 'Rating of trust',
                'total' => 48,
                'options' => [
                    [
                        'id' => 1,
                        'name' => 'I totally trust',
                        'total' => 200,
                        'percent' => '20%',
                        'priority' => 1
                    ], [
                        'id' => 2,
                        'name' => 'I\'m more likely to trust',
                        'total' => 200,
                        'percent' => '20%',
                        'priority' => 0
                    ], [
                        'id' => 3,
                        'name' => 'Most likely I do not trust',
                        'total' => 200,
                        'percent' => '20%',
                        'priority' => 2
                    ], [
                        'id' => 4,
                        'name' => 'I totally do not trust',
                        'total' => 200,
                        'percent' => '20%',
                        'priority' => 1
                    ],
                ]
            ]
        ]
    ]
];
