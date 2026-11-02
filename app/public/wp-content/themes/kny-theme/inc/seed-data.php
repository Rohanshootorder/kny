<?php
/**
 * Auto-Seed Figma Data into SCF Fields for Homepage and All Inner Pages
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

function kny_seed_homepage_data($post_id = null)
{
    if (!$post_id) {
        $post_id = get_option('page_on_front');
    }

    if (!$post_id) {
        return;
    }

    // 1. HERO SECTION
    $hero_data = array(
        'badge_text' => 'HITEC CITY · FINANCIAL DISTRICT · KONDAPUR',
        'badge_subtext' => '| Prime Corporate Tech Corridor, Hyderabad',
        'section_title' => 'Executive Living, <span class="text-accent">Reimagined</span> in HITEC City',
        'section_description' => 'Fully serviced 2 & 3 BHK luxury residences crafted for Fortune 500 leadership, relocating expatriates, and high-impact project teams adjacent to Google, Microsoft, and Hyderabad’s premier financial hub.',
        'primary_btn_text' => 'Explore 2 & 3 BHK Suites',
        'primary_btn_url' => '#accommodations',
        'secondary_btn_text' => '+91 8043694577',
        'secondary_btn_url' => 'tel:+918043694577',
        'stats' => array(
            array('value' => '120+', 'label' => 'Suites Managed'),
            array('value' => '98.4%', 'label' => 'Corporate NPS'),
            array('value' => '24/7', 'label' => 'Resident Care'),
            array('value' => '0%', 'label' => 'Brokerage / Hassle'),
        ),
        'image_tag' => 'NEAR GOOGLE TECH CAMPUS',
        'card_title' => 'Temple Square Residence',
        'card_subtitle' => 'Sreebagh Colony, Kondapur · Google Adj.',
        'verified_badge' => 'VERIFIED',
        'whatsapp_label' => 'CHAT ON WHATSAPP',
        'whatsapp_number' => '918043694577',
    );
    if (function_exists('update_field')) {
        update_field('hero_section', $hero_data, $post_id);
    }

    // 2. DISTINCTION SECTION
    $distinction_data = array(
        'section_tag' => 'DESIGNED FOR MODERN ENTERPRISE MOBILITY',
        'section_title' => 'The Distinction Between A Transient Hotel And A True Residence',
        'section_description' => 'Providing Fortune 500 expatriates and leadership personnel with pristine autonomy, home-style comforts, and unyielding hotel hospitality.',
        'cards' => array(
            array(
                'tag' => 'EXPANSIVE RESIDENTIAL FLOOR PLANS',
                'title' => 'Separate Living, Dining & Rest Quadrants',
                'description' => 'Up to 2,100 sq. ft. of distinct living spaces with private bedrooms and quiet lounges — eliminating hotel room confinement during month-long assignments.',
                'icon' => 'Icon-38.svg',
            ),
            array(
                'tag' => 'CHEF-EQUIPPED RESIDENCE PANTRIES',
                'title' => 'Full Modular Kitchens & Dining',
                'description' => 'Equipped with induction hobs, refrigerators, microwave ovens, premium cookware, and filtered RO water systems for home-cooked wellness.',
                'icon' => 'Icon-39.svg',
            ),
            array(
                'tag' => 'CORPORATE GOVERNANCE & COMPLIANCE',
                'title' => '100% GST Invoicing & Vendor Onboarding',
                'description' => 'Simplified vendor onboarding, automated monthly billing cycles, and comprehensive GST invoicing tailored for corporate travel desks.',
                'icon' => 'Icon-36.svg',
            ),
        ),
    );
    if (function_exists('update_field')) {
        update_field('distinction_section', $distinction_data, $post_id);
    }

    // 3. ACCOMMODATIONS SECTION
    $accommodations_data = array(
        'section_tag' => 'CURATED SUITES & RESIDENCES',
        'section_title' => 'Accommodations Tailored for Business Transits',
        'section_description' => 'From minimalist high-performance executive suites to expansive 3 BHK penthouses, each residence combines full corporate compliance with luxury residential autonomy.',
        'rooms' => array(
            array(
                'tag' => 'EXECUTIVE SOLO',
                'size' => '380 SQ FT',
                'image' => 'room-premium-single.png',
                'title' => 'Premium Single Occupancy',
                'subtitle' => '1 King Bed · Single Corporate Guest',
                'description' => 'Ergonomically designed for visiting tech consultants and solo executives needing quiet luxury with an ergonomic workstation and private balcony view.',
                'features' => array(
                    array('icon' => 'Icon-32.svg', 'label' => 'Dedicated Workstation'),
                    array('icon' => 'Icon-31.svg', 'label' => 'En-suite Rain Shower'),
                    array('icon' => 'Icon-29.svg', 'label' => 'High-Speed Wi-Fi'),
                    array('icon' => 'Icon-28.svg', 'label' => 'Mini Pantry & Kettle'),
                ),
                'price_night' => 'INR 4,500',
                'price_month' => 'Monthly: INR 68,000',
                'cta_text' => 'Reserve',
                'cta_url' => '#contact',
            ),
            array(
                'tag' => 'DELUXE COMFORT',
                'size' => '340 SQ FT',
                'image' => 'room-deluxe-single.png',
                'title' => 'Deluxe Single Occupancy',
                'subtitle' => '1 Queen Bed · Solo Business Transit',
                'description' => 'Comfortable boutique room tailored for frequent short-stay corporate travel with cozy plush bedding, acoustic glass, and prompt daily room servicing.',
                'features' => array(
                    array('icon' => 'Icon-27.svg', 'label' => 'Queen Ortho Bed'),
                    array('icon' => 'Icon-31.svg', 'label' => 'Modern Glass Bath'),
                    array('icon' => 'Icon-29.svg', 'label' => 'Seamless Fiber Wi-Fi'),
                    array('icon' => 'Icon-26.svg', 'label' => 'Daily Housekeeping'),
                ),
                'price_night' => 'INR 3,800',
                'price_month' => 'Monthly: INR 58,000',
                'cta_text' => 'Reserve',
                'cta_url' => '#contact',
            ),
            array(
                'tag' => 'EXECUTIVE COUPLE',
                'size' => '480 SQ FT',
                'image' => 'room-premium-double.png',
                'title' => 'Premium Double Occupancy',
                'subtitle' => '1 King Bed or Twin · 2 Guests',
                'description' => 'Generously appointed layout designed for traveling pairs or colleagues. Includes twin/king custom bedding, spacious lounge chairs, and ambient lighting.',
                'features' => array(
                    array('icon' => 'Icon-27.svg', 'label' => 'King or Twin Beds'),
                    array('icon' => 'Icon-25.svg', 'label' => 'Lounge Sitting Area'),
                    array('icon' => 'Icon-24.svg', 'label' => '55" Smart 4K TV'),
                    array('icon' => 'Icon-28.svg', 'label' => 'Coffee Machine & Bar'),
                ),
                'price_night' => 'INR 5,500',
                'price_month' => 'Monthly: INR 78,000',
                'cta_text' => 'Reserve',
                'cta_url' => '#contact',
            ),
            array(
                'tag' => 'DELUXE TWIN',
                'size' => '420 SQ FT',
                'image' => 'room-deluxe-double.png',
                'title' => 'Deluxe Double Occupancy',
                'subtitle' => 'Twin Ortho Beds · 2 Corporate Guests',
                'description' => 'Ideal for project pairings and tech deployment engineers needing individual sleeping spaces, dedicated charging hubs, and ergonomic task lighting.',
                'features' => array(
                    array('icon' => 'Icon-27.svg', 'label' => 'Twin Single Beds'),
                    array('icon' => 'Icon-32.svg', 'label' => 'Dual Workstations'),
                    array('icon' => 'Icon-29.svg', 'label' => 'Dedicated Fiber Line'),
                    array('icon' => 'Icon-26.svg', 'label' => 'Daily Linen Service'),
                ),
                'price_night' => 'INR 4,800',
                'price_month' => 'Monthly: INR 72,000',
                'cta_text' => 'Reserve',
                'cta_url' => '#contact',
            ),
            array(
                'tag' => 'RESIDENTIAL SUITE',
                'size' => '850 SQ FT',
                'image' => 'room-1bhk.png',
                'title' => '1 BHK Serviced Apartment',
                'subtitle' => 'Master Bedroom · Private Living · Full Kitchen',
                'description' => 'A complete autonomous residential flat featuring a king bedroom, separate living room, fully equipped induction kitchen, dining nook, and washing machine.',
                'features' => array(
                    array('icon' => 'Icon-25.svg', 'label' => 'Separate Living Hall'),
                    array('icon' => 'Icon-23.svg', 'label' => 'Full Kitchen & Gas'),
                    array('icon' => 'Icon-22.svg', 'label' => 'Automatic Washer'),
                    array('icon' => 'Icon-21.svg', 'label' => 'Private Sit-out Balcony'),
                ),
                'price_night' => 'INR 7,200',
                'price_month' => 'Monthly: INR 95,000',
                'cta_text' => 'Reserve',
                'cta_url' => '#contact',
            ),
            array(
                'tag' => 'EXECUTIVE DUAL',
                'size' => '1,450 SQ FT',
                'image' => 'room-2bhk.png',
                'title' => '2 BHK Executive Apartment',
                'subtitle' => '2 Master En-Suites · Family or Team',
                'description' => 'Preferred choice for executive relocations and leadership pairs. Features dual en-suite bedrooms, full chef kitchen, expansive dining area, and dedicated fiber.',
                'features' => array(
                    array('icon' => 'Icon-27.svg', 'label' => '2 En-Suite Bedrooms'),
                    array('icon' => 'Icon-23.svg', 'label' => 'Modular Chef Kitchen'),
                    array('icon' => 'Icon-25.svg', 'label' => '6-Seater Dining Area'),
                    array('icon' => 'Icon-29.svg', 'label' => '1 Gbps Dedicated Fiber'),
                ),
                'price_night' => 'INR 12,500',
                'price_month' => 'Monthly: INR 1,45,000',
                'cta_text' => 'Reserve',
                'cta_url' => '#contact',
                'is_featured' => true,
            ),
            array(
                'tag' => 'PRESIDENTIAL PENTHOUSE',
                'size' => '2,100 SQ FT',
                'image' => 'room-3bhk.png',
                'title' => '3 BHK Presidential Residence',
                'subtitle' => '3 En-Suites · Executive Board & Families',
                'description' => 'Flagship luxury suite curated for visiting corporate leadership, board delegations, or expatriate families with panoramic balcony and 6-seater dining area.',
                'features' => array(
                    array('icon' => 'Icon-27.svg', 'label' => '3 En-Suite Bedrooms'),
                    array('icon' => 'Icon-23.svg', 'label' => 'Island Granite Kitchen'),
                    array('icon' => 'Icon-25.svg', 'label' => 'Panoramic Living Hall'),
                    array('icon' => 'Icon-20.svg', 'label' => 'Dedicated Concierge Desk'),
                ),
                'price_night' => 'INR 15,000',
                'price_month' => 'Monthly: INR 1,85,000',
                'cta_text' => 'Reserve',
                'cta_url' => '#contact',
            ),
        ),
        'banner_title' => 'Need Multiple Suites for Corporate Project Teams?',
        'banner_description' => 'We provide enterprise bulk allotments, flexible monthly invoicing, and zero security deposits.',
        'btn1_text' => 'Call Corporate Desk',
        'btn1_url' => 'tel:08043694577',
        'btn2_text' => 'Submit Bulk RFP',
        'btn2_url' => '#contact',
    );
    if (function_exists('update_field')) {
        update_field('accommodations_section', $accommodations_data, $post_id);
    }

    // 4. CORPORATE CTA SECTION
    $corp_data = array(
        'section_tag' => 'ENTERPRISE MOBILITY & PROJECT CONSULTANTS',
        'section_title' => "Corporate Booking Desk &
Extended-Stay Billing",
        'section_description' => 'Streamlined GST billing, corporate master service agreements (MSA), centralized reservations, and tailored monthly billing for global tech firms.',
        'perks' => array(
            array('icon' => 'Icon-36.svg', 'title' => 'GST Compliant Invoicing', 'description' => 'Input credit enabled invoices sent directly to finance accounts.'),
            array('icon' => 'Icon-35.svg', 'title' => 'Flexible Relocation Terms', 'description' => 'Zero lock-ins with seamless extension or early checkout terms.'),
            array('icon' => 'Icon-34.svg', 'title' => 'Dedicated Key Account Lead', 'description' => 'Single touchpoint concierge for all booking, meal, and commute arrangements.'),
        ),
        'cta_text' => 'Schedule Corporate Consultation',
        'cta_url' => '#contact',
        'secondary_cta_text' => 'Download Corporate Brochure (PDF)',
        'secondary_cta_url' => '#',
    );
    if (function_exists('update_field')) {
        update_field('corporate_cta_section', $corp_data, $post_id);
    }

    // 5. ABOUT SECTION
    $about_data = array(
        'section_tag' => 'ABOUT KNY SERVICE APARTMENTS',
        'section_title' => "Refined Hospitality Crafted for
Business Transits",
        'paragraph_1' => "Strategically located in the epicentre of Hyderabad's technology and financial district, KNY is a premier serviced hospitality destination tailored for corporate business travellers and families in transition.",
        'paragraph_2' => 'Unlike conventional hotels that limit you to a single bedroom, KNY suites provide distinct living, dining, working, and resting quadrants. Featuring access to an outdoor swimming pool, dedicated private parking, on-site currency exchange, and high-cadence housekeeping, we stand as the definitive residential address for tech innovators and leaders.',
        'cta_text' => 'Know More About Our Properties',
        'cta_url' => '/about/',
        'image' => 'about-residence.png',
        'image_tag' => 'HITEC CITY, HYDERABAD',
    );
    if (function_exists('update_field')) {
        update_field('about_section', $about_data, $post_id);
    }

    // 6. AMENITIES SECTION
    $amenities_data = array(
        'section_tag' => 'UNCOMPROMISED FACILITIES',
        'section_title' => 'Signature Amenities',
        'section_description' => 'Every convenience curated to maintain your personal wellness, executive efficiency, and privacy.',
        'circular_amenities' => array(
            array('image' => 'amenity-pool.png', 'title' => 'Outdoor Pool', 'description' => 'Temperature-controlled sun deck'),
            array('image' => 'amenity-parking.png', 'title' => 'Private Parking', 'description' => 'Covered & 24/7 security monitored'),
            array('image' => 'amenity-gym.png', 'title' => 'Fitness Gym', 'description' => 'Cardio machines & free weights'),
            array('image' => 'amenity-forex.png', 'title' => 'Currency Exchange', 'description' => 'On-site foreign exchange & billing'),
        ),
        'pill_amenities' => array(
            array('icon' => 'Icon-29.svg', 'label' => 'Leased Line 1 Gbps Internet'),
            array('icon' => 'Icon-28.svg', 'label' => 'Daily Breakfast Spread'),
            array('icon' => 'Icon-17.svg', 'label' => 'Private Meeting Room'),
            array('icon' => 'Icon-14.svg', 'label' => '100% DG Power Backup'),
            array('icon' => 'Icon-13.svg', 'label' => 'Chauffeur Airport Pickup'),
        ),
    );
    if (function_exists('update_field')) {
        update_field('amenities_section', $amenities_data, $post_id);
    }

    // 7. GALLERY / PROPERTY GLIMPSE SECTION
    $gallery_data = array(
        'section_tag' => 'CURATED SPACES',
        'section_title' => 'A Glimpse Into KNY Residences',
        'featured_tag' => 'KNY PROPERTY',
        'featured_title' => 'Spacious Living Quarters',
        'featured_image' => 'gallery-living-hall.png',
        'featured_caption_title' => 'Expansive Executive Hall',
        'featured_caption_desc' => 'Integrated entertainment center & dining space designed for relaxed gatherings.',
        'grid_items' => array(
            array('tag' => 'SUITE INTERIOR', 'title' => 'Master Executive Bedroom', 'image' => 'gallery-master-bedroom.png'),
            array('tag' => 'WELLNESS', 'title' => 'Private Balcony Sit-Out', 'image' => 'gallery-lounge-balcony.png'),
            array('tag' => 'SUITE INTERIOR', 'title' => 'Luxury Twin Executive Suite', 'image' => 'gallery-twin-suite.png'),
            array('tag' => 'SPA-INSPIRED', 'title' => 'Italian Tile En-Suite Bath', 'image' => 'gallery-ensuite-bath.png'),
        ),
    );
    if (function_exists('update_field')) {
        update_field('gallery_section', $gallery_data, $post_id);
    }

    // 8. REVIEWS SECTION
    $reviews_data = array(
        'section_tag' => 'VERIFIED CORPORATE REVIEWS',
        'section_title' => 'Trusted By Global Executives',
        'rating_score' => '4.8 / 5.0',
        'rating_count_text' => 'from 420+ corporate stays',
        'rating_stars' => 5,
        'reviews' => array(
            array(
                'quote' => 'Everything was awesome',
                'content' => 'Super clean 3 BHK apartment, comfortable bedding, and responsive support. Our team was working late hours at the HITEC City office and returning here felt effortless. Excellent Wi-Fi speed throughout.',
                'author_name' => 'Devdatta S.',
                'author_role' => 'Director of Engineering · Tech SEZ',
                'author_initial' => 'D',
                'badge' => 'VERIFIED STAY',
                'stars' => 5,
            ),
            array(
                'quote' => 'Stay was very comfortable',
                'content' => 'We booked an extended 6-month stay for our cloud migration team. The billing team handled our company GST smoothly. Having a full kitchen and daily housekeeping made all the difference for prolonged living.',
                'author_name' => 'Bhavik Joshi',
                'author_role' => 'Senior Management Consultant',
                'author_initial' => 'BJ',
                'badge' => '6-MO EXTENDED',
                'stars' => 5,
            ),
            array(
                'quote' => 'Immaculate service near Google office',
                'content' => 'Location is unbeatable — right behind Vijetha Super Market and walking distance to our campus meetings. Quiet neighborhood at night, polite security staff, and instant support via WhatsApp. Highly recommended!',
                'author_name' => 'Dhiraj K.',
                'author_role' => 'Enterprise Program Manager',
                'author_initial' => 'DK',
                'badge' => 'GOOGLE CORP. STAY',
                'stars' => 5,
            ),
        ),
        'partners_tagline' => 'TRUSTED ACCOMMODATION PARTNER FOR PERSONNEL FROM TOP ORGANIZATIONS',
        'partners' => array(
            array('name' => 'Global Tech Majors'),
            array('name' => 'Big-4 Consulting Teams'),
            array('name' => 'Expatriate Relocations'),
            array('name' => 'US-India Corridors'),
            array('name' => 'Pharma Tech Leadership'),
        ),
    );
    if (function_exists('update_field')) {
        update_field('reviews_section', $reviews_data, $post_id);
    }

    // 9. LOCATION SECTION
    $location_data = array(
        'section_tag' => 'PRIME LOCATION',
        'section_title' => 'In The Heart of HITEC City',
        'description' => "Adjacent to Google, Microsoft, and the Knowledge City financial zone. Enjoy zero traffic friction with walking access to premium grocery markets, fine dining, and express metro access.",
        'address' => 'Temple Square Apartment, Sreebagh Colony, adjacent to Vijetha Super Market, near Google Office, Kothaguda, Kondapur, Hyderabad - 500084, India',
        'commutes' => array(
            array('icon' => 'Icon-30.svg', 'time' => '3 Mins Walk', 'destination' => 'Google Campus & Vijetha Market'),
            array('icon' => 'Icon-19.svg', 'time' => '7 Mins Drive', 'destination' => 'Knowledge City & Mindspace SEZ'),
            array('icon' => 'Icon-18.svg', 'time' => '12 Mins Drive', 'destination' => 'Financial District (Amazon, Apple, Wipro)'),
            array('icon' => 'Icon-16.svg', 'time' => '32 Mins Drive', 'destination' => 'Rajiv Gandhi International Airport (RGIA)'),
        ),
        'card_title' => 'Temple Square Residence',
        'card_address' => 'Sreebagh Colony, Kondapur, Hyderabad',
        'transit_tag' => 'Express Airport & IT Corridor Access',
        'directions_text' => 'Get Driving Directions',
        'directions_url' => 'https://maps.google.com/?q=Temple+Square+Kondapur+Hyderabad',
    );
    if (function_exists('update_field')) {
        update_field('location_section', $location_data, $post_id);
    }

    // 10. RESIDENT ASSISTANCE BANNER
    $assistance_data = array(
        'badge' => '24/7 DEDICATED CONCIERGE DESK',
        'title' => 'Instant Assistance For Current & Prospective Residents',
        'subtitle' => 'Our front-desk concierge is available around the clock to organize chauffeur pickups, airport drops, emergency assistance, or flexible booking extensions.',
        'call_text' => 'Speak With Reservations Concierge: +91 8043694577',
        'call_number' => '+918043694577',
        'whatsapp_text' => 'Instant WhatsApp Support',
        'whatsapp_number' => '918043694577',
        'status_tag' => '15-Min Response SLA Guarantee',
    );
    if (function_exists('update_field')) {
        update_field('assistance_section', $assistance_data, $post_id);
    }

    // 11. FOOTER SECTION
    $footer_data = array(
        'tagline' => "Curated luxury residences and executive serviced apartments tailored for corporate mobility teams, expatriates, and modern global leadership in Hyderabad's premier tech corridor.",
        'address' => 'Temple Square Apartment, Sreebagh Colony, adjacent to Vijetha Super Market, near Google Office, Kothaguda, Kondapur, Hyderabad - 500084, India',
        'phone' => '08043694577',
        'email' => 'reservations@knystay.com',
        'newsletter_title' => 'CORPORATE MOBILITY BRIEF',
        'newsletter_desc' => 'Subscribe for institutional rate updates, seasonal corporate allotments, and priority inventory.',
        'copyright' => '© 2026 KNY Stay Hospitality Pvt. Ltd. All rights reserved.',
        'logo' => 'logo.png',
    );
    if (function_exists('update_field')) {
        update_field('footer_section', $footer_data, $post_id);
    }

    // Options Page Defaults
    if (function_exists('update_field')) {
        update_field('header_logo', 'logo.png', 'option');
        update_field('header_phone', '+91 8043694577', 'option');
        update_field('header_book_text', 'BOOK YOUR STAY', 'option');
        update_field('header_book_url', '#accommodations', 'option');
        update_field('footer_logo', 'logo.png', 'option');
        update_field('footer_tagline', $footer_data['tagline'], 'option');
        update_field('footer_address', $footer_data['address'], 'option');
        update_field('footer_phone', $footer_data['phone'], 'option');
        update_field('footer_email', $footer_data['email'], 'option');
        update_field('footer_copyright', $footer_data['copyright'], 'option');
        update_field('whatsapp_number', '918043694577', 'option');
        update_field('modal_badge_tag', 'PLAN YOUR STAY • DIRECT RESIDENCE ENQUIRY', 'option');
        update_field('modal_subtitle', 'Share your dates and requirements. Our reservations concierge will verify private floor availability and send tailored extended-stay rates within 15 minutes.', 'option');
        update_field('modal_submit_text', 'SEND BOOKING ENQUIRY', 'option');
        update_field('modal_call_label', 'Prefer to speak directly? Dial', 'option');
        update_field('modal_sla_badge', '15-Min Priority Callback SLA', 'option');
    }

    update_post_meta($post_id, '_kny_data_seeded', '1');
}

/**
 * Ensure Navigation Menus are registered and created dynamically
 */
function kny_seed_navigation_menus() {
    $locations = get_theme_mod('nav_menu_locations', array());

    // 1. Primary Menu
    if (empty($locations['primary-menu']) || !wp_get_nav_menu_object($locations['primary-menu'])) {
        $menu_id = wp_create_nav_menu('Primary Menu');
        if (!is_wp_error($menu_id)) {
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'HOME', 'menu-item-url' => home_url('/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'ABOUT', 'menu-item-url' => home_url('/about/'), 'menu-item-status' => 'publish'));
            $rooms_item_id = wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'ROOMS', 'menu-item-url' => home_url('/rooms/'), 'menu-item-status' => 'publish'));
            if ($rooms_item_id) {
                wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Premium Single Occupancy', 'menu-item-url' => home_url('/rooms/#room-premium-single-occupancy'), 'menu-item-parent-id' => $rooms_item_id, 'menu-item-status' => 'publish'));
                wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Deluxe Single Occupancy', 'menu-item-url' => home_url('/rooms/#room-deluxe-single-occupancy'), 'menu-item-parent-id' => $rooms_item_id, 'menu-item-status' => 'publish'));
                wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Premium Double Occupancy', 'menu-item-url' => home_url('/rooms/#room-premium-double-occupancy'), 'menu-item-parent-id' => $rooms_item_id, 'menu-item-status' => 'publish'));
                wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'Deluxe Double Occupancy', 'menu-item-url' => home_url('/rooms/#room-deluxe-double-occupancy'), 'menu-item-parent-id' => $rooms_item_id, 'menu-item-status' => 'publish'));
                wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => '1 BHK Serviced Apartment', 'menu-item-url' => home_url('/rooms/#room-1-bhk-serviced-apartment'), 'menu-item-parent-id' => $rooms_item_id, 'menu-item-status' => 'publish'));
                wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => '2 BHK Executive Apartment', 'menu-item-url' => home_url('/rooms/#room-2-bhk-executive-apartment'), 'menu-item-parent-id' => $rooms_item_id, 'menu-item-status' => 'publish'));
                wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => '3 BHK Presidential Residence', 'menu-item-url' => home_url('/rooms/#room-3-bhk-presidential-residence'), 'menu-item-parent-id' => $rooms_item_id, 'menu-item-status' => 'publish'));
            }
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'GALLERY', 'menu-item-url' => home_url('/gallery/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'HYDERABAD', 'menu-item-url' => home_url('/hyderabad/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'PUNE', 'menu-item-url' => home_url('/pune/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($menu_id, 0, array('menu-item-title' => 'CONTACT', 'menu-item-url' => home_url('/contact/'), 'menu-item-status' => 'publish'));
            $locations['primary-menu'] = $menu_id;
        }
    }

    // 2. Footer Accommodations
    if (empty($locations['footer-accommodations']) || !wp_get_nav_menu_object($locations['footer-accommodations'])) {
        $acc_menu_id = wp_create_nav_menu('Footer Accommodations');
        if (!is_wp_error($acc_menu_id)) {
            wp_update_nav_menu_item($acc_menu_id, 0, array('menu-item-title' => 'All Suites (2 & 3 BHK)', 'menu-item-url' => home_url('/#accommodations'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($acc_menu_id, 0, array('menu-item-title' => 'Studio Serviced Units', 'menu-item-url' => home_url('/#accommodations'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($acc_menu_id, 0, array('menu-item-title' => 'Corporate Relocations', 'menu-item-url' => home_url('/#corporate-cta'), 'menu-item-status' => 'publish'));
            $locations['footer-accommodations'] = $acc_menu_id;
        }
    }

    // 3. Footer Quick Links
    if (empty($locations['footer-quick-links']) || !wp_get_nav_menu_object($locations['footer-quick-links'])) {
        $quick_menu_id = wp_create_nav_menu('Footer Quick Links');
        if (!is_wp_error($quick_menu_id)) {
            wp_update_nav_menu_item($quick_menu_id, 0, array('menu-item-title' => 'Home', 'menu-item-url' => home_url('/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($quick_menu_id, 0, array('menu-item-title' => 'About', 'menu-item-url' => home_url('/about/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($quick_menu_id, 0, array('menu-item-title' => 'Location', 'menu-item-url' => home_url('/#location'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($quick_menu_id, 0, array('menu-item-title' => 'Contact', 'menu-item-url' => home_url('/contact/'), 'menu-item-status' => 'publish'));
            $locations['footer-quick-links'] = $quick_menu_id;
        }
    }

    // 4. Footer Legal Links
    if (empty($locations['footer-legal']) || !wp_get_nav_menu_object($locations['footer-legal'])) {
        $legal_menu_id = wp_create_nav_menu('Footer Legal Links');
        if (!is_wp_error($legal_menu_id)) {
            wp_update_nav_menu_item($legal_menu_id, 0, array('menu-item-title' => 'Privacy Policy', 'menu-item-url' => home_url('/privacy-policy/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($legal_menu_id, 0, array('menu-item-title' => 'Terms of Service', 'menu-item-url' => home_url('/terms/'), 'menu-item-status' => 'publish'));
            wp_update_nav_menu_item($legal_menu_id, 0, array('menu-item-title' => 'Corporate GST Compliance', 'menu-item-url' => home_url('/corporate-gst/'), 'menu-item-status' => 'publish'));
            $locations['footer-legal'] = $legal_menu_id;
        }
    }

    set_theme_mod('nav_menu_locations', $locations);
}

// Hook into init to ensure homepage, inner pages, and menus are seeded on first load
add_action('init', function () {
    $front_id = get_option('page_on_front');
    if ($front_id && !get_post_meta($front_id, '_kny_data_seeded', true)) {
        kny_seed_homepage_data($front_id);
    }

    // Ensure all other published pages also have initial section data seeded if empty
    $all_pages = get_posts(array('post_type' => 'page', 'post_status' => 'publish', 'posts_per_page' => -1));
    if ($front_id && !empty($all_pages)) {
        $front_meta = get_post_meta($front_id);
        foreach ($all_pages as $p) {
            if ($p->ID === (int)$front_id) continue;
            if (!get_post_meta($p->ID, '_kny_data_seeded', true)) {
                foreach ($front_meta as $mkey => $mval) {
                    if ($mkey === '_kny_data_seeded') continue;
                    update_post_meta($p->ID, $mkey, maybe_unserialize($mval[0]));
                }
                update_post_meta($p->ID, '_kny_data_seeded', '1');
            }
        }
    }

    kny_seed_navigation_menus();

    // Seed About Page Data if needed
    $about_page = get_page_by_path('about');
    $about_id = $about_page ? $about_page->ID : 7;
    if ($about_id && !get_post_meta($about_id, '_kny_about_data_seeded', true)) {
        kny_seed_about_page_data($about_id);
    }
});

/**
 * Seed dedicated About Page SCF fields
 */
function kny_seed_about_page_data($post_id = 7)
{
    if (!$post_id) {
        $about_page = get_page_by_path('about');
        $post_id = $about_page ? $about_page->ID : 7;
    }
    if (!$post_id) return;

    // 1. About Hero Section
    $about_hero = array(
        'badge_text'          => 'ABOUT KNY',
        'title'               => 'About Us',
        'description'         => "Spacious 2 & 3 BHK serviced apartments in HITECH City, Hyderabad.\nThoughtfully calibrated comfort for short corporate visits and extended executive tenancies.",
        'hero_image'          => 737, // about-hero-interior
        'top_badge_icon'      => 733, // verified shield
        'top_badge_text'      => 'KNY SERVICE APARTMENTS / HYDERABAD',
        'overlay_tag'         => 'EXECUTIVE RESIDENTIAL STANDARDS',
        'overlay_title'       => 'Designed for tranquility, built for productivity.',
        'neighborhood_icon'   => 732, // map pin
        'neighborhood_tag'    => 'NEIGHBORHOOD',
        'neighborhood_text'   => 'Near Google Campus, Kondapur',
    );
    if (function_exists('update_field')) {
        update_field('about_hero', $about_hero, $post_id);
    }

    // 2. Room to Live & Stats
    $about_stats = array(
        'badge_text'          => 'ABOUT KNY',
        'title'               => "Room to live.<br/>Space to feel at home.",
        'para_1'              => "Strategically placed in the center of HITECH City, Hyderabad’s high-velocity corporate technology belt, KNY combines the privacy and dimension of true apartment living with round-the-clock enterprise hospitality.",
        'para_2'              => "Whether welcoming global relocation families, project leaders on multi-month assignments, or executive delegations, our residences eliminate the fatigue of conventional hotel rooms by providing fully equipped culinary spaces, separated lounges, and whisper-quiet work corners.",
        'cta_text'            => 'Explore Our Residences',
        'cta_url'             => home_url('/#accommodations'),
        'stats'               => array(
            array(
                'label'       => 'LAYOUT OFFERINGS',
                'value'       => '2 & 3',
                'description' => 'BHK apartments curated with expansive living halls and private ensuite balconies.',
            ),
            array(
                'label'       => 'CAPACITY SCALE',
                'value'       => '120+',
                'description' => 'Rooms & suites seamlessly maintained to executive hospitality grade.',
            ),
            array(
                'label'       => 'GUEST ASSISTANCE',
                'value'       => '24 / 7',
                'description' => 'Dedicated help desk, round-the-clock security surveillance, and on-call concierge.',
            ),
            array(
                'label'       => 'ENTERPRISE BILLING',
                'value'       => '100%',
                'description' => 'GST-compliant corporate contracting with itemized multi-currency invoicing.',
            ),
        ),
        'productivity_icon'   => 736,
        'productivity_title'  => 'Designed for uninterrupted executive productivity',
        'productivity_desc'   => 'Every residence includes dual enterprise broadband uplinks (up to 1 Gbps) with dedicated backup power grids.',
    );
    if (function_exists('update_field')) {
        update_field('about_stats', $about_stats, $post_id);
    }

    // 3. Everyday Amenities
    $about_amenities = array(
        'badge_text'          => 'THE EVERYDAY, MADE EASIER',
        'title'               => 'Comfort beyond your apartment',
        'description'         => 'A swim, a workout, or help whenever you need it. Thoughtful conveniences to complement your stay and maintain balance during work relocations.',
        'amenities'           => array(
            array(
                'image'       => 724, // about-amenity-pool
                'title'       => 'Outdoor Pool',
                'description' => "Make a little time to slow down,\nswim laps, and unwind under the\nopen sky.",
            ),
            array(
                'image'       => 725, // about-amenity-parking
                'title'       => 'Private Parking',
                'description' => "Dedicated, monitored parking\nslots for your vehicle and visitor\ntransport.",
            ),
            array(
                'image'       => 726, // about-amenity-gym
                'title'       => 'Fitness Gym',
                'description' => "Keep your health routine\nunbroken with cardio stations\nand strength gear.",
            ),
            array(
                'image'       => 727, // about-amenity-concierge
                'title'       => "Concierge &\nExchange",
                'description' => "Assisted currency exchange,\nluggage storage, and local\nlogistics on call.",
            ),
        ),
    );
    if (function_exists('update_field')) {
        update_field('about_amenities', $about_amenities, $post_id);
    }

    // 4. At Home in Hyderabad (Location & Commutes)
    $about_location = array(
        'badge_text'          => 'AT HOME IN HYDERABAD',
        'title'               => 'A comfortable base in HITECH City',
        'description'         => "Find KNY nestled in Kothaguda, Kondapur, right beside the Google office campus and directly adjacent to Vijetha Super Market for daily household supplies. Our address provides quick, hassle-free commutes across Cyber Towers, Mindspace, and the Financial District.",
        'building_image'      => 738, // about-location-temple-square
        'positioning_tag'     => 'STRATEGIC POSITIONING',
        'positioning_title'   => 'Temple Square Apartment, Sreebagh Colony',
        'commutes'            => array(
            array(
                'icon'        => 728, // about-icon-walk
                'title'       => 'Google Office Campus',
                'subtitle'    => 'Adjacent to residence perimeter',
                'time'        => '2 Mins Walk',
            ),
            array(
                'icon'        => 729, // about-icon-car
                'title'       => 'Mindspace IT Park & Cyber Towers',
                'subtitle'    => "Heart of Hyderabad's core technology corridor",
                'time'        => '6 Mins Drive',
            ),
            array(
                'icon'        => 730, // about-icon-building
                'title'       => 'Gachibowli Financial District',
                'subtitle'    => 'Major banking and corporate headquarters',
                'time'        => '12 Mins Drive',
            ),
        ),
        'doorstep_icon'       => 731, // about-icon-cart
        'doorstep_text'       => 'Immediate doorstep access to supermarkets, pharmacies, and specialty dining.',
    );
    if (function_exists('update_field')) {
        update_field('about_location', $about_location, $post_id);
    }

    // 5. Photo Gallery Preview
    $about_gallery = array(
        'badge_text'          => 'PHOTO GALLERY',
        'title'               => 'Explore the spaces and details',
        'description'         => 'Browse our curated selection of apartment interiors, ambient balconies, and corporate resident spaces.',
        'cta_text'            => 'Explore All 35+ Photos',
        'cta_url'             => home_url('/gallery/'),
        'card_1_image'        => 739, // about-gallery-living-hall
        'card_1_title'        => 'Executive Living Hall & Media Lounge',
        'card_1_subtitle'     => '2 & 3 BHK Residence Layout',
        'card_2_image'        => 740, // about-gallery-kitchen
        'card_2_title'        => 'Fully Fitted Modern Kitchen',
        'card_2_subtitle'     => 'Cookware & Appliances Included',
    );
    if (function_exists('update_field')) {
        update_field('about_gallery', $about_gallery, $post_id);
    }

    // 6. Plan Your Stay (Green Banner)
    $about_cta_banner = array(
        'badge_text'          => "LET'S PLAN YOUR STAY",
        'title'               => 'A few nights or a longer corporate stay?',
        'description'         => 'Tell us your expected dates, team size, and billing preferences. Our corporate mobility coordinators will curate your preferred apartment unit at preferential institutional rates.',
        'button_text'         => 'GET A FREE QUOTE',
        'button_url'          => '#booking-modal',
    );
    if (function_exists('update_field')) {
        update_field('about_cta_banner', $about_cta_banner, $post_id);
    }

    // 7. Stay Informed (Newsletter)
    $about_newsletter = array(
        'badge_text'          => 'STAY INFORMED',
        'title'               => 'Subscribe to our corporate updates',
        'description'         => 'Receive seasonal apartment tariff revisions, monthly corporate lease benefits, and priority inventory alerts.',
        'icon'                => 734, // about-icon-mail
        'input_placeholder'   => 'corporate.email@company.com',
        'button_text'         => 'Subscribe Now',
    );
    if (function_exists('update_field')) {
        update_field('about_newsletter', $about_newsletter, $post_id);
    }

    update_post_meta($post_id, '_kny_about_data_seeded', '1');
}


/**
 * Seed Contact Page SCF Data
 */
function kny_seed_contact_page_data($post_id = 12) {
    if (!$post_id) {
        $contact_page = get_page_by_path('contact');
        if ($contact_page) {
            $post_id = $contact_page->ID;
        } else {
            return;
        }
    }

    if (!function_exists('update_field')) {
        return;
    }

    // 1. Contact Form Section (Hero + Form)
    $contact_form_section = array(
        'hero_title'          => 'Get in Touch',
        'hero_description'    => "Have a question about our serviced residences or planning an extended stay in HITECH City? We'd love to hear from you.",
        'form_title'          => 'Send us a message',
        'form_subtitle'       => 'Direct priority routing to our Kondapur front office.',
        'stay_types_label'    => 'Stay Type (Optional)',
        'stay_types'          => array(
            array('name' => 'Short Stay', 'is_active' => 0),
            array('name' => 'Corporate / Extended', 'is_active' => 1),
            array('name' => 'General Inquiry', 'is_active' => 0),
        ),
        'name_label'          => 'Full Name',
        'name_placeholder'    => 'e.g. Rohith Sharma',
        'email_label'         => 'Email Address',
        'email_placeholder'   => 'r.sharma@company.com',
        'phone_label'         => 'Phone Number',
        'phone_prefix'        => '+91',
        'phone_placeholder'   => '98765 43210',
        'message_label'       => 'Message / Inquiry',
        'message_hint'        => 'Dates, guests & unit requirements',
        'message_placeholder' => 'Tell us about check-in dates, apartment configurations (1BHK/2BHK), or custom relocation requests...',
        'submit_btn_text'     => 'Send Message →',
        'sla_icon'            => 744, // contact-icon-clock
        'sla_text'            => 'We typically respond within 15 minutes.',
    );
    update_field('contact_form_section', $contact_form_section, $post_id);

    // 2. Contact Cards Section (Email Desks + Locations)
    $contact_cards_section = array(
        'email_desks_tag'   => 'DIRECT INQUIRIES',
        'email_desks_title' => 'Email Desks',
        'email_desks_icon'  => 734, // Mail icon
        'email_desks'       => array(
            array(
                'label'       => 'Individual Stays & Reservations',
                'email'       => 'reservations@knystay.com',
                'badge'       => '15 min SLA',
                'badge_style' => 'gray',
            ),
            array(
                'label'       => 'Corporate Leases & B2B RFPs',
                'email'       => 'corporate@knystay.com',
                'badge'       => 'Priority',
                'badge_style' => 'green',
            ),
        ),
        'locations'         => array(
            array(
                'tag'                  => 'HYDERABAD',
                'badge'                => 'Kondapur / HITECH',
                'icon'                 => 732, // Location pin
                'title'                => 'Temple Square Apartment, Sreebagh Colony',
                'address'              => 'Kondapur, Hyderabad – 500084',
                'vicinity_note'        => 'Directly adjacent to Google Hyderabad Office Campus',
                'map_image'            => 742, // Map preview
                'map_overlay_title'    => 'Temple Square, Kondapur',
                'map_overlay_subtitle' => 'Google Campus: 2 min walk',
                'map_btn_text'         => 'VIEW IN MAPS',
                'map_btn_url'          => 'https://maps.google.com/?q=Temple+Square+Apartment+Kondapur',
                'map_btn_icon'         => 746, // External link icon
            ),
            array(
                'tag'                  => 'PUNE',
                'badge'                => 'Kondapur / HITECH',
                'icon'                 => 732, // Location pin
                'title'                => 'Temple Square Apartment, Sreebagh Colony',
                'address'              => 'Kondapur, Hyderabad – 500084',
                'vicinity_note'        => 'Directly adjacent to Google Hyderabad Office Campus',
                'map_image'            => 742, // Map preview
                'map_overlay_title'    => 'Temple Square, Kondapur',
                'map_overlay_subtitle' => 'Google Campus: 2 min walk',
                'map_btn_text'         => 'VIEW IN MAPS',
                'map_btn_url'          => 'https://maps.google.com/?q=Temple+Square+Apartment+Kondapur',
                'map_btn_icon'         => 746, // External link icon
            ),
        ),
    );
    update_field('contact_cards_section', $contact_cards_section, $post_id);

    // 3. Contact Features Section
    $contact_features_section = array(
        'features' => array(
            array(
                'icon'        => 733, // Shield check
                'title'       => '24/7 Front Desk Support',
                'description' => 'Round-the-clock concierge, emergency check-ins, and keyless access.',
            ),
            array(
                'icon'        => 736, // Navigation arrow
                'title'       => '2 Mins from Google Campus',
                'description' => 'Prime pedestrian walkability to major Cyberabad IT corridors.',
            ),
            array(
                'icon'        => 745, // Billing receipt
                'title'       => 'GST-Compliant Corporate Billing',
                'description' => 'Central enterprise invoicing, credit arrangements, and vendor setups.',
            ),
        ),
    );
    update_field('contact_features_section', $contact_features_section, $post_id);

    // 4. Contact Walkthrough Section
    $contact_walkthrough_section = array(
        'background_image' => 743, // Walkthrough banner
        'tag'              => 'SCHEDULE AN IN-PERSON WALKTHROUGH',
        'title'            => 'Experience our premium suites before confirming your corporate lease.',
        'button_url'       => '#contact-form',
    );
    update_field('contact_walkthrough_section', $contact_walkthrough_section, $post_id);

    update_post_meta($post_id, '_kny_contact_data_seeded', '1');
}


/**
 * Seed Gallery Page SCF Data
 */
function kny_seed_gallery_page_data($post_id = 9) {
    if (!$post_id) {
        $gal_page = get_page_by_path('gallery');
        if ($gal_page) {
            $post_id = $gal_page->ID;
        } else {
            return;
        }
    }

    if (!function_exists('update_field')) {
        return;
    }

    // 1. Hero & Filters Section
    $gallery_hero_section = array(
        'eyebrow' => 'VISUAL ARCHIVE & RESIDENCES',
        'title'   => 'Inside Our Sanctuary — Spaces & Suites',
        'filters' => array(
            array('name' => 'All Spaces (24)',           'slug' => 'all',            'is_active' => 1),
            array('name' => '2 BHK Executive Suites',    'slug' => '2-bhk',          'is_active' => 0),
            array('name' => '3 BHK Presidential',        'slug' => '3-bhk',          'is_active' => 0),
            array('name' => 'Living Lounges & Verandas', 'slug' => 'living-veranda', 'is_active' => 0),
            array('name' => 'Kitchen & Dining',          'slug' => 'kitchen-dining', 'is_active' => 0),
            array('name' => 'Building & Amenities',      'slug' => 'amenities',      'is_active' => 0),
        ),
    );
    update_field('gallery_hero_section', $gallery_hero_section, $post_id);

    // 2. Gallery Grid Section
    $gallery_grid_section = array(
        'eyebrow'   => 'HIGH-RESOLUTION RESIDENCE GALLERY',
        'title'     => 'Explore HITEC City Spaces & Suites',
        'hint_text' => 'Click image to expand in studio view',
        'hint_icon' => 760, // gallery-icon-studio-expand
        'gallery_items' => array(
            array(
                'image'        => 748,
                'category_tag' => 'LIVING LOUNGE',
                'bhk_tag'      => '2 BHK',
                'title'        => 'Open-Plan Executive Lounge',
                'description'  => 'Acoustic double glazing & private leafy balcony',
                'filter_slugs' => '2-bhk living-veranda',
            ),
            array(
                'image'        => 749,
                'category_tag' => 'MASTER CHAMBER',
                'bhk_tag'      => '2 BHK',
                'title'        => 'Executive Master Chamber',
                'description'  => 'King bed with dedicated executive desk & fiber Wi-Fi',
                'filter_slugs' => '2-bhk',
            ),
            array(
                'image'        => 750,
                'category_tag' => 'SKY CHAMBER',
                'bhk_tag'      => '3 BHK',
                'title'        => 'Presidential Sky Chamber',
                'description'  => 'Panoramic sunset view, walk-in dressing wardrobe',
                'filter_slugs' => '3-bhk',
            ),
            array(
                'image'        => 751,
                'category_tag' => 'GUEST SUITE',
                'bhk_tag'      => '2 BHK',
                'title'        => 'Secondary Executive Suite',
                'description'  => 'Configurable twin or queen setup with en-suite bath',
                'filter_slugs' => '2-bhk',
            ),
            array(
                'image'        => 752,
                'category_tag' => 'KITCHEN',
                'bhk_tag'      => '',
                'title'        => 'Chef Pantry & Hob',
                'description'  => 'Full induction range, microwave, and quartz countertops',
                'filter_slugs' => 'kitchen-dining',
            ),
            array(
                'image'        => 753,
                'category_tag' => 'DINING',
                'bhk_tag'      => '',
                'title'        => 'Crafted Dining Suite',
                'description'  => 'Comfortable 4 to 6 seater table with ambient pendants',
                'filter_slugs' => 'kitchen-dining',
            ),
            array(
                'image'        => 754,
                'category_tag' => 'VERANDA',
                'bhk_tag'      => '',
                'title'        => 'Leafy Veranda Sit-Out',
                'description'  => 'Private outdoor terrace overlooking Kondapur greenery',
                'filter_slugs' => 'living-veranda',
            ),
            array(
                'image'        => 755,
                'category_tag' => 'BATH CHAMBER',
                'bhk_tag'      => '',
                'title'        => 'Marble Bath Chamber',
                'description'  => 'Frameless glass rain shower & Grohe fitments',
                'filter_slugs' => '2-bhk 3-bhk',
            ),
            array(
                'image'        => 756,
                'category_tag' => 'AMENITIES',
                'bhk_tag'      => '',
                'title'        => 'Swimming Pool & Lounge Deck',
                'description'  => 'Lapis blue pool with teak sun loungers',
                'filter_slugs' => 'amenities',
            ),
            array(
                'image'        => 757,
                'category_tag' => 'FITNESS',
                'bhk_tag'      => '',
                'title'        => 'Executive Health Club',
                'description'  => 'Commercial cardio stations and strength equipment',
                'filter_slugs' => 'amenities',
            ),
            array(
                'image'        => 758,
                'category_tag' => 'EXTERIOR',
                'bhk_tag'      => '',
                'title'        => 'Arrival Portico & Facade',
                'description'  => 'Verdant entrance courtyard & 24/7 security portal',
                'filter_slugs' => 'amenities',
            ),
            array(
                'image'        => 759,
                'category_tag' => 'CONCIERGE',
                'bhk_tag'      => '',
                'title'        => '24/7 Concierge & Reception',
                'description'  => 'Dedicated host desk, parcel service, and airport transfers',
                'filter_slugs' => 'amenities',
            ),
        ),
    );
    update_field('gallery_grid_section', $gallery_grid_section, $post_id);

    update_post_meta($post_id, '_kny_gallery_data_seeded', '1');
}
