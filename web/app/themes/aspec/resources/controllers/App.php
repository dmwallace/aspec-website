<?php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function csa_logo() {
        return get_image_url('logos/compliance_australia_certification_logo.png');
    }

    public function aspec_logo_id() {
        return get_field('aspec_logo', 'option')['id'];
    }

    public function header_image() {
        return get_field('header_image');
    }
}
