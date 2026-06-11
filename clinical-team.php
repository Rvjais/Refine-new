<?php
$pageCategory = "Our Team";
$pageTitle = "Clinical <i class='text-brand font-light'>Excellence.</i>";
$pageDescription = "Meet the highly skilled nurses and therapists who ensure your safety, comfort, and outstanding results at every stage of your treatment.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            
            <div class="text-center mb-16 gs-reveal-text">
                <h2 class="text-section font-display text-brand-deeper">Nurses & Therapists</h2>
                <p class="text-brand-muted font-body text-sm mt-4 font-light max-w-2xl mx-auto">Our clinical team undergoes rigorous, continuous training in global aesthetic standards, ensuring you receive care that is both safe and exceptionally effective.</p>
            </div>

            <!-- Team Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 gs-stagger-bento">
                
                <!-- Member 1 -->
                <div class="glass-panel p-4 rounded-3xl group bento-item bg-white border border-brand/5 shadow-sm text-center hover:-translate-y-2 transition-transform duration-300">
                    <div class="aspect-square rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_dermatology01.webp" class="w-full h-full object-cover filter grayscale-[0.3] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-1">Amelia N.</h4>
                    <p class="text-xs text-brand-muted font-light mb-2">Senior Aesthetic Nurse</p>
                    <span class="inline-block px-2 py-1 bg-brand/5 rounded text-[10px] uppercase tracking-widest text-brand font-semibold">Kampala HQ</span>
                </div>

                <!-- Member 2 -->
                <div class="glass-panel p-4 rounded-3xl group bento-item bg-white border border-brand/5 shadow-sm text-center hover:-translate-y-2 transition-transform duration-300">
                    <div class="aspect-square rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/services/breadcrumbsAll.webp" class="w-full h-full object-cover filter grayscale-[0.3] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-1">Sarah K.</h4>
                    <p class="text-xs text-brand-muted font-light mb-2">Laser Technician</p>
                    <span class="inline-block px-2 py-1 bg-brand/5 rounded text-[10px] uppercase tracking-widest text-brand font-semibold">Kampala HQ</span>
                </div>

                <!-- Member 3 -->
                <div class="glass-panel p-4 rounded-3xl group bento-item bg-white border border-brand/5 shadow-sm text-center hover:-translate-y-2 transition-transform duration-300">
                    <div class="aspect-square rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/about-8.webp" class="w-full h-full object-cover filter grayscale-[0.3] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-1">Grace M.</h4>
                    <p class="text-xs text-brand-muted font-light mb-2">Senior Therapist</p>
                    <span class="inline-block px-2 py-1 bg-brand/5 rounded text-[10px] uppercase tracking-widest text-brand font-semibold">Juba Branch</span>
                </div>
                
                <!-- Member 4 -->
                <div class="glass-panel p-4 rounded-3xl group bento-item bg-white border border-brand/5 shadow-sm text-center hover:-translate-y-2 transition-transform duration-300">
                    <div class="aspect-square rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/about-8.webp" class="w-full h-full object-cover filter grayscale-[0.3] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-1">Jane O.</h4>
                    <p class="text-xs text-brand-muted font-light mb-2">IV Nurse</p>
                    <span class="inline-block px-2 py-1 bg-brand/5 rounded text-[10px] uppercase tracking-widest text-brand font-semibold">Kampala HQ</span>
                </div>

            </div>
            
            <!-- Join Team CTA -->
            <div class="mt-20 glass-panel p-12 rounded-[40px] bg-white border border-brand/5 text-center shadow-lg gs-reveal-fade">
                <i class="fas fa-stethoscope text-4xl text-accent mb-6"></i>
                <h3 class="font-display text-3xl text-brand-deeper mb-4">Join Our Clinical Team</h3>
                <p class="text-sm text-brand-muted font-light mb-8 max-w-md mx-auto">We are always seeking passionate medical professionals dedicated to aesthetic excellence.</p>
                <a href="careers" class="btn-magnetic btn-outline magnetic-target">
                    <span>View Open Positions</span>
                </a>
            </div>

        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
