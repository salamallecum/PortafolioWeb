/*===== MENU SHOW =====*/ 
const showMenu = (toggleId, navId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

    if(toggle && nav){
        toggle.addEventListener('click', ()=>{
            nav.classList.toggle('show')
        })
    }
}
showMenu('nav-toggle','nav-menu')

/*===== ACTIVE AND REMOVE MENU =====*/
const navLink = document.querySelectorAll('.nav__link');   

function linkAction(){
  /*Active link*/
  navLink.forEach(n => n.classList.remove('active'));
  this.classList.add('active');
  
  /*Remove menu mobile*/
  const navMenu = document.getElementById('nav-menu')
  navMenu.classList.remove('show')
}
navLink.forEach(n => n.addEventListener('click', linkAction));

/*===== SCROLL REVEAL ANIMATION =====*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '80px',
    duration: 2000,
    reset: true
});

/*SCROLL HOME*/
sr.reveal('.home__titulo',{}); 
sr.reveal('.boton',{delay: 200}); 
sr.reveal('.home__img',{delay: 400}); 
sr.reveal('.home__social-icon',{ interval: 200}); 

/*SCROLL PERFIL PROFESIONAL*/
sr.reveal('.about__img',{}); 
sr.reveal('.about__subtitle',{delay: 400}); 
sr.reveal('.about__text',{delay: 400}); 

/*SCROLL CONOCIMIENTOS*/
sr.reveal('.skills__text',{}); 
sr.reveal('.accordion-item',{}); 
sr.reveal('.skills__img',{delay: 600});

/*SCROLL EXP LABORAL*/
sr.reveal('.card',{}); 

/*SCROLL MIS PROYECTOS*/
sr.reveal('.work__text',{}); 
sr.reveal('.project-wrapper',{}); 

/*SCROLL CONTACTO*/
sr.reveal('.form-control',{}); 
sr.reveal('.invitacionEnvInfo',{}); 
sr.reveal('.g-recaptcha',{}); 
sr.reveal('.btn_enviarInfoContacto',{}); 


