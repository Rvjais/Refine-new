<?php
$pageCategory = "Plastic Surgeon";
$pageTitle = "Dr. William <i class='text-brand font-light'>Lubega.</i>";
$pageDescription = "Meet Dr. William Lubega, a board-certified plastic surgeon specializing in reconstructive and aesthetic surgical procedures.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-24 items-start">
                
                <!-- Profile Image (Left Column) -->
                <div class="lg:col-span-4">
                    <div class="sticky top-32">
                        <div class="rounded-[40px] overflow-hidden shadow-2xl mb-8 relative gs-reveal-img-group aspect-[3/4]">
                            <!-- Placeholder Image -->
                            <img src="/assets/imagesfromsite/about2026.webp" alt="Dr. William Lubega" class="w-full h-full object-cover filter grayscale-[0.2] gs-reveal-img" loading="lazy">
                            <div class="absolute inset-0 bg-brand-deeper/5"></div>
                        </div>
                        
                        <div class="glass-panel p-6 rounded-3xl border border-brand/5 bg-brand-deeper text-white shadow-xl text-center">
                            <i class="fas fa-scalpel-path text-3xl text-accent mb-4 opacity-80"></i>
                            <h4 class="font-heading font-semibold text-white text-sm mb-2">Surgical Consultation</h4>
                            <p class="text-xs text-white/60 font-light mb-6">A thorough evaluation is required prior to any surgical intervention.</p>
                            <a href="book-appointment" class="btn-magnetic w-full bg-white text-brand-deeper magnetic-target text-xs py-3 border-none">
                                <span>Request Consultation</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bio & Surgical Specialties (Right Column) -->
                <div class="lg:col-span-8 gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Surgical Excellence</span>
                    <h2 class="text-section font-display text-brand-deeper mb-6">Precision & <i class="text-accent font-light">Proportion.</i></h2>
                    
                    <!-- Bio (Placeholder Text for live site content) -->
                    <div class="space-y-6 text-brand-muted font-body text-lg font-light leading-relaxed mb-16">
                        <p>
                            <!-- [PLACEHOLDER START: Replace with live site bio] -->
                            Dr. William Lubega is a highly esteemed board-certified plastic and reconstructive surgeon. Known for his meticulous surgical technique and profound anatomical knowledge, he is dedicated to delivering transformative results that look incredibly natural.
                        </p>
                        <p>
                            His surgical philosophy is grounded in proportion and balance. Whether performing complex reconstructive procedures or refined aesthetic enhancements, Dr. Lubega approaches each case as a unique architectural challenge, striving for outcomes that complement the patient's innate features.
                        </p>
                        <p>
                            Patient safety and holistic well-being are at the forefront of his practice. From the initial consultation through to the final stages of recovery, Dr. Lubega ensures that his patients are fully informed, comfortable, and confident in their surgical journey.
                            <!-- [PLACEHOLDER END] -->
                        </p>
                    </div>

                    <!-- Surgical Specialties Grid -->
                    <div class="mb-16">
                        <h3 class="font-display text-2xl text-brand-deeper mb-8 border-b border-brand/10 pb-4">Areas of Specialty</h3>
                        <div class="grid sm:grid-cols-2 gap-6 gs-stagger-bento">
                            <!-- [PLACEHOLDER START] -->
                            <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm bento-item">
                                <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center text-accent mb-4">
                                    <i class="fas fa-smile"></i>
                                </div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Facial Surgery</h4>
                                <p class="text-sm text-brand-muted font-light leading-relaxed">Rhinoplasty, Blepharoplasty (Eyelid Surgery), and surgical Facelifts designed for natural, undetectable refreshment.</p>
                            </div>
                            <div class="glass-panel p-8 rounded-3xl bg-white border border-brand/5 shadow-sm bento-item">
                                <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center text-accent mb-4">
                                    <i class="fas fa-female"></i>
                                </div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Body Contouring</h4>
                                <p class="text-sm text-brand-muted font-light leading-relaxed">Liposuction, Abdominoplasty (Tummy Tuck), and Mommy Makeovers to restore and enhance body proportion.</p>
                            </div>
                            <!-- [PLACEHOLDER END] -->
                        </div>
                    </div>

                    <!-- Credentials List -->
                    <div>
                        <h3 class="font-display text-2xl text-brand-deeper mb-6">Professional Credentials</h3>
                        <ul class="space-y-4 font-body text-brand-muted font-light">
                            <!-- [PLACEHOLDER START] -->
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 mt-1"><i class="fas fa-graduation-cap text-xs"></i></div>
                                <div>
                                    <h4 class="font-semibold text-brand-deeper text-sm">Master of Medicine in Surgery (MMed Surg)</h4>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 mt-1"><i class="fas fa-award text-xs"></i></div>
                                <div>
                                    <h4 class="font-semibold text-brand-deeper text-sm">Fellow of the College of Surgeons of East, Central and Southern Africa (FCS-ECSA) - Plastic Surgery</h4>
                                </div>
                            </li>
                            <!-- [PLACEHOLDER END] -->
                        </ul>
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
