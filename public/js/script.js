const swiper = new Swiper(".swiper", {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 40,
    autoplay: {
        delay: 3000,
    },
});

const swiper1 = new Swiper(".swiper1", {
    direction: 'vertical',
    loop: true,
    slidesPerView: 2,
    spaceBetween: 10,
    autoplay: {
        delay: 3000,
    },
});

const swiper2 = new Swiper(".swiper2", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 20,
    autoplay: {
        delay: 3000,
    },
});

const swiper3 = new Swiper(".swiper3", {
    loop: true,
    slidesPerView: 4,
    spaceBetween: 20,
    autoplay: {
        delay: 3000,
    },
    navigation: {
        nextEl: ".swiper-button-next1",
        prevEl: ".swiper-button-prev1",
    },
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 25,
        },
        500: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        350: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
    },
});

const swiper4 = new Swiper(".swiper4", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 50,
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 1,
            spaceBetween: 50,
        },
        700: {
            slidesPerView: 1,
            spaceBetween: 50,
        },
        500: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        350: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
    },
})

//
document.getElementById('login-customer').addEventListener('click', function () {
    // Hiển thị tab-customer-login và ẩn tab-employer-login
    document.querySelector('.tab-customer-login').classList.remove('anDangNhap');
    document.querySelector('.tab-employer-login').classList.add('anDangNhap');
});

document.getElementById('login-employer').addEventListener('click', function () {
    // Hiển thị tab-employer-login và ẩn tab-customer-login
    document.querySelector('.tab-employer-login').classList.remove('anDangNhap');
    document.querySelector('.tab-customer-login').classList.add('anDangNhap');
});