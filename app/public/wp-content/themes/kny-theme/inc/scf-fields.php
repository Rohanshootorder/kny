<?php
/**
 * Register SCF (Secure Custom Fields) Local Field Groups
 *
 * All field groups are registered in code section-by-section using standard SCF/ACF APIs.
 *
 * @package KNY_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'acf/init', 'kny_register_scf_fields' );

function kny_register_scf_fields() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    // =========================================================================
    // HOMEPAGE SECTIONS FIELD GROUP
    // =========================================================================
    acf_add_local_field_group( array(
        'key'                   => 'group_kny_homepage_sections',
        'title'                 => 'Homepage Sections Data',
        'fields'                => array(

            // -----------------------------------------------------------------
            // TAB: HERO SECTION
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_hero',
                'label' => 'Hero Section',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_hero_section',
                'label'      => 'Hero Section',
                'name'       => 'hero_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_hero_badge_text',
                        'label'         => 'Location Badge Text',
                        'name'          => 'badge_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_badge_subtext',
                        'label'         => 'Location Badge Subtext',
                        'name'          => 'badge_subtext',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_title',
                        'label'         => 'Main Title (Supports HTML highlight)',
                        'name'          => 'section_title',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_hero_description',
                        'label'         => 'Description',
                        'name'          => 'section_description',
                        'type'          => 'textarea',
                        'rows'          => 3,
                    ),
                    array(
                        'key'           => 'field_hero_btn1_text',
                        'label'         => 'Primary Button Text',
                        'name'          => 'primary_btn_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_btn1_url',
                        'label'         => 'Primary Button URL',
                        'name'          => 'primary_btn_url',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_btn2_text',
                        'label'         => 'Secondary Button (Phone) Text',
                        'name'          => 'secondary_btn_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_btn2_url',
                        'label'         => 'Secondary Button URL',
                        'name'          => 'secondary_btn_url',
                        'type'          => 'text',
                    ),
                    array(
                        'key'        => 'field_hero_stats',
                        'label'      => 'Key Metrics / Stats',
                        'name'       => 'stats',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_stat_value',
                                'label' => 'Metric Value',
                                'name'  => 'value',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_stat_label',
                                'label' => 'Metric Label',
                                'name'  => 'label',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key'           => 'field_hero_image',
                        'label'         => 'Hero Residence Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'url',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                    array(
                        'key'           => 'field_hero_image_tag',
                        'label'         => 'Image Pill Tag',
                        'name'          => 'image_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_card_title',
                        'label'         => 'Floating Card Title',
                        'name'          => 'card_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_card_sub',
                        'label'         => 'Floating Card Subtitle',
                        'name'          => 'card_subtitle',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_verified_badge',
                        'label'         => 'Floating Card Badge',
                        'name'          => 'verified_badge',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_whatsapp_label',
                        'label'         => 'WhatsApp Pill Label',
                        'name'          => 'whatsapp_label',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_hero_whatsapp_number',
                        'label'         => 'WhatsApp Number',
                        'name'          => 'whatsapp_number',
                        'type'          => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: DISTINCTION (WHY CHOOSE US)
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_distinction',
                'label' => 'Distinction (Why Us)',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_distinction_section',
                'label'      => 'Distinction Section',
                'name'       => 'distinction_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_dist_tag',
                        'label'         => 'Section Tag / Eyebrow',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_dist_title',
                        'label'         => 'Section Title',
                        'name'          => 'section_title',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_dist_desc',
                        'label'         => 'Section Description',
                        'name'          => 'section_description',
                        'type'          => 'textarea',
                        'rows'          => 3,
                    ),
                    array(
                        'key'        => 'field_dist_cards',
                        'label'      => 'Distinction Feature Cards',
                        'name'       => 'cards',
                        'type'       => 'repeater',
                        'layout'     => 'block',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_dist_card_icon',
                                'label'         => 'Card Icon (Upload / Select from Media)',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'url',
                                'preview_size'  => 'thumbnail',
                                'library'       => 'all',
                            ),
                            array(
                                'key'   => 'field_dist_card_title',
                                'label' => 'Card Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_dist_card_desc',
                                'label' => 'Card Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 3,
                            ),
                            array(
                                'key'   => 'field_dist_card_badge',
                                'label' => 'Bottom Badge / Pill Text',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: ACCOMMODATIONS (ROOMS)
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_accommodations',
                'label' => 'Accommodations',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_accommodations_section',
                'label'      => 'Accommodations Section',
                'name'       => 'accommodations_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_accom_tag',
                        'label'         => 'Section Tag / Eyebrow',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_accom_title',
                        'label'         => 'Section Title',
                        'name'          => 'section_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_accom_desc',
                        'label'         => 'Section Description',
                        'name'          => 'section_description',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'        => 'field_accom_rooms',
                        'label'      => 'Room / Suite Cards',
                        'name'       => 'rooms',
                        'type'       => 'repeater',
                        'layout'     => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_room_tag',
                                'label' => 'Category Tag (e.g. EXECUTIVE SOLO)',
                                'name'  => 'tag',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_size',
                                'label' => 'Size (e.g. 380 SQ FT)',
                                'name'  => 'size',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_room_image',
                                'label'         => 'Room Image',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'url',
                                'preview_size'  => 'medium',
                                'library'       => 'all',
                            ),
                            array(
                                'key'   => 'field_room_title',
                                'label' => 'Room Name / Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_subtitle',
                                'label' => 'Room Subtitle (e.g. 1 King Bed · Single Corporate Guest)',
                                'name'  => 'subtitle',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_desc',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 3,
                            ),
                            array(
                                'key'        => 'field_room_features',
                                'label'      => 'Features / Inclusions',
                                'name'       => 'features',
                                'type'       => 'repeater',
                                'layout'     => 'table',
                                'sub_fields' => array(
                                    array(
                                        'key'           => 'field_room_feature_icon',
                                        'label'         => 'Feature Icon (Upload / Select from Media)',
                                        'name'          => 'icon',
                                        'type'          => 'image',
                                        'return_format' => 'url',
                                        'preview_size'  => 'thumbnail',
                                        'library'       => 'all',
                                    ),
                                    array(
                                        'key'   => 'field_room_feature_label',
                                        'label' => 'Feature Label',
                                        'name'  => 'label',
                                        'type'  => 'text',
                                    ),
                                ),
                            ),
                            array(
                                'key'   => 'field_room_price_night',
                                'label' => 'Nightly Price (e.g. INR 4,500)',
                                'name'  => 'price_night',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_price_month',
                                'label' => 'Monthly Price (e.g. Monthly: INR 68,000)',
                                'name'  => 'price_month',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_cta_text',
                                'label' => 'CTA Button Text',
                                'name'  => 'cta_text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_cta_url',
                                'label' => 'CTA URL',
                                'name'  => 'cta_url',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_strikethrough_price',
                                'label' => 'Modal Original / Strikethrough Price (e.g. INR 14,750)',
                                'name'  => 'strikethrough_price',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_modal_guests',
                                'label' => 'Modal Guest Capacity (e.g. Up to 6 Guests)',
                                'name'  => 'modal_guests',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_modal_bed_feature',
                                'label' => 'Modal Bed Highlight (e.g. 2 King En-Suites)',
                                'name'  => 'modal_bed_feature',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_room_modal_cancellation',
                                'label' => 'Modal Policy Highlight (e.g. Free Cancellation)',
                                'name'  => 'modal_cancellation',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key'           => 'field_bulk_banner_title',
                        'label'         => 'Bulk RFP Banner Title',
                        'name'          => 'bulk_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_bulk_banner_desc',
                        'label'         => 'Bulk RFP Banner Description',
                        'name'          => 'bulk_desc',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_bulk_btn1_text',
                        'label'         => 'Bulk Button 1 Text',
                        'name'          => 'bulk_btn1_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_bulk_btn1_url',
                        'label'         => 'Bulk Button 1 URL',
                        'name'          => 'bulk_btn1_url',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_bulk_btn2_text',
                        'label'         => 'Bulk Button 2 Text',
                        'name'          => 'bulk_btn2_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_bulk_btn2_url',
                        'label'         => 'Bulk Button 2 URL',
                        'name'          => 'bulk_btn2_url',
                        'type'          => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: CORPORATE MOBILITY DARK CTA
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_corporate_cta',
                'label' => 'Corporate Mobility Banner',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_corporate_cta_section',
                'label'      => 'Corporate Mobility CTA Section',
                'name'       => 'corporate_cta_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_corp_tag',
                        'label'         => 'Eyebrow Tag',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_corp_title',
                        'label'         => 'Heading Title',
                        'name'          => 'section_title',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_corp_desc',
                        'label'         => 'Description',
                        'name'          => 'section_description',
                        'type'          => 'textarea',
                        'rows'          => 3,
                    ),
                    array(
                        'key'        => 'field_corp_features',
                        'label'      => 'Checkmark Features',
                        'name'       => 'features',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_corp_feat_label',
                                'label' => 'Feature Label',
                                'name'  => 'label',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key'           => 'field_corp_btn1_text',
                        'label'         => 'Button 1 Text',
                        'name'          => 'btn1_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_corp_btn1_url',
                        'label'         => 'Button 1 URL',
                        'name'          => 'btn1_url',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_corp_btn2_text',
                        'label'         => 'Button 2 Text',
                        'name'          => 'btn2_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_corp_btn2_url',
                        'label'         => 'Button 2 URL',
                        'name'          => 'btn2_url',
                        'type'          => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: ABOUT SECTION
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about',
                'label' => 'About KNY',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_section',
                'label'      => 'About Section',
                'name'       => 'about_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_about_tag',
                        'label'         => 'Eyebrow Tag',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_about_title',
                        'label'         => 'Title',
                        'name'          => 'section_title',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_about_p1',
                        'label'         => 'Primary Paragraph',
                        'name'          => 'paragraph_1',
                        'type'          => 'textarea',
                        'rows'          => 3,
                    ),
                    array(
                        'key'           => 'field_about_p2',
                        'label'         => 'Secondary Paragraph',
                        'name'          => 'paragraph_2',
                        'type'          => 'textarea',
                        'rows'          => 4,
                    ),
                    array(
                        'key'           => 'field_about_btn_text',
                        'label'         => 'CTA Button Text',
                        'name'          => 'cta_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_about_btn_url',
                        'label'         => 'CTA Button URL',
                        'name'          => 'cta_url',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_about_image',
                        'label'         => 'About Residence Image',
                        'name'          => 'image',
                        'type'          => 'image',
                        'return_format' => 'url',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                    array(
                        'key'           => 'field_about_image_tag',
                        'label'         => 'Floating Location Tag on Image',
                        'name'          => 'image_tag',
                        'type'          => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: AMENITIES
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_amenities',
                'label' => 'Amenities',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_amenities_section',
                'label'      => 'Amenities Section',
                'name'       => 'amenities_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_amenities_tag',
                        'label'         => 'Eyebrow Tag',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_amenities_title',
                        'label'         => 'Title',
                        'name'          => 'section_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_amenities_desc',
                        'label'         => 'Description',
                        'name'          => 'section_description',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'        => 'field_amenities_circular',
                        'label'      => 'Featured Circular Amenities',
                        'name'       => 'circular_amenities',
                        'type'       => 'repeater',
                        'layout'     => 'block',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_circ_amen_image',
                                'label'         => 'Amenity Circular Image',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'url',
                                'preview_size'  => 'thumbnail',
                                'library'       => 'all',
                            ),
                            array(
                                'key'   => 'field_circ_amen_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_circ_amen_desc',
                                'label' => 'Description / Subtitle',
                                'name'  => 'description',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key'        => 'field_amenities_pills',
                        'label'      => 'Amenity Pill Badges',
                        'name'       => 'pill_amenities',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_pill_amen_icon',
                                'label'         => 'Amenity Icon (Upload / Select from Media)',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'url',
                                'preview_size'  => 'thumbnail',
                                'library'       => 'all',
                            ),
                            array(
                                'key'   => 'field_pill_amen_label',
                                'label' => 'Amenity Label',
                                'name'  => 'label',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: PROPERTY GLIMPSE / GALLERY
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_gallery',
                'label' => 'Property Glimpse',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_gallery_section',
                'label'      => 'Property Glimpse Section',
                'name'       => 'gallery_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_gallery_tag',
                        'label'         => 'Eyebrow Tag',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_gallery_title',
                        'label'         => 'Title',
                        'name'          => 'section_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_gallery_featured_tag',
                        'label'         => 'Featured Card Tag',
                        'name'          => 'featured_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_gallery_featured_title',
                        'label'         => 'Featured Card Title',
                        'name'          => 'featured_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_gallery_featured_image',
                        'label'         => 'Featured Living Hall Image',
                        'name'          => 'featured_image',
                        'type'          => 'image',
                        'return_format' => 'url',
                        'preview_size'  => 'medium',
                        'library'       => 'all',
                    ),
                    array(
                        'key'           => 'field_gallery_featured_caption_title',
                        'label'         => 'Featured Overlay Title',
                        'name'          => 'featured_caption_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_gallery_featured_caption_desc',
                        'label'         => 'Featured Overlay Subtitle',
                        'name'          => 'featured_caption_desc',
                        'type'          => 'text',
                    ),
                    array(
                        'key'        => 'field_gallery_grid',
                        'label'      => 'Gallery Side Grid (2x2)',
                        'name'       => 'grid_items',
                        'type'       => 'repeater',
                        'layout'     => 'block',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_grid_tag',
                                'label'         => 'Tag (e.g. PROPERTY FEATURES)',
                                'name'          => 'tag',
                                'type'          => 'text',
                            ),
                            array(
                                'key'   => 'field_grid_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_grid_image',
                                'label'         => 'Feature Image',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'url',
                                'preview_size'  => 'medium',
                                'library'       => 'all',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: VERIFIED REVIEWS
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_reviews',
                'label' => 'Verified Reviews',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_reviews_section',
                'label'      => 'Reviews Section',
                'name'       => 'reviews_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_reviews_tag',
                        'label'         => 'Eyebrow Tag',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_reviews_title',
                        'label'         => 'Title',
                        'name'          => 'section_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_reviews_rating_score',
                        'label'         => 'Rating Score',
                        'name'          => 'rating_score',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_reviews_rating_sub',
                        'label'         => 'Rating Subtitle',
                        'name'          => 'rating_sub',
                        'type'          => 'text',
                    ),
                    array(
                        'key'        => 'field_reviews_cards',
                        'label'      => 'Review Cards',
                        'name'       => 'reviews',
                        'type'       => 'repeater',
                        'layout'     => 'block',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_rev_title',
                                'label' => 'Review Headline',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_rev_body',
                                'label' => 'Review Content',
                                'name'  => 'body',
                                'type'  => 'textarea',
                                'rows'  => 4,
                            ),
                            array(
                                'key'   => 'field_rev_author',
                                'label' => 'Author Name',
                                'name'  => 'author',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_rev_role',
                                'label' => 'Author Role / Company',
                                'name'  => 'role',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_rev_avatar',
                                'label' => 'Avatar Initials (e.g. D, BJ, DK)',
                                'name'  => 'avatar',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_rev_badge',
                                'label' => 'Badge Text (e.g. VERIFIED STAY)',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key'           => 'field_reviews_trust_strip_title',
                        'label'         => 'Trust Strip Title',
                        'name'          => 'trust_strip_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'        => 'field_reviews_partners',
                        'label'      => 'Trust Partner Organization Badges',
                        'name'       => 'partners',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_partner_name',
                                'label' => 'Partner Name',
                                'name'  => 'name',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: LOCATION
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_location',
                'label' => 'Location',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_location_section',
                'label'      => 'Location Section',
                'name'       => 'location_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_loc_tag',
                        'label'         => 'Eyebrow Tag',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_loc_title',
                        'label'         => 'Title',
                        'name'          => 'section_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_loc_desc',
                        'label'         => 'Description',
                        'name'          => 'section_description',
                        'type'          => 'textarea',
                        'rows'          => 3,
                    ),
                    array(
                        'key'        => 'field_loc_distances',
                        'label'      => 'Key Destinations & Commute Times',
                        'name'       => 'distances',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_dest_title',
                                'label' => 'Destination Name',
                                'name'  => 'destination',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_dest_time',
                                'label' => 'Commute Time (e.g. 2 Mins Walk)',
                                'name'  => 'time',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key'           => 'field_loc_btn_text',
                        'label'         => 'Maps Button Text',
                        'name'          => 'btn_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_loc_btn_url',
                        'label'         => 'Maps Button URL',
                        'name'          => 'btn_url',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_loc_card_name',
                        'label'         => 'Map Card Property Name',
                        'name'          => 'card_name',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_loc_card_address',
                        'label'         => 'Map Card Address',
                        'name'          => 'card_address',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_loc_card_phone',
                        'label'         => 'Map Card Phone Label',
                        'name'          => 'card_phone',
                        'type'          => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: ASSISTANCE FLOATING BANNER
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_assistance',
                'label' => 'Assistance Banner',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_assistance_section',
                'label'      => 'Assistance Floating Banner',
                'name'       => 'assistance_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_assist_tag',
                        'label'         => 'Tag',
                        'name'          => 'section_tag',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_assist_title',
                        'label'         => 'Title',
                        'name'          => 'section_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_assist_desc',
                        'label'         => 'Description',
                        'name'          => 'section_description',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_assist_btn1_text',
                        'label'         => 'Button 1 Text',
                        'name'          => 'btn1_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_assist_btn1_url',
                        'label'         => 'Button 1 URL',
                        'name'          => 'btn1_url',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_assist_btn2_text',
                        'label'         => 'Button 2 Text',
                        'name'          => 'btn2_text',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_assist_btn2_url',
                        'label'         => 'Button 2 URL',
                        'name'          => 'btn2_url',
                        'type'          => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB: FOOTER & GLOBAL
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_footer',
                'label' => 'Footer Info',
                'name'  => '',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_footer_section',
                'label'      => 'Footer Details',
                'name'       => 'footer_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_foot_tagline',
                        'label'         => 'Brand Description / Tagline',
                        'name'          => 'tagline',
                        'type'          => 'textarea',
                        'rows'          => 3,
                    ),
                    array(
                        'key'           => 'field_foot_address',
                        'label'         => 'Full Address',
                        'name'          => 'address',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_foot_phone',
                        'label'         => 'Phone Number',
                        'name'          => 'phone',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_foot_email',
                        'label'         => 'Email Address',
                        'name'          => 'email',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_foot_newsletter_title',
                        'label'         => 'Newsletter Title',
                        'name'          => 'newsletter_title',
                        'type'          => 'text',
                    ),
                    array(
                        'key'           => 'field_foot_newsletter_desc',
                        'label'         => 'Newsletter Description',
                        'name'          => 'newsletter_desc',
                        'type'          => 'textarea',
                        'rows'          => 2,
                    ),
                    array(
                        'key'           => 'field_foot_copyright',
                        'label'         => 'Copyright Notice',
                        'name'          => 'copyright',
                        'type'          => 'text',
                    ),
                ),
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page_type',
                    'operator' => '==',
                    'value'    => 'front_page',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // CONTACT PAGE SECTIONS FIELD GROUP
    // =========================================================================
    acf_add_local_field_group( array(
        'key'                   => 'group_kny_contact_page',
        'title'                 => 'Contact Page Sections Data',
        'fields'                => array(

            // -----------------------------------------------------------------
            // TAB 1: HERO & CONTACT FORM
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_form',
                'label' => 'Hero & Contact Form',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_form_section',
                'label'      => 'Hero & Contact Form Section',
                'name'       => 'contact_form_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_contact_hero_title',
                        'label' => 'Hero Page Title',
                        'name'  => 'hero_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_hero_desc',
                        'label' => 'Hero Description',
                        'name'  => 'hero_description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_contact_form_title',
                        'label' => 'Form Box Title',
                        'name'  => 'form_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_form_sub',
                        'label' => 'Form Box Subtitle',
                        'name'  => 'form_subtitle',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_stay_types_lbl',
                        'label' => 'Stay Types Field Label',
                        'name'  => 'stay_types_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'        => 'field_contact_stay_types',
                        'label'      => 'Stay Type Options (Pills)',
                        'name'       => 'stay_types',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_stay_type_name',
                                'label' => 'Option Label',
                                'name'  => 'name',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_stay_type_active',
                                'label' => 'Selected / Active by Default',
                                'name'  => 'is_active',
                                'type'  => 'true_false',
                            ),
                        ),
                    ),
                    array(
                        'key'   => 'field_contact_name_lbl',
                        'label' => 'Full Name Label',
                        'name'  => 'name_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_name_ph',
                        'label' => 'Full Name Placeholder',
                        'name'  => 'name_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_lbl',
                        'label' => 'Email Address Label',
                        'name'  => 'email_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_ph',
                        'label' => 'Email Address Placeholder',
                        'name'  => 'email_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_lbl',
                        'label' => 'Phone Number Label',
                        'name'  => 'phone_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_pfx',
                        'label' => 'Phone Prefix (e.g. +91)',
                        'name'  => 'phone_prefix',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_ph',
                        'label' => 'Phone Placeholder',
                        'name'  => 'phone_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_lbl',
                        'label' => 'Message Field Label',
                        'name'  => 'message_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_hint',
                        'label' => 'Message Field Right Hint',
                        'name'  => 'message_hint',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_ph',
                        'label' => 'Message Textarea Placeholder',
                        'name'  => 'message_placeholder',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_contact_submit_btn',
                        'label' => 'Submit Button Text',
                        'name'  => 'submit_btn_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_contact_sla_icon',
                        'label'         => 'SLA Indicator Icon (Clock)',
                        'name'          => 'sla_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_contact_sla_text',
                        'label' => 'SLA Indicator Text',
                        'name'  => 'sla_text',
                        'type'  => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 2: DIRECT INFO & LOCATIONS CARDS
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_cards',
                'label' => 'Direct Info & Location Cards',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_cards_section',
                'label'      => 'Direct Info & Location Cards Section',
                'name'       => 'contact_cards_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    // Email Desks Card Subgroup
                    array(
                        'key'   => 'field_contact_email_tag',
                        'label' => 'Email Desks Tag',
                        'name'  => 'email_desks_tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_title',
                        'label' => 'Email Desks Title',
                        'name'  => 'email_desks_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_contact_email_icon',
                        'label'         => 'Email Desks Icon',
                        'name'          => 'email_desks_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'        => 'field_contact_email_desks',
                        'label'      => 'Email Desks List',
                        'name'       => 'email_desks',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_desk_lbl',
                                'label' => 'Desk Label',
                                'name'  => 'label',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_desk_email',
                                'label' => 'Email Address',
                                'name'  => 'email',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_desk_badge',
                                'label' => 'Badge Text (e.g. 15 min SLA / Priority)',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                            array(
                                'key'     => 'field_contact_desk_style',
                                'label'   => 'Badge Style',
                                'name'    => 'badge_style',
                                'type'    => 'select',
                                'choices' => array(
                                    'default'  => 'Default Gray',
                                    'priority' => 'Priority Lime Green',
                                ),
                            ),
                        ),
                    ),

                    // Location Cards Repeater
                    array(
                        'key'        => 'field_contact_locations',
                        'label'      => 'Residence Location Cards',
                        'name'       => 'locations',
                        'type'       => 'repeater',
                        'layout'     => 'row',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_loc_tag',
                                'label' => 'City / Territory Tag',
                                'name'  => 'tag',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_badge',
                                'label' => 'Sub-locality Badge (e.g. Kondapur / HITECH)',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_icon',
                                'label'         => 'Location Pin Icon',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_loc_title',
                                'label' => 'Apartment / Residence Name',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_address',
                                'label' => 'Address Text',
                                'name'  => 'address',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_vicinity',
                                'label' => 'Vicinity / Landmark Note',
                                'name'  => 'vicinity_note',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_map_img',
                                'label'         => 'Map Preview Image',
                                'name'          => 'map_image',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_loc_map_title',
                                'label' => 'Map Overlay Title',
                                'name'  => 'map_overlay_title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_map_sub',
                                'label' => 'Map Overlay Subtitle',
                                'name'  => 'map_overlay_subtitle',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_btn_text',
                                'label' => 'Map Button Text',
                                'name'  => 'map_btn_text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_btn_url',
                                'label' => 'Map Google Maps URL',
                                'name'  => 'map_btn_url',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_btn_icon',
                                'label'         => 'Map Button External Icon',
                                'name'          => 'map_btn_icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 3: FEATURE HIGHLIGHTS BAR
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_features',
                'label' => 'Feature Highlights Bar',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_features_section',
                'label'      => 'Feature Highlights Section',
                'name'       => 'contact_features_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'        => 'field_contact_features',
                        'label'      => 'Highlight Items',
                        'name'       => 'features',
                        'type'       => 'repeater',
                        'layout'     => 'row',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_contact_feat_icon',
                                'label'         => 'Icon',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_feat_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_feat_desc',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 2,
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 4: WALKTHROUGH BANNER
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_walkthrough',
                'label' => 'Walkthrough Banner',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_walkthrough_section',
                'label'      => 'Walkthrough Banner Section',
                'name'       => 'contact_walkthrough_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_contact_walk_bg',
                        'label'         => 'Background Image (1272x224)',
                        'name'          => 'background_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_contact_walk_tag',
                        'label' => 'Eyebrow Tag',
                        'name'  => 'tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_walk_title',
                        'label' => 'Banner Heading',
                        'name'  => 'title',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'   => 'field_contact_walk_url',
                        'label' => 'Target Link / Modal ID',
                        'name'  => 'button_url',
                        'type'  => 'text',
                    ),
                ),
            ),

        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-contact.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => '12',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );


    // Register Common Site Settings (Header & Footer) Field Group for Options Page
    if (function_exists('acf_add_options_page')) {
        acf_add_local_field_group( array(
            'key'                   => 'group_kny_common_settings',
            'title'                 => 'Global Theme Settings (Header & Footer)',
            'fields'                => array(
                // Header Tab
                array(
                    'key'   => 'field_tab_common_header',
                    'label' => 'Header Settings',
                    'type'  => 'tab',
                ),
                array(
                    'key'           => 'field_common_header_logo',
                    'label'         => 'Site Logo (Upload / Select from Media)',
                    'name'          => 'header_logo',
                    'type'          => 'image',
                    'return_format' => 'url',
                    'preview_size'  => 'medium',
                    'library'       => 'all',
                ),
                array(
                    'key'           => 'field_common_header_phone',
                    'label'         => 'Header Phone Number',
                    'name'          => 'header_phone',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_common_header_book_text',
                    'label'         => 'Book Button Text',
                    'name'          => 'header_book_text',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_common_header_book_url',
                    'label'         => 'Book Button URL',
                    'name'          => 'header_book_url',
                    'type'          => 'text',
                ),

                // Footer Tab
                array(
                    'key'   => 'field_tab_common_footer',
                    'label' => 'Footer Settings',
                    'type'  => 'tab',
                ),
                array(
                    'key'           => 'field_common_footer_logo',
                    'label'         => 'Footer Logo (Upload / Select from Media)',
                    'name'          => 'footer_logo',
                    'type'          => 'image',
                    'return_format' => 'url',
                    'preview_size'  => 'medium',
                    'library'       => 'all',
                ),
                array(
                    'key'           => 'field_common_footer_tagline',
                    'label'         => 'Footer Brand Tagline',
                    'name'          => 'footer_tagline',
                    'type'          => 'textarea',
                    'rows'          => 3,
                ),
                array(
                    'key'           => 'field_common_footer_address',
                    'label'         => 'Physical Address',
                    'name'          => 'footer_address',
                    'type'          => 'textarea',
                    'rows'          => 2,
                ),
                array(
                    'key'           => 'field_common_footer_phone',
                    'label'         => 'Contact Phone',
                    'name'          => 'footer_phone',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_common_footer_email',
                    'label'         => 'Reservation Email',
                    'name'          => 'footer_email',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_common_whatsapp_number',
                    'label'         => 'WhatsApp Float Number',
                    'name'          => 'whatsapp_number',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_common_footer_copyright',
                    'label'         => 'Copyright Notice',
                    'name'          => 'footer_copyright',
                    'type'          => 'text',
                ),
                // Booking Modal Settings Tab
                array(
                    'key'   => 'field_tab_booking_modal',
                    'label' => 'Booking Modal Settings',
                    'type'  => 'tab',
                ),
                array(
                    'key'           => 'field_modal_badge_tag',
                    'label'         => 'Modal Eyebrow Tag',
                    'name'          => 'modal_badge_tag',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_modal_subtitle',
                    'label'         => 'Modal Description / Guarantee',
                    'name'          => 'modal_subtitle',
                    'type'          => 'textarea',
                    'rows'          => 2,
                ),
                array(
                    'key'           => 'field_modal_submit_text',
                    'label'         => 'Modal Submit Button Text',
                    'name'          => 'modal_submit_text',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_modal_call_label',
                    'label'         => 'Modal Phone Call Label',
                    'name'          => 'modal_call_label',
                    'type'          => 'text',
                ),
                array(
                    'key'           => 'field_modal_sla_badge',
                    'label'         => 'Modal SLA Badge Text',
                    'name'          => 'modal_sla_badge',
                    'type'          => 'text',
                ),
            ),
            'location'              => array(
                array(
                    array(
                        'param'    => 'options_page',
                        'operator' => '==',
                        'value'    => 'kny-theme-settings',
                    ),
                ),
            ),
            'menu_order'            => 1,
            'position'              => 'normal',
            'style'                 => 'default',
            'active'                => true,
        ) );
    }

    // =========================================================================
    // ABOUT PAGE SECTIONS FIELD GROUP
    // =========================================================================
    acf_add_local_field_group( array(
        'key'                   => 'group_kny_about_page',
        'title'                 => 'About Page Sections Data',
        'fields'                => array(

            // -----------------------------------------------------------------
            // TAB 1: ABOUT HERO
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about_hero',
                'label' => 'About Hero',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_hero',
                'label'      => 'About Hero Section',
                'name'       => 'about_hero',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_about_hero_badge',
                        'label' => 'Eyebrow Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_hero_title',
                        'label' => 'Page Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_hero_desc',
                        'label' => 'Description Paragraph',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'           => 'field_about_hero_image',
                        'label'         => 'Hero Image (Upload / Select from Media)',
                        'name'          => 'hero_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                        'preview_size'  => 'medium',
                    ),
                    array(
                        'key'           => 'field_about_hero_top_badge_icon',
                        'label'         => 'Top Badge Icon',
                        'name'          => 'top_badge_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_hero_top_badge_text',
                        'label' => 'Top Badge Text',
                        'name'  => 'top_badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_hero_overlay_tag',
                        'label' => 'Bottom Overlay Tag',
                        'name'  => 'overlay_tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_hero_overlay_title',
                        'label' => 'Bottom Overlay Title',
                        'name'  => 'overlay_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_about_hero_neighborhood_icon',
                        'label'         => 'Neighborhood Icon',
                        'name'          => 'neighborhood_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_hero_neighborhood_tag',
                        'label' => 'Neighborhood Label',
                        'name'  => 'neighborhood_tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_hero_neighborhood_text',
                        'label' => 'Neighborhood Location Text',
                        'name'  => 'neighborhood_text',
                        'type'  => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 2: ROOM TO LIVE & STATS
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about_stats',
                'label' => 'Room to Live & Stats',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_stats',
                'label'      => 'Room to Live & Scale Section',
                'name'       => 'about_stats',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_about_stats_badge',
                        'label' => 'Eyebrow Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_stats_title',
                        'label' => 'Main Heading (Supports <br/>)',
                        'name'  => 'title',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'   => 'field_about_stats_p1',
                        'label' => 'Paragraph 1',
                        'name'  => 'para_1',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_about_stats_p2',
                        'label' => 'Paragraph 2',
                        'name'  => 'para_2',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_about_stats_cta_text',
                        'label' => 'CTA Button Text',
                        'name'  => 'cta_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_stats_cta_url',
                        'label' => 'CTA Button URL',
                        'name'  => 'cta_url',
                        'type'  => 'text',
                    ),
                    array(
                        'key'        => 'field_about_stats_repeater',
                        'label'      => 'Stat Cards',
                        'name'       => 'stats',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_about_stat_label',
                                'label' => 'Label',
                                'name'  => 'label',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_about_stat_value',
                                'label' => 'Value',
                                'name'  => 'value',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_about_stat_desc',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 2,
                            ),
                        ),
                    ),
                    array(
                        'key'           => 'field_about_stats_prod_icon',
                        'label'         => 'Productivity Banner Icon',
                        'name'          => 'productivity_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_stats_prod_title',
                        'label' => 'Productivity Banner Title',
                        'name'  => 'productivity_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_stats_prod_desc',
                        'label' => 'Productivity Banner Description',
                        'name'  => 'productivity_desc',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 3: EVERYDAY AMENITIES
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about_amenities',
                'label' => 'Everyday Amenities',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_amenities',
                'label'      => 'Everyday Amenities Section',
                'name'       => 'about_amenities',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_about_amen_badge',
                        'label' => 'Eyebrow Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_amen_title',
                        'label' => 'Section Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_amen_desc',
                        'label' => 'Section Subtitle',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'        => 'field_about_amen_items',
                        'label'      => 'Amenity Cards',
                        'name'       => 'amenities',
                        'type'       => 'repeater',
                        'layout'     => 'row',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_about_amen_item_img',
                                'label'         => 'Amenity Photo',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_about_amen_item_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_about_amen_item_desc',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 3,
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 4: AT HOME IN HYDERABAD (LOCATION & COMMUTES)
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about_location',
                'label' => 'At Home in Hyderabad',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_location',
                'label'      => 'Location & Commutes Section',
                'name'       => 'about_location',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_about_loc_badge',
                        'label' => 'Eyebrow Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_loc_title',
                        'label' => 'Heading',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_loc_desc',
                        'label' => 'Description',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'           => 'field_about_loc_building_img',
                        'label'         => 'Building Exterior Image',
                        'name'          => 'building_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_loc_pos_tag',
                        'label' => 'Overlay Tag',
                        'name'  => 'positioning_tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_loc_pos_title',
                        'label' => 'Overlay Title / Address',
                        'name'  => 'positioning_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'        => 'field_about_loc_commutes',
                        'label'      => 'Commute Destinations',
                        'name'       => 'commutes',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_about_commute_icon',
                                'label'         => 'Icon',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_about_commute_title',
                                'label' => 'Destination Name',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_about_commute_subtitle',
                                'label' => 'Destination Subtitle',
                                'name'  => 'subtitle',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_about_commute_time',
                                'label' => 'Commute Time',
                                'name'  => 'time',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                    array(
                        'key'           => 'field_about_loc_doorstep_icon',
                        'label'         => 'Doorstep Note Icon',
                        'name'          => 'doorstep_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_loc_doorstep_text',
                        'label' => 'Doorstep Note Text',
                        'name'  => 'doorstep_text',
                        'type'  => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 5: PHOTO GALLERY PREVIEW
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about_gallery',
                'label' => 'Photo Gallery Preview',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_gallery',
                'label'      => 'Photo Gallery Section',
                'name'       => 'about_gallery',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_about_gal_badge',
                        'label' => 'Eyebrow Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_gal_title',
                        'label' => 'Section Title',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_gal_desc',
                        'label' => 'Section Subtitle',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'   => 'field_about_gal_cta_text',
                        'label' => 'Explore Button Text',
                        'name'  => 'cta_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_gal_cta_url',
                        'label' => 'Explore Button URL',
                        'name'  => 'cta_url',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_about_gal_card1_img',
                        'label'         => 'Showcase Card 1 Image',
                        'name'          => 'card_1_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_gal_card1_title',
                        'label' => 'Showcase Card 1 Title',
                        'name'  => 'card_1_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_gal_card1_sub',
                        'label' => 'Showcase Card 1 Subtitle',
                        'name'  => 'card_1_subtitle',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_about_gal_card2_img',
                        'label'         => 'Showcase Card 2 Image',
                        'name'          => 'card_2_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_gal_card2_title',
                        'label' => 'Showcase Card 2 Title',
                        'name'  => 'card_2_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_gal_card2_sub',
                        'label' => 'Showcase Card 2 Subtitle',
                        'name'  => 'card_2_subtitle',
                        'type'  => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 6: PLAN YOUR STAY (GREEN BANNER)
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about_cta_banner',
                'label' => 'Plan Your Stay Banner',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_cta_banner',
                'label'      => 'Plan Your Stay Banner Section',
                'name'       => 'about_cta_banner',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_about_cta_badge',
                        'label' => 'Eyebrow Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_cta_title',
                        'label' => 'Heading',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_cta_desc',
                        'label' => 'Description Subtitle',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_about_cta_btn_text',
                        'label' => 'Button Text',
                        'name'  => 'button_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_cta_btn_url',
                        'label' => 'Button URL',
                        'name'  => 'button_url',
                        'type'  => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 7: STAY INFORMED (NEWSLETTER)
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_about_newsletter',
                'label' => 'Stay Informed Newsletter',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_about_newsletter',
                'label'      => 'Newsletter Subscription Section',
                'name'       => 'about_newsletter',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_about_news_badge',
                        'label' => 'Eyebrow Badge Text',
                        'name'  => 'badge_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_news_title',
                        'label' => 'Heading',
                        'name'  => 'title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_news_desc',
                        'label' => 'Description Subtitle',
                        'name'  => 'description',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'           => 'field_about_news_icon',
                        'label'         => 'Input Icon (Mail)',
                        'name'          => 'icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_about_news_placeholder',
                        'label' => 'Input Placeholder',
                        'name'  => 'input_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_about_news_btn_text',
                        'label' => 'Button Text',
                        'name'  => 'button_text',
                        'type'  => 'text',
                    ),
                ),
            ),

        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-about.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => '7',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // CONTACT PAGE SECTIONS FIELD GROUP
    // =========================================================================
    acf_add_local_field_group( array(
        'key'                   => 'group_kny_contact_page',
        'title'                 => 'Contact Page Sections Data',
        'fields'                => array(

            // -----------------------------------------------------------------
            // TAB 1: HERO & CONTACT FORM
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_form',
                'label' => 'Hero & Contact Form',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_form_section',
                'label'      => 'Hero & Contact Form Section',
                'name'       => 'contact_form_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_contact_hero_title',
                        'label' => 'Hero Page Title',
                        'name'  => 'hero_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_hero_desc',
                        'label' => 'Hero Description',
                        'name'  => 'hero_description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_contact_form_title',
                        'label' => 'Form Box Title',
                        'name'  => 'form_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_form_sub',
                        'label' => 'Form Box Subtitle',
                        'name'  => 'form_subtitle',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_stay_types_lbl',
                        'label' => 'Stay Types Field Label',
                        'name'  => 'stay_types_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'        => 'field_contact_stay_types',
                        'label'      => 'Stay Type Options (Pills)',
                        'name'       => 'stay_types',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_stay_type_name',
                                'label' => 'Option Label',
                                'name'  => 'name',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_stay_type_active',
                                'label' => 'Selected / Active by Default',
                                'name'  => 'is_active',
                                'type'  => 'true_false',
                            ),
                        ),
                    ),
                    array(
                        'key'   => 'field_contact_name_lbl',
                        'label' => 'Full Name Label',
                        'name'  => 'name_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_name_ph',
                        'label' => 'Full Name Placeholder',
                        'name'  => 'name_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_lbl',
                        'label' => 'Email Address Label',
                        'name'  => 'email_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_ph',
                        'label' => 'Email Address Placeholder',
                        'name'  => 'email_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_lbl',
                        'label' => 'Phone Number Label',
                        'name'  => 'phone_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_pfx',
                        'label' => 'Phone Prefix (e.g. +91)',
                        'name'  => 'phone_prefix',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_ph',
                        'label' => 'Phone Placeholder',
                        'name'  => 'phone_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_lbl',
                        'label' => 'Message Field Label',
                        'name'  => 'message_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_hint',
                        'label' => 'Message Field Right Hint',
                        'name'  => 'message_hint',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_ph',
                        'label' => 'Message Textarea Placeholder',
                        'name'  => 'message_placeholder',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_contact_submit_btn',
                        'label' => 'Submit Button Text',
                        'name'  => 'submit_btn_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_contact_sla_icon',
                        'label'         => 'SLA Indicator Icon (Clock)',
                        'name'          => 'sla_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_contact_sla_text',
                        'label' => 'SLA Indicator Text',
                        'name'  => 'sla_text',
                        'type'  => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 2: DIRECT INFO & LOCATIONS CARDS
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_cards',
                'label' => 'Direct Info & Location Cards',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_cards_section',
                'label'      => 'Direct Info & Location Cards Section',
                'name'       => 'contact_cards_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    // Email Desks Card Subgroup
                    array(
                        'key'   => 'field_contact_email_tag',
                        'label' => 'Email Desks Tag',
                        'name'  => 'email_desks_tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_title',
                        'label' => 'Email Desks Title',
                        'name'  => 'email_desks_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_contact_email_icon',
                        'label'         => 'Email Desks Icon',
                        'name'          => 'email_desks_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'        => 'field_contact_email_desks',
                        'label'      => 'Email Desks List',
                        'name'       => 'email_desks',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_desk_lbl',
                                'label' => 'Desk Label',
                                'name'  => 'label',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_desk_email',
                                'label' => 'Email Address',
                                'name'  => 'email',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_desk_badge',
                                'label' => 'Badge Text (e.g. 15 min SLA / Priority)',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                            array(
                                'key'     => 'field_contact_desk_style',
                                'label'   => 'Badge Style',
                                'name'    => 'badge_style',
                                'type'    => 'select',
                                'choices' => array(
                                    'default'  => 'Default Gray',
                                    'priority' => 'Priority Lime Green',
                                ),
                            ),
                        ),
                    ),

                    // Location Cards Repeater
                    array(
                        'key'        => 'field_contact_locations',
                        'label'      => 'Residence Location Cards',
                        'name'       => 'locations',
                        'type'       => 'repeater',
                        'layout'     => 'row',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_loc_tag',
                                'label' => 'City / Territory Tag',
                                'name'  => 'tag',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_badge',
                                'label' => 'Sub-locality Badge (e.g. Kondapur / HITECH)',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_icon',
                                'label'         => 'Location Pin Icon',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_loc_title',
                                'label' => 'Apartment / Residence Name',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_address',
                                'label' => 'Address Text',
                                'name'  => 'address',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_vicinity',
                                'label' => 'Vicinity / Landmark Note',
                                'name'  => 'vicinity_note',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_map_img',
                                'label'         => 'Map Preview Image',
                                'name'          => 'map_image',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_loc_map_title',
                                'label' => 'Map Overlay Title',
                                'name'  => 'map_overlay_title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_map_sub',
                                'label' => 'Map Overlay Subtitle',
                                'name'  => 'map_overlay_subtitle',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_btn_text',
                                'label' => 'Map Button Text',
                                'name'  => 'map_btn_text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_btn_url',
                                'label' => 'Map Google Maps URL',
                                'name'  => 'map_btn_url',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_btn_icon',
                                'label'         => 'Map Button External Icon',
                                'name'          => 'map_btn_icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 3: FEATURE HIGHLIGHTS BAR
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_features',
                'label' => 'Feature Highlights Bar',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_features_section',
                'label'      => 'Feature Highlights Section',
                'name'       => 'contact_features_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'        => 'field_contact_features',
                        'label'      => 'Highlight Items',
                        'name'       => 'features',
                        'type'       => 'repeater',
                        'layout'     => 'row',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_contact_feat_icon',
                                'label'         => 'Icon',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_feat_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_feat_desc',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 2,
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 4: WALKTHROUGH BANNER
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_walkthrough',
                'label' => 'Walkthrough Banner',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_walkthrough_section',
                'label'      => 'Walkthrough Banner Section',
                'name'       => 'contact_walkthrough_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_contact_walk_bg',
                        'label'         => 'Background Image (1272x224)',
                        'name'          => 'background_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_contact_walk_tag',
                        'label' => 'Eyebrow Tag',
                        'name'  => 'tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_walk_title',
                        'label' => 'Banner Heading',
                        'name'  => 'title',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'   => 'field_contact_walk_url',
                        'label' => 'Target Link / Modal ID',
                        'name'  => 'button_url',
                        'type'  => 'text',
                    ),
                ),
            ),

        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-contact.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => '12',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // CONTACT PAGE SECTIONS FIELD GROUP
    // =========================================================================
    acf_add_local_field_group( array(
        'key'                   => 'group_kny_contact_page',
        'title'                 => 'Contact Page Sections Data',
        'fields'                => array(

            // -----------------------------------------------------------------
            // TAB 1: HERO & CONTACT FORM
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_form',
                'label' => 'Hero & Contact Form',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_form_section',
                'label'      => 'Hero & Contact Form Section',
                'name'       => 'contact_form_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'   => 'field_contact_hero_title',
                        'label' => 'Hero Page Title',
                        'name'  => 'hero_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_hero_desc',
                        'label' => 'Hero Description',
                        'name'  => 'hero_description',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_contact_form_title',
                        'label' => 'Form Box Title',
                        'name'  => 'form_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_form_sub',
                        'label' => 'Form Box Subtitle',
                        'name'  => 'form_subtitle',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_stay_types_lbl',
                        'label' => 'Stay Types Field Label',
                        'name'  => 'stay_types_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'        => 'field_contact_stay_types',
                        'label'      => 'Stay Type Options (Pills)',
                        'name'       => 'stay_types',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_stay_type_name',
                                'label' => 'Option Label',
                                'name'  => 'name',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_stay_type_active',
                                'label' => 'Selected / Active by Default',
                                'name'  => 'is_active',
                                'type'  => 'true_false',
                            ),
                        ),
                    ),
                    array(
                        'key'   => 'field_contact_name_lbl',
                        'label' => 'Full Name Label',
                        'name'  => 'name_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_name_ph',
                        'label' => 'Full Name Placeholder',
                        'name'  => 'name_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_lbl',
                        'label' => 'Email Address Label',
                        'name'  => 'email_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_ph',
                        'label' => 'Email Address Placeholder',
                        'name'  => 'email_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_lbl',
                        'label' => 'Phone Number Label',
                        'name'  => 'phone_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_pfx',
                        'label' => 'Phone Prefix (e.g. +91)',
                        'name'  => 'phone_prefix',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_phone_ph',
                        'label' => 'Phone Placeholder',
                        'name'  => 'phone_placeholder',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_lbl',
                        'label' => 'Message Field Label',
                        'name'  => 'message_label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_hint',
                        'label' => 'Message Field Right Hint',
                        'name'  => 'message_hint',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_msg_ph',
                        'label' => 'Message Textarea Placeholder',
                        'name'  => 'message_placeholder',
                        'type'  => 'textarea',
                        'rows'  => 3,
                    ),
                    array(
                        'key'   => 'field_contact_submit_btn',
                        'label' => 'Submit Button Text',
                        'name'  => 'submit_btn_text',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_contact_sla_icon',
                        'label'         => 'SLA Indicator Icon (Clock)',
                        'name'          => 'sla_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_contact_sla_text',
                        'label' => 'SLA Indicator Text',
                        'name'  => 'sla_text',
                        'type'  => 'text',
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 2: DIRECT INFO & LOCATIONS CARDS
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_cards',
                'label' => 'Direct Info & Location Cards',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_cards_section',
                'label'      => 'Direct Info & Location Cards Section',
                'name'       => 'contact_cards_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    // Email Desks Card Subgroup
                    array(
                        'key'   => 'field_contact_email_tag',
                        'label' => 'Email Desks Tag',
                        'name'  => 'email_desks_tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_email_title',
                        'label' => 'Email Desks Title',
                        'name'  => 'email_desks_title',
                        'type'  => 'text',
                    ),
                    array(
                        'key'           => 'field_contact_email_icon',
                        'label'         => 'Email Desks Icon',
                        'name'          => 'email_desks_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'        => 'field_contact_email_desks',
                        'label'      => 'Email Desks List',
                        'name'       => 'email_desks',
                        'type'       => 'repeater',
                        'layout'     => 'table',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_desk_lbl',
                                'label' => 'Desk Label',
                                'name'  => 'label',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_desk_email',
                                'label' => 'Email Address',
                                'name'  => 'email',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_desk_badge',
                                'label' => 'Badge Text (e.g. 15 min SLA / Priority)',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                            array(
                                'key'     => 'field_contact_desk_style',
                                'label'   => 'Badge Style',
                                'name'    => 'badge_style',
                                'type'    => 'select',
                                'choices' => array(
                                    'default'  => 'Default Gray',
                                    'priority' => 'Priority Lime Green',
                                ),
                            ),
                        ),
                    ),

                    // Location Cards Repeater
                    array(
                        'key'        => 'field_contact_locations',
                        'label'      => 'Residence Location Cards',
                        'name'       => 'locations',
                        'type'       => 'repeater',
                        'layout'     => 'row',
                        'sub_fields' => array(
                            array(
                                'key'   => 'field_contact_loc_tag',
                                'label' => 'City / Territory Tag',
                                'name'  => 'tag',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_badge',
                                'label' => 'Sub-locality Badge (e.g. Kondapur / HITECH)',
                                'name'  => 'badge',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_icon',
                                'label'         => 'Location Pin Icon',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_loc_title',
                                'label' => 'Apartment / Residence Name',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_address',
                                'label' => 'Address Text',
                                'name'  => 'address',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_vicinity',
                                'label' => 'Vicinity / Landmark Note',
                                'name'  => 'vicinity_note',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_map_img',
                                'label'         => 'Map Preview Image',
                                'name'          => 'map_image',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_loc_map_title',
                                'label' => 'Map Overlay Title',
                                'name'  => 'map_overlay_title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_map_sub',
                                'label' => 'Map Overlay Subtitle',
                                'name'  => 'map_overlay_subtitle',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_btn_text',
                                'label' => 'Map Button Text',
                                'name'  => 'map_btn_text',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_loc_btn_url',
                                'label' => 'Map Google Maps URL',
                                'name'  => 'map_btn_url',
                                'type'  => 'text',
                            ),
                            array(
                                'key'           => 'field_contact_loc_btn_icon',
                                'label'         => 'Map Button External Icon',
                                'name'          => 'map_btn_icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 3: FEATURE HIGHLIGHTS BAR
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_features',
                'label' => 'Feature Highlights Bar',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_features_section',
                'label'      => 'Feature Highlights Section',
                'name'       => 'contact_features_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'        => 'field_contact_features',
                        'label'      => 'Highlight Items',
                        'name'       => 'features',
                        'type'       => 'repeater',
                        'layout'     => 'row',
                        'sub_fields' => array(
                            array(
                                'key'           => 'field_contact_feat_icon',
                                'label'         => 'Icon',
                                'name'          => 'icon',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_contact_feat_title',
                                'label' => 'Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_contact_feat_desc',
                                'label' => 'Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 2,
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 4: WALKTHROUGH BANNER
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_contact_walkthrough',
                'label' => 'Walkthrough Banner',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_contact_walkthrough_section',
                'label'      => 'Walkthrough Banner Section',
                'name'       => 'contact_walkthrough_section',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_contact_walk_bg',
                        'label'         => 'Background Image (1272x224)',
                        'name'          => 'background_image',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'   => 'field_contact_walk_tag',
                        'label' => 'Eyebrow Tag',
                        'name'  => 'tag',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_contact_walk_title',
                        'label' => 'Banner Heading',
                        'name'  => 'title',
                        'type'  => 'textarea',
                        'rows'  => 2,
                    ),
                    array(
                        'key'   => 'field_contact_walk_url',
                        'label' => 'Target Link / Modal ID',
                        'name'  => 'button_url',
                        'type'  => 'text',
                    ),
                ),
            ),

        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-contact.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => '12',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );

    // =========================================================================
    // GALLERY PAGE SECTIONS FIELD GROUP
    // =========================================================================
    acf_add_local_field_group( array(
        'key'                   => 'group_kny_gallery_page',
        'title'                 => 'Gallery Page Sections Data',
        'fields'                => array(

            // -----------------------------------------------------------------
            // TAB 1: HERO & FILTERS
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_gallery_hero',
                'label' => 'Hero & Category Filters',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_gallery_hero_section',
                'label'      => 'Hero & Category Filters Section',
                'name'       => 'gallery_hero_section',
                'type'       => 'group',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_gal_hero_eyebrow',
                        'label'         => 'Hero Eyebrow',
                        'name'          => 'eyebrow',
                        'type'          => 'text',
                        'default_value' => 'VISUAL ARCHIVE & RESIDENCES',
                    ),
                    array(
                        'key'           => 'field_gal_hero_title',
                        'label'         => 'Hero Title',
                        'name'          => 'title',
                        'type'          => 'text',
                        'default_value' => 'Inside Our Sanctuary — Spaces & Suites',
                    ),
                    array(
                        'key'          => 'field_gal_hero_filters',
                        'label'        => 'Category Filter Pills',
                        'name'         => 'filters',
                        'type'         => 'repeater',
                        'layout'       => 'table',
                        'button_label' => 'Add Filter Pill',
                        'sub_fields'   => array(
                            array(
                                'key'   => 'field_gal_filter_name',
                                'label' => 'Pill Label',
                                'name'  => 'name',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_gal_filter_slug',
                                'label' => 'Category Slug',
                                'name'  => 'slug',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_gal_filter_active',
                                'label' => 'Active by Default?',
                                'name'  => 'is_active',
                                'type'  => 'true_false',
                            ),
                        ),
                    ),
                ),
            ),

            // -----------------------------------------------------------------
            // TAB 2: GALLERY GRID
            // -----------------------------------------------------------------
            array(
                'key'   => 'field_tab_gallery_grid',
                'label' => 'Residence Gallery Grid',
                'type'  => 'tab',
            ),
            array(
                'key'        => 'field_gallery_grid_section',
                'label'      => 'Gallery Grid Section',
                'name'       => 'gallery_grid_section',
                'type'       => 'group',
                'sub_fields' => array(
                    array(
                        'key'           => 'field_gal_grid_eyebrow',
                        'label'         => 'Section Eyebrow',
                        'name'          => 'eyebrow',
                        'type'          => 'text',
                        'default_value' => 'HIGH-RESOLUTION RESIDENCE GALLERY',
                    ),
                    array(
                        'key'           => 'field_gal_grid_title',
                        'label'         => 'Section Title',
                        'name'          => 'title',
                        'type'          => 'text',
                        'default_value' => 'Explore HITEC City Spaces & Suites',
                    ),
                    array(
                        'key'           => 'field_gal_grid_hint_text',
                        'label'         => 'Hint Text',
                        'name'          => 'hint_text',
                        'type'          => 'text',
                        'default_value' => 'Click image to expand in studio view',
                    ),
                    array(
                        'key'           => 'field_gal_grid_hint_icon',
                        'label'         => 'Hint Icon',
                        'name'          => 'hint_icon',
                        'type'          => 'image',
                        'return_format' => 'id',
                    ),
                    array(
                        'key'          => 'field_gal_grid_items',
                        'label'        => 'Gallery Cards',
                        'name'         => 'gallery_items',
                        'type'         => 'repeater',
                        'layout'       => 'block',
                        'button_label' => 'Add Gallery Card',
                        'sub_fields'   => array(
                            array(
                                'key'           => 'field_gal_item_image',
                                'label'         => 'Image (448x360 or High Res)',
                                'name'          => 'image',
                                'type'          => 'image',
                                'return_format' => 'id',
                            ),
                            array(
                                'key'   => 'field_gal_item_cat_tag',
                                'label' => 'Category Tag (e.g. LIVING LOUNGE)',
                                'name'  => 'category_tag',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_gal_item_bhk_tag',
                                'label' => 'BHK Tag (e.g. 2 BHK / 3 BHK)',
                                'name'  => 'bhk_tag',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_gal_item_title',
                                'label' => 'Card Title',
                                'name'  => 'title',
                                'type'  => 'text',
                            ),
                            array(
                                'key'   => 'field_gal_item_desc',
                                'label' => 'Card Description',
                                'name'  => 'description',
                                'type'  => 'textarea',
                                'rows'  => 2,
                            ),
                            array(
                                'key'   => 'field_gal_item_slugs',
                                'label' => 'Filter Categories (Space-separated slugs)',
                                'name'  => 'filter_slugs',
                                'type'  => 'text',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-gallery.php',
                ),
            ),
            array(
                array(
                    'param'    => 'page',
                    'operator' => '==',
                    'value'    => '9',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'active'                => true,
    ) );
}

// Register Options Page in SCF / ACF
add_action( 'acf/init', 'kny_register_options_page' );
function kny_register_options_page() {
    if ( function_exists( 'acf_add_options_page' ) ) {
        acf_add_options_page( array(
            'page_title'    => 'Theme Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'kny-theme-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false,
            'icon_url'      => 'dashicons-admin-generic',
            'position'      => 60,
        ) );
    }
}

