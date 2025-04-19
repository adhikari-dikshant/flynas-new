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