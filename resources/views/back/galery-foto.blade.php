@extends('adminlte::page')
@section('plugins.BootstrapSelect', true)

@section('title', 'Galery Foto')

@section('content_header')
    <h1>Make Galery Foto</h1>
@stop

@section('content')
    <div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <x-adminlte-select-bs name="selBsBasic" label="Label" placeholder="placeholder">
                            <option>Option 1</option>
                            <option selected>Option 3</option>
                        </x-adminlte-select-bs>
                    </div>
                    <div class="col-4">
                        <x-adminlte-input name="iLabel" label="Label" placeholder="placeholder"
                            fgroup-class="col-md-6" disable-feedback/>
                    </div>
                    <div class="col-4">
            </div>
            <!-- /.card-body -->
    </div>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop