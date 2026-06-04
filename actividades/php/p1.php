<?php

const gravedad=32;
// $tiempo=0.0;, sin declararlo como arreglo 
$tablaTDV = [];
//__________________________________________________
// Cálculo de distancia
// _________________________________________________
function calcDistancia ($tiempo, $veli)
{
    $dist;
    //dist=veli*tiempo+1/2*gravedad*pow(tiempo,2);
    $dist=0.5*gravedad*($tiempo ** 2);
    return $dist;
}
//__________________________________________________
// Cálculo de velocidad
// _________________________________________________
function calcVelocidad ($tiempo, $veli)
{
$velf;
$velf=$veli+gravedad*$tiempo;
return $velf;
}
//__________________________________________________
//Crea tabla que contiene tiempo, distanci y velocidad final
//_________________________________________________

function generarTabla()
{
$tiempo=0;

for ($t=1; $t<=10; $t++)
{
global $tablaTDV;
$tiempo=$tiempo+1.0;
$tablaTDV[$t-1][0]=$tiempo;
$tablaTDV[$t-1][1]=calcDistancia($tablaTDV[$t-1][0],0);
$tablaTDV[$t-1][2]=calcVelocidad($tablaTDV[$t-1][0],0);
}
return;

}

$col; $t=0;
generarTabla();
?>
<h1>Caída libre</h1>
<table>
    <style>
        table, th, td {
            border: 1px solid black;
            text-align: center;
            #exceso {color: red};
            #datos {text-align: left};
        }
    </style>
    <thead>
        <th>Tiempo (seg)</th>
        <th>Distancia (ft)</th>
        <th>Velocidad final (ft/s)</th>
    </thead>
    <tbody>
        <?php
            while ($t<10)
            {
                echo "<tr>";
                for ($col=0; $col<3; $col++)
                {
                    echo "<td>";
                    if ($col==2)
                        if ($tablaTDV[$t][2]>250)
                            echo '<span id="exceso">Exceso</span>';
                    else
                        echo $tablaTDV[$t][2];
                    else
                        echo $tablaTDV[$t][$col];

                    echo "</td>";
                }
                $t++;
                echo "</tr>";
            }
        ?>
        
    </tbody>
</table>