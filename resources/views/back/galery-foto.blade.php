@extends('adminlte::page')
@section('plugins.BootstrapSelect', true)
@section('plugins.BsCustomFileInput', true)
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', 'Galery Foto')

@section('content_header')
    <h1>Make Galery Foto</h1>
@stop
@section('content')
        <div class="card">
            <div class="card-body">
                <form action="{{route('galery-foto.create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                            <div class="col-3">
                                <x-adminlte-select-bs name="group_media_id" label="Group" >
                                    <option selected value="">No Group</option>
                                    @foreach ($group as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </x-adminlte-select-bs>
                            </div>
                            <div class="col-3">
                                <x-adminlte-input name="name" label="Nama Foto"
                                    fgroup-class="col-md-12" />
                                    
                            </div>
                            <div class="col-3">
                                <x-adminlte-input-file name="link_img" label="Upload Gambar" placeholder="Choose a file..."
                                />
                            </div>
                            <div class="col-3 ">
                                <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" style="margin-top:30px;"/>
                            </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
            <div class="card-body">
                <div class="row">
                    @isset($dataTable)
                        <div class="col-12">
                            <div class="table-responsive">
                            {{ $dataTable->table(['class' => 'table table-hover table-bordered dataTable no-footer','style'=>"width:100%"]) }}
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
@stop

@section('css')

@stop

@section('js')
@isset($dataTable)
{{ $dataTable->scripts() }}
@endisset
@stop