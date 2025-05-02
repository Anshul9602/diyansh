<style>
    @media (max-width: 767px) {
        

        .tc {
            text-align: start;
        }
    }

    .social_icon li {
        margin-right: 10px;
        width: 50px;
        height: 50px;
        border-radius: 100px;
        background: #00243a;
        justify-content: center;
        align-items: center;
        display: flex;
    }

    .social_icon li .fa {
        color: #ca952f;
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .social_icon li:hover .fa {
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2);

    }

    hr {
        border-top: 2px solid;
        opacity: 1;
    }

    .formPopup {
        background: rgba(0, 0, 0, 0.7);
        width: 100%;
        height: 100vh;
        display: none;
        position: fixed;
        left: 50%;
        top: 0%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 4;
    }

    .formContainer {
        max-width: 700px;
        padding: 20px;
        background-color: #f26522;
    }

    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .formContainer .btn {
        padding: 12px 20px;
        border: none;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
    }

    .formContainer .cancel {
        width: 50px;
    }

    .formContainer .btn:hover,
    .openButton:hover {
        opacity: 1;
    }

    .media .media-icon {
        margin-right: 20px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px solid #116232;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;
        color: #116232;
        text-align: center;
        background-color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        position: relative;
    }

    .media .media-icon .fa {
        font-size: 16px;
        color: #116232;
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .media .media-body p {
        font-size: 16px;
     
        margin-bottom: 5px;
        color: #fff;
    }

    .f-14 {
        font-size: 14px !important;
    }

    .media .media-body .small {
        font-size: 14px;
        font-weight: 400;
    }

    .media .media-body a {
        text-decoration: none;
        -webkit-transition: all 0.3s;
        -o-transition: all 0.3s;
        transition: all 0.3s;

        background: none !important;
        outline: none !important;
        color: #fff !important;
        text-decoration: none;
    }

    .media .media-body a:hover {
        color: #03878c !important;
    }

    .footer-get-intouch {
        font-size: 35px !important;
        line-height: 42px !important;
        font-weight: 300 !important;
        font-family: var(--font-lato);
        color: #fff;
        margin: 0;
    }

    .media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
    }

    @media (max-width: 767px) {
        .ficonslist{
            justify-content: start;
        }
        
    }
</style>


<footer class="footer-no-negative wf-section">
    <div>
        <div class="container">
            <div class="  footer-row-1 row tc m-0" style="    justify-content: space-around;">
                <div class="col-md-3  row mb-3 mt-3">

                    <a href="/" aria-current="page" class="col-12 w-inline-block w--current">
                        <img src="assets/img/logof.png" alt="" style="width:150px;">
                    </a>
                    <p class="col-12 mt-3 text-white" style="font-size: 14px;">Divyansh Group is a premier real estate development company based in the Delhi NCR region,
                        renowned for its innovative approach and unwavering commitment to quality. </p>
                    <div>
                        <ul class="d-flex justify-content-start align-items-center list-unstyled mt-3 social_icon mobjs">
                            <li class="">
                                <a href="" aria-label="LinkedIn: linkedin.com" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>

                            <li class="wp-social-link wp-social-link-facebook wp-block-social-link">
                                <a href="" aria-label="Facebook: facebook.com" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>

                            <li class="wp-social-link wp-social-link-instagram wp-block-social-link">
                                <a href="https://www.instagram.com/divyanshindia2025" aria-label="Instagram: instagram.com" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>


                            <li class="wp-social-link wp-social-link-youtube wp-block-social-link">
                                <a href="" aria-label="YouTube: youtube.com" rel="noopener nofollow" target="_blank" class="wp-block-social-link-anchor">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class=" row col-md-9 mt-md-3 mb-md-3 mb-0 mt-0 " style="    justify-content: space-around;">
                    <div class="col-lg-3 col-md-6 col-6  mt-md-2 mt-3  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">About Us </div>
                        </div>
                        <div class="col-footer">

                            <a href="<?php echo base_url('About_Us'); ?>" class="footer-links mt-16">Who We Are</a>
                            <a href="<?php echo base_url('About_Us#team'); ?>" class="footer-links mt-16">Our Management</a>
                           
                            <a href="<?php echo base_url('About_Us#core'); ?>" class="footer-links mt-16">Our Philosophy</a>
                            



                        </div>
                    </div>
                   
                    <div class="col-lg-3 col-md-6 col-6  mt-md-2 mt-3 tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Projects</div>
                        </div>
                        <div class="col-footer">
                            <a href="<?php echo base_url(''); ?>" class="footer-links mt-16">Residential</a>
                            <a href="<?php echo base_url(''); ?>" class="footer-links mt-16">Commercial                            </a>
                            <a href="<?php echo base_url(''); ?>" class="footer-links mt-16">Retail
                            </a>
                            



                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-12 mt-md-2 mt-3  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Customer Support</div>
                        </div>
                        <div class="col-footer">
                        <a href="<?php echo base_url(''); ?>" class="footer-links mt-16">Craft Your Career</a>
                            
                            <a href="<?php echo base_url('Contact'); ?>" class="footer-links mt-16">Contact Us</a>


                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="  footer-row-1 row tc m-0" style="    justify-content: space-around;">
                <div class="col-md-3  row mb-3 mt-3">

                    <h2 class="footer-get-intouch">Get in Touch</h2>

                </div>
                <div class="col-md-3  row mb-3 mt-3">

                    <div class="media ficonslist">
                        <div class="media-icon align-self-start" style="    min-width: 30px;">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <p>
                                <span style="font-weight: 600;">Head office:</span> 76 Kanti Nagar,  
                                Near Hero Honda 
                                Showroom, Delhi-110051 
                            </p>

                            <p><span style="font-weight: 600;">Branch office:</span> Plot no 31, 32 
Gyan Khand 1  
Indirapuram, Ghaziabad </p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  row mb-3 mt-3">

                    <div class="media ficonslist">
                        <div class="media-icon align-self-start">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <p class="f-14">
                                <a href="tel:01234567890">+91-9582275275 </a>
                            </p>
                            
                            <p class="small">(For sales query only)</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3  row mb-3 mt-3">

                    <div class="media ficonslist">
                        <div class="media-icon align-self-start">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <p class="f-14">
                                <a href="mailto:marcom@atsgreens.com">
                                    query@divyanshindia.com
                                </a>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
            <hr>
            <div class="footer-row-3 tc" style="    text-align: center;">
                <div class="footer-copyw tc">

                    <p class="text-center container mob-size" style=" font-size:14px; color:#f1f1f1; padding:5px;font-weight: 300;">
                        Copyright © 2025 Divyansh . All Rights Reserved. Developed By
                        <a href="https://theodin.in/" style="color:#fff;    text-decoration: underline;">
                            The Odin</a> .
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll <= 500) {
            $(".addclass").removeClass("addclass").addClass("stick");
        }
    })
</script>

<script>
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }

    function openForm1() {
        document.getElementById("popupForm1").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("popupForm1").style.display = "none";
    }
</script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>