<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
     <body style="background-color: #666666">
         <div class ="container" id="primario" >
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color: white">Registrate</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                
                 </div>
                <div class="col-4">
                    <br><br>
                    
                    <input id ="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                    <br>
                    <input id ="cajaPassword" class="form-control" type="password" placeholder="Contraseña">
                    <br>
                    <button id="botonRegistro" class="btn btn-primary btn-block">Crea cuenta</button>
                    <br>
                    
       
                </div>
                <div class="col-4"></div>
               
            </div>
        </div>
    </body>
     <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script>
        //document ready se ejecuta cuando la página se ha cargado correctamente
       $(document).ready(function(){
           //$('#cajaNombre').hide(); 
       });
       
       
       
        $('#botonRegistro').click(function(){
            //leo el contenido de las cajas de nombre y contraseña
            var _cajaNombre = $('#cajaNombre').val();
            var _cajaPassword = $('#cajaPassword').val();
            
            
            $('#primario').load("funcionesRegristo.php",{
                cajaNombre : _cajaNombre,
                cajaPassword : _cajaPassword
            });
        });
        
    </script>
</html>