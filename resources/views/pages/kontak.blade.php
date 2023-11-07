@extends('app')

@section('headerTop')
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12 header">
                <h1>Kontak</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li> 
                    <b>/</b> 
                        <li class="active">Kontak</li>
                </ul>            
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div id="wrapper">

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row"> 
                <div class="col-md-9">
                    <div class="blog-single">
                        <!-- post begin -->
                        <article>
                            <div class="post-media">
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                <h1>Kontak Kami</h1>
                                </div>
                                <div class="post-metadata">       
                                </div>
                                <div class="hr"></div>
                                    <div class="post-entry" style="font-size: 16px;">
                                        <p><i class="fa fa-home"></i> {{$desa->alamat_kantor}}</p>
                                        <p><i class="fa fa-envelope"></i> {{$desa->email_desa}}</p>
                                        <p><i class="fa fa-phone"></i> {{$desa->telepon}}</p>
                                        <p><i class="fa fa-globe"></i> {{$desa->website}}</p>
                                    </div>
                                    <div class="footer-entry clearfix">
                                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                        <div class="addthis_inline_share_toolbox"></div>
                                    </div>
                            </div>
                        </article>
                        <!-- post close -->
                    </div>
                </div>
                <div class="col-md-3">
                    @include('layouts.sidebar')                    
                </div>
            </div>
        </div> 
    </div>
    <!-- content close -->
   <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f0aaafac3e78946"></script>

</div>
@endsection