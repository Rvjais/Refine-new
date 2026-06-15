import os
import re

BASE = '/home/veer/Ranveer/refine'

# Content templates for each treatment category
TEMPLATES = {}

# --- IV THERAPY ---
IV_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Energy & Vitality</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Combat fatigue and low energy with a potent blend of B vitamins, minerals, and amino acids delivered directly into your bloodstream. Our IV therapy supports cellular energy production and helps you feel revitalised and ready to take on the day.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Immune Support</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Strengthen your immune system with high-dose vitamin C, zinc, and other immune-supporting nutrients for maximum absorption and effectiveness.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hydration & Recovery</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Rapidly rehydrate and replenish electrolytes after illness, travel, or intense physical activity for fast, effective recovery.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Detox & Glow</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Support your body's natural detoxification pathways with glutathione and antioxidants that help clear toxins and promote radiant health.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Total Wellness Boost</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Our comprehensive IV therapy combines essential nutrients, hydration, and vitamins to support your overall health and wellbeing — helping you feel your best every day.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Hair transplant content
HAIR_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Male Pattern Baldness</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Receding hairlines, thinning crowns, and vertex baldness can be effectively restored with modern hair transplant techniques. Our expert team uses advanced follicular unit extraction to deliver natural-looking, permanent results that restore both your hair and your confidence.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Female Hair Thinning</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Diffuse thinning and widening part lines in women can be addressed with specialised techniques that restore density and volume for fuller, healthier-looking hair.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Scar & Trauma Repair</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Hair loss due to surgical scars, burns, or injuries can be effectively camouflaged with targeted grafting that restores natural hair growth in affected areas.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Eyebrow Restoration</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Sparse, over-plucked, or naturally thin eyebrows can be reconstructed with meticulous single-follicle grafting for a natural, flattering shape.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Beard & Facial Hair</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Patchy beards, uneven facial hair growth, or scars in the beard area can be addressed with precision grafting to create a full, natural-looking beard or moustache.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Body contouring content
BODY_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Targeted Fat Reduction</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Stubborn pockets of fat that resist diet and exercise can be precisely reduced using advanced non-surgical and surgical techniques. Our expert team tailors each treatment to your unique body shape, helping you achieve a smoother, more sculpted silhouette.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Skin Tightening</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Loose or sagging skin following weight loss or ageing can be effectively tightened and contoured for a firmer, more youthful appearance.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Cellulite Improvement</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Reduce the appearance of cellulite with treatments that target fibrous bands and improve skin texture for a smoother, more even surface.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Body Sculpting</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Define and enhance your natural contours, from abdomen and flanks to arms and thighs, creating a balanced, athletic-looking physique.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Post-Weight Loss Contouring</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">After significant weight loss, address remaining concerns like loose skin, stubborn fat pockets, and uneven contours to complete your transformation journey.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Skin treatments
SKIN_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Fine Lines & Wrinkles</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Reduce the appearance of fine lines, crow's feet, and expression wrinkles with advanced treatments that stimulate collagen production and rejuvenate skin from within. Our expert team customises every treatment to your unique skin needs.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Dullness & Texture</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Restore radiance and smooth uneven skin texture with treatments that exfoliate, hydrate, and renew for a glowing, youthful complexion.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Pigmentation</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Target dark spots, sun damage, melasma, and uneven skin tone with targeted treatments that brighten and balance complexion.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Loss of Elasticity</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Combat sagging skin and loss of firmness with collagen-boosting treatments that tighten and lift for a more defined facial contour.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Overall Rejuvenation</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Combine multiple approaches for a comprehensive skin transformation that addresses all your concerns for a refreshed, revitalised appearance.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Medical dermatology
MEDDERM_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Acne & Breakouts</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Persistent acne, cystic breakouts, and post-inflammatory hyperpigmentation can be effectively managed with personalised treatment plans. Our expert dermatologists combine medical therapies with advanced aesthetic treatments to clear your skin and prevent future breakouts.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Pigmentation Disorders</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Melasma, hyperpigmentation, and other pigmentary conditions are treated with a combination of medical-grade topicals, peels, and advanced laser therapies.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Skin Growths & Lesions</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Moles, skin tags, warts, and other benign or suspicious growths can be safely examined and removed by our experienced dermatology team.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Eczema & Psoriasis</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Chronic inflammatory skin conditions like eczema and psoriasis are managed with comprehensive care plans that reduce flare-ups and improve skin comfort.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Scar Management</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Acne scars, surgical scars, and keloids can be improved with advanced treatments including laser therapy, microneedling, and topical regimens.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Facial aesthetics (cheeks, under-eye, jawline, etc.)
FACIAL_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Volume Restoration</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Loss of facial volume due to ageing can be subtly and naturally restored using advanced dermal fillers and biostimulators. Our expert practitioners carefully assess your facial anatomy to deliver harmonious, balanced results that enhance your natural beauty.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Fine Line Smoothing</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Softening fine lines and early wrinkles for a smoother, more refreshed appearance without losing natural facial expression.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Contour Definition</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Enhance your natural bone structure with precise contouring that defines cheekbones, jawline, and chin for a more sculpted appearance.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Under-Eye Refinement</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Address dark circles, hollows, and puffiness under the eyes with specialised techniques that brighten and rejuvenate the delicate periorbital area.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Lip Enhancement</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Subtly enhance lip volume, shape, and definition with hyaluronic acid fillers for a natural, beautiful pout that complements your facial features.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Weight loss template
WEIGHT_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Medical Weight Loss</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Achieve sustainable weight loss with medically supervised programmes that combine nutritional guidance, lifestyle coaching, and advanced treatments. Our expert team creates personalised plans that address your unique metabolism, health goals, and lifestyle.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Appetite Control</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Innovative treatments that help manage hunger cues and reduce cravings, making it easier to maintain a healthy eating plan.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Metabolic Boost</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Treatments and supplements designed to support healthy metabolism and energy expenditure for more effective weight management.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Body Composition</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Improve your body composition with treatments that target fat reduction while preserving lean muscle mass for a healthier, more toned physique.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Lifestyle Integration</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Ongoing support and guidance to help you integrate healthy habits into your daily life for lasting, sustainable weight management success.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Injectables / wrinkle treatments template
INJECTABLES_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Expression Lines</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Frown lines, forehead wrinkles, and crow's feet can be softened with precision injectable treatments that relax overactive muscles while preserving natural facial expression. Our expert practitioners use advanced techniques for subtle, elegant results.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Volume Replacement</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Restore lost facial volume with dermal fillers that replenish hyaluronic acid and stimulate collagen for natural-looking rejuvenation.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Preventative Ageing</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Start your anti-ageing journey early with mild treatments that prevent deep wrinkle formation and maintain youthful skin elasticity.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Lip & Cheek Enhancement</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Subtle enhancements to lips and cheeks that restore youthful proportions and enhance facial harmony without an overdone look.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Jawline & Chin Sculpting</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Define and sharpen the jawline and chin for a more structured, youthful lower face profile using advanced filler techniques.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Menopause / women's health
WOMENS_HEALTH_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hormonal Balance</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Manage hormonal changes with personalised treatment plans that address symptoms like hot flashes, mood swings, and fatigue. Our expert team combines medical therapies with lifestyle guidance to support your journey through perimenopause and menopause.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Energy & Vitality</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Combat fatigue and low energy with targeted nutritional support and hormone optimisation that helps you feel energised and revitalised.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Weight Management</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Address midlife weight gain with integrated approaches that combine nutritional counselling, metabolic support, and body contouring treatments.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Skin & Hair Health</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Combat hormonal changes that affect skin elasticity and hair thickness with treatments designed to restore your glow and vitality.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Bone & Heart Health</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Long-term health support focusing on bone density, cardiovascular wellness, and overall wellbeing during the menopausal transition and beyond.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Men's health
MENS_HEALTH_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hormonal Optimisation</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Restore optimal hormone levels with personalised treatment plans that address low testosterone, fatigue, and age-related hormonal decline. Our expert medical team creates tailored protocols to help you feel energised, focused, and vital.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Sexual Wellness</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Address erectile dysfunction and other sexual health concerns with advanced treatments that improve blood flow, sensation, and performance.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hair Restoration</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Combat male pattern baldness and thinning hair with advanced hair transplant and non-surgical restoration treatments for natural, lasting results.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Body Sculpting</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Reduce stubborn fat pockets and define muscle contours with advanced body contouring treatments designed specifically for the male physique.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Skincare & Grooming</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Targeted skincare treatments for men addressing concerns like razor bumps, enlarged pores, sun damage, and signs of ageing for a refreshed, confident appearance.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Non-surgical rhinoplasty page - keep the nose content but make it correct
RHINOPLASTY_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Dorsal Humps & Bumps</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Prominent or irregular bumps on the bridge of the nose can be masterfully smoothed and softened, creating a perfectly streamlined, straight appearance from any angle. Our expert team utilizes advanced, evidence-based techniques to address this effectively.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Asymmetry</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">For noses slightly off-centre or asymmetric, filler creates a flawlessly balanced and harmonious facial symmetry.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Tip Elevation</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">A drooping or heavy nasal tip can be subtly lifted and elegantly refined, rejuvenating the overall profile.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Bridge Enhancement</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Build up and define a flat nasal bridge for individuals seeking a more pronounced, sculpted architectural structure.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Post-Surgical Refinements</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Minor corrections and refinements after surgical rhinoplasty can be achieved with precision filler techniques for optimal final results.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accept opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Bridal template
BRIDAL_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Pre-Wedding Glow</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Achieve radiant, glowing skin for your big day with our curated bridal facial treatments. Our expert team customises a skincare plan to ensure you look and feel your absolute best as you walk down the aisle.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Stress Relief</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Wedding planning can be stressful. Our relaxing treatments help you unwind and de-stress so you can enjoy every moment of your journey to the altar.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">HydraFacial</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Our signature HydraFacial treatment delivers instant hydration, deep cleansing, and a luminous complexion — the perfect prep for your wedding day.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Bridal Packages</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Our comprehensive bridal packages combine multiple treatments for complete head-to-toe pampering, ensuring you shine on your special day.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Post-Wedding Recovery</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">After the celebrations, treat yourself to recovery treatments that replenish, hydrate, and restore your skin and body for a beautiful post-wedding glow.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Erectile dysfunction / men's health
ED_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Erectile Dysfunction</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Regain confidence and performance with advanced treatments for erectile dysfunction. Our expert medical team offers evidence-based solutions including shockwave therapy, PRP injections, and personalised medication plans tailored to your needs.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Premature Ejaculation</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Effective treatments to help improve control and endurance, enhancing sexual satisfaction for both you and your partner.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Low Libido</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Restore your sex drive with hormone optimisation and nutritional support that addresses the root causes of low libido.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Peyronie's Disease</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Treat curvature and discomfort caused by Peyronie's disease with non-invasive therapies that improve penile function and reduce curvature.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Sexual Wellness</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Comprehensive sexual health assessments and personalised treatment plans to optimise your overall sexual wellness and confidence.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Mobile IV / stress sleep / nutrition / etc.
MISC_WELLNESS_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Stress Management</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Combat the effects of chronic stress with targeted treatments that support your nervous system, balance cortisol levels, and promote relaxation. Our holistic approach combines nutritional support, IV therapy, and lifestyle guidance to help you feel calm and in control.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Sleep Quality</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Improve your sleep with treatments that address insomnia, poor sleep quality, and circadian rhythm disruption for restorative, energising rest.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Nutritional Support</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Optimise your nutrition with personalised counselling and supplement plans that address deficiencies and support your overall wellness goals.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Convenience Care</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Our mobile IV and at-home services bring wellness treatments directly to you, making self-care convenient and accessible wherever you are.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Holistic Wellness</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">A comprehensive approach to wellbeing that integrates mind, body, and nutrition for lasting health and vitality.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# PRP treatments template
PRP_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hair Restoration</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">PRP therapy stimulates hair follicles and promotes natural hair growth in areas affected by thinning and balding. Our expert team uses your body's own growth factors to revitalise dormant follicles and strengthen existing hair for thicker, fuller results.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Skin Rejuvenation</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Harness the power of your body's natural healing factors to improve skin texture, tone, and elasticity for a radiant, youthful complexion.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Scar Reduction</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Improve the appearance of acne scars, surgical scars, and stretch marks with PRP's collagen-stimulating and tissue-regenerating properties.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Under-Eye Treatment</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Refresh tired-looking eyes with PRP that rejuvenates the delicate under-eye area, reducing dark circles, fine lines, and hollows.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Vampire Facial</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">The iconic PRP facial that combines microneedling with your body's own growth factors for dramatic skin rejuvenation and a natural, glowing complexion.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex-items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Vaginal rejuvenation template  
VAGINAL_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Vaginal Laxity</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Restore vaginal tightness and tone with non-surgical rejuvenation treatments that strengthen pelvic floor tissues and improve sensation. Our expert team provides discreet, personalised care in a comfortable, private setting.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Stress Incontinence</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Address bladder leakage during exercise, coughing, or laughing with non-invasive treatments that strengthen support structures.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Sexual Sensation</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Improve arousal, lubrication, and overall sexual satisfaction with treatments that enhance blood flow and nerve sensitivity.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Vaginal Dryness</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Relieve discomfort from vaginal dryness, especially during menopause, with moisturising and rejuvenating treatments that restore comfort and health.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Cosmetic Enhancement</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Labiaplasty and other cosmetic procedures to enhance comfort, appearance, and confidence in your intimate areas.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# Laser hair removal
LASER_HAIR_TEMPLATE = """      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
        <!-- 1: Large Span -->
        <div class="md:col-span-2 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 overflow-hidden relative cursor-pointer">
          <div class="absolute right-0 bottom-0 w-64 h-64 bg-accent/5 rounded-full blur-[80px] group-hover:bg-accent/15 transition-colors duration-700"></div>
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Facial Hair</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed max-w-3xl relative z-10">Permanently reduce unwanted facial hair including upper lip, chin, sideburns, and jawline with our advanced laser technology. Treatments are quick, comfortable, and deliver long-lasting results for smooth, hair-free skin.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 2 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Body Hair</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Effective hair reduction for legs, arms, underarms, bikini line, back, chest, and abdomen for smooth, carefree skin.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 3 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Ingrown Hairs</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Eliminate painful, unsightly ingrown hairs by permanently reducing hair growth in problem areas prone to razor bumps and irritation.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 4 -->
        <div class="group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Hormonal Hair Growth</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Address excessive hair growth caused by hormonal conditions like PCOS with comprehensive laser treatments tailored to your needs.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
        
        <!-- 5 -->
        <div class="md:col-span-2 lg:col-span-1 group glass-panel p-6 lg:p-8 rounded-3xl bg-[#faf9f6] border border-brand/5 hover:border-accent/30 hover:shadow-[0_20px_50px_rgba(var(--color-accent),0.08)] transition-all duration-500 relative cursor-pointer">
          <h4 class="font-heading font-semibold text-brand-deeper text-xl mb-2 relative z-10 pr-12">Skin Discolouration</h4>
          <p class="text-base text-brand-muted font-light leading-relaxed relative z-10">Laser hair removal also helps reduce dark spots and hyperpigmentation caused by shaving and waxing for an even, radiant skin tone.</p>
        
          <div class="absolute top-6 right-6 lg:top-8 lg:right-8 w-10 h-10 rounded-full bg-brand/5 flex items-center justify-center text-accent opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-x-2 group-hover:translate-x-0 z-20">
            <i class="fas fa-arrow-right -rotate-45"></i>
          </div>
        </div>
      </div>"""

# --- FILE MAPPING ---
# Map each filename to its template

FILENAME_TEMPLATES = {}

# IV Therapy files
iv_files = [
    'nad-iv-therapy-kampala-juba.php',
    'post-party-iv-therapy-kampala-juba.php',
    'pre-party-iv-therapy-kampala-juba.php', 
    'iron-infusion-kampala-juba.php',
    'immunity-iv-therapy-kampala-juba.php',
    'inner-beauty-iv-therapy-kampala-juba.php',
    'jet-lag-iv-therapy-treatment-kampala-juba.php',
    'myers-magic-iv-therapy-kampala-juba.php',
    'total-sport-iv-therapy-kampala-juba.php',
    'hangover-iv-therapy-kampala-juba.php',
    'vitamin-shots-kampala-juba.php',
    'refine-iv-lounge-kampala-juba.php',
    'testosterone-therapy-kampala-juba.php',
    'anti-migraine-iv-therapy-kampala-juba.php',
    'm-shot-treatment-kampala-juba.php',
    'wonder-axon-treatment-kampala-juba.php',
    'mobile-iv-service-kampala-juba.php',
]

for f in iv_files:
    FILENAME_TEMPLATES[f] = IV_TEMPLATE

# Hair transplant - use HAIR template
FILENAME_TEMPLATES['hair-transplant-kampala-juba.php'] = HAIR_TEMPLATE
FILENAME_TEMPLATES['hair-restoration-kampala-juba.php'] = HAIR_TEMPLATE
FILENAME_TEMPLATES['hair-mesotherapy-kampala-juba.php'] = HAIR_TEMPLATE
FILENAME_TEMPLATES['scalp-micropigmentation-kampala-juba.php'] = HAIR_TEMPLATE
FILENAME_TEMPLATES['beard-transplant-kampala-juba.php'] = HAIR_TEMPLATE
FILENAME_TEMPLATES['eyebrow-transplant-kampala-juba.php'] = HAIR_TEMPLATE

# Body contouring
body_files = [
    'body-contouring.php',
    'cryolipolysis-fat-freezing-treatment-kampala-juba.php',
    'cellulite-treatment-kampala-juba.php',
    'liposuction-kampala-juba.php',
    'vaser-lipo-kampala-juba.php',
    'mommy-makeover-kampala-juba.php',
    'non-surgical-brazilian-butt-lift-kampala-juba.php',
    'thigh-lift-kampala-juba.php',
    'arm-lift-kampala-juba.php',
    'skin-tightening.php',
]

for f in body_files:
    FILENAME_TEMPLATES[f] = BODY_TEMPLATE

# Skin treatments (facial rejuvenation)
skin_files = [
    'skin-boosters-kampala-juba.php',
    'microdermabrasion-kampala-juba.php',
    'open-pores-treatment-kampala-juba.php',
    'anti-aging-kampala-juba.php',
    'anti-wrinkle-treatment-kampala-juba.php',
    'profhilo-treatment-kampala-juba.php',
    'cool-lifting-skin-rejuvenation-kampala-juba.php',
    'skin-and-body-rejuvenation-kampala-juba.php',
    'carbon-laser-facial-kampala-juba.php',
    'dermaplaning-kampala-juba.php',
    'mesotherapy-kampala-juba.php',
    'laser-treatments-kampala-juba.php',
]

for f in skin_files:
    FILENAME_TEMPLATES[f] = SKIN_TEMPLATE

# Medical dermatology
medderm_files = [
    'medical-dermatology-kampala-juba.php',
    'cosmetic-dermatology-kampala-juba.php',
    'psoriasis-treatment-kampala-juba.php',
    'mole-wart-removal-kampala-juba.php',
    'skin-tag-removal-kampala-juba.php',
    'eczema-treatment-kampala-juba.php',
    'hyperpigmentation-treatment-kampala-juba.php',
    'melasma-treatment-kampala-juba.php',
]

for f in medderm_files:
    FILENAME_TEMPLATES[f] = MEDDERM_TEMPLATE

# Facial aesthetics
facial_files = [
    'cheek-enhancement-kampala-juba.php',
    'under-eye-treatment-kampala-juba.php',
    'jawline-contouring-kampala-juba.php',
    'tear-trough-filler-kampala-juba.php',
    'hand-rejuvenation-kampala-juba.php',
]

for f in facial_files:
    FILENAME_TEMPLATES[f] = FACIAL_TEMPLATE

# Injectables
FILENAME_TEMPLATES['injectables-kampala-juba.php'] = INJECTABLES_TEMPLATE
FILENAME_TEMPLATES['microblading-kampala-juba.php'] = FACIAL_TEMPLATE
FILENAME_TEMPLATES['eyelash-treatment-kampala-juba.php'] = FACIAL_TEMPLATE

# Weight loss
FILENAME_TEMPLATES['weight-loss-kampala-juba.php'] = WEIGHT_TEMPLATE
FILENAME_TEMPLATES['allurion-weight-loss-treatment-kampala-juba.php'] = WEIGHT_TEMPLATE

# Women's health
FILENAME_TEMPLATES['menopause-management-kampala-juba.php'] = WOMENS_HEALTH_TEMPLATE
FILENAME_TEMPLATES['breast-augmentation-kampala-juba.php'] = BODY_TEMPLATE
FILENAME_TEMPLATES['prp-breast-lift-kampala-juba.php'] = BODY_TEMPLATE
FILENAME_TEMPLATES['vaginal-rejuvenation-kampala-juba.php'] = VAGINAL_TEMPLATE

# Men's health
FILENAME_TEMPLATES['mens-aesthetics-kampala-juba.php'] = MENS_HEALTH_TEMPLATE
FILENAME_TEMPLATES['ed-treatment-kampala-juba.php'] = ED_TEMPLATE

# PRP
FILENAME_TEMPLATES['prp-treatments-kampala-juba.php'] = PRP_TEMPLATE
FILENAME_TEMPLATES['platelet-rich-plasma-facial-kampala-juba.php'] = PRP_TEMPLATE

# Bridal
FILENAME_TEMPLATES['bridal-packages-kampala-juba.php'] = BRIDAL_TEMPLATE

# Miscellaneous wellness  
FILENAME_TEMPLATES['stress-sleep-wellness-kampala-juba.php'] = MISC_WELLNESS_TEMPLATE
FILENAME_TEMPLATES['nutrition-counselling-kampala-juba.php'] = MISC_WELLNESS_TEMPLATE

# Non-surgical rhinoplasty - keep it correct (nose content is appropriate here)
FILENAME_TEMPLATES['non-surgical-liquid-rhinoplasty-kampala-juba.php'] = RHINOPLASTY_TEMPLATE

# OMG shot (weight loss/metabolic)
FILENAME_TEMPLATES['omg-shot-treatment-kampala-juba.php'] = WEIGHT_TEMPLATE

# Laser hair removal
FILENAME_TEMPLATES['laser-hair-removal-in-uganda-kampala-juba.php'] = LASER_HAIR_TEMPLATE

# --- REPLACEMENT LOGIC ---
# The section to replace starts with:
#       <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">
# and ends with:
#       </div>
# (the closing div of the bento grid, followed by whitespace and then </div> and then </section>)

# We need a more robust approach. Let's match from the bento grid start to just before the section closing.

SECTION_START_MARKER = '<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 gs-stagger-bento">'
SECTION_END_MARKER = 'gs-stagger-bento'

def find_section_in_content(content):
    """Find the bento grid section boundaries."""
    start_idx = content.find(SECTION_START_MARKER)
    if start_idx == -1:
        return None, None
    
    # Find the matching closing div structure
    # The bento grid ends with a </div> that closes the grid div
    # After that, there's whitespace and then </div> (closing the section inner div)
    # Then </section>
    
    search_from = start_idx + len(SECTION_START_MARKER)
    
    # Count open/close divs to find the matching close
    depth = 1
    pos = search_from
    while depth > 0 and pos < len(content):
        # Check for opening <div
        open_tag = content.find('<div', pos)
        close_tag = content.find('</div>', pos)
        
        if open_tag == -1 and close_tag == -1:
            break
        
        if close_tag == -1 or (open_tag != -1 and open_tag < close_tag):
            depth += 1
            pos = open_tag + 4
        else:
            depth -= 1
            pos = close_tag + 6
    
    end_idx = pos
    return start_idx, end_idx


def replace_section(filepath, new_content):
    with open(filepath, 'r') as f:
        content = f.read()
    
    start_idx, end_idx = find_section_in_content(content)
    
    if start_idx is None:
        print(f"  WARNING: Could not find bento grid section in {filepath}")
        return False
    
    # Replace the content
    before = content[:start_idx]
    after = content[end_idx:]
    
    # Trim trailing whitespace from AFTER if needed
    after = after.lstrip('\n')
    
    new_full = before + new_content + '\n' + after
    
    with open(filepath, 'w') as f:
        f.write(new_full)
    
    return True


def main():
    success = 0
    skipped = 0
    errors = 0
    
    for filename, template in sorted(FILENAME_TEMPLATES.items()):
        filepath = os.path.join(BASE, filename)
        if not os.path.exists(filepath):
            print(f"  SKIP: {filename} (not found)")
            skipped += 1
            continue
        
        print(f"  FIX: {filename}...", end=' ')
        try:
            result = replace_section(filepath, template)
            if result:
                print("OK")
                success += 1
            else:
                print("FAILED (section not found)")
                errors += 1
        except Exception as e:
            print(f"ERROR: {e}")
            errors += 1
    
    print(f"\nDone! {success} fixed, {skipped} skipped, {errors} errors")


if __name__ == '__main__':
    main()
