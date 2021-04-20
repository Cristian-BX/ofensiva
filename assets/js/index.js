const menu = document.querySelector('#sidebar');

menu.addEventListener('click', function (){
   document.getElementById('sidebar').classList.toggle('active');
});

window.sr = ScrollReveal();

    sr.reveal('.logo_ofsv', {
        duration: 4000,
        rotate: {
            x: 260,
            y: 1
        }
    })
    sr.reveal('.logo', {
        duration: 4000,
        rotate: {
            x: 1,
            y: 180
        }
    })
    sr.reveal('.home', {
        duration: 1000,
    })
    sr.reveal('.news h1, .programs h1, .about h1 .rrss', {
        duration: 3000,
        origin: 'bottom',
        distance: '-300px'
    })
    sr.reveal('.only-new h1.title-section img.img-fluid', {
        duration: 4000,
        origin: 'top',
        distance: '-200px'
    })
    sr.reveal('.col-12 div.body, .prev-next-posts, .btn-ofsv', {
        duration: 4000,
        origin: 'top',
        distance: '-50px'
    })  
    sr.reveal('.programs div', {
        duration: 4000,
        origin: 'top',
        distance: '-50px'
    })   
    sr.reveal('.about .col-md-6', {
        duration: 6000,
        origin: 'top',
        distance: '-20px'
    })
