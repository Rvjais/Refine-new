<?php
$pageCategory = "Lead Dermatologist";
$pageTitle = "Dr. Chirag <i class='text-brand font-light'>Kotecha.</i>";
$pageDescription = "Discover the visionary behind Refine Skin & Body Clinic. Dr. Chirag Kotecha is a leading dermatologist dedicated to elevating aesthetic medicine in East Africa.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-24">
                
                <!-- Profile Image & Quick Stats (Left Column) -->
                <div class="lg:col-span-4">
                    <div class="sticky top-32">
                        <div class="rounded-[40px] overflow-hidden shadow-2xl mb-8 relative gs-reveal-img-group aspect-[3/4]">
                            <img src="https://refineskinandbody.com/images/Dr.%20Chirag%20Kotecha.webp" alt="Dr. Chirag Kotecha" class="w-full h-full object-cover gs-reveal-img" loading="lazy">
                            <div class="absolute inset-0 bg-brand-deeper/5"></div>
                        </div>
                        
                        <div class="glass-panel p-6 rounded-3xl border border-brand/5 bg-surface-warm shadow-sm text-center">
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-4">Book a Consultation</h4>
                            <a href="book-appointment" class="btn-magnetic w-full magnetic-target text-xs py-3">
                                <span>Schedule with Dr. Chirag</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bio & Details (Right Column) -->
                <div class="lg:col-span-8 gs-reveal-text">
                    <h2 class="text-section font-display text-brand-deeper mb-6">The Visionary <i class="text-accent font-light">Specialist.</i></h2>
                    
                    <!-- Bio (Placeholder Text for live site content) -->
                    <div class="space-y-6 text-brand-muted font-body text-lg font-light leading-relaxed mb-12">
                        <p>
                            <!-- [PLACEHOLDER START: Replace with live site bio] -->
                            Dr. Chirag Kotecha is the driving force and lead specialist behind Refine Skin & Body Clinic. With an illustrious background in Aesthetic Medicine and Dermatology, he has dedicated his career to mastering the subtle nuances of facial harmonization and non-surgical rejuvenation.
                        </p>
                        <p>
                            His philosophy is rooted in the belief that aesthetic enhancements should be entirely undetectable—refreshing the visage while preserving individual character. Under his meticulous guidance, the clinic has introduced several pioneering, FDA-approved treatments to the East African region.
                        </p>
                        <p>
                            He is highly sought after for his artistic approach to dermal fillers and his comprehensive protocols for complex dermatological conditions such as severe acne and hyperpigmentation.
                            <!-- [PLACEHOLDER END] -->
                        </p>
                    </div>

                    <!-- Credentials List -->
                    <div class="border-t border-brand/10 pt-12 mb-12">
                        <h3 class="font-display text-2xl text-brand-deeper mb-6">Credentials & Memberships</h3>
                        <ul class="space-y-4 font-body text-brand-muted font-light">
                            <!-- [PLACEHOLDER START: Replace with live credentials] -->
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 mt-1"><i class="fas fa-graduation-cap text-xs"></i></div>
                                <div>
                                    <h4 class="font-semibold text-brand-deeper text-sm">Bachelor of Medicine, Bachelor of Surgery (MBChB)</h4>
                                    <p class="text-xs mt-1">Makerere University, Kampala</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 mt-1"><i class="fas fa-certificate text-xs"></i></div>
                                <div>
                                    <h4 class="font-semibold text-brand-deeper text-sm">Postgraduate Diploma in Practical Dermatology</h4>
                                    <p class="text-xs mt-1">Cardiff University, UK</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 mt-1"><i class="fas fa-award text-xs"></i></div>
                                <div>
                                    <h4 class="font-semibold text-brand-deeper text-sm">Member of the American Academy of Aesthetic Medicine (AAAM)</h4>
                                </div>
                            </li>
                            <!-- [PLACEHOLDER END] -->
                        </ul>
                    </div>

                    <!-- Publications & Media (Dummy Grid) -->
                    <div class="border-t border-brand/10 pt-12">
                        <h3 class="font-display text-2xl text-brand-deeper mb-6">Publications & Media</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <!-- [PLACEHOLDER START] -->
                            <a href="#" class="glass-panel p-6 rounded-2xl border border-brand/5 hover:bg-surface-warm transition-colors group block">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-2 group-hover:text-accent transition-colors">The Evolution of Skincare in East Africa</h4>
                                <p class="text-xs text-brand-muted font-light mb-4">Published in Vogue Africa</p>
                                <span class="text-xs font-semibold text-brand">Read Article <i class="fas fa-arrow-right ml-1"></i></span>
                            </a>
                            <a href="#" class="glass-panel p-6 rounded-2xl border border-brand/5 hover:bg-surface-warm transition-colors group block">
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-2 group-hover:text-accent transition-colors">Treating Melasma in Skin of Color</h4>
                                <p class="text-xs text-brand-muted font-light mb-4">Clinical Journal of Dermatology</p>
                                <span class="text-xs font-semibold text-brand">View Paper <i class="fas fa-arrow-right ml-1"></i></span>
                            </a>
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
