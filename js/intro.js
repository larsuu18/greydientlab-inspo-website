// Intro Loading Screen Animation
let intro = document.querySelector('.intro');
let logo = document.querySelector('.logo-header');
let logoSpan = document.querySelectorAll('.logo');

window.addEventListener('DOMContentLoaded', ()=>{

    setTimeout(()=>{

        logoSpan.forEach((span, idx)=>{
            setTimeout(()=>{
                span.classList.add('active');
            }, (idx + 1) * 400)
        });

        setTimeout(()=>{
            logoSpan.forEach((span, idx)=>{

                setTimeout(()=>{
                    span.classList.remove('active');
                    span.classList.add('fade');
                }, (idx + 1) * 50)
            })
        }, 2000);

        setTimeout(()=>{
            intro.style.top = '-100vh'
        }, 2300)

    })
})

//Fade-in Scroll

const desi1 = document.querySelectorAll(".des1");

document.addEventListener("scroll", function() {
    desi1.forEach((desi1) => {
        if (isInView(desi1)){
            desi1.classList.add("des1--visible");
        }
    });
});

function isInView(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.bottom > 0 &&
        rect.top <
        (window.innerHeight - 150 || document.documentElement.
            clientHeight - 150)
    );
}

const clientpic = document.querySelectorAll(".client-list");
const parclient = document.querySelectorAll(".par-client");


let clientpicFlag = false
let parclientFlag = false


document.addEventListener("scroll", function() {
    if(!clientpicFlag){
        clientpic.forEach((clientpic) => {
            if( !clientpic.classList.contains('client-list--visible')){
                    if (isInView(clientpic)){
                clientpic.classList.add("client-list--visible");
                } 
            }
            else{
                clientpicFlag = true
            }
        });
    }

    if(!parclientFlag){
        parclient.forEach((parclient) => {
            if( !parclient.classList.contains('par-client--visible')){
                    if (isInView(parclient)){
                parclient.classList.add("par-client--visible");
                } 
            }
            else{
                parclientFlag = true
            }
        });
    }

});

gsap.registerPlugin(ScrollTrigger);

const txtblock = gsap.utils.toArray( '.wrapper .wp-text-block' );
const vidblock = gsap.utils.toArray( '.wrapper .wp1_vid' );
const navbut = gsap.utils.toArray( '.nav-container' );

        txtblock.forEach( function( e ) {
            gsap.from( e, {
            translateY: 50,
            opacity: 0,
            duration: 1,
                scrollTrigger: {
                    trigger: e,
                    start: 'top 85%',
                    end: 'top 80%',
                    scrub: .7,
                    toggleActions: 'play none none none',
                },
            } );
        } );

        vidblock.forEach( function( e ) {
            gsap.from( e, {
            translateY: 100,
            opacity: 0,
            duration: .5,
                scrollTrigger: {
                    trigger: e,
                    start: 'top 90%',
                    end: 'top 80%',
                    scrub: 1,
                    toggleActions: 'play none none none'
                },
            } );
        } );

        navbut.forEach( function( e ) {
            gsap.from( e, {
            translateX: -100,
            opacity: 0,
            duration: .3,
                scrollTrigger: {
                    trigger: e,
                    start:  '950px 80%',
                    end: '950px 80%',
                    scrub: 1,
                    toggleActions: 'play none none none'
                },
            } );
        } );

// About Page Clip Path

function mouseMove() {
    console.log('test')
    $('.title-card-move').each(function() {
        $(this).on("mousemove", function (e) {
            let x = e.clientX;
            let y = e.clientY;

            $(this).children('.img-clip').css('clip-path', 'circle(150px at ' + x + 'px ' + y + 'px)');
        });
    });
};
mouseMove()