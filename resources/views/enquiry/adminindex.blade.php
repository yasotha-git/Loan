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
                @if(session('user_type') == 2 )
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
                @else
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
                @endif

                <!-- Add more menu items as needed -->
            </ul>
        </div>

        <!-- Main Content Section -->
        <div class="container" style="flex-grow: 1; padding: 20px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <div class="register-form-wrapper text-center">
                <h3 class="mb-4">Enquiry List</h3>

                <!-- Success Message -->
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <!-- Table for displaying the list -->
                <div class="container" style="max-width: 800px;">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Loan Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enquiries as $setting)
                            <tr>
                                <td>{{ $setting->name }}</td>
                                <td>{{ $setting->email }}</td>
                                <td>{{ $setting->phone }}</td>
                                <td>{{ $setting->loan_amount }}</td>
                                <td>
                                    <!-- View Button to trigger SweetAlert -->
                                    <a href="javascript:void(0);" class="btn btn-sm btn-info" onclick="showUserModal({{ $setting->id }})">View</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        <ul class="pagination">
                            <!-- Previous Button -->
                            @if ($enquiries->onFirstPage())
                            <li class="page-item disabled"><span class="page-link">Previous</span></li>
                            @else
                            <li class="page-item"><a class="page-link" href="{{ $enquiries->previousPageUrl() }}">Previous</a></li>
                            @endif

                            <!-- Next Button -->
                            @if ($enquiries->hasMorePages())
                            <li class="page-item"><a class="page-link" href="{{ $enquiries->nextPageUrl() }}">Next</a></li>
                            @else
                            <li class="page-item disabled"><span class="page-link">Next</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!--end contact-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
    function showUserModal(enquiryId) {
    // Fetch the current status and remarks for the enquiry
    $.ajax({
        url: '/get-enquiry-details', // Your route to fetch enquiry details
        type: 'GET',
        data: {
            enquiry_id: enquiryId,
        },
        success: function(response) {
            // Assuming response contains the status and remarks
            const statusOptionsUserType2 = `
                <option value="Unassigned">Unassigned</option>
                <option value="Assigned">Assigned</option>
                <option value="Processing">Processing</option>
                <option value="Completed">Completed</option>
                <option value="Incomplete">Incomplete</option>
            `;

            const status = response.status; // The current status of the enquiry
            const remarks = response.remarks; // The current remarks of the enquiry

            // Show SweetAlert with dropdowns and input field for remarks
            Swal.fire({
                title: 'Update User Information',
                html: `
                    <div>
                        <label for="status">Status:</label>
                        <select id="status" class="form-control">
                            ${statusOptionsUserType2}
                        </select>
                    </div>
                    <div>
                        <label for="remarks">Remarks:</label>
                        <input type="text" id="remarks" class="form-control" placeholder="Enter remarks" value="${remarks}">
                    </div>
                `,
                showCancelButton: true,
                confirmButtonText: 'Save',
                preConfirm: () => {
                    const remarks = document.getElementById('remarks').value.trim();
                    const status = document.getElementById('status').value;

                    if (!status) {
                        Swal.showValidationMessage('Please select a status');
                        return false;
                    }

                    if (!remarks) {
                        Swal.showValidationMessage('Please enter remarks');
                        return false;
                    }

                    // Save the data (AJAX or form submission)
                    $.ajax({
                        url: '/userupdate-enquiry', // Your route to update enquiry
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}', // Include CSRF token
                            enquiry_id: enquiryId,
                            status: status,
                            remarks: remarks,
                        },
                        success: function(response) {
                            Swal.fire('Saved!', 'The user information has been saved.', 'success');
                        },
                        error: function() {
                            Swal.fire('Error!', 'Unable to update user information.', 'error');
                        }
                    });
                }
            });

            // Set the selected status
            $('#status').val(status); // Pre-select the status dropdown
        },
        error: function() {
            Swal.fire('Error!', 'Unable to fetch enquiry details.', 'error');
        }
    });
}





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