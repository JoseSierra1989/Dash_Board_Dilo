<?php require 'PHP/consulta_alarmas.php'; ?> 


<script>
    var randomScalingFactor = function(){ return Math.round(Math.random()*1000)};

;  
    var labels = [];
    var labels1 = [];
    var datoran = [];
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

    
             
var ctx = document.getElementById('arbol_alarmas').getContext('2d')
                    var chart = new Chart(ctx, {
                    // El tipo de grafico a crear
                    type: 'bar',

                     // El tipo de dato para el set de datos
                    data: {     
                        labels: labels,
                        datasets: [{    
                            label: "Cantidad de Tickets",
                            backgroundColor: 'rgb(255, 87, 51,  0.5)',
                            borderColor: 'rgb(247, 0, 0, 1)',
                            data:  dato,
                            borderWidth: 1
                        }]
                    },

                        // Opciones de configuracion
                    options: {
                             
                    title: {
                        display: true,
                        text: 'Arbol de Alarmas Contidad de tikets por Semana'
                    }
                    }
                    });
var ctx = document.getElementById('arbol_alarmas_rango_cantidad').getContext('2d')
                   
                    var chart = new Chart(ctx, {
                    // El tipo de grafico a crear
                    type: 'bar',

                     // El tipo de dato para el set de datos
                    data: {
                        labels: labels1,   
                        datasets: [{
                            label: "Rangos",
                           backgroundColor: 'rgb(255, 87, 51,  0.5)',
                            borderColor: 'rgb(247, 0, 0, 1)',
                            data: datoran,
                            borderWidth: 1
                        }]
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
                                 title: 
                                 {
                                      display: true,
                                      text: 'Cantidad total de TK por rango '
                                }
                        }
                    });
var ctx = document.getElementById('arbol_alarmas_rango').getContext('2d')
                   
                    var chart = new Chart(ctx, {
                    // El tipo de grafico a crear
                    type: 'bar',

                     // El tipo de dato para el set de datos
                    data: {
                        labels: labels,   
                        datasets: [{
                            label: "Rango 0 a 30 Minutos",
                            backgroundColor: 'rgb( 132, 245, 54, 0.5)',
                            borderColor: 'rgb(6, 233, 40 , 1)',
                            data: dato1,
                            borderWidth: 1
                        },
                        {
                            label: "Rango 30 a 60 Minutos",
                            backgroundColor: 'rgb( 70, 94, 243 , 0.5)',
                            borderColor: 'rgb(13, 35, 171, 1)',
                            data: dato2,
                            borderWidth: 1
                        },
                        {
                            label: "Rango 60 a 120 Minutos",
                            backgroundColor: 'rgb(255, 238, 116, 0.5)',
                            borderColor: 'rgb(255, 195, 0, 1)',
                            data: dato3,
                            borderWidth: 1
                        },
                        {
                            label: "Rango Mayor a 120 Minutos",
                            backgroundColor: 'rgb(255, 87, 51,  0.5)',
                            borderColor: 'rgb(247, 0, 0, 1)',
                            data: dato4,
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
                        },
                        {
                            label: "Rango 30 a 60 Minutos",
                            backgroundColor: 'rgb( 70, 94, 243 , 0.5)',
                            borderColor: 'rgb(13, 35, 171, 1)',
                            data: dato2,
                            borderWidth: 1
                        },
                        {
                            label: "Rango 60 a 120 Minutos",
                            backgroundColor: 'rgb(245, 250, 88, 0.5)',
                            borderColor: 'rgb(245, 190, 54, 1)',
                            data: dato3,
                            borderWidth: 1
                        },
                        {
                            label: "Rango Mayor a 120 Minutos",
                            backgroundColor: 'rgb(255, 87, 51,  0.5)',
                            borderColor: 'rgb(247, 0, 0, 1)',
                            data: dato4,
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

var ctx = document.getElementById('arbol_alarmas2').getContext('2d')
                    var chart = new Chart(ctx, {
                    // El tipo de grafico a crear
                    type: 'pie',

                     // El tipo de dato para el set de datos
                    data: {
                        labels: labels,
                        datasets: [{
                            label: "CANTIDAD DE TICKETS",
                            backgroundColor: 'rgb(255, 87, 51, 0.5)',
                            borderColor: 'rgb(247, 0, 0, 1)',
                            data:  dato,
                            borderWidth: 1
                        }]
                    },

                        // Opciones de configuracion
                        options: {elements: {
                        rectangle: {
                            borderWidth: 2,
                        }
                    },
                    responsive: true,
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Chart.js Horizontal Bar Chart'
                    }}
                    });
var ctx = document.getElementById('arbol_alarmas_rango').getContext('2d')
                   
                    var chart = new Chart(ctx, {
                    // El tipo de grafico a crear
                    type: 'bar',

                     // El tipo de dato para el set de datos
                    data: {
                        labels: labels,   
                        datasets: [{
                            label: "Rango tiempos",
                            backgroundColor: 'rgb(71, 233, 6, 0.5)',
                            borderColor: 'rgb(6, 233, 40, 1)',
                            data:  datos_rango,
                            borderWidth: 1
                        },{
                            label: "Rango tiempos2",
                            backgroundColor: 'rgb(255, 87, 51, 0.5)',
                            borderColor: 'rgb(255, 99, 132, 1)',
                            data:  dato,
                            borderWidth: 1
                        },
                        {
                            label: "Rango tiempos3",
                            backgroundColor: 'rgb(71, 233, 6, 0.5)',
                            borderColor: 'rgb(255, 99, 132, 1)',
                            data:  dato,
                            borderWidth: 1
                        },
                        {
                            label: "Rango tiempos4",
                            backgroundColor: 'rgb(71, 233, 6, 0.5)',
                            borderColor: 'rgb(255, 99, 132, 1)',
                            data:  datos_rango,
                            borderWidth: 1
                        }]

                    },

                        // Opciones de configuracion
                        options: {
                            title: {
                        display: true,
                        text: 'Arbol de Alarmas Contidad de tikets por Semana'
                    }
                        }
                    });


 </script>
