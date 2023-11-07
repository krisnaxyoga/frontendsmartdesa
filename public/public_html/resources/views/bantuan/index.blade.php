@extends('layouts.app')

@section('title')
{{$page_title}}
@endsection

@section('action')
<a href="{{route('bantuan.create')}}" class="btn btn-rounded btn-success"><i class="fa fa-plus"></i> Tambah {{$page_title}}</a>
@endsection

@section('content')
<div class="content-main" id="content-main">
    <div class="padding">
       
        <div class="table-responsive">
            <table id="datatable" class="table v-middle p-0 m-0 box">
                <thead>
                    <tr>
                        <th width="30"></th>
                        <th>Nama Program</th>
                        <th>Masa Berlaku</th>
                        <th>Sasaran</th>
                    </tr>
                </thead>
			</table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    let dataTable = $("#datatable").DataTable({
        ajax: "/bantuan?type=datatable",
        processing: true,
        serverSide : true,
        order: [[ 1, "asc" ]],
        columns: [
            { data: "action", name: "action", orderable: false },
            { data: "nama", name: "nama" },
            { data: "valid", name: "valid" },
            { data: "subjek", name: "subjek" },
        ]
    });
</script>
@endpush