<!-- ============================================
     GRAND FOOTER — Categorised, image-rich
     ============================================ -->
<footer id="footer" class="footer-grand relative bg-brand-deeper text-white overflow-hidden pt-20 lg:pt-28">

    <!-- Decorative blurred orbs -->
    <div class="absolute -top-40 -left-40 w-[520px] h-[520px] rounded-full bg-brand/25 blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] rounded-full bg-accent/10 blur-3xl pointer-events-none"></div>
    <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(circle at 2px 2px, #fff 1px, transparent 0); background-size: 38px 38px;"></div>

    <div class="max-w-[1600px] mx-auto px-6 lg:px-10 relative z-10">

        <!-- ── BOOK APPOINTMENT FORM ────────────── -->
        <div class="mb-16">
            <div class="glass-panel rounded-3xl p-8 lg:p-12 bg-white/[0.03] border border-white/10 relative overflow-hidden">
                <!-- Decorative background elements -->
                <div class="absolute -top-32 -right-32 w-80 h-80 rounded-full bg-accent/10 blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-32 -left-32 w-80 h-80 rounded-full bg-brand/30 blur-3xl pointer-events-none"></div>
                
                <div class="text-center mb-12 relative z-10">
                    <p class="text-accent text-[10px] tracking-[0.3em] uppercase font-semibold mb-3">Priority Booking</p>
                    <h3 class="text-section font-display text-white leading-tight mb-4">Request an Appointment</h3>
                    <p class="text-white/55 font-body text-sm font-light max-w-2xl mx-auto">Please fill out the form below and our scheduling team will contact you to confirm your appointment.</p>
                </div>

                <form id="appointmentForm" method="POST" class="relative z-10 space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Patient Name *</label>
                            <input type="text" id="name" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                        </div>
                        <div>
                            <label for="parent_name" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Parent/Guardian Name *</label>
                            <input type="text" id="parent_name" name="parent_name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="email" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                        </div>
                        <div>
                            <label for="phone" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="location" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Preferred Location *</label>
                            <select id="location" name="location" required class="w-full bg-[#1a0f3c] md:bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                                <option value="" class="bg-[#1a0f3c]">Select Location</option>
                                <option value="online" class="bg-[#1a0f3c]">Online (All India)</option>
                                <option value="vasant_kunj" class="bg-[#1a0f3c]">eMbrace Vasant Kunj</option>
                                <option value="dlf_gurgaon" class="bg-[#1a0f3c]">eMbrace DLF City Court, Gurgaon</option>
                                <option value="rainbow_hospital" class="bg-[#1a0f3c]">eMbrace Rainbow Children's Hospital</option>
                                <option value="makkar_hospital" class="bg-[#1a0f3c]">eMbrace Makkar Hospital</option>
                            </select>
                        </div>
                        <div>
                            <label for="age_group" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Age Group *</label>
                            <select id="age_group" name="age_group" required class="w-full bg-[#1a0f3c] md:bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                                <option value="" class="bg-[#1a0f3c]">Select Age Group</option>
                                <option value="infants" class="bg-[#1a0f3c]">Infants (0–2 yrs)</option>
                                <option value="toddlers" class="bg-[#1a0f3c]">Toddlers (3–5 yrs)</option>
                                <option value="school_age" class="bg-[#1a0f3c]">School-Age (6–11 yrs)</option>
                                <option value="pre_teens" class="bg-[#1a0f3c]">Pre-Teens (12–14 yrs)</option>
                                <option value="teenagers" class="bg-[#1a0f3c]">Teenagers (15–18 yrs)</option>
                                <option value="adults" class="bg-[#1a0f3c]">Adults (18+)</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="specialty" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Specialty *</label>
                            <select id="specialty" name="specialty" required class="w-full bg-[#1a0f3c] md:bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                                <option value="" class="bg-[#1a0f3c]">Select Specialty</option>
                                <option value="clinical_psychologist" class="bg-[#1a0f3c]">Clinical Psychologist</option>
                                <option value="child_psychologist" class="bg-[#1a0f3c]">Child Psychologist</option>
                                <option value="psychiatrist" class="bg-[#1a0f3c]">Psychiatrist</option>
                                <option value="occupational_therapist" class="bg-[#1a0f3c]">Occupational Therapist</option>
                                <option value="speech_language_therapist" class="bg-[#1a0f3c]">Speech & Language Therapist</option>
                                <option value="physiotherapist" class="bg-[#1a0f3c]">Physiotherapist</option>
                                <option value="special_educator" class="bg-[#1a0f3c]">Special Educator</option>
                                <option value="couples_therapist" class="bg-[#1a0f3c]">Couples Therapist</option>
                            </select>
                        </div>
                        <div>
                            <label for="condition" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Condition Treated *</label>
                            <select id="condition" name="condition" required class="w-full bg-[#1a0f3c] md:bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                                <option value="" class="bg-[#1a0f3c]">Select Condition</option>
                                <option value="anxiety_stress" class="bg-[#1a0f3c]">Anxiety & Stress</option>
                                <option value="depression" class="bg-[#1a0f3c]">Depression</option>
                                <option value="adhd" class="bg-[#1a0f3c]">ADHD</option>
                                <option value="autism_asd" class="bg-[#1a0f3c]">Autism / ASD</option>
                                <option value="speech_delay" class="bg-[#1a0f3c]">Speech Delay</option>
                                <option value="learning_disability" class="bg-[#1a0f3c]">Learning Disability</option>
                                <option value="sensory_processing" class="bg-[#1a0f3c]">Sensory Processing</option>
                                <option value="ocd" class="bg-[#1a0f3c]">OCD</option>
                                <option value="trauma_ptsd" class="bg-[#1a0f3c]">Trauma / PTSD</option>
                                <option value="relationship_issues" class="bg-[#1a0f3c]">Relationship Issues</option>
                                <option value="child_adolescent" class="bg-[#1a0f3c]">Child & Adolescent</option>
                                <option value="grief_loss" class="bg-[#1a0f3c]">Grief & Loss</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="appointment_date" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Preferred Date *</label>
                            <input type="date" id="appointment_date" name="appointment_date" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all [color-scheme:dark]">
                        </div>
                        <div>
                            <label for="appointment_time" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Preferred Time *</label>
                            <input type="time" id="appointment_time" name="appointment_time" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all [color-scheme:dark]">
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Message / Concern</label>
                        <textarea id="message" name="message" rows="4" placeholder="Please describe your concern or requirements" class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all resize-y"></textarea>
                    </div>

                    <div class="text-center pt-4">
                        <button type="submit" class="btn-magnetic magnetic-target inline-flex items-center justify-center rounded-full bg-accent text-[#1a0f3c] px-10 py-4 font-semibold text-sm hover:bg-white transition-colors" style="border:none;">
                            <span>Book Appointment</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- ── TOP: Brand + Tagline + Newsletter ────────────── -->
        <div class="grid lg:grid-cols-12 gap-10 lg:gap-16 pb-12 lg:pb-16 border-b border-white/10">
            <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left">
                <a href="/" class="inline-block mb-6">
                    <img src="/assets/imagesfromsite/refine-logo-white.webp" alt="Refine Clinic Logo" class="h-16 lg:h-12 w-auto object-contain">
                </a>
                <p class="font-display text-2xl lg:text-3xl text-white/85 leading-snug mb-4 lg:mb-6 max-w-2xl text-balance">
                    East Africa's premier destination for <br class="hidden lg:block"/><i class="text-accent font-light">aesthetic, dermatological &amp; wellness care.</i>
                </p>
                <p class="text-white/55 font-body text-sm font-light leading-relaxed max-w-xl mb-8">
                    From advanced skin rejuvenation and hair restoration to medical weight loss and IV therapy — we blend world-class technology with the artistry of personalised care, across four locations in Kampala and Juba.
                </p>

                <!-- Social row -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3">
                    <span class="text-[10px] tracking-[0.3em] uppercase text-white/40 font-semibold mr-2 w-full sm:w-auto mb-2 sm:mb-0">Follow</span>
                    <a href="https://www.instagram.com/refineskinandbodyclinic/" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-accent text-white/70 hover:text-brand-deeper flex items-center justify-center transition-all" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/share/1b4epu5tXm/" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-accent text-white/70 hover:text-brand-deeper flex items-center justify-center transition-all" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://x.com/Refine_Skin" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-accent text-white/70 hover:text-brand-deeper flex items-center justify-center transition-all" title="X (Twitter)"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.tiktok.com/discover/refine-skin-and-body-clinic-uganda" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-accent text-white/70 hover:text-brand-deeper flex items-center justify-center transition-all" title="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.youtube.com" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-accent text-white/70 hover:text-brand-deeper flex items-center justify-center transition-all" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="lg:col-span-5 mt-8 lg:mt-0">
                <div class="glass-panel rounded-3xl p-6 sm:p-8 bg-white/[0.03] border border-white/10 text-center lg:text-left">
                    <p class="text-accent text-[10px] tracking-[0.3em] uppercase font-semibold mb-3">The Refine Edit</p>
                    <h3 class="font-display text-2xl lg:text-3xl text-white leading-tight mb-2">Insights to your inbox.</h3>
                    <p class="text-white/55 font-body text-sm font-light leading-relaxed mb-6">Treatment guides, special offers, and event invitations — once a month, no spam.</p>
                    <form class="flex flex-col sm:flex-row gap-3" onsubmit="event.preventDefault(); this.querySelector('button').innerText='Subscribed ✓';">
                        <input type="email" required placeholder="your@email.com" class="w-full sm:flex-1 bg-white/5 border border-white/10 rounded-full px-5 py-3 text-sm text-white placeholder-white/30 focus:outline-none focus:border-accent transition-colors">
                        <button type="submit" class="btn-magnetic magnetic-target whitespace-nowrap w-full sm:w-auto flex justify-center items-center rounded-full bg-accent text-brand-deeper font-semibold hover:bg-white transition-colors" style="padding: 12px 22px; font-size: 13px;"><span>Subscribe</span></button>
                    </form>
                    <p class="text-white/30 text-[10px] mt-4 leading-relaxed">By subscribing you agree to our <a href="cookie-policy" class="text-accent/70 hover:text-accent">Privacy Policy</a>. Unsubscribe anytime.</p>
                </div>
            </div>
        </div>

        <!-- ── MIDDLE: Categorised link grid ──────────────── -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-10 lg:gap-8 py-16 border-b border-white/10">

            <!-- Column 1: Cosmetic -->
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-6 flex items-center gap-2">
                    <i class="fas fa-spa text-accent text-[10px]"></i> Cosmetic
                </h4>
                <ul class="space-y-3">
                    <li><a href="cosmetic-dermatology-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">All Cosmetic</a></li>
                    <li><a href="botox-anti-aging-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Botox®</a></li>
                    <li><a href="dermal-fillers-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Dermal Fillers</a></li>
                    <li><a href="sculptra-face-lift-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Sculptra Face Lift</a></li>
                    <li><a href="hydrafacial-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">HydraFacial</a></li>
                    <li><a href="chemical-peel-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Chemical Peel</a></li>
                    <li><a href="rf-microneedling-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">RF Microneedling</a></li>
                    <li><a href="co2-laser-scar-removal-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">CO2 Laser</a></li>
                    <li><a href="laser-hair-removal-in-uganda-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Laser Hair Removal</a></li>
                </ul>
            </div>

            <!-- Column 2: Medical -->
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-6 flex items-center gap-2">
                    <i class="fas fa-stethoscope text-accent text-[10px]"></i> Medical
                </h4>
                <ul class="space-y-3">
                    <li><a href="medical-dermatology-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">All Medical Derm</a></li>
                    <li><a href="acne-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Acne Solutions</a></li>
                    <li><a href="scar-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Scar Revision</a></li>
                    <li><a href="Hyperpigmentation-Melasma-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Melasma &amp; Pigmentation</a></li>
                    <li><a href="eczema-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Eczema</a></li>
                    <li><a href="hair-loss-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Hair Loss</a></li>
                    <li><a href="alopecia-areata-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Alopecia Areata</a></li>
                    <li><a href="anti-aging-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Anti-Aging</a></li>
                </ul>
            </div>

            <!-- Column 3: Hair & Body -->
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-6 flex items-center gap-2">
                    <i class="fas fa-head-side text-accent text-[10px]"></i> Hair &amp; Body
                </h4>
                <ul class="space-y-3">
                    <li><a href="hair-transplant-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Hair Transplant</a></li>
                    <li><a href="prp-hair-restoration-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">PRP Hair</a></li>
                    <li><a href="beard-transplant-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Beard Transplant</a></li>
                    <li><a href="eyebrow-transplant-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Eyebrow Transplant</a></li>
                    <li><a href="microblading-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Microblading</a></li>
                    <li><a href="body-contouring-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Body Contouring</a></li>
                    <li><a href="liposuction-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Liposuction</a></li>
                    <li><a href="mommy-makeover-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Mommy Makeover</a></li>
                    <li><a href="tummy-tuck-abdominoplasty-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Tummy Tuck</a></li>
                </ul>
            </div>

            <!-- Column 4: Wellness & IV -->
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-6 flex items-center gap-2">
                    <i class="fas fa-bolt text-accent text-[10px]"></i> Wellness
                </h4>
                <ul class="space-y-3">
                    <li><a href="refine-iv-lounge-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">IV Lounge Hub</a></li>
                    <li><a href="myers-magic-iv-therapy-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Myers' Magic IV</a></li>
                    <li><a href="nad-iv-therapy-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">NAD+ IV</a></li>
                    <li><a href="inner-beauty-iv-therapy-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Inner Beauty IV</a></li>
                    <li><a href="immunity-iv-therapy-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Immunity Boost</a></li>
                    <li><a href="semaglutide-ozempic-weight-loss-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Weight Loss</a></li>
                    <li><a href="bio-identical-hormone-replacement-therapy-kampala" class="text-white/55 hover:text-accent text-sm font-light transition-colors">BHRT</a></li>
                    <li><a href="m-shot-treatment-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Intimate Wellness</a></li>
                    <li><a href="mobile-iv-service-kampala-juba" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Mobile IV Service</a></li>
                </ul>
            </div>

            <!-- Column 5: Clinic -->
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-6 flex items-center gap-2">
                    <i class="fas fa-hospital text-accent text-[10px]"></i> The Clinic
                </h4>
                <ul class="space-y-3">
                    <li><a href="about" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Our Philosophy</a></li>
                    <li><a href="clinical-team" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Clinical Team</a></li>
                    <li><a href="gallery" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Clinic Gallery</a></li>
                    <li><a href="testimonials" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Client Stories</a></li>
                    <li><a href="patient-stories" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Patient Stories</a></li>
                    <li><a href="videos" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Video Library</a></li>
                    <li><a href="podcast" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Podcast</a></li>
                    <li><a href="blog" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Blog</a></li>
                    <li><a href="careers" class="text-white/55 hover:text-accent text-sm font-light transition-colors">Careers</a></li>
                </ul>
            </div>

            <!-- Column 6: Contact / Locations -->
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-6 flex items-center gap-2">
                    <i class="fas fa-map-pin text-accent text-[10px]"></i> Contact
                </h4>
                <ul class="space-y-5">
                    <li>
                        <p class="text-white text-sm font-medium mb-1">Forest Mall HQ</p>
                        <p class="text-white/45 text-[11px] leading-relaxed mb-1">Unit GF4 Block B, Lugogo Bypass</p>
                        <a href="tel:+256758232889" class="text-accent hover:text-white transition-colors text-[11px] inline-flex items-center gap-1.5"><i class="fas fa-phone-alt text-[9px]"></i> +256 758 232 889</a>
                    </li>
                    <li>
                        <p class="text-white text-sm font-medium mb-1">Palm Village, Kabalagala</p>
                        <p class="text-white/45 text-[11px] leading-relaxed mb-1">Palm Village Mall, 2nd Floor</p>
                        <a href="tel:+256705035096" class="text-accent hover:text-white transition-colors text-[11px] inline-flex items-center gap-1.5"><i class="fas fa-phone-alt text-[9px]"></i> +256 705 035 096</a>
                    </li>
                    <li>
                        <p class="text-white text-sm font-medium mb-1">UMC Victoria, Bukoto</p>
                        <p class="text-white/45 text-[11px] leading-relaxed mb-1">UMC Victoria Hospital Annex</p>
                        <a href="tel:+256748951996" class="text-accent hover:text-white transition-colors text-[11px] inline-flex items-center gap-1.5"><i class="fas fa-phone-alt text-[9px]"></i> +256 748 951 996</a>
                    </li>
                    <li>
                        <p class="text-white text-sm font-medium mb-1">Juba, South Sudan</p>
                        <p class="text-white/45 text-[11px] leading-relaxed mb-1">1st Floor, Sadeco Bldg, Airport Rd</p>
                        <a href="tel:+211922687111" class="text-accent hover:text-white transition-colors text-[11px] inline-flex items-center gap-1.5"><i class="fas fa-phone-alt text-[9px]"></i> +211 922 687 111</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- ── HOURS STRIP ──────────────── -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-12 border-b border-white/10">
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-5 flex items-center gap-2">
                    <i class="far fa-clock text-accent text-[10px]"></i> Forest Mall (HQ) Hours
                </h4>
                <ul class="grid grid-cols-3 gap-3 text-white/60 text-sm font-light">
                    <li class="flex flex-col"><span class="text-white/40 text-[10px] uppercase tracking-widest">Mon, Wed, Fri</span><span class="text-white">09:00 – 18:00</span></li>
                    <li class="flex flex-col"><span class="text-white/40 text-[10px] uppercase tracking-widest">Tue, Thu</span><span class="text-white">10:00 – 19:00</span></li>
                    <li class="flex flex-col"><span class="text-white/40 text-[10px] uppercase tracking-widest">Saturday</span><span class="text-white">09:00 – 17:00</span></li>
                </ul>
            </div>
            <div>
                <h4 class="font-heading font-semibold text-white text-xs tracking-[0.2em] uppercase mb-5 flex items-center gap-2">
                    <i class="far fa-clock text-accent text-[10px]"></i> Other Branches Hours
                </h4>
                <ul class="grid grid-cols-3 gap-3 text-white/60 text-sm font-light">
                    <li class="flex flex-col"><span class="text-white/40 text-[10px] uppercase tracking-widest">Mon – Sat</span><span class="text-white">10:00 – 18:00</span></li>
                    <li class="flex flex-col"><span class="text-white/40 text-[10px] uppercase tracking-widest">Sunday</span><span class="text-white">Closed</span></li>
                    <li class="flex flex-col"><span class="text-white/40 text-[10px] uppercase tracking-widest">Holidays</span><span class="text-white">By appt.</span></li>
                </ul>
            </div>
        </div>

        <!-- ── HUGE WATERMARK ──────────────── -->
        <div class="w-full overflow-hidden flex justify-center opacity-[0.05] select-none pointer-events-none pt-12 pb-[-2vw]">
            <span class="font-display font-bold text-[18vw] leading-none text-white whitespace-nowrap">REFINE</span>
        </div>

        <!-- ── BOTTOM BAR ──────────────── -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-white/40 font-body text-xs">&copy; <?php echo date('Y'); ?> Refine Skin &amp; Body Clinic. All rights reserved. <span class="text-accent/60">Masterfully crafted.</span></p>
            <div class="flex flex-wrap gap-x-6 gap-y-2 text-white/40 font-body text-xs justify-center">
                <a href="cookie-policy" class="hover:text-accent transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-accent transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-accent transition-colors">Patient Consent</a>
                <a href="#" class="hover:text-accent transition-colors">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

<!-- ============================================
     MOBILE BOTTOM BAR (Fixed)
     ============================================ -->
<div class="fixed bottom-0 left-0 right-0 z-[998] lg:hidden bg-brand-deeper border-t border-white/5 pb-safe">
    <div class="grid grid-cols-3">
        <a href="tel:+256758232889" class="flex items-center justify-center gap-2 py-4 text-white font-heading text-[10px] font-semibold tracking-widest uppercase hover:bg-white/5 transition-colors">
            <i class="fas fa-phone text-accent"></i> Call
        </a>
        <a href="https://api.whatsapp.com/send?phone=256749574546" target="_blank" class="flex items-center justify-center gap-2 py-4 text-white font-heading text-[10px] font-semibold tracking-widest uppercase hover:bg-white/5 transition-colors border-l border-white/5">
            <i class="fa-brands fa-whatsapp text-accent text-sm"></i> WhatsApp
        </a>
        <a href="book-appointment" class="flex items-center justify-center gap-2 py-4 text-white font-heading text-[10px] font-semibold tracking-widest uppercase hover:bg-accent transition-colors border-l border-white/5 bg-brand">
            <i class="fas fa-calendar-check text-accent"></i> Book
        </a>
    </div>
</div>
