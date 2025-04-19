const lenis = new Lenis({
    autoRaf: true
});

document.addEventListener('DOMContentLoaded', function () {
    const splashScreen = document.querySelector('.splash-screen');
    const splashVideo = splashScreen.querySelector('video');
    splashVideo.addEventListener('ended', hideSplashScreen);
    setTimeout(hideSplashScreen, 5000); // 5 seconds

    function hideSplashScreen() {
        splashScreen.classList.add('fade-out');
        setTimeout(() => {
            splashScreen.style.display = 'none';
        }, 500);
    }

    document.body.style.overflow = 'hidden';

    splashVideo.addEventListener('ended', function () {
        document.body.style.overflow = '';
    });
});


// Text and plane reveal animation - using existing Lenis instance
document.addEventListener('DOMContentLoaded', function () {
    // Initialize SplitType for the about text
    const aboutText = new SplitType('.about-text', {
        types: 'words,chars',
        tagName: 'span'
    });

    // Register ScrollTrigger with GSAP
    gsap.registerPlugin(ScrollTrigger);

    // Set initial states for animations
    gsap.set(aboutText.chars, {
        opacity: 0,
        y: 50
    });

    gsap.set('.img-fluid.mt-md-5.pt-5', {
        x: '-100%',
        opacity: 0
    });

    // Create the text reveal animation
    const textReveal = gsap.timeline({
        scrollTrigger: {
            trigger: '.about-text',
            start: 'top 80%',
            end: 'top 30%',
            toggleActions: 'play none none none',
            markers: false
        }
    });

    textReveal.to(aboutText.chars, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        stagger: 0.02,
        ease: "power3.out"
    });

    // Create the plane reveal animation
    const planeReveal = gsap.timeline({
        scrollTrigger: {
            trigger: '.about-text',
            start: 'top 30%',
            end: 'top 0%',
            toggleActions: 'play none none none',
            markers: false
        }
    });

    planeReveal.to('.img-fluid.mt-md-5.pt-5', {
        x: '0%',
        opacity: 1,
        duration: 1.2,
        ease: "power2.out"
    });

    // Optional: Add some parallax effect to the plane on scroll
    gsap.to('.img-fluid.mt-md-5.pt-5', {
        scrollTrigger: {
            trigger: '.img-fluid.mt-md-5.pt-5',
            start: 'top bottom',
            end: 'bottom top',
            scrub: 1
        },
        xPercent: 10,
        ease: "none"
    });
});