<?php
$pageCategory = "Get In Touch";
$pageTitle = "Contact <i class='text-brand font-light'>Us.</i>";
$pageDescription = "We are here to assist you. Reach out to book a consultation or inquire about our premium treatments across our Kampala and Juba locations.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         CONTACT INFO & FORM
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
                
                <!-- Contact Details -->
                <div class="gs-reveal-text">
                    <h2 class="text-section font-display text-brand-deeper mb-8">Visit <i class="text-accent font-light">Our Clinics.</i></h2>
                    
                    <div class="space-y-10">
                        <!-- HQ -->
                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 text-xl">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand text-lg mb-2">Kampala HQ (Forest Mall)</h4>
                                <p class="text-brand-muted text-sm font-light mb-4">Ground Floor, Unit GF4, Block B<br>Lugogo Bypass, Kampala, UG</p>
                                <div class="flex flex-col gap-2">
                                    <a href="tel:+256758232889" class="text-accent hover:text-brand transition-colors text-sm font-semibold"><i class="fas fa-phone mr-2"></i> +256 758 232 889</a>
                                    <a href="https://api.whatsapp.com/send?phone=256749574546" class="text-accent hover:text-brand transition-colors text-sm font-semibold"><i class="fab fa-whatsapp mr-2"></i> +256 749 574 546</a>
                                </div>
                            </div>
                        </div>

                        <!-- Juba -->
                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-full bg-brand/5 flex items-center justify-center text-brand flex-shrink-0 text-xl">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand text-lg mb-2">Juba Branch</h4>
                                <p class="text-brand-muted text-sm font-light mb-4">1st Floor, Sadeco Building<br>Airport Road, Juba, SS</p>
                                <div class="flex flex-col gap-2">
                                    <a href="tel:+211922687111" class="text-accent hover:text-brand transition-colors text-sm font-semibold"><i class="fas fa-phone mr-2"></i> +211 922 687 111</a>
                                </div>
                            </div>
                        </div>

                        <!-- Email & Hours -->
                        <div class="grid grid-cols-2 gap-8 pt-8 border-t border-brand/10">
                            <div>
                                <h4 class="font-heading font-semibold text-brand text-sm mb-2 uppercase tracking-widest">Email Us</h4>
                                <a href="mailto:info@refineskinandbody.com" class="text-brand-muted hover:text-accent transition-colors text-sm font-light">info@refineskinandbody.com</a>
                            </div>
                            <div>
                                <h4 class="font-heading font-semibold text-brand text-sm mb-2 uppercase tracking-widest">HQ Hours</h4>
                                <p class="text-brand-muted text-sm font-light">Mon-Fri: 9am - 6pm<br>Sat: 9am - 5pm</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="glass-panel p-8 md:p-12 rounded-3xl gs-reveal-fade bg-surface-warm border border-brand/5 shadow-xl">
                    <h3 class="font-display text-3xl text-brand-deeper mb-8">Send a Message</h3>
                    
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">First Name</label>
                                <input type="text" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="Jane" required>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Last Name</label>
                                <input type="text" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="Doe" required>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Email Address</label>
                            <input type="email" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="jane@example.com" required>
                        </div>
                        
                        <div>
                            <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Phone Number</label>
                            <input type="tel" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="+256 ...">
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Message</label>
                            <textarea rows="4" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" placeholder="How can we help you?" required></textarea>
                        </div>

                        <button type="submit" class="btn-magnetic w-full magnetic-target mt-4">
                            <span>Submit Inquiry</span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
    
    <!-- ============================================
         ARRIVAL GUIDE & EMERGENCY
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm border-t border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <div class="grid md:grid-cols-2 gap-8 gs-stagger-bento">
                
                <!-- Arrival & Parking -->
                <div class="glass-panel p-10 rounded-[32px] bg-white border border-brand/5 flex items-start gap-6">
                    <div class="w-12 h-12 bg-brand/5 rounded-full flex items-center justify-center text-brand text-xl flex-shrink-0">
                        <i class="fas fa-car"></i>
                    </div>
                    <div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-3">Arrival & Parking</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-4">
                            <strong>Kampala HQ:</strong> Secure underground parking is available at Forest Mall. Present your parking ticket at reception for validation.
                        </p>
                        <p class="text-sm text-brand-muted font-light leading-relaxed">
                            <strong>Juba Branch:</strong> Reserved street-level parking is available directly in front of the Sadeco Building.
                        </p>
                    </div>
                </div>

                <!-- Emergency Contact -->
                <div class="glass-panel p-10 rounded-[32px] bg-white border border-accent/20 flex items-start gap-6 shadow-sm">
                    <div class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center text-accent text-xl flex-shrink-0">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div>
                        <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-3">Post-Treatment Concerns</h4>
                        <p class="text-sm text-brand-muted font-light leading-relaxed mb-4">
                            If you have recently undergone a medical procedure and are experiencing severe or unexpected side effects outside of normal business hours, please contact our dedicated aftercare line.
                        </p>
                        <a href="tel:+256758232889" class="text-accent font-semibold text-sm hover:text-brand transition-colors"><i class="fas fa-phone mr-1"></i> Emergency Line: +256 758 232 889</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Maps embedded -->
    <section class="h-[500px] w-full mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.749069622915!2d32.60031131533036!3d0.33229999999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb1f4c781613%3A0xc6a8277c28c89b21!2sRefine%20Skin%20and%20Body%20Clinic!5e0!3m2!1sen!2sug!4v1628169999999!5m2!1sen!2sug" width="100%" height="100%" style="border:0; filter: grayscale(0.8) contrast(1.2) opacity(0.8);" allowfullscreen="" loading="lazy"></iframe>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
