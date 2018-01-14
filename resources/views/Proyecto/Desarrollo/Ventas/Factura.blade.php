<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Factura</title>
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
        <div style="position: absolute;left: 60px; top: 80px; z-index: 1;"><h4>Grecia Melina Hernandez Castillo</h4></div>
        <div style="position: absolute;left: 60px; top: 100px; z-index: 1;"><h4>San Nicolas Lempa, Tecoluca, San Vicente</h4></div>
        <div style="position: absolute;left: 60px; top: 120px; z-index: 1;"><h4>260797-1234-981-1</h4></div>
        <div style="position: absolute;left: 600px; top: 85px; z-index: 1;"><h4>08-09-2017</h4></div>
        <div style="position: absolute;left: 690px; top: 120px; z-index: 1;"><h4>x</h4></div>
        
        <div style="position: absolute;left: 35px; top: 168px; z-index: 1;"><h4>5</h4></div>
        <div style="position: absolute;left: 80px; top: 168px; z-index: 1;"><h4>Pantalon Jeans</h4></div>
        <div style="position: absolute;left: 450px; top: 168px; z-index: 1;"><h4>$ 100.99</h4></div>
        <div style="position: absolute;left: 650px; top: 168px; z-index: 1;"><h4>$ 504.95</h4></div>
       
        <div style="position: absolute;left: 650px; top: 325px; z-index: 1;"><h4>$ 504.95</h4></div>
        <div style="position: absolute;left: 650px; top: 349px; z-index: 1;"><h4>$ 504.95</h4></div>
        <div style="position: absolute;left: 650px; top: 374px; z-index: 1;"><h4>$ 504.95</h4></div>
        <div style="position: absolute;left: 650px; top: 399px; z-index: 1;"><h4>$ 504.95</h4></div>
        </div>
         </div> 
</body>
</html>
