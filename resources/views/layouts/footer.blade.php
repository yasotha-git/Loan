<style>
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
<div class="footer" style="background-color: #2D2D2D;">
    <!--begin container -->
    <div class="container">
        <!--begin row -->
        <div class="row" style="font-weight:900 !Important;">

            <div class="col-md-3 ">
                <h7 class="footerheader" style="color:white; font-family: monospace">USA Instant Loan</h7>
                <a><img style="filter: brightness(0) invert(1); zoom:0.5;width: 44%
            " src="{{ asset('assets/img/cropped-cropped-logo.png')}}"></a>
            </div>
            <div class="col-md-3 ">
                <h7 class="footerheader" style="color:white; font-family: monospace">ABOUT</h7>
                <a href="{{ route('home') }}#why">
                    <p class="footerlinks"> Why USA Instant Loan</p>
                </a>
                <a href="{{route('terms')}}">
                    <p class="footerlinks"> Financial Rudiments</p>
                </a>
                <a href="{{route('faq')}}">
                    <p class="footerlinks"> FAQ</p>
                </a>
            </div>
            <div class="col-md-3 ">
                <h7 class="footerheader" style="color:white;font-family: monospace"> QUICK LINKS</h7>
                <a href="{{route('fees')}}">
                    <p class="footerlinks"> Fees & Charges</p>
                </a>
                <a href="{{route('privacy')}}">
                    <p class="footerlinks"> Privacy Policy</p>
                </a>
                <a href="{{route('terms')}}">
                    <p class="footerlinks"> Terms And Conditions</p>
                </a>
            </div>
            <div class="col-md-3 ">
                <h7 class="footerheader" style="color:white;font-family: monospace ">CONDITIONS</h7>
                <a href="{{ route('verification') }}">
                    <p class="footerlinks"> Register Now</p>
                </a>
                <a href="{{route('login')}}">
                    <p class="footerlinks"> Login</p>
                </a>
                <a href="{{route('lenders')}}">
                    <p class="footerlinks"> Lenders</p>
                </a>
            </div>
            <hr>
            <hr>
            <br>
            <hr>
            <br>
            <!--begin col-md-12 -->
            <div class="col-md-12 ">
                <hr>
                <p style="font-style:italic"><span style="font-weight:800;color: #71CB78;"> DISCLAIMER </span>: Usainstantloan is not a traditional bank or lending organisation. Your information is only used to recommend suitable financiers from our network based on your individual needs and credit ratings, both on this website and with our consultants. Your email addresses and phone numbers won’t be given to any other people or organisations. You won’t receive any marketing or promotional materials from us. Submission of your material does not signify automatic approval. However, your application will be carefully examined before we decide whether to approve it. There is no cost or additional payment for this service. Social Security numbers, credit/debit card information, and other sensitive personal information are not stored by us or shared with third parties.You understand that as we do not represent you in any financial concerns or transactions with the lenders, we will share information about financiers with our business network so that you can communicate with the lenders directly. You agree to the terms, conditions, and policies by using this website and our services. Additionally, we want you to be aware that some states may not be serviced by moneylenders from our network. Finally, before using our services, we firmly advise that you familiarise yourself with our privacy policies and other disclosures.
                </p>
            </div>
            <div class="col-md-12 text-center" style="margin-bottom:-60px;">
                <hr>
                <p>Copyrights © USA Instant Loan {{date('Y')}}. All Rights Reserved</p>
            </div>
            <!--end col-md-6 -->
        </div>
        <!--end row -->
    </div>
    <!--end container -->
</div>