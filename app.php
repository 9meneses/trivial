
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color:#ccffff ">
        
        <div class="container" id="principal">
            <br>
             <div class="row" > 
                 <div class="col-12">  
                 <h2 class="text-center" style="color:black;"><img src="imagenes/LOGO (1).png" class="img-fluid" alt="Responsive image"> Trival Preparatorio EVAU</h2>
                 
                </div> 
             </div>
            
            
           <br> 
             <div class="row" style="background-color:#ffffff"> 
                    <div class="col-2"></div>
                    <div  class="col-8"><h5 class="text-center" style="color:black;"> Bienvenido al test EVAU2018</h5></div>
       
                     <button class="col-2" id="botonLogin" class="btn btn-primary btn-block"><?php echo $_SESSION['nombreUsuario']?></button>
                  
                      
                     
                     <div class="col-2"></div>
                   
                     <div id ="menu" class="col-8" style="background-color:#ffffff" >
                          <br> 
                           <br> 
                      
      <p><a id="sigue1" class="btn btn-block btn-warning" onclick="sigue('1')">HISTORIA</a></p>
    <p><a id="sigue2" class="btn btn-block btn-danger" onclick="sigue('2')">ECONOMIA</a></p>
    <p><a id="sigue3" class="btn btn-block btn-secondary" onclick="sigue('3')">FILOSOFIA</a></p>
    <p><a id="sigue4" class="btn btn-block btn-primary" onclick="sigue('4')">LENGUA Y LITERATURA</a></p>
    <p><a id="sigue5" class="btn btn-block btn-success" onclick="sigue('5')">INGLÉS</a></p>
    
                     </div>
                     <div class="col-2"></div>
                     
                    
                
                 
                
             </div>
            
            
            
        </div>
        <script>
            
           

    var _vidas = 3;
    function sigue(_tema){
        switch (_tema){
            case '1': $("#menu").load("juego.php",{vidas:_vidas, correctas: 0, tema:"Historia"}); break;
            case '2': $("#menu").load("juego.php",{vidas:_vidas, correctas: 0, tema:"Economia"}); break;
            case '3': $("#menu").load("juego.php",{vidas:_vidas, correctas: 0, tema:"Filosofia"}); break;
            case '4': $("#menu").load("juego.php",{vidas:_vidas, correctas: 0, tema:"Lengua"}); break;
            case '5': $("#menu").load("juego.php",{vidas:_vidas, correctas: 0, tema:"Ingles"}); break;
        }
    }
//    function muestraModalPrueba(){
//        $('#modalPrueba').modal('show');
//    }

</script>
    </body>
    
<!--    <div id="modalPrueba" class="modal1" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal de prueba</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>holaca</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Salvar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>-->
<?php
