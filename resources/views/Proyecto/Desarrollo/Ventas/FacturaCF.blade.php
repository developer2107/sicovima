<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Factura Credito Fiscal</title>
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
        color: #777777;
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
      <div class="box-header with-border">
        <?php  
          $v = SICOVIMA\venta::find($data);
          $cl = SICOVIMA\cliente::find($v->id_Cliente);
          
          $ju = SICOVIMA\clienteJuridico::where('id_Cliente',$cl->id)->get()->last();
          $iva = $v->total_Ven * 0.13;
          $mm = $cl->id_Municipio;
          $mmm = SICOVIMA\municipio::find($mm);
          $dpt = $mmm->id_Departamento;
          $dp = SICOVIMA\departamento::find($dpt);  

          $datoFecha = explode("-",(String)$v->fecha_Ven);
          $fechaOrdenada = $datoFecha[2]."/".$datoFecha[1]."/".$datoFecha[0]; 
        ?>
        
        <div style="position: absolute;left: 87px; top: 40px; z-index: 1;"><h4>{{$cl->nombre_Cli}}</h4></div>
        <div style="position: absolute;left: 87px; top: 60px; z-index: 1;"><h4>{{$cl->direccion_Cli}}</h4></div>
        <div style="position: absolute;left: 87px; top: 80px; z-index: 1;"><h4>{{$mmm->nombre_Muni}}</h4></div>
        <div style="position: absolute;left: 352px; top: 80px; z-index: 1;"><h4>{{$dp->nombre_Depa}}</h4></div>
        <div style="position: absolute;left: 600px; top: 47px; z-index: 1;"><h4>{{$fechaOrdenada}}</h4></div>
        <div style="position: absolute;left: 590px; top: 85px; z-index: 1;"><h4>{{$ju->NIT_CJ}}</h4></div>

        <?php
            $totall=0;
            $indicee=150;
            foreach ($v->detalleVenta as $key => $detallee):

        ?>
        <?php
            $produ=SICOVIMA\producto::find($detallee->id_Producto);
            $subtotall=($detallee->costoProd_DVen+$detallee->gananciaProd_DVen)*$detallee->cant_DVen;
        ?>



        <div style="position: absolute;left: 60px; top: {{$indicee}}px; z-index: 1;"><h4>{{$detallee->cant_DVen}}</h4></div>
        <div style="position: absolute;left: 107px; top: {{$indicee}}px; z-index: 1;"><h4>{{$produ->tipo_Prod." ".$produ->estilo_Prod." ".$produ->color_Prod}}</h4></div>
        <div style="position: absolute;left: 465px; top: {{$indicee}}px; z-index: 1;"><h4>$ {{$detallee->costoProd_DVen+$detallee->gananciaProd_DVen}}</h4></div>
        <div style="position: absolute;left: 650px; top: {{$indicee}}px; z-index: 1;"><h4>$ {{$subtotall}}</h4></div>
       <?php
          $totall=$totall+$subtotall;
          $indicee=$indicee+12;
          endforeach
      ?>
        <div style="position: absolute;left: 650px; top: 280px; z-index: 1;"><h4>{{$totall}}</h4></div>
        <div style="position: absolute;left: 650px; top: 307px; z-index: 1;"><h4>{{round($iva*100)/100}}</h4></div>
        <div style="position: absolute;left: 650px; top: 363px; z-index: 1;"><h4></h4></div>
        <div style="position: absolute;left: 650px; top: 345px; z-index: 1;"><h4>{{round(($totall+$iva)*100)/100}}</h4></div>
        <div style="position: absolute;left: 650px; top: 345px; z-index: 1;"><h4></h4></div>
        <div style="position: absolute;left: 650px; top: 375px; z-index: 1;"><h4>{{round(($totall+$iva)*100)/100}}</h4></div>
      </div>
    </div> 
  </body>
</html>
