<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>

    <script>
                /*
        * BetterNav - Bootstrap Navbar + bigSlide (for mobile)
        * ATTENTION: CSS does not use browser prefixes, modify if you decide to use in production!
        */
        $(document).ready(function() {
        /* Navbar specifics */
            $('.better-nav').each(function(){
            /* Set max width of fixed navbar equal to parent element (ignore this it's project specific) */
            $parentMaxWidth = $('dummy').css('max-width');
            $('.container', this).css('max-width', $parentMaxWidth);
            /* Add body padding if navbar is fixed on top or bottom */
            if($('.better-nav').hasClass('fixed-top')) {
                var $navHeight = $(this).height();
                $('body').css('padding-top', $navHeight+'px');
            } else if($('.better-nav').hasClass('fixed-bottom')) {
                var $navHeight = $(this).height();
                $('body').css('padding-bottom', $navHeight+'px');
            }
            });
        /* Clone main navbar for mobile */
            $('.better-nav .toggle').on('click touchstart', function(){
            $('#navbar-slide').empty();
            $(this).siblings('.body').clone().appendTo("#navbar-slide");
            betterNavPillsInit('#navbar-slide li.dropdown .selector');
            });
        });
    </script>
    <style>
        /* footer */
        .footer-basic {
        padding:25px 0;
        background-color:#f5f5f5;
        color:#4b4c4d;
        }

        .footer-basic .social {
        text-align:right;
        padding-bottom:0px;
        margin-right: 15px;
        }

        .footer-basic .social > a {
        font-size:24px;
        width:40px;
        height:40px;
        line-height:40px;
        display:inline-block;
        text-align:center;
        border-radius:50%;
        border:1px solid #ccc;
        margin:0 8px;
        color:inherit;
        opacity:0.75;
        }

        .footer-basic .social > a:hover {
        opacity:0.9;
        }

        .footer-basic .copyright {
        margin-top:15px;
        margin-right: 15px;
        text-align:right;
        font-size:15px;
        color:#aaa;
        margin-bottom:0;
        }
                /* General */
        @import "https://fonts.googleapis.com/css?family=Comfortaa:400,700";
        html,
        body {
        /* height: 100%; */
        }
        body {
        background: #f5f5f5;
        position: relative;
        }


        /* Navbar */
        .better-nav {
        word-wrap: break-word;
        background: #1a1a1a;
        height: 100px;
        margin-bottom: 30px;
        } /* Set the height of the navbar */
        .better-nav a {
        color: #1a1a1a;
        opacity: 0.6;
        }
        .better-nav a:hover,
        .better-nav a:focus {
        opacity: 1;
        }
        .better-nav .container {
        height: 100%;
        }
        .container .better-nav .container {
        max-width: 100%;
        }
        /* Fixed */
        .better-nav.fixed-top {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 90;
        }
        .better-nav.fixed-bottom {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 90;
        }
        /* Head */
        .better-nav .head {
        float: left;
        height: 100%;
        }
        .better-nav .head .brand {
        display: block;
        opacity: 1;
        padding: 15px 0;
        height: 100%;
        text-decoration: none;
        }
        .better-nav .head .brand .logo {
        float: left;
        margin-right: 15px;
        height: 100%;
        }
        .better-nav .head .brand .logo .image {
        height: 100%;
        width: auto;
        width: auto;
        border-radius: 50%
        }
        .better-nav .head .brand .title {
        float: left;
        display: table;
        height: 100%;
        }
        .better-nav .head .brand .title h3 {
        opacity: 0.7;
        display: table-cell;
        vertical-align: middle;
        font-size: 24px;
        font-weight: bold;
        font-family: "Comfortaa", cursive;
        }
        .better-nav .head .brand .title h3:hover,
        .better-nav .head .brand .title h3:focus {
        opacity: 1;
        }
        /* Body */
        .better-nav .body {
        float: right;
        height: 100%;
        }
        .better-nav .body li:hover,
        .better-nav .body li:focus {
        background: #ffe082;
        }
        .better-nav .body li:hover > a,
        .better-nav .body li:focus > a {
        opacity: 1;
        }
        .better-nav .body ul {
        list-style: none;
        margin: 0;
        padding: 0;
        height: 100%;
        }
        .better-nav .body ul li.active {
        background: #ffe082;
        }
        .better-nav .body > ul > li {
        display: table;
        float: left;
        height: 100%;
        }
        .better-nav .body > ul > li > a {
        display: table-cell;
        vertical-align: middle;
        text-decoration: none;
        padding: 0 15px;
        }

        /* sidebar */

        .sidebar-container {
        position: fixed;
        width: 220px;
        height: 100%;
        left: 0;
        overflow-x: hidden;
        overflow-y: auto;
        background: #1a1a1a;
        color: #fff;
        }

        .content-container {
        padding-top: 20px;
        }

        .sidebar-logo {
        padding: 10px 15px 10px 30px;
        font-size: 20px;
        background-color: #2574A9;
        }

        .sidebar-navigation {
        padding: 0;
        margin: 0;
        list-style-type: none;
        position: relative;
        }

        .sidebar-navigation li {
        background-color: transparent;
        position: relative;
        display: inline-block;
        width: 100%;
        line-height: 20px;
        }

        .sidebar-navigation li a {
        padding: 10px 15px 10px 30px;
        display: block;
        color: #fff;
        }

        .sidebar-navigation li .fa {
        margin-right: 10px;
        }

        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
        text-decoration: none;
        outline: none;
        }

        .sidebar-navigation li::before {
        background-color: #2574A9;
        position: absolute;
        content: '';
        height: 100%;
        left: 0;
        top: 0;
        -webkit-transition: width 0.2s ease-in;
        transition: width 0.2s ease-in;
        width: 3px;
        z-index: -1;
        }

        .sidebar-navigation li:hover::before {
        width: 100%;
        }

        .sidebar-navigation .header {
        font-size: 12px;
        text-transform: uppercase;
        background-color: #151515;
        padding: 10px 15px 10px 30px;
        }

        .sidebar-navigation .header::before {
        background-color: transparent;
        }

        .content-container {
        padding-left: 220px;
        }
    </style>


</head>

<body>
    {{-- header --}}
    <nav id="navbar" class="push better-nav fixed-top">
        <div class="container">
          <div class="head">
            <a class="brand">
              <div class="logo">
                <img class="image" src="{{URL::asset('/images/fotodiri1.png')}}"  alt="Foto Jeremy Diaz Prasetyo" />
              </div>
              <div class="title">
                <h3 style="color: #fff">Jeremy Diaz Prasetyo | 5026201120 </h3>
              </div>
            </a>
          </div>
        </div>
      </nav>
      <div id="underlay" class="better-nav-mobile-underlay"></div>
      <nav id="navbar-slide" class="better-nav-pills"></nav>

      {{-- Left Sidebar --}}
      <div class="sidebar-container">
        <div class="sidebar-logo">
          PWEB A
        </div>
        <ul class="sidebar-navigation">
          <li class="header">My Works</li>
          <li>
            <a href="/pegawai">
              <i class="fa fa-home" aria-hidden="true"></i> Pegawai
            </a>
          </li>
          <li>
            <a href="/absen">
              <i class="fa fa-tachometer" aria-hidden="true"></i> Absen
            </a>
          </li>
          <li>
            <a href="/tugas">
              <i class="fa fa-home" aria-hidden="true"></i> Tugas Pegawai
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-home" aria-hidden="true"></i> Buku
            </a>
          </li>

        </ul>
      </div>

      <div class="content-container">

        <div class="container-fluid">

            <h2 style="text-align: center">@yield('judulhalaman')</h2>
            <br>
            <div style="text-align: left">
                @section('konten')

                @show
            </div>
        </div>
        <div class="footer-basic">
            <footer>
                <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>

                <p class="copyright">Jeremy Diaz Prasetyo | 5026201120</p>
            </footer>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      </div>




</body>

</html>
