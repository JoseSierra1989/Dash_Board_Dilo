<?php require 'PHP/consulta_alarmas.php'; ?> 


<script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};
    var labels = [];
    var labels1 = [];
    var labels2 = [];
    var datoran = [];
    var datoransen = [];
    var dato = [];
    var dato1 = [];
    var dato2 = [];
    var dato3 = [];
    var dato4 = [];
 
   
    
   
     <?php foreach ($datos as $key => $value) { ?>
      labels.push('<?php echo $value['semana']; ?>')
      dato.push(<?php echo $value['tickets']; ?>) 
     <?php } ?>

     <?php foreach ($datos_rango_1 as $key => $value) { ?>
      dato1.push(<?php echo $value['rango1']; ?>) 
     <?php } ?>
   
     <?php foreach ($datos_rango2 as $key => $value) { ?>
      dato2.push(<?php echo $value['rango2']; ?>) 
     <?php } ?> 

     <?php foreach ($datos_rango3 as $key => $value) { ?>
      dato3.push(<?php echo $value['rango3']; ?>) 
     <?php } ?>
    

     <?php foreach ($datos_rango4 as $key => $value) { ?>
      dato4.push(<?php echo $value['rango4']; ?>) 
     <?php } ?> 

      <?php foreach ($datos_rangoran as $key => $value) { ?>
      labels1.push('<?php echo $value['rango']; ?>')
      datoran.push(<?php echo $value['rangoran']; ?>) 
     <?php } ?> 

     <?php foreach ($datos_ransemana as $key => $value) { ?>
      labels2.push('<?php echo $value['semana']; ?>')
      datoransen.push(<?php echo $value['ticketsemana']; ?>) 
     <?php } ?> 






var ctx = document.getElementById('arbol_alarmas_rango_dona').getContext('2d')
                   
                    var chart = new Chart(ctx, {
                    // El tipo de grafico a crear
                    type: 'pie',

                     // El tipo de dato para el set de datos
                    data: {
                        labels: labels,   
                        datasets: [{
                            label: "Rango 0 a 30 Minutos",
                            backgroundColor: 'rgb( 132, 245, 54, 0.5)',
                            borderColor: 'rgb(6, 233, 40 , 1)',
                            data: dato1,
                            borderWidth: 1
                        }
                        ]

                    },
                        // Opciones de configuracion
                        options: {
                                 elements: 
                                 {
                                         rectangle: 
                                         {
                                         borderWidth: 2,
                                         }
                                 },
                                 responsive: true,
                                            legend: {
                                            position: 'right',
                                 },
                                 title: 
                                 {
                                      display: true,
                                      text: 'Arbol de Alarmas Contidad de tikets por Semana'
                                }
                        }
                    });


 </script>
