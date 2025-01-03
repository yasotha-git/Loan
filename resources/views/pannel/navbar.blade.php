<header class="header">
    <!--begin navbar-fixed-top -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <!--begin container -->
        <div class="container">
            <!--begin navbar -->
            <nav class="navbar navbar-expand-lg">
                <!--begin logo -->
                <a class="navbar-brand" href="index.php" style="text-align: center;">
                    <img src="{{ asset('assets/img/cropped-cropped-logo.png') }}"
                        alt="Logo"
                        style="zoom:0.5; width: 26%;">
                </a>

                <div style="font-size: 14px;margin-top: 5px;color: #405263 !important;
    font-size: 18px !important;
    line-height: 30px !important;
    padding: 10px 20px !important;font-family: 'Dosis', Sans-serif;font-weight: 600;">USA Instant Loan</div>

                <!--end logo -->
                <!--begin navbar-toggler -->
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <!--end navbar-toggler -->
                <!--begin navbar-collapse -->
                <div class="navbar-collapse collapse" id="navbarCollapse">
                    <!--begin navbar-nav -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                        <!-- Show these links for guests -->
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('home') }}#why">Why USA Instant Loan?</a></li>
                        <li><a href="{{ route('faq') }}">F.A.Q</a></li>
                        <li><a href="{{ route('fees') }}">Fee & Charges</a></li>
                        <li class="discover-link"><a href="{{ route('verification') }}" class="external discover-btn">Verification</a></li>
                        @else

                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('home') }}#why">Why USA Instant Loan?</a></li>
                        <li><a href="{{ route('faq') }}">F.A.Q</a></li>
                        <li><a href="{{ route('fees') }}">Fee & Charges</a></li>
                        <li><a href="{{ route('users.index') }}">Dashboard</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </ul>
                    <!--end navbar-nav -->
                </div>
                <!--end navbar-collapse -->
            </nav>
            <!--end navbar -->
        </div>
        <!--end container -->
    </nav>
    <!--end navbar-fixed-top -->
</header>