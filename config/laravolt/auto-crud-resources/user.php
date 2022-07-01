<?php

return [
    'label' => 'User',
    'model' => \App\Models\User::class,
    'restful_button' => true,

    // optional, if you want to override the default Table
    //'table' => \App\Http\Livewire\Table\UserCustomTable::class

    'schema' => [
        [
            'name' => 'name',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Nama Lengkap',
        ],
        [
            'name' => 'email',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Email',
            'rules' => ['required', 'email'],
        ],
        [
            'name' => 'password',
            'type' => \Laravolt\Fields\Field::TEXT,
            'label' => 'Password',
        ],
        [
            'type' => \Laravolt\Fields\Field::BUTTON,
            'name' => 'editUrl',
            'label' => '',
            'icon' => 'pencil',
            'show_on_create' => false,
            'show_on_edit' => false,
            'show_on_detail' => false,
        ],
        [
            'type' => \Laravolt\Fields\Field::RESTFUL_BUTTON,
            'show_on_create' => false,
            'show_on_edit' => false,
            'show_on_detail' => false,
            'only' => ['show', 'destroy'],
        ]
    ],
];
