@extends('app')

@section('headerTop')
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Baca Berita</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li> 
                    <b>/</b> 
                    <li class="active">Berita</li>
                    <b>/</b> 
                <li class="active">{!!$dataId->judul!!}</li>
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
                                <img src="{{$dataId->gambar}}" class="img-responsive" style="margin: auto">                                    
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h1>{!!$dataId->judul!!}</h1>
                                </div>
                                <div class="post-metadata">                                        
                                    <span class="posted-on">
                                        <i class="fa fa-clock-o"></i>
                                        {{$dataId->created_at->format('j F y')}}
                                    </span>
                                    <span class="byline">
                                        <i class="fa fa-newspaper-o"></i>
                                        @foreach ($kategoriArtikel as $item)
                                            <a href="#">{{$item->nama}}</a>
                                        @endforeach
                                    </span>
                                </div>
                                <div class="hr"></div>
                                <div class="post-entry">
                                    <p>{!!$dataId->konten!!}</p>                                                              
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
   
</div>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f0aaafac3e78946"></script>

@endsection