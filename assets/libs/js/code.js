const swiper_promotions = new Swiper('.swiper-promotions', {
    // Optional parameters
    loop: true,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        hideOnClick: true, // Oculta flechas al hacer clic, pero no en móvil
    },

    // Autoplay
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
});

const swiper_featured = new Swiper('.swiper-featured', {
    loop: true,
    slidesPerView: 6,
    spaceBetween: 20,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        hideOnClick: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 6,
        }
    }
});
jQuery(document).ready(function ($) {
    $("header ul").addClass("list-unstyled d-flex flex-row m-0 px-0")
    $("header ul li").addClass("list-unstyled d-flex flex-row px-3")
    const menuLinks = $("header ul li a");
   menuLinks.addClass("btn btn-menu")
    const actualPath = window.location.pathname;
    menuLinks.each(function () {
        if ($(this).text().trim().toLowerCase() === "carrito") {
            $(this).html('<i class="fa-solid fa-cart-shopping"></i>');
        }
        if ($(this).text().trim().toLowerCase() === "mi cuenta") {
            $(this).html('<i class="fa-solid fa-user"></i>');
        }
        const link = $(this).attr('href');
        // Compara solo el path, ignorando el dominio
        if (link === actualPath || link === window.location.href) {
            $(this).addClass('active');
        }
    });
    $(".product").addClass("card-body d-flex flex-column")
    $(".product a").addClass("btn")

    setTimeout(function() {
        $("#loader").remove();
    }, 500);
});