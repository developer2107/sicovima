@extends('layouts.MenuAdministrador')

@section('content')
    <h3>Administrador de Backups</h3>
    <div class="row">
        <div class="col-xs-12 clearfix">
            <a id="create-new-backup-button" href="{{ url('backup/createAPP') }}" class="btn btn-primary pull-right"
               style="margin-bottom:2em;"><i
                    class="fa fa-plus"></i> Crear Nuevo Backups toda APP
            </a>
        </div>
        <div class="col-xs-12 clearfix">
            <a id="create-new-backup-button" href="{{ url('backup/createBase') }}" class="btn btn-primary pull-right"
               style="margin-bottom:2em;"><i
                    class="fa fa-plus"></i> Crear Nuevo Backups solo base
            </a>
        </div>
        <div class="col-xs-12">
            @if (count($backups))

                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Archivo</th>
                        <th>Tamaño</th>
                        <th>Fecha</th>
                        <th>Años</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($backups as $backup)
                        <tr>
                            <td>{{ $backup['file_name'] }}</td>
                            <td>{{ humanFilesize($backup['file_size']) }}</td>
                            <td>
                                {{ formatTimeStamp($backup['last_modified'], 'F jS, Y, g:ia (T)') }}
                            </td>
                            <td>
                                {{ diffTimeStamp($backup['last_modified']) }}
                            </td>
                            <td class="text-right">
                                <a class="btn btn-xs btn-default"
                                   href="{{ url('backup/download/'.$backup['file_name']) }}"><i
                                        class="fa fa-cloud-download"></i>Descargar</a>
                                <a class="btn btn-xs btn-danger" data-button-type="delete"
                                   href="{{ url('backup/delete/'.$backup['file_name']) }}"><i class="fa fa-trash-o"></i>
                                    Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="well">
                    <h4>No hay copias de seguridad</h4>
                </div>
            @endif
        </div>
    </div>
@endsection
