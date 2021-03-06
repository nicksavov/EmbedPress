<?php
(defined('ABSPATH') && defined('EMBEDPRESS_IS_LOADED')) or die("No direct script access allowed.");

/**
 * Declare an associative array that is responsible for mapping additional service providers to its urls.
 * The key must match the class placed in ./EmbedPress/Providers/ folder, and the values must be a string or
 * another array listing all url patterns in which the key (a.k.a. the service provider you're adding)
 * should be triggered.
 *
 * @package     EmbedPress
 * @author      EmbedPress <help@embedpress.com>
 * @copyright   Copyright (C) 2018 EmbedPress. All rights reserved.
 * @license     GPLv2 or later
 * @since       1.0.0
 */

$additionalServiceProviders = array(
    'GoogleMaps' => array("google.com", "google.com.*", "maps.google.com", "goo.gl", "google.co.*"),
    'GoogleDocs' => array("docs.google.com"),
    'Twitch'     => array("twitch.tv", "clips.twitch.tv"),
    'Giphy'      => array("giphy.com", "i.giphy.com")
);
