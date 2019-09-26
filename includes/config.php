<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Taylors Go Website',
        'pretty_uri' => false,
        'site_url' => 'https://serversidephp.herokuapp.com/',
        'nav_menu' => [
            '' => 'Home',
            'searchPage' => 'Search',
            'image-gallery.phtml' => 'Image Gallery'
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v1.0',
    ];
    return isset($config[$key]) ? $config[$key] : null;
}
