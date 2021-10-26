/* ================ Call owl carousel ================ */
$(document).ready(function() {
    /* ==== Banner_section === */
    $('.banner_section').owlCarousel({
        items: 1,
        lazyLoad: true,
        loop: false,
        margin: 0,
        dots: true,
        autoplay: true
    });
    /* ==== seller_section === */
    $('.seller_section').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    /* ==== popular_section === */
    $('.popular_section').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
    /* ==== deal_section === */
    $('.deal-left_section').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
    /* ==== arrival_section === */
    $('.arrival_section').owlCarousel({
        loop: false,
        margin: 10,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
    /* ==== recent-add_section === */
    $('.recent-add').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }
    });
    /* === Slide_brand ==== */
    $('.brand_content').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    /* ==== Slider_content === */
    $('.slider__content').owlCarousel({
        center: true,
        loop: true,
        margin: 100,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    /* === Slide_brand ==== */
    $('.brand_content').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
});