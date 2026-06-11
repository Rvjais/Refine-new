<?php
$pageCategory = "Investment";
$pageTitle = "Transparent <i class='text-brand font-light'>Pricing.</i>";
$pageDescription = "Explore our premium treatment packages and pricing structures. We believe in transparent, upfront investments in your aesthetic journey.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         SIGNATURE BUNDLES (Featured Pricing)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://refineskinandbody.com/images/refine_skin_and_body_clinic_welcome-to1.webp')] bg-cover bg-center opacity-5 mix-blend-overlay"></div>
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10 relative z-10 gs-reveal-text">
            
            <div class="text-center mb-16">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Maximum ROI</span>
                <h2 class="text-section font-display text-white">Signature <i class="text-accent font-light">Bundles.</i></h2>
                <p class="text-white/70 font-body text-sm mt-4 font-light max-w-2xl mx-auto">Curated treatment combinations designed to deliver comprehensive results at an exceptional value.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 gs-stagger-bento">
                <!-- Bundle 1 -->
                <div class="glass-panel-dark p-8 md:p-10 rounded-[40px] text-white border border-white/10 hover:border-accent transition-colors">
                    <h3 class="font-display text-2xl mb-2">The Bridal Glow</h3>
                    <p class="text-xs text-white/50 font-light mb-6">Perfect 3 months prior to the big day.</p>
                    <div class="font-display text-3xl text-accent mb-8">1.2M UGX<span class="text-xs text-white/50 font-body line-through ml-3">1.5M UGX</span></div>
                    <ul class="text-sm font-body space-y-3 mb-8">
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> 3x HydraFacial MD Sessions</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> 1x Inner Beauty IV Drip</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Medical-grade Skincare Kit</li>
                    </ul>
                    <a href="book-appointment" class="btn-magnetic w-full bg-white text-brand-deeper text-sm">Book Bundle</a>
                </div>

                <!-- Bundle 2 -->
                <div class="glass-panel-dark p-8 md:p-10 rounded-[40px] text-white border border-accent bg-accent/5 transform lg:-translate-y-4 shadow-2xl relative">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-accent text-brand-deeper text-[10px] font-bold uppercase tracking-widest px-4 py-1 rounded-full">Most Popular</div>
                    <h3 class="font-display text-2xl mb-2">Liquid Facelift</h3>
                    <p class="text-xs text-white/50 font-light mb-6">Complete non-surgical rejuvenation.</p>
                    <div class="font-display text-3xl text-accent mb-8">Bespoke<span class="text-xs text-white/50 font-body block mt-1">Custom quote upon consultation</span></div>
                    <ul class="text-sm font-body space-y-3 mb-8">
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Strategic Botox Placement</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Multi-syringe Dermal Filler</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Complimentary Review Session</li>
                    </ul>
                    <a href="book-appointment" class="btn-magnetic w-full bg-accent text-brand-deeper text-sm border-none">Consultation Required</a>
                </div>

                <!-- Bundle 3 -->
                <div class="glass-panel-dark p-8 md:p-10 rounded-[40px] text-white border border-white/10 hover:border-accent transition-colors">
                    <h3 class="font-display text-2xl mb-2">Acne Bootcamp</h3>
                    <p class="text-xs text-white/50 font-light mb-6">6-month intensive clearing protocol.</p>
                    <div class="font-display text-3xl text-accent mb-8">2.5M UGX<span class="text-xs text-white/50 font-body line-through ml-3">3.2M UGX</span></div>
                    <ul class="text-sm font-body space-y-3 mb-8">
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> 6x Advanced Chemical Peels</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Laser Bacteria Reduction</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Full ZO® Skin Health Regimen</li>
                    </ul>
                    <a href="book-appointment" class="btn-magnetic w-full bg-white text-brand-deeper text-sm">Book Bundle</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================
         A LA CARTE PRICING TABLES
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1200px] mx-auto px-6 lg:px-10 gs-reveal-text">
            
            <div class="text-center mb-16">
                <h2 class="text-section font-display text-brand-deeper mb-4">A La Carte <i class="text-accent font-light">Services</i></h2>
                <p class="text-brand-muted font-body text-sm font-light">Please note: Prices are indicative and may vary based on individual consultation and specific product requirements. All prices are in UGX unless otherwise stated.</p>
            </div>

            <!-- Cosmetic Derm Category -->
            <div class="mb-16">
                <h3 class="font-display text-2xl text-brand-deeper border-b border-brand/10 pb-4 mb-6 flex items-center gap-3"><i class="fas fa-magic text-accent"></i> Cosmetic Dermatology</h3>
                <div class="bg-surface-warm rounded-3xl overflow-hidden shadow-sm border border-brand/5">
                    <div class="flex justify-between items-center p-6 border-b border-brand/5 hover:bg-white transition-colors cursor-pointer group">
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper group-hover:text-accent transition-colors">HydraFacial Signature</h4>
                            <p class="text-xs text-brand-muted mt-1 font-light">Deep cleanse, extract, and hydrate.</p>
                        </div>
                        <div class="font-display text-xl text-accent">From 350K</div>
                    </div>
                    <div class="flex justify-between items-center p-6 border-b border-brand/5 hover:bg-white transition-colors cursor-pointer group">
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper group-hover:text-accent transition-colors">Chemical Peel (Advanced)</h4>
                            <p class="text-xs text-brand-muted mt-1 font-light">Targets pigmentation and texture.</p>
                        </div>
                        <div class="font-display text-xl text-accent">From 400K</div>
                    </div>
                    <div class="flex justify-between items-center p-6 hover:bg-white transition-colors cursor-pointer group">
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper group-hover:text-accent transition-colors">RF Microneedling</h4>
                            <p class="text-xs text-brand-muted mt-1 font-light">Collagen induction for scars and anti-aging.</p>
                        </div>
                        <div class="font-display text-xl text-accent">From 800K</div>
                    </div>
                </div>
            </div>

            <!-- Anti Aging Category -->
            <div class="mb-16">
                <h3 class="font-display text-2xl text-brand-deeper border-b border-brand/10 pb-4 mb-6 flex items-center gap-3"><i class="fas fa-hourglass-half text-accent"></i> Anti-Aging Treatments</h3>
                <div class="bg-surface-warm rounded-3xl overflow-hidden shadow-sm border border-brand/5">
                    <div class="flex justify-between items-center p-6 border-b border-brand/5 hover:bg-white transition-colors cursor-pointer group">
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper group-hover:text-accent transition-colors">Botox® (per unit)</h4>
                            <p class="text-xs text-brand-muted mt-1 font-light">Wrinkle reduction and prevention.</p>
                        </div>
                        <div class="font-display text-xl text-brand-deeper">Consultation</div>
                    </div>
                    <div class="flex justify-between items-center p-6 hover:bg-white transition-colors cursor-pointer group">
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper group-hover:text-accent transition-colors">Dermal Fillers (per syringe)</h4>
                            <p class="text-xs text-brand-muted mt-1 font-light">Volume restoration and contouring.</p>
                        </div>
                        <div class="font-display text-xl text-brand-deeper">Consultation</div>
                    </div>
                </div>
            </div>

            <!-- IV Lounge Category -->
            <div class="mb-16">
                <h3 class="font-display text-2xl text-brand-deeper border-b border-brand/10 pb-4 mb-6 flex items-center gap-3"><i class="fas fa-leaf text-accent"></i> IV Therapy Lounge</h3>
                <div class="bg-surface-warm rounded-3xl overflow-hidden shadow-sm border border-brand/5">
                    <div class="flex justify-between items-center p-6 border-b border-brand/5 hover:bg-white transition-colors cursor-pointer group">
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper group-hover:text-accent transition-colors">Myers Magic Drip</h4>
                            <p class="text-xs text-brand-muted mt-1 font-light">Immune boost and energy recovery.</p>
                        </div>
                        <div class="font-display text-xl text-accent">250K</div>
                    </div>
                    <div class="flex justify-between items-center p-6 hover:bg-white transition-colors cursor-pointer group">
                        <div>
                            <h4 class="font-heading font-semibold text-brand-deeper group-hover:text-accent transition-colors">Inner Beauty / Glutathione</h4>
                            <p class="text-xs text-brand-muted mt-1 font-light">Skin brightening and detox.</p>
                        </div>
                        <div class="font-display text-xl text-accent">300K</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================================
         FINANCING & MEMBERSHIP CTA
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-8 gs-stagger-bento">
                
                <!-- Membership -->
                <div class="glass-panel p-10 rounded-[32px] bg-white text-center border border-accent/20">
                    <i class="fas fa-crown text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-3xl text-brand-deeper mb-4">Refine Membership</h3>
                    <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-8 max-w-sm mx-auto">
                        Join our exclusive loyalty program to unlock up to 15% off a la carte pricing, complimentary treatments, and priority booking.
                    </p>
                    <a href="membership" class="btn-magnetic btn-outline text-sm w-full md:w-auto px-8">View Tiers & Benefits</a>
                </div>

                <!-- Financing -->
                <div class="glass-panel p-10 rounded-[32px] bg-white text-center border border-brand/5">
                    <i class="fas fa-credit-card text-4xl text-brand/30 mb-6"></i>
                    <h3 class="font-display text-3xl text-brand-deeper mb-4">Flexible Payment Plans</h3>
                    <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-8 max-w-sm mx-auto">
                        Aesthetic care should be accessible. We offer flexible, in-house financing options for larger treatment packages.
                    </p>
                    <a href="contact" class="btn-magnetic btn-outline border-brand/20 text-brand text-sm w-full md:w-auto px-8 hover:bg-brand hover:text-white">Inquire About Financing</a>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
