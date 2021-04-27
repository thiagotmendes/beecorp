wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       true,       // default
        live:         true        // default
    }
)
wow.init()

// captura o evento de scroll da pagina para fixar a barra de menu
var mainNav = document.querySelector('.main-nav')
window.addEventListener('scroll', function (e) {
    // console.log(window.scrollY)
    if(window.scrollY > 50){
        // console.log('fixa menu')
        mainNav.classList.add('fixed-top')
        mainNav.classList.add('scroll-nav-top')
    } else {
        mainNav.classList.remove('fixed-top')
        mainNav.classList.remove('scroll-nav-top')
    }
})


// armazena os itens em variaveis para fazer a compensação no momento do clieque no botão do menu responsivo
// var bodyScroll = document.querySelector('body')
var openMenuResponsive = document.querySelector('.main-responsive__btn-menu')
var openBodyResponsive = document.querySelector(".main-responsive__body")
var bodySite = document.body
// captura o click event do menu responsivo
if(openBodyResponsive){
    openMenuResponsive.addEventListener("click", function (e) {
        // adiciona a classe ao menu responsivo
        this.classList.toggle('main-responsive__btn-menu--open')
        openBodyResponsive.classList.toggle('main-responsive__body--open')
        //
        bodySite.classList.toggle('scroll-block')
        e.preventDefault()
    })
}

//
var closeMenuResponsiveBody = document.querySelector('.main-responsive__close-menu')
if(closeMenuResponsiveBody){
    closeMenuResponsiveBody.addEventListener('click', function(e){
        openMenuResponsive.classList.toggle('main-responsive__btn-menu--open')
        openBodyResponsive.classList.remove('main-responsive__body--open')
        e.preventDefault()
    })
}

// mask
var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009'
    },
    spOptions = {
        onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options)
        }
    }

$('.telefone').mask(SPMaskBehavior, spOptions)
$('.dinheiro').mask('000.000.000.000.000,00', {reverse: true});

// swiper form
function settingSlider(countSlider){
    if(countSlider > 1){
        var settingsSlider = {
            loop: true,
            autoplay: {
                delay: 6500,
                disableOnInteraction: true,
            },
        }
    }

    return settingsSlider;
}
let qtdSliders = document.querySelectorAll('.main-banner__principal ');

let bannerSlider = new Swiper('.banner-slider', settingSlider(qtdSliders.length));

// swiper form
var swiperForm = new Swiper ('.slider-clientes', {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    }
    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    // },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
})

// swiper form
var swiperCases = new Swiper ('.projetos-slider', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 5,
            spaceBetween: 50,
        },
    }
    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    // },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
})

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
})
//
let colAnimate = document.querySelectorAll('.main-animation__col')
//
colAnimate.forEach(function(element, index){
    setTimeout(function(){
        addEfect(element)
    }, 3000)
})
//
function addEfect(element)
{
    let verify = setInterval(function (){
        if(element.style.visibility == "visible"){
            let titleColumEvent = element.getElementsByClassName('main-animation__col__col-title')[0]
            titleColumEvent.classList.add('main-animation__col__col-title--active')
            clearInterval(verify)
        }
    }, 1000)
}

// Modal
let modalOpen = document.querySelectorAll('.main-modal')
let btnModalOpen = document.querySelectorAll('.open-modal')
let btnCloseModal = document.querySelectorAll('.main-modal__close')
//
btnModalOpen.forEach(function (element, index) {
    element.addEventListener('click', function (e) {
        var dataModal = this.dataset.modal
        openModal(dataModal)
        e.preventDefault()
    })
})
//
function openModal(dataModal)
{
    modalOpen.forEach(function (elements, index) {
        var modalName = elements.dataset.modalname
        if(dataModal === modalName){
            return elements.classList.toggle('main-modal--active')
        }
    })
    return null
}
//
btnCloseModal.forEach(function (element, index) {
    element.addEventListener('click', function (e) {
        var modalClose = this.dataset.modalclose
        openModal(modalClose)
        e.preventDefault()
    })
})

//
document.querySelector('.global-search').addEventListener('click', function (e) {
    document.querySelector('.dropdown-search').classList.toggle('fadeInDown')
});

let btnSuspenso = document.querySelector('.btn-suspenso');
let boxBtnSuspenso = document.querySelector('.btn-suspenso__box');

btnSuspenso.addEventListener('click', function (e){
    btnSuspenso.classList.toggle('btn-suspenso--active')
    boxBtnSuspenso.classList.toggle('btn-suspenso__box--active');
    e.preventDefault();
});