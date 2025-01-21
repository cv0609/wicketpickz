    <!-- footer section -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 me-auto text-center">
                    <h4 class="footer-disclaimer">Disclaimer</h4>
                    <p>Wicket Pickz is a fantasy cricket platform designed for entertainment purposes only. All
                        information provided on this website is intended for personal use and does not guarantee
                        winnings or success. Participation in fantasy leagues may be subject to local laws and
                        regulations. Users must be of legal age in their jurisdiction to participate. Wicket Pickz is
                        not responsible for any financial loss, damage, or disputes arising from the use of this
                        website. By accessing and using the platform, you agree to the terms and conditions outlined on
                        this site.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 col-12 me-auto text-center">
                    <div class="footer-left">
                        <a class="logoLnk">
                            <div class="logoLnkImg"></div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 me-auto text-center">
                    <h5 class="footer-title">Quick Link</h5>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="{{ route('home') }}" class="footer_link">Home</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('how-to-play') }}" class="footer_link">Playing Guide</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('leagues') }}" class="footer_link">Play Now</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('about-us') }}" class="footer_link">About</a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('contact-us') }}" class="footer_link">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 me-auto text-center">
                    <h5 class="footer-title">information Link</h5>
                    <ul class="footer-list">
                        <li class="footer-item">
                            <a href="{{ route('privacy') }}" class="footer_link">Privacy Policy
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('terms') }}" class="footer_link">Terms And Conditions
                            </a>
                        </li>
                        <li class="footer-item">
                            <a href="{{ route('personal-data-policy') }}" class="footer_link">Personal Data Policy</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 me-auto text-center">
                    <h5 class="footer-title">Socials Link</h5>
                    <div class="socials">
                        <div class="socials_wrapper">
                            <a href="https://www.facebook.com/" target="__blank" class="social">
                                <div class="social-link social-link--fb"></div>
                            </a>
                            <a href="https://www.instagram.com/" target="__blank" class="social ">
                                <div class="social-link social-link--insta"></div>
                            </a>
                            <a href="https://x.com/" target="__blank" class="social">
                                <div class="social-link social-link--twitter"></div>
                            </a>
                            <a href="https://web.telegram.org/k/" target="__blank" class="social">
                                <div class="social-link social-link--telegram"></div>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="copyRight col-12 mt-4">
                    <div class="copyRight_wrapper">
                        <div class="copyRight_right">
                            <p>
                                Copyright © {{ date('Y') }} , <a href="{{ route('home') }}">wicketpickz.com
                                </a>All
                                Rights
                                Reserved.
                            </p>
                        </div>
                        <div class="copyRight_left">
                            <a class="copyRight_img" href=""></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
