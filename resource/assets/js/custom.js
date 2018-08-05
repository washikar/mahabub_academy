$(document).ready(function () {
    // alart massage fade out js
    $(".alartmassage p").delay(1000).fadeOut();
    // login form email validaton js start
    function checkEmailAddress() {
        var parttern = new RegExp(/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i);
        if (parttern.test($('#email').val())) {
            $('#emailtext').text('');
        }
        else {
            $('#emailtext').text('Email Address Is Invalid');
        }
    }

    $('#email').blur(function () {
        checkEmailAddress();
    });
    $('#email').keyup(function () {
        checkEmailAddress();
    });
    $('#email').mousemove(function () {
        $('#emailtext').text('');
    });

    $.ajax({
        url: "www.mydummyurl.com",
        global: false,
    });
    new WOW().init();
    $('.team_slid').slick({
        slidesToShow: 5,
        autoplay: true,
        arrows: true,
        nextArrow: '<i class="fa fa-chevron-left left_arrow"></i>',
        prevArrow: '<i class="fa fa-chevron-right right_arrow"></i>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});


//Form Validation start


function validation() {
    var fname = document.getElementById('first_name');
    var lname = document.getElementById('last_name');
    var email = document.getElementById('em');
    var remail = document.getElementById('rem');
    var male = document.getElementById('ml').checked;
    var female = document.getElementById('fml').checked;

    if (fname.value == '') {
        document.getElementById('a').innerHTML = 'Please input your First name';
        fname.focus();
        return false;
    }
    else {
        document.getElementById('a').innerHTML = '';
    }


    if (lname.value == '') {
        document.getElementById('b').innerHTML = 'Please input your Last name';
        lname.focus();
        return false;
    }
    else {
        document.getElementById('b').innerHTML = '';
    }


    if (email.value == '') {
        document.getElementById('c').innerHTML = 'Please enter your E-mail';
        email.focus();
        return false;
    }
    else {
        document.getElementById('c').innerHTML = '';
    }


    if (remail.value == '') {
        document.getElementById('d').innerHTML = 'Re-enter your E-mail';
        remail.focus();
        return false;
    }
    else {
        document.getElementById('d').innerHTML = '';
    }

    if (email.value != remail.value) {
        document.getElementById('d').innerHTML = 'Not match your email';
        remail.focus();
        return false;
    }

    if (male == false && female == false) {
        document.getElementById('e').innerHTML = 'Select gender';
        return false;
    }

}

//PopUp starts

jQuery(function () {
    jQuery("a.bla-1").YouTubePopUp();
    jQuery("a.bla-2").YouTubePopUp({autoplay: 0}); // Disable autoplay
});


// CountDown Time

function countdown() {
    var now = new Date();
    var eventDate = new Date(2017, 11, 25);

    var currentTime = now.getTime();
    var eventTime = eventDate.getTime();

    var remTime = eventTime - currentTime;

    var s = Math.floor(remTime / 1000);
    var m = Math.floor(s / 60);
    var h = Math.floor(m / 60);
    var d = Math.floor(h / 24);

    h %= 24;
    m %= 60;
    s %= 60;

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    document.getElementById("days").textContent = d;
    document.getElementById("days").innerText = d;

    document.getElementById("hours").textContent = h;
    document.getElementById("minutes").textContent = m;
    document.getElementById("second").textContent = s;

    setTimeout(countdown, 1000);
}

countdown();

















