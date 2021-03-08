<div id="myDiv">

    </div>
<script>
function creaJson(json){
    var parsiar=JSON.parse(json);
    var arr=[];
    for(var v in parsiar){
        arr.push(parsiar[v])

    }
    return arr
}
num_seguidores=creaJson('<?php echo $datosX ?>')
num_alcaldes=creaJson('<?php echo $datosY ?>') 
var data = [
  {
    x: ['numero de alcaldes'],
    y: [parseInt(num_alcaldes)],
    type: 'bar'
  }
];

Plotly.newPlot('myDiv', data);
</script>
