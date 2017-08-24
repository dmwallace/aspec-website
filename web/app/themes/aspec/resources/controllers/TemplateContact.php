<?php

namespace App;

use Sober\Controller\Controller;

class TemplateContact extends Controller
{
    public function map_data() {
        return array(
            "google_maps_api_key" => get_field('google_maps_api_key', 'option'),
            "locations" => array_map(function($location){return $location['address_line_1'] . ' ' . $location['address_line_2'];}, get_field('offices')),
            "icon_url" => wp_get_attachment_image_src(get_field('map_marker_icon')['id'], array(64, 64))[0]
        );
    }
}
