<?php
$pageCategory = "Our Team";
$pageTitle = "Clinical <i class='text-brand font-light'>Excellence.</i>";
$pageDescription = "Meet the highly skilled nurses and therapists who ensure your safety, comfort, and outstanding results at every stage of your treatment.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            
            <div class="text-center mb-16 gs-reveal-text">
                <h2 class="text-section font-display text-brand-deeper">Nurses & Therapists</h2>
                <p class="text-brand-muted font-body text-sm mt-4 font-light max-w-2xl mx-auto">Our clinical team undergoes rigorous, continuous training in global aesthetic standards, ensuring you receive care that is both safe and exceptionally effective.</p>
            </div>

            <!-- Team Grid - info coming soon -->
            <div class="text-center py-12">
                <p class="text-brand-muted font-body text-sm font-light">Clinical team profiles coming soon.</p>
            </div>
            
            <!-- Join Team CTA -->
            <div class="mt-20 glass-panel p-12 rounded-[40px] bg-white border border-brand/5 text-center shadow-lg gs-reveal-fade">
                <i class="fas fa-stethoscope text-4xl text-accent mb-6"></i>
                <h3 class="font-display text-3xl text-brand-deeper mb-4">Join Our Clinical Team</h3>
                <p class="text-sm text-brand-muted font-light mb-8 max-w-md mx-auto">We are always seeking passionate medical professionals dedicated to aesthetic excellence.</p>
                <a href="careers" class="btn-magnetic btn-outline magnetic-target">
                    <span>View Open Positions</span>
                </a>
            </div>

        </div>
    </section>

</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
