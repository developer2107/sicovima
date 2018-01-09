@extends('layouts.MenuAdministrador')

@section('content')

  <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-6">
      <h2>Inventario de Productos Terminados</h2>
      <ol class="breadcrumb">
        <li>
          <br>
          <a href={!! asset('ControlProductosTerminados') !!}>Inventario</a>
        </li>
          <li class="active">
          <strong>Mostrar Lista de Productos Terminados</strong>
        </li>
      </ol>
    </div>
    <div class="col-sm-8">
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="row">
          <div class="col-lg-12">
            <div class="ibox float-e-margins">
              <div class="ibox-title">
                <h5>Listado de Productos Terminados</h5>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <br>
                    
                    <table id="example" class="display" cellspacing="100" width="100%">
                      <thead>
                        <tr>
                          <th align="left"><font size="3" >Tipo</font></th>
                          <th align="left"><font size="3" >Estilo</font></th>
                          <th align="left"><font size="3" >Precio</font></th>
                          <th align="left"><font size="3" >Talla</font></th>
                          <th align="left"><font size="3" >Existencias</font></th>
                          <th align="left"><font size="3" >Estado</font></th>
                          <th align="left"><font size="3" >Opciones</font></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($producto as $prod)
                        <tr>
                          <td align="left"><font size="3" >{{$prod->tipo_Prod}}</font></td>
                          <td align="left"><font size="3" >{{$prod->estilo_Prod}}</font></td>
                          <td align="left"><font size="3" >{{$prod->precio_Prod}}</font></td>
                          <td align="left"><font size="3" >{{$prod->talla_Prod}}</font></td>
                          <td align="left" style = "width:10%"><font size="4" >{{$prod->talla_Prod}}</font></td>
                          <td align="left">
                            <?php if ($prod->estado_Prod==0): ?>
                            <font size="4" >Dañado</font>
                            <?php else: ?>
                            <font size="4" >Bien</font></td> 
                            <?php endif ?>
                          <td align="center"><a href="VerProductosTerminados" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@stop
