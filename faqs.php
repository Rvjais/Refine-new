<?php
$pageCategory = "Knowledge Base";
$pageTitle = "Frequently Asked <i class='text-brand font-light'>Questions.</i>";
$pageDescription = "Find answers to the most common questions about our treatments, booking processes, and clinic policies.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         CATEGORIZED FAQ ACCORDION
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm">
        <div class="max-w-[1200px] mx-auto px-6 lg:px-10">
            
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                
                <!-- Category Sidebar -->
                <div class="lg:col-span-4 sticky top-32">
                    <h3 class="font-display text-2xl text-brand-deeper mb-6">Browse by <i class="text-accent font-light">Category</i></h3>
                    <ul class="space-y-2">
                        <li><a href="#cosmetic" class="block p-4 rounded-xl bg-white border border-brand/5 text-brand-deeper font-semibold hover:bg-brand hover:text-white transition-colors">Cosmetic & Aesthetics</a></li>
                        <li><a href="#medical" class="block p-4 rounded-xl bg-white border border-brand/5 text-brand-deeper font-semibold hover:bg-brand hover:text-white transition-colors">Medical Dermatology</a></li>
                        <li><a href="#booking" class="block p-4 rounded-xl bg-white border border-brand/5 text-brand-deeper font-semibold hover:bg-brand hover:text-white transition-colors">Booking & Policies</a></li>
                    </ul>
                </div>

                <!-- Accordions -->
                <div class="lg:col-span-8 space-y-12">
                    
                    <!-- Cosmetic Category -->
                    <div id="cosmetic">
                        <h4 class="font-heading font-semibold text-xl text-accent mb-6 uppercase tracking-widest">Cosmetic & Aesthetics</h4>
                        <div class="space-y-4">
                            <!-- FAQ Item -->
                            <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                                <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                                    <h4 class="font-heading font-semibold text-brand-deeper text-lg">What should I do before my laser hair removal appointment?</h4>
                                    <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                                </div>
                                <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                                    <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Please shave the area to be treated 24 hours prior to your appointment. Avoid sun exposure, tanning beds, and plucking or waxing for at least 4 weeks before your session.</p>
                                </div>
                            </div>
                            <!-- FAQ Item -->
                            <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                                <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                                    <h4 class="font-heading font-semibold text-brand-deeper text-lg">How long does Botox take to show results?</h4>
                                    <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                                </div>
                                <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                                    <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">You may begin to notice results within 3 to 5 days, but full results typically take up to 14 days to appear. The effects generally last between 3 to 4 months.</p>
                                </div>
                            </div>
                            <!-- FAQ Item -->
                            <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                                <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                                    <h4 class="font-heading font-semibold text-brand-deeper text-lg">Are your treatments safe for all skin types?</h4>
                                    <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                                </div>
                                <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                                    <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes. We pride ourselves on utilizing advanced technologies and bespoke protocols that are safe and effective for all skin tones and types, including darker skin profiles prevalent in East Africa.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medical Category -->
                    <div id="medical">
                        <h4 class="font-heading font-semibold text-xl text-accent mb-6 uppercase tracking-widest">Medical Dermatology</h4>
                        <div class="space-y-4">
                            <!-- FAQ Item -->
                            <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                                <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                                    <h4 class="font-heading font-semibold text-brand-deeper text-lg">Do I need a referral to see Dr. Chirag?</h4>
                                    <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                                </div>
                                <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                                    <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">No referral is required. You can book a direct consultation for any medical skin concern, including acne, rosacea, or suspicious moles.</p>
                                </div>
                            </div>
                            <!-- FAQ Item -->
                            <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                                <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                                    <h4 class="font-heading font-semibold text-brand-deeper text-lg">Do you treat severe acne scarring?</h4>
                                    <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                                </div>
                                <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                                    <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes, we offer a multi-modal approach to acne scarring including CO2 lasers, RF microneedling, subcision, and chemical peels depending on the scar type.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Booking Category -->
                    <div id="booking">
                        <h4 class="font-heading font-semibold text-xl text-accent mb-6 uppercase tracking-widest">Booking & Policies</h4>
                        <div class="space-y-4">
                            <!-- FAQ Item -->
                            <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                                <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                                    <h4 class="font-heading font-semibold text-brand-deeper text-lg">What is your cancellation policy?</h4>
                                    <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                                </div>
                                <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                                    <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">We require at least 24 hours notice for any cancellations or rescheduling. Late cancellations may incur a fee as it prevents other clients from booking that time slot.</p>
                                </div>
                            </div>
                            <!-- FAQ Item -->
                            <div class="glass-panel rounded-2xl overflow-hidden faq-item cursor-pointer group">
                                <div class="p-6 flex justify-between items-center bg-white/50 group-hover:bg-white transition-colors">
                                    <h4 class="font-heading font-semibold text-brand-deeper text-lg">Do you offer payment plans?</h4>
                                    <i class="fas fa-plus text-brand transition-transform duration-300 transform group-[.active]:rotate-45"></i>
                                </div>
                                <div class="faq-content h-0 overflow-hidden px-6 pb-0 group-[.active]:pb-6 transition-all duration-300">
                                    <p class="text-brand-muted font-body text-sm leading-relaxed mt-2 border-t border-brand/5 pt-4">Yes, we offer flexible in-house financing for larger treatment packages. Please inquire during your consultation.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         STILL NEED HELP CTA
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white border-t border-brand/5">
        <div class="max-w-[1000px] mx-auto px-6 text-center">
            <div class="glass-panel-dark p-12 rounded-[40px] bg-brand-deeper text-white shadow-2xl">
                <i class="fas fa-headset text-4xl text-accent mb-6"></i>
                <h3 class="font-display text-3xl mb-4">Still have questions?</h3>
                <p class="text-sm font-light text-white/70 mb-8 max-w-md mx-auto leading-relaxed">Our concierge team is standing by to provide you with all the information you need before your visit.</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="contact" class="btn-magnetic bg-white text-brand-deeper border-none magnetic-target">
                        <span>Send an Inquiry</span>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=256749574546" class="btn-magnetic bg-[#25D366] text-white border-none magnetic-target">
                        <span><i class="fab fa-whatsapp mr-2"></i> WhatsApp Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Simple Vanilla JS for Accordion -->
    <script>
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                
                // Close all
                document.querySelectorAll('.faq-item').forEach(el => {
                    el.classList.remove('active');
                    el.querySelector('.faq-content').style.height = '0px';
                });

                // Open clicked if it wasn't active
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
