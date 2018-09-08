<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title> Home :: Geosol Consulting</title>
        <link rel="icon" type="image/png"  href="{{asset('images/favicon.png')}}"/>

        <!--Core CSS -->
        <link href="{{asset('css/core.css')}}" rel="stylesheet">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet">

        <!--Libraries-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    </head>

    <body>
        <div id="preloader">
            <div id="status"></div>
        </div>

        <section class="hero is-fullheight is-default is-bold">
            <nav class="navbar is-fresh is-transparent no-shadow" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="#">
                            <img src="{{asset('images/logos/fresh-alt.svg')}}" alt="" width="112" height="28">
                        </a>

                        <a class="navbar-item is-hidden-desktop is-hidden-tablet">
                            <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                <svg width="1000px" height="1000px">
                                    <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path class="path2" d="M 300 500 L 700 500"></path>
                                    <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                                <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                            </div>
                        </a>

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="navbar-menu" class="navbar-menu is-static">

                        {{-- <div class="navbar-start">
                            <a class="navbar-item is-hidden-mobile">
                                <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                    <svg width="1000px" height="1000px">
                                        <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                        <path class="path2" d="M 300 500 L 700 500"></path>
                                        <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                    </svg>
                                    <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                                </div>
                            </a>
                        </div> --}}

                        <div class="navbar-end">
                            <a href="#" class="navbar-item is-secondary">
                                Features
                            </a>
                            <a href="#" class="navbar-item is-secondary">
                                Pricing
                            </a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    Dropdown
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item">
                                        Dropdown item
                                    </a>
                                    <a class="navbar-item">
                                        Dropdown item
                                    </a>
                                    <a class="navbar-item">
                                        Dropdown item
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="navbar-item is-secondary">
                                Log in
                            </a>
                            <a class="navbar-item">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Sign up
                                </span>
                            </a>
                            <a class="navbar-item is-hidden-mobile">
                                <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                    <svg width="1000px" height="1000px">
                                        <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                        <path class="path2" d="M 300 500 L 700 500"></path>
                                        <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                    </svg>
                                    <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <nav id="navbar-clone" class="navbar is-fresh is-transparent" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="#">
                            <img src="{{asset('images/logos/fresh-alt.svg')}}" alt="" width="112" height="28">
                        </a>

                        {{-- <a class="navbar-item is-hidden-desktop is-hidden-tablet">
                            <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                <svg width="1000px" height="1000px">
                                    <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                    <path class="path2" d="M 300 500 L 700 500"></path>
                                    <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                </svg>
                                <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                            </div>
                        </a> --}}

                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="cloned-navbar-menu">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>

                    <div id="cloned-navbar-menu" class="navbar-menu is-fixed">

                        <div class="navbar-start">
                            {{-- <a class="navbar-item is-hidden-mobile">
                                <div id="cloned-menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                    <svg width="1000px" height="1000px">
                                        <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                        <path class="path2" d="M 300 500 L 700 500"></path>
                                        <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                    </svg>
                                    <button id="cloned-menu-icon-trigger" class="menu-icon-trigger"></button>
                                </div>
                            </a> --}}
                        </div>

                        <div class="navbar-end">
                            <a href="#" class="navbar-item is-secondary">
                                Features
                            </a>
                            <a href="#" class="navbar-item is-secondary">
                                Pricing
                            </a>
                            <div class="navbar-item has-dropdown is-hoverable">
                                <a class="navbar-link">
                                    Dropdown
                                </a>

                                <div class="navbar-dropdown">
                                    <a class="navbar-item">
                                        Dropdown item
                                    </a>
                                    <a class="navbar-item">
                                        Dropdown item
                                    </a>
                                    <a class="navbar-item">
                                        Dropdown item
                                    </a>
                                </div>
                            </div>
                            <a href="#" class="navbar-item is-secondary">
                                Log in
                            </a>
                            <a class="navbar-item">
                                <span class="button signup-button rounded secondary-btn raised">
                                    Sign up
                                </span>
                            </a>
                            <a class="navbar-item is-hidden-mobile">
                                <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;">
                                    <svg width="1000px" height="1000px">
                                        <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                        <path class="path2" d="M 300 500 L 700 500"></path>
                                        <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                                    </svg>
                                    <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">
                        <div class="column is-5 is-offset-1 landing-caption">
                            <h1 class="title is-1 is-bold is-spaced">
                                Manage, Deploy.
                            </h1>
                            <h2 class="subtitle is-5 is-muted">Lorem ipsum sit dolor amet is a dummy text used by typography industry </h2>
                            <p>
                                <a class="button cta rounded primary-btn raised">
                                    Get Started
                                </a>
                            </p>
                        </div>
                        <div class="column is-5 is-offset-1">
                            <figure class="image is-4by3">
                                <img src="{{asset('images/illustrations/worker.svg')}}" alt="Description">
                            </figure>
                        </div>

                    </div>
                </div>
            </div>

            <div class="hero-foot mb-20">
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
            </div>
        </section>

        <section class="section section-feature-grey is-medium">
            <div class="container">
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

        <section class="section is-medium">
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

        <section class="section section-feature-grey is-medium">
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

        <section class="section is-medium section-secondary">
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

        <section class="section section-light-grey is-medium">
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


        <footer class="footer footer-dark">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <div class="footer-logo">
                            <img src="{{asset('images/logos/fresh-white-alt.svg')}}">
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Product</h3>
                            </div>
                            <ul class="link-list">
                                <li><a href="#">Discover features</a></li>
                                <li><a href="#">Why choose our Product ?</a></li>
                                <li><a href="#">Compare features</a></li>
                                <li><a href="#">Our Roadmap</a></li>
                                <li><a href="#">Request features</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Docs</h3>
                            </div>
                            <ul class="link-list">
                                <li><a href="#">Get Started</a></li>
                                <li><a href="#">User guides</a></li>
                                <li><a href="#">Admin guide</a></li>
                                <li><a href="#">Developers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Blogroll</h3>
                            </div>
                            <ul class="link-list">
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Tech articles</a></li>
                                <li><a href="#">Video Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="column">
                        <div class="footer-column">
                            <div class="footer-header">
                                <h3>Follow Us</h3>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <a class="level-item" href="https://github.com/#">
                                            <span class="icon"><i class="fa fa-github"></i></span>
                                        </a>
                                        <a class="level-item" href="https://dribbble.com/#">
                                            <span class="icon"><i class="fa fa-dribbble"></i></span>
                                        </a>
                                        <a class="level-item" href="https://fb.com/#">
                                            <span class="icon"><i class="fa fa-facebook"></i></span>
                                        </a>
                                        <a class="level-item" href="https://twitter.com/#">
                                            <span class="icon"><i class="fa fa-twitter"></i></span>
                                        </a>
                                       <a class="level-item" href="https://bitbucket.org/#">
                                            <span class="icon"><i class="fa fa-bitbucket"></i></span>
                                        </a>
                                    </div>
                                </nav>

                                <a href="https://bulma.io" target="_blank">
                                    <img src="{{asset('images/logos/made-with-bulma.png')}}" alt="Made with Bulma" width="128" height="24">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>

        <div class="sidebar">
            <div class="sidebar-header">
                <img src="{{asset('images/logos/fresh-square.svg')}}">
                <a class="sidebar-close" href="javascript:void(0);"><i data-feather="x"></i></a>
            </div>
            <div class="inner">
                <ul class="sidebar-menu">
                    <li><span class="nav-section-title"></span></li>
                    <li class="have-children"><a href="#"><span class="fa fa-user"></span>User</a>
                        <ul>
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Account</a></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                    <li class="have-children"><a href="#"><span class="fa fa-envelope"></span>Messages</a>
                        <ul>
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Compose</a></li>
                        </ul>
                    </li>
                    <li class="have-children"><a href="#"><span class="fa fa-image"></span>Images</a>
                        <ul>
                            <li><a href="#">Library</a></li>
                            <li><a href="#">Upload</a></li>
                        </ul>
                    </li>
                    <li class="have-children"><a href="#"><span class="fa fa-cog"></span>Settings</a>
                        <ul>
                            <li><a href="#">User settings</a></li>
                            <li><a href="#">App settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>        <!-- jQuery first, then Bootstrap JS. -->
  </body>

    <!-- JS-->
      {{-- <script src="{{asset('js/app.js') }}"></script> --}}
      <script type="text/javascript" src="{{asset('js/jquery_dev.js')}}"></script>  <!--for dev only -->
      {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
      <script type="text/javascript" src="{{asset('js/gquery.js') }}"></script>

</html>
