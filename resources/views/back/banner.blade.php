@extends('adminlte::page')
@section('plugins.BootstrapSelect', true)
@section('plugins.BsCustomFileInput', true)
@section('plugins.Datatables', true)
@section('plugins.DatatablesPlugins', true)

@section('title', 'Banner Depan')

@section('content_header')
    <h1>Banner Depan</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            <x-adminlte-alert theme="info" title="Info">
                <strong>Perhatian...!!</strong> Upload foto dengan ukuran 800x800 pixel, agar tampilan foto lebih maksimal <i class="far fa-smile-wink"></i>
            </x-adminlte-alert>
            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-2">
                        <x-adminlte-textarea name="title" label="Title Banner" placeholder="Insert description..."/>
                    </div>
                    <div class="col-2">
                        <x-adminlte-textarea name="content" label="Isi kontent banner" placeholder="Insert description..."/>
                    </div>
                    <div class="col-4">
                        <x-adminlte-input name="link" label="Isi link button banner" value="#"  />
                    </div>
                    <div class="col-2">
                        <x-adminlte-input-file name="image" label="Upload Gambar" placeholder="Choose a file..." />
                    </div>
                    <div class="col-2">
                        <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success" icon="fas fa-lg fa-save" style="margin-top:30px;" />
                    </div>
                </div>
            </form>
            
        </div>

    </div>
    <div class="card">
        <!-- /.card-body -->
        <div class="card-body">
            <div class="row">
                @isset($dataTable)
                    <div class="col-12">
                        <div class="table-responsive">
                            {{ $dataTable->table(['class' => 'table table-hover table-bordered dataTable no-footer', 'style' => 'width:100%']) }}
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
