<footer id="footer">
    <div class="container">
        <div class="footer-ribbon">
            <span>Get in Touch</span>
        </div>
        <div class="row py-5 my-4">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">NEWSLETTER</h5>
                <p class="pr-1">Keep up on our always evolving product features and technology. Enter your
                    e-mail address and subscribe to our newsletter.</p>
                <div class="alert alert-success d-none" id="newsletterSuccess">
                    <strong>Success!</strong> You've been added to our email list.
                </div>
                <div class="alert alert-danger d-none" id="newsletterError"></div>
                <form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST" class="mr-4 mb-3 mb-md-0">
                    <div class="input-group input-group-rounded">
                        <input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
                        <span class="input-group-append">
                            <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                        </span>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                <h5 class="text-3 mb-3">LATEST TWEETS</h5>
                <div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                    <p>Please wait...</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                <div class="contact-details">
                    <h5 class="text-3 mb-3">CONTACT US</h5>
                    <ul class="list list-icons list-icons-lg">
                        <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i>
                            <p class="m-0">234 Street Name, City Name</p>
                        </li>
                        <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
                            <p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p>
                        </li>
                        <li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
                            <p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-2">
                <h5 class="text-3 mb-3">FOLLOW US</h5>
                <ul class="social-icons">
                    <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright" style="background: #1F497D;">

        <div class="container py-2">
            <div class="row py-4 text-center">
                <div class="col-6 mx-auto">
                    <p>Copyright © 2022 UnicMinds. All Rights Reserved | Designed by <a href="mailto:shamsiarhamid@gmail.com" target="_blank" rel="nofollow noopener"><strong>Shamsiar Hamid</strong></a></p>


                </div>
                {{-- <div
                    class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                    <a href="index.html" class="logo pr-0 pr-lg-3">
                        <img alt="Porto Website Template" src="{{ asset('frontend/img/logo-footer.png') }}"
                class="opacity-5" height="33">
                </a>
            </div> --}}
            {{-- <div
                    class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0"> --}}


            {{-- </div> --}}

        </div>
    </div>
    </div>
</footer>
