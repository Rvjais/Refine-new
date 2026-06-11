<?php
$pageCategory = "The Results";
$pageTitle = "Clinic <i class='text-brand font-light'>Gallery.</i>";
$pageDescription = "Browse through our collection of authentic transformations, state-of-the-art clinic interiors, and the premium equipment we use to deliver uncompromising results.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         CLINIC VIDEO TOUR
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 gs-reveal-fade">
            <div class="relative w-full aspect-video rounded-[40px] overflow-hidden shadow-2xl group cursor-pointer">
                <img src="https://refineskinandbody.com/images/refine_skin_and_body_clinic_welcome-to1.webp" alt="Video Tour Thumbnail" class="absolute inset-0 w-full h-full object-cover filter brightness-75 group-hover:brightness-50 transition-all duration-700 transform group-hover:scale-105">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-24 h-24 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-3xl border border-white/30 transform group-hover:scale-110 transition-transform shadow-2xl">
                        <i class="fas fa-play ml-2"></i>
                    </div>
                </div>
                <div class="absolute bottom-10 left-10 text-white">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-2 font-semibold shadow-black drop-shadow-md">Virtual Tour</span>
                    <h3 class="text-section font-display shadow-black drop-shadow-lg">Experience Refine</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         GALLERY FILTERS & GRID
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm relative">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            
            <div class="text-center mb-16 gs-reveal-text">
                <h2 class="text-section font-display text-brand-deeper mb-6">Our <i class="text-accent font-light">Spaces & Results.</i></h2>
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap items-center justify-center gap-4 mb-16 gs-reveal-text">
                <button class="px-6 py-2 rounded-full border-none bg-brand text-white text-sm font-semibold transition-colors shadow-md">All</button>
                <button class="px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors">Before & After</button>
                <button class="px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors">Clinic Interior</button>
                <button class="px-6 py-2 rounded-full border border-brand/20 text-brand text-sm font-semibold hover:bg-brand/5 transition-colors">Events</button>
            </div>

            <!-- Masonry Grid -->
            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6 gs-stagger-bento">
                <!-- Interior 1 -->
                <div class="break-inside-avoid relative rounded-3xl overflow-hidden group bento-item">
                    <img src="https://refineskinandbody.com/images/about2026.webp" alt="Clinic Interior" class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-brand-deeper/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-center p-6">
                        <span class="text-white font-heading font-semibold tracking-widest uppercase text-xs mb-2">Kampala HQ</span>
                        <p class="text-white/70 text-xs font-light">Reception & Waiting Lounge</p>
                    </div>
                </div>

                <!-- Interior 2 -->
                <div class="break-inside-avoid relative rounded-3xl overflow-hidden group bento-item">
                    <img src="https://refineskinandbody.com/images/refine_skin_and_body_clinic_welcome-to1.webp" alt="IV Lounge" class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-brand-deeper/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-center p-6">
                        <span class="text-white font-heading font-semibold tracking-widest uppercase text-xs mb-2">IV Therapy Lounge</span>
                        <p class="text-white/70 text-xs font-light">Private luxury drip stations</p>
                    </div>
                </div>
                
                <!-- Before/After Dummy 1 -->
                <div class="break-inside-avoid relative rounded-3xl overflow-hidden group bento-item bg-white border border-brand/5 aspect-square flex flex-col justify-center items-center text-center p-8">
                    <i class="fas fa-camera text-4xl text-brand/20 mb-4"></i>
                    <h4 class="font-display text-2xl text-brand-deeper mb-2">Acne Transformation</h4>
                    <p class="text-xs text-brand-muted font-light mb-4">Before & After (Consent on file)</p>
                    <button class="btn-magnetic btn-outline text-xs py-2 px-6">View Case</button>
                </div>
                
                <!-- Interior 3 -->
                <div class="break-inside-avoid relative rounded-3xl overflow-hidden group bento-item">
                    <img src="https://refineskinandbody.com/images/refine_skin_and_body_clinic_dermatology01.webp" alt="Consultation Room" class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-105" loading="lazy">
                    <div class="absolute inset-0 bg-brand-deeper/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center text-center p-6">
                        <span class="text-white font-heading font-semibold tracking-widest uppercase text-xs mb-2">Consultation Room</span>
                        <p class="text-white/70 text-xs font-light">Complete privacy and discretion</p>
                    </div>
                </div>

                <!-- Before/After Dummy 2 -->
                <div class="break-inside-avoid relative rounded-3xl overflow-hidden group bento-item bg-white border border-brand/5 aspect-square flex flex-col justify-center items-center text-center p-8">
                    <i class="fas fa-camera text-4xl text-brand/20 mb-4"></i>
                    <h4 class="font-display text-2xl text-brand-deeper mb-2">Lip Volumization</h4>
                    <p class="text-xs text-brand-muted font-light mb-4">Before & After (Consent on file)</p>
                    <button class="btn-magnetic btn-outline text-xs py-2 px-6">View Case</button>
                </div>
            </div>
            
            <div class="mt-16 text-center">
                <button class="btn-magnetic btn-outline magnetic-target">
                    <span>Load More Imagery</span>
                </button>
            </div>
        </div>
    </section>

    <!-- ============================================
         TECHNOLOGY SPOTLIGHT
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="text-center mb-16 gs-reveal-text">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Our Arsenal</span>
                <h2 class="text-section font-display text-brand-deeper">Clinical <i class="text-accent font-light">Technology.</i></h2>
                <p class="text-brand-muted font-body text-sm mt-4 font-light max-w-2xl mx-auto">We utilize only the gold standard in FDA-approved aesthetic technology.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 gs-stagger-bento">
                <!-- Tech 1 -->
                <div class="glass-panel p-8 rounded-[32px] group hover:bg-surface-warm transition-colors border border-brand/5 flex items-center gap-8">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 relative">
                        <img src="https://refineskinandbody.com/images/Refine-hydra-facial.webp" alt="HydraFacial Machine" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-brand-deeper text-xl mb-2">HydraFacial MD®</h3>
                        <p class="text-sm text-brand-muted font-light leading-relaxed">Medical-grade resurfacing and hydration system.</p>
                    </div>
                </div>

                <!-- Tech 2 -->
                <div class="glass-panel p-8 rounded-[32px] group hover:bg-surface-warm transition-colors border border-brand/5 flex items-center gap-8">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden flex-shrink-0 relative">
                        <img src="https://refineskinandbody.com/images/Refine-skin-tightening.webp" alt="Laser Tech" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500">
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-brand-deeper text-xl mb-2">Candela Nd:YAG Laser</h3>
                        <p class="text-sm text-brand-muted font-light leading-relaxed">The safest, most effective laser hair removal for dark skin types.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
