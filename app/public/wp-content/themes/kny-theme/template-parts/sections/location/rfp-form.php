<?php
/**
 * Location Detail Section: Corporate RFP & Reservation Form
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

$page_id = get_the_ID();

$eyebrow     = get_field('loc_rfp_eyebrow', $page_id);
$title       = get_field('loc_rfp_title', $page_id);
$subtitle    = get_field('loc_rfp_subtitle', $page_id);
$tab1_label  = get_field('loc_rfp_tab1_label', $page_id) ?: 'Corporate & Bulk Stay RFP';
$tab2_label  = get_field('loc_rfp_tab2_label', $page_id) ?: 'Direct & Family Stay';
$submit_text = get_field('loc_rfp_submit_text', $page_id) ?: 'Submit Corporate RFP & Receive Custom Tariff';
$sla_text    = get_field('loc_rfp_sla_text', $page_id) ?: 'Guaranteed 15-minute response SLA during business hours (8:00 AM – 10:00 PM IST)';
?>

<section class="kny-loc-rfp-section" id="rfp-section">
    <div class="kny-container">
        <!-- Section Header -->
        <div class="kny-loc-section-center-header">
            <?php if ($eyebrow): ?>
                <div class="kny-loc-eyebrow"><?php echo esc_html($eyebrow); ?></div>
            <?php endif; ?>
            <?php if ($title): ?>
                <h2 class="kny-loc-sec-title"><?php echo wp_kses_post($title); ?></h2>
            <?php endif; ?>
            <?php if ($subtitle): ?>
                <p class="kny-loc-sec-desc"><?php echo wp_kses_post($subtitle); ?></p>
            <?php endif; ?>
        </div>

        <!-- RFP Form Card Wrapper -->
        <div class="kny-loc-rfp-container">
            <div class="kny-loc-rfp-card">
                <!-- Stay Mode Switcher Tabs -->
                <div class="kny-loc-rfp-tabs">
                    <button type="button" class="kny-loc-tab-btn is-active" data-tab="corporate">
                        <?php echo esc_html($tab1_label); ?>
                    </button>
                    <button type="button" class="kny-loc-tab-btn" data-tab="direct">
                        <?php echo esc_html($tab2_label); ?>
                    </button>
                </div>

                <!-- Form -->
                <form class="kny-loc-rfp-form" onsubmit="event.preventDefault(); alert('Thank you! Your Corporate RFP has been received. Our Enterprise Desk will respond within 15 minutes.');">
                    <div class="kny-loc-form-grid">
                        <!-- Enterprise Name -->
                        <div class="kny-loc-form-group">
                            <label for="rfp-org-name" class="kny-loc-label"><?php esc_html_e('Enterprise / Organization Name', 'kny-theme'); ?></label>
                            <input type="text" id="rfp-org-name" name="organization" required placeholder="<?php esc_attr_e('e.g. Microsoft India / Deloitte', 'kny-theme'); ?>" class="kny-loc-input">
                        </div>

                        <!-- Work Email -->
                        <div class="kny-loc-form-group">
                            <label for="rfp-work-email" class="kny-loc-label"><?php esc_html_e('Official Work Email', 'kny-theme'); ?></label>
                            <input type="email" id="rfp-work-email" name="email" required placeholder="<?php esc_attr_e('name@company.com', 'kny-theme'); ?>" class="kny-loc-input">
                        </div>

                        <!-- Contact Person & Designation -->
                        <div class="kny-loc-form-group">
                            <label for="rfp-contact-person" class="kny-loc-label"><?php esc_html_e('Contact Person & Designation', 'kny-theme'); ?></label>
                            <input type="text" id="rfp-contact-person" name="contact_person" required placeholder="<?php esc_attr_e('e.g. Ananya Rao (Mobility Lead)', 'kny-theme'); ?>" class="kny-loc-input">
                        </div>

                        <!-- Direct Phone / WhatsApp -->
                        <div class="kny-loc-form-group">
                            <label for="rfp-phone" class="kny-loc-label"><?php esc_html_e('Direct Phone / WhatsApp', 'kny-theme'); ?></label>
                            <input type="tel" id="rfp-phone" name="phone" required placeholder="<?php esc_attr_e('+91 98000 00000', 'kny-theme'); ?>" class="kny-loc-input">
                        </div>

                        <!-- Suite Configuration Dropdown -->
                        <div class="kny-loc-form-group">
                            <label for="rfp-config" class="kny-loc-label"><?php esc_html_e('Required Suite Configuration', 'kny-theme'); ?></label>
                            <select id="rfp-config" name="suite_config" class="kny-loc-select">
                                <option value="Multi-Unit Floor Wing"><?php esc_html_e('Multi-Unit Floor Wing (Team Allocation)', 'kny-theme'); ?></option>
                                <option value="2 BHK Executive Suite"><?php esc_html_e('2 BHK Executive Suite', 'kny-theme'); ?></option>
                                <option value="3 BHK Presidential Residence"><?php esc_html_e('3 BHK Presidential Residence', 'kny-theme'); ?></option>
                                <option value="Standard Executive Studio"><?php esc_html_e('Standard Executive Studio', 'kny-theme'); ?></option>
                                <option value="1 BHK Serviced Apartment"><?php esc_html_e('1 BHK Serviced Apartment', 'kny-theme'); ?></option>
                            </select>
                        </div>

                        <!-- Duration of Assignment -->
                        <div class="kny-loc-form-group">
                            <label for="rfp-duration" class="kny-loc-label"><?php esc_html_e('Estimated Duration of Assignment', 'kny-theme'); ?></label>
                            <select id="rfp-duration" name="duration" class="kny-loc-select">
                                <option value="14 to 30 Days"><?php esc_html_e('14 to 30 Days (Project Assignment)', 'kny-theme'); ?></option>
                                <option value="30+ Days"><?php esc_html_e('30+ Days (Corporate Relocation)', 'kny-theme'); ?></option>
                                <option value="3 to 14 Days"><?php esc_html_e('3 to 14 Days (Short Business Trip)', 'kny-theme'); ?></option>
                                <option value="Annual Master Retainer"><?php esc_html_e('Annual Master Service Retainer', 'kny-theme'); ?></option>
                            </select>
                        </div>

                        <!-- Specific Requirements (Full width) -->
                        <div class="kny-loc-form-group kny-loc-form-group-full">
                            <label for="rfp-requirements" class="kny-loc-label"><?php esc_html_e('Specific Requirements (GST Billing, Chauffeur, Food Plans, Billing Terms)', 'kny-theme'); ?></label>
                            <textarea id="rfp-requirements" name="requirements" rows="3" placeholder="<?php esc_attr_e('Provide any details regarding check-in dates, team count, meal packages, or compliance needs...', 'kny-theme'); ?>" class="kny-loc-textarea"></textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="kny-loc-form-submit-row">
                        <button type="submit" class="kny-btn-primary kny-loc-submit-btn">
                            <span><?php echo esc_html($submit_text); ?></span>
                            <span class="btn-arrow-right">→</span>
                        </button>
                    </div>

                    <!-- SLA Notice -->
                    <?php if ($sla_text): ?>
                        <div class="kny-loc-sla-notice">
                            <span class="sla-clock">⏱</span>
                            <span class="sla-text"><?php echo esc_html($sla_text); ?></span>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</section>
