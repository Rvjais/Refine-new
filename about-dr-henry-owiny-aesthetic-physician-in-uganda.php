<?php
$pageCategory = "Aesthetic Physician";
$pageTitle = "Dr. Henry <i class='text-brand font-light'>Owiny.</i>";
$pageDescription = "Meet Dr. Henry Owiny, an aesthetic physician dedicated to delivering natural, harmonious results through advanced cosmetic dermatology.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-24">
                
                <!-- Profile Image (Left Column) -->
                <div class="lg:col-span-4">
                    <div class="sticky top-32">
                        <div class="rounded-[40px] overflow-hidden shadow-2xl mb-8 relative gs-reveal-img-group aspect-[3/4]">
                            <!-- Placeholder Image -->
                            <img src="/assets/imagesfromsite/family_physician_banner.png" alt="Dr. Henry Owiny" class="w-full h-full object-cover filter grayscale-[0.2] gs-reveal-img" loading="lazy">
                            <div class="absolute inset-0 bg-brand-deeper/5"></div>
                        </div>
                        
                        <div class="glass-panel p-6 rounded-3xl border border-brand/5 bg-white shadow-sm">
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-4 border-b border-brand/10 pb-3">Spoken Languages</h4>
                            <ul class="space-y-2 text-sm text-brand-muted font-light">
                                <li><i class="fas fa-check text-accent mr-2 text-xs"></i> English</li>
                                <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Swahili</li>
                                <li><i class="fas fa-check text-accent mr-2 text-xs"></i> Luganda</li>
                            </ul>
                        </div>
                        
                        <div class="mt-6 glass-panel p-6 rounded-3xl border border-brand/5 bg-white shadow-sm text-center">
                            <a href="book-appointment" class="btn-magnetic w-full bg-brand-deeper text-white magnetic-target text-xs py-3">
                                <span>Book with Dr. Henry</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bio & Details (Right Column) -->
                <div class="lg:col-span-8 gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Medical Aesthetics</span>
                    <h2 class="text-section font-display text-brand-deeper mb-6">Art & <i class="text-accent font-light">Science.</i></h2>
                    
                    <!-- Bio (Placeholder Text for live site content) -->
                    <div class="space-y-6 text-brand-muted font-body text-lg font-light leading-relaxed mb-12">
                        <p>
                            <!-- [PLACEHOLDER START: Replace with live site bio] -->
                            Dr. Henry Owiny brings a meticulous eye and a gentle hand to the practice of aesthetic medicine. With a profound understanding of facial anatomy and an innate artistic sensibility, he specializes in delivering results that enhance rather than alter his patients' natural beauty.
                        </p>
                        <p>
                            He is highly regarded for his comprehensive approach to patient care, taking the time to thoroughly understand each individual's goals and concerns before crafting a bespoke treatment plan. His expertise spans a wide range of modalities, from advanced injectable techniques to state-of-the-art laser therapies.
                        </p>
                        <p>
                            Dr. Owiny's commitment to continuous education ensures that he remains at the forefront of the rapidly evolving field of aesthetic medicine, providing his patients with the safest and most effective treatments available globally.
                            <!-- [PLACEHOLDER END] -->
                        </p>
                    </div>
                    
                    <!-- Signature Block -->
                    <div class="mb-12 border-b border-brand/10 pb-12">
                        <div class="font-display text-4xl text-brand-deeper/40 transform -rotate-2 ml-4">
                            Dr. Henry Owiny
                        </div>
                    </div>

                    <!-- Credentials List -->
                    <div>
                        <h3 class="font-display text-2xl text-brand-deeper mb-6">Professional Credentials</h3>
                        <div class="grid md:grid-cols-2 gap-4">
                            <!-- [PLACEHOLDER START: Replace with live credentials] -->
                            <div class="glass-panel p-6 rounded-2xl border border-brand/5 bg-white">
                                <i class="fas fa-graduation-cap text-2xl text-brand/20 mb-3"></i>
                                <h4 class="font-semibold text-brand-deeper text-sm mb-1">Bachelor of Medicine (MBChB)</h4>
                                <p class="text-xs text-brand-muted">Gulu University</p>
                            </div>
                            <div class="glass-panel p-6 rounded-2xl border border-brand/5 bg-white">
                                <i class="fas fa-certificate text-2xl text-brand/20 mb-3"></i>
                                <h4 class="font-semibold text-brand-deeper text-sm mb-1">Certificate in Aesthetic Medicine</h4>
                                <p class="text-xs text-brand-muted">American Academy of Aesthetic Medicine</p>
                            </div>
                            <div class="glass-panel p-6 rounded-2xl border border-brand/5 bg-white">
                                <i class="fas fa-syringe text-2xl text-brand/20 mb-3"></i>
                                <h4 class="font-semibold text-brand-deeper text-sm mb-1">Advanced Injectables Masterclass</h4>
                                <p class="text-xs text-brand-muted">Allergan Medical Institute</p>
                            </div>
                            <!-- [PLACEHOLDER END] -->
                        </div>
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
