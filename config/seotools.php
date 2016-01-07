<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'       => "PageMeta API", // set false to total remove
            'description' => 'A simple API to parse important meta and related data from a web page', // set false to total remove
            'separator'   => ' - ',
            'keywords'    => ['api', 'pagemeta', 'meta', 'opengraph'],
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'PageMeta API', // set false to total remove
            'description' => 'A simple API to parse important meta and related data from a web page', // set false to total remove
            'url'         => false,
            'type'        => false,
            'site_name'   => 'PageMeta API',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
          'card'        => 'summary',
          'site'        => '@robbiepaulco',
        ],
    ],
];
