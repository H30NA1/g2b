@extends('web.layouts.master')

@section('title', 'G2B ｜GO TO BYTES | ABOUT')
@section('bodyClass', 'homepage navstate_hide')
@section('sectionClass', 'main_body p-top')

@push('css')
<link rel="stylesheet" href="{{ getFileVersion('assets/web/css/about.css') }}" media="screen" />

@endpush

@section('content')
<section class="u-black u-clearfix u-container-align-center u-section-1" id="sec-012a">
    <img class="u-expanded-width u-image u-image-1" src="{{ getFileVersion('assets/web/images/about1.jpg') }}" data-image-width="1980" data-image-height="1005" />
    <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-palette-1-light-1 u-repeater-item u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                    <span class="u-align-center u-icon u-icon-circle u-text-black u-white u-icon-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-22f7"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-22f7" style="enable-background: new 0 0 512 512">
                            <g>
                                <g>
                                    <path d="M165,332c-7.99,0-15-7.477-15-16c0-6.286,3.965-11.953,9.866-14.103c7.7-2.806,16.673,0.999,24.606,10.445    c5.33,6.344,14.79,7.167,21.134,1.839s7.167-14.79,1.839-21.133c-8.109-9.656-17.548-16.293-27.445-19.625V256    c0-8.284-6.716-15-15-15s-15,6.716-15,15v17.572c-0.134,0.047-0.268,0.088-0.401,0.137C131.895,280.157,120,297.153,120,316    c0,11.955,4.597,23.347,12.944,32.079C141.526,357.056,152.911,362,165,362c8.271,0,15,6.729,15,15    c0,6.042-3.596,11.468-9.159,13.825c-6.717,2.844-14.755,0.417-22.059-6.659c-5.951-5.764-15.445-5.614-21.211,0.335    c-5.764,5.95-5.614,15.446,0.336,21.21c6.772,6.561,14.301,11.197,22.093,13.813V437c0,8.284,6.716,15,15,15s15-6.716,15-15    v-17.571c18.295-6.504,30-23.575,30-42.429C210,352.187,189.813,332,165,332z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M463,18.844C435.379,6.692,399.155,0,361,0c-78.082,0-150,28.671-150,75c0,11.591,0,101.714,0,112.545    c-14.791-4.307-30.239-6.545-46-6.545c-43.972,0-85.406,17.376-116.67,48.928C17.164,261.381,0,302.958,0,347    c0,90.981,74.019,165,165,165c30.361,0,59.55-8.159,85.059-23.438C277.958,503.529,317.713,512,361,512    c38.155,0,74.379-6.692,102-18.844c31.598-13.901,49-33.845,49-56.156c0-9.342,0-352.464,0-362    C512,52.688,494.598,32.745,463,18.844z M165,482c-74.439,0-135-60.561-135-135c0-74.991,60.561-136,135-136    c74.99,0,136,61.009,136,136C301,421.439,239.99,482,165,482z M482,437c0,18.348-47.137,45-121,45    c-31.422,0-61.106-5.036-83.63-13.86c1.589-1.46,3.161-2.943,4.703-4.47c13.507-13.384,24.406-28.635,32.467-45.148    C329.443,420.82,345.011,422,361,422c39.443,0,88.356-7.667,121-29.019V437z M482,347c0,18.348-47.137,45-121,45    c-12.237,0-24.166-0.765-35.661-2.246C329.066,375.97,331,361.627,331,347c0-5.889-0.321-11.733-0.935-17.517    c10.104,1,20.445,1.517,30.935,1.517c39.446,0,88.355-7.668,121-29.019V347z M482,256c0,18.348-47.137,45-121,45    c-12.768,0-25.26-0.835-37.274-2.458c-7.785-25.252-21.674-48.495-40.917-67.958C306,237.356,332.938,241,361,241    c39.446,0,88.355-7.668,121-29.019V256z M482,166c0,18.348-47.137,45-121,45c-34.007,0-65.745-5.782-89.367-16.281    C252.737,186.322,241,175.317,241,166v-44.805C273.474,142.481,321.972,150,361,150c39.446,0,88.355-7.668,121-29.019V166z     M361,120c-73.276,0-120-26.255-120-45c0-18.803,46.857-45,120-45c73.863,0,121,26.652,121,45S434.863,120,361,120z"></path>
                                </g>
                            </g>
                        </svg></span>
                    <h5 class="u-align-center u-text u-text-1">Unique approach</h5>
                    <p class="u-align-center u-text u-text-2">
                        Sample text. Click to select the text box. Click again or double
                        click to start editing the text.
                    </p>
                </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-palette-1-light-1 u-repeater-item u-video-cover u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                    <span class="u-align-center u-icon u-icon-circle u-white u-icon-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 297 297" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3005"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 297 297" id="svg-3005">
                            <g>
                                <path d="m255.402,41.116c-22.937,0-41.599,18.661-41.599,41.598s18.661,41.599 41.599,41.599c22.937,0 41.598-18.662 41.598-41.599s-18.661-41.598-41.598-41.598zm0,65.786c-13.338,0-24.188-10.85-24.188-24.188 0-13.337 10.85-24.187 24.188-24.187 13.337,0 24.187,10.85 24.187,24.187 0.001,13.338-10.85,24.188-24.187,24.188z"></path>
                                <path d="m10.772,97.093c1.7,1.699 3.928,2.549 6.156,2.549s4.456-0.85 6.156-2.549l22.626-22.626 22.626,22.626c1.7,1.699 3.928,2.549 6.156,2.549 2.228,0 4.456-0.85 6.156-2.549 3.399-3.399 3.399-8.912 0-12.312l-22.627-22.625 22.626-22.626c3.399-3.399 3.399-8.912 0-12.312-3.4-3.398-8.911-3.398-12.312,0l-22.625,22.626-22.626-22.626c-3.4-3.398-8.911-3.398-12.312,0-3.399,3.399-3.399,8.912 0,12.312l22.626,22.626-22.626,22.625c-3.399,3.4-3.399,8.912 1.77636e-15,12.312z"></path>
                                <path d="m195.772,199.907c-3.4-3.398-8.911-3.398-12.312,0l-22.625,22.625-22.626-22.625c-3.4-3.398-8.911-3.398-12.312,0-3.399,3.4-3.399,8.912 0,12.312l22.626,22.625-22.626,22.626c-3.399,3.399-3.399,8.912 0,12.312 1.7,1.699 3.928,2.549 6.156,2.549s4.456-0.85 6.156-2.549l22.626-22.626 22.625,22.625c1.7,1.699 3.928,2.549 6.156,2.549 2.228,0 4.456-0.85 6.156-2.549 3.399-3.4 3.399-8.912 0-12.312l-22.625-22.625 22.625-22.625c3.4-3.4 3.4-8.913 0-12.312z"></path>
                                <path d="m196.45,77.836l-35.107-30.518c-3.628-3.155-9.127-2.768-12.281,0.859-3.154,3.628-2.769,9.126 0.859,12.281l18.618,16.185c-54.952,7.187-87.489,35.904-105.577,60.176-15.843,21.26-23.25,42.201-26.224,52.608-20.654,2.415-36.738,20.012-36.738,41.305 0,22.937 18.661,41.599 41.598,41.599s41.599-18.661 41.599-41.599c0-18.464-12.096-34.148-28.777-39.567 3.133-9.898 9.919-27.229 22.924-44.503 22.64-30.071 54.091-47.78 93.656-52.816l-17.348,19.957c-3.154,3.628-2.769,9.126 0.859,12.281 1.648,1.433 3.682,2.135 5.707,2.135 2.433,0 4.853-1.014 6.574-2.994l30.518-35.108c3.154-3.629 2.769-9.126-0.86-12.281zm-130.664,152.896c0,13.338-10.85,24.188-24.188,24.188-13.337,0-24.187-10.85-24.187-24.188 0-13.337 10.85-24.187 24.187-24.187 13.337,0 24.188,10.85 24.188,24.187z"></path>
                            </g>
                        </svg></span>
                    <h5 class="u-align-center u-text u-text-3">Service mix</h5>
                    <p class="u-align-center u-text u-text-4">
                        Sample text. Click to select the text box. Click again or double
                        click to start editing the text.
                    </p>
                </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-palette-1-light-1 u-repeater-item u-video-cover u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                    <span class="u-align-center u-icon u-icon-circle u-white u-icon-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 510 510" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-529f"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 510 510" id="svg-529f">
                            <g>
                                <path d="m393.159 121.41 69.152-86.44c-16.753-2.022-149.599-37.363-282.234-8.913v-26.057h-30v361.898c-25.85 6.678-45 30.195-45 58.102v1.509c-34.191 6.969-60 37.272-60 73.491v15h240v-15c0-36.22-25.809-66.522-60-73.491v-1.509c0-27.906-19.15-51.424-45-58.102v-124.733c153.335-30.989 264.132 7.082 284.847 9.834zm-140.653 358.59h-174.859c6.19-17.461 22.873-30 42.43-30h90c19.556 0 36.238 12.539 42.429 30zm-57.429-60h-60c0-16.542 13.458-30 30-30s30 13.458 30 30zm-15-213.427v-149.802c66.329-15.269 141.099-15.756 227.537-1.455l-50.619 63.274 48.8 85.4c-75.047-12.702-150.759-11.841-225.718 2.583z"></path>
                            </g>
                        </svg></span>
                    <h5 class="u-align-center u-text u-text-5">Our Mission</h5>
                    <p class="u-align-center u-text u-text-6">
                        Sample text. Click to select the text box. Click again or double
                        click to start editing the text.
                    </p>
                </div>
            </div>
            <div class="u-align-left u-container-align-center u-container-style u-list-item u-palette-1-light-1 u-repeater-item u-video-cover u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="250">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                    <span class="u-align-center u-icon u-icon-circle u-text-black u-white u-icon-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style="">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1746"></use>
                        </svg><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" id="svg-1746" style="enable-background: new 0 0 512 512">
                            <g>
                                <g>
                                    <path d="M269.145,240.999h-26.292c-13.474,0-24.435-10.961-24.435-24.434c0-13.474,10.962-24.437,24.435-24.437h52.583    c8.284,0,15-6.716,15-15s-6.716-15-15-15h-24.437v-24.438c0-8.285-6.716-15.001-15-15.001c-8.284,0-15,6.716-15,15v24.484    c-29.159,0.983-52.581,24.995-52.581,54.39c0,30.015,24.42,54.434,54.435,54.434h26.292c13.475,0,24.438,10.963,24.438,24.439    c0,13.474-10.963,24.436-24.438,24.436h-52.582c-8.284,0-15,6.716-15,15s6.716,15,15,15h24.436v24.437c0,8.284,6.716,15,15,15    c8.284,0,15-6.716,15-15v-24.483c29.16-0.982,52.584-24.994,52.584-54.389C323.582,265.419,299.161,240.999,269.145,240.999z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M442.762,321.127c-7.59-3.318-16.434,0.148-19.751,7.739c-29.018,66.405-94.573,109.313-167.014,109.313    c-89.499,0-165.35-66.392-179.719-152.472l39.786,26.584c6.888,4.603,16.203,2.75,20.806-4.139    c4.603-6.888,2.749-16.203-4.139-20.806l-65.583-43.821c-3.308-2.21-7.358-3.013-11.26-2.24c-3.902,0.776-7.335,3.071-9.546,6.379    L2.529,313.247c-4.602,6.889-2.748,16.204,4.14,20.806c2.56,1.711,5.455,2.529,8.319,2.529c4.841,0,9.595-2.341,12.486-6.668    l20.692-30.972c8.42,41.121,28.882,78.841,59.51,108.786c39.874,38.983,92.548,60.453,148.322,60.453    c84.364,0,160.712-49.969,194.503-127.302C453.819,333.287,450.354,324.444,442.762,321.127z"></path>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path d="M505.333,177.949c-6.89-4.602-16.204-2.749-20.806,4.139l-20.695,30.971c-8.42-41.122-28.882-78.842-59.51-108.787    c-39.874-38.983-92.549-60.453-148.323-60.453c-84.363,0-160.711,49.97-194.503,127.302c-3.317,7.591,0.148,16.434,7.739,19.751    s16.434-0.148,19.752-7.739c29.017-66.404,94.573-109.314,167.013-109.314c89.498,0,165.349,66.393,179.72,152.472l-39.786-26.582    c-6.889-4.604-16.203-2.749-20.806,4.139c-4.602,6.889-2.749,16.204,4.14,20.806l65.581,43.818    c2.56,1.711,5.455,2.529,8.319,2.529c4.842,0,9.594-2.34,12.485-6.668l43.818-65.577    C514.073,191.866,512.22,182.551,505.333,177.949z"></path>
                                </g>
                            </g>
                        </svg></span>
                    <h5 class="u-align-center u-text u-text-7">Strategic thinking</h5>
                    <p class="u-align-center u-text u-text-8">
                        Sample text. Click to select the text box. Click again or double
                        click to start editing the text.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p class="u-align-center u-text u-text-default u-text-9" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
        Image from
        <a href="#" class="u-active-none u-border-1 u-border-active-grey-60 u-border-grey-50 u-border-hover-grey-60 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Freepik</a>
    </p>

</section>
<section class="u-black u-clearfix u-section-2" id="carousel_e3c2">
    <div class="u-clearfix u-sheet u-valign-bottom-xl u-valign-bottom-xxl u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div class="u-container-align-left u-container-style u-layout-cell u-size-35-xl u-size-35-xxl u-size-60-lg u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h2 class="u-align-left u-text u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
                                Why you'll love us
                            </h2>
                            <div class="u-expanded-width u-list u-list-1">
                                <div class="u-repeater u-repeater-1">
                                    <div class="u-align-left u-container-align-left-lg u-container-align-left-xl u-container-align-left-xxl u-container-style u-list-item u-repeater-item u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                        <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-xl u-valign-top-xxl u-container-layout-2">
                                            <span class="u-align-left u-file-icon u-icon u-icon-1"><img src="{{ getFileVersion('assets/web/images/about2.png') }}" alt="" /></span>
                                            <h5 class="u-align-left u-custom-font u-font-montserrat u-text u-text-2">
                                                Strategic thinking looks beyond what's in front of
                                                you to see the bigger picture.
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                        <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-xl u-valign-top-xxl u-container-layout-3">
                                            <span class="u-align-left u-file-icon u-icon u-icon-2"><img src="{{ getFileVersion('assets/web/images/about2.png') }}" alt="" /></span>
                                            <h5 class="u-align-left u-custom-font u-font-montserrat u-text u-text-3">
                                                You'll have access to some of the brightest minds
                                                from all corners of the web.
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="u-align-left u-container-align-left u-container-style u-list-item u-repeater-item u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                        <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-xl u-valign-top-xxl u-container-layout-4">
                                            <span class="u-align-left u-file-icon u-icon u-icon-3"><img src="{{ getFileVersion('assets/web/images/about2.png') }}" alt="" /></span>
                                            <h5 class="u-align-left u-custom-font u-font-montserrat u-text u-text-4">
                                                Getting to know your brand inside and out means we
                                                can innovate on your behalf
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="u-align-left u-container-align-left-lg u-container-align-left-md u-container-align-left-xl u-container-align-left-xxl u-container-style u-list-item u-repeater-item u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                                        <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-xl u-valign-top-xxl u-container-layout-5">
                                            <span class="u-align-left u-file-icon u-icon u-icon-4"><img src="{{ getFileVersion('assets/web/images/about2.png') }}" alt="" /></span>
                                            <h5 class="u-align-left u-custom-font u-font-montserrat u-text u-text-5">
                                                When things take a turn, our partnership means we
                                                work with you to find creative solutions.
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="u-align-left u-text u-text-default u-text-6">
                                Image from
                                <a href="#" class="u-active-none u-border-1 u-border-active-grey-60 u-border-grey-75 u-border-hover-grey-60 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Freepik</a>
                            </p>
                            <a href="#" class="u-active-palette-3-base u-align-left u-black u-border-none u-btn u-btn-rectangle u-button-style u-custom-font u-font-raleway u-hover-palette-3-base u-radius-0 u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">read more</a>
                        </div>
                    </div>
                    <div class="u-container-style u-image u-layout-cell u-size-25-xl u-size-25-xxl u-size-60-lg u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="740" data-image-height="1110" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                        <div class="u-container-layout u-container-layout-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="u-clearfix u-container-align-center u-white u-section-3" id="carousel_13af">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-default-lg u-text-default-xl u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
            We believe in collaboration and innovation.
        </h2>
        <p class="u-align-center u-text u-text-default u-text-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
            These core values define who we are and the work we do.
        </p>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-border-2 u-border-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-container-style u-list-item u-repeater-item u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <h4 class="u-text u-text-3">
                            We’re genuine and compassionate.
                        </h4>
                        <p class="u-text u-text-4">
                            Being in the people business can mean difficult decisions and
                            tough conversations. We believe in going into every meeting
                            with a desire and ability to be genuine and compassionate. We
                            are all people, and people make mistakes. We’re here to help
                            you fix those, without risk or judgment, and move forward.
                        </p>
                    </div>
                </div>
                <div class="u-border-2 u-border-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-container-style u-list-item u-repeater-item u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-container-layout-2">
                        <h4 class="u-text u-text-5">
                            Honesty, integrity, and accountability.
                        </h4>
                        <p class="u-text u-text-6">
                            Tempus egestas sed sed risus pretium quam vulputate dignissim.
                            Ipsum consequat nisl vel pretium lectus quam id leo in. In
                            pellentesque massa placerat duis ultricies lacus. Sed lectus
                            vestibulum mattis ullamcorper velit sed ullamcorper. Etiam sit
                            amet nisl purus in mollis.
                        </p>
                    </div>
                </div>
                <div class="u-border-2 u-border-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-container-style u-list-item u-repeater-item u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-container-layout-3">
                        <h4 class="u-text u-text-7">Passion for our clients.</h4>
                        <p class="u-text u-text-8">
                            Tempus egestas sed sed risus pretium quam vulputate dignissim.
                            Ipsum consequat nisl vel pretium lectus quam id leo in. In
                            pellentesque massa placerat duis ultricies lacus. Sed lectus
                            vestibulum mattis ullamcorper velit sed ullamcorper. Etiam sit
                            amet nisl purus in mollis.
                        </p>
                    </div>
                </div>
                <div class="u-border-2 u-border-grey-15 u-border-no-bottom u-border-no-left u-border-no-right u-container-style u-list-item u-repeater-item u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-delay="500">
                    <div class="u-container-layout u-similar-container u-container-layout-4">
                        <h4 class="u-text u-text-9">
                            Drive for results, with unparalleled service.
                        </h4>
                        <p class="u-text u-text-10">
                            Tempus egestas sed sed risus pretium quam vulputate dignissim.
                            Ipsum consequat nisl vel pretium lectus quam id leo in. In
                            pellentesque massa placerat duis ultricies lacus. Sed lectus
                            vestibulum mattis ullamcorper velit sed ullamcorper. Etiam sit
                            amet nisl purus in mollis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="u-active-palette-3-base u-black u-border-none u-btn u-btn-rectangle u-button-style u-custom-font u-font-raleway u-hover-palette-3-base u-radius-0 u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">read more</a>
    </div>

</section>
<section class="u-align-center u-black u-clearfix u-container-align-center u-section-4" id="carousel_6107">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000">
            Clients we believe in
        </h2>
        <p class="u-align-center u-text u-text-2">
            Paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Curabitur id suscipit ex. Suspendisse rhoncus laoreet purus
            <a href="#" class="u-border-1 u-border-active-palette-1-light-3 u-border-hover-palette-1-light-3 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-button-link u-button-style u-none u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">quis elementum</a>. Phasellus sed efficitur dolor, et ultricies sapien. Quisque
            fringilla sit amet dolor commodo efficitur. Aliquam et sem odio.
        </p>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-1" data-image-width="300" data-image-height="90" src="{{ getFileVersion('assets/web/images/svg/logo-amazon.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-2" data-image-width="300" data-image-height="90" src="{{ getFileVersion('assets/web/images/svg/1.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-3" data-image-width="300" data-image-height="63" src="{{ getFileVersion('assets/web/images/svg/evga.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-4" data-image-width="300" data-image-height="39" src="{{ getFileVersion('assets/web/images/svg/tesla-9.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-5" data-image-width="300" data-image-height="54" src="{{ getFileVersion('assets/web/images/svg/sony-logo.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-6">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-6" data-image-width="300" data-image-height="65" src="{{ getFileVersion('assets/web/images/svg/crocs-wordmark.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-7">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-7" data-image-width="300" data-image-height="90" src="{{ getFileVersion('assets/web/images/svg/logo-amazon.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-8">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-8" data-image-width="300" data-image-height="87" src="{{ getFileVersion('assets/web/images/svg/asos-1.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-9">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-9" data-image-width="300" data-image-height="89" src="{{ getFileVersion('assets/web/images/svg/bergners-1.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-10">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-10" data-image-width="300" data-image-height="115" src="{{ getFileVersion('assets/web/images/svg/ffff.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-11">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-11" data-image-width="300" data-image-height="61" src="{{ getFileVersion('assets/web/images/svg/medium-wordmark.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-12">
                        <img alt="" class="u-image u-image-contain u-image-default u-image-12" data-image-width="300" data-image-height="61" src="{{ getFileVersion('assets/web/images/svg/t.svg') }}" data-animation-name="customAnimationIn" data-animation-duration="1500" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="u-align-center u-clearfix u-container-align-center u-palette-1-light-2 u-section-5" id="carousel_8109">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-align-center u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
            Testimonials
        </h2>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                        <div alt="" class="u-image u-image-circle u-image-1" data-image-width="864" data-image-height="1080"></div>
                        <p class="u-text u-text-2">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <h6 class="u-text u-text-default u-text-3">stella larson</h6>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="1500">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                        <div alt="" class="u-image u-image-circle u-image-2" data-image-width="980" data-image-height="1500"></div>
                        <p class="u-text u-text-4">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <h6 class="u-text u-text-default u-text-5">nick jhonson</h6>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="1500">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                        <div alt="" class="u-image u-image-circle u-image-3" data-image-width="1000" data-image-height="1500"></div>
                        <p class="u-text u-text-6">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <h6 class="u-text u-text-default u-text-7">olga ivanova</h6>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="1500">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                        <div alt="" class="u-image u-image-circle u-image-4" data-image-width="1260" data-image-height="698"></div>
                        <p class="u-text u-text-8">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <h6 class="u-text u-text-default u-text-9">paul hudson</h6>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-5" data-animation-name="customAnimationIn" data-animation-duration="1500">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5">
                        <div alt="" class="u-image u-image-circle u-image-5" data-image-width="512" data-image-height="750"></div>
                        <p class="u-text u-text-10">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <h6 class="u-text u-text-default u-text-11">cash hudson</h6>
                    </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-6" data-animation-name="customAnimationIn" data-animation-duration="1500">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-6">
                        <div alt="" class="u-image u-image-circle u-image-6" data-image-width="1000" data-image-height="1500"></div>
                        <p class="u-text u-text-12">
                            Sample text. Click to select the text box. Click again or
                            double click to start editing the text.
                        </p>
                        <h6 class="u-text u-text-default u-text-13">mike perry</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="u-clearfix u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-section-6" id="carousel_8747">
    <div class="u-clearfix u-gutter-28 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-container-align-left-xxl u-container-style u-layout-cell u-shape-rectangle u-size-20-lg u-size-20-xl u-size-20-xxl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                        <img class="u-expanded-width-xl u-image u-image-default u-image-1" src="{{ getFileVersion('assets/web/images/about3.png') }}" alt="" data-image-width="407" data-image-height="387" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500" />
                    </div>
                </div>
                <div class="u-container-style u-layout-cell u-shape-rectangle u-size-40-lg u-size-40-xl u-size-40-xxl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="0">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <h2 class="u-text u-text-default u-text-1">
                            Want to launch your brand into the future? Strap in and let's
                            go!
                        </h2>
                        <p class="u-text u-text-default u-text-2">
                            Article evident arrived express highest men did boy. Mistress
                            sensible entirely am so. Quick can manor smart money hopes
                            worth too. Comfort produce husband boy her had hearing. Law
                            others theirs passed but wishes. You day real less till dear
                            read.
                        </p>
                        <p class="u-text u-text-3">
                            Image from
                            <a href="#" class="u-active-none u-border-1 u-border-active-grey-60 u-border-grey-75 u-border-hover-grey-60 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Freepik</a>
                        </p>
                        <a href="#" class="u-active-palette-3-base u-black u-border-none u-btn u-btn-rectangle u-button-style u-custom-font u-font-raleway u-hover-palette-3-base u-radius-0 u-text-active-black u-text-body-alt-color u-text-hover-black u-btn-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="u-clearfix u-container-align-center u-valign-middle u-section-7" id="carousel_67ed">
    <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
                <div class="u-container-align-center u-container-style u-image u-layout-cell u-left-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="1380" data-image-height="920" data-animation-name="customAnimationIn" data-animation-duration="1000">
                    <div class="u-container-layout u-container-layout-1"></div>
                </div>
                <div class="u-container-align-center u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-xl u-size-30-xxl u-size-60-md u-size-60-sm u-size-60-xs u-white u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                    <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <h2 class="u-align-center u-text u-text-1">
                            Follow us on Social
                        </h2>
                        <p class="u-align-center u-text u-text-2">
                            Looking for the latest industry insights, timely agency
                            updates? Follow us on social:
                        </p>
                        <div class="u-social-icons u-spacing-21 u-social-icons-1">
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2fe9"></use>
                                    </svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-2fe9" class="u-svg-content">
                                        <circle fill="#3B5998" cx="56.1" cy="56.1" r="55"></circle>
                                        <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                                    </svg></span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0979"></use>
                                    </svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-0979" class="u-svg-content">
                                        <circle fill="#55ACEE" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                                        <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                                    </svg></span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-46f7"></use>
                                    </svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-46f7" class="u-svg-content">
                                        <circle fill="#C536A4" cx="56.1" cy="56.1" r="55"></circle>
                                        <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                                        <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                                        <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                                    </svg></span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-270d"></use>
                                    </svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-270d" class="u-svg-content">
                                        <circle fill="#007AB9" cx="56.1" cy="56.1" r="55"></circle>
                                        <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
                                    </svg></span>
                            </a>
                            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-google u-social-icon u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ede4"></use>
                                    </svg><svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ede4" class="u-svg-content">
                                        <circle fill="#DC4E41" cx="56.1" cy="56.1" r="55"></circle>
                                        <path fill="#FFFFFF" d="M60.8,76.3c-6.6,8.6-19,11.1-29,7.7c-10.6-3.5-18.4-14.2-18.2-25.5C13,44.6,25.3,31.8,39.1,31.6
            c7.1-0.6,14,2.1,19.3,6.6c-2.2,2.4-4.4,4.8-6.9,7.1c-4.8-2.9-10.4-5-15.9-3.1c-8.8,2.6-14.3,13-10.9,21.8
            c2.7,9.1,13.7,14.1,22.5,10.2c4.5-1.6,7.5-5.7,8.7-10.2c-5.1-0.1-10.2,0-15.5-0.2c0-3,0-6.1,0-9.2c8.6,0,17.1,0,25.7,0
            C66.7,62.3,65.5,70.4,60.8,76.3z M98.3,62.5c-2.6,0-5.1,0-7.7,0c0,2.6,0,5.1,0,7.7c-2.6,0-5.1,0-7.7,0c0-2.6,0-5.1,0-7.7
            c-2.6,0-5.1,0-7.7,0c0-2.6,0-5.1,0-7.7c2.6,0,5.1,0,7.7,0c0-2.6,0-5.1,0.1-7.7c2.6,0,5.1,0,7.7,0c0,2.6,0,5.1,0,7.7
            c2.6,0,5.1,0,7.7,0C98.3,57.3,98.3,59.9,98.3,62.5z"></path>
                                    </svg></span>
                            </a>
                        </div>
                        <p class="u-text u-text-grey-50 u-text-3">
                            Image from
                            <a href="#" class="u-active-none u-border-1 u-border-active-grey-60 u-border-grey-40 u-border-hover-grey-60 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-grey-50 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Freepik</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection

@push('js')

@endpush