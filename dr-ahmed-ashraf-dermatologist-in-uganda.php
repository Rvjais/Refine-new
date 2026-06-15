<?php
$pageCategory = "Dermatologist";
$pageTitle = "Dr. Ahmed <i class='text-brand font-light'>Ashraf.</i>";
$pageDescription = "Meet Dr. Ahmed Ashraf, our visiting Dermatologist bringing international expertise and specialized care to Refine Skin & Body Clinic.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-24">
                
                <!-- Profile Image (Left Column) -->
                <div class="lg:col-span-4">
                    <div class="sticky top-32">
                        <div class="rounded-[40px] overflow-hidden shadow-2xl mb-8 relative gs-reveal-img-group aspect-[3/4]">
                            <!-- Placeholder Image -->
                            <img src="/assets/images/team/dr_Ahmed_Ashraf_Dermatologist.png" alt="Dr. Ahmed Ashraf" class="w-full h-full object-cover filter grayscale-[0.2] gs-reveal-img" loading="lazy">
                            <div class="absolute inset-0 bg-brand-deeper/5"></div>
                        </div>
                        
                        <div class="glass-panel p-6 rounded-3xl border border-brand/5 bg-surface-warm shadow-sm text-center">
                            <h4 class="font-heading font-semibold text-brand-deeper text-sm mb-4">International Expertise</h4>
                            <p class="text-xs text-brand-muted font-light mb-6">Visiting specialist from Egypt.</p>
                            <a href="book-appointment" class="btn-magnetic w-full magnetic-target text-xs py-3">
                                <span>Check Availability</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bio & Details (Right Column) -->
                <div class="lg:col-span-8 gs-reveal-text">
                    <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Global Dermatology</span>
                    <h2 class="text-section font-display text-brand-deeper mb-6">International <i class="text-accent font-light">Standards.</i></h2>
                    
                    <!-- Bio (Placeholder Text for live site content) -->
                    <div class="space-y-6 text-brand-muted font-body text-lg font-light leading-relaxed mb-12">
                        <p>
                            <!-- [PLACEHOLDER START: Replace with live site bio] -->
                            Dr. Ahmed Ashraf is a distinguished Dermatologist visiting from Egypt, bringing a wealth of international experience to Refine Skin & Body Clinic. He specializes in the diagnosis and management of complex clinical dermatological conditions.
                        </p>
                        <p>
                            With a particular interest in the unique challenges of ethnic skin types, Dr. Ashraf employs advanced diagnostic techniques and evidence-based treatment protocols to address issues such as stubborn hyperpigmentation, severe acne, and autoimmune skin disorders.
                        </p>
                        <p>
                            His collaborative approach with our local team ensures that patients receive world-class care seamlessly integrated with our clinic's high standards of ongoing patient support.
                            <!-- [PLACEHOLDER END] -->
                        </p>
                    </div>

                    <!-- Specialties & Focus Areas -->
                    <div class="border-t border-brand/10 pt-12 mb-12">
                        <h3 class="font-display text-2xl text-brand-deeper mb-6">Clinical Focus Areas</h3>
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 rounded-full bg-brand/5 text-brand font-semibold text-sm border border-brand/10">Clinical Dermatology</span>
                            <span class="px-4 py-2 rounded-full bg-brand/5 text-brand font-semibold text-sm border border-brand/10">Ethnic Skin Pathologies</span>
                            <span class="px-4 py-2 rounded-full bg-brand/5 text-brand font-semibold text-sm border border-brand/10">Hyperpigmentation</span>
                            <span class="px-4 py-2 rounded-full bg-brand/5 text-brand font-semibold text-sm border border-brand/10">Acne Management</span>
                        </div>
                    </div>

                    <!-- Credentials List -->
                    <div class="border-t border-brand/10 pt-12">
                        <h3 class="font-display text-2xl text-brand-deeper mb-6">Professional Credentials</h3>
                        <ul class="space-y-4 font-body text-brand-muted font-light">
                            <!-- [PLACEHOLDER START: Replace with live credentials] -->
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 mt-1"><i class="fas fa-graduation-cap text-xs"></i></div>
                                <div>
                                    <h4 class="font-semibold text-brand-deeper text-sm">Medical Degree (Dermatology Specialization)</h4>
                                    <p class="text-xs mt-1">Egypt</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="w-8 h-8 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 mt-1"><i class="fas fa-certificate text-xs"></i></div>
                                <div>
                                    <h4 class="font-semibold text-brand-deeper text-sm">Board Certified Dermatologist</h4>
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
