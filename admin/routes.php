<?php
return [
    ''=> [
        'controller' => 'AdminHomeController',
        'method' => 'index',
    ],
    'products' =>[
        'controller' => 'AdminProductsController',
        'method' => 'products',
    ],
    'categories' =>[
        'controller' => 'AdminCategoriesController',
        'method' => 'categories',
    ],
    'users'=>[
        'controller' => 'AdminUsersController',
        'method' => 'users',
    ],
    //action product
    'add-product'=>[
        'controller' => 'AdminProductsController',
        'method' => 'viewAdd',
    ],
    'action-add-pro'=>[
        'controller' => 'AdminProductsController',
        'method' => 'add',
    ],
    'action-edit-product/:id'=>[
        'controller' => 'AdminProductsController',
        'method' => 'viewEdit',
    ],
    //action category
    'add-category'=>[
        'controller'=>'AdminCategoriesController',
        'method'=>'view',
    ],
    'action-add-category'=>[
        'controller'=>'AdminCategoriesController',
        'method'=>'add',
    ],
    //action user
    'logout'=>[
        'controller'=>'AdminUsersController',
        'method'=>'logout',
    ]

    
   

];