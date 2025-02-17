<?php
return [
    ''=> [
        'controller' => 'HomeController',
        'method' => 'index',
    ],
    'about' =>[
        'controller' => 'HomeController',
        'method' => 'about',
    ],
    'contact' =>[
        'controller' => 'HomeController',
        'method' => 'contact',
    ],
    'news'=>[
        'controller' => 'HomeController',
        'method' => 'news',
    ],
    'cart'=>[
        'controller' => 'HomeController',
        'method' => 'cart',
    ],

    //Product
    'detail/:id' => [
        'controller' => 'ProductController',
        'method' => 'detail',
    ],
    //login
    'signIn' =>[
        'controller' => 'HomeController',
        'method' => 'signIn',
    ],
    'login' =>[
        'controller' => 'UserController',
        'method' => 'login',
    ],
    'signUp' =>[
        'controller' => 'HomeController',
        'method' => 'signUp',
    ],
    'register'=>[
        'controller' => 'UserController',
        'method' => 'register',
    ],
    'logout' =>[
        'controller' => 'UserController',
        'method' => 'logout',
    ]
   

];