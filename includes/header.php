<?php
/**
 * Header — Conditional transparent navbar.
 * - On the homepage (root or /index.php), the navbar is transparent at the top
 *   and gets a solid background once the user scrolls. This is the "hero" mode.
 * - On all other pages, the navbar is always solid (white) because the page
 *   hero has a coloured background. This avoids the "invisible" navbar problem.
 */
$currentPath = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
$currentPath = rtrim($currentPath, '/');
if ($currentPath === '' || $currentPath === '/index' || $currentPath === '/index.php') {
    $isHome = true;
} else {
    $isHome = false;
}
?>
<!-- ============================================
     EDITORIAL HEADER (Conditional)
     ============================================ -->
<header id="site-header" class="site-header fixed top-0 left-0 w-full z-[999] <?php echo $isHome ? 'bg-transparent hero-mode' : 'bg-white/95 backdrop-blur-md border-b border-brand/5 shadow-sm'; ?> py-1 lg:py-2 transition-all duration-300">
    <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between h-[60px] lg:h-[80px]">

            <!-- Logo -->
            <a href="/" class="flex-shrink-0 relative z-10 group">
                <img src="/assets/imagesfromsite/refine-logo-white.webp" alt="Refine Clinic Logo" class="logo-white h-10 lg:h-16 w-auto object-contain transition-all duration-300">
                <img src="/assets/images/refine-logo-transparent.png" alt="Refine Clinic Logo" class="logo-dark h-10 lg:h-16 w-auto object-contain transition-all duration-300">
            </a>

            <!-- Desktop Navigation (original site structure) -->
            <nav class="hidden lg:flex items-center gap-7 z-10">
                <a href="/" class="nav-link-item">Home</a>

                <!-- About Us Dropdown -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="about" class="nav-link-item flex items-center gap-1.5">
                        About Us <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-1/2 -translate-x-1/2 pt-4 w-[280px]">
                        <div class="mega-menu-panel p-2">
                            <a href="about" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">About Us</a>
                            <a href="dr-chirag-kotecha-dermatologist-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Meet the Lead Specialist</a>
                            <a href="about-alison-gallagher-psychotherapist-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Meet the Psychotherapist</a>
                            <a href="about-ms-wendy-emyedu-ayayo-nutritionist-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Meet the Nutritionist</a>
                            <a href="about-dr-william-lubega-plastic-surgeon-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Meet the Plastic Surgeon</a>
                            <a href="about-dr-henry-owiny-aesthetic-physician-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Meet the Aesthetic Physician</a>
                            <a href="dr-ahmed-ashraf-dermatologist-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Meet the Dermatologist (Egypt)</a>
                            <a href="about-dr-vicky-koojo-nganzi-dermatologist-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Kabalagala Branch Specialist</a>
                            <a href="gallery" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Gallery</a>
                            <a href="testimonials" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Testimonials</a>
                            <a href="blog" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Blogs</a>
                        </div>
                    </div>
                </div>

                <!-- Cosmetic Dermatology Mega Menu -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="cosmetic-dermatology-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Cosmetic Dermatology <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-1/2 -translate-x-1/2 pt-4 w-[960px]">
                        <div class="mega-menu-panel p-8 grid grid-cols-3 gap-8 relative">
                            <div class="absolute top-0 right-0 w-72 h-full bg-brand-faint -z-10 rounded-r-1.5rem"></div>
                            <!-- Col 1: Skin/Body Rejuvenation + Laser -->
                            <div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Skin/Body Rejuvenation</h5>
                                <div class="space-y-2.5">
                                    <a href="hydrafacial-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">HydraFacial</a>
                                    <a href="chemical-peel-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Chemical Peel</a>
                                    <a href="iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">IV Therapy</a>
                                    <a href="bio-identical-hormone-replacement-therapy-kampala" class="block text-sm text-gray-600 hover:text-brand transition-colors">Bio-Identical Hormone Replacement Therapy</a>
                                    <a href="rf-microneedling-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">RF Microneedling for Scars</a>
                                    <a href="stretch-marks-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Stretch Marks</a>
                                    <a href="non-surgical-brazilian-butt-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Non-Surgical Brazilian Butt Lift</a>
                                    <a href="lip-volumization-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Lip Volumization</a>
                                    <a href="non-surgical-liquid-rhinoplasty-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Liquid Rhinoplasty</a>
                                    <a href="double-chin-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Double Chin</a>
                                    <a href="platelet-rich-plasma-facial-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Platelet-Rich Plasma Therapy (PRP)</a>
                                </div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4 mt-8">Laser Treatments</h5>
                                <div class="space-y-2.5">
                                    <a href="laser-hair-removal-in-uganda-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Laser Hair Removal</a>
                                    <a href="laser-tattoo-removal-in-uganda-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Laser Tattoo Removal</a>
                                    <a href="co2-laser-scar-removal-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">CO2 Laser for Scars</a>
                                    <a href="laser-skin-rejuvenation-in-uganda-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Laser Skin Rejuvenation</a>
                                </div>
                            </div>
                            <!-- Col 2: Anti Aging + PRP -->
                            <div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Anti Aging</h5>
                                <div class="space-y-2.5">
                                    <a href="botox-anti-aging-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Botox&reg;</a>
                                    <a href="dermal-fillers-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Dermal Fillers</a>
                                    <a href="thread-lifting-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Thread Lifting</a>
                                    <a href="sculptra-face-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Sculptra Face Lift</a>
                                    <a href="cool-lifting-skin-rejuvenation-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Coolifting&reg;</a>
                                    <a href="led-light-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">LED Light Therapy</a>
                                </div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4 mt-8">PRP Treatments</h5>
                                <div class="space-y-2.5">
                                    <a href="hair-transplant-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Hair Transplant</a>
                                    <a href="prp-face-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">The PRP Facelift</a>
                                    <a href="prp-breast-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">The PRP Breast Lift</a>
                                    <a href="platelet-rich-plasma-facial-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">PRP Facial</a>
                                    <a href="prp-hair-restoration-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">PRP Hair Restoration</a>
                                    <a href="plasma-pen-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Plasma Pen Therapy</a>
                                    <a href="omg-shot-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">The OMG-Shot</a>
                                    <a href="m-shot-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">The M-Shot</a>
                                    <a href="joint-and-tissue-rejuvenation-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Joint &amp; Tissue Rejuvenation with PRP</a>
                                </div>
                            </div>
                            <!-- Col 3: Weight Loss + Body Contouring -->
                            <div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Weight Loss</h5>
                                <div class="space-y-2.5">
                                    <a href="allurion-weight-loss-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Allurion</a>
                                    <a href="semaglutide-ozempic-weight-loss-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Semaglutide/Ozempic</a>
                                    <a href="gastric-sleeve-and-bypass-surgery-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Gastric Sleeve and Bypass</a>
                                </div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4 mt-8">Body Contouring</h5>
                                <div class="space-y-2.5">
                                    <a href="wonder-axon-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Wonder Axon Treatment</a>
                                    <a href="cryolipolysis-fat-freezing-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Cryolipolysis</a>
                                    <a href="pcdc-fat-dissolving-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">PCDC Fat Dissolving Injections</a>
                                    <a href="tummy-tuck-abdominoplasty-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Tummy Tuck / Abdominoplasty</a>
                                    <a href="em-body-sculpt-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Em Body Sculpt</a>
                                    <a href="6d-green-laser-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">6D Green Laser</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Medical Dermatology Mega Menu -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="medical-dermatology-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Medical Dermatology <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-1/2 -translate-x-1/2 pt-4 w-[600px]">
                        <div class="mega-menu-panel p-8 grid grid-cols-2 gap-8 relative">
                            <div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Inflammatory Skin</h5>
                                <div class="space-y-2.5">
                                    <a href="acne-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Acne</a>
                                    <a href="scar-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Scars</a>
                                    <a href="Hyperpigmentation-Melasma-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Hyperpigmentation/Melasma</a>
                                    <a href="hair-loss-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Hair Loss</a>
                                    <a href="rosacea-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Rosacea</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Autoimmune Disorders</h5>
                                <div class="space-y-2.5">
                                    <a href="vitiligo-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Vitiligo</a>
                                    <a href="alopecia-areata-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Alopecia Areata</a>
                                    <a href="skin-cancer-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Skin Cancer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Refine IV Lounge Mega Menu -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="refine-iv-lounge-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Refine IV Lounge <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[100%] left-1/2 -translate-x-1/2 pt-4 w-[600px]">
                        <div class="mega-menu-panel p-8 grid grid-cols-2 gap-8 relative">
                            <div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">IV Therapy</h5>
                                <div class="space-y-2.5">
                                    <a href="inner-beauty-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Inner Beauty</a>
                                    <a href="jet-lag-iv-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Jet Lag</a>
                                    <a href="pre-party-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Pre-Party</a>
                                    <a href="myers-magic-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Myers Magic</a>
                                    <a href="post-party-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Post Party</a>
                                    <a href="anti-migraine-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Anti Migraine</a>
                                    <a href="total-sport-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Total Sport</a>
                                    <a href="skin-lightening-with-tatioactive-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Skin Lightening with Tatioactive</a>
                                    <a href="vitamin-b12-combo-IV-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Combo of Vit B 12 and B Complex</a>
                                    <a href="vitamin-c-treatment-IV-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Vitamin C</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4">Wellness Infusions</h5>
                                <div class="space-y-2.5">
                                    <a href="amino-acids-IV-therapy-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Amino Acids</a>
                                    <a href="glutathione-IV-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Glutathione</a>
                                </div>
                                <h5 class="font-display italic text-sm text-accent font-semibold uppercase tracking-widest mb-4 mt-8">Our Affiliates</h5>
                                <div class="space-y-2.5">
                                    <a href="https://www.neodermaclinica.com/" target="_blank" class="block text-sm text-gray-600 hover:text-brand transition-colors">Neoderma Clinic</a>
                                    <a href="https://refinebytulsi.com/" target="_blank" class="block text-sm text-gray-600 hover:text-brand transition-colors">Refine by Tulsi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Book Appointment -->
                <a href="contact" class="nav-link-item">Book Appointment</a>
            </nav>

            <!-- CTA + Mobile Toggle -->
            <div class="flex items-center gap-3 z-10">
                <div class="hidden md:block">
                    <a href="book-appointment" class="btn-magnetic magnetic-target">
                        <span>Book Now</span>
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="mobile-menu-toggle" aria-label="Open menu" class="lg:hidden w-10 h-10 flex flex-col items-center justify-center gap-1.5 rounded-full <?php echo $isHome ? 'bg-white/10 backdrop-blur-md text-white' : 'bg-brand/5 text-brand'; ?> transition-all hover:bg-accent/20">
                    <span class="w-5 h-0.5 bg-current block rounded-full transition-transform origin-center" id="menu-line-1"></span>
                    <span class="w-5 h-0.5 bg-current block rounded-full transition-opacity" id="menu-line-2"></span>
                    <span class="w-5 h-0.5 bg-current block rounded-full transition-transform origin-center" id="menu-line-3"></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- ============================================
     MOBILE MENU DRAWER (Editorial overlay)
     ============================================ -->
<div id="mobile-overlay" class="mobile-menu-overlay fixed inset-0 bg-brand-deeper/90 backdrop-blur-xl z-[1000]"></div>
<aside id="mobile-menu" class="mobile-menu fixed top-0 right-0 h-full w-full max-w-[420px] bg-brand text-white z-[1001] shadow-2xl overflow-y-auto border-l border-white/10">
    <div class="p-8 flex flex-col h-full">
        <div class="flex items-center justify-between mb-8">
            <img src="/assets/imagesfromsite/refine-logo-white.webp" alt="Refine Clinic Logo" class="h-8 w-auto object-contain">
            <button id="mobile-menu-close" aria-label="Close menu" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-white/10">
                <i class="fas fa-times text-sm"></i>
            </button>
        </div>

        <nav class="flex-1 flex flex-col space-y-1 mobile-nav-links overflow-y-auto pr-2 pb-24">
            <a href="/" class="font-display italic text-2xl py-2 text-white hover:text-accent transition-colors">Home</a>

            <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mt-4 mb-2">About</p>
            <a href="about" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Our Philosophy</a>
            <a href="clinical-team" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Clinical Team</a>
            <a href="gallery" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Clinic Gallery</a>
            <a href="testimonials" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Client Stories</a>

            <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mt-6 mb-2">Cosmetic</p>
            <a href="cosmetic-dermatology-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">All Cosmetic</a>
            <a href="botox-anti-aging-treatment-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Botox®</a>
            <a href="dermal-fillers-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Dermal Fillers</a>
            <a href="hydrafacial-treatment-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">HydraFacial</a>
            <a href="rf-microneedling-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">RF Microneedling</a>
            <a href="co2-laser-scar-removal-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">CO2 Scar Removal</a>
            <a href="laser-hair-removal-in-uganda-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Laser Hair Removal</a>
            <a href="thread-lifting-treatment-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Thread Lifting</a>

            <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mt-6 mb-2">Hair &amp; Body</p>
            <a href="hair-transplant-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Hair Transplant</a>
            <a href="prp-hair-restoration-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">PRP Hair Restoration</a>
            <a href="microblading-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Microblading</a>
            <a href="body-contouring-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Body Contouring</a>
            <a href="liposuction-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Liposuction</a>
            <a href="mommy-makeover-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Mommy Makeover</a>

            <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mt-6 mb-2">Wellness &amp; IV</p>
            <a href="semaglutide-ozempic-weight-loss-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Weight Loss</a>
            <a href="bio-identical-hormone-replacement-therapy-kampala" class="font-body text-base text-white/80 py-1.5 hover:text-accent">BHRT</a>
            <a href="refine-iv-lounge-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Refine IV Lounge</a>
            <a href="nad-iv-therapy-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">NAD+ IV</a>
            <a href="m-shot-treatment-kampala-juba" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Intimate Wellness</a>

            <p class="text-accent/80 text-[10px] tracking-widest uppercase font-semibold mt-6 mb-2">Journal</p>
            <a href="blog" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Blog</a>
            <a href="patient-stories" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Patient Stories</a>
            <a href="videos" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Videos</a>
            <a href="podcast" class="font-body text-base text-white/80 py-1.5 hover:text-accent">Podcast</a>

            <a href="contact" class="font-display italic text-2xl py-3 text-accent mt-8 border-t border-white/10 pt-6">Book Your Visit</a>
        </nav>

        <div class="mt-auto pt-8 border-t border-white/10 flex items-center justify-between mobile-menu-footer">
            <span class="text-xs tracking-widest uppercase text-white/50">Follow Us</span>
            <div class="flex gap-4">
                <a href="https://www.instagram.com/refineskinandbodyclinic/" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.facebook.com/share/1b4epu5tXm/" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="https://x.com/Refine_Skin" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="https://www.tiktok.com/discover/refine-skin-and-body-clinic-uganda" target="_blank" class="text-white/70 hover:text-accent"><i class="fa-brands fa-tiktok"></i></a>
            </div>
        </div>
    </div>
</aside>
