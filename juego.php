<?php
session_start();
//capturo los valores de los parámetros que me han sido pasados
//desde app.php
include ('misFunciones.php');
$vidas = $_POST['vidas'];
$correctas = $_POST['correctas'];
$tema = $_POST['tema'];

$mysqli = conectaBBDD();
$resultadoQuery = $mysqli -> query("SELECT * FROM preguntas WHERE tema ='$tema' ");
$numPreguntas = $resultadoQuery -> num_rows;
 
//declaro un array en php para guardar el resultado de la query
$listaPreguntas = array();

//cargo todas las filas del resultado de la query en el array
    for ($i = 0; $i < $numPreguntas; $i++){
        $r = $resultadoQuery -> fetch_array(); //leo una fila del resultado de la query
        $listaPreguntas[$i][0] = $r['numero'];
        $listaPreguntas[$i][1] = $r['enunciado']; 
        $listaPreguntas[$i][2] = $r['r1']; 
        $listaPreguntas[$i][3] = $r['r2']; 
        $listaPreguntas[$i][4] = $r['r3']; 
        $listaPreguntas[$i][5] = $r['r4']; 
        $listaPreguntas[$i][6] = $r['correcta'];
    }
    
 $preguntaActual = rand(0, $numPreguntas-1);

?>
 
   <p><a  class="btn btn-block btn-warning" onclick="volver();">Volver al Menú</a></p>
   
    <p><a id="vidas"  class="btn btn-block btn-warning">Vidas: <?php echo $vidas;?></a></p>
    
    <p><a id="sigue1" class="btn btn-block btn-primary" ><?php echo $tema;?></a></p>
     
    <p><a id="enunciado" class="btn btn-block btn-primary " ></a></p>
    
    <p><a id="r1" style="color:white;" class="btn btn-block btn-secondary" onclick="comprobar(1)"></a></p>
    <p><a id="r2" style="color:white;" class="btn btn-block btn-secondary" onclick="comprobar(2)" ></a></p>
    <p><a id="r3" style="color:white;" class="btn btn-block btn-secondary " onclick="comprobar(3)" ></a></p>
    <p><a id="r4" style="color:white;" class="btn btn-block btn-secondary " onclick="comprobar(4)" ></a></p>
    
               
                   
                     
                    
                
                 
                
            

<script>
    	
function programarAviso(){
	
    setTimeout(function(){sigue()},3000); // 3000ms = 3s
	
}
	
  function volver(){
        $('#principal').load('app.php');
    }
	

	
 
	

    
    //cargo el array php de preguntas en una variable javascript
    var listaPreguntas = <?php echo json_encode($listaPreguntas); ?>;
    //calculo un numero aleatorio
    var numeroPregunta =  Math.floor(Math.random() * listaPreguntas.length) ;
    //dibujo los textos en los botones correspondientes
    sigue();
    
    
    function comprobar(numeroRespuesta){
        var num = listaPreguntas[numeroPregunta][6];
        console.log(num)
        var segundo=0;
       
        if(num == numeroRespuesta){
            
            
            
            $('#r'+numeroRespuesta).removeClass("btn-secondary").addClass("btn-success");
            $('#r1').addClass("disabled");
            $('#r2').addClass("disabled");
            $('#r3').addClass("disabled");
            $('#r4').addClass("disabled");
            
            
            programarAviso();
          
              
          
            
            
            
        }else{
            _vidas--;
            $('#r'+numeroRespuesta).removeClass("btn-secondary").addClass("btn-danger");
            $('#r'+num).removeClass("btn-secondary").addClass("btn-success");
            $('#r1').addClass("disabled");
            $('#r2').addClass("disabled");
            $('#r3').addClass("disabled");
            $('#r4').addClass("disabled");
           
            if(_vidas==-1){
                volver();
            }
            programarAviso();
           
           
             $('#vidas').text("Vidas: "+ _vidas);
        }
   
    }
    
   
    
    
    
   
 function sigue(){
     numeroPregunta =  Math.floor(Math.random() * listaPreguntas.length) ;
     
     $('#r1').removeClass("btn-success").addClass("btn-secondary").removeClass("disabled");
     $('#r2').removeClass("btn-success").addClass("btn-secondary").removeClass("disabled");
     $('#r3').removeClass("btn-success").addClass("btn-secondary").removeClass("disabled");
     $('#r4').removeClass("btn-success").addClass("btn-secondary").removeClass("disabled");
     
     
     $('#r1').removeClass("btn-danger").addClass("btn-secondary").removeClass("disabled");
     $('#r2').removeClass("btn-danger").addClass("btn-secondary").removeClass("disabled");
     $('#r3').removeClass("btn-danger").addClass("btn-secondary").removeClass("disabled");
     $('#r4').removeClass("btn-danger").addClass("btn-secondary").removeClass("disabled");
     
    $('#enunciado').text(listaPreguntas[numeroPregunta][1]);
    $('#r1').text(listaPreguntas[numeroPregunta][2]);
    $('#r2').text(listaPreguntas[numeroPregunta][3]);
    $('#r3').text(listaPreguntas[numeroPregunta][4]);
    $('#r4').text(listaPreguntas[numeroPregunta][5]);
 }
 
    
</script>    