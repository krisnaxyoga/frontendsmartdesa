@extends('layouts.app')

@section('title')
{{$page_title}}
@endsection

@section('content')
<div class="content-main" id="content-main">
    <div class="padding">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h3>Edit Kategori Artikel</h3>
                    </div>
                    <div class="box-divider m-0"></div>
                    <div class="box-body">
                        <form method="POST" action="{{ url('kategori-berita/'.$data->id) }}">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="form-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul style="margin-bottom:0px;">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label>Nama Kategori</label>
                                    <input name="nama" required type="text" class="form-control m-input" placeholder="Nama Kategori" value="{{ $data->nama }}">
                                </div>
                                <div class="form-group">
                                        <div class="checkbox">
                                            <label class="ui-check">
                                                <input type="checkbox" {{$data->status == '1' ? 'checked' : ''}} name="status"> <i class="dark-white"></i> Active
                                            </label>
                                        </div>
                                </div>
                            </div>
                    </div>
                    <div class="box-footer">
                        <a href="{{ url('kategori-berita') }}" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                        <button name="save" type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                        {{-- <button name="savenew" type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Sa÷ve &amp; New</button> --}}
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
</script>
@endsection