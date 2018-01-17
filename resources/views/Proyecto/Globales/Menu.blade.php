
<nav class="navbar-default navbar-static-side" role="navigation">
  <div class="sidebar-collapse">
    <ul class="nav metismenu" id="side-menu">
      <li class="nav-header">
        <div class="dropdown profile-element"> <span>
          <img alt="image" class="img-circle" src={{ asset('/img/SICOVIMA2.png') }}>
        </span>
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">SICOVIMA</strong>
          </span> <span class="text-muted text-xs block">Administrador<b class="caret"></b></span> </span> </a>
          <ul class="dropdown-menu animated fadeInRight m-t-xs">
            <li><a href="profile.html">Perfil</a></li>
          </ul>
        </div>
        <div class="logo-element">
        </div>
      </li>
      <li>
        <a href=""><i class="fa fa-shopping-cart"></i> <span class="nav-label">Compras</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li><a href={!! asset('/RegistrarCompra') !!}>Registrar</a></li>
          <li><a href={!! asset('/ListadeCompras') !!}>Mostrar Lista</a></li>
          <li><a href={!! asset('ReportesCompra') !!}>Reporte</a></li>
        </ul>
      </li>
      <li>
        <a href=""><i class="fa fa-money"></i> <span class="nav-label">Ventas</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li><a href={!! asset('RegistrarVenta') !!}>Registrar</a></li>
          <li><a href={!! asset('ListadeVentas') !!}>Mostrar Lista</a></li>
          <li><a href={!! asset('ReportesVenta') !!}>Reporte</a></li>
        </ul>
      </li>
      <li>
        <a href="index.html"><i class="fa fa-cubes"></i><span class="nav-label">Materia Prima</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li>
              <li>
                <a href={!! asset('RegistroMateriaP') !!}>Registrar Materia Prima</a>
              </li>
              <li>
                <a href={!! asset('TipoMercaderia') !!}>Tipo de Mercadería </a>
              </li>
          </li>

        </ul>
      </li>
      <li>
        <a href="index.html"><i class="fa fa-paste"></i><span class="nav-label">Inventario</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">

              <li>
                <a href={!! asset('ControlMateriaPrima') !!}>Inventario de Materia Prima</a>
              </li>
          <li>
            <a href="#">Productos Terminados</a>
            <ul class="nav nav-third-level">
            <li>
              <a href={!! asset('ProductosTerminados') !!}>Ver Inventario</a>
            </li>
            <li>
              <a href={!! asset('ReportesIPT') !!}>Reportes</a>
            </li>
          </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="index.html"><i class="fa fa-truck"></i><span class="nav-label">Proveedores</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li><a href={!! asset('RegistroProveedor') !!}>Registrar</a></li>
          <li><a href={!!asset('MostrarListaProv')!!}>Mostrar Lista</a></li>
          <li><a href={!! asset('DarBajaProv') !!}>Proveedores Inactivos</a></li>
          <li><a href={!! asset('ReportesProveedor') !!}>Reporte</a></li>
        </ul>
      </li>
      <li>
        <a href="index.html"><i class="fa fa-group"></i> <span class="nav-label">Clientes</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
          <li><a href={!! asset('RegistroCliente') !!}>Registrar</a></li>
          <li><a href={!! asset('MostrarListaCli') !!}>Mostrar Lista</a></li>
          <li><a href={!! asset('DarBajaCli') !!}>Clientes Inactivos</a></li>
          <li><a href={!! asset('ReportesCliente') !!}>Reporte</a></li>
        </ul>
      </li>
      <li>
        <a href="index.html"><i class="fa fa-pencil-square-o"></i><span class="nav-label">Pedidos</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
         <li><a href={!! asset('RegistrarPedidos') !!}>Registrar</a></li>
         <li><a href={!! asset('ListadePedidosSinIniciar') !!}>Iniciar</a></li>
         <li><a href={!! asset('ListadePedidosaFinalizar') !!}>Finalizar</a></li>
         <!-- <li><a href={!! asset('ListadePedidosaEntregar') !!}>Entregar</a></li>
 -->         <li><a href={!! asset('ListadePedidos') !!}>Mostrar Lista</a></li>
         <li><a href="#">Reporte</a></li>
       </ul>
     </li>

     <li>
      <a href="#"><i class="fa fa-unlock-alt"></i> <span class="nav-label">Seguridad </span><span class="fa arrow"></span></a>
      <ul class="nav nav-second-level collapse">
        <li>
          <a href="#">Control de Usuario <span class="fa arrow"></span></a>

          <ul class="nav nav-third-level">
            <li>
              <a href={!! asset('Bitacora') !!}>Bitacora</a>
            </li>
            <li>
              <a href="{!! asset('RegistrarUsuario') !!}">Registrar Nuevo Usuario</a>
            </li>
            <li>
              <a href="{{route('Usuario.index')}}">Buscar Usuario</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Administrar Backup</a>
          <ul class="nav nav-third-level">
            <li>
              <a href={!! asset('backup') !!}>Generar Backup</a>
            </li>
            {{-- <li>
              <a href={!! asset('BuscarUsuario') !!}>Restaurar Backup</a>
            </li> --}}
          </ul>
        </li>
      </ul>
    </li>

    <li>
      <a href="#"><i class="fa fa-question-circle"></i><span class="nav-label">Ayuda</span></span></a>
      <ul class="nav nav-second-level collapse">
      </ul>
    </li>
  </ul>

</div>
</nav>
