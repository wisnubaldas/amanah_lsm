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
                        @php
    $config = [
        "title" => "Select multiple options...",
        "liveSearch" => true,
        "liveSearchPlaceholder" => "Search...",
        "showTick" => true,
        "actionsBox" => true,
    ];
@endphp
                <x-adminlte-select-bs id="selBsCategory" name="selBsCategory[]" label="Categories"
                label-class="text-danger" igroup-size="sm" :config="$config" multiple>
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-gradient-red">
                        <i class="fas fa-tag"></i>
                    </div>
                </x-slot>
                <x-slot name="appendSlot">
                    <x-adminlte-button theme="outline-dark" label="Clear" icon="fas fa-lg fa-ban text-danger"/>
                </x-slot>
                <option data-icon="fa fa-fw fa-running text-info" data-subtext="Running">Sports</option>
                <option data-icon="fa fa-fw fa-futbol text-info" data-subtext="Futbol">Sports</option>
                <option data-icon="fa fa-fw fa-newspaper text-danger">News</option>
                <option data-icon="fa fa-fw fa-gamepad text-warning">Games</option>
                <option data-icon="fa fa-fw fa-flask text-primary">Science</option>
                <option data-icon="fa fa-fw fa-calculator text-dark">Maths</option>
            </x-adminlte-select-bs>
            </div>
            <!-- /.card-footer -->
          </div>
          <!-- /.card -->
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                
          
        
    </div>
@stop

@section('css')

@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop