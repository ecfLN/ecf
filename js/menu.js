let toggler = document.querySelector('.toggler');
let body = document.querySelector('body');

toggler.addEventListener('click', function() {
    body.classList.toggle('open');
})