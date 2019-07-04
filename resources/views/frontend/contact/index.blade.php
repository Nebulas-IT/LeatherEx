@extends('frontend.layouts.index')

@section('title','Contact')


@push('css')

@endpush


@section('content')

    <section id="main-content" class="template-common">
        @include('frontend.layouts.partial.navbar_bottom')
        <div class="content-heading">
            <h2 class="text-center">Contact Info</h2>
        </div>
        <div class="contact-info">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-text">
                        <div class="info-address">
                            <h2>Head Office:</h2>
                            <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                8/b, Celestine Apartment, road 2, gulshan-1, Dhaka -1212
                            </p>
                        </div>
                        <div class="info-address">
                            <h2>Banani Outlet Address:</h2>
                            <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                Kazi's heritage H#49, Rd#11, Block#H Banani-11 Dhaka-1213
                            </p>
                            <p><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> 01784196672 </p>
                            <p><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> We are open 7 days in a week From 10:30 AM - 9:00 PM
                            </p>
                        </div>
                        <div class="info-address">
                            <h2>Dhanmondi Outlet Address:</h2>
                            <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                Orchard Point H#17, R#7 Dhanmondi Dhaka - 1205
                            </p>
                            <p><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> 01784196670 </p>
                            <p><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i> We are open Wed-Mon ( Tuesday Weekend) From 10 AM-8:30 PM
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-text">
                        <div class="info-address">
                            <h2>Farmgate Outlet Address:</h2>
                            <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                86, Kazi Nazrul Islam Avenue Dhaka-1215
                            </p>
                            <p><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> 01784196671 </p>
                            <p><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                We are open 7 days in a week From From 10:30 AM-9 PM
                            </p>
                        </div>
                        <div class="info-address">
                            <h2>Ring Road Outlet Address:</h2>
                            <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                18/5 tikkapara (ring road), Block# F, Mohammadpur, Dhaka-1207
                            </p>
                            <p><i class="fa fa-phone-square fa-lg" aria-hidden="true"></i> 01757291161 </p>
                            <p><i class="fa fa-clock-o fa-lg" aria-hidden="true"></i>
                                We are open 7 days in a week From 10:30 AM-9 PM
                            </p>
                        </div>
                        <div class="info-address">
                            <h2>Baily Road Outlet Address:</h2>
                            <p><i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                                AQP Shopping Mall, 143/32, New Baily Road, Dhaka-1000
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-space"></div>
        <div class="row">
            <?php /* ?>
            <div class="col-md-6">
                <h3 class="contact-h3">Please send us your comments and questions and we will answer you as soon as
                    possible.</h3>
                <h3 class="contact-h3">You can also have a look at our FAQ page.</h3>
                <h3 class="contact-h3">If you want to do a story about us for your media outlet? Please use subject
                    <strong>"Press Request"</strong> when contacting us?</h3>
            </div>
            <?php */ ?>
            <div class="col-md-6 col-md-offset-3">
                <div class="form-wrapper">
                    <div class="formBox">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">First Name</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="inputBox">
                                        <div class="inputText">Last Name</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="inputBox">
                                        <div class="inputText">Email Address *</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="inputBox">
                                        <div class="inputText">Subject *</div>
                                        <input type="text" name="" class="input">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="inputBox">
                                        <div class="inputText">Message *</div>
                                        <textarea class="input"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 content-center">
                                    <div class="newsletter-form-button-wrapper submit-wrapper">
                                        <button class="newsletter-form-button sqs-system-button sqs-editable-button-layout sqs-editable-button-style sqs-editable-button-shape"
                                                type="submit" value="Sign Up"><span
                                                    class="newsletter-form-spinner sqs-spin light large"></span><span
                                                    class="newsletter-form-button-label">SUBMIT</span><span
                                                    class="newsletter-form-button-icon"></span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!--Form Wrapper Close-->
            </div>
        </div>

        <?php  ?>

    </section> <!--End of main-content-->

@endsection

@push('scripts')

@endpush