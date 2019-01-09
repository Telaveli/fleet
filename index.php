<?php

use pagekit\Application;

return [

  'name' => 'fleet',

  'type' => 'extension',

  'main' => function(Application $app) {
  },
 'autoload' => [
      'Pagekit\\Fleet\\' => 'src'
  ],

  'routes' => [
    '@fleet' => [
       'path' =>  '/fleet',
       'controller' => 'Pagekit\\Fleet\\Controller\\FleetController'
    ]
  ],
  'menu' => [
    'fleet' => [
        'label' => 'Fleet',
        'url'=> '@Fleet',
        'icon' => 'app/system/assets/images/placeholder-icon.svg'
    ]
  ]
];
