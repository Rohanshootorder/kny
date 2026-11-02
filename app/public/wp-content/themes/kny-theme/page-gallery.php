<?php
/**
 * Template Name: Gallery Page
 *
 * Dedicated template for the KNY Residence Gallery page.
 * Fully dynamic via SCF (Secure Custom Fields) with pixel-perfect design.
 *
 * @package KNY_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main kny-gallery-page">
    <?php
    get_template_part('template-parts/sections/gallery/hero');
    get_template_part('template-parts/sections/gallery/grid');
    ?>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // 1. Category Filtering
        const filterPills = document.querySelectorAll('.kny-gallery-filter-pill');
        const cards = document.querySelectorAll('.kny-gallery-card');

        if (filterPills.length > 0 && cards.length > 0) {
            filterPills.forEach(pill => {
                pill.addEventListener('click', function () {
                    filterPills.forEach(p => {
                        p.classList.remove('is-active');
                        p.setAttribute('aria-selected', 'false');
                    });
                    this.classList.add('is-active');
                    this.setAttribute('aria-selected', 'true');

                    const selectedSlug = this.getAttribute('data-filter');

                    cards.forEach(card => {
                        const cardSlugs = (card.getAttribute('data-slugs') || '').split(' ');
                        if (selectedSlug === 'all' || cardSlugs.includes(selectedSlug)) {
                            card.style.display = 'inline-flex';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 20);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(8px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 200);
                        }
                    });
                });
            });
        }

        // 2. Studio View Lightbox Modal
        const modal = document.getElementById('kny-studio-modal');
        const backdrop = document.getElementById('kny-studio-backdrop');
        const closeBtn = document.getElementById('kny-studio-close');
        const modalImg = document.getElementById('kny-studio-modal-img');
        const modalTitle = document.getElementById('kny-studio-title');
        const modalDesc = document.getElementById('kny-studio-desc');
        const modalTags = document.getElementById('kny-studio-tags');

        function openStudioModal(card) {
            if (!modal) return;
            const imgSrc = card.getAttribute('data-image-src');
            const title = card.getAttribute('data-title');
            const desc = card.getAttribute('data-desc');
            const cat = card.getAttribute('data-category');
            const bhk = card.getAttribute('data-bhk');

            modalImg.src = imgSrc;
            modalImg.alt = title;
            modalTitle.textContent = title;
            modalDesc.textContent = desc;

            modalTags.innerHTML = '';
            if (cat) {
                const catSpan = document.createElement('span');
                catSpan.className = 'kny-card-tag kny-tag-light';
                catSpan.textContent = cat;
                modalTags.appendChild(catSpan);
            }
            if (bhk) {
                const bhkSpan = document.createElement('span');
                bhkSpan.className = 'kny-card-tag kny-tag-green';
                bhkSpan.textContent = bhk;
                modalTags.appendChild(bhkSpan);
            }

            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }

        function closeStudioModal() {
            if (!modal) return;
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
            modalImg.src = '';
        }

        cards.forEach(card => {
            card.addEventListener('click', () => openStudioModal(card));
            card.addEventListener('keydown', (e) => {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    openStudioModal(card);
                }
            });
        });

        if (closeBtn) closeBtn.addEventListener('click', closeStudioModal);
        if (backdrop) backdrop.addEventListener('click', closeStudioModal);
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && modal && modal.classList.contains('is-open')) {
                closeStudioModal();
            }
        });
    });
</script>

<?php
get_footer();

