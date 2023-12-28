@extends('web.layouts.master')

@section('title', 'G2B ｜GO TO BYTES')
@section('bodyClass', 'u-body u-xl-mode')

@push('css')
<link rel="stylesheet" href="{{ getFileVersion('assets/web/css/home.css') }}" media="screen" />
@endpush

@section('content')
<section class="u-clearfix u-palette-5-dark-3 u-section-1" id="sec-5845">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <img src="{{ getFileVersion('assets/web/images/group-business-people-having-mee.jpg') }}" alt="" class="custom-expanded u-image u-image-default u-image-1" data-image-width="1380" data-image-height="871" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750" />
        <div class="custom-expanded u-container-align-left u-container-style u-gradient u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h1 class="u-align-left u-text u-text-body-alt-color u-text-1">
                    Welcome to TechBoostify: Your path to digital triumph. 🚀
                </h1>
            </div>
        </div>
        <div class="u-gradient u-shape u-shape-circle u-shape-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"></div>
        <div class="u-align-left u-expanded-width-sm u-expanded-width-xs u-gradient u-shape u-shape-rectangle u-shape-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"></div>
        <div class="custom-expanded u-align-left u-container-align-left u-container-style u-group u-white u-group-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="1000">
            <div class="u-container-layout u-valign-middle u-container-layout-2">
                <p class="u-align-left u-text u-text-2">
                    At TechBoostify, we're more than just website builders; we're architects of digital success for small businesses. Our passion lies in integrating cutting-edge technology with tailored website solutions to elevate your business growth.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-container-align-center u-palette-5-dark-3 u-section-2" id="carousel_6cc9">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
            Our Services
        </h2>
        <p class="u-align-center u-text u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
            From code to design, we craft digital dreams in every line.
        </p>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-3">
                            Cutting-Edge System Engineering and Hosting Mastery
                        </h5>
                        <p class="u-align-center u-text u-text-grey-40 u-text-4">
                            Our proficiency in system engineering ensures reliable hosting and management across diverse server types, ensuring optimal digital infrastructure performance.
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-5">
                            Backend Brilliance for Robust Functionality
                        </h5>
                        <p class="u-align-center u-text u-text-grey-40 u-text-6">
                            Dive deep into seamless functionality with our backend engineering. We build robust, scalable systems to power your platform's core functionalities and data management.
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-7">
                            Frontend Finesse for Captivating User Experiences
                        </h5>
                        <p class="u-align-center u-text u-text-grey-40 u-text-8">
                            Captivate your audience with stunning interfaces. Our frontend experts craft visually engaging, responsive designs for seamless user interaction and navigation.
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-9">
                            Bespoke Web Development Tailored to You
                        </h5>
                        <p class="u-align-center u-text u-text-grey-40 u-text-10">
                            Your unique business needs deserve tailor-made solutions. From dynamic web apps to e-commerce platforms, we breathe life into your vision.
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-list-item-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                    <div class="u-container-layout u-similar-container u-container-layout-5">
                        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-11">
                            Fortify Your Platform: Security and Compliance Mastery
                        </h5>
                        <p class="u-align-center u-text u-text-grey-40 u-text-12">
                            Shield your digital assets with our expert security integration. We fortify your platform against threats while ensuring strict compliance with industry standards.
                        </p>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-list-item-6" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                    <div class="u-container-layout u-similar-container u-container-layout-6">
                        <h5 class="u-align-center u-custom-font u-font-montserrat u-text u-text-default u-text-13">
                            Speed, Precision, Excellence: Performance Optimization
                        </h5>
                        <p class="u-align-center u-text u-text-grey-40 u-text-14">
                            Experience peak performance. We fine-tune your systems for speed, efficiency, and an unparalleled user experience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-expanded data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-align-center-sm u-container-align-center-xs u-container-align-right-lg u-container-align-right-md u-container-align-right-xl u-container-style u-layout-cell u-size-30 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                        <div class="u-container-layout u-valign-middle u-container-layout-7">
                            <a href="#" class="u-active-palette-1-light-1 u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-white u-btn u-button-style u-hover-palette-1-light-1 u-text-active-black u-text-hover-black u-btn-1">view more</a>
                        </div>
                    </div>
                    <div class="u-container-align-center-sm u-container-align-center-xs u-container-align-left-lg u-container-align-left-md u-container-align-left-xl u-container-style u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                        <div class="u-container-layout u-valign-middle u-container-layout-8">
                            <a href="#carousel_d3a5" class="u-active-white u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-border-2 u-border-active-palette-1-light-1 u-border-hover-palette-1-light-1 u-border-palette-1-light-1 u-btn u-button-style u-hover-white u-palette-1-light-1 u-text-active-black u-text-hover-black u-btn-2">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-right u-clearfix u-container-align-center u-palette-5-dark-3 u-section-3" id="carousel_cfb2">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default-lg u-text-default-xl u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
            Vision, culture and people
        </h2>
        <p class="u-align-center u-text u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
            With a keen understanding that every pixel and line of code contributes to your success story, we embark on a journey to design and develop websites that not only establish your online presence but also serve as powerful tools to propel your business forward.
        </p>
        <div class="data-layout-selected u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-col">
                    <div class="u-size-30">
                        <div class="u-layout-row">
                            <div class="u-container-align-left u-container-style u-gradient u-layout-cell u-size-30 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                                <div class="u-container-layout u-valign-middle u-container-layout-1">
                                    <h4 class="u-align-left u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-3">
                                        1
                                    </h4>
                                    <p class="u-align-left u-text u-text-body-alt-color u-text-4">
                                        Our vision shapes our culture, creating an environment where our people thrive, innovate, and share common values.
                                    </p>
                                </div>
                            </div>
                            <div class="u-container-style u-image u-layout-cell u-shape-rectangle u-size-30 u-image-1" data-image-width="1380" data-image-height="920" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                                <div class="u-container-layout u-container-layout-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-30">
                        <div class="u-layout-row">
                            <div class="u-container-align-left u-container-style u-grey-5 u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                <div class="u-container-layout u-valign-middle u-container-layout-3">
                                    <h4 class="u-align-left u-custom-font u-font-montserrat u-text u-text-5">
                                        2
                                    </h4>
                                    <p class="u-align-left u-text u-text-6">
                                        Vision propels us, culture nurtures us, and our people bring these elements to life, defining who we are and our path to success.
                                    </p>
                                </div>
                            </div>
                            <div class="u-container-style u-image u-layout-cell u-size-30 u-image-2" data-image-width="1380" data-image-height="920" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500">
                                <div class="u-container-layout u-container-layout-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-align-center u-clearfix u-palette-5-dark-3 u-section-4" id="carousel_1b5f">
    <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-align-left u-container-align-left u-container-style u-gradient u-layout-cell u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h3 class="u-align-left u-text u-text-body-alt-color u-text-1">
                            Make legal better
                        </h3>
                        <img class="u-expanded-width u-image u-image-default u-image-1" src="{{ getFileVersion('assets/web/images/happy-insurance-agent-communicat.jpg') }}" alt="" data-image-width="1380" data-image-height="920" />
                        <p class="u-align-left u-text u-text-body-alt-color u-text-default u-text-2">
                            In today's digital landscape, ensuring legal compliance isn't just a legal obligation; it's a cornerstone of trust and reliability. "Make legal better" serves as our guiding principle, embedding legal compliance seamlessly into every aspect of website development. From privacy policies to terms of use, we meticulously craft each element to safeguard your business and build trust with your audience. Prioritizing legal integrity isn't just a choice; it's our commitment to fortify your online presence.
                        </p>
                    </div>
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-palette-5-dark-3 u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <div class="u-expanded-width u-list u-list-1">
                            <div class="u-repeater u-repeater-1">
                                <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1">
                                    <div class="u-container-layout u-similar-container u-container-layout-3">
                                        <span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-1"><img src="{{ getFileVersion('assets/web/images/2970777-743d0e28.png') }}" alt="" /></span>
                                        <h5 class="u-text u-text-4">What We Do</h5>
                                        <p class="u-text u-text-5">
                                            Discover our comprehensive approach to weaving legal compliance into every pixel of your website, ensuring airtight protection and trustworthiness for your business.
                                        </p>
                                    </div>
                                </div>
                                <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2">
                                    <div class="u-container-layout u-similar-container u-container-layout-4">
                                        <span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-2"><img src="{{ getFileVersion('assets/web/images/3077249-9d2828a7.png') }}" alt="" /></span>
                                        <h5 class="u-text u-text-6">Who We Are</h5>
                                        <p class="u-text u-text-7">
                                            Meet our dedicated team of legal experts and tech enthusiasts committed to reshaping the digital landscape by making legal intricacies seamless and understandable for your online presence.
                                        </p>
                                    </div>
                                </div>
                                <div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
                                    <div class="u-container-layout u-similar-container u-container-layout-5">
                                        <span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-3"><img src="{{ getFileVersion('assets/web/images/13207134-10a842cb.png') }}" alt="" /></span>
                                        <h5 class="u-text u-text-8">How We Differ</h5>
                                        <p class="u-text u-text-9">
                                            Explore our unique methodology that sets us apart, amalgamating cutting-edge technology with legal finesse to redefine how websites comply with regulations, setting new standards in the industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-container-align-center u-palette-5-dark-3 u-section-5" id="carousel_b382">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
            We serve our clients around the globe
        </h2>
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-col">
                    <div class="u-size-30">
                        <div class="u-layout-row">
                            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-20 u-white u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                <div class="u-container-layout u-valign-middle u-container-layout-1">
                                    <h4 class="u-align-left u-custom-font u-font-montserrat u-text u-text-2">
                                        Global Reach
                                    </h4>
                                    <p class="u-align-left u-text u-text-default u-text-3">
                                        From bustling cities to remote corners, we extend our services worldwide, ensuring no geographical boundaries limit our support.
                                    </p>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-gradient u-layout-cell u-size-20 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                <div class="u-container-layout u-valign-middle u-container-layout-2">
                                    <h3 class="u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-default u-text-4">
                                        Worldwide Support
                                    </h3>
                                    <p class="u-text u-text-body-alt-color u-text-default u-text-5">
                                        Around the clock, our experts stand ready to assist, providing unwavering support across the globe, wherever your business takes you.
                                    </p>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-20 u-white u-layout-cell-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                <div class="u-container-layout u-container-layout-3">
                                    <h4 class="u-align-left u-custom-font u-font-montserrat u-text u-text-6">
                                        International Presence
                                    </h4>
                                    <p class="u-align-left u-text u-text-default u-text-7">
                                        With a footprint across continents, our dedicated teams are strategically positioned to cater to your needs wherever you operate.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-30">
                        <div class="u-layout-row">
                            <div class="u-align-left u-container-style u-image u-image-default u-layout-cell u-size-20 u-image-1" data-image-width="1405" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                                <div class="u-container-layout u-container-layout-4"></div>
                            </div>
                            <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-shape-rectangle u-size-20 u-white u-layout-cell-5" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                                <div class="u-container-layout u-valign-middle u-container-layout-5">
                                    <h4 class="u-align-left u-custom-font u-font-montserrat u-text u-text-8">
                                        Borderless Solutions
                                    </h4>
                                    <p class="u-align-left u-text u-text-default u-text-9">
                                        Our commitment knows no bounds. We deliver seamless solutions across time zones, embracing diversity and cultural nuances.
                                    </p>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-image u-image-default u-layout-cell u-shape-round u-size-20 u-image-2" data-image-width="1920" data-image-height="1080" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                                <div class="u-container-layout u-valign-top u-container-layout-6"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-image u-shading u-section-6" id="carousel_605b" data-image-width="2250" data-image-height="1500">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-size-22 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                        <div class="u-border-20 u-border-palette-1-light-1 u-container-layout u-container-layout-1">
                            <h3 class="u-text u-text-default u-text-1">
                                Corporate &amp; Finance
                            </h3>
                        </div>
                    </div>
                    <div class="u-container-style u-layout-cell u-size-38 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-container-layout-2">
                            <p class="u-text u-text-default u-text-2">
                                At the heart of our company's success lies the collaborative effort of our exceptional professionals, dedicated to delivering unparalleled service. Our team not only excels locally but extends its expertise globally. <br>
                                <br>
                                Driven by the pursuit of excellence, our personnel are steadfast leaders in their respective fields. They offer a wealth of experience and expertise, consistently delivering bespoke solutions that exceed our clients' expectations. <br>
                                <br>
                                Our commitment to client satisfaction is unwavering. We pride ourselves on understanding and meeting our clients' unique requirements with innovative and tailored approaches. <br>
                                <br>
                                At our core, we embody a commitment to excellence, global reach, and client-centric solutions, ensuring that our success remains intertwined with the success of our clients.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-palette-5-dark-3 u-section-7" id="carousel_567d">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-align-left-md u-container-align-left-sm u-container-align-left-xs u-container-style u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-group-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="750">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h2 class="u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-1">
                    Why Us?
                </h2>
                <p class="u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-2">
                    Legal excellence. Dedication to clients. Commitment to public
                    service.
                </p>
                <p class="u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-3">
                    At TechBoostify, we're not just building websites; <br>
                    We're crafting digital success stories for small businesses. <br>
                    <br>
                    Our commitment goes beyond mere web development; <br>
                    we are architects of online triumphs, meticulously weaving digital strategies that transcend mere online presence. <br>
                    <br>
                    Your success fuels our passion, and we thrive on being the catalyst that transforms your aspirations into a thriving digital reality.
                </p>
            </div>
        </div>
        <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-align-left u-container-style u-gradient u-list-item u-repeater-item u-shape-rectangle u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                        <span class="u-align-left u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 95.333 95.332" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a13b"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 95.333 95.332" x="0px" y="0px" id="svg-a13b" style="enable-background: new 0 0 95.333 95.332">
                                <g>
                                    <g>
                                        <path d="M30.512,43.939c-2.348-0.676-4.696-1.019-6.98-1.019c-3.527,0-6.47,0.806-8.752,1.793    c2.2-8.054,7.485-21.951,18.013-23.516c0.975-0.145,1.774-0.85,2.04-1.799l2.301-8.23c0.194-0.696,0.079-1.441-0.318-2.045    s-1.035-1.007-1.75-1.105c-0.777-0.106-1.569-0.16-2.354-0.16c-12.637,0-25.152,13.19-30.433,32.076    c-3.1,11.08-4.009,27.738,3.627,38.223c4.273,5.867,10.507,9,18.529,9.313c0.033,0.001,0.065,0.002,0.098,0.002    c9.898,0,18.675-6.666,21.345-16.209c1.595-5.705,0.874-11.688-2.032-16.851C40.971,49.307,36.236,45.586,30.512,43.939z"></path>
                                        <path d="M92.471,54.413c-2.875-5.106-7.61-8.827-13.334-10.474c-2.348-0.676-4.696-1.019-6.979-1.019    c-3.527,0-6.471,0.806-8.753,1.793c2.2-8.054,7.485-21.951,18.014-23.516c0.975-0.145,1.773-0.85,2.04-1.799l2.301-8.23    c0.194-0.696,0.079-1.441-0.318-2.045c-0.396-0.604-1.034-1.007-1.75-1.105c-0.776-0.106-1.568-0.16-2.354-0.16    c-12.637,0-25.152,13.19-30.434,32.076c-3.099,11.08-4.008,27.738,3.629,38.225c4.272,5.866,10.507,9,18.528,9.312    c0.033,0.001,0.065,0.002,0.099,0.002c9.897,0,18.675-6.666,21.345-16.209C96.098,65.559,95.376,59.575,92.471,54.413z"></path>
                                    </g>
                                </g>
                            </svg></span>
                        <p class="u-align-left u-text u-text-body-alt-color u-text-4">
                            We craft custom web solutions specifically for small businesses, leveraging the latest technology to suit your unique needs.
                        </p>
                        <h5 class="u-align-left u-text u-text-body-alt-color u-text-5">
                            Tailored Technology
                        </h5>
                    </div>
                </div>
                <div class="u-container-align-left u-container-style u-gradient u-list-item u-repeater-item u-shape-rectangle u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                        <span class="u-align-left u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 351.128 351.128" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c1b6"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128" x="0px" y="0px" id="svg-c1b6" style="enable-background: new 0 0 351.128 351.128">
                                <g>
                                    <path d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path>
                                    <path d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
                                </g>
                            </svg></span>
                        <p class="u-align-left u-text u-text-body-alt-color u-text-6">
                            Our goal is your success. We infuse every website with features designed to amplify your business growth and enhance your online presence.
                        </p>
                        <h5 class="u-align-left u-text u-text-body-alt-color u-text-7">
                            Business Growth Focus
                        </h5>
                    </div>
                </div>
                <div class="u-container-align-left u-container-style u-gradient u-list-item u-repeater-item u-shape-rectangle u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                        <span class="u-align-left u-icon u-icon-circle u-text-white u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 351.128 351.128" style="">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c1b6"></use>
                            </svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128" x="0px" y="0px" id="svg-c1b6" style="enable-background: new 0 0 351.128 351.128">
                                <g>
                                    <path d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path>
                                    <path d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
                                </g>
                            </svg></span>
                        <p class="u-align-left u-text u-text-body-alt-color u-text-8">
                            Innovation is our cornerstone. We constantly evolve our strategies and technologies to keep your business ahead in the digital landscape.
                        </p>
                        <h5 class="u-align-left u-text u-text-body-alt-color u-text-9">
                            Innovation at Heart
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-container-align-center u-palette-5-dark-3 u-section-8" id="carousel_d3a5">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-align-center u-container-style u-gradient u-layout-cell u-size-34 u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250">
                        <div class="u-container-layout u-valign-middle-xs u-container-layout-1">
                            <h2 class="u-align-center u-text u-text-body-alt-color u-text-1">
                                Get in touch!
                            </h2>
                            <div class="u-align-center u-border-5 u-border-white u-line u-line-horizontal u-line-1"></div>
                            <div class="custom-expanded u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-form u-form-1">
                                <form action="#" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" style="padding: 0px" source="email" name="form">
                                    <div class="u-form-group u-form-name">
                                        <label for="name-5a14" class="u-form-control-hidden u-label u-text-body-alt-color" wfd-invisible="true">Name</label>
                                        <input type="text" placeholder="Enter your Name" id="name-5a14" name="name" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color u-input-1" required />
                                    </div>
                                    <div class="u-form-email u-form-group">
                                        <label for="email-5a14" class="u-form-control-hidden u-label u-text-body-alt-color" wfd-invisible="true">Email</label>
                                        <input type="email" placeholder="Enter a valid email address" id="email-5a14" name="email" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color u-input-2" required />
                                    </div>
                                    <div class="u-form-group u-form-message">
                                        <label for="message-5a14" class="u-form-control-hidden u-label u-text-body-alt-color" wfd-invisible="true">Message</label>
                                        <textarea placeholder="" rows="4" cols="50" id="message-5a14" name="message" class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-text-body-alt-color u-input-3" required></textarea>
                                    </div>
                                    <div class="u-align-left u-form-group u-form-submit">
                                        <a href="#" class="u-active-palette-1-light-3 u-btn u-btn-submit u-button-style u-hover-palette-1-light-3 u-white u-btn-1">Submit</a>
                                        <input type="submit" value="submit" class="u-form-control-hidden" wfd-invisible="true" />
                                    </div>
                                    <div class="u-form-send-message u-form-send-success" wfd-invisible="true">
                                        Thank you! Your message has been sent.
                                    </div>
                                    <div class="u-form-send-error u-form-send-message" wfd-invisible="true">
                                        Unable to send your message. Please fix errors then try
                                        again.
                                    </div>
                                    <input type="hidden" value="" name="recaptchaResponse" wfd-invisible="true" />
                                    <input type="hidden" name="formServices" value="2867d665-fcbb-9ba9-9572-15130719680c" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="u-align-left u-container-align-left u-container-style u-layout-cell u-size-26 u-white u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750">
                        <div class="u-container-layout u-valign-top u-container-layout-2">
                            <h5 class="u-align-left u-text u-text-2">Address</h5>
                            <p class="u-align-left u-text u-text-grey-50 u-text-3">
                                1234 Sreet, 56 Avenue, <br />Viet Nam, Ho Chi Minh city 700000
                            </p>
                            <h5 class="u-align-left u-text u-text-4">Call Us</h5>
                            <p class="u-align-left u-text u-text-grey-50 u-text-5">
                                1 (234) 567-891 <br />1 (234) 567-891
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush