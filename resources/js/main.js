import $ from 'jquery';
window.$ = window.jQuery = $;

// header
document.addEventListener("DOMContentLoaded", () => {
    const revealerNav = window.revealer({
        revealElementSelector: ".nav-js",
        options: {
            anchorSelector: ".nav-btn-js",
        },
    });

    const actionBtn = document.querySelector(".nav-btn-js");
    actionBtn.addEventListener("click", () => {
        if (!revealerNav.isRevealed()) {
            revealerNav.reveal();
            actionBtn.setAttribute("data-open", true);
        } else {
            revealerNav.hide();
            actionBtn.setAttribute("data-open", false);
        }
    });
});


// slider
$(document).ready(function () {
    var index = 1;
    $('#prev').click(function () {
        if (index == 0) {
            $('.card').eq(0).removeClass('left').addClass('right');
            $('.card').eq(1).removeClass('right').addClass('front');
            $('.card').eq(2).removeClass('front').addClass('left');
            index = 2;
        } else if (index == 1) {

            $('.card').eq(0).removeClass('front').addClass('left');
            $('.card').eq(1).removeClass('left').addClass('right');
            $('.card').eq(2).removeClass('right').addClass('front');

            index = 0;

        } else if (index == 2) {

            $('.card').eq(0).removeClass('right').addClass('front');
            $('.card').eq(1).removeClass('front').addClass('left');
            $('.card').eq(2).removeClass('left').addClass('right');

            index = 1;

        }
        ;

    });

    $('#next').click(function () {

        if (index == 0) {

            $('.card').eq(0).removeClass('left').addClass('front');
            $('.card').eq(1).removeClass('right').addClass('left');
            $('.card').eq(2).removeClass('front').addClass('right');

            index = 1;

        } else if (index == 1) {

            $('.card').eq(0).removeClass('front').addClass('right');
            $('.card').eq(1).removeClass('left').addClass('front');
            $('.card').eq(2).removeClass('right').addClass('left');

            index = 2;

        } else if (index == 2) {
            $('.card').eq(0).removeClass('right').addClass('left');
            $('.card').eq(1).removeClass('front').addClass('right');
            $('.card').eq(2).removeClass('left').addClass('front');

            index = 0;
        };
    });
});
