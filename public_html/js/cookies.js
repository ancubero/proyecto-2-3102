document.addEventListener("DOMContentLoaded", function() {
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('accept-cookies');
    const rejectBtn = document.getElementById('reject-cookies');


    if (!localStorage.getItem('solarnova_cookies')) {
        cookieBanner.style.display = 'block';
    }

    function setConsent(consent) {
        localStorage.setItem('solarnova_cookies', consent);
        cookieBanner.style.display = 'none';

        if (consent === 'accepted') {
            console.log('Cookies aceptados por el usuario');
        }
    }

    acceptBtn.addEventListener('click', () => setConsent('accepted'));
    rejectBtn.addEventListener('click', () => setConsent('rejected'));
});