<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 c-footer-left">
                <a class="mr-3 f-inter" style="color: #fff; text-decoration: none;" href="{{url('/terms')}}">Terms of Use</a>
                <a class="f-inter" style="color: #fff; text-decoration: none;" href="{{url('/privacy')}}">Privacy Policy</a>
            </div>
            <div class="col-md-6 c-footer-right">
                <a href="https://www.instagram.com/mcsmart_app" target="_blank" style="text-decoration: none;" >
                    <img class="mr-2" src="{{url('/assets/images/instagram.png')}}" alt="instagram logo">
                </a>
                
                @if (Browser::isMobile())
                    @if (Browser::isAndroid())
                        <a href="intent://page/111060891984207?referrer=app_link#Intent;package=com.facebook.katana;scheme=fb;end" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                    @if (Browser::isMac())
                        <a href="fb://page/?id=111060891984207" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                @endif

                @if (Browser::isTablet())
                    @if (Browser::isAndroid())
                        <a href="intent://page/111060891984207?referrer=app_link#Intent;package=com.facebook.katana;scheme=fb;end" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                    @if (Browser::isMac())
                        <a href="fb://page/?id=111060891984207" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                @endif

                @if (Browser::deviceModel() == 'iPad')
                    <a href="fb://page/?id=111060891984207" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                    </a>
                @endif

                @if (Browser::isDesktop())
                    <a href="https://www.facebook.com/McSmartApp?mibextid=LQQJ4d" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                    </a>
                @endif

                {{-- <a href="https://twitter.com/McSmartApp" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <img class="mr-2" src="{{url('/assets/images/twitter.png')}}" alt="twitter logo">
                </a> --}}
                <span class="f-inter c-hmobile">|</span>
                <span class="ml-2 f-inter c-hmobile">©2023 McSmart</span>
            </div>

            <div class="col-md-6 text-center c-dmobile mt-1">
                <span class="mr-3 f-inter">©2023 McSmart</span>
            </div>
        </div>
    </div>
</footer>