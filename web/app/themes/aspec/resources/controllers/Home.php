<?php

namespace App;

use Sober\Controller\Controller;

class Home extends Controller
{
    public function header_links() {
        return array(
            array(
                "thumbnail_url" => get_image_url('about_section_thumbnails/bulk_materials_handling.jpg'),
                "heading" => "Bulk Materials Handling",
                "subheading" => "Sales & Sustainable Systems",
                "anchor" => "bulk_materials_handling"
            ),
            array(
                "thumbnail_url" => get_image_url('about_section_thumbnails/asset_longevity.jpg'),
                "heading" => "Asset Longevity",
                "subheading" => "Asset Integrity, Life Extensions & Risk Reduction",
                "anchor" => "asset_longevity"
            ),
            array(
                "thumbnail_url" => get_image_url('about_section_thumbnails/infrastructure.jpg'),
                "heading" => "Infrastructure",
                "subheading" => "Proof Engineering Feasibility Project Design",
                "anchor" => "infrastructure"
            )
        );
    }

    public function header_banner_images() {
        return get_images_in_directory( "home_banner/");
    }
}
