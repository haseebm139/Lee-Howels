


<div class="container-fluid footer">
    <div class="container footer">
        <div class="row">
            <div class="col-md-3">
                <div class="sec2parentdiv">
                    <div class="sec2row2col">
                        <div>
                            <i class="fa-solid fa-headphones fa-2xl"style="color: white;"></i>

                         </div>
                         <div style="margin-left:10px">
                            <h6 class="text-white">Call Us 24/7</h6>
                            <span id="span" class="text-white"
                               >(1800)-88-66-991</span
                               >
                         </div>
                    </div>
            </div>
            </div>

        <div class="col-md-3 pt-4">
                <h6 class="text-white">Follow Us</h6>
                <i class="fa-brands fa-facebook fa-xl" style="color: white;"></i>
                <i class="fa-brands fa-youtube  fa-xl" style="color: white;"></i>
                <i class="fa-brands fa-instagram fa-xl" style="color: white;"></i>
        </div>

        <div class="col-md-2">

        </div>

        <div class="col-md-4 pt-5 ">
            <img src="{{ asset('assets/website/images/payment.png')}}" class="img-fluid " >
        </div>

    </div>

    <div class="row mt-5">
        <hr style="color:white">
    </div>

    <div class="row pt-5">
        <div class="col-md-4 col-lg-3">
            <img src="{{ asset('assets/website/images/footerlogo.png')}}" class="img-fluid logofooter" >
        </div>

        <div class="col-md-4 col-lg-2">
            <h5 class="text-white mb-3">Quick links</h5>
            <ul class="list-unstyled ">
                <li><a href="#" style="color: #ADADAD;">About us</a></li>
                <li><a href="#" style="color: #ADADAD;">Blog</a></li>
                <li><a href="#" style="color: #ADADAD;">Check out</a></li>
                <li><a href="#" style="color: #ADADAD;">Contact</a></li>
                <li><a href="#" style="color: #ADADAD;">Service</a></li>
            </ul>
        </div>


        <div class="col-md-4 col-lg-2">
            <h5 class="text-white mb-3">MY ACCOUNT</h5>
            <ul class="list-unstyled ">
                <li><a href="#" style="color: #ADADAD;">My Account</a></li>
                <li><a href="#" style="color: #ADADAD;">Contact</a></li>
                <li><a href="#" style="color: #ADADAD;">Shopping cart</a></li>
                <li><a href="#" style="color: #ADADAD;">Shop</a></li>
                <li><a href="#" style="color: #ADADAD;">Service</a></li>
            </ul>
        </div>


        <div class="col-md-4 col-lg-2">
            <h5 class="text-white mb-3">CATEGORIES</h5>
            <ul class="list-unstyled ">
                <li><a href="#" style="color: #ADADAD;">Fruits & Vegetables</a></li>
                <li><a href="#" style="color: #ADADAD;">Dairy Products</a></li>
                <li><a href="#" style="color: #ADADAD;">Package Foods</a></li>
                <li><a href="#" style="color: #ADADAD;">Beverage</a></li>
                <li><a href="#" style="color: #ADADAD;">Health & Wellness</a></li>
            </ul>
        </div>


        <div class="col-md-6 col-lg-3">
            <h5 class="text-white mb-3">CATEGORIES</h5>
            <p style="color: #ADADAD; font-size: 14px;">Sign up and get a voucher of worth $250.00</p>
            <div class="signup_form">
                <form action="#" class="subscribe">
                    <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                    <button type="button" class="subscribe__btn"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
        </div>


    <div class="row mt-5">
        <hr style="color:white">
    </div>


    <div class="row">
        <p class="text-center" style="color: #F2F2F2;font-family: Jost;
        font-size: 15px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;">Fit Geek ©Copyright 2023 All rights reserved.</p>
    </div>

    </div>
    </div>
</div>

<script src="{{ asset('assets/website/js/jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('assets/website/js/popper.js') }}"></script>
<script src="{{ asset('assets/website/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/website/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/website/js/main.js') }}"></script>
<script>



let valueDisplays = document.querySelectorAll(".num");
let interval =  3000;

valueDisplays.forEach((valueDisplay) => {
let startValue = 0;
let endValue = parseInt(valueDisplay.getAttribute("data-val"));

let duration = Math.floor(interval / endValue);
 let counter = setInterval(function  ( ) {

    startValue +=1;

    if (endValue== 0) {
        startValue -= 1;
    }
    valueDisplay.textContent=startValue+"K+";
    if (startValue== endValue) {
        clearInterval(counter);
    }


 },duration,);
}) ;

</script>

<script>
document.addEventListener('DOMContentLoaded', function () {

    // Get the current page URL
    var url = window.location.href;

    // Get the navigation buttons
    var navButtons = document.querySelectorAll('.nav-link');
    var defaultActiveLink = document.querySelector('.navbar-nav a.nav-link[href="index.html"]');

    // Loop through each navigation button
    navButtons.forEach(function (button) {
        // Compare the button's href with the current page URL
        if (url.includes(button.firstElementChild.getAttribute('href'))) {
            // Add the 'active' class to the matching button
            button.classList.add('active');
        }
    });
});
</script>


<script>
document.addEventListener('DOMContentLoaded', function () {
    // Get the current page URL
    var url = window.location.href;

    // Get the navigation links
    var navLinks = document.querySelectorAll('.nav-link');

    // Default active link (e.g., Home)
    var defaultActiveLink = document.querySelector('.navbar-nav a.nav-link[href="index.html"]');

    // Loop through each navigation link
    navLinks.forEach(function (link) {
        // Compare the link's href with the current page URL
        if (url.includes(link.getAttribute('href'))) {
            // Add the 'active' class to the matching link
            link.classList.add('active');
        }
    });

    // If no link is active (e.g., on a page without a corresponding link), set the default active link
    if (!document.querySelector('.navbar-nav a.nav-link.active') && defaultActiveLink) {
        defaultActiveLink.classList.add('active');
    }
});
</script>
