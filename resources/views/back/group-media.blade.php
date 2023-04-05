@extends('adminlte::page')
@section('plugins.BootstrapSelect', true)

@section('title', 'Galery Foto')

@section('content_header')
    <h1>Master Media Group</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    @isset($media)
                        {{-- update form --}}
                        <form action="{{route('group-media.update')}}" method="POST">
                            @csrf
                            <x-adminlte-input name="id" value="{{$media->id}}" type="hidden"/>
                        <x-adminlte-input name="name" label="name" placeholder="input nama group" igroup-size="sm" value="{{$media->name}}">
                            <x-slot name="appendSlot">
                                <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                                    icon="fas fa-lg fa-save" />
                            </x-slot>
                        </x-adminlte-input>
                        </form>
                    @else
                    {{-- create form --}}
                        <form action="{{route('group-media.post')}}" method="POST">
                            @csrf
                        <x-adminlte-input name="name" label="name" placeholder="input nama group" igroup-size="sm">
                            <x-slot name="appendSlot">
                                <x-adminlte-button class="btn-flat" type="submit" label="Submit" theme="success"
                                    icon="fas fa-lg fa-save" />
                            </x-slot>
                        </x-adminlte-input>
                        </form>
                    @endisset
                </div>
                <div class="col-8">
                    <x-adminlte-alert theme="info" title="Info">
                        <strong>Tambah/Update Master group</strong> untuk grouping media foto dll..,, 
                        nama group yang akan di input harus uniq tidak boleh sama :)
                    </x-adminlte-alert>
                </div>
            </div>
        </div>
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
