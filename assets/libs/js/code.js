const swiper_promotions = new Swiper('.swiper-promotions', {
    // Optional parameters
    loop: true, // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', hideOnClick: true, // Oculta flechas al hacer clic, pero no en móvil
    },

    // Autoplay
    autoplay: {
        delay: 3000, disableOnInteraction: false,
    },
});

const swiper_featured = new Swiper('.swiper-featured', {
    loop: true, slidesPerView: 6, spaceBetween: 20, navigation: {
        nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', hideOnClick: true,
    }, autoplay: {
        delay: 3000, disableOnInteraction: false,
    }, breakpoints: {
        0: {
            slidesPerView: 2,
        }, 769: {
            slidesPerView: 3,
        }, 1024: {
            slidesPerView: 4,
        }, 1200: {
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
        if ($(this).text().trim().toLowerCase() === 'inicio') {
            $(this).html('<i class="fa-solid fa-house"></i> ' + $(this).text());
        }
        if ($(this).text().trim().toLowerCase() === 'tienda') {
            $(this).html('<i class="fa-solid fa-bag-shopping"></i> ' + $(this).text());
        }
        const link = $(this).attr('href');
        // Compara solo el path, ignorando el dominio
        if (link === actualPath || link === window.location.href) {
            $(this).addClass('active');
        }
        $(".product img").addClass('rounded-3')
    });
    $('.product').addClass('product-equal-height d-flex flex-column justify-content-between');
    $(".onsale").remove();
    $('.product .woocommerce-LoopProduct-link').removeClass().addClass("d-flex flex-column align-content-start" + " align-items-start btn text-start px-0")
    $(".product h2").each(function () {
        const $h2 = $(this);
        const $h3 = $("<h3>").html($h2.html()).attr("class", $h2.attr("class"));
        $h2.replaceWith($h3);
    });
    $(".add_to_cart_button").each(function () {
        $(this).html('<i class="fa-solid fa-cart-shopping"></i> ' + $(this).text());
        $(this).removeClass().addClass("btn btn-outline-red")
    });
    $("footer ul").removeClass().addClass("d-flex gap-1 x-0 p-0 m-0")
    $("footer ul a").addClass("btn btn-footer")
    const footerLinks = $("footer ul li a");
    footerLinks.each(function () {
        if ($(this).text().trim().toLowerCase() === 'inicio') {
            $(this).html('<i class="fa-solid fa-house"></i> ' + $(this).text());
        }
        if ($(this).text().trim().toLowerCase() === 'tienda') {
            $(this).html('<i class="fa-solid fa-bag-shopping"></i> ' + $(this).text());
        }
        const link = $(this).attr('href');
        if (link === actualPath || link === window.location.href) {
            $(this).addClass('active');
        }
    });
    setTimeout(function () {
        $("#loader").remove();
    }, 500);
});