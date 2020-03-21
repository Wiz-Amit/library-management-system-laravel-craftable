<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'book' => [
        'title' => 'Books',

        'actions' => [
            'index' => 'Books',
            'create' => 'New Book',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'price' => 'Price',
            'rack_no' => 'Rack no',
            'edition' => 'Edition',
            'count' => 'Count',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'book' => [
        'title' => 'Books',

        'actions' => [
            'index' => 'Books',
            'create' => 'New Book',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'author' => 'Author',
            'price' => 'Price',
            'count' => 'Count',
            'rack_no' => 'Rack no',
            'edition' => 'Edition',
            
        ],
    ],

    'member' => [
        'title' => 'Members',

        'actions' => [
            'index' => 'Members',
            'create' => 'New Member',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'member' => [
        'title' => 'Members',

        'actions' => [
            'index' => 'Members',
            'create' => 'New Member',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'address_l1' => 'Address l1',
            'address_l2' => 'Address l2',
            'expiry' => 'Expiry',
            
        ],
    ],

    'transaction' => [
        'title' => 'Transactions',

        'actions' => [
            'index' => 'Transactions',
            'create' => 'New Transaction',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'transaction' => [
        'title' => 'Transactions',

        'actions' => [
            'index' => 'Transactions',
            'create' => 'New Transaction',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'expiry' => 'Expiry',
            
        ],
    ],

    'transaction' => [
        'title' => 'Transactions',

        'actions' => [
            'index' => 'Transactions',
            'create' => 'New Transaction',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'book_id' => 'Book',
            'members_id' => 'Members',
            'admin_user_id' => 'Admin user',
            'expiry' => 'Expiry',
            
        ],
    ],

    'transaction' => [
        'title' => 'Transactions',

        'actions' => [
            'index' => 'Transactions',
            'create' => 'New Transaction',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'book_id' => 'Book',
            'member_id' => 'Member',
            'admin_user_id' => 'Admin user',
            'expiry' => 'Expiry',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];