<!-- ============================================
     PAGE HERO COMPONENT
     ============================================ -->
<section class="relative pt-10 lg:pt-16 pb-8 bg-surface-warm overflow-hidden">
    <!-- Abstract background elements -->
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-brand/5 rounded-full blur-[80px] -translate-y-1/2 translate-x-1/2 transform translateZ(0)"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-accent/5 rounded-full blur-[60px] translate-y-1/2 -translate-x-1/2 transform translateZ(0)"></div>
    
    <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
        <div class="max-w-3xl gs-reveal-text">
            <?php if (isset($pageCategory)): ?>
                <span class="inline-block text-accent font-body text-xs tracking-[0.25em] uppercase mb-4 font-semibold"><?php echo htmlspecialchars($pageCategory); ?></span>
            <?php endif; ?>
            
            <h1 class="text-section font-display text-brand-deeper leading-tight mb-6">
                <?php echo isset($pageTitle) ? $pageTitle : 'Refine Skin & Body Clinic'; ?>
            </h1>
            
            <?php if (isset($pageDescription)): ?>
                <p class="text-brand-muted font-body text-lg lg:text-xl font-light leading-relaxed">
                    <?php echo $pageDescription; ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>
