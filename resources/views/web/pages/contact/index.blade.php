@extends('web.layouts.master')

@section('title', 'G2B ｜GO TO BYTES | CONTACT')
@section('bodyClass', 'homepage navstate_hide')
@section('sectionClass', 'main_body p-top')

@push('css')
<link rel="stylesheet" href="{{ getFileVersion('assets/web/css/contact.css') }}" media="screen" />
@endpush

@section('content')
<section class="u-align-center u-clearfix u-palette-1-base u-section-1" id="carousel_addc">
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Get in touch</h2>
        <div class="u-align-center u-container-style u-expanded-width-xs u-group u-shape-rectangle u-white u-group-1">
            <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
                <h4 class="u-custom-font u-font-montserrat u-text u-text-default-lg u-text-default-xl u-text-2">
                    Email us with any questions or inquiries <br />or use our contact
                    data.
                </h4>
                <h6 class="u-custom-font u-font-montserrat u-text u-text-default u-text-3">
                    Email us with any questions or inquiries or use our contact data.
                </h6>
                <div class="u-form u-form-1">
                    <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form" source="email" name="form" style="padding: 0px">
                        <div class="u-form-email u-form-group u-form-partition-factor-2">
                            <label for="email-c6a3" class="u-label">Email</label>
                            <input type="email" placeholder="Enter a valid email address" id="email-c6a3" name="email" class="u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" wfd-id="id157" />
                        </div>
                        <div class="u-form-group u-form-name u-form-partition-factor-2">
                            <label for="name-c6a3" class="u-label">Name</label>
                            <input type="text" placeholder="Enter your Name" id="name-c6a3" name="name" class="u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" wfd-id="id158" />
                        </div>
                        <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-3">
                            <label for="phone-84d9" class="u-label">Phone</label>
                            <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-84d9" name="phone" class="u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" wfd-id="id159" />
                        </div>
                        <div class="u-form-address u-form-group u-form-partition-factor-2 u-form-group-4">
                            <label for="address-be2d" class="u-label">Address</label>
                            <input type="text" placeholder="Enter your address" id="address-be2d" name="address" class="u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required="" wfd-id="id160" />
                        </div>
                        <div class="u-form-group u-form-message">
                            <label for="message-c6a3" class="u-label">Message</label>
                            <textarea placeholder="Enter your message" rows="4" cols="50" id="message-c6a3" name="message" class="u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle" required=""></textarea>
                        </div>
                        <div class="u-align-center u-form-group u-form-submit">
                            <a href="#" class="u-active-black u-border-none u-btn u-btn-submit u-button-style u-custom-font u-font-raleway u-hover-black u-palette-1-base u-text-active-black u-text-body-color u-text-hover-black u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">Submit</a>
                            <input type="submit" value="submit" class="u-form-control-hidden" wfd-id="id161" />
                        </div>
                        <div class="u-form-send-message u-form-send-success">
                            Thank you! Your message has been sent.
                        </div>
                        <div class="u-form-send-error u-form-send-message">
                            Unable to send your message. Please fix errors then try again.
                        </div>
                        <input type="hidden" value="" name="recaptchaResponse" wfd-id="id162" />
                        <input type="hidden" name="formServices" value="f1ae942e-b994-43e5-79b2-63e9b2e2d729" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')

@endpush