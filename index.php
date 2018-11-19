<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color:#ccffff " >
        
        <div class="container" id="principal">
            <br>
            <div class="row" > 
                 <div class="col-12" >  
                 <h2 class="text-center" style="color:black;"><img src="imagenes/LOGO (1).png" class="img-fluid" alt="Responsive image"> Trival Preparatorio EVAU</h2>
                 
                </div> 
             </div>
            
            
           <br> 
             <div class="row"style="background-color:#ffffff"> 
                 <button class="col-2" id="botonRegristo" class="btn btn-primary btn-block"><img src="imagenes/im5 (1).png" class="img-fluid" alt="Responsive image"></button>
                     <div  class="col-8" ><h5 class="text-center" style="color:black;"> Bienvenido al test EVAU2018</h5></div>
                     <button class="col-2" id="botonLogin" class="btn btn-primary btn-block"><img src="imagenes/incioSesion.png" class="img-fluid" alt="Responsive image"></button>
                  
                      
                     
                     <div class="col-2"></div>
                   
                     <div id="menu" class="col-8" style="background-color:#ffffff" >
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
    </body>
            
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    
    <script>
        //document ready se ejecuta cuando la página se ha cargado correctamente
       $(document).ready(function(){
           //$('#cajaNombre').hide(); 
       });
       
       $.validate({
           lang: 'es'
       })
       
        $('#botonLogin').click(function(){
           
            
            
            $('#principal').load("paginaLogin.php",{
                
            });
        });
          $('#botonRegristo').click(function(){
           
            
            
            $('#principal').load("regristo.php",{
                
            });
        });
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
        
    </script>