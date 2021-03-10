// captura o evento de scroll da pagina para fixar a barra de menu
var mainNav = document.querySelector('.main-nav');
window.addEventListener('scroll', function (e) {
    // console.log(window.scrollY);
    if(window.scrollY > 50){
        // console.log('fixa menu');
        mainNav.classList.add('fixed-top');
        mainNav.classList.add('scroll-nav')
    } else {
        mainNav.classList.remove('fixed-top');
        mainNav.classList.remove('scroll-nav')
    }
});
// armazena os itens em variaveis para fazer a compensação no momento do clieque no botão do menu responsivo
// var bodyScroll = document.querySelector('body');
var openMenuResponsive = document.querySelector('.main-responsive__btn-menu');
var openBodyResponsive = document.querySelector(".main-responsive__body");
// captura o click event do menu responsivo
if(openBodyResponsive){
    openMenuResponsive.addEventListener("click", function (e) {
        // adiciona a classe ao menu responsivo
        this.classList.toggle('main-responsive__btn-menu--open');
        openBodyResponsive.classList.toggle('main-responsive__body--open');

        e.preventDefault();
    })
}

//
var closeMenuResponsiveBody = document.querySelector('.main-responsive__close-menu');
if(closeMenuResponsiveBody){
    closeMenuResponsiveBody.addEventListener('click', function(e){
        openMenuResponsive.classList.toggle('main-responsive__btn-menu--open');
        openBodyResponsive.classList.remove('main-responsive__body--open');
        e.preventDefault()
    })
}

// mask
var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

$('.telefone').mask(SPMaskBehavior, spOptions);
$('.dinheiro').mask('000.000.000.000.000,00', {reverse: true});

// swiper form
var swiperForm = new Swiper ('.slider-clientes', {
    slidesPerView: 4,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// swiper form
var swiperDepoimentos = new Swiper ('.slider-depoimentos', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});