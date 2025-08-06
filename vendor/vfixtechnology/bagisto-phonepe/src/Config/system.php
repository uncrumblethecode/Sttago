<?php

return [
    [
        'key'    => 'sales.payment_methods.phonepe',
        'name'   => 'PhonePe',
        'info'   => 'PhonePe extension created for Bagisto by <a href="https://www.vfixtechnology.com" target="_blank" style="color: blue;">Vfix Technology</a>.',
        'sort'   => 4,
        'fields' => [
            [
                'name'          => 'title',
                'title'         => 'Title',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'name'          => 'description',
                'title'         => 'Description',
                'validation'    => 'required',
                'type'          => 'textarea',
                'channel_based' => false,
                'locale_based'  => true,
            ],
            [
                'key'           => 'sales.paymentmethods.phonepe.image',
                'name'          => 'image',
                'title'         => 'PhonePe Logo',
                'type'          => 'image',
                'default'       => 'public/vendor/vfixtechnology/assets/PhonePe_logo.webp',
                'validation'    => 'mimes:bmp,jpeg,jpg,png,webp',
                'channel_based' => false,
                'locale_based'  => false,
            ],
            [
                'name'          => 'merchant_id',
                'title'         => 'Merchant ID',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ],
            [
                'name'          => 'salt_key',
                'title'         => 'Salt Key',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ],
            [
                'name'          => 'salt_index',
                'title'         => 'Salt Index',
                'type'          => 'text',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ],
            [
                'name'       => 'env',
                'title'      => 'Environment',
                'type'       => 'select',
                'validation' => 'required',
                'options'    => [
                    [
                        'title' => 'Sandbox',
                        'value' => 'sandbox',
                    ],
                    [
                        'title' => 'Production',
                        'value' => 'production',
                    ],
                ],
                'channel_based' => false,
                'locale_based'  => false,
            ],
            [
                'name'          => 'active',
                'title'         => 'Status',
                'type'          => 'boolean',
                'validation'    => 'required',
                'channel_based' => false,
                'locale_based'  => false,
            ],
        ],
    ],
];
