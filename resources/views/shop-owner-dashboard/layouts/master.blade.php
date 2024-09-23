<!doctype html>
<html lang="en">

<head>
    <title>Home | Datta able Dashboard Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Datta able is trending dashboard template made using Bootstrap 5 design framework. Datta able is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords"
        content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="Codedthemes">
    <link rel="icon" href="{{ asset('shop-owner/assets/images/favicon.svg') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('shop-owner/assets/fonts/phosphor/duotone/style.css') }}">
    <link rel="stylesheet" href="{{ asset('shop-owner/assets/fonts/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('shop-owner/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('shop-owner/assets/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('shop-owner/assets/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('shop-owner/assets/css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('shop-owner/assets/css/style-preset.css') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-14K1GBX9FG');
    </script>
    <script>
        !(function() {
            if (window.t4hto4)
                console.log('WiserNotify pixel installed multiple time in this page');
            else {
                window.t4hto4 = !0;
                var t = document,
                    e = window,
                    n = function() {
                        var e = t.createElement('script');
                        (e.type = 'text/javascript'),
                        (e.async = !0),
                        (e.src = 'https://pt.wisernotify.com/pixel.js?ti=1jclj6jkfc4hhry'),
                        document.body.appendChild(e);
                    };
                'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e
                    .addEventListener('load', n, !1);
            }
        })();
    </script>
    <script type="text/javascript">
        (function(c, l, a, r, i, t, y) {
            c[a] = c[a] || function() {
                (c[a].q = c[a].q || []).push(arguments);
            };
            t = l.createElement(r);
            t.async = 1;
            t.src = 'https://www.clarity.ms/tag/' + i;
            y = l.getElementsByTagName(r)[0];
            y.parentNode.insertBefore(t, y);
        })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
    </script>
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    @include('shop-owner-dashboard.layouts.side-bar')
    @include('shop-owner-dashboard.layouts.header')
    <div class="pc-container">
        <div class="pc-content">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    @include('shop-owner-dashboard.layouts.footer')
    {{-- <div class="pct-c-btn">
        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_pc_layout">
            <i class="ph-duotone ph-gear-six"></i>
        </a>
    </div>
    <div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Settings</h5>
            <div class="d-inline-flex align-items-center gap-2">
                <button type="button" class="btn btn-sm rounded btn-outline-danger"
                    id="layoutreset">Reset</button>
                <a type="button" class="avtar avtar-xs btn-link-danger btn-pc-default"
                    data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="ti ti-x f-20"></i>
                </a>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="pc-dark">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                        <h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm mb-0">Light / Dark / System</p>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <div class="row g-2 theme-color theme-layout justify-content-end">
                            <div class="col-auto">
                                <button class="preset-btn btn active" data-value="true"
                                    onclick="layout_change('light');" data-bs-toggle="tooltip" title="Light">
                                    <svg class="pc-icon text-warning">
                                        <use xlink:href="#custom-sun-1"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="preset-btn btn" data-value="false" onclick="layout_change('dark');"
                                    data-bs-toggle="tooltip" title="Dark">
                                    <svg class="pc-icon">
                                        <use xlink:href="#custom-moon"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="col-auto">
                                <button class="preset-btn btn" data-value="default"
                                    onclick="layout_change_default();" data-bs-toggle="tooltip"
                                    title="Automatically sets the theme based on user's operating system's color scheme.">
                                    <span class="pc-lay-icon d-flex align-items-center justify-content-center">
                                        <i class="ph-duotone ph-cpu"></i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="nav nav-tabs nav-fill pct-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation" data-bs-toggle="tooltip" title="Layout Settings">
                <button class="nav-link active" id="pct-1-tab" data-bs-toggle="tab"
                    data-bs-target="#pct-1-tab-pane" type="button" role="tab"
                    aria-controls="pct-1-tab-pane" aria-selected="true">
                    <i class="ti ti-device-desktop"></i>
                </button>
            </li>
            <li class="nav-item" role="presentation" data-bs-toggle="tooltip" title="Color Settings">
                <button class="nav-link" id="pct-2-tab" data-bs-toggle="tab" data-bs-target="#pct-2-tab-pane"
                    type="button" role="tab" aria-controls="pct-2-tab-pane" aria-selected="false">
                    <i class="ti ti-color-swatch"></i>
                </button>
            </li>
            <li class="nav-item" role="presentation" data-bs-toggle="tooltip" title="Extra Settings">
                <button class="nav-link" id="pct-3-tab" data-bs-toggle="tab" data-bs-target="#pct-3-tab-pane"
                    type="button" role="tab" aria-controls="pct-3-tab-pane" aria-selected="false">
                    <i class="ti ti-adjustments-horizontal"></i>
                </button>
            </li>
        </ul>
        <div class="pct-body customizer-body">
            <div class="offcanvas-body py-0">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="pct-1-tab-pane" role="tabpanel"
                        aria-labelledby="pct-1-tab" tabindex="0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item sidebar-theme">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <h6 class="mb-1">Sidebar theme</h6>
                                        <p class="text-muted text-sm mb-0">Dark / Light</p>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="row g-2 justify-content-end sidebar-theme">
                                            <div class="col-auto">
                                                <button class="preset-btn btn" data-value="true"
                                                    onclick="layout_theme_sidebar_change('true');"
                                                    data-bs-toggle="tooltip" title="Light">
                                                    <svg class="pc-icon text-warning">
                                                        <use xlink:href="#custom-sun-1"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="preset-btn btn active" data-value="false"
                                                    onclick="layout_theme_sidebar_change('false');"
                                                    data-bs-toggle="tooltip" title="Dark">
                                                    <svg class="pc-icon">
                                                        <use xlink:href="#custom-moon"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <h6 class="mb-1">Sidebar Caption</h6>
                                        <p class="text-muted text-sm mb-0">Show / Hide</p>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="row g-2 theme-color theme-nav-caption justify-content-end">
                                            <div class="col-auto">
                                                <button class="preset-btn btn-img btn active" data-value="true"
                                                    onclick="layout_caption_change('true');"
                                                    data-bs-toggle="tooltip" title="Caption Show">
                                                    <img src="../assets/images/customizer/caption-on.svg"
                                                        alt="img" class="img-fluid">
                                                </button>
                                            </div>
                                            <div class="col-auto">
                                                <button class="preset-btn btn-img btn" data-value="false"
                                                    onclick="layout_caption_change('false');"
                                                    data-bs-toggle="tooltip" title="Caption Hide">
                                                    <img src="../assets/images/customizer/caption-off.svg"
                                                        alt="img" class="img-fluid">
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="pc-rtl">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <h6 class="mb-1">Theme Layout</h6>
                                            <p class="text-muted text-sm mb-0">LTR/RTL</p>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-2 theme-color theme-direction justify-content-end">
                                                <div class="col-auto">
                                                    <button class="preset-btn btn-img btn active" data-value="false"
                                                        onclick="layout_rtl_change('false');"
                                                        data-bs-toggle="tooltip" title="LTR">
                                                        <img src="../assets/images/customizer/ltr.svg"
                                                            alt="img" class="img-fluid">
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <button class="preset-btn btn-img btn" data-value="true"
                                                        onclick="layout_rtl_change('true');"
                                                        data-bs-toggle="tooltip" title="RTL">
                                                        <img src="../assets/images/customizer/rtl.svg"
                                                            alt="img" class="img-fluid">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item pc-box-width">
                                <div class="pc-container-width">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <h6 class="mb-1">Layout Width</h6>
                                            <p class="text-muted text-sm mb-0">Full / Fixed</p>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <div class="row g-2 theme-color theme-container justify-content-end">
                                                <div class="col-auto">
                                                    <button class="preset-btn btn-img btn active" data-value="false"
                                                        onclick="change_box_container('false')"
                                                        data-bs-toggle="tooltip" title="Full Width">
                                                        <img src="../assets/images/customizer/full.svg"
                                                            alt="img" class="img-fluid">
                                                    </button>
                                                </div>
                                                <div class="col-auto">
                                                    <button class="preset-btn btn-img btn" data-value="true"
                                                        onclick="change_box_container('true')"
                                                        data-bs-toggle="tooltip" title="Fixed Width">
                                                        <img src="../assets/images/customizer/fixed.svg"
                                                            alt="img" class="img-fluid">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pct-2-tab-pane" role="tabpanel" aria-labelledby="pct-2-tab"
                        tabindex="0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h6 class="mb-1">Custom Theme</h6>
                                <p class="text-muted text-sm">Choose your primary theme color</p>
                                <div class="theme-color preset-color">
                                    <a href="#!" data-bs-toggle="tooltip" title="Blue" class="active"
                                        data-value="preset-1">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Indigo"
                                        data-value="preset-2">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Purple"
                                        data-value="preset-3">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Pink"
                                        data-value="preset-4">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Red"
                                        data-value="preset-5">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Orange"
                                        data-value="preset-6">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Yellow"
                                        data-value="preset-7">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Green"
                                        data-value="preset-8">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Teal"
                                        data-value="preset-9">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Cyan"
                                        data-value="preset-10">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">Header Theme</h6>
                                <p class="text-muted text-sm">Choose your Header theme color</p>
                                <div class="theme-color header-color">
                                    <a href="#!" class="d-none active" data-value>
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Blue"
                                        data-value="preset-1">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Indigo"
                                        data-value="preset-2">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Purple"
                                        data-value="preset-3">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Pink"
                                        data-value="preset-4">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Red"
                                        data-value="preset-5">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Orange"
                                        data-value="preset-6">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Yellow"
                                        data-value="preset-7">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Green"
                                        data-value="preset-8">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Teal"
                                        data-value="preset-9">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Cyan"
                                        data-value="preset-10">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">Navbar Theme</h6>
                                <p class="text-muted text-sm">Choose your Navbar theme color</p>
                                <div class="theme-color navbar-color">
                                    <a href="#!" class="d-none active" data-value>
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Blue"
                                        data-value="preset-1">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Indigo"
                                        data-value="preset-2">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Purple"
                                        data-value="preset-3">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Pink"
                                        data-value="preset-4">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Red"
                                        data-value="preset-5">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Orange"
                                        data-value="preset-6">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Yellow"
                                        data-value="preset-7">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Green"
                                        data-value="preset-8">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Teal"
                                        data-value="preset-9">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Cyan"
                                        data-value="preset-10">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">Logo Theme</h6>
                                <p class="text-muted text-sm">Choose your Logo theme color</p>
                                <div class="theme-color logo-color">
                                    <a href="#!" class="d-none active" data-value>
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Blue"
                                        data-value="preset-1">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Indigo"
                                        data-value="preset-2">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Purple"
                                        data-value="preset-3">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Pink"
                                        data-value="preset-4">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Red"
                                        data-value="preset-5">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Orange"
                                        data-value="preset-6">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Yellow"
                                        data-value="preset-7">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Green"
                                        data-value="preset-8">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Teal"
                                        data-value="preset-9">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Cyan"
                                        data-value="preset-10">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">Navbar Caption Color</h6>
                                <p class="text-muted text-sm">Choose your Navbar Caption Color</p>
                                <div class="theme-color caption-color">
                                    <a href="#!" class="d-none active" data-value>
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Blue"
                                        data-value="preset-1">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Indigo"
                                        data-value="preset-2">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Purple"
                                        data-value="preset-3">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Pink"
                                        data-value="preset-4">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Red"
                                        data-value="preset-5">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Orange"
                                        data-value="preset-6">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Yellow"
                                        data-value="preset-7">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Green"
                                        data-value="preset-8">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Teal"
                                        data-value="preset-9">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!" data-bs-toggle="tooltip" title="Cyan"
                                        data-value="preset-10">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">Navbar Image</h6>
                                <p class="text-muted text-sm">Choose your Navbar Background Image</p>
                                <div class="theme-color navbar-img">
                                    <a href="#!" class="d-none active" data-value>
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!"
                                        style="background-image: url(../assets/images/layout/navbar-img-1.jpg)"
                                        data-value="preset-1">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!"
                                        style="background-image: url(../assets/images/layout/navbar-img-2.jpg)"
                                        data-value="preset-2">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!"
                                        style="background-image: url(../assets/images/layout/navbar-img-3.jpg)"
                                        data-value="preset-3">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!"
                                        style="background-image: url(../assets/images/layout/navbar-img-4.jpg)"
                                        data-value="preset-4">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!"
                                        style="background-image: url(../assets/images/layout/navbar-img-5.jpg)"
                                        data-value="preset-5">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                    <a href="#!"
                                        style="background-image: url(../assets/images/layout/navbar-img-6.jpg)"
                                        data-value="preset-6">
                                        <i class="ti ti-checks"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pct-3-tab-pane" role="tabpanel" aria-labelledby="pct-3-tab"
                        tabindex="0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h6 class="mb-1">Dropdown Menu Icon</h6>
                                <p class="text-muted text-sm">Choose your Dropdown Menu Icon</p>
                                <div class="theme-color drp-menu-icon">
                                    <a href="#!" class="active" data-value="preset-1">
                                        <i class="ti ti-chevron-right"></i>
                                    </a>
                                    <a href="#!" data-value="preset-2">
                                        <i class="ti ti-chevrons-right"></i>
                                    </a>
                                    <a href="#!" data-value="preset-3">
                                        <i class="ti ti-caret-right"></i>
                                    </a>
                                    <a href="#!" data-value="preset-4">
                                        <i class="ti ti-circle-plus"></i>
                                    </a>
                                    <a href="#!" data-value="preset-5">
                                        <i class="ti ti-plus"></i>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <h6 class="mb-1">Dropdown Menu Link Icon</h6>
                                <p class="text-muted text-sm">Choose your Dropdown Menu Link Icon</p>
                                <div class="theme-color drp-menu-link-icon">
                                    <a href="#!" class="active" data-value="preset-1"></a>
                                    <a href="#!" data-value="preset-2">
                                        <i class="ti ti-arrow-narrow-right"></i>
                                    </a>
                                    <a href="#!" data-value="preset-3">
                                        <i class="ti ti-chevron-right"></i>
                                    </a>
                                    <a href="#!" data-value="preset-4">
                                        <i class="ti ti-chevrons-right"></i>
                                    </a>
                                    <a href="#!" data-value="preset-5">
                                        <i class="ti ti-corner-down-right"></i>
                                    </a>
                                    <a href="#!" data-value="preset-6">
                                        <i class="ti ti-minus"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('shop-owner/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/plugins/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/plugins/world.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/pages/dashboard-default.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('shop-owner/assets/js/plugins/feather.min.js') }}"></script>
    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_caption_change('true');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change('preset-1');
    </script>
    <script>
        layout_theme_sidebar_change('false');
    </script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8c58095aaacbce2d","version":"2024.8.0","r":1,"token":"dfc6ad2bc063456e85d5f100efcb73a2","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}}}'
        crossorigin="anonymous"></script>
</body>

</html>
