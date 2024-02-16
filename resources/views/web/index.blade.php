@extends('web.layouts.master')

@section('title', 'G2B')

@push('css')

@endpush

@section('content')
<div class="section overflow-hidden">
    <div class="container">
        <div class="center-text">
            <div class="hero-text-holder">
                <div style="transform: translate3d(0px, 0%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="animate-on-load-1st">
                    <div class="hero-text"><span class="gradient-text">Tailormade</span> to Manage all your Data registers</div>
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
                        <img src="{{ getFileVersion('/assets/web/images/dashboard.png') }}" loading="lazy" sizes="(max-width: 479px) 89vw, (max-width: 767px) 88vw, (max-width: 991px) 75vw, (max-width: 1439px) 76vw, 1035.1953125px" alt="" class="app-photo"></div>
                    <div class="app-info-01" style="will-change: transform, opacity; transform: translate3d(0px, 30%, 10px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 0;">
                    <img src="{{ getFileVersion('/assets/web/images/recent_order.png') }}" loading="lazy" sizes="(max-width: 479px) 100px, (max-width: 991px) 150px, 250px"  alt="" class="_100width"></div>
                    <div class="app-info-02" style="will-change: transform, opacity; transform: translate3d(0px, 30%, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; opacity: 0;">
                    <img src="{{ getFileVersion('/assets/web/images/discounted_sale.png') }}" loading="lazy" sizes="(max-width: 767px) 180px, (max-width: 991px) 280px, 506px" alt="" class="_100width"></div>
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
<div class="section">
    <div class="container _4em">
        <div class="grid-6-col">
            <div id="w-node-_9acb6e39-e985-ebce-2ef5-19ba02513fee-aca8ea2d" class="title-container">
                <div class="fade-in-move-on-scroll" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <h1>Access <span class="gradient-text">powerful</span> and helpful features.</h1>
                </div>
                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <p class="paragraph-white">Discover and utilize our platform's powerful features for enhanced productivity and success.</p>
                </div>
                <div class="top-margin-l">
                    <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"><a href="#contactUs" class="button arrow w-button">Request a demo</a></div>
                </div>
            </div>
        </div>
        <div class="feature-grid-holder">
            <div class="w-layout-grid feature-cards">
                <div id="w-node-_80744953-1164-62c7-834a-49586763b7b6-aca8ea2d" class="feature-cards-container">
                    <div class="feature-card-paddings">
                        <div class="feature-card-big-app-holder">
                            <div class="relative">
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <h4 class="no-margins">Design with real native elements</h4>
                                </div>
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <p>Create authentic user experiences with real native design elements.</p>
                                </div>
                            </div>
                            <div class="app-gardient-top"></div>
                            <div class="full-app-image-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc59c9b64ae66f68faa904_Feature%20Grid%20Image%2001%20(1).jpg" loading="lazy" alt="" class="full-app-image" style="opacity: 0;"></div>
                        </div>
                    </div>
                </div>
                <div id="w-node-_5db75681-33d3-b0fb-2e77-0a4c1ef35b70-aca8ea2d" class="feature-cards-container _02">
                    <div class="feature-card-paddings">
                        <div class="feature-card-big-app-holder _02">
                            <div class="relative">
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <h4 class="no-margins">Real Time Data</h4>
                                </div>
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <p>Access and analyze data in real time for immediate insights and informed decision-making.</p>
                                </div>
                            </div>
                            <div class="app-gardient-bot"></div>
                            <div class="app-gardient-top"></div>
                            <div class="phone-container" style="opacity: 0;">
                                <div class="phone-image-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver.png" loading="lazy" sizes="(max-width: 479px) 86vw, (max-width: 767px) 65vw, (max-width: 991px) 63vw, 282px" srcset="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver-p-500.png 500w, https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver-p-800.png 800w, https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver.png 1024w" alt="" class="iphone-image"></div>
                                <div class="iphone-screen-image-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5ba6a0bf234a3fd242cc_Iphone%20App%20Image.jpg" loading="lazy" sizes="(max-width: 479px) 80vw, (max-width: 991px) 61vw, 254px" srcset="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5ba6a0bf234a3fd242cc_Iphone%20App%20Image-p-500.jpeg 500w, https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5ba6a0bf234a3fd242cc_Iphone%20App%20Image.jpg 704w" alt="" class="iphone-screen-image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-layout-grid feature-cards">
                <div id="w-node-_6eda20d0-05fc-a501-ad3d-6ae5e36c303e-aca8ea2d" class="feature-cards-container _02">
                    <div class="feature-card-paddings">
                        <div class="feature-card-big-app-holder _02">
                            <div class="relative">
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <h4 class="no-margins">Quick overview</h4>
                                </div>
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <p>Get a rapid and concise overview of key information for swift decision-making.</p>
                                </div>
                            </div>
                            <div class="app-gardient-bot"></div>
                            <div class="app-gardient-top"></div>
                            <div class="phone-container _02" style="opacity: 0;">
                                <div class="phone-image-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver.png" loading="lazy" sizes="(max-width: 991px) 100vw, 394.796875px" srcset="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver-p-500.png 500w, https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver-p-800.png 800w, https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5afca6c2178c70737e28_Apple%20iPhone%2012%20Pro%20Silver.png 1024w" alt="" class="iphone-image"></div>
                                <div class="iphone-screen-image-container"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5ba6a0bf234a3fd242cc_Iphone%20App%20Image.jpg" loading="lazy" sizes="(max-width: 479px) 97vw, (max-width: 991px) 100vw, 366.796875px" srcset="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5ba6a0bf234a3fd242cc_Iphone%20App%20Image-p-500.jpeg 500w, https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5ba6a0bf234a3fd242cc_Iphone%20App%20Image.jpg 704w" alt="" class="iphone-screen-image"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="w-node-_6eda20d0-05fc-a501-ad3d-6ae5e36c3031-aca8ea2d" class="feature-cards-container">
                    <div class="feature-card-paddings">
                        <div class="feature-card-big-app-holder">
                            <div class="relative">
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <h4 class="no-margins">Don't miss anything important</h4>
                                </div>
                                <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                    <p>Stay informed and never overlook critical details with our comprehensive solution.</p>
                                </div>
                            </div>
                            <div class="full-app-image-container _02"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc5d770ac88d5925a5d9a7_Feature%20Grid%20Image%2002.svg" loading="lazy" alt="" class="full-app-image" style="opacity: 0;"></div>
                            <div class="app-gardient-bot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="Pricing" class="section">
    <div class="container _6em">
        <div class="center-text" id="contactUs">
            <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <h1>Our payment plan is easy to understand</h1>
            </div>
        </div>
        <div class="payment-holder">
            <div data-current="Tab 1" data-easing="ease" data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
                <div class="tabs-menu w-tab-menu" role="tablist">
                    <a data-w-tab="Tab 1" class="tab-link right-side w-inline-block w-tab-link  w--current" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" tabindex="-1" id="w-tabs-0-data-w-tab-1" href="#w-tabs-0-data-w-pane-1" role="tab" aria-controls="w-tabs-0-data-w-pane-0" aria-selected="true">
                        <div class="tab-text">Data Fortress</div>
                    </a>
                    <a data-w-tab="Tab 2" class="tab-link w-inline-block w-tab-link" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" id="w-tabs-0-data-w-tab-2" href="#w-tabs-0-data-w-pane-2" role="tab" aria-controls="w-tabs-0-data-w-pane-2" aria-selected="false">
                        <div class="tab-text">Backend Citadel</div>
                    </a>
                    <a data-w-tab="Tab 3" class="tab-link w-inline-block w-tab-link" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" id="w-tabs-0-data-w-tab-3" href="#w-tabs-0-data-w-pane-3" role="tab" aria-controls="w-tabs-0-data-w-pane-3" aria-selected="false">
                        <div class="tab-text">Pixel Playground</div>
                    </a>
                    <a data-w-tab="Tab 4" class="tab-link w-inline-block w-tab-link" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" id="w-tabs-0-data-w-tab-4" href="#w-tabs-0-data-w-pane-4" role="tab" aria-controls="w-tabs-0-data-w-pane-4" aria-selected="false">
                        <div class="tab-text">Universal Interface Fusion</div>
                    </a>
                    <a data-w-tab="Tab 5" class="tab-link w-inline-block w-tab-link" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" id="w-tabs-0-data-w-tab-5" href="#w-tabs-0-data-w-pane-5" role="tab" aria-controls="w-tabs-0-data-w-pane-5" aria-selected="false">
                        <div class="tab-text">Universal Nexus</div>
                    </a>
                </div>
                <div class="tabs-content w-tab-content">
                    @include('web.includes.tabs.index')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container _6em">
        <div class="center-text">
            <div class="fade-in-move-on-scroll" style="opacity: 0; transform: translate3d(0px, 25px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                <h1>Connect to what you actually need</h1>
            </div>
        </div>
        <div class="connect-section-container">
            <div class="w-layout-grid connect-grid-container">
                <div id="w-node-d008f252-532e-9d09-d9c2-0bb50db72bc3-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _01"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc6766fe7b1f6e89ab74d7_Comapny%20Avatar.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-_6b36a120-b831-13db-9104-e521eb83e706-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _02"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc68db99f57152ed8120de_Company%20Avatar%2005.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-_8689b8b6-e83a-0577-b4e9-43bb27f11736-aca8ea2d" class="company-avatar-container bot">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _03"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc68dc83fd9c4685ec8d12_Company%20Avatar%2006.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-_4f1d5286-8618-b7c4-8f9b-154d93084005-aca8ea2d" class="company-avatar-container up">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _04"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc68dc001cf66491f0cbda_Company%20Avatar%2001.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-_52b3093c-671c-ec38-a078-3b81fa20f408-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _05"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc68dce02d27863c0cb675_Company%20Avatar%2007.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-e3acfc95-87cd-c92c-4015-0873834ac1d1-aca8ea2d" class="company-avatar-container random">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _06"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc68dc7d7b7c2415942b54_Company%20Avatar%2004.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-ab6fd3a9-0145-6a3e-94fc-91330bb0f431-aca8ea2d" class="company-avatar-container random">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _07"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc68dc20250608380f0d9e_Company%20Avatar%2003.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-_2bb55183-bd7a-9bae-a4c9-ae37c11720c5-aca8ea2d" class="company-avatar-container bot">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _08"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62bc68dc3fbee74331ea69cc_Company%20Avatar%2008.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-_05e15299-d605-b9eb-85f8-c9e4e84a86e4-aca8ea2d" class="company-avatar-container bot">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _09"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb648357a202689d2688a_Company%20Avatar%2015.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-a9b6046f-debb-78ae-3ea8-b3631ff554a0-aca8ea2d" class="company-avatar-container up hide">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _10"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb64396e2ae80e40c771e_Company%20Avatar%2018.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
            </div>
            <div class="w-layout-grid connect-grid-container">
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff2dd-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _11"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb643730d345dd715bef5_Company%20Avatar%2017.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff2e2-aca8ea2d" class="company-avatar-container bot">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _12"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb64396e2ae80e40c771e_Company%20Avatar%2018.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff2e7-aca8ea2d" class="company-avatar-container bot">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _13"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb6439c2088ac19530a35_Company%20Avatar%2019.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff2ec-aca8ea2d" class="company-avatar-container up">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _14"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb6443a756e338e6987a3_Company%20Avatar%2020.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff2f1-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _15"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb645aea71ce79203da80_Company%20Avatar%2009.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff2f6-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _16"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb6452b9c80cf9068d091_Company%20Avatar%2010.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff2fb-aca8ea2d" class="company-avatar-container random">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _17"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb645870dba6e8b4843eb_Company%20Avatar%2011.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff300-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _18"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb646a31203c301455ae4_Company%20Avatar%2012.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff305-aca8ea2d" class="company-avatar-container">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(0, 0, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _19"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb647d17b91bc646d5203_Company%20Avatar%2014.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
                <div id="w-node-bf08120b-cc2a-e2f0-94fd-84a0476ff30a-aca8ea2d" class="company-avatar-container up hide">
                    <div style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="company-avatar-circle _20"><img src="https://assets.website-files.com/62bc1260fe7b1f3d37a8ea01/62beb6477be4212229d8a9b4_Company%20Avatar%2013.svg" loading="lazy" alt="" class="company-avatar"></div>
                    <div class="grey-circle-holder">
                        <div class="gray-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
@endsection

@push('js')

@endpush