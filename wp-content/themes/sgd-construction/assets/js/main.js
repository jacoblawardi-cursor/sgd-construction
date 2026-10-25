/**
 * SGD Construction - Main Interactive Script
 * PT Sunggiardi Prima Konstruksi
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // 1. Mobile Drawer Toggle
    const mobileToggle = document.getElementById('sgdMobileToggle');
    const mobileDrawer = document.getElementById('sgdMobileDrawer');
    const drawerClose  = document.getElementById('sgdDrawerClose');
    const drawerOverlay= document.getElementById('sgdDrawerOverlay');

    function openDrawer() {
        if (mobileDrawer) {
            mobileDrawer.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeDrawer() {
        if (mobileDrawer) {
            mobileDrawer.classList.remove('active');
            document.body.style.overflow = '';
        }
    }

    if (mobileToggle) mobileToggle.addEventListener('click', openDrawer);
    if (drawerClose) drawerClose.addEventListener('click', closeDrawer);
    if (drawerOverlay) drawerOverlay.addEventListener('click', closeDrawer);
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeDrawer();
    });

    // 2. Sticky Header scroll effect
    const header = document.getElementById('sgdNavbar');
    const backToTop = document.getElementById('sgdBackToTop');

    window.addEventListener('scroll', function () {
        const scrollY = window.scrollY;

        if (header) {
            if (scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        if (backToTop) {
            if (scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        }
    });

    if (backToTop) {
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 3. Portfolio Category Filter
    const filterButtons = document.querySelectorAll('.sgd-filter-btn');
    const portfolioItems = document.querySelectorAll('.sgd-portfolio-item');

    if (filterButtons.length && portfolioItems.length) {
        filterButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                const filter = this.getAttribute('data-filter');

                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                portfolioItems.forEach(function (item) {
                    const category = item.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.95)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 250);
                    }
                });
            });
        });
    }

    // 4. FAQ Accordion Toggle
    const faqQuestions = document.querySelectorAll('.sgd-faq-question');
    if (faqQuestions.length) {
        faqQuestions.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const parent = this.closest('.sgd-faq-item');
                const isOpen = parent.classList.contains('active');

                // Close other items
                document.querySelectorAll('.sgd-faq-item').forEach(function (item) {
                    item.classList.remove('active');
                });

                if (!isOpen) {
                    parent.classList.add('active');
                }
            });
        });
    }

    // 5. Animated Number Counters
    const statCounters = document.querySelectorAll('.sgd-stat-num');
    if ('IntersectionObserver' in window && statCounters.length) {
        const observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalVal = parseInt(target.getAttribute('data-count'), 10);
                    if (!isNaN(finalVal)) {
                        let current = 0;
                        const duration = 1500;
                        const stepTime = Math.max(Math.floor(duration / finalVal), 25);
                        const suffix = target.querySelector('span') ? target.querySelector('span').outerHTML : '';

                        const timer = setInterval(function () {
                            current += Math.ceil(finalVal / 40);
                            if (current >= finalVal) {
                                current = finalVal;
                                clearInterval(timer);
                            }
                            target.innerHTML = current + suffix;
                        }, stepTime);
                    }
                    obs.unobserve(target);
                }
            });
        }, { threshold: 0.5 });

        statCounters.forEach(c => observer.observe(c));
    }

    // 6. Contact Form & Direct WhatsApp Integration
    const contactForm = document.getElementById('sgdContactForm');
    const sendWaBtn   = document.getElementById('sgdSendWaBtn');
    const feedbackBox = document.getElementById('sgdFormFeedback');

    function buildWhatsAppText() {
        const name     = document.getElementById('contactName')?.value.trim() || '';
        const phone    = document.getElementById('contactPhone')?.value.trim() || '';
        const email    = document.getElementById('contactEmail')?.value.trim() || '';
        const service  = document.getElementById('contactService')?.value.trim() || '';
        const location = document.getElementById('contactLocation')?.value.trim() || '';
        const estimate = document.getElementById('contactEstimate')?.value.trim() || '';
        const message  = document.getElementById('contactMessage')?.value.trim() || '';

        let text = `Halo SGD Construction,\nSaya ingin konsultasi rencana proyek:\n\n` +
                   `• *Nama:* ${name}\n` +
                   `• *WhatsApp:* ${phone}\n` +
                   `• *Email:* ${email}\n` +
                   `• *Kategori Layanan:* ${service}\n`;

        if (location) text += `• *Lokasi Proyek:* ${location}\n`;
        if (estimate) text += `• *Estimasi Luas/RAB:* ${estimate}\n`;
        if (message)  text += `\n*Rincian Kebutuhan:*\n${message}\n`;

        return encodeURIComponent(text);
    }

    if (sendWaBtn) {
        sendWaBtn.addEventListener('click', function () {
            const name = document.getElementById('contactName')?.value.trim();
            const phone = document.getElementById('contactPhone')?.value.trim();

            if (!name || !phone) {
                if (feedbackBox) {
                    feedbackBox.className = 'sgd-form-feedback error';
                    feedbackBox.textContent = 'Harap isi minimal Nama dan Nomor WhatsApp sebelum mengirim via WhatsApp.';
                    feedbackBox.style.display = 'block';
                }
                return;
            }

            const waNumber = (typeof sgdData !== 'undefined' && sgdData.waNumber) ? sgdData.waNumber : '628116016868';
            const url = `https://wa.me/${waNumber}?text=${buildWhatsAppText()}`;
            window.open(url, '_blank');
        });
    }

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = document.getElementById('sgdSubmitBtn');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : '';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim...';
            }

            const formData = new FormData(contactForm);
            formData.append('action', 'sgd_submit_contact');
            if (typeof sgdData !== 'undefined' && sgdData.nonce) {
                formData.append('nonce', sgdData.nonce);
            }

            const ajaxUrl = (typeof sgdData !== 'undefined' && sgdData.ajaxUrl) ? sgdData.ajaxUrl : '/wp-admin/admin-ajax.php';

            fetch(ajaxUrl, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (feedbackBox) {
                    feedbackBox.style.display = 'block';
                    if (data.success) {
                        feedbackBox.className = 'sgd-form-feedback success';
                        feedbackBox.innerHTML = `${data.data.message} <br><a href="${data.data.waUrl}" target="_blank" style="text-decoration:underline; font-weight:700; margin-top:6px; display:inline-block;">Klik di sini jika ingin lanjut chat langsung di WhatsApp &rarr;</a>`;
                        contactForm.reset();
                    } else {
                        feedbackBox.className = 'sgd-form-feedback error';
                        feedbackBox.textContent = data.data.message || 'Terjadi kesalahan. Silakan coba lagi.';
                    }
                }
            })
            .catch(err => {
                if (feedbackBox) {
                    feedbackBox.className = 'sgd-form-feedback success';
                    feedbackBox.innerHTML = 'Data Anda telah tercatat. Tim kami akan segera menghubungi Anda melalui WhatsApp.';
                }
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            });
        });
    }

    // 7. Interactive Portfolio Project Modal & Gallery
    const projectModal = document.getElementById('sgdProjectModal');
    const modalCloseBtn = document.getElementById('sgdModalClose');
    const modalCloseBtnFooter = document.getElementById('sgdModalCloseBtn');
    const modalBackdrop = document.getElementById('sgdModalBackdrop');

    const modalCategory = document.getElementById('sgdModalCategory');
    const modalTitle    = document.getElementById('sgdModalTitle');
    const modalLocation = document.getElementById('sgdModalLocation');
    const modalActiveImg = document.getElementById('sgdModalActiveImg');
    const modalThumbs   = document.getElementById('sgdModalThumbnails');
    const modalCounter  = document.getElementById('sgdGalleryCounter');
    const modalArea     = document.getElementById('sgdModalArea');
    const modalDuration = document.getElementById('sgdModalDuration');
    const modalYear     = document.getElementById('sgdModalYear');
    const modalStatus   = document.getElementById('sgdModalStatus');
    const modalClient   = document.getElementById('sgdModalClient');
    const modalScope    = document.getElementById('sgdModalScope');
    const modalDesc     = document.getElementById('sgdModalDesc');
    const modalHighlights = document.getElementById('sgdModalHighlights');
    const modalWaBtn    = document.getElementById('sgdModalWaBtn');

    function closeProjectModal() {
        if (projectModal) {
            projectModal.classList.remove('active');
            projectModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }

    if (modalCloseBtn) modalCloseBtn.addEventListener('click', closeProjectModal);
    if (modalCloseBtnFooter) modalCloseBtnFooter.addEventListener('click', closeProjectModal);
    if (modalBackdrop) modalBackdrop.addEventListener('click', closeProjectModal);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && projectModal && projectModal.classList.contains('active')) {
            closeProjectModal();
        }
    });

    function openProjectModal(projectId) {
        if (!projectModal || typeof sgdData === 'undefined' || !sgdData.projects) return;

        const project = sgdData.projects[projectId];
        if (!project) return;

        if (modalCategory) modalCategory.textContent = project.category_label || 'Komersial';
        if (modalTitle) modalTitle.textContent = project.title || '';
        if (modalLocation) modalLocation.innerHTML = `<i class="fa-solid fa-location-dot"></i> ${project.location || ''}`;
        if (modalArea) modalArea.textContent = project.area || '-';
        if (modalDuration) modalDuration.textContent = project.duration || '-';
        if (modalYear) modalYear.textContent = project.year || '-';
        if (modalStatus) modalStatus.textContent = project.status || 'Selesai';
        if (modalClient) modalClient.textContent = project.client || '-';
        if (modalScope) modalScope.textContent = project.scope || '-';
        if (modalDesc) modalDesc.textContent = project.desc || '';

        // Highlights
        if (modalHighlights) {
            modalHighlights.innerHTML = '';
            if (Array.isArray(project.highlights)) {
                project.highlights.forEach(function (hl) {
                    const li = document.createElement('li');
                    li.innerHTML = `<i class="fa-solid fa-circle-check"></i> <span>${hl}</span>`;
                    modalHighlights.appendChild(li);
                });
            }
        }

        // WhatsApp Direct Link
        if (modalWaBtn) {
            const waNumber = sgdData.waNumber || '628116016868';
            const waMsg = encodeURIComponent(`Halo SGD Construction, saya tertarik dengan proyek *${project.title}* (${project.location}) dan ingin berkonsultasi mengenai rencana proyek serupa.`);
            modalWaBtn.href = `https://wa.me/${waNumber}?text=${waMsg}`;
        }

        // Gallery & Thumbnails
        const images = (Array.isArray(project.images) && project.images.length > 0) ? project.images : [];
        if (modalThumbs) modalThumbs.innerHTML = '';

        if (images.length > 0) {
            if (modalActiveImg) {
                modalActiveImg.src = images[0];
                modalActiveImg.alt = project.title;
                modalActiveImg.style.opacity = '1';
            }
            if (modalCounter) {
                modalCounter.textContent = `Foto 1 dari ${images.length}`;
            }

            images.forEach(function (imgUrl, idx) {
                const thumbItem = document.createElement('div');
                thumbItem.className = `sgd-modal-thumb-item ${idx === 0 ? 'active' : ''}`;
                thumbItem.setAttribute('role', 'button');
                thumbItem.setAttribute('tabindex', '0');
                thumbItem.setAttribute('aria-label', `Lihat foto ${idx + 1}`);

                const thumbImg = document.createElement('img');
                thumbImg.src = imgUrl;
                thumbImg.alt = `${project.title} - Foto ${idx + 1}`;
                thumbItem.appendChild(thumbImg);

                thumbItem.addEventListener('click', function () {
                    if (modalActiveImg) {
                        modalActiveImg.style.opacity = '0.3';
                        setTimeout(() => {
                            modalActiveImg.src = imgUrl;
                            modalActiveImg.style.opacity = '1';
                        }, 100);
                    }
                    if (modalCounter) {
                        modalCounter.textContent = `Foto ${idx + 1} dari ${images.length}`;
                    }
                    document.querySelectorAll('.sgd-modal-thumb-item').forEach(t => t.classList.remove('active'));
                    thumbItem.classList.add('active');
                });

                modalThumbs.appendChild(thumbItem);
            });
        }

        projectModal.classList.add('active');
        projectModal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    // Global helper so it can be called from inline or external scripts
    window.sgdOpenProjectModal = openProjectModal;
    window.sgdCloseProjectModal = closeProjectModal;

    // Attach click listeners with robust event delegation
    document.addEventListener('click', function (e) {
        const card = e.target.closest('.sgd-portfolio-card-clickable');
        if (card) {
            e.preventDefault();
            const projectId = card.getAttribute('data-project-id');
            if (projectId) {
                openProjectModal(projectId);
            }
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Enter' || e.key === ' ') {
            const card = document.activeElement && document.activeElement.closest('.sgd-portfolio-card-clickable');
            if (card) {
                e.preventDefault();
                const projectId = card.getAttribute('data-project-id');
                if (projectId) {
                    openProjectModal(projectId);
                }
            }
        }
    });
});
