<?php
$pageCategory = "Client Stories";
$pageTitle = "Voices of <i class='text-brand font-light'>Transformation.</i>";
$pageDescription = "Read the authentic experiences of those who have entrusted their aesthetic journey to Refine Skin & Body Clinic. Real people, remarkable results.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- Included Testimonial Swiper (From Homepage) -->
    <?php include 'includes/testimonials.php'; ?>

    <!-- ============================================
         CASE STUDIES (Detailed Stories)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <h2 class="text-section font-display text-brand-deeper mb-16 text-center gs-reveal-text">Transformational <i class="text-accent font-light">Journeys.</i></h2>
            
            <div class="space-y-16">
                <!-- Case Study 1 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center glass-panel p-8 md:p-12 rounded-[40px] border border-brand/5 shadow-xl gs-reveal-fade">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden bg-surface-cool">
                            <img src="/assets/imagesfromsite/bg-02.webp" alt="Before" class="w-full h-full object-cover filter grayscale-[0.5]" loading="lazy">
                            <div class="absolute bottom-4 left-4 bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-widest">Before</div>
                        </div>
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden bg-surface-cool">
                            <img src="/assets/imagesfromsite/refine_skin_and_body_clinic_dermatology01.webp" alt="After" class="w-full h-full object-cover" loading="lazy">
                            <div class="absolute bottom-4 left-4 bg-accent/80 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-widest">After</div>
                        </div>
                    </div>
                    <div class="lg:pl-8">
                        <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Acne Protocol</span>
                        <h3 class="font-display text-3xl text-brand-deeper mb-6">Restoring Confidence</h3>
                        <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-6 italic">
                            "I had struggled with cystic acne for over a decade. I had tried every over-the-counter product and multiple dermatologists without success. When I came to Refine, Dr. Chirag actually listened to me. He put me on a comprehensive protocol combining chemical peels, customized skincare, and laser therapy."
                        </p>
                        <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-8 italic">
                            "Six months later, my skin is completely clear. But more importantly, I don't feel the need to hide behind heavy makeup anymore. The team didn't just fix my skin; they gave me my self-esteem back."
                        </p>
                        <div class="flex items-center gap-4 border-t border-brand/10 pt-6">
                            <div class="w-12 h-12 rounded-full bg-brand/10 text-brand flex items-center justify-center font-display text-xl">SM</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Sarah M.</h4>
                                <p class="text-xs text-brand-muted font-light">Kampala Clinic Patient</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="grid lg:grid-cols-2 gap-12 items-center glass-panel p-8 md:p-12 rounded-[40px] border border-brand/5 shadow-xl gs-reveal-fade">
                    <div class="order-2 lg:order-1 lg:pr-8">
                        <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold">Anti-Aging Rejuvenation</span>
                        <h3 class="font-display text-3xl text-brand-deeper mb-6">Subtle & Undetectable</h3>
                        <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-6 italic">
                            "As an executive in my 50s, I wanted to look refreshed without looking 'done'. I was terrified of looking frozen or artificial. The approach at Refine is truly artistic."
                        </p>
                        <p class="text-brand-muted font-body text-sm font-light leading-relaxed mb-8 italic">
                            "Using a combination of Botox and very precise, strategic dermal fillers, they restored the volume I had lost. The result is so incredibly natural that my friends just keep telling me I look well-rested. This clinic sets the gold standard for aesthetic medicine in East Africa."
                        </p>
                        <div class="flex items-center gap-4 border-t border-brand/10 pt-6">
                            <div class="w-12 h-12 rounded-full bg-brand/10 text-brand flex items-center justify-center font-display text-xl">JD</div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand-deeper text-sm">Juliet D.</h4>
                                <p class="text-xs text-brand-muted font-light">Juba Clinic Patient</p>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 grid grid-cols-2 gap-4">
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden bg-surface-cool">
                            <img src="/assets/imagesfromsite/breadcrumbsgall.webp" alt="Before" class="w-full h-full object-cover filter grayscale-[0.5]" loading="lazy">
                            <div class="absolute bottom-4 left-4 bg-black/50 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-widest">Before</div>
                        </div>
                        <div class="relative aspect-[3/4] rounded-2xl overflow-hidden bg-surface-cool">
                            <img src="/assets/imagesfromsite/about-8.webp" alt="After" class="w-full h-full object-cover" loading="lazy">
                            <div class="absolute bottom-4 left-4 bg-accent/80 backdrop-blur-sm text-white px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-widest">After</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         VIDEO TESTIMONIALS
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm relative">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <h2 class="text-section font-display text-brand-deeper mb-16 text-center gs-reveal-text">Watch <i class="text-accent font-light">Their Stories</i></h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 gs-stagger-bento">
                <!-- Video 1 -->
                <div class="relative rounded-3xl overflow-hidden aspect-video bg-surface-cool group bento-item shadow-lg cursor-pointer">
                    <img src="/assets/imagesfromsite/services/thumbnail.webp" class="absolute inset-0 w-full h-full object-cover filter brightness-75 group-hover:brightness-50 transition-all duration-500">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-xl border border-white/30 transform group-hover:scale-110 transition-transform">
                            <i class="fas fa-play ml-1"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full p-6 bg-gradient-to-t from-black/90 to-transparent">
                        <p class="text-white font-heading font-semibold text-sm">Sarah's HydraFacial Journey</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="relative rounded-3xl overflow-hidden aspect-video bg-surface-cool group bento-item shadow-lg cursor-pointer">
                    <img src="/assets/imagesfromsite/about-8.webp" class="absolute inset-0 w-full h-full object-cover filter brightness-75 group-hover:brightness-50 transition-all duration-500">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-xl border border-white/30 transform group-hover:scale-110 transition-transform">
                            <i class="fas fa-play ml-1"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full p-6 bg-gradient-to-t from-black/90 to-transparent">
                        <p class="text-white font-heading font-semibold text-sm">John on Acne Laser Treatment</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="relative rounded-3xl overflow-hidden aspect-video bg-surface-cool group bento-item shadow-lg cursor-pointer">
                    <img src="/assets/imagesfromsite/bg-02.webp" class="absolute inset-0 w-full h-full object-cover filter brightness-75 group-hover:brightness-50 transition-all duration-500">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center text-white text-xl border border-white/30 transform group-hover:scale-110 transition-transform">
                            <i class="fas fa-play ml-1"></i>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full p-6 bg-gradient-to-t from-black/90 to-transparent">
                        <p class="text-white font-heading font-semibold text-sm">IV Therapy Recovery</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         GOOGLE REVIEWS & LEAVE REVIEW CTA
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 gs-reveal-text">
            
            <div class="text-center mb-16">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" alt="Google" class="w-12 h-12 mx-auto mb-6">
                <h2 class="text-section font-display text-brand-deeper mb-4">4.9 Stars on Google</h2>
                <p class="text-brand-muted mb-6">Based on over 150 authentic patient reviews.</p>
                <a href="https://g.page/refineskinandbody?share" target="_blank" class="text-accent font-semibold text-sm hover:text-brand transition-colors">View All Reviews <i class="fas fa-arrow-right ml-1"></i></a>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6 text-left mb-24">
                <!-- Review Card -->
                <div class="glass-panel p-8 rounded-3xl shadow-sm border border-brand/5">
                    <div class="flex text-accent text-xs mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="font-body text-brand-muted text-sm leading-relaxed mb-6">"Absolutely the best clinic in Kampala. The attention to detail and care Dr. Chirag provides is unmatched. Highly recommend the Botox and Hydrafacial."</p>
                    <p class="font-heading font-semibold text-brand-deeper text-sm">- Rachel M.</p>
                </div>
                <!-- Review Card -->
                <div class="glass-panel p-8 rounded-3xl shadow-sm border border-brand/5">
                    <div class="flex text-accent text-xs mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="font-body text-brand-muted text-sm leading-relaxed mb-6">"My skin has never looked better. The acne scarring treatment was a success. Very professional staff and a beautiful clinic interior."</p>
                    <p class="font-heading font-semibold text-brand-deeper text-sm">- James T.</p>
                </div>
                <!-- Review Card -->
                <div class="glass-panel p-8 rounded-3xl shadow-sm border border-brand/5">
                    <div class="flex text-accent text-xs mb-4"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                    <p class="font-body text-brand-muted text-sm leading-relaxed mb-6">"I fly in from Kigali specifically for my appointments here. The IV therapy lounge is stunning and the aesthetic results are always natural."</p>
                    <p class="font-heading font-semibold text-brand-deeper text-sm">- Amina K.</p>
                </div>
            </div>

            <!-- LEAVE A REVIEW CTA -->
            <div class="glass-panel-dark p-12 lg:p-16 rounded-[40px] text-center bg-brand-deeper text-white shadow-2xl relative overflow-hidden gs-reveal-fade">
                <div class="absolute inset-0 bg-accent/10 pointer-events-none"></div>
                <div class="relative z-10">
                    <i class="fas fa-quote-left text-4xl text-accent mb-6 opacity-80"></i>
                    <h3 class="text-section font-display mb-4">Share Your Experience</h3>
                    <p class="text-sm font-light text-white/70 mb-8 leading-relaxed max-w-lg mx-auto">Your journey inspires others. If you've recently visited us, we would be incredibly grateful if you shared your experience.</p>
                    <a href="https://g.page/refineskinandbody/review?rc" target="_blank" class="btn-magnetic bg-white text-brand-deeper border-none px-12 magnetic-target">
                        <span>Leave a Google Review</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
