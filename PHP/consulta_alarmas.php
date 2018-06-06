<?php
    include('coneccion.php');
    
    $consulta_alarmas = "SELECT  semana,  count(ticket_remedy) as tickets from public.arbol_alarmas
        				GROUP BY semana  order by semana";
    $resultado = pg_query($conn,$consulta_alarmas);
    $datos = pg_fetch_all($resultado);


// print_r($datos);

// echo "<br/>";
// echo "<hr>";


    $consulta_rango1 = "SELECT rango,  count(ticket_remedy) as rango1 from public.arbol_alarmas
						where rango = 'Rango de 0 a 30 Minutos'
						GROUP BY rango, semana  order by semana";
    $resultado_rango1 = pg_query($conn,$consulta_rango1);
    $datos_rango_1 = pg_fetch_all($resultado_rango1);

// print_r($datos_rango1);

// echo "<br/>";
// echo "<hr>";

  	 $consulta_rango2 = "SELECT rango,  count(ticket_remedy) as rango2 from public.arbol_alarmas
						where rango = 'Rango de 30 a 60 Minutos'
						GROUP BY rango, semana  order by semana";
    $resultado_rango2 = pg_query($conn,$consulta_rango2);
    $datos_rango2 = pg_fetch_all($resultado_rango2);

// print_r($datos_rango2);

// echo "<br/>";
// echo "<hr>";

    $consulta_rango3 = "SELECT rango,  count(ticket_remedy) as rango3 from public.arbol_alarmas
						where rango = 'Rango de 60 a 120 Minutos'
						GROUP BY rango, semana  order by semana";
    $resultado_rango3 = pg_query($conn,$consulta_rango3);
    $datos_rango3 = pg_fetch_all($resultado_rango3);


//  print_r($datos_rango3);

// echo "<br/>";
// echo "<hr>";

    $consulta_rango4 = "SELECT	 rango,  count(ticket_remedy) as rango4 from public.arbol_alarmas
						where rango = 'Rango Mayor a 120  MInutos'
						GROUP BY rango, semana  order by semana";
    $resultado_rango4 = pg_query($conn,$consulta_rango4);
    $datos_rango4 = pg_fetch_all($resultado_rango4);

// print_r($datos_rango4);

// echo "<br/>";
// echo "<hr>";

    $consulta_rango = "SELECT rango,  count(ticket_remedy) as rangoran  from public.arbol_alarmas
						GROUP BY rango  order by rango";
    $resultado_rangoran = pg_query($conn,$consulta_rango);
    $datos_rangoran = pg_fetch_all($resultado_rangoran);

 //print_r($datos_rangoran);

 //echo "<br/>";
 // echo "<hr>";

    $consulta_rango_semana ="SELECT rango, semana,  count(ticket_remedy) as ticketsemana  from public.arbol_alarmas
							GROUP BY rango, semana order by semana";
	$resultado_ranse = pg_query($conn,$consulta_rango_semana);
	$datos_ransemana = pg_fetch_all($resultado_ranse);

 //print_r($datos_ransemana);

  // echo "<br/>";
  // echo "<hr>";
?>		


