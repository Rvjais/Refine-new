<?php
// Extracted Appointment Form to be included in all service pages
?>
<section class="py-16 lg:py-24 w-full bg-[#faf9f6] relative overflow-hidden">
    <!-- Decorative background elements for the light section -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/10 rounded-full blur-[120px] -translate-y-1/2 translate-x-1/3 pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand/5 rounded-full blur-[100px] translate-y-1/3 -translate-x-1/4 pointer-events-none"></div>

    <div class="max-w-[1200px] mx-auto px-6 lg:px-10 relative z-10">
        <div class="mb-0">
            <!-- Floating dark card -->
            <div class="rounded-3xl p-8 lg:p-12 bg-brand-deeper border border-white/10 relative overflow-hidden shadow-[0_20px_50px_rgba(26,15,60,0.15)]">
            <!-- Decorative background elements inside card -->
            <div class="absolute -top-32 -right-32 w-80 h-80 rounded-full bg-accent/20 blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-32 -left-32 w-80 h-80 rounded-full bg-brand/40 blur-3xl pointer-events-none"></div>
            
            <div class="text-center mb-12 relative z-10">
                <p class="text-accent text-[10px] tracking-[0.3em] uppercase font-semibold mb-3">Priority Booking</p>
                <h3 class="text-section font-display text-white leading-tight mb-4">Request an Appointment</h3>
                <p class="text-white/55 font-body text-sm font-light max-w-2xl mx-auto">Please fill out the form below and our scheduling team will contact you to confirm your appointment.</p>
            </div>

            <!-- Formester Integration -->
            <form accept-charset='UTF-8' action='https://app.formester.com/forms/9f739eec-3fbd-49bf-a7a9-ebf490069756/submissions' method='POST' class="relative z-10 space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Full Name *</label>
                        <input type="text" id="name" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                    </div>
                    <div>
                        <label for="email" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="phone" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required class="w-full bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white placeholder-white/20 focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                    </div>
                    <div>
                        <label for="location" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Preferred Location *</label>
                        <select id="location" name="location" required class="w-full bg-[#1a0f3c] md:bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                            <option value="" class="bg-[#1a0f3c]">Select Location</option>
                            <option value="forest_mall" class="bg-[#1a0f3c]">Forest Mall (HQ) — Kampala</option>
                            <option value="kabalagala" class="bg-[#1a0f3c]">Kabalagala — Kampala</option>
                            <option value="bukoto" class="bg-[#1a0f3c]">UMC Victoria Hospital, Bukoto — Kampala</option>
                            <option value="juba" class="bg-[#1a0f3c]">Juba — South Sudan</option>
                        </select>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="treatment_interest" class="block text-white/70 text-xs tracking-widest uppercase mb-2">Treatment Interest *</label>
                        <select id="treatment_interest" name="treatment_interest" required class="w-full bg-[#1a0f3c] md:bg-white/5 border border-white/10 rounded-xl px-5 py-3.5 text-sm text-white focus:outline-none focus:border-accent focus:bg-white/10 transition-all">
                            <option value="" class="bg-[#1a0f3c]">Select Treatment Interest</option>
                            <option value="cosmetic" class="bg-[#1a0f3c]">Cosmetic Dermatology</option>
                            <option value="hair_restoration" class="bg-[#1a0f3c]">Hair Restoration</option>
                            <option value="body_contouring" class="bg-[#1a0f3c]">Body Contouring</option>
                            <option value="weight_loss" class="bg-[#1a0f3c]">Weight Loss / Wellness</option>
                            <option value="iv_therapy" class="bg-[#1a0f3c]">IV Therapy</option>
                            <option value="laser" class="bg-[#1a0f3c]">Laser Treatments</option>
                            <option value="medical_derm" class="bg-[#1a0f3c]">Medical Dermatology</option>
                            <option value="other" class="bg-[#1a0f3c]">Other</option>
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
</section>
