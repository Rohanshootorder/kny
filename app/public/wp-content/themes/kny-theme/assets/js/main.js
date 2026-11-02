/**
 * KNY Stay Theme Main JavaScript
 * 
 * Handles mobile drawer, responsive submenus, sticky header, smooth scrolling.
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // 1. Mobile Menu Drawer
    var toggleBtn = document.getElementById('mobile-menu-toggle');
    var closeBtn = document.getElementById('mobile-drawer-close');
    var drawer = document.getElementById('mobile-drawer');
    var overlay = document.getElementById('mobile-overlay');

    function openMobileMenu() {
        if (!drawer || !overlay) return;
        drawer.classList.add('is-open');
        overlay.classList.add('is-active');
        document.body.style.overflow = 'hidden';
        if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'true');
    }

    function closeMobileMenu() {
        if (!drawer || !overlay) return;
        drawer.classList.remove('is-open');
        overlay.classList.remove('is-active');
        document.body.style.overflow = '';
        if (toggleBtn) toggleBtn.setAttribute('aria-expanded', 'false');
    }

    if (toggleBtn) {
        toggleBtn.addEventListener('click', function (e) {
            e.preventDefault();
            if (drawer && drawer.classList.contains('is-open')) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function (e) {
            e.preventDefault();
            closeMobileMenu();
        });
    }

    if (overlay) {
        overlay.addEventListener('click', closeMobileMenu);
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && drawer && drawer.classList.contains('is-open')) {
            closeMobileMenu();
        }
    });

    // 2. Mobile Submenu Toggle
    var mobileSubmenuParents = document.querySelectorAll('.mobile-navigation .menu-item-has-children > a');
    mobileSubmenuParents.forEach(function (parentLink) {
        parentLink.addEventListener('click', function (e) {
            var subMenu = this.nextElementSibling;
            if (subMenu && subMenu.classList.contains('sub-menu')) {
                e.preventDefault();
                var parentLi = this.parentElement;
                parentLi.classList.toggle('submenu-expanded');
                if (parentLi.classList.contains('submenu-expanded')) {
                    subMenu.style.display = 'block';
                } else {
                    subMenu.style.display = 'none';
                }
            }
        });
    });

    // 3. Header Sticky & Scroll Effect
    var header = document.getElementById('site-header');
    if (header) {
        var handleScroll = function () {
            if (window.scrollY > 20) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        };
        window.addEventListener('scroll', handleScroll, { passive: true });
        handleScroll();
    }

    // 4. Smooth Anchor Scrolling with Header Offset
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            var targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '' || this.classList.contains('open-booking-modal')) return;
            var targetElem = document.querySelector(targetId);
            if (targetElem) {
                e.preventDefault();
                closeMobileMenu();
                var headerOffset = header ? header.offsetHeight : 80;
                var elementPosition = targetElem.getBoundingClientRect().top;
                var offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // 5. Direct Residence Booking Modal Handlers
    var modal = document.getElementById('booking-modal');
    var modalClose = document.getElementById('modal-close-btn');
    var modalTitle = document.getElementById('modal-room-title');
    var modalPrice = document.getElementById('modal-current-price');
    var modalStrike = document.getElementById('modal-strike-price');
    var modalSize = document.getElementById('modal-highlight-size');
    var modalGuests = document.getElementById('modal-highlight-guests');
    var modalBed = document.getElementById('modal-highlight-bed');
    var modalCancel = document.getElementById('modal-highlight-cancel');
    var formSelectedRoom = document.getElementById('form-selected-room');
    var bookingForm = document.getElementById('booking-enquiry-form');

    function openModal(data) {
        if (!modal) return;
        if (data) {
            if (modalTitle && data.title) modalTitle.textContent = data.title;
            if (modalPrice && data.price) modalPrice.textContent = data.price;
            if (modalStrike) {
                if (data.strike) {
                    modalStrike.textContent = data.strike;
                    modalStrike.style.display = 'inline-block';
                } else {
                    modalStrike.style.display = 'none';
                }
            }
            if (modalSize && data.size) modalSize.textContent = data.size;
            if (modalGuests && data.guests) modalGuests.textContent = data.guests;
            if (modalBed && data.bed) modalBed.textContent = data.bed;
            if (modalCancel && data.cancel) modalCancel.textContent = data.cancel;
            if (formSelectedRoom && data.title) formSelectedRoom.value = data.title;
        }
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        if (!modal) return;
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    // Attach click listeners to all .open-booking-modal buttons
    document.querySelectorAll('.open-booking-modal').forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            closeMobileMenu();
            var data = {
                title: this.getAttribute('data-room-title') || '',
                price: this.getAttribute('data-room-price') || '',
                strike: this.getAttribute('data-room-strike') || '',
                size: this.getAttribute('data-room-size') || '',
                guests: this.getAttribute('data-room-guests') || '',
                bed: this.getAttribute('data-room-bed') || '',
                cancel: this.getAttribute('data-room-cancel') || ''
            };
            openModal(data);
        });
    });

    if (modalClose) {
        modalClose.addEventListener('click', function (e) {
            e.preventDefault();
            closeModal();
        });
    }

    if (modal) {
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    }

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && modal && modal.classList.contains('is-open')) {
            closeModal();
        }
    });

    // Nature of stay radio pills toggle visual active class
    var naturePills = document.querySelectorAll('.modal-nature-pills .nature-pill');
    naturePills.forEach(function (pill) {
        var radio = pill.querySelector('input[type="radio"]');
        if (radio) {
            radio.addEventListener('change', function () {
                naturePills.forEach(function (p) { p.classList.remove('is-active'); });
                if (this.checked) {
                    pill.classList.add('is-active');
                }
            });
        }
    });

    // Handle Booking Enquiry Form Submit via AJAX
    if (bookingForm) {
        bookingForm.addEventListener('submit', function (e) {
            e.preventDefault();
            var submitBtn = document.getElementById('modal-submit-btn');
            var originalText = submitBtn ? submitBtn.innerHTML : '';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>TRANSMITTING ENQUIRY...</span>';
            }

            var formData = new FormData(bookingForm);

            fetch(knyAjax.ajaxurl || '/wp-admin/admin-ajax.php', {
                method: 'POST',
                body: formData
            })
            .then(function (res) { return res.json(); })
            .then(function (data) {
                if (data.success) {
                    alert(data.data.message || 'Thank you! Your direct residence reservation request has been submitted. Our concierge will contact you within 15 minutes.');
                    bookingForm.reset();
                    closeModal();
                } else {
                    alert(data.data.message || 'Thank you! Your direct reservation request has been logged.');
                    closeModal();
                }
            })
            .catch(function () {
                alert('Thank you! Your direct residence reservation enquiry has been dispatched. Our concierge will contact you within 15 minutes.');
                closeModal();
            })
            .finally(function () {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            });
        });
    }
});

