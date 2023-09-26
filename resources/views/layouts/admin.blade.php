<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin CBU Sites</title>

    <!-- Fonts -->
    <!DOCTYPE html>
    <html>

    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8" />
        <title>Admin CBU Sites</title>

        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180"
            href="{{ asset('assets-admin/vendors/images/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" sizes="32x32"
            href="{{ asset('assets-admin/vendors/images/favicon-32x32.png') }}" />
        <link rel="icon" type="image/png" sizes="16x16"
            href="{{ asset('assets-admin/vendors/images/favicon-16x16.png') }}" />

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet" />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/vendors/styles/core.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/vendors/styles/icon-font.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets-admin/vendors/styles/style.css') }}" />

        <!-- lobal site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
            crossorigin="anonymous"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag("js')}}", new Date());

            gtag("config", "G-GBZ3SGGX85");
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js')}}"
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
        </script>
        <!-- End Google Tag Manager -->
    </head>

<body>
    <div class="header sidebar-light">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>
            <div class="search-toggle-icon bi bi-search" data-toggle="header_search"></div>
        </div>
        <div class="header-right">
            <div class="user-info-dropdown mr-4 mt-3">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-name ">{{ Auth::user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list ">
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                        <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                        <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="dw dw-logout"></i> Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="/" class="navbar-brand p-0">
                <h3 class="ml-5 d-flex justify-content-center">CBU Admin</h3>
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li>
                        <a href="/admin" class="dropdown-toggle no-arrow">
                            <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon bi bi-textarea-resize"></span><span class="mtext">Data Website</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="{{ route('article.index') }}">Data Artikel</a></li>
                            <li><a href="{{ route('dashboard.index') }}">Data Dashboard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    @yield('content')

    <!-- js -->
    <script src="{{ asset('assets-admin/vendors/scripts/core.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/scripts/script.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/scripts/process.js') }}"></script>
    <script src="{{ asset('assets-admin/vendors/scripts/layout-settings.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
    <!-- buttons for Export datatable -->
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/datatables/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets-admin/src/plugins/tinymce/tinymce.min.js') }}"></script>
    <!-- Datatable Setting js -->
    <script src="{{ asset('assets-admin/vendors/scripts/datatable-setting.js') }}"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>
