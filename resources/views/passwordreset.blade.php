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
    <title>USA Instant Loan</title>
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

    .um-um_password_id.um {
        max-width: 450px;
    }

    .reset-btn {
        width: 100%;
        padding: 10px;
        background: #00aaff;
        color: white;
        font-size: 16px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background 0.3s;
    }
</style>

<body>

    <div class="scroll"></div>

    @include('pannel.navbar')
    <hr>
    <a href="creditpass.php" style="position:fixed; top:105px; right:-5px; zoom:0.7; font-weight:900; font-size:20px; z-index:999999999999; background-color:white; display: none; " class="btn-blue-line small scrool">Authorization code</a>
    <main id="content" class="site-main post-79 page type-page status-publish hentry" role="main">
        <header class="page-header" style="padding-left: 123px;text-align: justify;">
            <h1 class="entry-title">Password Reset</h1>
        </header>
        <div class="page-content" style="    text-align: -webkit-center;">

            <div class="um um-password um-um_password_id uimob500" style="opacity: 1;">
                <div class="um-form">
                <form action="{{ route('resetpasswordSubmit') }}" method="POST" enctype="multipart/form-data">
                @csrf

                        <input type="hidden" name="_um_password_reset" id="_um_password_reset" value="1">

                        <div class="um-field um-field-block um-field-type_block" style="margin-bottom:19px">
                            <div class="um-field-block">
                                <div style="text-align:center;">
                                    To reset your password, please enter your email address or username below. </div>
                            </div>
                        </div>
                        <div id="um_field_um_password_id_username_b" class="um-field um-field-text  um-field-username_b um-field-text um-field-type_text" data-key="username_b">
                            <div class="um-field-area"><input autocomplete="off" class="um-form-field valid " type="text" name="username_b" id="username_b" value="" placeholder="Enter your username or email" data-validate="" data-key="username_b" style="margin-bottom: 21px; width: 100%;
        padding: 10px;">

                            </div>
                        </div>
                        <div class="um-col-alt um-col-alt-b">

                            <div class="um-center">
                                <button type="submit" class="reset-btn">Reset password</button>

                            </div>

                            <div class="um-clear"></div>

                        </div>

                        <input type="hidden" name="form_id" id="form_id_um_password_id" value="um_password_id">

                    </form>
                </div>
            </div>


            <div class="post-tags">
            </div>
        </div>

        <section id="comments" class="comments-area">




        </section><!-- .comments-area -->
    </main>
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