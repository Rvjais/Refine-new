<?php
$pageCategory = "Blog & Content";
$pageTitle = "Video <i class='text-brand font-light'>Library.</i>";
$pageDescription = "Watch procedure explainers, patient testimonials, doctor interviews, and more — your visual guide to aesthetic and wellness treatments.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Introduction -->
    <section class="py-16 lg:py-24 bg-white border-b border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center gs-reveal-fade">
            <h2 class="text-section font-display text-brand-deeper mb-6">See It. Learn It. <i class="text-accent font-light">Decide Confidently.</i></h2>
            <p class="text-brand-muted font-body text-lg font-light leading-relaxed">
                Our video library brings our treatments to life. From short procedure animations and doctor explainers to in-depth patient testimonials and live treatment walkthroughs — these videos help you understand exactly what to expect before you book.
            </p>
        </div>
    </section>

    <!-- Featured Video Grid -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="mb-12 gs-reveal-text">
                <h3 class="font-display text-3xl text-brand-deeper">Featured <i class="text-accent font-light">Videos</i></h3>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 gs-stagger-bento">
                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/bg-02.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-white/90 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-play text-brand ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <span class="inline-block text-accent text-xs font-semibold tracking-wider uppercase mb-2">Procedure Explainer</span>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">How a Tummy Tuck Works</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">A 2-minute animation showing the full tummy tuck procedure, from incision to closure.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/services/thumbnail.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-white/90 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-play text-brand ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <span class="inline-block text-accent text-xs font-semibold tracking-wider uppercase mb-2">Doctor Explainer</span>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Dr. on Bio-Identical Hormones</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Our medical director explains the science and safety of BHRT in plain language.</p>
                </a>

                <a href="#" class="group block glass-panel p-6 rounded-3xl bg-white border border-brand/5 hover:border-accent/30 shadow-sm transition-all bento-item">
                    <div class="aspect-video rounded-2xl overflow-hidden mb-4 bg-surface-cool relative">
                        <img src="/assets/imagesfromsite/services/thumbnail.webp" class="w-full h-full object-cover filter grayscale-[0.2] group-hover:grayscale-0 transition-all duration-500" loading="lazy">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-white/90 flex items-center justify-center group-hover:scale-110 transition-transform">
                                <i class="fas fa-play text-brand ml-1"></i>
                            </div>
                        </div>
                    </div>
                    <span class="inline-block text-accent text-xs font-semibold tracking-wider uppercase mb-2">Testimonial</span>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2 group-hover:text-accent transition-colors">Patient Story: My Hair Transplant</h4>
                    <p class="text-sm text-brand-muted font-light line-clamp-2">Watch David describe his hair transplant journey, from consult to 12-month results.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Block -->
  <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
    <div class="max-w-[800px] mx-auto px-6">
      <h3 class="font-display text-3xl text-brand-deeper mb-8 text-center">Frequently Asked <i class="text-accent font-light">Questions</i></h3>
      <div class="space-y-4">
        <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
          <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
            <h4 class="font-heading font-semibold text-brand-deeper text-lg">How often are new videos added?</h4>
            <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
          </div>
          <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
            <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">We add 2–4 new videos every month — covering new treatments, live procedures, patient stories, and educational content.</p>
          </div>
        </div>
        <div class="glass-panel rounded-xl md:rounded-2xl overflow-hidden faq-item cursor-pointer group border border-brand/5">
          <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
            <h4 class="font-heading font-semibold text-brand-deeper text-lg">Can I request a video topic?</h4>
            <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
          </div>
          <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
            <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Absolutely. We prioritize topics our community is curious about. Send us your suggestions and we'll add them to our content calendar.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                document.querySelectorAll('.faq-item').forEach(el => {
                    el.classList.remove('active');
                    el.querySelector('.faq-content').style.height = '0px';
                });
                if (!isActive) {
                    item.classList.add('active');
                    const content = item.querySelector('.faq-content');
                    content.style.height = content.scrollHeight + 'px';
                }
            });
        });
    </script>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
