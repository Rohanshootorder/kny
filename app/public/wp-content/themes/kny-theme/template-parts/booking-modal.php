<?php
/**
 * Booking Modal Template
 *
 * Pixel-to-pixel identical to Figma design.
 * Dynamically populated from SCF Theme Settings / Selected Room data attributes.
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

// Fetch dynamic options from SCF Theme Settings
$badge_tag   = function_exists('get_field') ? get_field('modal_badge_tag', 'option') : '';
$subtitle    = function_exists('get_field') ? get_field('modal_subtitle', 'option') : '';
$submit_text = function_exists('get_field') ? get_field('modal_submit_text', 'option') : '';
$call_label  = function_exists('get_field') ? get_field('modal_call_label', 'option') : '';
$sla_badge   = function_exists('get_field') ? get_field('modal_sla_badge', 'option') : '';
$phone       = function_exists('get_field') ? get_field('footer_phone', 'option') : '';
?>

<!-- Booking Modal Backdrop & Container -->
<div class="booking-modal-backdrop" id="booking-modal" aria-hidden="true">
    <div class="booking-modal-dialog" role="dialog" aria-modal="true" aria-labelledby="modal-room-title">
        <!-- Modal Card Content -->
        <div class="booking-modal-card">
            
            <!-- 1. Header Section -->
            <div class="modal-header-section">
                <!-- Top Badge & Close Button Row -->
                <div class="modal-top-bar">
                    <div class="modal-eyebrow-tag"><?php echo esc_html($badge_tag); ?></div>
                    <button type="button" class="modal-close-btn" id="modal-close-btn" aria-label="Close modal">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#6A6963" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <!-- Room Title & Pricing Row -->
                <div class="modal-title-pricing-row">
                    <h2 class="modal-room-title" id="modal-room-title">2 Bedroom Apartment</h2>
                    <div class="modal-pricing-box">
                        <span class="modal-current-price" id="modal-current-price">INR 12,500</span>
                        <span class="modal-strike-price" id="modal-strike-price">INR 14,750</span>
                        <span class="modal-price-unit">/ night</span>
                    </div>
                </div>

                <!-- Description / Guarantee -->
                <div class="modal-guarantee-desc"><?php echo esc_html($subtitle); ?></div>

                <!-- 4 Highlight Features Bar -->
                <div class="modal-highlights-bar">
                    <div class="modal-highlight-item">
                        <span class="highlight-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7BAA22" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <line x1="9" y1="21" x2="9" y2="9"></line>
                            </svg>
                        </span>
                        <span class="highlight-text" id="modal-highlight-size">1,650 Sq. Ft.</span>
                    </div>
                    <div class="modal-highlight-item">
                        <span class="highlight-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7BAA22" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </span>
                        <span class="highlight-text" id="modal-highlight-guests">Up to 6 Guests</span>
                    </div>
                    <div class="modal-highlight-item">
                        <span class="highlight-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7BAA22" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 4v16"></path>
                                <path d="M2 8h18a2 2 0 0 1 2 2v10"></path>
                                <path d="M2 17h20"></path>
                                <path d="M6 8v9"></path>
                            </svg>
                        </span>
                        <span class="highlight-text" id="modal-highlight-bed">2 King En-Suites</span>
                    </div>
                    <div class="modal-highlight-item">
                        <span class="highlight-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#7BAA22" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                        </span>
                        <span class="highlight-text" id="modal-highlight-cancel">Free Cancellation</span>
                    </div>
                </div>
            </div>

            <!-- 2. Form Body Section -->
            <div class="modal-body-section">
                <form class="modal-booking-form" id="booking-enquiry-form">
                    <input type="hidden" name="selected_room" id="form-selected-room" value="2 Bedroom Apartment">
                    <input type="hidden" name="action" value="kny_submit_booking_enquiry">
                    <?php wp_nonce_field('kny_booking_nonce', 'booking_nonce'); ?>

                    <!-- Row 1: Name & Email -->
                    <div class="modal-form-row">
                        <div class="modal-field-group">
                            <label class="modal-label" for="book-name">
                                YOUR FULL NAME <span class="label-req">*</span>
                            </label>
                            <input type="text" id="book-name" name="full_name" class="modal-input" placeholder="e.g. Vikramaditya Sharma" required>
                        </div>
                        <div class="modal-field-group">
                            <label class="modal-label" for="book-email">
                                CORPORATE / PERSONAL EMAIL <span class="label-req">*</span>
                            </label>
                            <input type="email" id="book-email" name="email" class="modal-input" placeholder="vikram@enterprise.com" required>
                        </div>
                    </div>

                    <!-- Row 2: Phone & Total Guests -->
                    <div class="modal-form-row">
                        <div class="modal-field-group">
                            <label class="modal-label" for="book-phone">
                                PHONE / WHATSAPP NUMBER <span class="label-req">*</span>
                            </label>
                            <input type="tel" id="book-phone" name="phone" class="modal-input" placeholder="98765 43210" required>
                        </div>
                        <div class="modal-field-group">
                            <label class="modal-label" for="book-guests">TOTAL GUESTS</label>
                            <div class="modal-select-wrapper">
                                <select id="book-guests" name="guests" class="modal-select">
                                    <option value="1 Guest (Solo Corporate)">1 Guest (Solo Corporate)</option>
                                    <option value="2 Guests (1 King Bed)">2 Guests (1 King Bed)</option>
                                    <option value="3 to 4 Guests (2 King Bedrooms)" selected>3 to 4 Guests (2 King Bedrooms)</option>
                                    <option value="5 to 6 Guests (3 BHK Residence)">5 to 6 Guests (3 BHK Residence)</option>
                                    <option value="Corporate Project Team (7+ Guests)">Corporate Project Team (7+ Guests)</option>
                                </select>
                                <span class="select-chevron">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#6A6963" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: Arrival & Departure Dates -->
                    <div class="modal-form-row">
                        <div class="modal-field-group">
                            <label class="modal-label" for="book-arrival">
                                ARRIVAL DATE <span class="label-req">*</span>
                            </label>
                            <div class="modal-date-wrapper">
                                <input type="date" id="book-arrival" name="arrival_date" class="modal-input modal-date-input" required>
                            </div>
                        </div>
                        <div class="modal-field-group">
                            <label class="modal-label" for="book-departure">
                                DEPARTURE DATE <span class="label-req">*</span>
                            </label>
                            <div class="modal-date-wrapper">
                                <input type="date" id="book-departure" name="departure_date" class="modal-input modal-date-input" required>
                            </div>
                        </div>
                    </div>

                    <!-- Row 4: Nature of Stay Radio Pills -->
                    <div class="modal-nature-group">
                        <label class="modal-label">NATURE OF STAY</label>
                        <div class="modal-nature-pills">
                            <label class="nature-pill is-active">
                                <input type="radio" name="nature_of_stay" value="Business & GST" checked>
                                <span>Business & GST</span>
                            </label>
                            <label class="nature-pill">
                                <input type="radio" name="nature_of_stay" value="Extended (30+ d)">
                                <span>Extended (30+ d)</span>
                            </label>
                            <label class="nature-pill">
                                <input type="radio" name="nature_of_stay" value="Relocation Stay">
                                <span>Relocation Stay</span>
                            </label>
                            <label class="nature-pill">
                                <input type="radio" name="nature_of_stay" value="Family Leisure">
                                <span>Family Leisure</span>
                            </label>
                        </div>
                    </div>

                    <!-- Row 5: Requirements & Custom Requests -->
                    <div class="modal-field-group">
                        <div class="label-with-hint">
                            <label class="modal-label" for="book-notes">REQUIREMENTS & CUSTOM REQUESTS</label>
                            <span class="label-optional">Optional</span>
                        </div>
                        <textarea id="book-notes" name="requirements" class="modal-textarea" rows="3" placeholder="Tell us about preferred floor, early check-in, extra car parking, airport chauffeur, or dietary breakfast preferences..."></textarea>
                    </div>

                    <!-- Row 6: Submit Button -->
                    <div class="modal-submit-row">
                        <button type="submit" class="modal-submit-btn" id="modal-submit-btn">
                            <span><?php echo esc_html($submit_text); ?></span>
                            <span class="btn-arrow">
                                <svg width="15" height="15" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0412 12.0412V4.95898H4.95898M12.0412 4.95898L4.95898 12.0412" stroke-linecap="round" stroke="currentColor"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- 3. Footer Section -->
            <div class="modal-footer-section">
                <div class="modal-footer-call">
                    <span class="call-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#7BAA22" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </span>
                    <span class="call-text">
                        <?php echo esc_html($call_label); ?> <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="call-number"><?php echo esc_html($phone); ?></a>
                    </span>
                </div>
                <div class="modal-sla-badge">
                    <span class="sla-dot" aria-hidden="true"></span>
                    <span class="sla-text"><?php echo esc_html($sla_badge); ?></span>
                </div>
            </div>

        </div>
    </div>
</div>
