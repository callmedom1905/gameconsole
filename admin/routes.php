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
    'edit-product/:id'=>[
        'controller' => 'AdminProductsController',
        'method' => 'viewEdit',
    ],
    'action-edit-product/:id'=>[
        'controller' => 'AdminProductsController',
        'method' => 'edit',
    ],
    'action-delete-product/:id'=>[
        'controller' => 'AdminProductsController',
        'method' => 'delete',
    ],

    //action category
    'add-category'=>[
        'controller'=>'AdminCategoriesController',
        'method'=>'viewAdd',
    ],
    'action-add-category'=>[
        'controller'=>'AdminCategoriesController',
        'method'=>'add',
    ],
    'edit-category/:id'=>[
        'controller'=>'AdminCategoriesController',
        'method'=>'viewEdit',
    ],


    'action-delete-category/:id'=>[
        'controller'=>'AdminCategoriesController',
        'method'=>'delete',
    ],

    //action user
    'edit-user/:id'=>[
        'controller'=>'AdminUsersController',
        'method'=>'viewEdit',
    ],
    'action-edit-user/:id'=>[
        'controller'=>'AdminUsersController',
        'method'=>'edit',
    ],
    'logout'=>[
        'controller'=>'AdminUsersController',
        'method'=>'logout',
    ],


    
   

];