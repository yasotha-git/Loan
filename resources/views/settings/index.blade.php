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

    .container {
        margin: 10px auto;
        padding: 20px;
        /* background-color: #f8f9fa; */
        border-radius: 8px;
        /* box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); */
        text-align: center;
    }

    .table th,
    .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table {
        margin: 0 auto;
        /* Centers the table */
        width: auto;
        /* Adjust width to content */
        border-collapse: collapse;
        /* Neat borders */
    }
    
    hr {
        color: white;
        border-color: #FFFFFF -moz-use-text-color #FFFFFF;
        border-style: solid none;
        border-width: 1px 0;
        margin: 18px 0;
    }

    .footerheader {
        font-weight: 800;
        line-height: 3.7;
    }

    .footerlinks {
        font-weight: 600;
        font-size: 13px;
        line-height: 0.7;
    }
</style>

<body>

    <div class="scroll"></div>

    <a href="creditpass.php" style="position:fixed; top:105px; right:-5px; zoom:0.7; font-weight:900; font-size:20px; z-index:999999999999; background-color:white; display: none; " class="btn-blue-line small scrool">Authorization code</a>

    <section class="home-section" style="min-height: 100vh; display: flex; padding: 0; margin: 0;">
        <!-- Left Sidebar -->
        <div class="sidebar" style="width: 250px; background-color: #343a40; color: white; padding: 20px; height: 100vh;">
            <h3 class="text-white">Admin Panel</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('settings.index') }}" class="nav-link text-white">Settings</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('enquiry.index') }}" class="nav-link text-white">Enquiry</a>
                </li>
                @auth
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <a href="logout" class="nav-link text-white"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </form>
                </li>
                @endauth


                <!-- Add more menu items as needed -->
            </ul>
        </div>

        <!-- Main Content Section -->
        <div class="container" style="flex-grow: 1; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="register-form-wrapper text-center">

                <!-- Success Message -->


                <!-- Search/Filter Form (Example) -->
                <div class="container" style="max-width: 600px; padding: 20px;">
                    <h3 class="text-center mb-4">Settings</h3>

                    <!-- Success Message -->
                    @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <!-- Settings Form -->
                    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control form-control-sm" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="contact_no">Contact No</label>
                            <input type="text" id="contact_no" name="contact_no" class="form-control form-control-sm" value="{{ old('contact_no') }}" required>
                            @error('contact_no')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
    <label for="lender_password">Lender Password</label>
    <input 
        type="password" 
        id="lender_password" 
        name="lender_password" 
        class="form-control form-control-sm" 
        value="{{ old('lender_password') }}" 
        required>
    @error('lender_password')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="verification_password">Verification Password</label>
    <input 
        type="password" 
        id="verification_password" 
        name="verification_password" 
        class="form-control form-control-sm" 
        value="{{ old('verification_password') }}" 
        required>
    @error('verification_password')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>




                        <!-- <div class="form-group">
                            <label for="logoPath">Logo Path:</label>

                            <img class="fee" src="{{ asset('assets/img/cropped-cropped-logo.png')}}" alt="pic" style="width: 20%;margin-top: 70px;margin-left: 135px;">
                            <div style="font-size: 14px;margin-top: 5px;color: black;margin-left: 135px;">USA Instant Loan</div>
                        </div> -->

                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>


                <!-- Centered Table -->

            </div>
        </div>
    </section>





    <!--end contact-->

    <!--begin footer -->
    <div class="footer" style="background-color: #2D2D2D;">
        <div class="row" style="font-weight:900 !Important;">
            <hr>
            <hr>
            <br>
            <hr>
            <br>
            <div class="col-md-12 text-center" style="margin-bottom:-60px;">
                <hr>
                <p>Copyrights © USA Instant Loan {{date('Y')}}. All Rights Reserved</p>
            </div>
        </div>
    </div>
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
        setTimeout(function() {
            const successMessage = document.getElementById('alert alert-success');
            console.log(successMessage);

            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 2000); // 2 seconds
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

        // Automatically hide the success message after 2 minutes (120,000 milliseconds)
    </script>



</body>

</html>