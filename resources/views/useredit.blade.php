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
</style>

<body>
    <a class="btn book-now desktop open-datepicker-popup" href="{{ route('home') }}" title="
Book Now">Apply Now</a>
    <div class="scroll"></div>

    @include('pannel.navbar')
    <a href="creditpass.php" style="position:fixed; top:105px; right:-5px; zoom:0.7; font-weight:900; font-size:20px; z-index:999999999999; background-color:white; display: none; " class="btn-blue-line small scrool">Authorization code</a>
    <section class="home-section" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 20px; margin: 0;">
        <div class="container" style="margin-top: 120px;max-width: 918px; background-color: #f8f9fa; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="register-form-wrapper text-center">
                <h3>User Edit</h3>


                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- This is for sending a PUT request for update -->
                    <div class="row">
                        <!-- First Row: Name and Email -->
                        <div class="col-lg-6">
                            <div class="single-form">
                                <label>* NAME</label>
                                <input type="text" name="name" placeholder="Enter name" value="{{ old('name', $user->name) }}">
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="single-form">
                                <label>* Email Address</label>
                                <input type="email" name="email" placeholder="Enter email" value="{{ old('email',$user->email) }}">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 34px;">

                        <div class="col-lg-6">
                            <div class="single-form">
                                <label>* Phone Number</label>
                                <input type="text" name="mobileno" placeholder="Enter Number" value="{{ old('mobileno',$user->phone) }}">
                                @error('mobileno') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-form">
                                <label>* Address</label>
                                <input type="text" name="address" placeholder="Enter address" value="{{ old('address',$user->address) }}">
                                @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 23px;">
                        <!-- Third Row: Address and Date of Birth -->


                        <div class="col-lg-3">
                            <div class="single-form">
                                <label>* Date of Birth</label>
                                <input type="date" name="dob" class="form-control" style="margin-left: 146px;margin-top: -24px;" value="{{ old('dob',$user->dob) }}">
                                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-form">
                                <label style="margin-right: -193px;">* Role</label>
                                <div class="select-option mb-10" style="margin-top: -32px;margin-left: 324px;">
                                    <select name="role_id" id="role_id">
                                        <option value="">Choose Option</option>
                                        <option value="1" {{ old('role_id', $user->role_id) == 1 ? 'selected' : '' }}>User</option>
                                        <option value="2" {{ old('role_id', $user->role_id) == 2 ? 'selected' : '' }}>Admin</option>
                                    </select>
                                    @error('role_id') <span class="text-danger">{{ $message }}</span> @enderror

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 34px;">
                        <!-- Fourth Row: Role and Status -->


                        <div class="col-lg-6">
                            <div class="single-form d-flex">
                                <label>* Status :</label>
                                <div class="select-radio6" style="margin-left: 23px;">
                                    <div class="radio">
                                        <input type="radio" name="status" value="1"
                                            {{ old('status', $user->status) == '1' ? 'checked' : '' }}>
                                        <label for="radio-6" class="radio-label">Active</label>
                                    </div>
                                    <div class="radio" style="margin-right: -179px;margin-top: -30px;">
                                        <input type="radio" name="status" value="0"
                                            {{ old('status', $user->status) == '0' ? 'checked' : '' }}>
                                        <label for="radio-7" class="radio-label">Inactive</label>
                                    </div>
                                </div>
                                @error('status') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-lg-12" style="margin-top: 15px;">
                        <button type="submit" class="btn apply-btn mt-30">Submit</button>
                    </div>
                </form>
                <!--end form-->
            </div>
        </div>
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