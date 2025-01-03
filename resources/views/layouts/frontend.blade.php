<!DOCTYPE html>

<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Speedyloanoline">
    <meta name="description" content="Personal Loans made Simple and Fast">
    <meta name="keywords" content="Borrow between $100 and $15,000 as soon as tomorrow.">
    <meta property="og:type" content="Website" />
    <meta property="og:description" content="Best Loan offers- Apply loan online to get lowest interest rates, instant approval &amp; disbursal of funds to your bank a/c in few hours of Loan Approval." />
    <!-- <meta property="og:image" content="https://www.onlinespeedyloan.com/images/usaonline.jpg" /> -->
    <!-- <meta property="og:image" content="http://www.onlinespeedyloan.com/images/usaonline.jpg" /> -->
    <meta property="og:image" content="https://www.onlinespeedyloan.com/images/usaonline.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="og:image:alt" content="" />
    <meta property="og:url" content="https://speedyloanonline.com" />
    <!-- <meta property="og:image" content="images/osl.png"> -->
    <!-- <link rel="shortcut icon" href="images/osl.png" type="image/x-icon"> -->
    <title>Speedyloanoline.com || Instant Payday loans </title>
    <!-- Loading Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Loading Template CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-magnific-popup.css') }}" rel="stylesheet">
    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700" rel="stylesheet">
    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/usafav.ico">

</head>


<style>
    .btn.book-now {
        background: white;
        ;
        border-radius: 0;
        color: black;
        display: inline-block;
        font-size: 1rem;
        height: 50px;
        line-height: 50px;
        position: fixed;
        right: 0;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        -webkit-transform: rotate(-90deg);
        transform-origin: bottom right;
        width: 220px;
        z-index: 999999999999;
        top: 30%;
        font-weight: 800;
        /* Hover styles, 
  media queries */
    }


    .def {
        zoom: 0.6;
    }

    .faq {
        zoom: 0.85;
        width: 110%;
    }

    @media (max-width: 475px) {
        .def {
            zoom: 0.34;
        }

        .faq {
            zoom: 0.85;
            margin-left: -89px;
        }
    }

    .home-benefits {
        list-style-type: none;
        counter-reset: list-counter;
        /* Initialize a counter for the list */
        padding-left: 20px;
    }

    .home-benefits li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 10px;
    }

    .home-benefits li::before {
        content: counter(list-counter) ". ";
        /* Add dot and number before list item */
        counter-increment: list-counter;
        /* Increment the counter */
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        color: #fff;
        /* You can customize the color */
    }
</style>

<body>
    <a class="btn book-now desktop open-datepicker-popup" href="{{ route('home') }}" title="
Book Now">Apply Now</a>
    <div class="scroll"></div>

    @include('pannel.navbar')
    <a href="creditpass.php" style="position:fixed; top:105px; right:-5px; zoom:0.7; font-weight:900; font-size:20px; z-index:999999999999; background-color:white; display: none; " class="btn-blue-line small scrool">Authorization code</a>
    <section class="home-section" style="padding-bottom: 2px;">
        <div class="container" style="margin-bottom:0%">
            <!--begin row -->
            <div class="row">
                <!--begin col-md-7-->
                <div class="col-md-7 hideonmobile" style="margin-top:3%;">
                    <h1>Personal loans made simple and <br>fast.<br>
                    </h1>
                    <p> Your search for a quick loan provider stops here.</p>
                    <ul class="home-benefits">
                        <li>Borrow between $100 and $15,000 as soon as tomorrow.</li>
                        <li>Quick loans available despite bad credit scores.</li>
                        <li>No Paperwork.</li>
                    </ul>
                    <!-- <a href="tel:1-469-663-0666" class="btn-white scrool">Call: +1-469-663-0666 +1-214-736-9930 </a> -->
                    <a href="tel:+1-972-440-4744" class="btn-white scrool">Call Us : +1-972-440-4744 </a>
                    <br> <span style="font-size: 14px; font-weight:700; bottom:-20px; left:50px; color:white;">12pm-9pm EST(Mon - Fri) </span>
                </div>
                <!--end col-md-7-->
                <!--begin col-md-5-->
            

                <div id="home" class="col-md-5 wow bounceIn" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">

                    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            alert('{{ session('success') }}');
        });
    </script>
@endif
                    <!--begin register-form-wrapper-->
                    <div class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                        <h3>Apply Now </h3>
                        <!--begin form-->
                        <div>
                            <!--begin register form -->
                            <form id="loan-form" action="{{ route('applySubmit') }}" method="post" enctype="multipart/form-data">
                                @csrf <!-- CSRF token for security -->
                                <input class="register-input white-input" required="" name="name"
                                    placeholder="Full Name*" type="text">
                                <input class="register-input white-input" required="" name="mobile"
                                    placeholder="Phone Number*" type="tel" maxlength="10" minlength="10">
                                <input class="register-input white-input" name="email" placeholder="Email"
                                    type="email">
                                <select class="register-input white-input" required="" name="amount">
                                    <option value="">Loan Amount</option>
                                    <option value="200">$200</option>
                                    <option value="300">$300</option>
                                    <option value="400">$400</option>
                                    <option value="500">$500</option>
                                    <option value="600">$1000</option>
                                    <option value="2000">$2000</option>
                                    <option value="5000">$5000</option>
                                    <option value="8000">$8000</option>
                                    <option value="10000">$10000</option>
                                    <option value="10000">$10000</option>
                                </select>
                                <input value="Submit" class="register-submit" type="submit">
                            </form>
                            <!--end register form -->
                        </div>
                        <!--end form-->
                    </div>
                    <!--end register-form-wrapper-->
                    <!--begin register-form-wrapper-->
                    <div style="display: none;" class="register-form-wrapper wow bounceIn" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: bounceIn;">
                        <h3>Congratulations!</h3>
                        <h3>You are Pre-Approved! </h3>
                        <h3>Your case ID: <br> <br> <a href="#about" class="btn-blue-line small scrool"><br />
                                <b>Notice</b>: Undefined variable: caseid in <b>/var/www/html/onlinespeedyloan/htmlsite/index.php</b> on line <b>356</b><br />
                            </a>
                        </h3>
                        <h4 href="tel:+1-214-736-9930" class="btn-white scrool" style="color:red;">Call Us : +1-972-440-4744</h4>
                        <h5 style="color:red;">To complete your Application Process </h5>
                        <br>
                        <!--begin form-->
                        <div>
                            <!--begin register form -->
                            <form id="register-form" class="register-form register"
                                action="creditpass.php" method="get">
                                <input value="Authorization Code" class="register-submit" type="submit">
                            </form>
                            <!--end register form -->
                        </div>
                        <!--end form-->
                    </div>
                    <!--end register-form-wrapper-->
                </div>
                <!--end col-md-5-->
            </div>
            <!--end row -->
        </div>
        <!--end container -->
        <div class="col-md-12 text-center">
            <!--begin partners-mentions -->
            <ul class="partners-mentions" style="filter: brightness(0) invert(1); margin-top:7px;">
                <li style="    margin: 15px 18px; !important"><img src="{{ asset('assets/img/icons-01.png')}}" alt="CSS Awards" style="opacity :1 !important;"></li>
                <li style="    margin: 15px 18px; !important"><img src="{{ asset('assets/img/icons-02.png')}}" alt="Awwwards" style="opacity :1 !important;"></li>
                <li style="    margin: 15px 18px; !important"><img src="{{ asset('assets/img/icons-03.png')}}" alt="CSS Winner" style="opacity :1 !important;"></li>
                <li style="    margin: 15px 18px; !important"><img src="{{ asset('assets/img/icons-04.png')}}" alt="CSS Design Awards" style="opacity :1 !important;"></li>
            </ul>
            <!--end partners-mentions -->
        </div>
    </section>
    <section class="section-white section-top-border">
        <!--begin container -->
        <div class="container">
            <!--begin row -->
            <div class="row">
                <!--begin col-md-6 -->
                <div class="col-md-6 padding-top-30">
                    <!--begin features-second -->
                    <div class="features-second">
                        <div class="dropcaps-circle">
                            <div class="ue-list-item-index" style="background-color: #71CB78;border-radius: 50px 50px 50px 50px;color: #ffffff;">
                                1 </div>
                        </div>
                        <h4 id="mobih" class="margin-bottom-5">Enter your details</h4>
                        <p id="mobip">The data you give us online will be kept secret. Enter essential subtleties in the structure and afterward hang tight for us to give you an on a fundamental level endorsement.</p>
                    </div>
                    <!--end features-second-->
                    <!--begin features-second-->
                    <div class="features-second">
                        <div class="dropcaps-circle">
                            <div class="ue-list-item-index" style="background-color: #71CB78;border-radius: 50px 50px 50px 50px;color: #ffffff;">
                                2 </div>
                        </div>
                        <h4 id="mobih" class="margin-bottom-5">Get an approval</h4>
                        <p id="mobip">After we audit your data, we'll give you our choice. Then we'll give you an on a basic level endorsement and continue to check.</p>
                    </div>
                    <!--end features-second-->
                    <!--begin features-second-->
                    <div class="features-second">
                        <div class="dropcaps-circle">
                            <div class="ue-list-item-index" style="background-color: #71CB78;border-radius: 50px 50px 50px 50px;color: #ffffff;">
                                3 </div>

                        </div>
                        <h4 id="mobih" class="margin-bottom-5">Withdraw cash</h4>
                        <p id="mobip">After we review your information, we’ll give you our decision. Then we’ll give you an in-principle approval and proceed to verification.</p>
                    </div>
                    <!--end features-second-->
                </div>
                <!--end col-md-6-->
                <!--begin col-md-6-->
                <div class="col-md-6 wow slideInRight" data-wow-delay="0.25s"
                    style="visibility: visible; animation-delay: 0.25s; animation-name: slideInRight;">
                    <img src="{{ asset('assets/img/information.jpg')}}" class="def" alt="pic">
                </div>
                <!--end col-md-6-->
            </div>
            <!--end row -->
        </div>
        <!--end container -->
    </section>
    <div class="container">
        <!--begin row-->
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="section-title" id="why">Application Process</h2>
            </div>
        </div>
    </div>
    <section class="section-grey pcstep" id="team" style="background: url('{{ asset('assets/img/doted.png') }}') no-repeat; margin-top: 15%;">
        <!--begin container-->
        <div class="container">
            <!--begin row-->
            <div class="row">

                <div class="col-sm-12 col-md-3" style="margin-top: -20%; margin-left: 5%;">
                    <div data-aos="fade-right" class="ay-box ay-one row aos-init aos-animate " style="    padding: 10px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%; width: 500px;;">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/quickform.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>
                                Quick & Easy Form</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">Loan processing has never been stress-free, but now thanks to <strong>{{ env('APP_NAME') }}</strong> the processing is simpler and swifter. Submit the form your see on this page and our panel of short-term financiers will review your case.</p>
                    </div>
                </div>
                <!--end team-item -->
                <!--begin team-item -->
                <div class="col-sm-12 col-md-3" style=" margin-left:-27%; margin-top: 8%;">
                    <div data-aos="fade-right" class="ay-box ay-one row aos-init aos-animate " style="   padding: 10px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%; width: 500px;;">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/callrep.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>Call a Representative</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">Without further ado, our authentication team will then review your case and do a diligent vetting of all the documentation you provide us. <strong>{{ env('APP_NAME') }}</strong> team will do this quick, so you don’t waste any time.

                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3" style="margin-top: -4%; margin-left: 31%;">
                    <div data-aos="fade-left" class="ay-box ay-one row aos-init aos-animate " style="   padding: 5px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%; width: 500px;;">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/verification.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>Verification</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">After you submit the form you can call a representative with your Case ID to discuss options. The consultant will help you pick the best options for your needs.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3" style="margin-top: 0%; margin-left: 51%;">
                    <div data-aos="fade-left" class="ay-box ay-one row aos-init aos-animate " style="   padding: 10px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%; width: 500px;;">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/authorization.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>Authorization</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">Your consultant will send you an in-principle approval stating that your loan has been sanctioned. The team will share the schedule of your loan repayment structure and inform you about other nitty-gritties. Once all your documents have been scrutinized the money will be deposited in your bank account.</p>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <section class="section-grey mobstep " id="team" style="padding-bottom:20px ; background: url('./images/staraightline.svg') no-repeat; margin-top: 15%;background-size: cover; ">
        <!--begin container-->
        <div class="container">
            <!--begin row-->
            <div class="row">
                <!--begin team-item -->
                <div class="col-sm-12 col-md-3" style="margin-top: -10%; ">
                    <div class="ay-box ay-one row aos-init aos-animate " style=" padding: 10px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%;">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/quickform.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>
                                Quick & Easy Form</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">Loan processing has never been stress-free, but now thanks to USA Instant Loan the processing is simpler and swifter. Submit the form your see on this page and our panel of short-term financiers will review your case.</p>
                    </div>
                </div>
                <!--end team-item -->
                <!--begin team-item -->
                <div class="col-sm-12 col-md-3" style="  margin-top: 10%;">
                    <div class="ay-box ay-one row aos-init aos-animate " style="   padding: 10px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%; ">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/callrep.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>Call a Representative</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">After you submit {{ env('APP_NAME') }}
                            the form you can call a representative with your Case ID to discuss options. The consultant will help you pick the best options for your needs.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3" style="margin-top: 10%; ">
                    <div class="ay-box ay-one row aos-init aos-animate " style="   padding: 5px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%;">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/verification.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>Verification</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">Without further ado, our authentication team will then review your case and do a diligent vetting of all the documentation you provide us. Speedyloanoline team will do this quick, so you don’t waste any time.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3" style="margin-top: 12%; ">
                    <div class="ay-box ay-one row aos-init aos-animate " style="   padding: 10px 5px; border-radius: 20px;background: white; opacity: 1;
            box-shadow: 0 0 30px 6px #eceff5;
            margin-bottom: 2%;">
                        <div class="col-3" style="   padding: 0px;">
                            <img src="{{ asset('assets/img/authorization.png')}}" style="height: 70px; margin-left: 25px;" alt="smebazaar">
                        </div>
                        <div class="col-8 ">
                            <h4>Authorization</h4>
                        </div>
                        <p class="col-12 " style="font-size: 15px;">Your consultant will send you an in-principle approval stating that your loan has been sanctioned. The team will share the schedule of your loan repayment structure and inform you about other nitty-gritties. Once all your documents have been scrutinized the money will be deposited in your bank account.</p>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <section class="section-white small-padding-bottom">
        <!--begin container-->
        <div class="container">
            <!--begin row-->
            <div class="row">
                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-10">
                    <img src="{{ asset('assets/img/faq.jpg')}}" class="faq" alt="picture">
                </div>
                <!--end col-sm-6-->
                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-20">
                    <h3>Answers to most popular questions:</h3>
                    <!--begin accordion -->
                    <div class="accordion" id="accordionFAQ">
                        <!--begin card -->
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Representative Example:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionFAQ">
                                <div class="card-body">
                                    For a $5,000 36-month loan at an interest rate of 5.99% with a 1% origination fee of $50.00, you will receive a loan amount of $4,950.00 and will make 36 monthly payments of about $153.61 at a 5.99% APR. Total loan cost would be $5,595.00.
                                </div>
                            </div>
                        </div>
                        <!--end card -->
                        <!--begin card -->
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Fees, Interest and other Implications:
                                    </button>
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        perfect credit ?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Late or missed payments may result in increased loan fees and higher interest rates. Each lender operates by its own terms of service regarding late fees, rates and other charges. Please review the financial implications of late and non-payment carefully before taking out your loan.
                                </div>
                            </div>
                        </div>
                        <!--end card -->
                        <!--begin card -->
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Credit Score Impact
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Late or missed payments may be reported to credit agencies and bureaus. Your payment history and information may negatively affect your credit and lower your credit score. Review your lender's credit reporting policies before signing for your loan.
                                </div>
                            </div>
                        </div>
                        <!--end card -->
                        <!--begin card -->
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Loan Renewal Policies:
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Loan renewals and extensions may be offered by your lender for missing, partial or late payments. The loan renewals may be automatic, and typically include additional renewal charges. Renewal restrictions are subject to state laws and your lender's repayment policies. Because we aren't a lender, only your loan provider can offer specific repayment options and details if you can't repay your loan on time. You can ask your lender for implications of non-payment at any point during the loan process.
                                </div>
                            </div>
                        </div>
                        <!--end card -->
                        <!--begin card -->
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Important Information About Your APR and Repayment
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionFAQ">
                                <div class="card-body">
                                    Our loan lenders work nationwide and continuously try their best to offer a variety of affordable products. These loan products have repayment in full due in 65 days minimum and 72 months maximum. The Annual Percentage Rate describe the interest rate for the whole year. It is a charge expressed as an annual rate.The annual percentage rates (APRs) our lenders offer can range between 5.99% - 35.99%. The Maximum APR is 35.99%. When accepting a loan from a lender, the lender can provide a different APR than our range. Please check the loan disclosure before approving and signing the agreement for your loan.
                                </div>
                            </div>
                        </div>
                        <!--end card -->
                        <!--begin card -->
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        If You Can Not Repay Your Loan
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionFAQ">
                                <div class="card-body">
                                    If you find that you can not repay your loan under its current terms, your lender may charge you late fees, report your payment history to a credit-reporting agency, or provide an extension or loan renewal option to refinance your loan. This may impact your credit score or allow your loan account to fall into collection. Loan renewals or refinancing options may include additional fees.
                                </div>
                            </div>
                        </div>
                        <!--end card -->
                    </div>
                    <!--end accordion -->
                </div>
                <!--end col-sm-6-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <section class="section-grey medium-paddings section-bottom-border">
        <!--begin container -->
        <div class="container">
            <!--begin row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-title">Testimonials</h2>
                </div>
                <!--begin col md 12 -->
                <div class="col-md-8 mx-auto padding-bottom-40">
                    <!--begin testimonials carousel -->
                    <div id="carouselIndicators2" class="carousel slide" data-ride="carousel">
                        <!--begin carousel-indicators -->
                        <ol class="carousel-indicators testimonials-indicators">
                            <li data-target="#carouselIndicators2" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselIndicators2" data-slide-to="1"></li>
                            <li data-target="#carouselIndicators2" data-slide-to="2"></li>
                        </ol>
                        <!--end carousel-indicators -->
                        <!--begin carousel-inner -->
                        <div class="carousel-inner">
                            <!--begin carousel-item -->
                            <div class="carousel-item active">
                                <!--begin testim-inner -->
                                <div class="testim-inner">
                                    <p> "At the start, I had some doubts of USA Instant Loan ; yet in any case, I just topped off the web-based structure — bingo! I got a reaction from the expert. Fast and expedient credit handling saved me the problems of going to a bank and letting them know my monetary desolations. Likewise, slips in my credit scores were not no joking matter, since they dealt with my desk work. Presently, I'm in the groove again."
                                    </p>
                                    <h5>Julien</h5>
                                    <h6>CUSTOMER</h6>

                                </div>
                                <!--end testim-inner -->
                            </div>
                            <!--end carousel-item -->
                            <!--begin carousel-item -->
                            <div class="carousel-item">
                                <!--begin testim-inner -->
                                <div class="testim-inner">
                                    <p>"Each time I stroll in to a bank, I need to go through the nonsense of desk work. I'm 60 years of age and required a few cash for a clinical activity and thought I'd try USA Instant Loan out and they've never frustrated me up to this point. Convenient help and speedy handling are the signs of USA Instant Loan. Attempt them." </p>
                                    <h5>Steve Martin</h5>
                                    <h6>CUSTOMER</h6>
                                </div>
                                <!--end testim-inner -->
                            </div>
                            <!--end carousel-item -->
                            <!--begin carousel-item -->
                            <div class="carousel-item">
                                <!--begin testim-inner -->
                                <div class="testim-inner">
                                    <p>"I was essentially happy to get my credit authorized so rapidly. When everything was on the line and I wanted the cash so frantically, USA Instant Loan acted the hero. What other place might I at any point go to get some speedy money? I'm one amazing fulfilled client! Much thanks to you." </p>
                                    <h5>John</h5>
                                    <h6>CUSTOMER</h6>
                                </div>
                                <!--end testim-inner -->
                            </div>
                            <!--end carousel-item -->
                        </div>
                        <!--end carousel-inner -->
                    </div>
                    <!--end testimonials carousel -->
                </div>
                <!--end col md 12-->
            </div>
            <!--end row -->
        </div>
        <!--end container -->
    </section>
    <!--end contact-->

    <!--begin footer -->
    @include('layouts.footer')
    <!--end footer -->
    <!-- Load JS here for greater good =============================-->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo-min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nav.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-788681140"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141349535-1"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126186951-1"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-788681140"></script>
    <script>
      
        gtag('event', 'conversion', {
            'send_to': 'AW-788681140/ni5bCLqwgoAYELSjifgC'
        });
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-788681140');


        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-141349535-1');


        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-126186951-1');


        (function(w, d, t, r, u) {
            var f, n, i;
            w[u] = w[u] || [], f = function() {
                var o = {
                    ti: "56284401"
                };
                o.q = w[u], w[u] = new UET(o), w[u].push("pageLoad")
            }, n = d.createElement(t), n.src = r, n.async = 1, n.onload = n.onreadystatechange = function() {
                var s = this.readyState;
                s && s !== "loaded" && s !== "complete" || (f(), n.onload = n.onreadystatechange = null)
            }, i = d.getElementsByTagName(t)[0], i.parentNode.insertBefore(n, i)
        })(window, document, "script", "//bat.bing.com/bat.js", "uetq");


        AOS.init();
        var enhanced_conversion_data = {
            "email": yourEmailVariable
        };

        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'AW-788681140', {
            'allow_enhanced_conversions': true
        });
        document.addEventListener('DOMContentLoaded', function() {
            // Add a click event listener to the link
            document.querySelector('a[href="index.php#why"]').addEventListener('click', function(e) {
                e.preventDefault(); // Prevent the default link behavior
                // Get the target container by its ID
                const targetContainer = document.getElementById('why');
                if (targetContainer) {
                    // Scroll to the target container
                    targetContainer.scrollIntoView({
                        behavior: 'smooth', // Smooth scrolling
                        block: 'start', // Align to the top of the container
                    });
                }
            });
        });
    </script>
</body>

</html>