<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Desa {{($dataDesa[0]->nama_desa)}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="{{$desa->logo}}" type="image/x-icon">

    <!-- LOAD CSS FILES -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- color scheme -->
    {{-- <link rel="stylesheet" href="switcher/demo.css" type="text/css">
    <link rel="stylesheet" href="switcher/colors/blue.css" type="text/css" id="colors">   --}}

</head>

<body>
    <!-- Preload images start //-->
    <div class="images-preloader" id="images-preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- Preload images end //-->

    <div id="wrapper">

        <!-- header begin -->
        <header class="site-header-1 site-header">
            <!-- Main bar start -->
            <div id="sticked-menu" class="main-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <!-- logo begin -->
                            <div id="logo" class="pull-left">
                                <a href="/">
                                    <img src="{{$desa->logo_landscape_black}}" style="height : 50px" alt="" class="logo">
                                </a>
                            </div>
                            <!-- logo close -->

                            <!-- btn-mobile menu begin -->
                            <a id="show-mobile-menu" class="btn-mobile-menu hidden-lg hidden-md"><i class="fa fa-bars"></i></a>
                            <!-- btn-mobile menu close -->

                            <!-- mobile menu begin -->

                            <!-- mobile menu close -->

                            <!-- desktop menu begin -->
                            <nav id="desktop-menu" class="site-desktop-menu hidden-xs hidden-sm">
                                <ul class="clearfix">
                                    <li class="active"><a href="/">Home</a>
                                    </li>
                                    <li><a href="{{url('/berita')}}">Kabar Desa</a>
                                    </li>
                                    <li><a href="#">Profil Desa</a>
                                        <ul>
                                            <li><a href="{{url('/visi-misi')}}">Visi Misi</a></li>
                                            <li><a href="{{url('/sejarah')}}">Sejarah</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pemerintahan Desa</a>
                                        <ul>
                                            <li><a href="{{url('/lembaga-desa')}}">Lembaga Desa</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Lembaga Masyarakat</a>
                                        <ul>
                                            @foreach ($dataMenu as $item)
                                                <li><a href="/halaman/{{$item->slug}}">{{$item->judul}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!--li><a href="{{env('PUBLIC_MAP_URL')}}">Peta Desa</a>
                                    </li-->
                                    <li><a href="{{url('/kontak')}}">Kontak</a>
                                    </li>
                                </li>
                                <li><a href="{{url('https://1tempat.id/')}}">Toko Masyarakat</a>
                                </li>
                                </ul>
                            </nav>
                            <!-- desktop menu close -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header close -->
        <div class="gray-line"></div>

        <!-- Modal Search begin -->
        <div id="myModal" class="modal fade" role="dialog">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-dialog myModal-search">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form role="search" method="get" class="search-form" action="">
                        <input type="search" class="search-field" placeholder="Search here..." value="" title="" />
                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
          </div>
        </div>
        <!-- Modal Search close -->

        <!-- Menu OffCanvas right begin -->
        <div class="navright-button hidden-sm">
            <div class="compact-menu-canvas" id="offcanvas-menu">
                <h3>menu</h3><a id="btn-close-canvasmenu"><i class="fa fa-close"></i></a>
                <nav>
                  <ul class="clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="features.html">Features</a></li>
                        <li><a href="pages.html">Pages</a></li>
                        <li><a href="portfolio.html">Portfolios</a></li>
                        <li><a href="shop.html">Shop</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Menu OffCanvas right close -->

        @yield('headerTop')
        {{-- <div class="clearfix"></div> --}}


        @yield('content')

                <!-- footer begin -->
                <footer class="footer-1 bg-color-1">

                    <!-- main footer begin -->
                    <div class="main-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 col-sm-6">
                                    <div class="compact-widget">
                                        <div class="widget-inner">
                                            <img class="logo-footer" src="{{($desa->logo_landscape_white)}}" alt="" style="height: 50px">
                                            <p style="font-size: 14px; text-align: justify">Selamat Datang di website Desa {{($desa->nama_desa)}}. Website ini merupakan salah satu media Informasi kegiatan Desa {{($desa->nama_desa)}}. Cek terus bagaimana perkembangan Desamu lewat website resmi Desa {{($desa->nama_desa)}}</p>
                                            {{-- <div class="social-icons clearfix">
                                                <a href="#" class="facebook tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-facebook"></i></a>
                                                <a href="#" class="twitter tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-twitter"></i></a>
                                                <a href="#" class="google tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-google-plus"></i></a>
                                                <a href="#" class="youtube tipped" data-title="youtube"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-youtube-play"></i></a>
                                                <a href="#" class="linkedin tipped" data-title="linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'><i class="fa fa-linkedin"></i></a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="compact-widget">
                                        <h3 class="widget-title">KONTAK</h3>
                                        <div class="widget-inner" style="font-size: 14px;">
                                            <p><i class="fa fa-home"></i> {{$desa->alamat_kantor}}</p>
                                            <p><i class="fa fa-envelope"></i> {{$desa->email_desa}}</p>
                                            <p><i class="fa fa-phone"></i> {{$desa->telepon}}</p>
                                            <p><i class="fa fa-globe"></i> {{$desa->website}}</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3 col-sm-6">
                                    <div class="compact-widget">
                                        <h3 class="widget-title">HALAMAN</h3>
                                        <div class="widget-inner" style="font-size: 15px;">
                                            <ul>
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/berita">Kabar Desa</a></li>
                                                <li><a href="/visi-misi">Profil Desa</a></li>
                                                <li><a href="/lembaga-desa">Pemerintahan Desa</a></li>
                                                <li><a href="/halaman/badan-permusyawaratan-desa">Lembaga Masyarakat</a></li>
                                                <li><a href="/kontak">Kontak</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- main footer close -->

                    <!-- sub footer begin -->
                    <div class="sub-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    Copyright &copy; 2020 Web Desa {{$desa->nama_desa}}.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sub footer close -->

                </footer>
                <!-- footer close -->

            </div>

            <a id="to-the-top" ><i class="fa fa-angle-up"></i></a>

            <!-- LOAD JS FILES -->
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
            <script src="{{asset('js/easing.js')}}"></script>
            <script src="{{asset('js/owl.carousel.js')}}"></script>
            <script src="{{asset('js/jquery.fitvids.js')}}"></script>
            <script src="{{asset('js/wow.min.js')}}"></script>
            <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>

            <!-- Waypoints-->
            <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('js/sticky.min.js')}}"></script>
            <script src="{{asset('js/tipper.js')}}"></script>
            <script src="{{asset('js/compact.js')}}"></script>
            <script src="{{asset('js/custom-index1.js')}}"></script>

            <!-- SLIDER REVOLUTION SCRIPTS  -->
            <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
            <script src="{{asset('js/revslider-custom.js')}}"></script>


            {{-- <script src="switcher/demo.js"></script> --}}

        </body>
        </html>
