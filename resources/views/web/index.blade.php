@extends('web.layouts.master')

@section('title', 'G2B')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
@endpush

@section('content')
<div class="section overflow-hidden">
    <div class="container">
        <div class="center-text">
            <div class="hero-text-holder">
                <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="animate-on-load-1st">
                    <div class="hero-text"><span class="gradient-text">G2Bytes</span> to Manage all your Data registers</div>
                </div>
                <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="animate-on-load-2st">
                    <div class="paragraph-hero">
                        <p>Operate with your data predictably, securely, and at a lower cost in an intuitive and easy to navigate dashboard.Designed to run all your data types.</p>
                    </div>
                </div>
                <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="animate-on-load-3rd">
                    <div class="hero-button-holder"><a href="#ContactUs" class="button arrow w-button">Contact Us</a><a href="#More" class="gradient-link w-inline-block">
                            <div class="link-gradient-text">Learn More</div>
                        </a></div>
                </div>
            </div>
        </div>
        <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="animate-on-load-4rd">
            <div class="app-holder">
                <div class="app-container" style="will-change: transform; transform: translate3d(0px, -15%, 0px) scale3d(1, 1, 1) rotateX(20deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div class="app-main-photo">
                        <img src="{{ getFileVersion('/assets/web/images/dashboard.png') }}" loading="lazy" sizes="(max-width: 479px) 89vw, (max-width: 767px) 88vw, (max-width: 991px) 75vw, (max-width: 1439px) 76vw, 1035.1953125px" alt="" class="app-photo">
                    </div>
                    <div class="app-info-01" style="will-change: transform, opacity; transform: translate3d(0px, 30%, 10px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 0;">
                        <img src="{{ getFileVersion('/assets/web/images/recent_order.png') }}" loading="lazy" sizes="(max-width: 479px) 100px, (max-width: 991px) 150px, 250px" alt="" class="_100width">
                    </div>
                    <div class="app-info-02" style="will-change: transform, opacity; transform: translate3d(0px, 30%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 0;">
                        <img src="{{ getFileVersion('/assets/web/images/discounted_sale.png') }}" loading="lazy" sizes="(max-width: 767px) 180px, (max-width: 991px) 280px, 506px" alt="" class="_100width">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="More" class="section">
    <div class="container _4em">
        <div class="center-text">
            <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <h1>We can help you manage from top to bottom, all the layers.</h1>
            </div>
            <div class="paragraph-hero">
                <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <p>At G2Bytes, we're your all-in-one solution for managing every layer of your digital landscape. From strategic planning to seamless execution, trust us to handle it all, top to bottom. Let's unlock your digital potential together.</p>
                </div>
            </div>
        </div>
        <div class="features-container">
            <div class="w-layout-grid grid-6-col">
                <div id="w-node-_3e5d2762-47b3-db8b-cc0c-4a656fea09c8-aca8ea2d" class="content">
                    <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <h2>Top Management, to help you see the bigger picture</h2>
                    </div>
                    <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <p>Our top management services provide strategic insights and guidance to help you navigate the complexities of your digital journey<br><br>We're here to help you see the bigger picture, making informed decisions that drive your business forward.</p>
                    </div>
                    <div class="list-container">
                        <ul role="list" class="w-list-unstyled">
                            <li>
                                <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                    <div>Strategic Planning</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                    <div>Performance Analysis and Optimization</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                    <div>Technology Roadmapping</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="w-node-_003d7288-52d9-6c3b-64c7-0783fd2a1b36-aca8ea2d" class="image-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4bd6cede115ca195c43f_Feature%20Image%2001.svg" loading="lazy" alt="" class="feature-image"></div>
            </div>
            <div class="w-layout-grid grid-6-col">
                <div id="w-node-_5865c2f9-085b-8a6d-8622-8912e97a7274-aca8ea2d" class="image-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4bd6a0bf2350ffd1ef9f_Feature%20Image%2002.svg" loading="lazy" alt="" class="feature-image"></div>
                <div id="w-node-_5865c2f9-085b-8a6d-8622-8912e97a7256-aca8ea2d" class="content">
                    <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <h2>Micromanage every data so there are no slip-ups</h2>
                    </div>
                    <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <p>We specialize in meticulous data management solutions to ensure nothing falls through the cracks.<br><br> Our micromanagement approach guarantees the accuracy, integrity, and security of your data at every step, empowering you to make informed decisions with confidence.</p>
                    </div>
                    <div class="list-container">
                        <ul role="list" class="w-list-unstyled">
                            <li>
                                <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                    <div>Data Quality Assurance</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                    <div>Data Security Measures</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                    <div>Data Governance Frameworks</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Features" class="section grey-section">
    <div class="container _6em">
        <div class="center-text">
            <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <h1>All in one platform, from web to desktop everything you need is here</h1>
            </div>
            <div class="paragraph-hero">
                <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <p>At G2Bytes, our all-in-one platform offers seamless integration across web and desktop environments, providing you with everything you need in one centralized solution. From web applications to desktop software, streamline your workflow and access essential tools and resources effortlessly, all within a unified platform designed for convenience and efficiency.</p>
                </div>
            </div>
        </div>
        <div class="sticky-slider-section">
            <div class="w-layout-grid sticky-slider-container">
                <div id="w-node-_82187d72-78de-76a1-d56b-c9a74902fc48-aca8ea2d" class="sticky-text-container">
                    <div class="sticky-text-holder">
                        <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                            <h2 class="no-margins">Handcrafted &nbsp;to Manage all your data</h2>
                        </div>
                        <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                            <p>Get the data directly on your phone, scroll and swipe away to get informed and updated</p>
                        </div>
                        <div class="list-container">
                            <ul role="list" class="w-list-unstyled">
                                <li>
                                    <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                        <div>Easy to use and understand</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                        <div>Accessible from anywhere</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-holder" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div class="list-icon-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc4a566d06e55f48fbe8a4_Checkmark%20Icon.png" loading="lazy" alt="" class="_100width"></div>
                                        <div>Auto sync between devices with the latest data</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="w-node-_82187d72-78de-76a1-d56b-c9a74902fc66-aca8ea2d" class="slider-image-holder">
                    <div class="slider-sticky-holder _01"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bebe4e7179fecc6348f131_Slider%20Image%2001.jpg" loading="lazy" alt="" class="feature-image"></div>
                    <div class="slider-sticky-holder _02"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bebe4e601a60ce1d2bb940_Slider%20Image%2002.jpg" loading="lazy" alt="" class="feature-image"></div>
                    <div class="slider-sticky-holder _03"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bebe4f8f3058338a17893b_Slider%20Image%2003.jpg" loading="lazy" alt="" class="feature-image"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('web.includes.section.features')
<div id="Pricing" class="section">
    <div class="container _6em">
        <div class="center-text" id="contactUs">
            <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <h1>Remarkable Projects I've Accomplished</h1>
            </div>
        </div>
        <div class="payment-holder">
            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
                <div class="tabs-menu w-tab-menu" role="tablist">
                    <a data-w-tab="Tab 1" class="tab-link right-side w-inline-block w-tab-link  w--current" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" tabindex="-1" id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true">
                        <div class="tab-text">Rightly.Inc</div>
                    </a>
                    <a data-w-tab="Tab 2" class="tab-link w-inline-block w-tab-link" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" id="w-tabs-0-data-w-tab-2" href="#w-tabs-0-data-w-pane-2" role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false">
                        <div class="tab-text">GoTip</div>
                    </a>
                    <a data-w-tab="Tab 3" class="tab-link w-inline-block w-tab-link" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" id="w-tabs-0-data-w-tab-3" href="#w-tabs-0-data-w-pane-3" role="tab" aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                        <div class="tab-text">Q.E.D. Study</div>
                    </a>
                    <a data-w-tab="Tab 4" class="tab-link w-inline-block w-tab-link" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" id="w-tabs-0-data-w-tab-4" href="#w-tabs-0-data-w-pane-4" role="tab" aria-controls="w-tabs-0-data-w-pane-4" aria-selected="false">
                        <div class="tab-text">Others</div>
                    </a>
                </div>
                <div class="tabs-content w-tab-content">
                    @include('web.includes.tabs.index')
                </div>
            </div>
        </div>
    </div>
</div>
@include('web.includes.section.company-avatar')
<div id="Help" class="section">
    <div class="container _4em">
        <div class="quick-access">
            <div class="quick-access-grid"><a href="#" class="quick-access-card-holder w-inline-block">
                    <div class="quick-access-card">
                        <h1>Help</h1>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="arrow-holder-container" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc2217d721c46bbe3ee164_Arrow%20Gradient.svg" loading="lazy" alt="" class="_100width"></div>
                    <div class="grey-border"></div>
                </a><a href="mailto:info@mycompanyemail.com" class="quick-access-card-holder w-inline-block">
                    <div class="quick-access-card">
                        <h1>Contact</h1>
                        <p>info@mycompanyemail.com</p>
                    </div>
                    <div class="arrow-holder-container" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc2217d721c46bbe3ee164_Arrow%20Gradient.svg" loading="lazy" alt="" class="_100width"></div>
                    <div class="grey-border"></div>
                </a>
                <div id="w-node-bcfa0579-6986-668e-09cb-5d36b8f087e7-b8f087d1" class="quick-access-card-holder less-padding">
                    <div class="quick-access-card spacing">
                        <h1>Get to know us</h1>
                        <div class="w-form">
                            <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form" aria-label="Email Form">
                                <div class="form-container">
                                    <div class="submit-button"><input type="submit" value="Submit" data-wait="Please wait..." class="link-gradient-text grey w-button"></div><input type="text" class="quick-accesss-input w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Your Email" id="name-2">
                                    <div class="form-gradient"></div>
                                </div>
                            </form>
                            <div class="success-message-toast w-form-done" tabindex="-1" role="region" aria-label="Email Form success">
                                <div class="success-message-text"><span class="text-span"><strong>Thank you!</strong></span><strong> </strong>Your submission has been received!</div>
                            </div>
                            <div class="error-message w-form-fail" tabindex="-1" role="region" aria-label="Email Form failure">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                    </div>
                    <div class="grey-border"></div>
                </div><a href="mailto:Security@mycompanyemail.com" class="quick-access-card-holder w-inline-block">
                    <div class="quick-access-card">
                        <h1>Security</h1>
                        <p>Security@mycompanyemail.com</p>
                    </div>
                    <div class="arrow-holder-container" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc2217d721c46bbe3ee164_Arrow%20Gradient.svg" loading="lazy" alt="" class="_100width"></div>
                    <div class="grey-border"></div>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="fullscreen-img">
    <img id="fullscreen-img-src" src="" alt="">
</div>
@endsection

@push('js')
<script>
    // Get all images with the class "clickable-img"
    const images = document.querySelectorAll('.clickable-img');
    // Get the fullscreen image container and its child img element
    const fullscreenImgContainer = document.getElementById('fullscreen-img');
    const fullscreenImg = document.getElementById('fullscreen-img-src');

    // Function to handle image click event
    function openFullscreenImage(imgSrc) {
        // Set the source of the fullscreen image
        fullscreenImg.src = imgSrc;

        // Show the fullscreen image container
        fullscreenImgContainer.style.display = 'flex';

        // Toggle fullscreen mode
        if (fullscreenImg.requestFullscreen) {
            fullscreenImg.requestFullscreen();
        } else if (fullscreenImg.mozRequestFullScreen) {
            /* Firefox */
            fullscreenImg.mozRequestFullScreen();
        } else if (fullscreenImg.webkitRequestFullscreen) {
            /* Chrome, Safari & Opera */
            fullscreenImg.webkitRequestFullscreen();
        } else if (fullscreenImg.msRequestFullscreen) {
            /* IE/Edge */
            fullscreenImg.msRequestFullscreen();
        }
    }

    // Add click event listeners to each image
    images.forEach(image => {
        image.addEventListener('click', function() {
            const imgSrc = this.src;
            console.log(imgSrc)
            openFullscreenImage(imgSrc);
        });
    });

    // Exit fullscreen mode when clicking on the fullscreen image container
    fullscreenImgContainer.addEventListener('click', function() {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
            /* Firefox */
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            /* Chrome, Safari & Opera */
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
            /* IE/Edge */
            document.msExitFullscreen();
        }
        // Hide the fullscreen image container
        fullscreenImgContainer.style.display = 'none';
    });
</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    // Enable drag
    grabCursor: true,
    // Enable mousewheel control
    mousewheel: true,
});
</script>
@endpush