<?php
$pageCategory = "Exclusive Perks";
$pageTitle = "Refine <i class='text-brand font-light'>Membership.</i>";
$pageDescription = "Elevate your aesthetic journey. Join our exclusive loyalty program to unlock special rates, priority bookings, and complimentary treatments.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         HOW IT WORKS
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <h3 class="font-display text-3xl text-brand-deeper text-center mb-12 gs-reveal-text">How To <i class="text-accent font-light">Join</i></h3>
            
            <div class="grid md:grid-cols-3 gap-8 text-center gs-stagger-bento">
                <div class="glass-panel p-8 rounded-3xl border border-brand/5">
                    <div class="w-12 h-12 mx-auto bg-brand/5 text-brand rounded-full flex items-center justify-center font-display text-xl mb-4">1</div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Enroll</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed">Sign up for the Silver tier for free online or at the reception desk during your next visit.</p>
                </div>
                <div class="glass-panel p-8 rounded-3xl border border-brand/5">
                    <div class="w-12 h-12 mx-auto bg-brand/5 text-brand rounded-full flex items-center justify-center font-display text-xl mb-4">2</div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Invest in Yourself</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed">Every UGX you spend on treatments or skincare contributes to your annual tier status.</p>
                </div>
                <div class="glass-panel p-8 rounded-3xl border border-brand/5">
                    <div class="w-12 h-12 mx-auto bg-accent/10 text-accent rounded-full flex items-center justify-center font-display text-xl mb-4">3</div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">Unlock Luxury</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed">As you reach Gold and Platinum thresholds, exclusive discounts and complimentary treatments are automatically applied.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         TIERS
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            
            <div class="grid md:grid-cols-3 gap-8 mb-24 gs-stagger-bento">
                
                <!-- Tier 1 -->
                <div class="glass-panel p-8 md:p-10 rounded-3xl text-center border-t-4 border-t-brand/30 hover:border-t-brand transition-colors flex flex-col h-full bento-item">
                    <h3 class="font-display text-2xl text-brand-deeper mb-2">Silver Tier</h3>
                    <p class="text-xs text-brand-muted font-light mb-8">Entry-level benefits</p>
                    <div class="font-display text-4xl text-accent mb-8">Free<span class="text-sm text-brand-muted font-body block mt-2">to join</span></div>
                    <ul class="text-sm font-body text-brand-deeper space-y-4 mb-10 flex-grow text-left">
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Earn points on every treatment</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Birthday gift voucher (50K UGX)</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Access to monthly newsletter</li>
                    </ul>
                    <button class="btn-magnetic btn-outline w-full text-xs">Join Silver</button>
                </div>

                <!-- Tier 2 -->
                <div class="glass-panel-dark p-8 md:p-10 rounded-3xl text-center border-t-4 border-t-accent transform md:-translate-y-4 shadow-2xl flex flex-col h-full bento-item">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-brand-deeper text-[10px] font-bold uppercase tracking-widest px-4 py-1 rounded-full shadow-lg">Most Popular</div>
                    <h3 class="font-display text-2xl text-white mb-2">Gold Tier</h3>
                    <p class="text-xs text-white/50 font-light mb-8">For the committed client</p>
                    <div class="font-display text-4xl text-accent mb-8">1M UGX<span class="text-sm text-white/50 font-body block mt-2">annual spend to unlock</span></div>
                    <ul class="text-sm font-body text-white space-y-4 mb-10 flex-grow text-left">
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> 10% off all skincare products</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Priority booking system</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> 1 Complimentary IV therapy / year</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Invites to VIP educational events</li>
                    </ul>
                    <button class="btn-magnetic w-full text-xs bg-white text-brand-deeper">Learn About Gold</button>
                </div>

                <!-- Tier 3 -->
                <div class="glass-panel p-8 md:p-10 rounded-3xl text-center border-t-4 border-t-brand/30 hover:border-t-brand transition-colors flex flex-col h-full bento-item">
                    <h3 class="font-display text-2xl text-brand-deeper mb-2">Platinum Tier</h3>
                    <p class="text-xs text-brand-muted font-light mb-8">The ultimate luxury experience</p>
                    <div class="font-display text-4xl text-accent mb-8">3M UGX<span class="text-sm text-brand-muted font-body block mt-2">annual spend to unlock</span></div>
                    <ul class="text-sm font-body text-brand-deeper space-y-4 mb-10 flex-grow text-left">
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> 15% off all skincare products</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Dedicated patient concierge</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> 2 Complimentary Hydrafacials / year</li>
                        <li class="flex items-start gap-3"><i class="fas fa-check text-accent mt-1"></i> Waived consultation fees forever</li>
                    </ul>
                    <button class="btn-magnetic btn-outline w-full text-xs">View Platinum Details</button>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         VIP TESTIMONIAL
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <div class="bg-white p-12 rounded-[40px] shadow-sm border border-brand/5 relative overflow-hidden">
                <i class="fas fa-crown text-6xl text-brand/5 absolute -top-2 -left-2 rotate-[-15deg]"></i>
                <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8 italic relative z-10">
                    "Reaching the Platinum tier completely changed my skincare routine. The complimentary Hydrafacials and the hefty discount on my ZO Skin Health products practically pay for the membership itself. Plus, having a dedicated concierge makes booking last-minute IV drips a breeze."
                </p>
                <div class="relative z-10">
                    <h4 class="font-heading font-semibold text-brand-deeper text-sm">Grace K.</h4>
                    <p class="text-xs text-accent font-bold uppercase tracking-widest mt-1">Platinum Member since 2023</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
