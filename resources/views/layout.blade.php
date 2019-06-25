<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>
            @yield('title')
        </title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
        <!-- Bootstrap CSS File -->
        <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <!-- Libraries CSS Files -->
        <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

        <style>
        
        #main #services div.container ul.nav.nav-tabs li.active a {
            background-color: #007bff !important;
            color: white;
        }
        #main #services div.container ul.nav.nav-tabs li a {
            background-color: #fff !important;
           
        }

         #main #services div.container ul.nav.nav-tabs li#how-work a {
            border-radius:50px 0 0 50px;
        }

         #main #services div.container ul.nav.nav-tabs li#how-work2 a {
            border-radius:0 50px 50px 0;
            width:98.4px
        }

         #main #services div.container ul.nav.nav-tabs {
            list-style: none;
        }
        #main #services div.container ul.nav.nav-tabs li {
            display: inline;
        }

       .centering-ul{
        display: table;   /* Allow the centering to work */
	    margin: 0 auto;
       }
        </style>   

    </head>
    <body>
        
        <main id="main">
            @yield('content')
        </main>
        
        <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/mobile-nav/mobile-nav.js')  }}"></script>
        <script src="{{ asset('lib/wow/wow.min.js')  }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js')  }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js')  }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')  }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('contactform/contactform.js')  }}"></script>
        <script src="{{ asset('js/main.js')  }}"></script>
        <script src="{{ asset('js/app.js')  }}"></script>
        <script src="{{ asset('js/bootstrap.js')  }}"></script>
    
    </body>
</html>
