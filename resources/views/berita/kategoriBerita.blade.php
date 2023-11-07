@extends('app')

@section('headerTop')
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Berita</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li> 
                    <b>/</b> 
                    <li class="active">Berita</li>
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
                        <div class="blog-list">
                            <!-- post begin -->
                            @if (count($kategori) == 0)
                                <h2>Berita Tidak Ditemukan</h2>
                            @else
                                @foreach ($kategori as $item)
                                <article>
                                    <div class="post-media">
                                        <img alt="" src="{{$item->gambar}}" class="img-responsive">
                                        <div class="post-date">
                                        <span class="date-day">{{$item->created_at->format('d')}}</span>
                                            <span class="date-month">{{$item->created_at->format('m-y')}}</span>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <div class="post-title">
                                            <h5><a href="/berita/{{$item->slug}}">{{$item->judul}}</a></h5>
                                        </div>
                                        <div class="post-metadata">
                                            <span class="byline">
                                                <i class="fa fa-calendar"></i>
                                                <a href="#">{{$item->created_at->format('d F y')}}</a>
                                            </span>
                                        </div>
                                        <div class="post-entry">
                                            <p>{!!str_limit($item->konten, $limit = 150, $end = '...')!!}</p>
                                            <p><a class="btn btn-border" href="/berita/{{$item->slug}}">Selengkapnya</a></p>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            @endif

                            <!-- post close -->
                        </div>

                        <!-- pagination begin -->
                        <div class="pagination-ourter text-center">
                            <ul class="pagination">
                                <li class="page-number">{{$kategori->links()}}</li>
                            </ul>
                        </div>
                        <!-- pagination close -->
                    </div>

                    <div class="col-md-3">
                        @include('layouts.sidebar')
                    </div>
                </div>
            </div> 
        </div>
        <!-- content close -->
   
</div>
@endsection