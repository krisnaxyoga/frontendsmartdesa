@extends('app')

@section('headerTop')
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>SEJARAH</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li> 
                    <b>/</b> 
                    @foreach ($halamanLoad as $item)
                        <li class="active">{{$item->slug}}</li>
                    @endforeach
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
                        @foreach ($halamanLoad as $item)
                        <article>
                            <div class="post-media">
                                    <img src="{{$item->gambar}}" class="img-responsive" style="margin: auto">                                    
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h1>{!!$item->judul!!}</h1>
                                </div>
                                <div class="post-metadata">       
                                </div>
                                <div class="hr"></div>
                                <div class="post-entry">
                                    <p>{!!$item->konten!!}</p>  
                                </div>
                                <div class="footer-entry clearfix">
                                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div>
                            </div>
                        </article>
                        @endforeach
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