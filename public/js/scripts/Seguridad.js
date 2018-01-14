
$(document).on('ready',function(){


  $('#TablaSeguridad').DataTable({
    "order":[[2,"asc"]],
    "language":{
    "lengthMenu": "Mostrar _MENU_ registro por pagina",
    "info": "Mostrando pagina _PAGE_ de _PAGE_",
      "infoEmpty": "No hay registros disponibles",
      "infoFiltered": "(filtrada de _MAX_ registros)",
      "loadingRecords": "Cargando...",
      "processing":     "Procesando...",
      "search": "Buscar:",
      "zeroRecords":		"No se encontraron registro coincidentes",

      "paginate": {
        "next":		"Siguiente",
        "previous":	"Anterior"
      },
    }
  });
  // $('#tablaDetalleMateriaPrima').DataTable({
  //   "order":[[2,"asc"]],
  //   "language":{
  //   "lengthMenu": "Mostrar _MENU_ registro por pagina",
  //   "info": "Mostrando pagina _PAGE_ de _PAGE_",
  //     // "infoEmpty": "No hay registros disponibles",
  //     "infoFiltered": "(filtrada de _MAX_ registros)",
  //     "loadingRecords": "Cargando...",
  //     "processing":     "Procesando...",
  //     "search": "Buscar:",
  //     "zeroRecords":		"No se encontraron registro coincidentes",
  //
  //     "paginate": {
  //       "next":		"Siguiente",
  //       "previous":	"Anterior"
  //     },
  //   }
  // });
});
