<?php
$pageCategory = "Schedule Your Visit";
$pageTitle = "Book an <i class='text-brand font-light'>Appointment.</i>";
$pageDescription = "Take the first step towards your aesthetic transformation. Please select your preferred treatment, branch, and time below.";
?>
<?php include 'includes/head.php'; ?>
<?php include 'includes/header.php'; ?>

<main class="pt-20">
    <!-- Reusable Hero -->
    <?php include 'includes/page-hero.php'; ?>

    <!-- ============================================
         WHAT TO EXPECT (Timeline)
         ============================================ -->
    <section class="py-16 lg:py-24 bg-surface-warm border-b border-brand/5">
        <div class="max-w-[1400px] mx-auto px-6 lg:px-10">
            <h3 class="font-display text-3xl text-brand-deeper text-center mb-12 gs-reveal-text">Your Journey <i class="text-accent font-light">With Us</i></h3>
            
            <div class="grid md:grid-cols-3 gap-8 relative gs-stagger-bento">
                <!-- Connecting Line (Desktop Only) -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-[1px] bg-brand/10 -translate-y-1/2 z-0"></div>
                
                <!-- Step 1 -->
                <div class="glass-panel p-8 rounded-3xl text-center relative z-10 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-12 h-12 mx-auto bg-brand text-white rounded-full flex items-center justify-center font-display text-xl mb-6 shadow-lg shadow-brand/20">1</div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">The Consultation</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed">We listen to your concerns, analyze your skin architecture, and discuss your aesthetic goals.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="glass-panel p-8 rounded-3xl text-center relative z-10 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-12 h-12 mx-auto bg-brand text-white rounded-full flex items-center justify-center font-display text-xl mb-6 shadow-lg shadow-brand/20">2</div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">The Procedure</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed">Relax in our state-of-the-art suites as our board-certified experts execute your bespoke treatment plan.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="glass-panel p-8 rounded-3xl text-center relative z-10 hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-12 h-12 mx-auto bg-brand text-white rounded-full flex items-center justify-center font-display text-xl mb-6 shadow-lg shadow-brand/20">3</div>
                    <h4 class="font-heading font-semibold text-brand-deeper text-lg mb-2">The Reveal & Care</h4>
                    <p class="text-sm text-brand-muted font-light leading-relaxed">Experience your transformation and receive a detailed, personalized aftercare regimen.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         BOOKING FORM & CHECKLIST
         ============================================ -->
    <section class="py-16 lg:py-24 bg-white relative">
        <div class="max-w-[1600px] mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-16">
                
                <!-- The Form (Col 8) -->
                <div class="lg:col-span-8">
                    <div class="glass-panel p-8 md:p-12 rounded-[40px] bg-surface-warm shadow-xl gs-reveal-fade border border-brand/5">
                        
                        <form action="#" method="POST" class="space-y-10">
                            
                            <!-- Section 1: Patient Details -->
                            <div>
                                <h3 class="font-display text-2xl text-brand-deeper border-b border-brand/10 pb-4 mb-6 flex items-center gap-3"><i class="fas fa-user-circle text-accent"></i> Your Details</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">First Name</label>
                                        <input type="text" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" required>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Last Name</label>
                                        <input type="text" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" required>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Phone Number</label>
                                        <input type="tel" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" required>
                                    </div>
                                    <div>
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Email Address</label>
                                        <input type="email" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Section 2: Appointment Details -->
                            <div>
                                <h3 class="font-display text-2xl text-brand-deeper border-b border-brand/10 pb-4 mb-6 flex items-center gap-3"><i class="far fa-calendar-alt text-accent"></i> Appointment Details</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    
                                    <!-- Branch Selector -->
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Select Clinic Branch</label>
                                        <div class="relative">
                                            <select class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent appearance-none transition-colors cursor-pointer" required>
                                                <option value="" disabled selected>Choose a location...</option>
                                                <option value="kampala-hq">Kampala HQ (Forest Mall)</option>
                                                <option value="kabalagala">Kampala (Kabalagala)</option>
                                                <option value="bukoto">Kampala (Bukoto)</option>
                                                <option value="juba">Juba, South Sudan</option>
                                            </select>
                                            <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-brand/40 pointer-events-none"></i>
                                        </div>
                                    </div>

                                    <!-- Treatment Selector -->
                                    <div class="md:col-span-2">
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Primary Interest / Treatment</label>
                                        <div class="relative">
                                            <select class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent appearance-none transition-colors cursor-pointer" required>
                                                <option value="" disabled selected>What can we help you with?</option>
                                                <optgroup label="Cosmetic Dermatology">
                                                    <option value="hydrafacial">HydraFacial</option>
                                                    <option value="chemical-peel">Chemical Peels</option>
                                                    <option value="microneedling">RF Microneedling</option>
                                                </optgroup>
                                                <optgroup label="Anti-Aging">
                                                    <option value="botox">Botox®</option>
                                                    <option value="fillers">Dermal Fillers</option>
                                                    <option value="sculptra">Sculptra Face Lift</option>
                                                </optgroup>
                                                <optgroup label="Laser & Body">
                                                    <option value="laser-hair">Laser Hair Removal</option>
                                                    <option value="body-contouring">Body Contouring</option>
                                                </optgroup>
                                                <optgroup label="Medical Dermatology">
                                                    <option value="acne">Acne Care</option>
                                                    <option value="scars">Scar Revision</option>
                                                    <option value="consultation">General Skin Consultation</option>
                                                </optgroup>
                                                <optgroup label="Wellness">
                                                    <option value="iv-therapy">IV Therapy Lounge</option>
                                                </optgroup>
                                            </select>
                                            <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-brand/40 pointer-events-none"></i>
                                        </div>
                                    </div>
                                    
                                    <!-- Date -->
                                    <div>
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Preferred Date</label>
                                        <input type="date" class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent transition-colors" required>
                                    </div>

                                    <!-- Time -->
                                    <div>
                                        <label class="block text-xs font-semibold text-brand-deeper uppercase tracking-widest mb-2">Preferred Time</label>
                                        <div class="relative">
                                            <select class="w-full bg-white border border-brand/10 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-accent appearance-none transition-colors cursor-pointer" required>
                                                <option value="" disabled selected>Select time...</option>
                                                <option value="morning">Morning (9:00 AM - 12:00 PM)</option>
                                                <option value="afternoon">Afternoon (12:00 PM - 4:00 PM)</option>
                                                <option value="evening">Late Afternoon (4:00 PM - 6:00 PM)</option>
                                            </select>
                                            <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-brand/40 pointer-events-none"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="pt-6 border-t border-brand/10">
                                <button type="submit" class="btn-magnetic w-full magnetic-target">
                                    <span>Secure Appointment</span>
                                </button>
                                <p class="text-xs text-brand-muted mt-4 font-light text-center"><i class="fas fa-lock text-accent mr-1"></i> Your information is securely encrypted and kept strictly confidential.</p>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Checklist & Info (Col 4) -->
                <div class="lg:col-span-4 gs-reveal-text space-y-8">
                    <!-- Pre-Consultation Checklist -->
                    <div class="bg-brand-deeper text-white rounded-[32px] p-8 shadow-2xl relative overflow-hidden">
                        <div class="absolute inset-0 bg-accent/5"></div>
                        <h4 class="font-display text-2xl mb-6 relative z-10">Pre-Visit <i class="text-accent font-light">Checklist</i></h4>
                        <ul class="space-y-4 font-body text-sm font-light relative z-10 text-white/80">
                            <li class="flex items-start gap-3"><i class="far fa-check-square text-accent mt-1"></i> Arrive 15 minutes early to complete any necessary paperwork.</li>
                            <li class="flex items-start gap-3"><i class="far fa-check-square text-accent mt-1"></i> Bring a list of your current skincare products and medications.</li>
                            <li class="flex items-start gap-3"><i class="far fa-check-square text-accent mt-1"></i> Come with a clean, makeup-free face if possible.</li>
                            <li class="flex items-start gap-3"><i class="far fa-check-square text-accent mt-1"></i> Download and review your specific <a href="consent-forms" class="text-accent hover:underline font-semibold">Consent Forms</a>.</li>
                        </ul>
                    </div>

                    <!-- Direct Contact -->
                    <div class="glass-panel p-8 rounded-[32px] border border-brand/5 text-center group hover:bg-surface-warm transition-colors">
                        <div class="w-16 h-16 mx-auto bg-brand/5 rounded-full flex items-center justify-center text-brand text-2xl mb-4 group-hover:bg-accent group-hover:text-white transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h4 class="font-heading font-semibold text-brand-deeper mb-2">Prefer to chat?</h4>
                        <p class="text-sm text-brand-muted font-light mb-6">Our concierge team is available on WhatsApp.</p>
                        <a href="https://api.whatsapp.com/send?phone=256749574546" class="text-accent font-semibold text-sm hover:text-brand transition-colors">Message Us Now <i class="fas fa-arrow-right ml-1"></i></a>
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
