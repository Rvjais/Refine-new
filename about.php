<?php
$pageCategory = "Our Story";
$pageTitle = "Refine Your<br><i class='text-brand font-light'>Natural Beauty.</i>";
$pageDescription = "Discover the philosophy, the experts, and the exquisite environment that makes Refine Skin & Body Clinic the premier destination for aesthetic excellence in East Africa.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         CLINIC STORY & MISSION
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                
                <div class="gs-reveal-text">
                    <h2 class="text-section font-display text-brand-deeper leading-tight mb-8">
                        A Legacy of <i class="text-accent font-light">Transformation.</i>
                    </h2>
                    
                    <div class="space-y-6 text-brand-muted font-body text-lg font-light leading-relaxed mb-12">
                        <p>
                            At Refine Skin and Body Clinic, we believe that true beauty is a harmonious blend of internal wellness and external radiance. Established with the vision of bringing world-class dermatological and aesthetic care to East Africa, our clinics in Kampala and Juba stand as sanctuaries of rejuvenation.
                        </p>
                        <p>
                            We seamlessly merge cutting-edge clinical technology with the delicate art of aesthetic refinement. Our bespoke treatments are not about altering who you are, but rather illuminating your innate elegance. Every journey at Refine begins with a deep, empathetic understanding of your unique skin canvas and personal aspirations.
                        </p>
                        <p>
                            Guided by uncompromising standards of safety, efficacy, and ethical practice, our board-certified specialists employ only FDA-approved technologies and premium formulations. This commitment to excellence has cemented our reputation as the region's most trusted aesthetic authority.
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-8 border-t border-brand/10 pt-10">
                        <div>
                            <h4 class="font-heading font-semibold text-brand text-xl mb-3">Our Mission</h4>
                            <p class="text-sm text-brand-muted font-light leading-relaxed">To empower individuals through personalized, scientifically-backed skin and body transformations, fostering profound self-confidence.</p>
                        </div>
                        <div>
                            <h4 class="font-heading font-semibold text-brand text-xl mb-3">Our Vision</h4>
                            <p class="text-sm text-brand-muted font-light leading-relaxed">To be the undisputed leader in luxury aesthetic medicine across Africa, setting the benchmark for clinical excellence.</p>
                        </div>
                    </div>
                </div>

                <div class="relative h-[700px] rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group">
                    <img src="https://refineskinandbody.com/images/refine_skin_and_body_clinic_welcome-to1.webp" alt="Clinic Interior" class="w-full h-full object-cover gs-reveal-img" loading="lazy">
                    <div class="absolute inset-0 bg-brand-deeper/10"></div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- ============================================
         CORE VALUES (Hover Cards)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative overflow-hidden">
        <!-- Background Abstract -->
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand rounded-full blur-[100px] opacity-20 -translate-y-1/2 translate-x-1/3"></div>

        <div class="max-w-[1600px] mx-auto px-6 lg:px-10 relative z-10 gs-reveal-text">
            <h2 class="text-section font-display mb-16 text-center">The Refine <i class="text-accent font-light">Pillars.</i></h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="glass-panel-dark p-10 rounded-3xl group hover:-translate-y-2 transition-transform duration-500">
                    <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center text-accent text-2xl mb-8 group-hover:bg-accent group-hover:text-brand-deeper transition-colors duration-500">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="font-display text-2xl mb-4">Uncompromising Safety</h3>
                    <p class="font-body font-light text-white/70 leading-relaxed text-sm">We utilize only FDA-approved, medical-grade technology and adhere to the strictest clinical protocols to ensure your utmost safety and peace of mind.</p>
                </div>

                <!-- Value 2 -->
                <div class="glass-panel-dark p-10 rounded-3xl group hover:-translate-y-2 transition-transform duration-500">
                    <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center text-accent text-2xl mb-8 group-hover:bg-accent group-hover:text-brand-deeper transition-colors duration-500">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3 class="font-display text-2xl mb-4">Profound Empathy</h3>
                    <p class="font-body font-light text-white/70 leading-relaxed text-sm">Every treatment begins by listening. We understand the emotional connection to aesthetics and guide you with honesty, compassion, and respect.</p>
                </div>

                <!-- Value 3 -->
                <div class="glass-panel-dark p-10 rounded-3xl group hover:-translate-y-2 transition-transform duration-500">
                    <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center text-accent text-2xl mb-8 group-hover:bg-accent group-hover:text-brand-deeper transition-colors duration-500">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="font-display text-2xl mb-4">Artistic Excellence</h3>
                    <p class="font-body font-light text-white/70 leading-relaxed text-sm">Our practitioners are artists as much as they are clinicians. We deliver subtle, undetectable enhancements that honor your natural architecture.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         FOUNDER / LEAD SPECIALIST
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm relative overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-24 items-center">
                
                <div class="lg:col-span-5 relative gs-reveal-img-group">
                    <div class="aspect-[3/4] rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://refineskinandbody.com/images/Dr.%20Chirag%20Kotecha.webp" alt="Dr. Chirag Kotecha" class="w-full h-full object-cover gs-reveal-img" loading="lazy">
                    </div>
                </div>

                <div class="lg:col-span-7 gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-6 font-semibold">The Visionary</span>
                    <h2 class="text-section font-display text-brand-deeper leading-tight mb-8">
                        Dr. Chirag <i class="text-brand font-light">Kotecha.</i>
                    </h2>
                    
                    <div class="space-y-6 text-brand-muted font-body text-lg font-light leading-relaxed mb-10">
                        <p>
                            Dr. Chirag Kotecha is the driving force and lead specialist behind Refine Skin & Body Clinic. With an illustrious background in Aesthetic Medicine and Dermatology, he has dedicated his career to mastering the subtle nuances of facial harmonization and non-surgical rejuvenation.
                        </p>
                        <p>
                            His philosophy is rooted in the belief that aesthetic enhancements should be entirely undetectable—refreshing the visage while preserving individual character. Under his meticulous guidance, the clinic has introduced several pioneering treatments to the region.
                        </p>
                    </div>
                    
                    <!-- Accreditation Logos -->
                    <div class="flex flex-wrap items-center gap-8 border-t border-brand/10 pt-8">
                        <h4 class="font-heading font-semibold text-brand text-xs uppercase tracking-widest w-full opacity-50 mb-2">Accreditations & Memberships</h4>
                        <img src="https://refineskinandbody.com/images/fab2.webp" alt="Accreditation 1" class="h-12 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         MEET THE EXPERTS (Team Grid)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col md:flex-row justify-between items-end gap-8 mb-16 gs-reveal-text">
                <div class="max-w-2xl">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">The Collective</span>
                    <h2 class="text-section font-display text-brand-deeper leading-tight">Master <i class="text-brand font-light">Practitioners.</i></h2>
                </div>
                <div class="max-w-md">
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed">Our hand-picked team of specialists brings unparalleled expertise to every treatment room.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8 gs-stagger-bento">
                <!-- Team Member 1: Dr. Ahmed Ashraf -->
                <a href="dr-ahmed-ashraf-dermatologist-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/dr_Ahmed_Ashraf_Dermatologist.png" alt="Dr. Ahmed Ashraf" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Dr. Ahmed Ashraf</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Dermatologist (Egypt)</p>
                </a>
                <!-- Team Member 2: Alison Gallagher -->
                <a href="about-alison-gallagher-psychotherapist-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/Alison_Gallagher_picture_3.png" alt="Alison Gallagher" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Alison Gallagher</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Psychotherapist</p>
                </a>
                <!-- Team Member 3: Wendy Emyedu -->
                <a href="about-ms-wendy-emyedu-ayayo-nutritionist-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/Ms_Wendy_Emyedu_Ayayo.png" alt="Ms. Wendy Emyedu Ayayo" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Wendy Emyedu</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Nutritionist</p>
                </a>
                <!-- Team Member 4: Dr. William Lubega -->
                <a href="about-dr-william-lubega-plastic-surgeon-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/Dr_William_Lubega.png" alt="Dr. William Lubega" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Dr. William Lubega</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Plastic Surgeon</p>
                </a>
                <!-- Team Member 5: Dr. Vicky Koojo Nganzi -->
                <a href="about-dr-vicky-koojo-nganzi-dermatologist-in-uganda" class="group cursor-pointer bento-item">
                    <div class="relative aspect-[4/5] rounded-3xl overflow-hidden mb-6 bg-surface-cool">
                        <div class="absolute inset-0 bg-brand-deeper/5 group-hover:bg-brand-deeper/20 transition-colors duration-500 z-10"></div>
                        <img src="/assets/images/team/Dr_Vicky_Koojo_Nganzi.png" alt="Dr. Vicky Koojo Nganzi" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 filter grayscale-[0.2]">
                    </div>
                    <h4 class="font-display text-2xl text-brand-deeper mb-1 group-hover:text-brand transition-colors">Dr. Vicky Koojo Nganzi</h4>
                    <p class="font-heading text-xs text-accent font-semibold uppercase tracking-widest">Medical & Cosmetic Dermatologist</p>
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================
         THE CLINIC EXPERIENCE (Visual Narrative)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative h-[600px] rounded-3xl overflow-hidden gs-reveal-img-group">
                    <img src="https://refineskinandbody.com/images/about2026.webp" alt="Clinic Interior" class="w-full h-full object-cover gs-reveal-img" loading="lazy">
                </div>
                <div class="order-1 lg:order-2 gs-reveal-text lg:pl-12">
                    <h2 class="text-section font-display text-brand-deeper mb-8">A Sanctuary of <i class="text-accent font-light">Calm.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Step into an environment meticulously designed to soothe the senses. From the moment you arrive, the ambient lighting, signature scent, and private consultation suites ensure your absolute comfort and discretion.
                    </p>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-10">
                        We believe that luxury lies in the details. Enjoy complimentary refreshments in our waiting lounge before being escorted to state-of-the-art treatment rooms that combine clinical sterility with spa-like serenity.
                    </p>
                    <a href="gallery" class="btn-magnetic btn-outline magnetic-target">
                        <span>View Clinic Gallery</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         MILESTONE TIMELINE
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative">
        <div class="max-w-[1200px] mx-auto px-6 lg:px-10 gs-reveal-text">
            <h2 class="text-section font-display text-center mb-20">Our <i class="text-accent font-light">Journey.</i></h2>
            
            <div class="relative border-l border-white/20 ml-4 md:ml-1/2 space-y-16">
                <!-- Timeline Item 1 -->
                <div class="relative pl-8 md:pl-0">
                    <div class="absolute w-4 h-4 bg-accent rounded-full -left-[9px] top-1"></div>
                    <div class="md:w-1/2 md:pr-12 md:text-right md:absolute md:left-0 md:-translate-x-full">
                        <h3 class="font-display text-3xl text-accent mb-2">2015</h3>
                        <h4 class="font-heading text-lg font-semibold mb-2">The Inception</h4>
                        <p class="font-body text-sm text-white/60 font-light">Refine Skin & Body Clinic opens its first flagship location in Kampala, introducing advanced laser therapies to the market.</p>
                    </div>
                </div>
                <!-- Timeline Item 2 -->
                <div class="relative pl-8 md:pl-0 md:flex md:justify-end mt-24">
                    <div class="absolute w-4 h-4 bg-accent rounded-full -left-[9px] top-1 md:left-auto md:-ml-[9px] md:left-1/2"></div>
                    <div class="md:w-1/2 md:pl-12 text-left">
                        <h3 class="font-display text-3xl text-accent mb-2">2018</h3>
                        <h4 class="font-heading text-lg font-semibold mb-2">Expansion of Excellence</h4>
                        <p class="font-body text-sm text-white/60 font-light">Opening of the second branch in Kabalagala and the launch of the dedicated IV Therapy Lounge.</p>
                    </div>
                </div>
                <!-- Timeline Item 3 -->
                <div class="relative pl-8 md:pl-0 mt-24">
                    <div class="absolute w-4 h-4 bg-accent rounded-full -left-[9px] top-1"></div>
                    <div class="md:w-1/2 md:pr-12 md:text-right md:absolute md:left-0 md:-translate-x-full">
                        <h3 class="font-display text-3xl text-accent mb-2">2021</h3>
                        <h4 class="font-heading text-lg font-semibold mb-2">Crossing Borders</h4>
                        <p class="font-body text-sm text-white/60 font-light">International expansion with the grand opening of the premium Juba, South Sudan aesthetic center.</p>
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
