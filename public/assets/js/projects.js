new Swiper(".project-swiper", {
    loop: true,
    lazy: true,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

$(function () {
    $('.work-content').on('mfpOpen', function () {
        const modal = $($.magnificPopup.instance.content);
        modal.find('a').attr("target", "_blank");
    });
});