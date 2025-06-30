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

// Swiper featured
const swiper_featured = new Swiper('.swiper-featured', {
    loop: true, slidesPerView: 6, spaceBetween: 20, navigation: {
        nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', hideOnClick: true,
    }, autoplay: {
        delay: 3000, disableOnInteraction: true,
    }, breakpoints: {
        0: {slidesPerView: 2}, 769: {slidesPerView: 3}, 1024: {slidesPerView: 4}, 1200: {slidesPerView: 6},
    }
});
// Swiper products
const swiper_products = new Swiper('.swiper-products', {
    loop: true, slidesPerView: 6, spaceBetween: 20, navigation: {
        nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', hideOnClick: true,
    }, autoplay: {
        delay: 3000, disableOnInteraction: true,
    }, breakpoints: {
        0: {slidesPerView: 2}, 769: {slidesPerView: 3}, 1024: {slidesPerView: 4}, 1200: {slidesPerView: 6},
    }
});
jQuery(document).ready(function ($) {
    $('.swiper-featured').hover(function () {
        swiper_featured.autoplay.stop();
    }, function () {
        swiper_featured.autoplay.start();
    });
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
        $('.wc-block-grid__product').addClass('product-equal-height d-flex flex-column justify-content-between');
        $(".onsale").remove();
        $('.wc-block-grid__product .woocommerce-LoopProduct-link').removeClass().addClass("d-flex flex-column align-content-start" + " align-items-start btn text-start px-0")
        $(".wc-block-grid__product  .wc-block-grid__product-title").each(function () {
            const $h2 = $(this);
            const $h3 = $("<h3>").html($h2.html()).attr("class", $h2.attr("class"));
            $h2.replaceWith($h3);
        });
        //TODO: continuar editando sugerencias de productos de carrito
        $(".wc-block-grid__product  .wc-block-grid__product-title").removeClass().addClass("text-dark")
        $(".add_to_cart_button").each(function () {
            $(this).html('<i class="fa-solid fa-cart-shopping"></i> ' + $(this).text());
            $(this).removeClass().addClass("btn btn-outline-red")
        });
        $("img").addClass("rounded-2")
        $(".wc-block-components-checkout-place-order-button").removeClass().addClass("btn bg-green text-bg");
        $(".wc-block-cart__submit-container a").removeClass().addClass("btn bg-green text-bg w-100");
    }, 300);
    const producto = $("#producto .entry-title").text()
    if (producto !== '') {
        // Modifica el diseño de la página de producto único dentro del ID 'producto'
        const title = $("#producto .entry-title").text();
        $("#producto .entry-title").remove();
        const gallery = $("#producto .row").find(".woocommerce-product-gallery");
        const content = $("#producto .row .woocommerce-tabs").find(".entry-content");
        const additional = $("#producto .row .summary");
        $("#producto .row").append(
            "<div id='gallery' class='col-12 col-sm-6'></div>" +
            "<div id='content-product' class='col-12 col-sm-6'></div>"
        );
        $('#gallery').append(gallery);
        $("#gallery .woocommerce-product-gallery").addClass("position-relative");
        $("#content-product").append(`<h1>${title}</h1>`).append(content).append(additional);
        $("#producto .woocommerce").remove()
        const image = $('#gallery .wp-post-image');
        if (image.length) {
            const highResSrc = image.attr('data-large_image');
            if (highResSrc) {
                image.attr('src', highResSrc);
            }
        }
        const price = $('#content-product .summary').find(".price").eq(0).find("bdi").text();
        const prices = price.match(/\$\d+(\.\d+)?/g) || [];
        const originalPrice = prices[0] || '';
        const currentPrice = prices[1] || '';
        if (currentPrice) {
            $(".wapf--inner").find("div").eq(0).empty().append(
                `<span>Total del producto</span> <span class='d-flex gap-1'><span class='text-line text-mostaza'>${originalPrice}</span><span class='price'>${currentPrice}</span></span>`
            );
        } else {
            $(".wapf--inner").find("div").eq(0).empty().append(
                `<span>Total del producto</span> <span class='price'>${originalPrice}</span>`
            );
        }
        $('.summary').find(".price").eq(0).remove();
        $(".wapf--inner").find("div").eq(0).removeClass().addClass("w-100 d-flex justify-content-between");
        $("#content-product .product_meta").remove();
        $("#content-product .single_add_to_cart_button").removeClass().addClass("single_add_to_cart_button btn btn-outline-red");
        setTimeout(function () {
            $("#gallery .woocommerce-product-gallery__trigger").addClass("position-absolute lupa z-1");
            $("#gallery .woocommerce-product-gallery .flex-control-nav").addClass('d-flex py-2 justify-content-start gap-1 m-0 p-0');
        }, 500);
    }
    setTimeout(function () {
        $("#loader").remove();
    }, 500);
});