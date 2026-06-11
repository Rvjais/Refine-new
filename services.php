<?php
$pageCategory = "Our Treatments";
$pageTitle = "Masterful <i class='text-brand font-light'>Care.</i>";
$pageDescription = "Explore our comprehensive suite of advanced aesthetic and medical dermatology services. Each treatment is tailored to your unique canvas, delivering uncompromised quality and radiant results.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         CATEGORY FILTERS
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#cosmetic" class="glass-panel p-6 rounded-2xl text-center group hover:bg-surface-warm transition-colors shadow-sm">
                    <div class="w-12 h-12 mx-auto bg-brand/5 text-brand rounded-full flex items-center justify-center text-xl mb-3 group-hover:bg-accent group-hover:text-white transition-colors">
                        <i class="fas fa-magic"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm">Cosmetic Derm</h4>
                </a>
                <a href="#medical" class="glass-panel p-6 rounded-2xl text-center group hover:bg-surface-warm transition-colors shadow-sm">
                    <div class="w-12 h-12 mx-auto bg-brand/5 text-brand rounded-full flex items-center justify-center text-xl mb-3 group-hover:bg-accent group-hover:text-white transition-colors">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm">Medical Derm</h4>
                </a>
                <a href="#anti-aging" class="glass-panel p-6 rounded-2xl text-center group hover:bg-surface-warm transition-colors shadow-sm">
                    <div class="w-12 h-12 mx-auto bg-brand/5 text-brand rounded-full flex items-center justify-center text-xl mb-3 group-hover:bg-accent group-hover:text-white transition-colors">
                        <i class="fas fa-hourglass-half"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm">Anti-Aging</h4>
                </a>
                <a href="#wellness" class="glass-panel p-6 rounded-2xl text-center group hover:bg-surface-warm transition-colors shadow-sm">
                    <div class="w-12 h-12 mx-auto bg-brand/5 text-brand rounded-full flex items-center justify-center text-xl mb-3 group-hover:bg-accent group-hover:text-white transition-colors">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm">IV Lounge</h4>
                </a>
            </div>
        </div>
    </section>

    <!-- Master Services Grid (Reusing the enhanced Bento layout) -->
    <div class="py-16 lg:py-24 bg-surface-warm">
        <?php include 'includes/services.php'; ?>
    </div>

    <!-- ============================================
         FEATURED TREATMENT DEEP DIVE
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl gs-reveal-img-group aspect-[4/5] lg:aspect-auto lg:h-[700px]">
                    <img src="https://refineskinandbody.com/images/Refine-hydra-facial.webp" alt="HydraFacial Treatment" class="w-full h-full object-cover gs-reveal-img" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent"></div>
                    <div class="absolute bottom-8 left-8 text-white">
                        <span class="px-4 py-1 bg-accent rounded-full text-[10px] uppercase tracking-widest font-bold mb-3 inline-block">Featured Signature</span>
                        <h3 class="font-display text-3xl">The HydraFacial MD®</h3>
                    </div>
                </div>
                
                <div class="gs-reveal-text">
                    <h2 class="text-section font-display text-brand-deeper mb-6">More Than A <i class="text-accent font-light">Facial.</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Experience the gold standard in skin rejuvenation. The HydraFacial is a medical-grade resurfacing treatment that clears out your pores, plus it hydrates your skin. 
                    </p>
                    
                    <div class="space-y-6 mb-10">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0">1</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-lg">Cleanse & Peel</h4>
                                <p class="text-sm text-brand-muted font-light mt-1">Uncover a new layer of skin with gentle exfoliation and relaxing resurfacing.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0">2</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-lg">Extract & Hydrate</h4>
                                <p class="text-sm text-brand-muted font-light mt-1">Remove debris from pores with painless suction. Nourish with intense moisturizers.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0">3</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-lg">Fuse & Protect</h4>
                                <p class="text-sm text-brand-muted font-light mt-1">Saturate the skin's surface with antioxidants and peptides to maximize your glow.</p>
                            </div>
                        </div>
                    </div>
                    
                    <a href="book-appointment" class="btn-magnetic btn-outline magnetic-target">
                        <span>Book a HydraFacial</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         THE REFINE DIFFERENCE
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 gs-reveal-text">
            <div class="text-center mb-16">
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Why Choose Us</span>
                <h2 class="text-section font-display">The Refine <i class="text-accent font-light">Difference.</i></h2>
            </div>
            
            <div class="grid md:grid-cols-3 gap-10 text-center">
                <div>
                    <i class="fas fa-microscope text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-2xl mb-4">Advanced Technology</h3>
                    <p class="font-body text-sm font-light text-white/70 leading-relaxed">We invest heavily in the latest FDA-approved aesthetic lasers and devices to ensure maximum efficacy and minimal downtime.</p>
                </div>
                <div>
                    <i class="fas fa-user-md text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-2xl mb-4">Board-Certified Experts</h3>
                    <p class="font-body text-sm font-light text-white/70 leading-relaxed">Our treatments are administered exclusively by highly trained medical professionals specializing in dermatology and aesthetic medicine.</p>
                </div>
                <div>
                    <i class="fas fa-spa text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-2xl mb-4">Bespoke Protocols</h3>
                    <p class="font-body text-sm font-light text-white/70 leading-relaxed">No two faces are the same. Every treatment plan is meticulously customized to your unique anatomical structure and personal goals.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         QUICK FAQS
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[800px] mx-auto px-6 gs-reveal-text">
            <h2 class="text-section font-display text-brand-deeper text-center mb-12">Common <i class="text-accent font-light">Questions</i></h2>
            
            <div class="space-y-4">
                <div class="glass-panel p-6 rounded-2xl bg-white border border-brand/5">
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Do consultations cost money?</h4>
                    <p class="text-brand-muted font-body text-sm font-light">Yes, we charge a nominal consultation fee to secure the specialist's time. However, this fee is fully redeemable against any treatment booked on the same day.</p>
                </div>
                <div class="glass-panel p-6 rounded-2xl bg-white border border-brand/5">
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Is there any downtime for injectables?</h4>
                    <p class="text-brand-muted font-body text-sm font-light">Most injectable treatments (like Botox and Fillers) have minimal to zero downtime. You may experience slight redness or minor bruising which typically subsides within 24-48 hours.</p>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <a href="faqs" class="text-brand font-semibold hover:text-accent transition-colors text-sm">View All FAQs <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
