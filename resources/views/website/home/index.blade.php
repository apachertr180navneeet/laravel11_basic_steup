@extends('website.layouts.app')
@section('style')
@endsection  

@section('content')
<div class="site-wrapper-reveal">
    <div class="modern-it-company-top-area">
        <!--============ Modern It Company Hero Start ============-->
        <div class="modern-it-company-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="modern-it-company-hero-image">
                        <img src="{{asset('website/assets/images/hero/home-reputable-success.webp')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-lg-10 col-md-10">
                        <div class="modern-it-company-hero-text wow move-up section-space--pt_150">
                            <h1 class="heading">Make your life easier with help from <mark class="text-color-primary"> Mitech</mark></h1>
                            <h6 class="sort-dec">Team up with the best collaboration from the right expertises.</h6>

                            <div class="book-box">
                                <div class="image">
                                    <img src="{{asset('website/assets/images/icons/green-curve-arrow.webp')}}" class="img-fluid" alt="" />
                                </div>
                                <h5 class="book-text font-weight--bold mb-15">Booking is open today with profitable incentives for beginners.</h5>
                            </div>

                            <div class="modern-it-company-form-wrap">
                                <form id="contact-form" action="https://htmldemo.net/mitech/assets/php/hero-mail.php" method="post">
                                    <div class="modern-it-company-contact-form-hero">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="contact-inner">
                                                    <input name="con_email" type="email" placeholder="Email *" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="contact-select">
                                                    <div class="form-item contact-inner">
                                                        <span class="inquiry">
                                                            <select id="Visiting" name="Visiting">
                                                                <option disabled="" selected="">Select Department to email</option>
                                                                <option value="Your inquiry about">Your inquiry about</option>
                                                                <option value="General Information Request"> General Information Request</option>
                                                                <option value="Partner Relations">Partner Relations</option>
                                                                <option value="Careers">Careers</option>
                                                                <option value="Software Licencing">Software Licencing</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="button-wrap">
                                                    <a href="#" class="ht-btn ht-btn-md ht-btn-full" type="submit">Get a free consultation</a>
                                                    <p class="form-messege"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============ Modern It Company Hero End ============-->

        <!--====================  brand logo slider area ====================-->
        <div class="brand-logo-slider-area section-space--ptb_80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-space--mb_60">
                            <h5 class="heading-text text-center">
                                Step forward to become one of <span class="text-color-primary">49,494</span> successful clients of Mitech and get in the front line for the most wonderful presentation.
                            </h5>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- brand logo slider -->
                        <div class="brand-logo-slider__container-area">
                            <div class="swiper-container brand-logo-slider__container">
                                <div class="swiper-wrapper brand-logo-slider__one">
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-01.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-01-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-02.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-02-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-03.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-03-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-04.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-04-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-05.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-05-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-06.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-06-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-07.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-07-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-08.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-08-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide brand-logo brand-logo--slider">
                                        <a href="#">
                                            <div class="brand-logo__image">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-09.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                            <div class="brand-logo__image-hover">
                                                <img src="{{asset('website/assets/images/brand/mitech-client-logo-09-hover.webp')}}" class="img-fluid" alt="" />
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of brand logo slider area  ====================-->

        <!-- ================  Clients Review Area Start ======================= -->
        <div class="modern-it-company-clients-review-area modern-it-company-testimonial-bg section-space--pb_120">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="image text-center">
                            <img src="{{asset('website/assets/images/testimonial/home-reputable-success-about-image.webp')}}" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="modern-it-company-testimonial text-left">
                            <p class="text">You know you did right when all your effort started to pay off in an unexpected and impressive way. @Mitech brings clients and businesses together in a fair play field.</p>
                            <div class="author">
                                <h6>Luna Lovewoods</h6>
                                <p>/ Web design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================  Clients Review Area End ======================= -->
    </div>

    <!--=========== fun fact Wrapper Start ==========-->
    <div class="fun-fact-wrapper bg-gray section-space--pb_30 section-space--pt_60">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="fun-fact--four text-center">
                        <div class="icon">
                            <i class="far fa-smile-beam"></i>
                        </div>
                        <div class="fun-fact-text">
                            <div class="fun-fact__count counter">1790</div>
                            <h6 class="fun-fact__text">Happy clients</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="fun-fact--four text-center">
                        <div class="icon">
                            <i class="far fa-folder"></i>
                        </div>
                        <div class="fun-fact-text">
                            <div class="fun-fact__count counter">920</div>
                            <h6 class="fun-fact__text">Finished projects</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="fun-fact--four text-center">
                        <div class="icon">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="fun-fact-text">
                            <div class="fun-fact__count counter">245</div>
                            <h6 class="fun-fact__text">Experienced experts</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper End ==========-->

    <!--===========  Feature Images Wrapper Start =============-->
    <div class="feature-images-wrapper bg-gradient section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h2 class="heading">
                            No shortage in resources & initiatives in <br />
                            <span class="text-color-primary"> Technology Aid </span>
                        </h2>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="image-l-r-box">
                <div class="row">
                    <div class="col image-box-area">
                        <div class="row image-box-boder-box">
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img src="{{asset('website/assets/images/icons/mitech-processing-service-image-01-100x104.webp')}}" class="img-fluid" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">IT Design</h6>
                                            <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.</div>
                                            <div class="more-arrow-link">
                                                <a href="#"> Learn more <i class="fas fa-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img src="{{asset('website/assets/images/icons/mitech-processing-service-image-02-100x104.webp')}}" class="img-fluid" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">IT Management</h6>
                                            <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.</div>
                                            <div class="more-arrow-link">
                                                <a href="#"> Learn more <i class="fas fa-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img src="{{asset('website/assets/images/icons/mitech-processing-service-image-03-100x104.webp')}}" class="img-fluid" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Data Security</h6>
                                            <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.</div>
                                            <div class="more-arrow-link">
                                                <a href="#"> Learn more <i class="fas fa-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img src="{{asset('website/assets/images/icons/mitech-processing-service-image-04-100x104.webp')}}" class="img-fluid" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Infrastructure Plan</h6>
                                            <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.</div>
                                            <div class="more-arrow-link">
                                                <a href="#"> Learn more <i class="fas fa-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img src="{{asset('website/assets/images/icons/mitech-processing-service-image-05-100x104.webp')}}" class="img-fluid" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Firewall Advancement</h6>
                                            <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.</div>
                                            <div class="more-arrow-link">
                                                <a href="#"> Learn more <i class="fas fa-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 image-box-boder">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-09">
                                    <div class="image-box-wrap">
                                        <div class="box-image">
                                            <img src="{{asset('website/assets/images/icons/mitech-processing-service-image-06-100x104.webp')}}" class="img-fluid" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6 class="heading">Desktop Computing</h6>
                                            <div class="text">We provide the most responsive and functional IT design for companies and businesses worldwide.</div>
                                            <div class="more-arrow-link">
                                                <a href="#"> Learn more <i class="fas fa-arrow-right"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="talk-message-box-wrapper section-space--mt_80 small-mt__60">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="talk-message-box">
                            <div class="message-icon">
                                <i class="far fa-comment-alt"></i>
                            </div>
                            <div class="talk-message-box-content">
                                <h6 class="heading">Cheers to the work that comes from trusted service providers in time.</h6>
                                <a href="#" class="ht-btn ht-btn-sm">Lets talk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  Feature Images Wrapper End =============-->

    <!--===========  Projects wrapper Start =============-->
    <div class="projects-wrapper section-space--pb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h2 class="heading">We stand out for some reasons.</h2>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="projects-wrap swiper-container projects-slider__three">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="assets/images/projects/home-reputable-success-client-image-05-480x360.webp')}}" alt="" />
                                            <div class="project-logo">
                                                <img src="{{asset('website/assets/images/icons/home-reputable-success-client-logo-04.webp')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Attentive and positive attitude builds great career environment
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="assets/images/projects/home-reputable-success-client-image-06-480x360.webp')}}" alt="" />
                                            <div class="project-logo">
                                                <img src="{{asset('website/assets/images/icons/home-reputable-success-client-logo-06.webp')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Precise projection of risks and potentials via advanced tools
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="assets/images/projects/home-reputable-success-client-image-01-480x360.webp')}}" alt="" />
                                            <div class="project-logo">
                                                <img src="{{asset('website/assets/images/icons/home-reputable-success-client-logo-01.webp')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Professional consulting with reasonable budgeting strategies.
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="assets/images/projects/home-reputable-success-client-image-02-480x360.webp')}}" alt="" />
                                            <div class="project-logo">
                                                <img src="{{asset('website/assets/images/icons/home-reputable-success-client-logo-02.webp')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                24/7 support center with fast response and prompt action
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Projects Wrap Start -->
                                <a href="#" class="projects-wrap style-3 wow move-up">
                                    <div class="projects-image-box">
                                        <div class="projects-image">
                                            <img class="img-fluid" src="assets/images/projects/home-reputable-success-client-image-03-480x360.webp')}}" alt="" />
                                            <div class="project-logo">
                                                <img src="{{asset('website/assets/images/icons/home-reputable-success-client-logo-03.webp')}}" alt="" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">
                                                Professional consulting with reasonable budgeting strategies.
                                            </h5>
                                        </div>
                                    </div>
                                </a>
                                <!-- Projects Wrap End -->
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-black swiper-pagination-project mt_20"></div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_40">Never underestimate your potentials. <a href="#">It all started here.</a></div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  Projects wrapper End =============-->

    <!--====================  Conact us Section Start ====================-->
    <div class="contact-us-section-wrappaer processing-contact-us-bg section-space--ptb_120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading text-white">Obtaining further information by make a contact with our experienced IT staffs.</h3>

                        <div class="sub-heading text-white">
                            We’re available for 8 hours a day!<br />
                            Contact to require a detailed analysis and assessment of your plan.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-lg-6">
                    <div class="contact-info-two text-center">
                        <div class="icon">
                            <span class="fas fa-phone"></span>
                        </div>
                        <h6 class="heading font-weight--reguler">Reach out now!</h6>
                        <h2 class="call-us"><a href="tel:190068668">1900 68668</a></h2>
                        <div class="contact-us-button mt-20">
                            <a href="#" class="btn btn--secondary">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  Conact us Section End  ====================-->

    <!--==================== Claim To Excel Area Start ====================-->
    <div class="claim-to-excel-area section-space--ptb_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h2 class="heading">How we claim to excel?</h2>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="claim-grid-group">
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-one">
                                <div class="icon">
                                    <span class="icon-basic-anticlockwise"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">01</h6>
                                    <h5 class="heading">Prompt help</h5>
                                    <p class="text">We give prompt help desk answer right when receiving the request from customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-two">
                                <div class="icon">
                                    <span class="icon-basic-life-buoy"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">02</h6>
                                    <h5 class="heading">Sound advice</h5>
                                    <p class="text">Knowledge come with age and time. Our experts make sure it works.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-three">
                                <div class="icon">
                                    <span class="icon-basic-world"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">03</h6>
                                    <h5 class="heading">Zero risk</h5>
                                    <p class="text">No risking factors are present and we have all kinds of measures to protect against losses.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-four">
                                <div class="icon">
                                    <span class="icon-basic-case"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">04</h6>
                                    <h5 class="heading">Tech savvy</h5>
                                    <p class="text">Technological wise plans are made for addressing all kinds of requests and demands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="ht-box-icon style-04">
                            <div class="icon-box-wrap color-five">
                                <div class="icon">
                                    <span class="icon-basic-lock"></span>
                                </div>
                                <div class="content">
                                    <h6 class="sub-heading">05</h6>
                                    <h5 class="heading">Satisfied</h5>
                                    <p class="text">100% of our current and recurring customers feel satisfied with the final results.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row--10">
                <div class="col-lg-8">
                    <div class="success-stories-wrap mt-40">
                        <div class="modern-number-01 me-5">
                            <h2 class="heading"><span class="mark-text">49</span></h2>
                            <p>YEARS IN THE FIELD</p>
                        </div>
                        <div class="content">
                            <h4 class="heading mb-20">
                                Read further to <br />
                                our Success <br />
                                Stories
                            </h4>
                            <a href="#" class="ht-btn ht-btn-md"><i class="far fa-comment-alt me-2"></i> Lets talk</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="modern-it-newsletters-wrap text-center mt-40">
                        <div class="section-title">
                            <h6 class="heading mb-30">Don’t miss our monthly newsletters with the best analyses.</h6>
                        </div>
                        <form action="#">
                            <div class="contact-inner">
                                <input name="con_email" type="email" placeholder="Your e-mail" />
                            </div>
                            <div class="button-wrap mb-15">
                                <a href="#" class="ht-btn ht-btn-md ht-btn-full">Subscribe</a>
                            </div>
                            <p>Join 89.898 subscribers.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==================== Claim To Excel Area End ====================-->
</div>


@endsection

@section('script')
@endsection