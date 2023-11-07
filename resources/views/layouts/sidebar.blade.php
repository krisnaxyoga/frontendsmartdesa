<style>
    .main-sidebar .cart_list li:before{
        display: none !important;
    }
    .cart_list.product_list_widget .product-detail{
        padding-left: 160px;
        font-size: 12px;
    }
</style>
<div class="main-sidebar">
    <aside class="widget widget_tag_cloud">
        <h3 class="widget-title">Kepala Desa</h3>
        <div class="tiny-border"></div>
    @foreach ($desaPamong as $item)
        <div class="image-kades">
            <img src="{{$item->foto}}"><br>
        </div>

        <div class="kades" style="text-align: center;">
            <span class="product-title" style="font-size: 17px"><b>{{$item->pamong_nama}}</b></span>
            <br>
            <span class="product-title" style="font-size: 15px">{{$item->jabatan}}</span>
        </div>
    @endforeach

    </aside>
    <aside class="widget widget_categories">
        <h3 class="widget-title">TRANSPARASI KEUANGAN</h3>
        <div class="tiny-border"></div>
        @foreach ($dataKeuangan as $item)
        <ul>
            <li class="cat-item" style="font-size: 16px"><a href="/halaman/{{$item->slug}}/keuangan">{{$item->judul}}</a></li>
        </ul>
        @endforeach
    </aside>
    <aside class="widget woocommerce widget_products">
        <h3 class="widget-title">BERITA POPULER</h3>
        <div class="tiny-border"></div>
        <ul class="cart_list product_list_widget clearfix">
            @foreach ($artikel as $item)
            <li class="mini_cart_item" style="color: #fff !important;"><br>
                <div class="img-thumb">
                    <img alt="" class="attachment-shop_thumbnail" src="{{$item->gambar}}" style="width: auto; height: 80px">

                </div>
                <div class="product-detail">
                    <a href="/berita/{{$item->slug}}"><b>{{$item->judul}}</b></a><br>
                <span class="amount">{{$item->created_at->format('d F Y')}}</span>
                </div>
            </li>
            @endforeach
        </ul>
    </aside>
    {{-- <aside class="widget widget_search">
        <form action="" class="search-form" method="get" role="search">
            <input type="search" name="s" value="" placeholder="Cari …" class="search-field">
            <button class="search-submit" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </aside> --}}
    <aside class="widget widget_categories">
        <h3 class="widget-title">KATEGORI BERITA</h3>
        <div class="tiny-border"></div>
        @foreach ($dataKategori as $item)
        <ul>
            <li class="cat-item" style="font-size: 16px"><a href="/kategori/{{$item->id}}/berita">{{$item->nama}}</a></li>
        </ul>
        @endforeach
    </aside>
</div>
