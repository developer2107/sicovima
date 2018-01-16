 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Proveedores Activos</title>
  <style>
    footer {
      position: fixed;
      left: 0px;
      bottom: -50px;
      right: 0px;
      height: 40px;
      border-bottom: 2px solid #ddd;
    }
    footer .page:after {
      content: counter(page);
    }
    footer table {
      width: 100%;
    }
    footer p {
      text-align: right;
    }
    footer .izq {
      text-align: left;
    }
    body {
      font-family: 'Source Sans Pro', sans-serif;
      font-weight: 300;
      font-size: 12px;
      margin: 0;
      padding: 0;
      color: #888888;
    }
    table {
      border-collapse: collapse;
      width: 95%;
    }


    table th,
    table td {
      text-align: center;
    }

    table th {
      padding: 5px 20px;
      color: white;
      border-bottom: 1px solid #C1CED9;
      white-space: nowrap;
      font-weight: normal;
    }

    th {
      background-color: #4f8ba0;
      color: white;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #FAFBFB;
    }
    section .table-wrapper {
      position: relative;
      overflow: hidden;
    }

/*tr:nth-child(even){background-color: #F0FDFF}
*/
table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}
</style>
</head>
<body>
  <div class="col-md-12">
    <div class="box-body">
      <div class="box-header with-border">
        <div style="position: absolute;left: 220px; top: 40px; z-index: 1;"><h2>INDUSTRIAS MADA</h2></div>
        <!-- <div style="position: absolute;left: 280px; top: 80px; z-index: 1;">CASA MATRIZ</div> -->
        <div style="position: absolute;left: 385px; top: 133px; z-index: 1;"><h5>Teléfono 2306-5432</h5></div>
        <div style="position: absolute;left: 120px; top: 133px; z-index: 1;"><h5>Calle Las Truches,Urb.Vía del Mar #1</h5></div>
        <HR style="position: absolute;left: 23px; top: 163px; z-index: 1; color:blue;" width=90%>
          <h3 align="right" style="position: absolute;left:20; top:20px; px; z-index: 1;"><img class="al" width="110px" height="110px" src="img/SICOVIMA2.png" ></h3>
          <h3 align="right" style="position: absolute; left:550px; top:10px; z-index: 1;"><img class="al" width="120px" height="130px" src="img/sicicza2.png" ></h3>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div><!-- /.box-header -->
        <div class="box-body">
          <div style="position: absolute;left: 230px; top: 210px; z-index: 1;"><h3>PROVEEDORES ACTIVOS</h3></div>
          <table class="table-wrapper" >
           <thead>
            <tr>
              <th style="color: black">Nombre</th>
              <th style="color: black">NIT</th>
              <!-- <th style="color: black">Tipo de mercadería</th> -->
              <th style="color: black">Teléfono</th>
              <th style="color: black">Dirección</th>
            </tr>
          </thead>
          <tbody>
            @foreach($proveedor as $prov) 
            <tr>
             <td>{{$prov->nombre_Prov}}</td>
             <td>{{$prov->NIT_Prov}}</td>
             <?php
             $telefonoP = SICOVIMA\proveedor::numeroTelefono($prov->id);
             ?>
             <td>{{$telefonoP}}</td>
             <?php  
             $mm = $prov->id_Municipio;
             $mmm = SICOVIMA\municipio::find($mm);
             $dpt = $mmm->id_Departamento;
             $dp = SICOVIMA\departamento::find($dpt);   
             ?>
             <td>{{$prov->direccion_Prov}}, {{$mmm->nombre_Muni}}, {{$dp->nombre_Depa}}</td>
           </tr>
           @endforeach
         </tbody>
       </table>
       <footer>
        <table>

          <tr>
            <td>
              <p class="izq">
                Comercial Santa Clarita S.A de C.V
              </p>
            </td>
            <td>
              <p class="page">
                Página
              </p>
            </td>
          </tr>
        </table>
      </footer>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</div>
</body>
</html>
