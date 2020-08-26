
@extends('layouts.main')


@section('title')
Tamil Tube(LK)

@endsection

@section('body')

<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
        <!--header-->
        <div class="off-canvas position-left light-off-menu" id="offCanvas-responsive" data-off-canvas="hxo9cu-off-canvas" aria-hidden="true">
            <div class="off-menu-close">
                <h3>Menu</h3>
                <span data-toggle="offCanvas-responsive" aria-expanded="false" aria-controls="offCanvas-responsive"><i class="fa fa-times"></i></span>
            </div>
            <div class="is-drilldown" style="min-height: 539.172px; max-width: 248px;"><ul class="vertical menu off-menu drilldown" data-responsive-menu="drilldown" role="menubar" data-drilldown="de65iu-drilldown">
                <li class="has-submenu is-drilldown-submenu-parent" role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="Home">
                    <a tabindex="0"><i class="fa fa-home"></i>Home</a>
                    <ul class="submenu menu vertical is-drilldown-submenu" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu" tabindex="0"><li class="js-drilldown-back"><a>Back</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="{{ url('/addaddpage') }}"><i class="fa fa-home"></i>Home page v1</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v2.html"><i class="fa fa-home"></i>Home page v2</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v3.html"><i class="fa fa-home"></i>Home page v3</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v4.html"><i class="fa fa-home"></i>Home page v4</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v5.html"><i class="fa fa-home"></i>Home page v5</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v6.html"><i class="fa fa-home"></i>Home page v6</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v7.html"><i class="fa fa-home"></i>Home page v7</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v8.html"><i class="fa fa-home"></i>Home page v8</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v9.html"><i class="fa fa-home"></i>Home page v9</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/home-v10.html"><i class="fa fa-home"></i>Home page v10</a></li>
                    </ul>
                </li>
                <li class="has-submenu is-drilldown-submenu-parent" data-dropdown-menu="example1" role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="Videos">
                    <a tabindex="0"><i class="fa fa-film"></i>Videos</a>
                    <ul class="submenu menu vertical is-drilldown-submenu" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu" tabindex="0"><li class="js-drilldown-back"><a>Back</a></li>
                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/single-video-v1.html"><i class="fa fa-film"></i>single video v1</a></li>
                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/single-video-v2.html"><i class="fa fa-film"></i>single video v2</a></li>
                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/single-video-v3.html"><i class="fa fa-film"></i>single video v3</a></li>
                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/submit-post.html"><i class="fa fa-film"></i>submit post</a></li>
                    </ul>
                </li>
                <li role="menuitem"><a href="http://beetube.me/html-template/categories.html"><i class="fa fa-th"></i>category</a></li>
                <li role="menuitem" class="is-drilldown-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="blog">
                    <a><i class="fa fa-edit"></i>blog</a>
                    <ul class="submenu menu vertical is-drilldown-submenu" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu" tabindex="0"><li class="js-drilldown-back"><a>Back</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/blog-single-post.html"><i class="fa fa-edit"></i>blog single post</a></li>
                    </ul>
                </li>
                <li role="menuitem" class="is-drilldown-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="features">
                    <a><i class="fa fa-magic"></i>features</a>
                    <ul class="submenu menu vertical is-drilldown-submenu" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu" tabindex="0"><li class="js-drilldown-back"><a>Back</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/404.html"><i class="fa fa-magic"></i>404 Page</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/archives.html"><i class="fa fa-magic"></i>Archives</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/login.html"><i class="fa fa-magic"></i>login</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/login-forgot-pass.html"><i class="fa fa-magic"></i>Forgot Password</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/login-register.html"><i class="fa fa-magic"></i>Register</a></li>
                        <li role="menuitem" class="is-drilldown-submenu-parent is-submenu-item is-drilldown-submenu-item" aria-haspopup="true" aria-expanded="false" aria-label="profile">
                            <a><i class="fa fa-magic"></i>profile</a>
                            <ul class="submenu menu vertical is-drilldown-submenu" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu" tabindex="0"><li class="js-drilldown-back"><a>Back</a></li>
                                <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-page-v1.html"><i class="fa fa-magic"></i>profile v1</a></li>
                                <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-page-v2.html"><i class="fa fa-magic"></i>profile v2</a></li>
                                <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-about-me.html"><i class="fa fa-magic"></i>Profile About Me</a></li>
                                <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-comments.html"><i class="fa fa-magic"></i>profile comments</a></li>
                                <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-favorite.html"><i class="fa fa-magic"></i>profile favorites</a></li>
                                <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-followers.html"><i class="fa fa-magic"></i>profile followers</a></li>
                                <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-settings.html"><i class="fa fa-magic"></i>profile settings</a></li>
                            </ul>
                        </li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/profile-video.html"><i class="fa fa-magic"></i>Author Page</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/search-results.html"><i class="fa fa-magic"></i>search results</a></li>
                        <li role="menuitem" class="is-submenu-item is-drilldown-submenu-item"><a href="http://beetube.me/html-template/terms-condition.html"><i class="fa fa-magic"></i>Terms &amp; Condition</a></li>
                    </ul>
                </li>
                <li role="menuitem"><a href="http://beetube.me/html-template/about-us.html"><i class="fa fa-user"></i>about</a></li>
                <li role="menuitem"><a href="http://beetube.me/html-template/contact-us.html"><i class="fa fa-envelope"></i>contact</a></li>
            </ul></div>
            <div class="responsive-search">
                <form method="post">
                    <div class="input-group">
                        <input class="input-group-field" type="text" placeholder="search Here">
                        <div class="input-group-button">
                            <button type="submit" name="search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="off-social">
                <h6>Get Socialize</h6>
                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-facebook"></i></a>
                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-twitter"></i></a>
                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-google-plus"></i></a>
                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-instagram"></i></a>
                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-vimeo"></i></a>
                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-youtube"></i></a>
            </div>
            <div class="top-button">
                <ul class="menu">
                    <li>
                        <a href="http://beetube.me/html-template/submit-post.html">upload Video</a>
                    </li>
                    <li class="dropdown-login">
                        <a href="http://beetube.me/html-template/login.html">login/Register</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="off-canvas-content" data-off-canvas-content="">
            <header>
                <!-- Top -->
                <section id="top" class="topBar show-for-large">
                    <div class="row">
                        <div class="medium-6 columns">
                            <div class="socialLinks">
                                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-facebook-f"></i></a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-twitter"></i></a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-google-plus"></i></a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-instagram"></i></a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-vimeo"></i></a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="medium-6 columns">
                            <div class="top-button">
                                <ul class="menu float-right">
                                    <li>
                                        <a href="http://beetube.me/html-template/submit-post.html">upload Video</a>
                                    </li>
                                    <li class="dropdown-login">
                                        <a class="loginReg" data-toggle="example-dropdown" href="http://beetube.me/html-template/single-video-v2.html#">login/Register</a>
                                        <div class="login-form">
                                            <h6 class="text-center">Great to have you back!</h6>
                                            <form method="post">
                                                <div class="input-group">
                                                    <span class="input-group-label"><i class="fa fa-user"></i></span>
                                                    <input class="input-group-field" type="text" placeholder="Enter username">
                                                </div>
                                                <div class="input-group">
                                                    <span class="input-group-label"><i class="fa fa-lock"></i></span>
                                                    <input class="input-group-field" type="text" placeholder="Enter password">
                                                </div>
                                                <div class="checkbox">
                                                    <input id="check1" type="checkbox" name="check" value="check">
                                                    <label class="customLabel" for="check1">Remember me</label>
                                                </div>
                                                <input type="submit" name="submit" value="Login Now">
                                            </form>
                                            <p class="text-center">New here? <a class="newaccount" href="http://beetube.me/html-template/login-register.html">Create a new Account</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section><!-- End Top -->
                <!--Navber-->
                <section id="navBar">
                    <nav class="sticky-container" data-sticky-container="" style="height: 80px;">
                        <div class="sticky topnav is-stuck is-at-top" data-sticky="ct7ova-sticky" data-top-anchor="navBar" data-btm-anchor="footer-bottom:bottom" data-margin-top="0" data-margin-bottom="0" style="width: 100%; background: rgb(255, 255, 255); max-width: 1349px; margin-top: 0em; top: 0px; bottom: auto; left: 0px;" data-sticky-on="large" data-resize="ju0klf-sticky">
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="title-bar" data-responsive-toggle="beNav" data-hide-for="large" style="display: none;">
                                        <button class="menu-icon" type="button" data-toggle="offCanvas-responsive" aria-expanded="false" aria-controls="offCanvas-responsive"></button>
                                        <div class="title-bar-title"><img src="{{ URL::asset('public/logo-small.png') }}" alt="logo"></div>
                                    </div>

                                    <div class="top-bar show-for-large" id="beNav" style="width: 100%;">
                                        <div class="top-bar-left">
                                            <ul class="menu">
                                                <li class="menu-text">
                                                    <a href="http://beetube.me/html-template/home-v1.html"><img src="{{ URL::asset('public/logo.png') }}" alt="logo"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="top-bar-right search-btn">
                                            <ul class="menu">
                                                <li class="search">
                                                    <i class="fa fa-search"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="top-bar-right">
                                            <ul class="menu vertical medium-horizontal dropdown" data-responsive-menu="drilldown medium-dropdown" role="menubar" data-dropdown-menu="kv5y5w-dropdown-menu">
                                                <li class="has-submenu active is-dropdown-submenu-parent opens-right" role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="Home">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" tabindex="0"><i class="fa fa-home"></i>Home</a>
                                                    <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu">
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="{{ url('/addaddpage') }}"><i class="fa fa-home"></i>Home page v1</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v2.html"><i class="fa fa-home"></i>Home page fsd</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v3.html"><i class="fa fa-home"></i>Home page v3</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v4.html"><i class="fa fa-home"></i>Home page v4</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v5.html"><i class="fa fa-home"></i>Home page v5</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v6.html"><i class="fa fa-home"></i>Home page v6</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v7.html"><i class="fa fa-home"></i>Home page v7</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v8.html"><i class="fa fa-home"></i>Home page v8</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v9.html"><i class="fa fa-home"></i>Home page v9</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/home-v10.html"><i class="fa fa-home"></i>Home page v10</a></li>
                                                    </ul>
                                                </li>
                                                <li class="has-submenu is-dropdown-submenu-parent opens-right" data-dropdown-menu="example1" role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="Videos">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" tabindex="0"><i class="fa fa-film"></i>Videos</a>
                                                    <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu">
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/single-video-v1.html"><i class="fa fa-film"></i>single video v1</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/single-video-v2.html"><i class="fa fa-film"></i>single video v2</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/single-video-v3.html"><i class="fa fa-film"></i>single video v3</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/submit-post.html"><i class="fa fa-film"></i>submit post</a></li>
                                                    </ul>
                                                </li>
                                                <li role="menuitem"><a href="http://beetube.me/html-template/categories.html"><i class="fa fa-th"></i>category</a></li>
                                                <li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="blog">
                                                    <a href="http://beetube.me/html-template/blog.html"><i class="fa fa-edit"></i>blog</a>
                                                    <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu">
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/blog-single-post.html"><i class="fa fa-edit"></i>blog single post</a></li>
                                                    </ul>
                                                </li>
                                                <li role="menuitem" class="is-dropdown-submenu-parent opens-right" aria-haspopup="true" aria-expanded="false" aria-label="features">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-magic"></i>features</a>
                                                    <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu">
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/404.html"><i class="fa fa-magic"></i>404 Page</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/archives.html"><i class="fa fa-magic"></i>Archives</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/login.html"><i class="fa fa-magic"></i>login</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/login-forgot-pass.html"><i class="fa fa-magic"></i>Forgot Password</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/login-register.html"><i class="fa fa-magic"></i>Register</a></li>
                                                        <li role="menuitem" class="is-dropdown-submenu-parent is-submenu-item is-dropdown-submenu-item opens-right" aria-haspopup="true" aria-expanded="false" aria-label="profile">
                                                            <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-magic"></i>profile</a>
                                                            <ul class="submenu menu vertical is-dropdown-submenu" data-submenu="" data-animate="slide-in-down slide-out-up" aria-hidden="true" role="menu">
                                                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-page-v1.html"><i class="fa fa-magic"></i>profile v1</a></li>
                                                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-page-v2.html"><i class="fa fa-magic"></i>profile v2</a></li>
                                                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-about-me.html"><i class="fa fa-magic"></i>Profile About Me</a></li>
                                                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-comments.html"><i class="fa fa-magic"></i>profile comments</a></li>
                                                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-favorite.html"><i class="fa fa-magic"></i>profile favorites</a></li>
                                                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-followers.html"><i class="fa fa-magic"></i>profile followers</a></li>
                                                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-settings.html"><i class="fa fa-magic"></i>profile settings</a></li>
                                                            </ul>
                                                        </li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/profile-video.html"><i class="fa fa-magic"></i>Author Page</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/search-results.html"><i class="fa fa-magic"></i>search results</a></li>
                                                        <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item"><a href="http://beetube.me/html-template/terms-condition.html"><i class="fa fa-magic"></i>Terms &amp; Condition</a></li>
                                                    </ul>
                                                </li>
                                                <li role="menuitem"><a href="http://beetube.me/html-template/about-us.html"><i class="fa fa-user"></i>about</a></li>
                                                <li role="menuitem"><a href="http://beetube.me/html-template/contact-us.html"><i class="fa fa-envelope"></i>contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="search-bar" class="clearfix search-bar-light">
                                <form method="post">
                                    <div class="search-input float-left">
                                        <input type="search" name="search" placeholder="Seach Here your video">
                                    </div>
                                    <div class="search-btn float-right text-right">
                                        <button class="button" name="search" type="submit">search now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </nav>
                </section>
            </header><!-- End Header -->
            <!--breadcrumbs-->
            <section id="breadcrumb" class="breadcrumb-video-2">
                <div class="row">
                    <div class="large-12 columns">
                        <nav aria-label="You are here:" role="navigation">
                            <ul class="breadcrumbs">
                                <li><i class="fa fa-home"></i><a href="http://beetube.me/html-template/single-video-v2.html#">Home</a></li>
                                <li><a href="http://beetube.me/html-template/single-video-v2.html#">Animation</a></li>
                                <li class="disabled">Gene Splicing</li>
                                <li>
                                    <span class="show-for-sr">Current: </span> Comedy video
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section><!--end breadcrumbs-->

            <div class="row">
                <!-- left side content area -->
                <div class="large-8 columns">
                    <!--single inner video-->
                    <section class="inner-video">
                        <div class="row secBg">
                            <div class="large-12 columns inner-flex-video">
                                <div class="flex-video widescreen">
                                    <iframe width="420" height="315" src="./aiBt44rrslw.html" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- single post stats -->
                    <section class="SinglePostStats">
                        <!-- newest video -->
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section">
                                        <div class="author-img-sec">
                                            <div class="thumbnail author-single-post">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#"><img src="{{ URL::asset('public/post-author-post.png') }}" alt="post"></a>
                                            </div>
                                            <p class="text-center"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a></p>
                                        </div>
                                    </div>
                                    <div class="media-object-section object-second">
                                        <div class="author-des clearfix">
                                            <div class="post-title">
                                                <h4>There are many variations of passage.</h4>
                                                <p>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                    <span><i class="fa fa-thumbs-o-up"></i>1,862</span>
                                                    <span><i class="fa fa-thumbs-o-down"></i>180</span>
                                                    <span><i class="fa fa-commenting"></i>8</span>
                                                </p>
                                            </div>
                                            <div class="subscribe">
                                                <form method="post">
                                                    <button type="submit" name="subscribe">Subscribe</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="social-share">
                                            <div class="post-like-btn clearfix">
                                                <form method="post">
                                                    <button type="submit" name="fav"><i class="fa fa-heart"></i>Add to</button>
                                                </form>
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-thumbs-o-up"></i></a>
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-thumbs-o-down"></i></a>

                                                <div class="float-right easy-share" data-easyshare="" data-easyshare-http="" data-easyshare-url="http://joinwebs.com">
                                                    <!-- Total -->
                                                    <button data-easyshare-button="total">
                                                        <span>Total</span>
                                                    </button>
                                                    <span data-easyshare-total-count="">0</span>

                                                    <!-- Facebook -->
                                                    <button data-easyshare-button="facebook">
                                                        <span class="fa fa-facebook"></span>
                                                        <span>Share</span>
                                                    </button>
                                                    <span data-easyshare-button-count="facebook">0</span>

                                                    <!-- Twitter -->
                                                    <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                                        <span class="fa fa-twitter"></span>
                                                        <span>Tweet</span>
                                                    </button>
                                                    <span data-easyshare-button-count="twitter">0</span>

                                                    <!-- Google+ -->
                                                    <button data-easyshare-button="google">
                                                        <span class="fa fa-google-plus"></span>
                                                        <span>+1</span>
                                                    </button>
                                                    <span data-easyshare-button-count="google">0</span>

                                                    <div data-easyshare-loader="" style="display: none;">Loading...</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!-- End single post stats -->

                    <!-- single post description -->
                    <section class="singlePostDescription">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="heading">
                                    <h5>Description</h5>
                                </div>
                                <div class="description showmore_one"><div class="showmore_content" style="height: 165px;">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</p>
                                    <h6>Bullets List :</h6>
                                    <ul>
                                        <li>Sed ut perspiciatis unde omnis</li>
                                        <li>But I must explain to you how</li>
                                        <li>At vero eos et accusamus et iusto</li>
                                        <li>On the other hand, we denounce</li>
                                        <li>There are many variations of passages</li>
                                    </ul>
                                    <div class="categories">
                                        <button><i class="fa fa-folder"></i>Categories</button>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#" class="inner-btn">entertainment</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#" class="inner-btn">comedy</a>
                                    </div>
                                    <div class="tags">
                                        <button><i class="fa fa-tags"></i>Tags</button>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#" class="inner-btn">3D Videos</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#" class="inner-btn">Videos</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#" class="inner-btn">HD</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#" class="inner-btn">Movies</a>
                                    </div>
                                </div><div class="showmore_trigger"><span class="more">Show more</span><span class="less" style="display:none;">Show less</span></div></div>
                            </div>
                        </div>
                    </section><!-- End single post description -->

                    <!-- related Posts -->
                    <section class="content content-with-sidebar related">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="main-heading borderBottom">
                                    <div class="row padding-14">
                                        <div class="medium-12 small-12 columns">
                                            <div class="head-title">
                                                <i class="fa fa-film"></i>
                                                <h4>Related Videos</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row list-group">
                                    <div class="item large-4 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{ URL::asset('public/landing-small1.png') }}" alt="landing">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>05:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item large-4 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{ URL::asset('public/landing-small2.png') }}" alt="landing">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>05:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item large-4 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{ URL::asset('public/landing-small3.png') }}" alt="landing">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>05:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item large-4 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{ URL::asset('public/widget-most2.png') }}" alt="landing">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>05:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item large-4 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{ URL::asset('public/slider-carousel4.png') }}" alt="landing">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>05:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item large-4 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="{{ URL::asset('public/1.jpg') }}" alt="landing">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>05:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section><!--end related posts-->
                    <!-- Comments -->
                    <section class="content comments">
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="main-heading borderBottom">
                                    <div class="row padding-14">
                                        <div class="medium-12 small-12 columns">
                                            <div class="head-title">
                                                <i class="fa fa-comments"></i>
                                                <h4>Comments <span>(4)</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-box thumb-border">
                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                            </div>
                                            <h6><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a></h6>
                                        </div>
                                        <div class="media-object-section comment-textarea">
                                            <form method="post">
                                                <textarea name="commentText" placeholder="Add a comment here.."></textarea>
                                                <input type="submit" name="submit" value="send">
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-sort text-right">
                                    <span>Sort By : <a href="http://beetube.me/html-template/single-video-v2.html#">newest</a> | <a href="http://beetube.me/html-template/single-video-v2.html#">oldest</a></span>
                                </div>

                                <!-- main comment -->
                                <div class="main-comment showmore_one"><div class="showmore_content" style="height: 165px;">
                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                            </div>
                                        </div>
                                        <div class="media-object-section comment-desc">
                                            <div class="comment-title">
                                                <span class="name"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a> Said:</span>
                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                            </div>
                                            <div class="comment-btns">
                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-share"></i>Reply</a></span>
                                                <span class="reply float-right hide-reply">Hide replies <i class="fa fa-angle-up"></i></span>
                                            </div>

                                            <!--sub comment-->
                                            <div class="media-object stack-for-small reply-comment">
                                                <div class="media-object-section comment-img text-center">
                                                    <div class="comment-box-img">
                                                        <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                                    </div>
                                                </div>
                                                <div class="media-object-section comment-desc">
                                                    <div class="comment-title">
                                                        <span class="name"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a> Said:</span>
                                                        <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                    </div>
                                                    <div class="comment-btns">
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-share"></i>Reply</a></span>
                                                        <span class="reply float-right hide-reply"></span>
                                                    </div>
                                                </div>
                                            </div><!-- end sub comment -->

                                            <!--sub comment-->
                                            <div class="media-object stack-for-small reply-comment">
                                                <div class="media-object-section comment-img text-center">
                                                    <div class="comment-box-img">
                                                        <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                                    </div>
                                                </div>
                                                <div class="media-object-section comment-desc">
                                                    <div class="comment-title">
                                                        <span class="name"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a> Said:</span>
                                                        <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                    </div>
                                                    <div class="comment-btns">
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-share"></i>Reply</a></span>
                                                        <span class="reply float-right hide-reply"></span>
                                                    </div>

                                                </div>
                                            </div><!-- end sub comment -->

                                        </div>
                                    </div>

                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                            </div>
                                        </div>
                                        <div class="media-object-section comment-desc">
                                            <div class="comment-title">
                                                <span class="name"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a> Said:</span>
                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                            </div>
                                            <div class="comment-btns">
                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-share"></i>Reply</a></span>
                                                <span class="reply float-right hide-reply"></span>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="media-object stack-for-small">
                                        <div class="media-object-section comment-img text-center">
                                            <div class="comment-box-img">
                                                <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                            </div>
                                        </div>
                                        <div class="media-object-section comment-desc">
                                            <div class="comment-title">
                                                <span class="name"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a> Said:</span>
                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                            </div>
                                            <div class="comment-text">
                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                            </div>
                                            <div class="comment-btns">
                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-share"></i>Reply</a></span>
                                                <span class="reply float-right hide-reply">Hide replies <i class="fa fa-angle-up"></i></span>
                                            </div>
                                            <!--sub comment-->
                                            <div class="media-object stack-for-small reply-comment">
                                                <div class="media-object-section comment-img text-center">
                                                    <div class="comment-box-img">
                                                        <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                                    </div>
                                                </div>
                                                <div class="media-object-section comment-desc">
                                                    <div class="comment-title">
                                                        <span class="name"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a> Said:</span>
                                                        <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                    </div>
                                                    <div class="comment-text">
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                    </div>
                                                    <div class="comment-btns">
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                        <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-share"></i>Reply</a></span>
                                                        <span class="reply float-right hide-reply">Hide replies <i class="fa fa-angle-up"></i></span>
                                                    </div>
                                                    <!--sub comment-->
                                                    <div class="media-object stack-for-small reply-comment">
                                                        <div class="media-object-section comment-img text-center">
                                                            <div class="comment-box-img">
                                                                <img src="{{ URL::asset('public/post-author-post.png') }}" alt="comment">
                                                            </div>
                                                        </div>
                                                        <div class="media-object-section comment-desc">
                                                            <div class="comment-title">
                                                                <span class="name"><a href="http://beetube.me/html-template/single-video-v2.html#">Joseph John</a> Said:</span>
                                                                <span class="time float-right"><i class="fa fa-clock-o"></i>1 minute ago</span>
                                                            </div>
                                                            <div class="comment-text">
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoresunt explicabo.</p>
                                                            </div>
                                                            <div class="comment-btns">
                                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-up"></i></a> | <a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-thumbs-o-down"></i></a></span>
                                                                <span><a href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-share"></i>Reply</a></span>
                                                                <span class="reply float-right hide-reply"></span>
                                                            </div>
                                                        </div>
                                                    </div><!-- end sub comment -->
                                                </div>
                                            </div><!-- end sub comment -->
                                        </div>
                                    </div>
                                </div><div class="showmore_trigger"><span class="more">Show more</span><span class="less" style="display:none;">Show less</span></div></div><!-- End main comment -->

                            </div>
                        </div>
                    </section><!-- End Comments -->
                </div><!-- end left side content area -->
                <!-- sidebar -->
                <div class="large-4 columns">
                    <aside class="secBg sidebar">
                        <div class="row">
                            <!-- search Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Search Videos</h5>
                                    </div>
                                    <form id="searchform" method="get" role="search">
                                        <div class="input-group">
                                            <input class="input-group-field" type="text" placeholder="Enter your keyword">
                                            <div class="input-group-button">
                                                <input type="submit" class="button" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- End search Widget -->

                            <!-- most view Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Most View Videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="{{ URL::asset('public/7.jpg') }}" alt="most viewed videos">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="{{ URL::asset('public/widget-most1.png') }}" alt="most viewed videos">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="{{ URL::asset('public/widget-most2.png') }}" alt="most viewed videos">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="video-box thumb-border">
                                            <div class="video-img-thumb">
                                                <img src="{{ URL::asset('public/widget-most3.png') }}" alt="most viewed videos">
                                                <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                            </div>
                                            <div class="video-box-content">
                                                <h6><a href="http://beetube.me/html-template/single-video-v2.html#">There are many variations of passage. </a></h6>
                                                <p>
                                                    <span><i class="fa fa-user"></i><a href="http://beetube.me/html-template/single-video-v2.html#">admin</a></span>
                                                    <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                    <span><i class="fa fa-eye"></i>1,862K</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end most view Widget -->

                            <!-- categories -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox clearfix">
                                    <div class="widgetTitle">
                                        <h5>Categories</h5>
                                    </div>
                                    <div class="widgetContent clearfix">
                                        <ul>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Entertainment &nbsp; (6)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Historical &amp; Archival &nbsp;(8)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Technology&nbsp;(4)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">People&nbsp;(3)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Fashion &amp; Beauty&nbsp;(2)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Nature&nbsp;(1)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Automotive&nbsp;(5)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html">Foods &amp; Drinks&nbsp;(5)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Foods &amp; Drinks&nbsp;(10)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Animals&nbsp;(12)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Sports &amp; Recreation&nbsp;(14)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html">Places &amp; Landmarks&nbsp;(16)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html">Places &amp; Landmarks&nbsp;(1)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Travel&nbsp;(2)</a></li>
                                            <li class="cat-item"><a href="http://beetube.me/html-template/single-video-v2.html#">Transportation&nbsp;(3)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- social Fans Widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>social fans</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="social-links">
                                            <a class="socialButton" href="http://beetube.me/html-template/single-video-v2.html#">
                                                <i class="fa fa-facebook"></i>
                                                <span>698K</span>
                                                <span>fans</span>
                                            </a>
                                            <a class="socialButton" href="http://beetube.me/html-template/single-video-v2.html#">
                                                <i class="fa fa-twitter"></i>
                                                <span>598</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="http://beetube.me/html-template/single-video-v2.html#">
                                                <i class="fa fa-google-plus"></i>
                                                <span>98k</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="http://beetube.me/html-template/single-video-v2.html#">
                                                <i class="fa fa-youtube"></i>
                                                <span>168k</span>
                                                <span>followers</span>
                                            </a>
                                            <a class="socialButton" href="http://beetube.me/html-template/single-video-v2.html#">
                                                <i class="fa fa-vimeo"></i>
                                                <span>498</span>
                                                <span>followers</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End social Fans Widget -->

                            <!-- ad banner widget -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Recent post videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="advBanner text-center">
                                            <a href="http://beetube.me/html-template/single-video-v2.html#"><img src="{{ URL::asset('public/sideradv.png') }}" alt="sidebar adv"></a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end ad banner widget -->

                            <!-- Recent post videos -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Recent post videos</h5>
                                    </div>
                                    <div class="widgetContent">
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src="{{ URL::asset('public/category4.png') }}" alt="recent">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src="./category2.png" alt="recent">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src="./sidebar-recent1.png" alt="recent">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media-object stack-for-small">
                                            <div class="media-object-section">
                                                <div class="recent-img">
                                                    <img src="./sidebar-recent2.png" alt="recent">
                                                    <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media-object-section">
                                                <div class="media-content">
                                                    <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                    <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Recent post videos -->

                            <!-- tags -->
                            <div class="large-12 medium-7 medium-centered columns">
                                <div class="widgetBox">
                                    <div class="widgetTitle">
                                        <h5>Tags</h5>
                                    </div>
                                    <div class="tagcloud">
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">3D Videos</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">Videos</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">HD</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">Movies</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">Sports</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">3D</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">Movies</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">Animation</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">HD</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">Music</a>
                                        <a href="http://beetube.me/html-template/single-video-v2.html#">Recreation</a>
                                    </div>
                                </div>
                            </div><!-- End tags -->
                        </div>
                    </aside>
                </div><!-- end sidebar -->
            </div>

            <!-- footer -->
            <footer>
                <div class="row">
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>About Betube</h5>
                            </div>
                            <div class="textwidget">
                                Betube video wordpress theme lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s book.
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Recent Videos</h5>
                            </div>
                            <div class="widgetContent">
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src="./recent1.png" alt="recent">
                                            <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src="./1.jpg" alt="recent">
                                            <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-object">
                                    <div class="media-object-section">
                                        <div class="recent-img">
                                            <img src="./recent3.png" alt="recent">
                                            <a href="http://beetube.me/html-template/single-video-v2.html#" class="hover-posts">
                                                <span><i class="fa fa-play"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section">
                                        <div class="media-content">
                                            <h6><a href="http://beetube.me/html-template/single-video-v2.html#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                            <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Tags</h5>
                            </div>
                            <div class="tagcloud">
                                <a href="http://beetube.me/html-template/single-video-v2.html#">3D Videos</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">Videos</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">HD</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">Movies</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">Sports</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">3D</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">Movies</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">Animation</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">HD</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">Music</a>
                                <a href="http://beetube.me/html-template/single-video-v2.html#">Recreation</a>
                            </div>
                        </div>
                    </div>
                    <div class="large-3 medium-6 columns">
                        <div class="widgetBox">
                            <div class="widgetTitle">
                                <h5>Subscribe Now</h5>
                            </div>
                            <div class="widgetContent">
                                <form data-abide="kybibt-abide" novalidate="" method="post">
                                    <p>Subscribe to get exclusive videos</p>
                                    <div class="input">
                                        <input type="text" placeholder="Enter your full Name" required="">
                                        <span class="form-error">
                                            Yo, you had better fill this out, it's required.
                                        </span>
                                    </div>
                                    <div class="input">
                                        <input type="email" id="email" placeholder="Enter your email address" required="">
                                        <span class="form-error">
                                          I'm required!
                                        </span>
                                    </div>
                                    <button class="button" type="submit" value="Submit">Sign up Now</button>
                                </form>
                                <div class="social-links">
                                    <h5>We’re a Social Bunch</h5>
                                    <a class="secondary-button" href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-facebook"></i></a>
                                    <a class="secondary-button" href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-twitter"></i></a>
                                    <a class="secondary-button" href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-google-plus"></i></a>
                                    <a class="secondary-button" href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-instagram"></i></a>
                                    <a class="secondary-button" href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-vimeo"></i></a>
                                    <a class="secondary-button" href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-youtube"></i></a>
                                    <a class="secondary-button" href="http://beetube.me/html-template/single-video-v2.html#"><i class="fa fa-flickr"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="http://beetube.me/html-template/single-video-v2.html#" id="back-to-top" title="Back to top" class="show"><i class="fa fa-angle-double-up"></i></a>
            </footer><!-- footer -->
            <div id="footer-bottom">
                <div class="logo text-center">
                    <img src="./footerlogo.png" alt="footer logo">
                </div>
                <div class="btm-footer-text text-center">
                    <p>2016 © Betube video wordpress theme.</p>
                </div>
            </div>
        <div class="js-off-canvas-exit"></div></div><!--end off canvas content-->
    </div><!--end off canvas wrapper inner-->
</div>
@endsection
