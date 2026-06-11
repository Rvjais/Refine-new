<?php
$pageCategory = "The Perfect Gift";
$pageTitle = "Gift <i class='text-brand font-light'>Vouchers.</i>";
$pageDescription = "Give the gift of radiant skin and ultimate relaxation. Our luxury gift vouchers are the perfect present for any special occasion.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         VOUCHER PURCHASE FORM
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <!-- Voucher Preview -->
                <div class="relative w-full aspect-[1.6/1] rounded-[40px] overflow-hidden shadow-2xl gs-reveal-img-group sticky top-32">
                    <img src="https://refineskinandbody.com/images/refine_skin_and_body_clinic_welcome-to1.webp" alt="Luxury Voucher" class="absolute inset-0 w-full h-full object-cover gs-reveal-img filter grayscale brightness-50" loading="lazy">
                    <div class="absolute inset-0 border-[8px] border-accent/20 rounded-[40px] pointer-events-none"></div>
                    <div class="absolute inset-0 flex flex-col justify-between p-8 md:p-12 z-10">
                        <div class="flex justify-between items-start">
                            <img src="https://refineskinandbody.com/images/refine-logo.webp" alt="Refine Logo" class="h-10 invert brightness-0 filter-none">
                            <span class="text-accent font-heading font-semibold uppercase tracking-widest text-xs">Gift Certificate</span>
                        </div>
                        <div>
                            <p class="text-white/60 font-body text-xs mb-1">Presented to</p>
                            <h3 class="text-section font-display text-white">[Recipient Name]</h3>
                        </div>
                    </div>
                </div>

                <!-- Form -->
                <div class="glass-panel p-8 md:p-12 rounded-[40px] gs-reveal-fade bg-white border border-brand/5 shadow-xl">
                    <h3 class="font-display text-3xl text-brand-deeper mb-8">Customize Your Gift</h3>
                    
                    <form action="#" method="POST" class="space-y-8">
                        
                        <div>
                            <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-3">Voucher Value (UGX)</label>
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                                <label class="cursor-pointer">
                                    <input type="radio" name="value" value="100000" class="peer sr-only" checked>
                                    <div class="border border-brand/20 rounded-xl p-4 text-center text-sm font-semibold text-brand-muted peer-checked:bg-brand peer-checked:text-white peer-checked:border-brand transition-colors shadow-sm">100K</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="value" value="250000" class="peer sr-only">
                                    <div class="border border-brand/20 rounded-xl p-4 text-center text-sm font-semibold text-brand-muted peer-checked:bg-brand peer-checked:text-white peer-checked:border-brand transition-colors shadow-sm">250K</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="value" value="500000" class="peer sr-only">
                                    <div class="border border-brand/20 rounded-xl p-4 text-center text-sm font-semibold text-brand-muted peer-checked:bg-brand peer-checked:text-white peer-checked:border-brand transition-colors shadow-sm">500K</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="value" value="custom" class="peer sr-only">
                                    <div class="border border-brand/20 rounded-xl p-4 text-center text-sm font-semibold text-brand-muted peer-checked:bg-brand peer-checked:text-white peer-checked:border-brand transition-colors shadow-sm">Custom</div>
                                </label>
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Recipient's Name</label>
                                <input type="text" class="w-full bg-surface-warm border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent" required>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Recipient's Email</label>
                                <input type="email" class="w-full bg-surface-warm border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent" placeholder="(Optional)">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Personal Message (Optional)</label>
                            <textarea rows="3" class="w-full bg-surface-warm border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent"></textarea>
                        </div>

                        <div class="border-t border-brand/10 pt-8">
                            <button type="submit" class="btn-magnetic w-full magnetic-target">
                                <span>Proceed to Payment</span>
                            </button>
                        </div>
                        
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================
         THE UNBOXING EXPERIENCE
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 gs-reveal-text lg:pr-12">
                    <h2 class="text-section font-display text-brand-deeper mb-6">The <i class="text-accent font-light">Unboxing</i> Experience.</h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-6">
                        For physical vouchers, the experience begins the moment they receive it. Our gift certificates are presented in a luxurious, matte black envelope sealed with the Refine crest in gold wax.
                    </p>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-8">
                        Inside, nestled in premium cardstock, lies the key to their aesthetic journey. Physical vouchers can be collected in-clinic or delivered via premium courier service within Kampala and Juba.
                    </p>
                    <ul class="space-y-3 font-body text-brand-deeper text-sm font-semibold">
                        <li class="flex items-center gap-3"><i class="fas fa-check text-accent"></i> E-vouchers delivered instantly</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-accent"></i> Physical vouchers available for collection</li>
                        <li class="flex items-center gap-3"><i class="fas fa-check text-accent"></i> Valid for 12 months from purchase</li>
                    </ul>
                </div>
                <div class="order-1 lg:order-2 relative aspect-[4/3] rounded-[40px] overflow-hidden shadow-xl gs-reveal-img-group">
                    <img src="/assets/imagesfromsite/bg-02.webp" alt="Luxury Unboxing" class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.3]" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         CORPORATE GIFTING
         ============================================ -->
    <section class="py-16 lg:py-24 bg-brand-deeper text-white relative">
        <div class="max-w-[1200px] mx-auto px-6 lg:px-10 text-center gs-reveal-fade">
            <i class="fas fa-building text-4xl text-accent mb-6 opacity-80"></i>
            <h3 class="text-section font-display mb-6">Corporate <i class="text-accent font-light">Gifting</i></h3>
            <p class="text-sm font-light text-white/70 mb-10 max-w-2xl mx-auto leading-relaxed">
                Reward your top performers, executives, or valued clients with the ultimate gift of self-care. We offer specialized corporate packages and bulk voucher discounts for businesses looking to provide an unforgettable wellness experience.
            </p>
            <a href="mailto:info@refineskinandbody.com?subject=Corporate Gifting Inquiry" class="btn-magnetic bg-white text-brand-deeper border-none magnetic-target">
                <span>Inquire About Corporate Rates</span>
            </a>
        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
