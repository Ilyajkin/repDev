<?php

return array (

'default' => array (
    'controller' => PageNotFoundController::class, //?
    'action' => 'index',
    ),

    array (
    'path' => '/contacts/',
    'controller' => ContactsController::class,
    'action' => 'contacts',
    ),

    array (
    'path' => '/catalog/',
    'controller' => CatalogController::class,
    'action' => 'catalog',
    ),
);
