<!-- footer section -->
<footer class="site-footer pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-12 me-auto text-center pb-4">
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


                <div class="col-12">
                  <div class="footer_blcks py-4">                    
                    <div class="socials">
                        <div class="socials_wrapper text-center">
                            <a href="https://www.facebook.com/" target="_blank" class="social">
                                <div class="social-link social-link--fb"></div>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="social ">
                                <div class="social-link social-link--insta"></div>
                            </a>
                            <a href="https://x.com/" target="_blank" class="social">
                                <div class="social-link social-link--twitter"></div>
                            </a>
                            <a href="https://web.telegram.org/k/" target="_blank" class="social">
                                <div class="social-link social-link--telegram"></div>
                            </a>
                        </div>
                    </div>
                   </div>
                </div>


                <div class="col-12">
                   <div class="footer_blcks">                    
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
                </div>

               

                <div class="copyRight col-12 pt-4">
                    <div class="copyRight_wrapper">
                        <div class="copyRight_right">
                            <p>
                                Copyright © {{ date('Y') }} , <a href="{{ route('home') }}">wicketpickz.com
                                </a> All
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
