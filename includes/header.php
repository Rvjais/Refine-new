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
<header id="site-header" class="site-header fixed top-0 left-0 w-full z-[999] <?php echo $isHome ? 'bg-transparent hero-mode' : 'bg-white/95 backdrop-blur-md border-b border-brand/5 shadow-sm'; ?> py-2 transition-all duration-300">
    <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
        <div class="flex items-center justify-between h-[80px]">

            <!-- Logo -->
            <a href="/" class="flex-shrink-0 relative z-10 group">
                <img src="/assets/images/refine-logo.png" alt="Refine Clinic Logo" class="h-10 w-auto object-contain transition-all duration-300">
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center gap-7 z-10">
                <a href="/" class="nav-link-item">Home</a>

                <!-- About Us Dropdown -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="about" class="nav-link-item flex items-center gap-1.5">
                        About <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[70%] left-1/2 -translate-x-1/2 pt-4 w-[300px]">
                        <div class="mega-menu-panel p-2">
                            <a href="about" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Our Philosophy</a>
                            <a href="clinical-team" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Clinical Team</a>
                            <a href="about-dr-henry-owiny-aesthetic-physician-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Dr. Henry Owiny</a>
                            <a href="about-dr-william-lubega-plastic-surgeon-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Dr. William Lubega</a>
                            <a href="about-ms-wendy-emyedu-ayayo-nutritionist-in-uganda" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Wendy Emyedu (Nutrition)</a>
                            <a href="gallery" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Clinic Gallery</a>
                            <a href="testimonials" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Client Stories</a>
                            <a href="patient-stories" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Patient Stories</a>
                        </div>
                    </div>
                </div>

                <!-- Cosmetic Dermatology Mega Menu -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="cosmetic-dermatology-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Cosmetic <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[70%] left-1/2 -translate-x-1/2 pt-4 w-[820px]">
                        <div class="mega-menu-panel p-8 grid grid-cols-4 gap-6 relative">
                            <div class="absolute top-0 right-0 w-72 h-full bg-brand-faint -z-10 rounded-r-1.5rem"></div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Rejuvenation</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="hydrafacial-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">HydraFacial</a>
                                    <a href="chemical-peel-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Chemical Peel</a>
                                    <a href="rf-microneedling-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">RF Microneedling</a>
                                    <a href="carbon-laser-facial-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Carbon Laser Facial</a>
                                    <a href="dermaplaning-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Dermaplaning</a>
                                    <a href="cool-lifting-skin-rejuvenation-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Cool Lifting</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Anti-Aging</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="botox-anti-aging-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Botox®</a>
                                    <a href="anti-wrinkle-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Anti-Wrinkle</a>
                                    <a href="dermal-fillers-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Dermal Fillers</a>
                                    <a href="sculptra-face-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Sculptra Face Lift</a>
                                    <a href="cheek-enhancement-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Cheek Enhancement</a>
                                    <a href="anti-aging-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Full Anti-Aging</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Laser & Skin</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="laser-hair-removal-in-uganda-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Laser Hair Removal</a>
                                    <a href="laser-tattoo-removal-in-uganda-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Laser Tattoo Removal</a>
                                    <a href="co2-laser-scar-removal-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">CO2 Scar Removal</a>
                                    <a href="6d-green-laser-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">6D Green Laser</a>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Skin Concerns</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="double-chin-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Double Chin</a>
                                    <a href="Hyperpigmentation-Melasma-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Melasma & Pigmentation</a>
                                    <a href="scar-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Scar Revision</a>
                                    <a href="body-contouring-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Body Contouring</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hair + Body Mega Menu -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="hair-transplant-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Hair &amp; Body <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[70%] left-1/2 -translate-x-1/2 pt-4 w-[820px]">
                        <div class="mega-menu-panel p-8 grid grid-cols-4 gap-6 relative">
                            <div class="absolute top-0 right-0 w-72 h-full bg-brand-faint -z-10 rounded-r-1.5rem"></div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Hair Restoration</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="prp-hair-restoration-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">PRP Hair Restoration</a>
                                    <a href="hair-transplant-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Hair Transplant (FUE/FUT)</a>
                                    <a href="alopecia-areata-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Alopecia Treatment</a>
                                    <a href="hair-mesotherapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Hair Mesotherapy</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Brows &amp; Lashes</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="microblading-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Microblading</a>
                                    <a href="eyebrow-transplant-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Eyebrow Transplant</a>
                                    <a href="eyelash-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Eyelash Extensions / Lift</a>
                                    <a href="beard-transplant-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Beard Transplant</a>
                                    <a href="scalp-micropigmentation-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Scalp Micropigmentation</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Body Contouring</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="em-body-sculpt-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">EM Body Sculpt</a>
                                    <a href="cryolipolysis-fat-freezing-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Cryolipolysis (Fat Freeze)</a>
                                    <a href="vaser-lipo-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Vaser Liposuction</a>
                                    <a href="liposuction-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Liposuction</a>
                                    <a href="non-surgical-brazilian-butt-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Non-Surgical BBL</a>
                                    <a href="cellulite-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Cellulite Treatment</a>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Surgical</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="tummy-tuck-abdominoplasty-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Tummy Tuck</a>
                                    <a href="mommy-makeover-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Mommy Makeover</a>
                                    <a href="breast-augmentation-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Breast Augmentation</a>
                                    <a href="arm-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Arm Lift</a>
                                    <a href="thigh-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Thigh Lift</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Weight & Wellness Mega Menu -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="semaglutide-ozempic-weight-loss-kampala-juba" class="nav-link-item flex items-center gap-1.5">
                        Wellness <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[70%] left-1/2 -translate-x-1/2 pt-4 w-[780px]">
                        <div class="mega-menu-panel p-8 grid grid-cols-4 gap-6 relative">
                            <div class="absolute top-0 right-0 w-72 h-full bg-brand-faint -z-10 rounded-r-1.5rem"></div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Weight Loss</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="semaglutide-ozempic-weight-loss-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Semaglutide / Ozempic</a>
                                    <a href="allurion-weight-loss-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Allurion Balloon</a>
                                    <a href="gastric-sleeve-and-bypass-surgery-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Gastric Sleeve &amp; Bypass</a>
                                    <a href="nutrition-counselling-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Nutrition Counselling</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Hormones &amp; Intimate</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="bio-identical-hormone-replacement-therapy-kampala" class="block text-sm text-gray-600 hover:text-brand transition-colors">BHRT</a>
                                    <a href="testosterone-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Testosterone Therapy</a>
                                    <a href="menopause-management-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Menopause Management</a>
                                    <a href="stress-sleep-wellness-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Stress &amp; Sleep</a>
                                    <a href="m-shot-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">M-Shot</a>
                                    <a href="omg-shot-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">OMG Shot</a>
                                    <a href="vaginal-rejuvenation-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Vaginal Rejuvenation</a>
                                </div>
                            </div>
                            <div>
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">IV Lounge</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="refine-iv-lounge-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">The Lounge (Hub)</a>
                                    <a href="inner-beauty-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Inner Beauty IV</a>
                                    <a href="myers-magic-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Myers' Magic</a>
                                    <a href="nad-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">NAD+ IV</a>
                                    <a href="glutathione-IV-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Glutathione IV</a>
                                    <a href="immunity-iv-therapy-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Immunity Boost</a>
                                </div>
                            </div>
                            <div class="pl-4">
                                <h5 class="font-display italic text-lg text-brand mb-4 border-b border-brand/10 pb-2">Specialty</h5>
                                <div class="space-y-2.5 mt-4">
                                    <a href="prp-breast-lift-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">PRP Breast Lift</a>
                                    <a href="joint-and-tissue-rejuvenation-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Joint &amp; Tissue</a>
                                    <a href="ed-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">ED Treatment</a>
                                    <a href="wonder-axon-treatment-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Wonder Axon</a>
                                    <a href="iron-infusion-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Iron Infusion</a>
                                    <a href="mobile-iv-service-kampala-juba" class="block text-sm text-gray-600 hover:text-brand transition-colors">Mobile IV Service</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Hub -->
                <div class="nav-item-dropdown relative py-6">
                    <a href="blog" class="nav-link-item flex items-center gap-1.5">
                        Journal <i class="fas fa-chevron-down text-[8px] opacity-70"></i>
                    </a>
                    <div class="nav-dropdown absolute top-[70%] left-1/2 -translate-x-1/2 pt-4 w-[260px]">
                        <div class="mega-menu-panel p-2">
                            <a href="blog" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">The Refine Blog</a>
                            <a href="patient-stories" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Patient Stories</a>
                            <a href="videos" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Video Library</a>
                            <a href="podcast" class="block px-5 py-3 text-sm text-brand-dark hover:bg-brand-faint hover:text-brand rounded-xl transition-all font-medium">Podcast &amp; Webinars</a>
                        </div>
                    </div>
                </div>

                <!-- Contact -->
                <a href="contact" class="nav-link-item">Contact</a>
            </nav>

            <!-- CTA + Mobile Toggle -->
            <div class="flex items-center gap-3 z-10">
                <div class="hidden md:block">
                    <a href="book-appointment" class="btn-magnetic magnetic-target">
                        <span>Book Now</span>
                    </a>
                </div>

                <!-- Mobile Hamburger -->
                <button id="mobile-menu-toggle" aria-label="Open menu" class="lg:hidden w-12 h-12 flex flex-col items-center justify-center gap-1.5 rounded-full <?php echo $isHome ? 'bg-white/10 backdrop-blur-md text-white' : 'bg-brand/5 text-brand'; ?> transition-all hover:bg-accent/20">
                    <span class="w-5 h-px bg-current block transition-transform origin-center" id="menu-line-1"></span>
                    <span class="w-5 h-px bg-current block transition-opacity" id="menu-line-2"></span>
                    <span class="w-5 h-px bg-current block transition-transform origin-center" id="menu-line-3"></span>
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
            <img src="/assets/images/refine-logo.png" alt="Refine Clinic Logo" class="h-8 w-auto object-contain">
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
