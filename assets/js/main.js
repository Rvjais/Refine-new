/* ============================================
   REFINE SKIN & BODY CLINIC
   Awwwards-Level JS — GSAP + Swiper
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

    gsap.registerPlugin(ScrollTrigger);

    // ─── PRELOADER (Smooth fade out) ─────────────────
    window.addEventListener('load', () => {
        const preloader = document.getElementById('preloader');
        if (preloader) {
            gsap.to(preloader, {
                opacity: 0,
                duration: 0.8,
                ease: 'power2.inOut',
                onComplete: () => {
                    preloader.remove();
                    initHeroAnimations();
                }
            });
        } else {
            initHeroAnimations();
        }
    });

    // ─── MAGNETIC BUTTONS ────────────────────────────
    const magneticTargets = document.querySelectorAll('.magnetic-target');
    
    magneticTargets.forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            
            gsap.to(btn, {
                x: x * 0.3,
                y: y * 0.3,
                duration: 0.4,
                ease: 'power2.out'
            });
            
            // If button has child span/icon, move them slightly more for parallax
            const children = btn.children;
            if(children.length > 0) {
                gsap.to(children, {
                    x: x * 0.15,
                    y: y * 0.15,
                    duration: 0.4,
                    ease: 'power2.out'
                });
            }
        });

        btn.addEventListener('mouseleave', () => {
            gsap.to(btn, {
                x: 0,
                y: 0,
                duration: 0.7,
                ease: 'elastic.out(1, 0.3)'
            });
            const children = btn.children;
            if(children.length > 0) {
                gsap.to(children, {
                    x: 0,
                    y: 0,
                    duration: 0.7,
                    ease: 'elastic.out(1, 0.3)'
                });
            }
        });
    });

    // ─── HERO SWIPER ─────────────────────────────────
    let isInitialLoad = true;

    const heroSwiper = new Swiper('.hero-swiper', {
        loop: true,
        speed: 1200, // Slower, more luxurious transition
        parallax: true,
        autoplay: {
            delay: 6000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        navigation: {
            nextEl: '.creative-nav-next',
            prevEl: '.creative-nav-prev',
        },
        pagination: {
            el: '.creative-pagination',
            clickable: true,
        },
        on: {
            slideChangeTransitionStart: function () {
                if (isInitialLoad) return; // Handled by initHeroAnimations
                
                const activeSlide = this.slides[this.activeIndex];
                const staggerElements = activeSlide.querySelectorAll('.hero-stagger-text');
                
                gsap.fromTo(staggerElements, 
                    { y: '100%', opacity: 0 },
                    { 
                        y: '0%', 
                        opacity: 1, 
                        duration: 1, 
                        stagger: 0.1, 
                        ease: 'power3.out' 
                    }
                );
            }
        },
    });

    function initHeroAnimations() {
        const activeSlide = document.querySelector('.hero-swiper .swiper-slide-active');
        if (activeSlide) {
            const staggerElements = activeSlide.querySelectorAll('.hero-stagger-text');
            gsap.fromTo(staggerElements, 
                { y: '100%', opacity: 0 },
                { 
                    y: '0%', 
                    opacity: 1, 
                    duration: 1.2, 
                    stagger: 0.15, 
                    ease: 'power4.out',
                    delay: 0.2
                }
            );
        }
        isInitialLoad = false;
    }

    // ─── TESTIMONIALS SWIPER (Coverflow Effect) ──────
    const testimonialsSwiper = new Swiper('.testimonials-swiper', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        loop: true,
        loopedSlides: 4,
        observer: true,
        observeParents: true,
        speed: 800,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: false,
        },
        navigation: {
            nextEl: '.testi-next',
            prevEl: '.testi-prev',
        },
        pagination: {
            el: '.testimonials-swiper .swiper-pagination',
            clickable: true,
        },
        on: {
            init: function () {
                setTimeout(() => {
                    this.update();
                }, 100);
            }
        }
    });

    // ─── GSAP SCROLL ANIMATIONS ──────────────────────
    
    // 1. Text reveals (Masked Y-axis slide up)
    gsap.utils.toArray('.gs-reveal-text').forEach(section => {
        const textElements = section.querySelectorAll('h2, h3, p, span, .btn-magnetic');
        if(textElements.length === 0) return;
        
        gsap.fromTo(textElements, 
            { y: 40, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 1,
                stagger: 0.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: section,
                    start: 'top 85%',
                }
            }
        );
    });

    // 2. Bento Grid Stagger
    const bentoGrid = document.querySelector('.gs-stagger-bento');
    if (bentoGrid) {
        const items = bentoGrid.querySelectorAll('.bento-item');
        gsap.fromTo(items,
            { y: 60, opacity: 0, scale: 0.95 },
            {
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                stagger: 0.1,
                ease: 'back.out(1.2)',
                scrollTrigger: {
                    trigger: bentoGrid,
                    start: 'top 80%',
                }
            }
        );
    }

    // 3. Image composition reveals (Empathy section)
    const imgGroups = document.querySelectorAll('.gs-reveal-img-group');
    imgGroups.forEach(imgGroup => {
        const imgs = imgGroup.querySelectorAll('.gs-reveal-img');
        imgs.forEach((img, index) => {
            const overlay = img.querySelector('.img-reveal-overlay');
            const actualImg = img.querySelector('img');
            
            // Delay based on classes if any
            const delay = img.classList.contains('gs-delay-1') ? 0.3 : (img.classList.contains('gs-delay-2') ? 0.6 : 0);

            let tl = gsap.timeline({
                scrollTrigger: {
                    trigger: imgGroup,
                    start: 'top 70%',
                }
            });

            // Reveal overlay animates down
            tl.to(overlay, {
                scaleY: 0,
                duration: 1.2,
                ease: 'power3.inOut',
                delay: delay
            })
            // Image scales down from parallax
            .to(actualImg, {
                scale: 1,
                duration: 1.2,
                ease: 'power3.out'
            }, `-=1.2`);
        });

        const fades = imgGroup.querySelectorAll('.gs-reveal-fade');
        fades.forEach(el => {
            gsap.fromTo(el, { opacity: 0, y: 20 }, {
                opacity: 1, y: 0, duration: 1, delay: 0.8, ease: 'power2.out',
                scrollTrigger: { trigger: imgGroup, start: 'top 70%' }
            });
        });
    });

    // 4. Generic Fades
    gsap.utils.toArray('.gs-reveal-fade:not(.gs-reveal-img-group .gs-reveal-fade)').forEach(el => {
        gsap.fromTo(el, 
            { opacity: 0, y: 30 },
            {
                opacity: 1, y: 0, duration: 1, ease: 'power2.out',
                scrollTrigger: { trigger: el, start: 'top 85%' }
            }
        );
    });

    // ─── STICKY HEADER ───────────────────────────────
    const header = document.getElementById('site-header');
    const isHomeHeader = header && header.classList.contains('hero-mode');
    const logoText = document.querySelector('.logo-text');
    let lastScrollY = 0;

    window.addEventListener('scroll', () => {
        const currentScrollY = window.scrollY;

        // Add background / blur — only on home (transparent hero) pages
        if (isHomeHeader) {
            if (currentScrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }

        // Hide/Show logic on scroll
        if (currentScrollY > lastScrollY && currentScrollY > 300) {
            // Scrolling down - hide
            gsap.to(header, { y: '-100%', duration: 0.4, ease: 'power2.inOut' });
        } else if (currentScrollY < lastScrollY) {
            // Scrolling up - show
            gsap.to(header, { y: '0%', duration: 0.4, ease: 'power2.out' });
        }

        lastScrollY = currentScrollY;
    }, { passive: true });

    // ─── MOBILE MENU ─────────────────────────────────
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const mobileClose = document.getElementById('mobile-menu-close');
    const menuLinks = document.querySelectorAll('.mobile-nav-links a');
    const menuFooter = document.querySelector('.mobile-menu-footer');

    // Burger lines
    const line1 = document.getElementById('menu-line-1');
    const line2 = document.getElementById('menu-line-2');
    const line3 = document.getElementById('menu-line-3');

    let menuOpen = false;

    function initMenuAnimation() {
        if (mobileMenu) gsap.set(mobileMenu, { x: '100%' });
        if (mobileOverlay) gsap.set(mobileOverlay, { opacity: 0, display: 'none' });
    }

    initMenuAnimation();

    function toggleMenu() {
        if (!menuOpen) {
            // Open Menu
            menuOpen = true;
            document.body.style.overflow = 'hidden';

            // Animate Burger
            if (line2) gsap.to(line2, { opacity: 0, duration: 0.2 });
            if (line1) gsap.to(line1, { y: 7.5, rotation: 45, duration: 0.4, ease: 'power2.out' });
            if (line3) gsap.to(line3, { y: -7.5, rotation: -45, duration: 0.4, ease: 'power2.out' });

            // Animate Overlay & Menu
            if (mobileOverlay) {
                gsap.set(mobileOverlay, { display: 'block' });
                gsap.to(mobileOverlay, { opacity: 1, duration: 0.4 });
            }
            if (mobileMenu) gsap.to(mobileMenu, { x: '0%', duration: 0.6, ease: 'power3.inOut' });

            // Stagger Links
            if (menuLinks.length) {
                gsap.to(menuLinks, {
                    opacity: 1,
                    y: 0,
                    duration: 0.6,
                    stagger: 0.04,
                    delay: 0.3,
                    ease: 'power2.out'
                });
            }
            if (menuFooter) gsap.to(menuFooter, { opacity: 1, duration: 0.6, delay: 0.6 });

        } else {
            // Close Menu
            menuOpen = false;
            document.body.style.overflow = '';

            // Animate Burger
            if (line2) gsap.to(line2, { opacity: 1, duration: 0.2, delay: 0.2 });
            if (line1) gsap.to(line1, { y: 0, rotation: 0, duration: 0.4, ease: 'power2.inOut' });
            if (line3) gsap.to(line3, { y: 0, rotation: 0, duration: 0.4, ease: 'power2.inOut' });

            // Hide Links
            if (menuLinks.length) {
                gsap.to(menuLinks, { opacity: 0, y: 15, duration: 0.3 });
            }
            if (menuFooter) gsap.to(menuFooter, { opacity: 0, duration: 0.3 });

            // Hide Menu & Overlay
            if (mobileMenu) gsap.to(mobileMenu, { x: '100%', duration: 0.5, ease: 'power3.inOut', delay: 0.1 });
            if (mobileOverlay) gsap.to(mobileOverlay, { opacity: 0, duration: 0.4, delay: 0.2, onComplete: () => {
                gsap.set(mobileOverlay, { display: 'none' });
            }});
        }
    }

    if (mobileToggle) mobileToggle.addEventListener('click', toggleMenu);
    if (mobileOverlay) mobileOverlay.addEventListener('click', toggleMenu);
    if (mobileClose) mobileClose.addEventListener('click', toggleMenu);

    // Close on link click
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            if(menuOpen) toggleMenu();
        });
    });

});
