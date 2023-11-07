@extends('app')

@section('headerTop')
<section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom subheader">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Peta Desa</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li> 
                    <b>/</b> 
                        <li class="active">Peta Desa</li>
                </ul>            
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<div id="wrapper">

    <!-- content begin -->
    <div id="content  mt-0 pt-0">
        <div class="">
            <div class="row"> 
                <div class="col-md-12">
                    <iframe style="height : 700px;width : 100%" src="{{env('ADMIN_RUL')}}/gis?token=guest&desa_id=2&type=village&header=false" frameborder="0">
                    </iframe>
                </div>
            </div>
        </div> 
    </div>
    <!-- content close -->
   
</div>
@endsection