<div class="container-fluid">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Numero Seguidores</th>
                <th>Nombre Lider</th>
                <th>Numero De alcaldes</th>
                <th>Numero Concejales</th>
                <th>Lema</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php if($datos==$listado_partidos->fetch_object()): echo 'hola'  ?>
                    <?php while($datos=$listado_partidos->fetch_object()): ?>
                <td><?=$datos->nombre?></td>
                <td><?=$datos->num_seguidores?></td>
                <td><?=$datos->nombre_lider?></td>
                <td><?=$datos->num_alcaldes?></td>
                <td><?=$datos->num_concejales?></td>
                <td><?=$datos->lema?></td>
                <td>
                        <button type="button" class="btn btn-warning">
                            <a href="?action=actualizar&id=<?=$datos->idpartido?>
                                        &nombre=<?=$datos->nombre?>">Actualizar</a>
                        </button>

                        <button type="button" class="btn btn-danger">
                                <a href="?action=eliminar&id=<?=$datos->idpartido?>">Eliminar</a>
                                </button>
                                <input type="button" class='btn btn-warning' onclick="tableToExcel('example', 'W3C Example Table')" value="Exportar a excel">
                                
                                <button type="button" class="btn btn-danger">
                                <a href="?action=charts">charts</a>
                                </button>
                </td>
            </tr>         
            <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<script>
 const tableToExcel = (
     function() {
    var uri = 'data:application/vnd.ms-excel;base64,'
      , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
      , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
      , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
    return function(table, name) {
      if (!table.nodeType) table = document.getElementById(table)
      var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
      window.location.href = uri + base64(format(template, ctx))
    }
  })()
</script>
