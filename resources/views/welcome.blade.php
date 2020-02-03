<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Home :: Geosol Consulting</title>
        <link rel="icon" type="image/png"  href="{{asset('images/favicon.ico')}}"/>

        <!--Core CSS -->
        <link href="{{asset('css/core.css')}}" rel="stylesheet">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet">

        <!--Libraries-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

        {{-- <link href="https://cdn.jsdelivr.net/gh/code-fx/Pure-CSS3-Animated-Border@V1.0/css/animated-border/animated-border.min.css" rel="stylesheet"> --}}

    </head>

    <body>
    <div id="app">
            <div id="preloader">
                <div id="status"></div>
            </div>
            
        <section class="section-1 section hero hero-landing is-fullheight">

            @include('_includes.nav.main') <!--includes the main navigation -->

                <!-- <div class="container_item landing-page-container">
                    <div class="container-wrapper">
                        <p class="coords"> N 49 416 35.99 W 0 42 11.30</p>
                        <div class="ecllipse-container">
                            <h2 class="greeting">explore</h2>
                            <div class="ellipse ellipse_outer--thin">
                                <div class="ellipse ellipse_orbit"></div>
                            </div>
                            <div class="ellipse ellipse_outer--thick"></div>

                        </div>
                    </div>
                </div> -->


                <!-- .hero-body -->
                <header class="hero-body">
                    <div class="landing-caption is-overlay has-text-centered single-spaced" style="top: 400px;">
                        <h1 class="is-1 has-text-white is-uppercase">Explore & Locate</h1>
                        <h1 class="title is-7 has-text-white is-uppercase">Scroll to continue</h1>
                        <a href= "#">
                            <img src="{{asset('images/logos/scroll-down.svg')}}" alt="" width="28" height="56px">
                        </a>
                    </div>
                </header>
                <!-- /.hero-body -->


                <!-- <div class="hero-foot mb-20">
                    <div class="container">
                        <div class="tabs is-centered">
                            <ul>
                                <li><a><img class="partner-logo" src="{{asset('images/logos/clients/systek.svg')}}"></a></li>
                                <li><a><img class="partner-logo" src="{{asset('images/logos/clients/tribe.svg')}}" ></a></li>
                                <li><a><img class="partner-logo" src="{{ asset('images/logos/clients/kromo.svg')}}"></a></li>
                                <li><a><img class="partner-logo" src="{{ asset('images/logos/clients/infinite.svg')}}"></a></li>
                                <li><a><img class="partner-logo" src="{{ asset('images/logos/clients/gutwork.svg')}}"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>  -->

        </section> <!-- end of fullheight hero section  -->

        <section class="section-2 section is-large">
            <div class="container" >
                <div class="title-wrapper has-text-centered">
                    <h2 class="title is-2">Great Power Comes </h2>
                    <h3 class="subtitle is-5 is-muted">With great Responsability</h3>
                    <div class="divider is-centered"></div>
                </div>

                <div class="content-wrapper">
                    <div class="columns">
                        <div class="column is-one-third">
                            <div class="feature-card is-bordered has-text-centered revealOnScroll delay-1" data-animation="fadeInLeft">
                                <div class="card-title">
                                    <h4>App builder</h4>
                                </div>
                                <div class="card-icon">
                                    <img src="{{asset('images/illustrations/icons/mouse-globe.svg')}}">
                                </div>
                                <div class="card-text">
                                    <p>This is some explanatory text that is on two rows</p>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="button btn-align-md accent-btn raised">Free Trial</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="feature-card is-bordered has-text-centered revealOnScroll delay-2" data-animation="fadeInLeft">
                                <div class="card-title">
                                    <h4>Cloud integration</h4>
                                </div>
                                <div class="card-icon">
                                    <img src="{{asset('images/illustrations/icons/laptop-cloud.svg')}}">
                                </div>
                                <div class="card-text">
                                    <p>This is some explanatory text that is on two rows</p>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="button btn-align-md secondary-btn raised">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="feature-card is-bordered has-text-centered revealOnScroll delay-3" data-animation="fadeInLeft">
                                <div class="card-title">
                                    <h4>Addons & Plugins</h4>
                                </div>
                                <div class="card-icon">
                                    <img src="{{asset('images/illustrations/icons/plug-cloud.svg')}}">
                                </div>
                                <div class="card-text">
                                    <p>This is some explanatory text that is on two rows</p>
                                </div>
                                <div class="card-action">
                                    <a href="#" class="button btn-align-md primary-btn raised">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3 section is-large">
            <div class="container">
                <div class="columns">
                    <div class="column is-centered-tablet-portrait">
                        <h1 class="title section-title">You're here because you want the best</h1>
                        <h3 class="subtitle is-5 is-muted">And we Know it</h3>
                        <div class="divider"></div>
                    </div>
                    <div class="column is-7 mt-60">

                        <!-- icon block -->
                        <article class="media icon-box">
                            <figure class="media-left">
                                <p class="image">
                                    <img src="{{asset('images/illustrations/icons/laptop-globe.svg')}}">
                                </p>
                            </figure>
                            <div class="media-content mt-50">
                                <div class="content">
                                    <p>
                                        <span class="icon-box-title">Powerful and unified interface</span>
                                        <span class="icon-box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</span>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <!-- /icon block -->

                        <!-- icon block -->
                        <article class="media icon-box">
                            <figure class="media-left">
                                <p class="image">
                                    <img src="{{asset('images/illustrations/icons/doc-sync.svg')}}">
                                </p>
                            </figure>
                            <div class="media-content mt-50">
                                <div class="content">
                                    <p>
                                        <span class="icon-box-title">Cross device Synchronisation</span>
                                        <span class="icon-box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</span>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <!-- /icon block -->

                        <!-- icon block -->
                        <article class="media icon-box">
                            <figure class="media-left">
                                <p class="image">
                                    <img src="{{asset('images/illustrations/icons/mobile-feed.svg')}}">
                                </p>
                            </figure>
                            <div class="media-content mt-50">
                                <div class="content">
                                    <p>
                                        <span class="icon-box-title">Nomad System</span>
                                        <span class="icon-box-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</span>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <!-- /icon block -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section-4 section section-feature-grey is-large">
            <div class="container">

                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <div class="has-text-centered">
                            <img class="pushed-image" src="{{asset('images/illustrations/mockups/app-mockup.png')}}">
                        </div>
                    </div>
                </div>

                <div class="title-wrapper has-text-centered">
                    <h2 class="title is-2">One Platform</h2>
                    <h3 class="subtitle is-5 is-muted">To rule them All</h3>
                </div>

                <p class="has-text-centered mt-20">
                    <a class="button cta is-large rounded secondary-btn raised">
                        Get Started
                    </a>
                </p>
            </div>
        </section>

        <section class="section-5 section is-large section-secondary">
            <div class="container">

                <div class="title-wrapper has-text-centered">
                    <h2 class="title is-2 light-text is-spaced">Our Clients love us !</h2>
                    <h3 class="subtitle is-5 light-text">Lorem ipsum sit dolor amet is a dummy text used by typography industry </h3>
                </div>

                <div class="content-wrapper">
                    <div class="columns is-vcentered">
                        <div class="column is-4">
                            <figure class="testimonial">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                                </blockquote>
                                <div class="author">
                                    <img src="{{asset('images/illustrations/faces/1.png')}}" alt=""/>
                                    <h5>Irma Walters</h5><span>Accountant</span>
                                </div>
                            </figure>
                        </div>
                        <div class="column is-4">
                            <figure class="testimonial">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                                </blockquote>
                                <div class="author">
                                    <img src="{{asset('images/illustrations/faces/2.png')}}" alt=""/>
                                    <h5>John Bradley</h5><span>Financial Analyst</span>
                                </div>
                            </figure>
                        </div>
                        <div class="column is-4">
                            <figure class="testimonial">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, elit deleniti dissentias quo eu, hinc minim appetere te usu, ea case duis scribentur has. Duo te consequat elaboraret, has quando suavitate at.
                                </blockquote>
                                <div class="author">
                                    <img src="{{asset('images/illustrations/faces/3.png')}}" alt=""/>
                                    <h5>Gary Blackman</h5><span>HR Manager</span>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-6 section section-light-grey is-medium">
            <div class="container">
                <div class="title-wrapper has-text-centered">
                    <h2 class="title is-2 is-spaced">Drop us a line or two </h2>
                    <h3 class="subtitle is-5 is-muted">We'd love to hear from You</h3>
                    <div class="divider is-centered"></div>
                </div>

                <div class="content-wrapper">
                    <div class="columns">
                        <div class="column is-6 is-offset-3">
                            <form>
                                <div class="columns is-multiline">
                                    <div class="column is-6">
                                        <input class="input is-medium" type="text" placeholder="Enter your Name">
                                    </div>
                                    <div class="column is-6">
                                        <input class="input is-medium" type="email" placeholder="Enter your Email">
                                    </div>
                                    <div class="column is-12">
                                        <textarea class="textarea" rows="10" placeholder="Write someting ..."></textarea>
                                    </div>
                                    <div class="form-footer has-text-centered mt-10">
                                        <button class="button cta is-large primary-btn raised is-clear">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-7 is-large">
            @include('_includes.footer') <!--includes the footer-->
        </section>


    </div>

        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>

        @include('_includes.nav.sidebar') <!--includes the sidebar navigation -->

    </body>


    <!-- JS-->
       <script src="{{asset('js/app.js') }}"></script>
      <script type="text/javascript" src="{{asset('js/jquery_dev.js')}}"></script>  <!--for dev only -->
      {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
      <script type="text/javascript" src="{{asset('js/gquery.js') }}"></script>
     
</html>
