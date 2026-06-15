<?php
$pageCategory = "Body Contouring";
$pageTitle = "Body Contouring in Kampala";
$pageDescription = "Body Contouring in Kampala";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <?php include 'includes/page-hero.php'; ?>

    <!-- Body Contouring -->
    <section class="py-16 lg:py-24 bg-[#faf9f6] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/4 pointer-events-none"></div>
        
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10 relative z-10">
            <div class="grid xl:grid-cols-2 gap-16 xl:gap-24 items-center">
                <div class="gs-reveal-text">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 text-accent font-body text-xs tracking-[0.2em] uppercase mb-6 font-semibold border border-accent/20">
                        <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                        Body Sculpting & Contouring
                    </div>
                    <h2 class="text-section font-display text-brand-deeper mb-6 leading-[1.1]">What is <br/><i class="text-accent font-light">Body Contouring?</i></h2>
                    <p class="text-brand-muted font-body text-lg font-light leading-relaxed mb-10 max-w-xl">
                        Comprehensive body contouring solutions at Refine Skin and Body Clinic — from non-surgical fat reduction to surgical sculpting for a more defined physique.
                    </p>
                    
                    <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl aspect-[4/3] lg:aspect-auto lg:h-[450px] gs-reveal-img-group group border border-brand/5">
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-deeper/80 via-transparent to-transparent z-10 opacity-60 group-hover:opacity-40 transition-opacity duration-700 pointer-events-none"></div>
                        <img src="/assets/imagesfromsite/Em body sculpt-09.webp" alt="Body Sculpting & Contouring at Refine Skin and Body Clinic." class="w-full h-full object-cover gs-reveal-img filter grayscale-[0.2] group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000" loading="lazy">
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute left-8 top-10 bottom-10 w-px bg-gradient-to-b from-brand/5 via-accent/30 to-brand/5 hidden sm:block"></div>
                    <div class="space-y-8 relative z-10">
                        <div class="flex gap-6 items-start gs-reveal-text">
    <div class="w-12 h-12 rounded-2xl bg-accent/10 border border-accent/20 flex items-center justify-center flex-shrink-0 text-accent text-lg">
        <i class="fa-solid fa-weight-scale"></i>
    </div>
    <div>
        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-1.5">Non-Surgical Options</h4>
        <p class="text-brand-muted font-body text-sm font-light leading-relaxed">Cryolipolysis, EM Body Sculpt, and Vaser Liposuction for targeted fat reduction.</p>
    </div>
</div><div class="flex gap-6 items-start gs-reveal-text">
    <div class="w-12 h-12 rounded-2xl bg-accent/10 border border-accent/20 flex items-center justify-center flex-shrink-0 text-accent text-lg">
        <i class="fa-solid fa-user-md"></i>
    </div>
    <div>
        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-1.5">Expert Surgical Team</h4>
        <p class="text-brand-muted font-body text-sm font-light leading-relaxed">Board-certified surgeons for liposuction, tummy tucks, and body lifts.</p>
    </div>
</div><div class="flex gap-6 items-start gs-reveal-text">
    <div class="w-12 h-12 rounded-2xl bg-accent/10 border border-accent/20 flex items-center justify-center flex-shrink-0 text-accent text-lg">
        <i class="fa-solid fa-chart-line"></i>
    </div>
    <div>
        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-1.5">Customised Plans</h4>
        <p class="text-brand-muted font-body text-sm font-light leading-relaxed">Personalised treatment plans tailored to your body type and aesthetic goals.</p>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <?php include 'includes/appointment-form.php'; ?>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
