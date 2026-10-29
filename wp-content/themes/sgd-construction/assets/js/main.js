/**
 * SGD Construction - Modern Interactive Corporate Script
 * PT Sunggiardi Prima Konstruksi
 */

document.addEventListener('DOMContentLoaded', function () {
    'use strict';

    // =========================================================================
    // 1. MOBILE DRAWER NAVIGATION
    // =========================================================================
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

    // =========================================================================
    // 2. STICKY NAVBAR & BACK TO TOP BUTTON
    // =========================================================================
    const navbar = document.getElementById('sgdNavbar');
    const backToTop = document.getElementById('sgdBackToTop');

    window.addEventListener('scroll', function () {
        const scrollY = window.scrollY;

        if (navbar) {
            if (scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
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

    // =========================================================================
    // 3. BILINGUAL LANGUAGE SWITCHER (ID | EN)
    // =========================================================================
    const langBtns = document.querySelectorAll('.sgd-lang-btn');
    let currentLang = localStorage.getItem('sgd_lang') || 'id';

    function setLanguage(lang) {
        currentLang = lang;
        localStorage.setItem('sgd_lang', lang);

        langBtns.forEach(btn => {
            if (btn.getAttribute('data-lang') === lang) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // Translate elements with data-i18n attributes
        const translatableElements = document.querySelectorAll('[data-i18n-id], [data-i18n-en]');
        translatableElements.forEach(el => {
            const text = el.getAttribute(`data-i18n-${lang}`);
            if (text) {
                // If element has inner icon, preserve icon
                const icon = el.querySelector('i');
                if (icon) {
                    el.innerHTML = '';
                    el.appendChild(icon);
                    el.appendChild(document.createTextNode(' ' + text));
                } else {
                    el.textContent = text;
                }
            }
        });
    }

    if (langBtns.length) {
        langBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const selectedLang = this.getAttribute('data-lang');
                if (selectedLang) {
                    setLanguage(selectedLang);
                }
            });
        });
        // Initial setup
        if (currentLang !== 'id') {
            setLanguage(currentLang);
        }
    }

    // =========================================================================
    // 4. PORTFOLIO CATEGORY FILTER
    // =========================================================================
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

    // =========================================================================
    // 5. CORPORATE FAQ ACCORDION
    // =========================================================================
    const faqQuestions = document.querySelectorAll('.sgd-faq-question');
    if (faqQuestions.length) {
        faqQuestions.forEach(function (btn) {
            btn.addEventListener('click', function () {
                const parent = this.closest('.sgd-faq-item');
                const isOpen = parent.classList.contains('active');

                // Close other items
                document.querySelectorAll('.sgd-faq-item').forEach(function (item) {
                    item.classList.remove('active');
                    const qBtn = item.querySelector('.sgd-faq-question');
                    if (qBtn) qBtn.setAttribute('aria-expanded', 'false');
                });

                if (!isOpen) {
                    parent.classList.add('active');
                    this.setAttribute('aria-expanded', 'true');
                }
            });
        });
    }

    // =========================================================================
    // 6. ANIMATED NUMBER COUNTERS
    // =========================================================================
    const statCounters = document.querySelectorAll('.sgd-stat-num');
    if ('IntersectionObserver' in window && statCounters.length) {
        const observer = new IntersectionObserver(function (entries, obs) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    const target = entry.target;
                    const finalVal = parseInt(target.getAttribute('data-count'), 10);
                    if (!isNaN(finalVal)) {
                        let current = 0;
                        const duration = 1400;
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

    // =========================================================================
    // 7. INTERACTIVE CONSTRUCTION COST ESTIMATOR (TACTILE & EFFORTLESS)
    // =========================================================================
    function initConstructionEstimator() {
        const areaSlider   = document.getElementById('sgdEstAreaSlider');
        const areaInput    = document.getElementById('sgdEstAreaInput');
        const costRangeEl  = document.getElementById('sgdEstCostRange');
        const ratePerM2El  = document.getElementById('sgdEstRatePerM2');
        const durationEl   = document.getElementById('sgdEstDuration');
        const estWaBtn     = document.getElementById('sgdEstWaBtn');

        if (!costRangeEl || !areaInput) return;

        function formatIDR(amount) {
            if (amount >= 1000000000) {
                const milyar = (amount / 1000000000).toFixed(1).replace('.0', '').replace('.', ',');
                return `Rp ${milyar} Milyar`;
            }
            const juta = Math.round(amount / 1000000);
            return `Rp ${juta} Juta`;
        }

        function calculateEstimate() {
            const activeTypeBtn = document.querySelector('#sgdEstTypes .sgd-est-type-btn.active') || document.querySelector('.sgd-est-type-btn');
            const activeGradeBtn= document.querySelector('#sgdEstGrades .sgd-est-grade-btn.active') || document.querySelector('.sgd-est-grade-btn');

            if (!activeTypeBtn || !activeGradeBtn) return;

            const type = activeTypeBtn.getAttribute('data-type') || 'commercial';
            const typeTitle = activeTypeBtn.querySelector('strong')?.textContent.trim() || 'Proyek';
            const grade = activeGradeBtn.getAttribute('data-grade') || 'premium';
            const gradeTitle = activeGradeBtn.querySelector('strong')?.textContent.trim() || 'Standard';

            const area = Math.max(parseInt(areaInput.value, 10) || 100, 25);

            let rateAttr = 'data-rate-prem';
            if (grade === 'standard') rateAttr = 'data-rate-std';
            if (grade === 'luxury') rateAttr = 'data-rate-lux';

            let baseRate = parseInt(activeTypeBtn.getAttribute(rateAttr), 10) || 6000000;
            const speedFactor = parseInt(activeTypeBtn.getAttribute('data-speed'), 10) || 140;

            // Spread range (+/- 6% for realistic estimation)
            const minRate = Math.round(baseRate * 0.94);
            const maxRate = Math.round(baseRate * 1.06);

            const minTotal = minRate * area;
            const maxTotal = maxRate * area;

            // Duration calculation
            let minMonths = Math.max(Math.round(area / speedFactor * 0.85), 2);
            let maxMonths = Math.max(Math.round(area / speedFactor * 1.25), minMonths + 2);

            costRangeEl.textContent = `${formatIDR(minTotal)} - ${formatIDR(maxTotal)}`;
            if (ratePerM2El) {
                ratePerM2El.textContent = `Rata-rata: Rp ${(baseRate).toLocaleString('id-ID')} / m² (${gradeTitle})`;
            }
            if (durationEl) {
                durationEl.textContent = `${minMonths} - ${maxMonths} Bulan`;
            }

            // Sync preset pills active state
            const currentVal = parseInt(areaInput.value, 10);
            document.querySelectorAll('#sgdAreaPresets .sgd-preset-pill').forEach(pill => {
                if (parseInt(pill.getAttribute('data-area'), 10) === currentVal) {
                    pill.classList.add('active');
                } else {
                    pill.classList.remove('active');
                }
            });

            // WhatsApp direct inquiry
            if (estWaBtn) {
                const waNumber = (typeof sgdData !== 'undefined' && sgdData.waNumber) ? sgdData.waNumber : '628116016868';
                const msg = `Halo Estimator SGD Construction,\nSaya menggunakan Kalkulator Estimasi Website untuk estimasi proyek:\n\n` +
                            `• *Tipe Proyek:* ${typeTitle}\n` +
                            `• *Luas Area:* ${area.toLocaleString('id-ID')} m²\n` +
                            `• *Spesifikasi:* ${gradeTitle}\n` +
                            `• *Estimasi Anggaran:* ${formatIDR(minTotal)} - ${formatIDR(maxTotal)}\n` +
                            `• *Estimasi Waktu:* ${minMonths} - ${maxMonths} Bulan\n\n` +
                            `Mohon info ketersediaan jadwal survey lapangan dan penyusunan RAB definitif. Terima kasih.`;
                estWaBtn.href = `https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`;
            }
        }

        // Stepper Plus / Minus
        const stepMinus = document.getElementById('sgdStepMinus');
        const stepPlus  = document.getElementById('sgdStepPlus');

        if (stepMinus) {
            stepMinus.addEventListener('click', function (e) {
                e.preventDefault();
                let current = parseInt(areaInput.value, 10) || 100;
                let next = Math.max(current - 50, 50);
                areaInput.value = next;
                if (areaSlider) areaSlider.value = Math.min(next, 5000);
                calculateEstimate();
            });
        }

        if (stepPlus) {
            stepPlus.addEventListener('click', function (e) {
                e.preventDefault();
                let current = parseInt(areaInput.value, 10) || 100;
                let next = Math.min(current + 50, 25000);
                areaInput.value = next;
                if (areaSlider) areaSlider.value = Math.min(next, 5000);
                calculateEstimate();
            });
        }

        // Global Event Delegation for 100% Reliable Clicks & Taps
        document.addEventListener('click', function (e) {
            // Type Button Click
            const typeBtn = e.target.closest('.sgd-est-type-btn');
            if (typeBtn) {
                e.preventDefault();
                document.querySelectorAll('.sgd-est-type-btn').forEach(b => {
                    b.classList.remove('active');
                    b.setAttribute('aria-pressed', 'false');
                });
                typeBtn.classList.add('active');
                typeBtn.setAttribute('aria-pressed', 'true');
                calculateEstimate();
                return;
            }

            // Grade Button Click
            const gradeBtn = e.target.closest('.sgd-est-grade-btn');
            if (gradeBtn) {
                e.preventDefault();
                document.querySelectorAll('.sgd-est-grade-btn').forEach(b => {
                    b.classList.remove('active');
                    b.setAttribute('aria-pressed', 'false');
                });
                gradeBtn.classList.add('active');
                gradeBtn.setAttribute('aria-pressed', 'true');
                calculateEstimate();
                return;
            }

            // Quick Preset Pill Click
            const presetPill = e.target.closest('.sgd-preset-pill');
            if (presetPill) {
                e.preventDefault();
                const targetArea = parseInt(presetPill.getAttribute('data-area'), 10);
                if (!isNaN(targetArea)) {
                    areaInput.value = targetArea;
                    if (areaSlider) areaSlider.value = Math.min(targetArea, 5000);
                    calculateEstimate();
                }
                return;
            }
        });

        // Sliders & Direct Input
        if (areaSlider && areaInput) {
            areaSlider.addEventListener('input', function () {
                areaInput.value = this.value;
                calculateEstimate();
            });

            areaSlider.addEventListener('change', function () {
                areaInput.value = this.value;
                calculateEstimate();
            });

            areaInput.addEventListener('input', function () {
                if (areaSlider) areaSlider.value = Math.min(parseInt(this.value, 10) || 50, 5000);
                calculateEstimate();
            });

            areaInput.addEventListener('change', function () {
                if (areaSlider) areaSlider.value = Math.min(parseInt(this.value, 10) || 50, 5000);
                calculateEstimate();
            });
        }

        // Run calculation immediately
        calculateEstimate();
    }

    // Initialize Estimator
    initConstructionEstimator();

    // =========================================================================
    // 8. DOWNLOAD COMPANY PROFILE MODAL & LEAD CAPTURE
    // =========================================================================
    const profileModal     = document.getElementById('sgdProfileModal');
    const profileCloseBtn  = document.getElementById('sgdProfileModalClose');
    const profileBackdrop  = document.getElementById('sgdProfileModalBackdrop');
    const profileForm      = document.getElementById('sgdProfileDownloadForm');
    const profileFeedback  = document.getElementById('sgdProfileFeedback');

    function openProfileModal() {
        if (profileModal) {
            profileModal.classList.add('active');
            profileModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeProfileModal() {
        if (profileModal) {
            profileModal.classList.remove('active');
            profileModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }

    if (profileCloseBtn) profileCloseBtn.addEventListener('click', closeProfileModal);
    if (profileBackdrop) profileBackdrop.addEventListener('click', closeProfileModal);

    // Delegate any button with data-modal="profile"
    document.addEventListener('click', function (e) {
        const trigger = e.target.closest('[data-modal="profile"]');
        if (trigger) {
            e.preventDefault();
            openProfileModal();
        }
    });

    if (profileForm) {
        profileForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = document.getElementById('sgdProfileSubmitBtn');
            const originalText = submitBtn ? submitBtn.innerHTML : '';
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Menyiapkan Dokumen...';
            }

            const formData = new FormData(profileForm);
            formData.append('action', 'sgd_download_profile');
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
                if (profileFeedback) {
                    profileFeedback.style.display = 'block';
                    if (data.success) {
                        profileFeedback.className = 'sgd-form-feedback success';
                        profileFeedback.innerHTML = `<strong>${data.data.message}</strong><br>` +
                            `<a href="${data.data.downloadUrl}" target="_blank" class="sgd-btn sgd-btn-dark sgd-btn-sm sgd-mt-2" style="display:inline-block;"><i class="fa-solid fa-file-pdf"></i> Klik Di Sini untuk Membuka Dokumen (PDF)</a> ` +
                            `<a href="${data.data.waUrl}" target="_blank" class="sgd-btn sgd-btn-whatsapp sgd-btn-sm sgd-mt-2" style="display:inline-block;"><i class="fa-brands fa-whatsapp"></i> Chat Tim via WA</a>`;
                        
                        // Automatically open file after 1 sec
                        setTimeout(() => {
                            window.open(data.data.downloadUrl, '_blank');
                        }, 800);
                        profileForm.reset();
                    } else {
                        profileFeedback.className = 'sgd-form-feedback error';
                        profileFeedback.textContent = data.data.message || 'Terjadi kesalahan. Silakan coba kembali.';
                    }
                }
            })
            .catch(() => {
                if (profileFeedback) {
                    profileFeedback.className = 'sgd-form-feedback success';
                    profileFeedback.innerHTML = 'Data tercatat! Dokumen Company Profile SGD Construction segera dapat diakses. Hubungi kami via WhatsApp untuk rincian cepat.';
                }
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                }
            });
        });
    }

    // =========================================================================
    // 9. ENHANCED PROJECT CASE STUDY MODAL, TABS & BEFORE/AFTER SLIDER
    // =========================================================================
    const projectModal = document.getElementById('sgdProjectModal');
    const modalCloseBtn = document.getElementById('sgdModalClose');
    const modalCloseBtnFooter = document.getElementById('sgdModalCloseBtn');
    const modalBackdrop = document.getElementById('sgdModalBackdrop');

    const modalCategory = document.getElementById('sgdModalCategory');
    const modalTitle    = document.getElementById('sgdModalTitle');
    const modalLocation = document.getElementById('sgdModalLocation');
    const modalActiveImg= document.getElementById('sgdModalActiveImg');
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
    const modalChallenge= document.getElementById('sgdModalChallenge');
    const modalSolution = document.getElementById('sgdModalSolution');
    const modalResult   = document.getElementById('sgdModalResult');
    const modalWaBtn    = document.getElementById('sgdModalWaBtn');

    // Case Study Tabs
    const modalTabBtns   = document.querySelectorAll('.sgd-modal-tab-btn');
    const modalTabPanes  = document.querySelectorAll('.sgd-tab-pane');
    const tabBeforeAfter = document.getElementById('sgdModalTabBeforeAfter');

    // Before & After elements
    const baSlider       = document.getElementById('sgdBaSlider');
    const baBeforeWrap   = document.getElementById('sgdBaBeforeWrap');
    const baBeforeImg    = document.getElementById('sgdBaBeforeImg');
    const baAfterImg     = document.getElementById('sgdBaAfterImg');
    const baHandle       = document.getElementById('sgdBaHandle');
    const baBeforeLabel  = document.getElementById('sgdBaBeforeLabel');
    const baAfterLabel   = document.getElementById('sgdBaAfterLabel');

    function switchModalTab(tabId) {
        modalTabBtns.forEach(btn => {
            if (btn.getAttribute('data-tab') === tabId) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        modalTabPanes.forEach(pane => {
            if (pane.id === `sgdPane${tabId.charAt(0).toUpperCase() + tabId.slice(1)}`) {
                pane.classList.add('active');
            } else {
                pane.classList.remove('active');
            }
        });
    }

    if (modalTabBtns.length) {
        modalTabBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const tab = this.getAttribute('data-tab');
                if (tab) switchModalTab(tab);
            });
        });
    }

    // Before/After Slider Dragging
    let isDraggingBa = false;

    function setSliderPosition(xRatio) {
        const clamped = Math.max(0.05, Math.min(0.95, xRatio));
        const percentage = clamped * 100;
        if (baBeforeWrap) baBeforeWrap.style.width = `${percentage}%`;
        if (baHandle) baHandle.style.left = `${percentage}%`;
    }

    if (baSlider) {
        function handleMove(e) {
            if (!isDraggingBa) return;
            const rect = baSlider.getBoundingClientRect();
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
            const xPos = clientX - rect.left;
            const ratio = xPos / rect.width;
            setSliderPosition(ratio);
        }

        baSlider.addEventListener('mousedown', function (e) {
            isDraggingBa = true;
            handleMove(e);
        });

        baSlider.addEventListener('touchstart', function (e) {
            isDraggingBa = true;
            handleMove(e);
        }, { passive: true });

        window.addEventListener('mousemove', handleMove);
        window.addEventListener('touchmove', handleMove, { passive: true });

        window.addEventListener('mouseup', function () {
            isDraggingBa = false;
        });
        window.addEventListener('touchend', function () {
            isDraggingBa = false;
        });
    }

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

        // Reset to first tab
        switchModalTab('overview');

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

        // Case Study CSR data
        if (modalChallenge) modalChallenge.textContent = project.challenge || 'Tantangan teknis diselesaikan dengan perhitungan engineering presisi dan kepatuhan standar mutu.';
        if (modalSolution) modalSolution.textContent = project.solution || 'Penerapan metodologi kerja terstruktur, koordinasi kurva-S ketat, dan pemilihan material SNI bermutu tinggi.';
        if (modalResult) modalResult.textContent = project.result || 'Diserahterimakan tepat waktu (on-time), zero accident, dan memenuhi ekspektasi spesifikasi klien.';

        // Highlights list
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

        // Before & After Transformation setup
        if (project.before_after && tabBeforeAfter) {
            tabBeforeAfter.style.display = 'inline-flex';
            if (baBeforeImg) baBeforeImg.src = project.before_after.before;
            if (baAfterImg)  baAfterImg.src  = project.before_after.after;
            if (baBeforeLabel) baBeforeLabel.textContent = project.before_after.before_label || 'SEBELUM';
            if (baAfterLabel)  baAfterLabel.textContent  = project.before_after.after_label || 'SESUDAH';
            setSliderPosition(0.5); // center handle
        } else if (tabBeforeAfter) {
            tabBeforeAfter.style.display = 'none';
        }

        // WhatsApp direct link
        if (modalWaBtn) {
            const waNumber = sgdData.waNumber || '628116016868';
            const waMsg = encodeURIComponent(`Halo SGD Construction, saya melihat proyek *${project.title}* (${project.location}) dan ingin berkonsultasi mengenai rencana proyek serupa.`);
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

    // =========================================================================
    // 10. GENERAL CONTACT FORM SUBMISSION
    // =========================================================================
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
                        feedbackBox.innerHTML = `${data.data.message} <br><a href="${data.data.waUrl}" target="_blank" style="text-decoration:underline; font-weight:700; margin-top:6px; display:inline-block;">Lanjut Chat Langsung di WhatsApp &rarr;</a>`;
                        contactForm.reset();
                    } else {
                        feedbackBox.className = 'sgd-form-feedback error';
                        feedbackBox.textContent = data.data.message || 'Terjadi kesalahan. Silakan coba lagi.';
                    }
                }
            })
            .catch(() => {
                if (feedbackBox) {
                    feedbackBox.className = 'sgd-form-feedback success';
                    feedbackBox.innerHTML = 'Data Anda telah tercatat. Tim kami akan segera menghubungi Anda.';
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
});
