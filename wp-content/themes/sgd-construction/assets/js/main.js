/**
 * SGD Construction - Modern Interactive Corporate Script
 * SGD Construction
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
    // 3. COMPREHENSIVE BILINGUAL TRANSLATION ENGINE (ID <-> EN)
    // =========================================================================
    const langBtns = document.querySelectorAll('.sgd-lang-btn');
    let currentLang = localStorage.getItem('sgd_lang') || 'id';

    // Comprehensive Dictionary for Full-Site Translation
    const sgdTranslations = {
        // Topbar & Navigation
        "Sen - Jum: 08:30 - 17:30 WIB": "Mon - Fri: 08:30 - 17:30 WIB",
        "Hubungi Kami Langsung:": "Contact Us Directly:",
        "Beranda": "Home",
        "Tentang Kami": "About Us",
        "Layanan Konstruksi": "Construction Services",
        "Portofolio Proyek": "Project Portfolio",
        "Hubungi Kami": "Contact Us",
        "Company Profile": "Company Deck",
        "Konsultasi Proyek": "Project Inquiry",
        "Download Company Profile (PDF)": "Download Company Deck (PDF)",
        "Lihat Portofolio Proyek": "View Projects Portfolio",
        "Tema:": "Theme:",
        "Ganti Bahasa": "Switch Language",

        // Hero Section & Metrics Strip
        "Membangun dengan Cermat, Menjaga Kepercayaan": "Building with Care, Preserving Trust",
        "Membangun dengan Cermat": "Building with Care",
        "Menjaga Kepercayaan": "Preserving Trust",
        "Jasa pembangunan dan renovasi rumah serta bangunan komersial, dengan proses yang transparan dan perhatian pada kualitas di setiap tahap.": "Residential and commercial construction and renovation services, delivered through transparent processes and attention to quality at every stage.",
        "50+ tahun pengalaman industri": "50+ years of industry experience",
        "120+ Proyek selesai dan diserahterimakan": "120+ completed and delivered projects",
        "99% tingkat kepuasan": "99% satisfaction rate",
        "30+ Tukang dan Professional bangunan yang berpengalaman": "30+ experienced builders and construction professionals",
        "Tahun Pengalaman Industri": "Years of Industry Experience",
        "Proyek Selesai & Diserahterimakan": "Completed & Handed-Over Projects",
        "Tingkat Kepuasan": "Satisfaction Rate",
        "Tukang dan Professional Bangunan Berpengalaman": "Experienced Builders & Construction Professionals",
        "Konsultasi Proyek (08116016868)": "Project Consultation (WA)",

        // About Summary Section
        "TENTANG SGD CONSTRUCTION": "ABOUT SGD CONSTRUCTION",
        "Warisan Tiga Generasi, Dibangun dengan Kepedulian": "Three-Generation Heritage, Built with Care",
        "Berakar pada pengalaman tiga generasi keluarga dalam dunia konstruksi, SGD Construction memadukan keterampilan membangun dengan pengelolaan proyek yang terstruktur dan transparan. Kami melayani pembangunan dan renovasi rumah serta bangunan komersial dengan perhatian pada detail, kebutuhan pemilik, dan manfaat bangunan dalam jangka panjang.": "Rooted in three generations of family experience in the construction industry, SGD Construction blends building craftsmanship with structured, transparent project management. We serve residential and commercial construction and renovation with attention to detail, owners' needs, and long-term building benefits.",
        "Keterampilan yang Diwariskan": "Inherited Craftsmanship",
        "Ketelitian dan pengalaman lapangan yang tumbuh lintas generasi.": "Meticulous precision and field expertise developed across generations.",
        "Pengelolaan yang Terbuka": "Transparent Management",
        "Kejelasan lingkup, anggaran, dan perkembangan pekerjaan.": "Clarity in scope, budgeting, and project milestones.",
        "Kepedulian Jangka Panjang": "Long-Term Care",
        "Perhatian pada kualitas bangunan dan hubungan dengan pemilik setelah serah terima.": "Dedicated focus on building quality and enduring relationships with owners after handover.",
        "Pelajari Profil Perusahaan Selengkapnya": "Learn More About Our Company Profile",

        // Core Services
        "LAYANAN KAMI": "OUR SERVICES",
        "01 — Rumah Tinggal": "01 — Residential Living",
        "Pembangunan dan renovasi rumah dengan perhatian pada kebutuhan penghuni, ketelitian pengerjaan, dan kenyamanan jangka panjang.": "Residential construction and renovation with attention to resident needs, craftsmanship precision, and long-term living comfort.",
        "Pembangunan Rumah Baru": "New Home Construction",
        "Renovasi & Pengembangan Rumah": "Home Renovation & Expansion",
        "Peningkatan Fungsi & Kenyamanan": "Functionality & Comfort Enhancement",
        "Jelajahi Layanan Rumah →": "Explore Residential Services →",

        "02 — Bangunan Komersial": "02 — Commercial Buildings",
        "Pembangunan dan renovasi ruang usaha dengan memperhatikan fungsi bangunan, kebutuhan operasional, dan identitas bisnis Anda.": "Construction and renovation of commercial spaces focusing on building functionality, operational efficiency, and your brand identity.",
        "Kantor & Tempat Usaha": "Offices & Business Premises",
        "Ruko & Ruang Komersial": "Shophouses & Retail Spaces",
        "Renovasi & Penyesuaian Fasilitas": "Facility Renovation & Customization",
        "Jelajahi Layanan Komersial →": "Explore Commercial Services →",

        "03 — Proyek Khusus": "03 — Special Projects",
        "Pelaksanaan proyek dengan kebutuhan bentuk, fungsi, atau pengerjaan khusus melalui koordinasi bersama pemilik, perancang, dan mitra spesialis.": "Execution of bespoke projects with custom form, functional requirements, or specialized fabrication in synergy with owners, designers, and specialist partners.",
        "Konstruksi & Instalasi Khusus": "Specialized Construction & Installations",
        "Pengerjaan Berdasarkan Desain": "Design-Driven Craftsmanship",
        "Koordinasi Teknis & Pelaksanaan": "Technical & Field Coordination",
        "Diskusikan Proyek Khusus →": "Discuss Special Projects →",

        "04 — SGD Care": "04 — SGD Care",
        "Perawatan berkala dan perbaikan properti untuk menjaga kondisi bangunan, kenyamanan pengguna, dan mencegah masalah berkembang.": "Periodic maintenance and property repairs to safeguard building condition, user comfort, and prevent issues before they escalate.",
        "Perawatan Properti Berkala": "Periodic Property Maintenance",
        "Perbaikan Bangunan & Utilitas": "Building & Utility Repairs",
        "Perawatan & Perbaikan AC": "HVAC & AC Servicing",
        "Kenali SGD Care →": "Discover SGD Care →",
        "Lengkapnya cek SGD Material Standard": "Check SGD Material Standard for Full Specs",

        // Core Services
        "LAYANAN KAMI": "OUR SERVICES",
        "Layanan Komprehensif Konstruksi & Rancang Bangun": "Comprehensive Construction & Design-Build Services",
        "Dari tahap perencanaan awal, perizinan, hingga pelaksanaan fisik dan perawatan paska serah terima.": "From initial architectural planning, permits, to physical execution and post-handover maintenance.",
        "General Contracting & Sipil": "General Contracting & Civil Works",
        "Pembangunan gedung komersial, gedung perkantoran, perumahan eksklusif, pergudangan, hingga infrastruktur sipil dengan pengawasan mutu ketat.": "Construction of commercial high-rises, corporate offices, luxury residences, warehouses, and civil infrastructure with strict QA/QC.",
        "Bangunan Komersial & Kantor": "Commercial Buildings & Offices",
        "Hunian Residensial Mewah": "Luxury Residential Homes",
        "Pergudangan & Pabrik Industri": "Warehousing & Industrial Facilities",
        "Desain Arsitektur & Struktur": "Architectural & Structural Design",
        "Perencanaan desain arsitektural mutakhir, pemodelan 3D visualisasi fotorealistik, perhitungan kalkulasi struktur SAP/ETABS berstandar gempa.": "Cutting-edge architectural design, photorealistic 3D visualization, and earthquake-resistant structural engineering via SAP/ETABS.",
        "Konsep Arsitektur Modern": "Modern Architectural Concepts",
        "Perhitungan Struktur & Fondasi": "Structural & Foundation Engineering",
        "Gambar Kerja & IMB/PBG": "Working Drawings & Building Permits (PBG)",
        "Interior Fit-Out & Renovasi": "Interior Fit-Out & Renovation",
        "Pengerjaan interior kustom untuk kantor korporat, retail, gerai komersial, dan hunian mewah. Termasuk kustom furniture dan tata pencahayaan.": "Bespoke interior execution for corporate offices, retail spaces, commercial outlets, and luxury homes, including custom joinery and lighting.",
        "Fit-Out Kantor Korporat": "Corporate Office Fit-Out",
        "Custom Built-in Cabinetry": "Custom Built-in Cabinetry",
        "Renovasi & Re-layout Ruang": "Renovation & Spatial Re-layout",
        "MEP & HVAC Engineering": "MEP & HVAC Engineering",
        "Instalasi mekanikal, elektrikal, tata udara (HVAC central/split duct), sistem pencegahan kebakaran (hydrant/sprinkler), dan smart building automation.": "Mechanical, electrical, HVAC installation (central/split duct), fire protection systems (hydrant/sprinklers), and smart building automation.",
        "Sistem Kelistrikan & Genset": "Electrical Power Systems & Generators",
        "Fire Protection & Hydrant": "Fire Protection & Hydrants",
        "Tata Udara HVAC & Chiller": "HVAC Air Conditioning & Chillers",
        "SGD Care: Property Maintenance": "SGD Care: Property Maintenance",
        "Unit khusus pemeliharaan berkala gedung, kantor, dan rumah tinggal. Menangani perbaikan sipil cepat, water leakage, kelistrikan, dan servis AC.": "Specialized maintenance unit for commercial facilities, offices, and residential properties. Handling rapid civil repairs, waterproofing, electrical, and HVAC.",
        "Perawatan Berkala & Kontrak Tahunan": "Periodic Maintenance & Annual AMC Contracts",
        "Deteksi & Perbaikan Kebocoran": "Leak Detection & Waterproofing Repairs",
        "Tim Respon Cepat Maintenance": "Rapid Response Maintenance Team",
        "Detail Layanan": "Service Details",
        "Eksplorasi Semua Detail Layanan Kami": "Explore All Our Services in Detail",

        // Cost Estimator Section
        "ESTIMASI ANGGARAN CEPAT & TRANSPARAN": "FAST & TRANSPARENT BUDGET ESTIMATE",
        "Kalkulator Estimasi Biaya Konstruksi & Rancang Bangun": "Construction & Design-Build Cost Estimator",
        "Dapatkan gambaran awal estimasi biaya dan durasi proyek Anda secara instan dalam 3 langkah mudah sebelum konsultasi teknis mendalam bersama tim engineer SGD.": "Get an instant preliminary estimate of project budget and timeline in 3 simple steps before an in-depth consultation with our engineering team.",
        "Pilih Kategori / Tipe Proyek:": "1. Select Project Category / Type:",
        "Gedung / Kantor": "Commercial / Office",
        "Komersial, Ruko & Plaza": "Commercial, Shophouses & Plazas",
        "Residensial Mewah": "Luxury Residential",
        "Rumah Tinggal & Villa": "Private Houses & Villas",
        "Interior Fit-Out": "Interior Fit-Out",
        "Office, Retail & Custom": "Office, Retail & Custom",
        "Gudang / Pabrik": "Warehouse / Factory",
        "Konstruksi Baja Bentang": "Wide-Span Steel Construction",
        "SGD Care AMC": "SGD Care AMC",
        "Maintenance Kontrak": "Annual Maintenance Contract",
        "Estimasi Luas Area (GFA):": "2. Estimated Gross Floor Area (GFA):",
        "Pilihan Cepat:": "Quick Presets:",
        "Tingkat Spesifikasi Material & Finishing:": "3. Material & Finishing Specification Grade:",
        "Standar Korporat SNI": "SNI Corporate Standard",
        "Material kokoh teruji SNI, sanitair standar, cat tahan cuaca.": "Durable SNI-tested materials, standard sanitaryware, weather-resistant paint.",
        "Populer": "Popular",
        "Premium Commercial": "Premium Commercial",
        "Granit tile 80x80/100x100, kusen YKK, Toto sanitair, cat Jotun/Dulux.": "80x80/100x100 granite tile, YKK framing, Toto sanitary, Jotun/Dulux paint.",
        "Luxury / High-End": "Luxury / High-End",
        "Slab marmer impor Italia, smart building automation, curtain wall Low-E.": "Italian imported marble slabs, smart building automation, Low-E curtain wall.",
        "HASIL KALKULASI ESTIMASI": "ESTIMATED CALCULATION RESULTS",
        "Perkiraan Rentang Anggaran:": "Estimated Budget Range:",
        "Estimasi Durasi Kerja:": "Estimated Project Timeline:",
        "Jaminan & Kualitas:": "Guarantee & Quality:",
        "Garansi Struktur + Sertifikat SMK3": "Structural Warranty + SMK3 Certified",
        "Sistem Kontrak:": "Contract Mechanism:",
        "Fixed Cost (Bebas Biaya Tak Terduga)": "Fixed Cost (No Hidden Escalations)",
        "Kirim Rincian Estimasi ke WA Estimator": "Send Estimate Details to Estimator via WA",
        "Download Corporate Deck & Spesifikasi": "Download Corporate Deck & Specifications",

        // Portfolio Section
        "PORTOFOLIO TERBARU": "RECENT PORTFOLIO",
        "Karya & Rekam Jejak Konstruksi Kami": "Our Works & Engineering Track Record",
        "Lihat Semua Proyek": "View All Projects",
        "Semua Proyek": "All Projects",
        "Komersial & Gedung": "Commercial & High-Rise",
        "Interior & Fit-Out": "Interior & Fit-Out",
        "Industri & Gudang": "Industrial & Warehouses",

        // Corporate Compliance, Legalities & Materials
        "LEGALITAS & STANDAR KUALITAS KORPORAT": "CORPORATE LEGALITIES & QUALITY STANDARDS",
        "Kepatuhan Regulasi Penuh & Kemitraan Rantai Pasok Teruji": "Full Regulatory Compliance & Proven Supply Chain Partnerships",
        "Sebagai kontraktor terpercaya, SGD Construction mematuhi seluruh perizinan nasional dan bermitra dengan produsen material tier-1 untuk menjamin ketahanan bangunan Anda.": "As a trusted contractor, SGD Construction adheres to all national building regulations and partners with tier-1 material producers to guarantee exceptional durability.",
        "BADAN HUKUM RESMI": "OFFICIAL CORPORATE ENTITY",
        "Terdaftar resmi di Kemenkumham RI dengan NIB & Izin Usaha Jasa Konstruksi (IUJK / OSS-RBA) aktif.": "Officially registered at the Ministry of Law & Human Rights RI with active NIB & Construction Business License (IUJK / OSS-RBA).",
        "Terverifikasi Legal": "Legally Verified",
        "SMK3 & KESELAMATAN": "SMK3 & WORKPLACE SAFETY",
        "Standar K3 / SMK3 (PP 50/2012)": "HSE / SMK3 Standard (PP 50/2012)",
        "Protokol Sistem Manajemen K3 ketat di setiap site proyek dengan komitmen Zero Accident.": "Rigorous OHS Management System protocols on every construction site with a Zero Accident commitment.",
        "Zero Lost Time Injury": "Zero Lost Time Injury",
        "STANDAR MUTU SNI": "SNI QUALITY STANDARDS",
        "ISO 9001:2015 Quality System": "ISO 9001:2015 Quality System",
        "Standarisasi pengujian laboratorium mutu beton (slump & cylinder test) serta uji tarik baja berkala.": "Standardized laboratory concrete quality testing (slump & cylinder test) and periodic rebar tensile tests.",
        "100% SNI Compliant": "100% SNI Compliant",
        "TENAGA AHLI LPJK": "LPJK CERTIFIED ENGINEERS",
        "Engineer SKA / SKK Bersertifikat": "Certified SKA / SKK Engineers",
        "Site Manager, Quality Control, dan Ahli Struktur terdaftar di asosiasi profesi resmi (HAKI, IAI, PII).": "Site Managers, Quality Controllers, and Structural Engineers registered with official associations (HAKI, IAI, PII).",
        "Sertifikasi Nasional": "National Certification",
        "Jam Kerja Aman (Safe Man-Hours)": "Safe Work Man-Hours (Zero Fatality)",
        "Lolos Uji Tekan Laboratorium KAN": "Passed KAN Laboratory Press Tests",
        "Kasus Fatality (Zero Major Accident)": "Major Accidents / Fatalities",
        "Garansi Pemeliharaan Kebocoran & Struktur": "Structural & Leakage Warranty",
        "5 Tahun": "5 Years",
        "Mitra Produsen Material & Rantai Pasok Resmi SGD:": "Official Supply Chain & Tier-1 Manufacturing Partners:",
        "Baja Tulangan SNI": "SNI Structural Rebar",
        "Ready-Mix & Semen Tahan Sulfat": "Ready-Mix & Sulfate-Resistant Cement",
        "Sanitair Komersial & Residensial": "Commercial & Residential Sanitaryware",
        "Panel Kelistrikan & Proteksi MEP": "Electrical Switchboards & MEP Protection",
        "Cat Arsitektural & Waterproofing": "Architectural Paints & Waterproofing",
        "Tata Udara HVAC Komersial": "Commercial HVAC & VRV Climate Control",
        "Kusen & Fasad Arsitektural": "Architectural Framing & Facades",
        "Waterproofing & Admixture Beton": "Waterproofing & Concrete Admixtures",

        // Work Process / Methodology
        "METODOLOGI KERJA KAMI": "OUR WORKING METHODOLOGY",
        "Tahapan Konstruksi Terstruktur & Terukur": "Structured & Measurable Construction Phases",
        "Kami menerapkan alur kerja yang terstandarisasi untuk menjamin kepastian jadwal dan kualitas bangunan tanpa kompromi.": "We implement standardized workflows to guarantee schedule certainty and uncompromising construction quality.",
        "Konsultasi & Feasibility Study": "Consultation & Feasibility Study",
        "Diskusi komprehensif mengenai visi kebutuhan, survey lokasi fisik, evaluasi teknis tanah, dan studi kelayakan rencana bangunan.": "Comprehensive discussion on vision requirements, physical site survey, soil technical assessment, and feasibility studies.",
        "Desain Arsitektur & Estimasi RAB": "Architectural Design & BOQ Estimation",
        "Pengembangan gambar arsitektur 3D, kalkulasi struktur teknis, dan perumusan Rencana Anggaran Biaya (RAB) yang presisi dan transparan.": "Development of 3D architectural plans, technical structural calculations, and formulation of an accurate, transparent Bill of Quantities (BOQ).",
        "Kontrak Legalitas & Pengadaan": "Legal Contracts & Procurement",
        "Penandatanganan SPK resmi bermaterai, pengurusan perizinan (PBG/SLF), dan seleksi pengadaan material sesuai spesifikasi kesepakatan.": "Execution of binding legal contracts (SPK), permit processing (PBG/SLF), and material procurement according to agreed specifications.",
        "Konstruksi & Quality Control": "Construction & Quality Control",
        "Pelaksanaan konstruksi di lapangan oleh tenaga terlatih di bawah supervisi ketat Site Manager dan Quality Control bersertifikat.": "On-site execution by skilled labor supervised closely by certified Site Managers and Quality Control engineers.",
        "Serah Terima & Garansi Pemeliharaan": "Handover & Maintenance Warranty",
        "Berita acara serah terima (BAST) setelah inspeksi final, penyerahan as-built drawing, serta masa garansi pemeliharaan struktural.": "Final handover report (BAST) following mutual inspection, delivery of as-built drawings, and warranty activation.",
        "Transparansi Penuh untuk Pemilik Proyek & Komite Korporat": "Full Transparency for Project Owners & Corporate Boards",
        "Kami menghilangkan kekhawatiran klasik keterlambatan dan biaya siluman dengan ekosistem pelaporan digital modern:": "We eliminate classic risks of delays and hidden expenses through a modern digital reporting ecosystem:",
        "Kurva-S & Laporan Digital Mingguan": "S-Curve Tracking & Weekly Digital Reports",
        "Pemantauan deviasi progress fisik vs rencana kerja secara berkala yang dikirimkan langsung ke manajemen owner.": "Continuous tracking of physical progress against schedule, delivered directly to the client's management.",
        "Dokumentasi Drone Aerial Berkala": "Periodic 4K Drone Aerial Documentation",
        "Inspeksi elevasi atap, struktur bentang tinggi, dan perkembangan tapak proyek dengan foto/video resolusi tinggi 4K.": "Roof elevations, high-span structures, and site progress surveyed with crystal-clear 4K aerial photography.",
        "Pengujian Uji Laboratorium KAN": "KAN Accredited Laboratory Testing",
        "Uji slump on-site setiap batch cor, tes tekan silinder beton umur 7, 14, 28 hari, serta uji tarik besi tulangan.": "On-site slump tests for each concrete batch, compressive tests at 7, 14, 28 days, and steel tensile testing.",
        "Garansi Harga Kontrak (Fixed-Cost)": "Fixed-Cost Contract Guarantee",
        "Perlindungan anggaran Anda dengan kontrak definitif tanpa kenaikan biaya sepihak di tengah proses pembangunan.": "Budget protection backed by definitive contracts with zero unilateral cost escalations during construction.",

        // Why Choose Us
        "NILAI KEUNGGULAN": "OUR CORE ADVANTAGES",
        "Mengapa Mempercayakan Proyek Anda pada SGD Construction?": "Why Entrust Your Construction Project to SGD?",
        "Keberhasilan setiap proyek konstruksi berawal dari kepercayaan dan ketepatan eksekusi. Kami memberikan jaminan kepastian dari segala aspek.": "The success of every building project stems from trust and precise execution. We deliver complete certainty across every dimension.",
        "Legalitas Lengkap & Terpercaya": "Comprehensive & Trusted Legalities",
        "Beroperasi dengan perizinan konstruksi lengkap dan standar profesional SGD Construction.": "Operating with complete construction licensing and SGD Construction professional standards.",
        "Ketepatan Waktu (On-Time Delivery)": "On-Time Delivery Commitment",
        "Sistem manajemen kurva-S dan time-scheduling ketat untuk memastikan tanggal serah terima tidak meleset.": "Strict S-curve project management and disciplined scheduling ensuring handover deadlines are met.",
        "Anggaran Pasti & Bebas Biaya Tak Terduga": "Guaranteed Budget & Zero Hidden Costs",
        "Harga kontrak fix-cost yang mengikat sehingga Anda memiliki kepastian finansial dari awal hingga akhir proyek.": "Binding fixed-cost contract pricing providing complete financial certainty from start to finish.",
        "SGD Care Dukungan Purna Jual": "SGD Care After-Sales Support",
        "Dukungan paska konstruksi melalui unit SGD Care untuk perawatan jangka panjang gedung dan properti Anda.": "Post-construction support through our dedicated SGD Care division for ongoing building maintenance.",
        "Pantau progress proyek langsung dan dokumentasi lapangan kami di Instagram.": "Follow live project progress and field documentation on our Instagram.",
        "Kunjungi @sgdconstruction": "Visit @sgdconstruction",

        // FAQ Section
        "PERTANYAAN UMUM KLIEN (FAQ)": "FREQUENTLY ASKED QUESTIONS (FAQ)",
        "Informasi Seputar Layanan & Prosedur Kontrak SGD": "Information Regarding SGD Services & Contracting Procedures",
        "Pertanyaan paling sering diajukan oleh pemilik properti, pengembang, dan komite pengadaan korporat.": "Frequently asked questions by property owners, developers, and corporate procurement committees.",
        "Apakah SGD Construction melayani pengurusan perizinan (PBG & SLF)?": "Does SGD Construction handle building permits (PBG & SLF)?",
        "Bagaimana mekanisme termin pembayaran kontrak konstruksi di SGD?": "What is the construction contract payment milestone structure at SGD?",
        "Berapa lama masa garansi pemeliharaan (retensi) yang diberikan?": "How long is the structural retention and maintenance warranty period?",
        "Bagaimana SGD menjamin proyek selesai on-time tanpa biaya tambahan tak terduga?": "How does SGD guarantee on-time completion without unexpected additional costs?",
        "Apakah SGD melayani proyek di luar kawasan Jabodetabek?": "Does SGD accept construction projects outside the Greater Jakarta (Jabodetabek) region?",

        // CTA Banner
        "SIAP MEMULAI PROYEK ANDA?": "READY TO START YOUR PROJECT?",
        "Konsultasikan Rencana Bangunan Anda Sekarang": "Consult Your Building Plan With Us Today",
        "Dapatkan estimasi biaya awal, konsultasi teknis arsitektur & struktur langsung bersama tim engineer kami secara cepat melalui WhatsApp.": "Get preliminary cost estimates and direct technical consultations on architecture and structure with our engineers via WhatsApp.",
        "Chat WhatsApp 08116016868": "Chat WhatsApp 08116016868",
        "Kirim Form Inquiry": "Submit Inquiry Form",

        // Footer
        "KONSULTASI GRATIS": "FREE CONSULTATION",
        "Rencanakan Proyek Konstruksi Anda Bersama Tim Ahli SGD": "Plan Your Construction Project with SGD Engineering Experts",
        "Dari konsep desain hingga serah terima bangunan, kami siap mewujudkan visi bangunan terbaik Anda dengan standar mutu dan keselamatan tertinggi.": "From design concept to building handover, we are ready to realize your finest building vision with the highest quality and safety standards.",
        "Download Company Profile": "Download Company Deck",
        "Navigasi Utama": "Main Navigation",
        "Layanan Unggulan": "Featured Services",
        "Kontak Resmi": "Official Contact",
        "Beranda / Home": "Home",
        "Tentang Kami (About)": "About Us",
        "Hubungi Kami (Contact)": "Contact Us",
        "SGD Care: Building Maintenance": "SGD Care: Building Maintenance",
        "Kantor Operasional:": "Operational Office:",
        "WhatsApp (Chat Only):": "WhatsApp (Chat Only):",
        "Email Resmi:": "Official Email:",
        "Official Instagram:": "Official Instagram:",
        "Lokasi Kantor:": "Office Location:",
        "Hak Cipta Dilindungi Undang-Undang.": "All Rights Reserved.",
        "Kontraktor Umum, Arsitektur, Interior & MEP Profesional Indonesia.": "Professional General Contractor, Architecture, Interior & MEP in Indonesia.",

        // Modals
        "OFFICIAL CORPORATE DOCUMENT": "OFFICIAL CORPORATE DOCUMENT",
        "Unduh Company Profile SGD Construction": "Download SGD Construction Company Deck",
        "Dapatkan dokumen presentasi resmi kami yang mencakup: Portofolio proyek komersial & residensial, legalitas badan usaha, sertifikasi SMK3, metodologi konstruksi kurva-S, dan data kapabilitas rekayasa teknik SGD.": "Download our official presentation deck covering: commercial & residential portfolios, corporate legalities, SMK3 certifications, S-curve methodology, and SGD technical capabilities.",
        "Nama Lengkap": "Full Name",
        "Perusahaan / Instansi": "Company / Organization",
        "Nomor WhatsApp Aktif": "Active WhatsApp Number",
        "Email Kantor / Pribadi": "Office / Personal Email",
        "Kebutuhan / Ketertarikan Proyek": "Project Category / Interest",
        "Pembangunan Gedung Komersial & Kantor": "Commercial & Office Building Construction",
        "Pembangunan Rumah Mewah / Villa": "Luxury Residential / Villa Construction",
        "Interior Fit-Out & Renovasi Korporat": "Corporate Interior Fit-Out & Renovation",
        "Gudang / Fasilitas Industri Bentang Lebar": "Wide-Span Industrial Warehouse / Factory",
        "SGD Care: Kontrak Pemeliharaan Gedung (AMC)": "SGD Care: Building Maintenance Contract (AMC)",
        "Kemitraan Vendor / Subkontraktor": "Vendor / Subcontractor Partnership",
        "Estimasi Rencana Proyek": "Estimated Project Category",
        "Unduh Company Profile Resmi (PDF)": "Download Official Company Deck (PDF)",
        "Informasi Anda terjamin kerahasiaannya dan hanya digunakan untuk keperluan pengiriman materi korporat SGD.": "Your information is strictly confidential and used solely for delivering SGD corporate materials.",
        "HUBUNGI KAMI VIA EMAIL": "CONTACT US VIA EMAIL",
        "Pilih opsi pengiriman email yang paling sesuai dengan perangkat dan aplikasi Anda:": "Choose the email dispatch option best suited for your device and applications:",
        "Buka di Gmail (Web Browser)": "Open in Gmail (Web Browser)",
        "Langsung terbuka di Chrome / Browser tanpa perlu aplikasi Mail": "Opens directly in Chrome / Web without requiring a local Mail app",
        "Salin Alamat Email": "Copy Email Address",
        "Aplikasi Email Default (Mail / Outlook)": "Default Email App (Mail / Outlook)",
        "Buka via Apple Mail, Microsoft Outlook, atau Thunderbird jika terpasang": "Open via Apple Mail, Microsoft Outlook, or Thunderbird if installed",
        "Kirim Formulir Inquiry Online": "Submit Online Inquiry Form",
        "Kirim detail proyek, luas tanah, dan spesifikasi bangunan langsung di web": "Send project scope, land area, and building specs directly on our website",
        "Tutup": "Close",
        "Ringkasan & Spesifikasi": "Overview & Specs",
        "Tantangan & Rekayasa Teknik": "Technical Challenges & Engineering",
        "Sebelum vs Sesudah": "Before vs After",
        "Luas Bangunan": "Building Area",
        "Durasi Kerja": "Duration",
        "Tahun Selesai": "Completion Year",
        "Status Serah Terima": "Handover Status",
        "Konsultasikan Proyek Serupa via WA": "Consult Similar Project via WhatsApp",
        "TANTANGAN PROYEK (ENGINEERING CHALLENGE)": "PROJECT CHALLENGE (ENGINEERING)",
        "Kendala Lokasi, Struktur & Regulasi Waktu": "Site Constraints, Structural & Schedule Regulations",
        "REKAYASA TEKNIK & METODE KERJA SGD": "ENGINEERING SOLUTIONS & SGD METHODOLOGY",
        "Inovasi Material, Manajemen Shift & Rekayasa Nilai": "Material Innovation, Shift Management & Value Engineering",
        "HASIL & METRIK CAPAIAN (DELIVERED OUTCOME)": "DELIVERED OUTCOMES & METRICS",
        "Ketepatan Waktu, Efisiensi Biaya & Kepatuhan Mutu SNI/K3": "On-Time Handover, Cost Efficiency & SNI/OHS Compliance",
        "SEBELUM": "BEFORE",
        "SESUDAH": "AFTER",
        "Geser divider ke kiri atau ke kanan untuk membandingkan transformasi proyek:": "Drag divider left or right to compare project transformation:",
        "Klien / Pemilik Proyek:": "Client / Project Owner:",
        "Lingkup Pekerjaan:": "Scope of Work:",
        "Ringkasan Eksekusi Proyek": "Project Execution Summary",
        "Capaian & Rekayasa Teknik Utama:": "Key Milestones & Engineering Achievements:",

        // Inner Pages (About, Services, Portfolio, Contact)
        "Tentang SGD Construction": "About SGD Construction",
        "Membangun Kepercayaan Melalui Bukti Nyata Kualitas Konstruksi": "Building Trust Through Concrete Evidence of Construction Quality",
        "Visi & Misi Perusahaan": "Company Vision & Mission",
        "Pondasi Nilai SGD Construction": "Core Values of SGD Construction",
        "Dewan Direksi & Tenaga Ahli Teknik SGD": "Board of Directors & Technical Experts",
        "Komitmen Keselamatan Kerja & Sertifikasi Standar Nasional": "Commitment to Safety & National Standards Certification",
        "Ingin Bekerja Sama dengan SGD Construction?": "Ready to Collaborate with SGD Construction?",
        "Layanan": "Services",
        "LAYANAN 01": "SERVICE 01",
        "LAYANAN 02": "SERVICE 02",
        "LAYANAN 03": "SERVICE 03",
        "LAYANAN 04": "SERVICE 04",
        "DIVISI KHUSUS MAINTENANCE": "SPECIALIZED MAINTENANCE DIVISION",
        "Lingkup Pekerjaan Utama:": "Core Scope of Work:",
        "Lingkup Layanan SGD Care:": "SGD Care Service Scope:",
        "Konsultasi General Contracting": "Consult General Contracting",
        "Konsultasi Desain & Arsitektur": "Consult Architecture & Design",
        "Konsultasi Interior Fit-Out": "Consult Interior Fit-Out",
        "Konsultasi Sistem MEP": "Consult MEP Systems",
        "Hubungi Tim SGD Care (08116016868)": "Contact SGD Care Team (08116016868)",
        "PERTANYAAN UMUM": "GENERAL FAQ",
        "Bagaimana alur awal konsultasi dan survey lokasi proyek?": "What is the initial process for consultation and site survey?",
        "Apakah SGD Construction menyediakan layanan desain sekaligus bangun (Design & Build)?": "Does SGD Construction provide turnkey Design & Build services?",
        "Apakah ada garansi pemeliharaan setelah proyek selesai diserahterimakan?": "Is there a maintenance warranty after project handover?",
        "Bagaimana skema pembayaran proyek konstruksi?": "What is the payment milestone schedule for construction projects?",
        "Layanan Konstruksi & Rancang Bangun": "Construction & Design-Build Services",
        "General Contracting & Konstruksi Sipil": "General Contracting & Civil Works",
        "Desain Arsitektur & Perencanaan Struktur": "Architectural Design & Structural Planning",
        "Commercial & Residential Interior Fit-Out": "Commercial & Residential Interior Fit-Out",
        "Mechanical, Electrical & Plumbing (MEP)": "Mechanical, Electrical & Plumbing (MEP)",
        "SGD Care: Building & Property Maintenance": "SGD Care: Building & Property Maintenance",
        "Hal yang Sering Ditanyakan (FAQ)": "Frequently Asked Questions (FAQ)",
        "Punya Rencana Proyek Bangunan?": "Have an Upcoming Building Project?",
        "Portofolio & Rekam Jejak Rekayasa Konstruksi": "Portfolio & Construction Track Record",
        "Ingin Mewujudkan Bangunan Impian Anda?": "Want to Bring Your Dream Building to Reality?",
        "Hubungi SGD Construction": "Contact SGD Construction",
        "Kirim Rincian Proyek Anda": "Submit Your Project Details",
        "Lokasi & Kunjungan": "Office Location & Visits",
        "Kirim Pesan via Formulir": "Send Message via Form",
        "MULAI PROYEK ANDA": "START YOUR PROJECT",
        "PROFIL PERUSAHAAN": "COMPANY PROFILE",
        "ARAH STRATEGIS": "STRATEGIC DIRECTION",
        "NILAI-NILAI UTAMA": "CORE VALUES",
        "STRUKTUR KEPEMIMPINAN": "LEADERSHIP STRUCTURE",
        "STANDAR KESELAMATAN & LEGALITAS": "SAFETY STANDARDS & LEGALITIES",
        "HUBUNGI TIM KAMI": "CONTACT OUR TEAM",
        "FORM KONSULTASI PROYEK": "PROJECT INQUIRY FORM",
        "KANTOR PUSAT": "HEADQUARTERS",
        "Portofolio": "Portfolio",
        "Kontak": "Contact",
        "Respon Cepat": "Fast Response",
        "WhatsApp Resmi": "Official WhatsApp",
        "Kantor Operasional": "Operational Office",
        "Alamat Kantor": "Office Address",
        "WhatsApp Fast Response": "WhatsApp Fast Response",
        "Surel Resmi": "Official Email",
        "Kirim Formulir Inquiry": "Submit Inquiry Form",
        "Kirim Langsung via WA": "Send Directly via WhatsApp",
        "Visi Kami": "Our Vision",
        "Misi Kami": "Our Mission",
        "Integritas & Kejujuran": "Integrity & Honesty",
        "Presisi & Akurasi": "Precision & Accuracy",
        "Keselamatan Kerja (K3)": "Workplace Safety (HSE)",
        "Inovasi & Adaptasi": "Innovation & Adaptation",
        "Managing Director / Direktur Utama": "Managing Director / Chief Executive",
        "Project Operations & Site Director": "Project Operations & Site Director",
        "Head of SGD Care Maintenance": "Head of SGD Care Maintenance",
        "SMK3 Prosedur K3 Konstruksi Terstandarisasi": "Standardized SMK3 Construction Safety Procedures",
        "Standar Mutu SNI & Pengujian Material Beton": "SNI Quality Standards & Concrete Testing",
        "Legalitas Badan Usaha Konstruksi Resmi Indonesia": "Legally Registered Indonesian Construction Entity",
        "Penerapan Protokol K3 di Setiap Lokasi Proyek": "Safety Protocol Adherence Across All Sites",
        "Kompromi Terhadap Spesifikasi Mutu Material": "Compromise on Material Quality Specifications",
        "Download Official Project Portfolio & Credentials (PDF)": "Download Official Project Portfolio & Credentials (PDF)",
        "Dokumentasi Proyek Harian di Instagram @sgdconstruction": "Daily Project Documentation on Instagram @sgdconstruction",
        "Saksikan proses pengerjaan lapangan, uji tekan beton laboratorium, hingga berita acara serah terima (BAST) proyek melalui reels & stories resmi kami.": "Watch on-site construction progress, laboratory concrete testing, and project handover milestones through our official reels & stories."
    };

    // Build Reverse Lookup (EN -> ID)
    const sgdReverseTranslations = {};
    for (const [idText, enText] of Object.entries(sgdTranslations)) {
        sgdReverseTranslations[enText] = idText;
    }

    // HTML-formatted blocks
    const sgdHtmlTranslations = {
        '.sgd-hero-title': {
            id: 'Membangun dengan Presisi,<br>\n                <span class="sgd-text-gradient">Mewujudkan Konstruksi Masa Depan</span>',
            en: 'Building with Precision,<br>\n                <span class="sgd-text-gradient">Shaping the Future of Construction</span>'
        },
        '.sgd-hero-subtitle': {
            id: 'Mitra kontraktor umum, perencanaan arsitektur, dan interior terpercaya di Indonesia. Kami menghadirkan solusi rancang bangun berkualitas tinggi dengan komitmen ketepatan waktu, efisiensi anggaran, dan standar keselamatan kerja terbaik.',
            en: 'Trusted general contractor, architectural planning, and interior design partner in Indonesia. We deliver high-quality design-and-build solutions with a firm commitment to on-time delivery, budget efficiency, and superior safety standards.'
        }
    };

    function applyFullPageTranslation(lang, showToast) {
        currentLang = lang;
        try {
            localStorage.setItem('sgd_lang', lang);
        } catch(e) {}

        document.documentElement.lang = lang;

        // Sync all ID/EN buttons
        langBtns.forEach(btn => {
            if (btn.getAttribute('data-lang') === lang) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // 1. Elements with explicit HTML data-i18n attributes
        const htmlTranslatables = document.querySelectorAll('[data-i18n-html-id], [data-i18n-html-en]');
        htmlTranslatables.forEach(el => {
            const htmlVal = el.getAttribute(`data-i18n-html-${lang}`);
            if (htmlVal) {
                el.innerHTML = htmlVal;
            }
        });

        // 2. Elements with explicit plain text data-i18n attributes
        const translatableElements = document.querySelectorAll('[data-i18n-id], [data-i18n-en]');
        translatableElements.forEach(el => {
            const text = el.getAttribute(`data-i18n-${lang}`);
            if (text) {
                const icon = el.querySelector('i');
                if (icon) {
                    const isIconFirst = el.firstElementChild === icon;
                    if (isIconFirst) {
                        el.innerHTML = '';
                        el.appendChild(icon);
                        el.appendChild(document.createTextNode(' ' + text));
                    } else {
                        el.innerHTML = '';
                        el.appendChild(document.createTextNode(text + ' '));
                        el.appendChild(icon);
                    }
                } else {
                    el.textContent = text;
                }
            }
        });

        // 3. Specific HTML formatted blocks
        for (const [selector, versions] of Object.entries(sgdHtmlTranslations)) {
            const el = document.querySelector(selector);
            if (el && versions[lang]) {
                el.innerHTML = versions[lang];
            }
        }

        // 4. Clean normalization text walker for all other elements
        const textElements = document.querySelectorAll(
            'h1, h2, h3, h4, h5, h6, p, a, button, label, strong, small, span, li, ' +
            '.sgd-section-tag, .sgd-stat-label, .sgd-milestone-label, .sgd-cost-label, ' +
            '.sgd-detail-title, .sgd-spec-label, .sgd-category-badge, .sgd-presets-title'
        );

        textElements.forEach(el => {
            // If already translated by data-i18n attributes, skip
            if (el.hasAttribute('data-i18n-id') || el.hasAttribute('data-i18n-html-id')) return;
            // Also skip if parent was translated by data-i18n-html
            if (el.closest('[data-i18n-html-id]')) return;

            // Only process leaf or icon-only elements
            const nonIconChildren = Array.from(el.children).filter(child => child.tagName !== 'I');
            if (nonIconChildren.length > 0) return;

            const rawText = el.textContent;
            const cleaned = rawText.replace(/\s+/g, ' ').trim();
            if (!cleaned) return;

            if (lang === 'en') {
                if (sgdTranslations[cleaned]) {
                    el.setAttribute('data-sgd-orig', cleaned);
                    replaceElementText(el, sgdTranslations[cleaned]);
                }
            } else {
                const orig = el.getAttribute('data-sgd-orig') || sgdReverseTranslations[cleaned];
                if (orig) {
                    replaceElementText(el, orig);
                }
            }
        });

        // Helper to replace text while preserving <i> icon
        function replaceElementText(el, newText) {
            const icon = el.querySelector('i');
            if (icon) {
                const isIconFirst = el.firstElementChild === icon;
                if (isIconFirst) {
                    el.innerHTML = '';
                    el.appendChild(icon);
                    el.appendChild(document.createTextNode(' ' + newText));
                } else {
                    el.innerHTML = '';
                    el.appendChild(document.createTextNode(newText + ' '));
                    el.appendChild(icon);
                }
            } else {
                el.textContent = newText;
            }
        }

        // 4. Update Placeholders
        const placeholderMap = {
            'Contoh: Ir. Budi Santoso': { en: 'e.g. Ir. Budi Santoso', id: 'Contoh: Ir. Budi Santoso' },
            'Contoh: PT Graha Mahakarya': { en: 'e.g. PT Graha Mahakarya', id: 'Contoh: PT Graha Mahakarya' },
            'Contoh: 081234567890': { en: 'e.g. 081234567890', id: 'Contoh: 081234567890' },
            'Contoh: Budi Santoso': { en: 'e.g. Budi Santoso', id: 'Contoh: Budi Santoso' }
        };
        document.querySelectorAll('input[placeholder], textarea[placeholder]').forEach(input => {
            const currentPh = input.getAttribute('placeholder');
            if (placeholderMap[currentPh] && placeholderMap[currentPh][lang]) {
                input.setAttribute('placeholder', placeholderMap[currentPh][lang]);
            }
        });

        // 5. Live recalculation of estimator if initialized
        if (typeof window.sgdRecalculateEstimator === 'function') {
            window.sgdRecalculateEstimator();
        }

        // 6. Optional feedback toast
        if (showToast) {
            const existingToast = document.querySelector('.sgd-lang-toast');
            if (existingToast) existingToast.remove();

            const toast = document.createElement('div');
            toast.className = 'sgd-theme-toast sgd-lang-toast';
            toast.innerHTML = lang === 'en'
                ? '<div class="sgd-toast-inner"><span class="sgd-toast-icon">🌐</span> <div><strong>Language: English</strong><small>Website translated successfully</small></div></div>'
                : '<div class="sgd-toast-inner"><span class="sgd-toast-icon">🌐</span> <div><strong>Bahasa: Indonesia</strong><small>Konten ditampilkan dalam Bahasa Indonesia</small></div></div>';
            document.body.appendChild(toast);
            requestAnimationFrame(() => toast.classList.add('show'));
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 400);
            }, 2000);
        }
    }

    // Attach click events
    if (langBtns.length) {
        langBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const selectedLang = this.getAttribute('data-lang');
                if (selectedLang) {
                    applyFullPageTranslation(selectedLang, true);
                }
            });
        });

        // Initial setup from localStorage
        if (currentLang !== 'id') {
            applyFullPageTranslation(currentLang, false);
        }
    }

    // Expose globally
    window.sgdSetLanguage = applyFullPageTranslation;

    // =========================================================================
    // 3B. THEME SWITCHER (WORLD OF WARCRAFT <-> GENSHIN IMPACT)
    // =========================================================================
    const themeBtns = document.querySelectorAll('.sgd-theme-btn');
    const floatingThemeBtn = document.getElementById('sgdFloatingThemeBtn');
    const floatingThemeIcon = document.getElementById('sgdFloatingThemeIcon');
    const floatingThemeName = document.getElementById('sgdFloatingThemeName');
    const floatingThemePill = document.getElementById('sgdFloatingThemePill');

    let currentTheme = localStorage.getItem('sgd_theme') || 'wow';
    if (currentTheme !== 'wow' && currentTheme !== 'genshin') {
        currentTheme = 'wow';
    }

    function applyTheme(theme, animate) {
        currentTheme = theme;
        try {
            localStorage.setItem('sgd_theme', theme);
        } catch(e) {}

        document.documentElement.setAttribute('data-theme', theme);
        document.documentElement.classList.remove('theme-wow', 'theme-genshin');
        document.documentElement.classList.add('theme-' + theme);

        if (document.body) {
            document.body.classList.remove('theme-wow', 'theme-genshin');
            document.body.classList.add('theme-' + theme);
        }

        // Update all buttons in topbar and mobile drawer
        themeBtns.forEach(btn => {
            if (btn.getAttribute('data-theme') === theme) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });

        // Update floating widget
        if (floatingThemeIcon && floatingThemeName) {
            if (theme === 'genshin') {
                floatingThemeIcon.textContent = '✦';
                floatingThemeName.textContent = 'Genshin';
                if (floatingThemePill) floatingThemePill.textContent = 'WoW ⚔️';
            } else {
                floatingThemeIcon.textContent = '⚔️';
                floatingThemeName.textContent = 'WoW';
                if (floatingThemePill) floatingThemePill.textContent = 'Genshin ✦';
            }
        }

        // Optional toast feedback on user click
        if (animate) {
            const existingToast = document.querySelector('.sgd-theme-toast');
            if (existingToast) existingToast.remove();

            const toast = document.createElement('div');
            toast.className = 'sgd-theme-toast';
            toast.innerHTML = theme === 'genshin' 
                ? '<div class="sgd-toast-inner"><span class="sgd-toast-icon">✦</span> <div><strong>Tema Genshin Impact Aktif</strong><small>Celestia & Primogem Starlight Styling</small></div></div>'
                : '<div class="sgd-toast-inner"><span class="sgd-toast-icon">⚔️</span> <div><strong>Tema World of Warcraft Aktif</strong><small>Alliance Royal Gold & Epic Craftsmanship</small></div></div>';
            document.body.appendChild(toast);
            requestAnimationFrame(() => {
                toast.classList.add('show');
            });
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 400);
            }, 2500);
        }
    }

    // Attach click events to all theme buttons
    if (themeBtns.length) {
        themeBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const targetTheme = this.getAttribute('data-theme');
                if (targetTheme && targetTheme !== currentTheme) {
                    applyTheme(targetTheme, true);
                }
            });
        });
    }

    // Attach click to floating switcher
    if (floatingThemeBtn) {
        floatingThemeBtn.addEventListener('click', function () {
            const nextTheme = currentTheme === 'genshin' ? 'wow' : 'genshin';
            applyTheme(nextTheme, true);
        });
    }

    // Initial sync
    applyTheme(currentTheme, false);

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
            const isEn = (currentLang === 'en');
            if (amount >= 1000000000) {
                const milyarVal = (amount / 1000000000).toFixed(1).replace('.0', '');
                return isEn ? `Rp ${milyarVal} Billion` : `Rp ${milyarVal.replace('.', ',')} Milyar`;
            }
            const juta = Math.round(amount / 1000000);
            return isEn ? `Rp ${juta} Million` : `Rp ${juta} Juta`;
        }

        function calculateEstimate() {
            const activeTypeBtn = document.querySelector('#sgdEstTypes .sgd-est-type-btn.active') || document.querySelector('.sgd-est-type-btn');
            const activeGradeBtn= document.querySelector('#sgdEstGrades .sgd-est-grade-btn.active') || document.querySelector('.sgd-est-grade-btn');

            if (!activeTypeBtn) return;

            const isEn = (currentLang === 'en');
            const type = activeTypeBtn.getAttribute('data-type') || 'residential';
            const typeTitle = activeTypeBtn.querySelector('strong')?.textContent.trim() || 'Proyek';
            const grade = activeGradeBtn ? (activeGradeBtn.getAttribute('data-grade') || 'premium') : 'premium';
            const gradeTitle = activeGradeBtn ? (activeGradeBtn.querySelector('strong')?.textContent.trim() || 'Standard') : 'Standard';

            const area = Math.max(parseInt(areaInput.value, 10) || 350, 25);
            const isCare = (type === 'care' || activeTypeBtn.getAttribute('data-call-pricing') === 'true');
            const gradeStep = document.getElementById('sgdEstGradeStep');
            const contractEl = document.getElementById('sgdEstContract');
            const specDetailEl = document.getElementById('sgdEstSpecDetail');
            const volumeHintEl = document.getElementById('sgdEstVolumeHint');

            let minTotal = 0;
            let maxTotal = 0;

            if (isCare) {
                if (gradeStep) gradeStep.style.display = 'none';
                costRangeEl.textContent = 'Call for Pricing';
                if (ratePerM2El) {
                    ratePerM2El.textContent = isEn ? 'Custom scope & periodic SLA maintenance' : 'Lingkup kustom & kontrak perawatan berkala';
                }
                if (durationEl) {
                    durationEl.textContent = isEn ? 'Periodic Contract / AMC' : 'Kontrak Berkala / AMC';
                }
                if (contractEl) {
                    contractEl.textContent = isEn ? 'Maintenance Contract (Monthly / Annual / On-Call)' : 'Maintenance Contract (Bulanan / Tahunan / On-Call)';
                }
                if (specDetailEl) {
                    specDetailEl.textContent = '1. Plumbing & Tanki Air, 2. Elektrikal, 3. AC & Tata Udara, 4. Waterproofing, 5. Perawatan Gedung';
                }
            } else {
                if (gradeStep) gradeStep.style.display = 'block';

                let rateAttr = 'data-rate-prem';
                if (grade === 'standard') rateAttr = 'data-rate-std';
                if (grade === 'luxury') rateAttr = 'data-rate-lux';

                let baseRate = parseInt(activeTypeBtn.getAttribute(rateAttr), 10) || 8000000;

                // Spread range (+/- 5% for realistic estimation)
                const minRate = Math.round(baseRate * 0.95);
                const maxRate = Math.round(baseRate * 1.05);

                minTotal = minRate * area;
                maxTotal = maxRate * area;

                costRangeEl.textContent = `${formatIDR(minTotal)} - ${formatIDR(maxTotal)}`;
                if (ratePerM2El) {
                    const avgLabel = isEn ? 'Base Rate:' : 'Mulai dari:';
                    ratePerM2El.textContent = `${avgLabel} Rp ${(baseRate).toLocaleString('id-ID')} / m² (${gradeTitle})`;
                }

                // Fixed or calculated duration
                const customDuration = activeTypeBtn.getAttribute('data-duration');
                if (durationEl) {
                    durationEl.textContent = customDuration || '10 - 16 Bulan';
                }

                // Contract system
                const customContract = activeTypeBtn.getAttribute('data-contract');
                if (contractEl) {
                    contractEl.textContent = customContract || 'Lumpsum Fixed Price, Cost Plus Fee, atau kombinasi';
                }

                // Spec details
                const customSpec = activeTypeBtn.getAttribute('data-spec');
                if (specDetailEl) {
                    specDetailEl.textContent = customSpec || 'Volume yang dimasukan adalah luas terbangun termasuk Carport';
                }
            }

            // Update Volume Hint
            if (volumeHintEl) {
                if (type === 'residential') {
                    volumeHintEl.textContent = isEn ? 'Volume entered is gross built-up area including Carport' : 'Volume yang dimasukan adalah luas terbangun termasuk Carport';
                } else if (type === 'ruko') {
                    volumeHintEl.textContent = isEn ? 'Gross built-up area up to 4 floors - Minimum SNI' : 'Ruko s.d. 4 lantai — Spesifikasi: Minimum SNI';
                } else if (type === 'commercial') {
                    volumeHintEl.textContent = isEn ? 'Commercial building up to 8 floors - Earthquake-resistant design' : 'Gedung komersial s.d. 8 lantai — Review perhitungan struktur tahan gempa';
                } else if (type === 'industrial') {
                    volumeHintEl.textContent = isEn ? 'Warehouse & Factory floor area - Includes site preparation' : 'Gudang & Pabrik — Termasuk pematangan tanah & struktur bentang lebar';
                } else {
                    volumeHintEl.textContent = isEn ? 'Facility area for periodic maintenance audit' : 'Estimasi luas area gedung untuk audit & perawatan berkala';
                }
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
                const budgetStr = isCare ? 'Call for Pricing (Kontrak Berkala AMC)' : `${formatIDR(minTotal)} - ${formatIDR(maxTotal)}`;
                const durationStr = durationEl ? durationEl.textContent : '10 - 16 Bulan';
                const contractStr = contractEl ? contractEl.textContent : 'Lumpsum Fixed Price';
                const msg = `Halo Estimator SGD Construction,\nSaya menggunakan Kalkulator Estimasi Website untuk estimasi proyek:\n\n` +
                            `• *Tipe Proyek:* ${typeTitle}\n` +
                            `• *Luas Area:* ${area.toLocaleString('id-ID')} m²\n` +
                            (isCare ? '' : `• *Spesifikasi:* ${gradeTitle}\n`) +
                            `• *Estimasi Anggaran:* ${budgetStr}\n` +
                            `• *Estimasi Waktu:* ${durationStr}\n` +
                            `• *Sistem Kontrak:* ${contractStr}\n\n` +
                            `Mohon info ketersediaan jadwal survey lapangan dan penyusunan RAB definitif. Terima kasih.`;
                estWaBtn.href = `https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`;
            }
        }

        window.sgdRecalculateEstimator = calculateEstimate;

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
    // 8.5 SGD STANDARDS & MATERIAL STANDARD MODAL
    // =========================================================================
    const standardsModal      = document.getElementById('sgdStandardsModal');
    const standardsCloseBtn   = document.getElementById('sgdStandardsModalClose');
    const standardsCloseBtn2  = document.getElementById('sgdStandardsModalCloseBtn');
    const standardsBackdrop   = document.getElementById('sgdStandardsModalBackdrop');

    function openStandardsModal() {
        if (standardsModal) {
            standardsModal.classList.add('active');
            standardsModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeStandardsModal() {
        if (standardsModal) {
            standardsModal.classList.remove('active');
            standardsModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }

    if (standardsCloseBtn)  standardsCloseBtn.addEventListener('click', closeStandardsModal);
    if (standardsCloseBtn2) standardsCloseBtn2.addEventListener('click', closeStandardsModal);
    if (standardsBackdrop)  standardsBackdrop.addEventListener('click', closeStandardsModal);

    // Delegate any button or link with data-modal="standards"
    document.addEventListener('click', function (e) {
        const trigger = e.target.closest('[data-modal="standards"]');
        if (trigger) {
            e.preventDefault();
            openStandardsModal();
        }
    });

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

    // =========================================================================
    // 11. SAFE EMAIL MODAL & CLIPBOARD HANDLER (Fixes Chrome/Mac mailto error)
    // =========================================================================
    const emailModal         = document.getElementById('sgdEmailModal');
    const emailModalClose    = document.getElementById('sgdEmailModalClose');
    const emailModalCloseBtn = document.getElementById('sgdEmailModalCloseBtn');
    const emailModalBackdrop = document.getElementById('sgdEmailModalBackdrop');
    const copyEmailBtn       = document.getElementById('sgdCopyEmailBtn');
    const copyIcon           = document.getElementById('sgdCopyIcon');
    const copyText           = document.getElementById('sgdCopyText');
    const copyBadge          = document.getElementById('sgdCopyBadge');

    function openEmailModal(e) {
        if (e && e.preventDefault) e.preventDefault();
        if (emailModal) {
            emailModal.classList.add('active');
            emailModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeEmailModal() {
        if (emailModal) {
            emailModal.classList.remove('active');
            emailModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }
    }

    if (emailModalClose) emailModalClose.addEventListener('click', closeEmailModal);
    if (emailModalCloseBtn) emailModalCloseBtn.addEventListener('click', closeEmailModal);
    if (emailModalBackdrop) emailModalBackdrop.addEventListener('click', closeEmailModal);

    // Escape key closes modal
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && emailModal && emailModal.classList.contains('active')) {
            closeEmailModal();
        }
        if (e.key === 'Escape' && standardsModal && standardsModal.classList.contains('active')) {
            closeStandardsModal();
        }
        if (e.key === 'Escape' && profileModal && profileModal.classList.contains('active')) {
            closeProfileModal();
        }
    });

    // Delegate any email triggers
    document.addEventListener('click', function (e) {
        const trigger = e.target.closest('.sgd-email-trigger');
        if (trigger) {
            e.preventDefault();
            openEmailModal(e);
        }
    });

    // Copy to clipboard handler with feedback
    if (copyEmailBtn) {
        copyEmailBtn.addEventListener('click', function (e) {
            e.preventDefault();
            const email = this.getAttribute('data-email') || 'contact@sgd-corp.com';

            function onCopySuccess() {
                if (copyBadge) copyBadge.classList.add('show');
                if (copyText) copyText.textContent = 'Alamat Email Berhasil Disalin!';
                if (copyIcon) {
                    copyIcon.className = 'fa-solid fa-check text-success';
                }
                setTimeout(function () {
                    if (copyBadge) copyBadge.classList.remove('show');
                    if (copyText) copyText.textContent = 'Salin Alamat Email';
                    if (copyIcon) {
                        copyIcon.className = 'fa-regular fa-copy';
                    }
                }, 3000);
            }

            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(email).then(onCopySuccess).catch(function () {
                    fallbackCopy(email);
                    onCopySuccess();
                });
            } else {
                fallbackCopy(email);
                onCopySuccess();
            }
        });
    }

    function fallbackCopy(text) {
        const temp = document.createElement('textarea');
        temp.value = text;
        temp.style.position = 'fixed';
        temp.style.left = '-9999px';
        document.body.appendChild(temp);
        temp.select();
        try {
            document.execCommand('copy');
        } catch (err) {}
        document.body.removeChild(temp);
    }
});
