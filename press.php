<?php
$pageCategory = "Media & PR";
$pageTitle = "Press & <i class='text-brand font-light'>Media.</i>";
$pageDescription = "Refine Skin & Body Clinic in the news. Explore our features, awards, and downloadable press kits.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         MEDIA MENTIONS (As Seen In)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <h4 class="text-center font-heading font-semibold text-brand/30 uppercase tracking-[0.2em] text-xs mb-8">As Featured In</h4>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-40 grayscale">
                <!-- Using text placeholders as logos for dummy purposes -->
                <h2 class="text-section font-display font-bold">VOGUE</h2>
                <h2 class="text-section font-display font-bold italic">Forbes</h2>
                <h2 class="text-section font-display font-bold tracking-widest">ELLE</h2>
                <h2 class="text-section font-display font-bold uppercase">Health & Beauty</h2>
                <h2 class="text-section font-display font-bold">GQ</h2>
            </div>
        </div>
    </section>

    <!-- ============================================
         FEATURES & PRESS KIT
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                
                <!-- Articles Grid -->
                <div class="gs-reveal-text">
                    <h3 class="font-display text-3xl text-brand-deeper mb-8">Recent Features</h3>
                    
                    <div class="space-y-6">
                        <!-- Article 1 -->
                        <div class="glass-panel p-8 rounded-3xl group hover:bg-white transition-colors cursor-pointer border border-brand/5 shadow-sm">
                            <span class="text-xs text-brand-muted font-bold tracking-widest uppercase mb-3 block">Vogue Africa • March 2025</span>
                            <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors">The Rise of Luxury Aesthetics in Kampala</h4>
                            <p class="text-sm text-brand-muted font-light mb-6 line-clamp-2">Dr. Chirag discusses the evolution of non-surgical enhancements in East Africa and how Refine is leading the charge in ethical aesthetics.</p>
                            <span class="text-xs font-semibold text-accent uppercase tracking-widest">Read Full Feature <i class="fas fa-arrow-right ml-1"></i></span>
                        </div>

                        <!-- Article 2 -->
                        <div class="glass-panel p-8 rounded-3xl group hover:bg-white transition-colors cursor-pointer border border-brand/5 shadow-sm">
                            <span class="text-xs text-brand-muted font-bold tracking-widest uppercase mb-3 block">Forbes Africa • November 2024</span>
                            <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors">Scaling Medical Excellence</h4>
                            <p class="text-sm text-brand-muted font-light mb-6 line-clamp-2">An inside look at the business of beauty and how Refine Skin & Body Clinic successfully expanded operations into Juba, South Sudan.</p>
                            <span class="text-xs font-semibold text-accent uppercase tracking-widest">Read Full Feature <i class="fas fa-arrow-right ml-1"></i></span>
                        </div>
                        
                        <!-- Article 3 -->
                        <div class="glass-panel p-8 rounded-3xl group hover:bg-white transition-colors cursor-pointer border border-brand/5 shadow-sm">
                            <span class="text-xs text-brand-muted font-bold tracking-widest uppercase mb-3 block">Health & Beauty Mag • Awards 2024</span>
                            <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-3 group-hover:text-accent transition-colors">Best Dermatology Clinic 2024</h4>
                            <p class="text-sm text-brand-muted font-light mb-6 line-clamp-2">Refine Skin & Body Clinic takes the top spot for patient care, clinical excellence, and innovation at the annual healthcare awards.</p>
                            <span class="text-xs font-semibold text-accent uppercase tracking-widest">Read Full Feature <i class="fas fa-arrow-right ml-1"></i></span>
                        </div>
                    </div>
                </div>

                <!-- Press Kit Download -->
                <div class="sticky top-32 glass-panel-dark p-12 rounded-[40px] text-center bg-brand-deeper text-white shadow-2xl relative overflow-hidden gs-reveal-fade">
                    <div class="absolute inset-0 bg-[url('https://refineskinandbody.com/images/refine_skin_and_body_clinic_welcome-to1.webp')] bg-cover bg-center opacity-10 mix-blend-overlay"></div>
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper via-transparent to-transparent"></div>
                    
                    <div class="relative z-10">
                        <i class="fas fa-bullhorn text-5xl text-accent mb-8 opacity-90"></i>
                        <h3 class="text-section font-display mb-4">Official Media Kit</h3>
                        <p class="text-sm font-light text-white/70 mb-10 leading-relaxed max-w-sm mx-auto">For press inquiries, brand guidelines, high-resolution logos, and founder biographies, please download our official press kit.</p>
                        
                        <div class="space-y-4 mb-10 text-left bg-white/5 p-6 rounded-2xl">
                            <div class="flex items-center justify-between border-b border-white/10 pb-3">
                                <span class="text-sm font-light">Brand Guidelines</span>
                                <span class="text-xs text-accent">PDF (2MB)</span>
                            </div>
                            <div class="flex items-center justify-between border-b border-white/10 pb-3">
                                <span class="text-sm font-light">High-Res Logos</span>
                                <span class="text-xs text-accent">ZIP (5MB)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-light">Founder Headshots</span>
                                <span class="text-xs text-accent">ZIP (12MB)</span>
                            </div>
                        </div>

                        <a href="#" class="btn-magnetic bg-white text-brand-deeper border-none w-full magnetic-target group">
                            <span>Download Full Kit (ZIP) <i class="fas fa-download ml-2 text-brand/50 group-hover:text-brand transition-colors"></i></span>
                        </a>
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
