<?php

$title = "ABOUT US | FLYNAS";
$desc = "";
$canonical = "";
$key = "";

include('header.php'); ?>

<section class="about-hero d-flex justify-content-center align-items-center">
    <video autoplay muted loop id="myVideo" class="img-fluid">
        <source src="assets/vid/about.mp4" type="video/webm">
    </video>

    <div class="overlay"></div>

    <div class="container z-3">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="text-center main-head">
                    <span class="cursor-hover">Beyond Code. Beyond Design.</span>
                    <br class="d-none d-md-block">
                    <span class="cursor-hover">We Build Digital Experiences.</span>
                </h1>

                <h4 class="text-center mt-4">
                    Where Creativity Meets Cutting-Edge Tech to Power Your Brand.
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="about py-5 my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 text-center">
                <p class="sub">ABOUT US</p>
                <p class="about-text">
                    FLYNAS IS NOT JUST AN AIRLINE, WE ARE YOUR PARTNER ON EVERY JOURNEY TAKING YOU HIGHER FURTHER AND CLOSER TO YOUR DREAMS.
                </p>

                <img src="assets/img/plane1.png" class="img-fluid mt-md-5 pt-5" alt="">
            </div>
        </div>
    </div>
</section>

<!-- <script>
    // About Text Reveal Animation
    const aboutText = document.querySelector('.about-text');

    if (aboutText) {
        const splitText = new SplitType(aboutText, {
            types: 'chars, words, lines'
        });

        gsap.timeline({
            scrollTrigger: {
                trigger: '.about-text',
                start: 'top 70%',
                end: 'bottom 60%',
                scrub: 1
            }
        }).fromTo(splitText.chars, {
            opacity: 0,
            y: 20,
            color: '#ccc'
        }, {
            opacity: 1,
            y: 0,
            color: '#212121',
            stagger: 0.03,
            duration: 1.2,
            ease: 'power2.out'
        });
    }
</script> -->


<?php include('footer.php'); ?>