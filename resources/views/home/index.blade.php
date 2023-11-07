@extends('app')

@section('headerTop')
            <!-- slider -->
            <div id="slider">
                <!-- revolution slider begin -->
                <div class="fullwidthbanner-container">
                    <div id="revolution-slider">
                        <ul>
                        @foreach ($slider as $item)
                            <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                                <!--  BACKGROUND IMAGE -->
                                <img src="{{$item->gambar}}" alt="">

                                {{-- <div class="tp-caption lft custom-font-2"
                                    data-x="center"
                                    data-y="184"
                                    data-speed="800"
                                    data-start="800"
                                    data-easing="easeInOutCubic">
                                    Next One Day
                                </div>

                                <div class="tp-caption sfb custom-font-1"
                                    data-x="center"
                                    data-y="250"
                                    data-speed="800"
                                    data-start="1400"
                                    data-easing="easeInOutCubic">
                                    Good Ideas
                                </div> --}}

                                {{-- <div class="tp-caption sfb"
                                    data-x="center"
                                    data-y="330"
                                    data-speed="800"
                                    data-start="1600"
                                    data-easing="easeInOutCubic">
                                    <a class="btn btn-slider" href="#">Buy Theme</a>&nbsp;&nbsp;<a class="btn btn-border-slider" href="#">Read More</a>
                                </div> --}}
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                <!-- revolution slider close -->
            </div>
            <!-- slider close -->
@endsection

@section('content')

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-list">
                            <!-- post begin -->
                            @foreach ($dataArtikel as $item)
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
                            <!-- post close -->
                        </div>

                        <!-- pagination begin -->
                        <div class="pagination-ourter text-center">
                            <p><a class="btn btn-border" href="/berita">Lihat Semua Berita</a></p>
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
@endsection
