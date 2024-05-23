<!DOCTYPE html>
<html lang="esp">
    
    <head>
        <!-- comlink rel="Stylesheet" type="text/css" href="estilos.css">-->
        <title> NewspaperBSAS</title>
        <link rel="icon" href="images/Bandera" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0"> 
    </head>
    <style>
        .titleEnc{
            color:#0000cc;
            font-size:49px;
            font-weight: bold;
            background-color: whitesmoke;
        }
        .fecha{
            text-align: right;
            font-weight: bold;
            font-size: 35px;
           
        }
        .copete{
            color:#3366ff;
            font-size:30px;
            text-align: left;
            background-color: whitesmoke;
            
        }
        body{
            background-image: url(green.jpg);
        }
        .puertas{
            
        }
        .flecha{
            width: 0;
            height: 0;
            border-left: 40px solid transparent;
            border-right: 40px solid transparent;
            border-bottom: 80px solid yellow;
            text-align: center;
            
        }
        #cop{
            color:blue;
            align-content: center;
            
        }
        #f2{
            color:green;
            align-content: center;
        }
        .cuerpoNoticia{
             color:black;
            font-size:29px;
            font-weight: bold;
            background-color:whitesmoke;
            text-align: left;
        }
        .nombres{
            color: black;
            font-size:40px;
            font-weight: bold;
            font-family:Arial, sans-serif
        }
        .puertas{
            width: 1000px;
            height: 500px;
            border-bottom-color: black;
            border-style: solid;
            border-width:5px
                
        }
        .notita{
            background-color:cornsilk;
        }
        .pieImagen{
            color:#666666;
            font-weight: bold;
            font-size:30px;
            
        }
        figcaption{
            color:#666666;
            font-weight: bold;
            font-size:30px;
        }
        table{
            text-align: left;
            float: left;
            width: 500px;
            height: 100px;
            background-color: #ffff33;
            
        }
        h3{
            float:right;
            color:blue;
            font-family: Georgia, serif;
        }
        h1{
            text-align: right;
            float:right;
            color:blue;
            font-family: Georgia, serif;
        }
        .firmaFran{
            text-align: left;
            color:blue;
            font-family: Georgia, serif;
        }
    </style>
    
    <body>
        
    <center> <img src="images/LogoRed" type="image/png" style="width:300px"></center>
    <header><br></header>    
    <div><p class="fecha"><u>April 30, 2024</u></p></div>
    <br>
    <center><header class="titleEnc">Some of the most popular restaurants in Don Torcuato</header></center>
        <center><p class="notita" id="notaTituloPrincipal"></p></center>
        
        <center><p class="copete">The town of Don Torcuato, located in the Municipality of Tigre, has several old restaurants with exquisite dishes. 
                The following lists show some of the most popular ones.</p></center>
            <center><p class="notita" id="cap"></p>
        <br>
        <center><p class="nombres" id="nombre1">Caferatta</p></center>
            <center><p class="notita" id="titulo1"></p></center>
            <center><figure><img class="puertas" src="images/cafferata" type="image/jpg"><figcaption id="pieCafe">Pie de la imagen: Una breve descripción o comentario sobre la imagen.</figcaption></figure></center>
        
        <center><p class="notita" id="ejemplo">hola que tal</p></center>        
        <br><br>
        
        <br><br>
        <p class="cuerpoNoticia" id="cuerpo1"></p>
        <center><p class="notita" id="descripcion"></p>
         <table border="1">
        <tr>
            <th>Horaries</th>
            <td>8-24hs</td>
        </tr>
        <tr>
            <th>Vegan food</th>
            <td>Yes</td>
        </tr>
        <tr>
            <th>Days of week</th>
            <td>Monday to Sunday</td>
        </tr>
            </table>
            <br><br>

            <br><br><br>
        <center><p class="nombres" id="nombre2">El Patio</p></center>
            <center><p class="notita" id="titulo2"></p>
        <center><figure><img class="puertas" src="images/patio" type="image/jpg"><figcaption id="piePatio">Pie de la imagen: Una breve descripción o comentario sobre la imagen.</figcaption></figure></center>
            <center><p class="notita" id="pie2"></p></center>
        <p class="cuerpoNoticia" id="cuerpo2"></p>
            <center><p class="notita" id="descripcion2"></p></center>
                
            <table border="1">
        <tr>
            <th>Horaries</th>
            <td>11-17hs^20-24hs</td>
        </tr>
        <tr>
            <th>Vegan food</th>
            <td>Yes</td>
        </tr>
        <tr>
            <th>Days of week</th>
            <td>Monday to Sunday</td>
        </tr>
            </table>
            <br><br>

            <br><br><br><br>
        <center><p class="nombres" id="nombre3">Hamburgueseria El Cruce</p></center>
            <center><p class="notita" id="titulo3"></p></center>
       <center><figure><img class="puertas" src="images/cruce" type="image/jpg"><figcaption id="pieCruce"></figcaption></figure></center>
        <center><p class="pieImagen" id="pie3"></p></center>
            <center><p class="notita" id="epigraph3"></p><center>
        <center><p class="cuerpoNoticia" id="cuerpo3"></p></center>
            <center><p class="notita" id="descripcion3"></p></center>
                     <table border="1">
        <tr>
            <th>Horaries</th>
            <td>11-24hs</td>
        </tr>
        <tr>
            <th>Vegan food</th>
            <td>No</td>
        </tr>
        <tr>
            <th>Days of week</th>
            <td>Monday to Sunday</td>
        </tr>
            </table>
            <br><br>

            <br><br><br><br>
            <h3>"Todos los elementos y efectos pueden ser programados de forma dinamica a traves del framework JQuery"</h3>
            <br><br>
            <div class="firmaFran"><h1>Francisco Chiressi</h1></div>
        
        

        <script src="CodigoFuenteJQuery-3.7.1.min.js"></script>
        <!--<script>
            $("#f1").click(function(){
                $("#cop").html("copete");
            });
        </script> -->
        <script>
            $("#pieCafe").html("Founded in 1965, it is located on the corner of Angel Alvear avenue and Maria street.");
        </script>
        <script>
            $("#cuerpo1").html("In this place there are a lot of rugby's decoration especial with the Hindu Club culture. Also Caferatta has great rooms to eat include the outdoor space.\n\
                 In terms of food, 'La especialidad de la casa' are the asado and the grilled pizza.");
        </script>
        <script>
            $("#piePatio").html("view from the avenue Angel Alvear");
            $("#cuerpo2").html("formerly located in the neighborhood of Ingeniero John Coghlan, this one has a family style. Some of the tables are in the sidewalks. A lot of vegetables in the dishes");
            </script>
     <!--   <script>
            $("#caferatta").onclick(function(){
                ("#ejemplo").hide(990000000);
            })
         </script>  -->
            <script>
    $("#ejemplo").html("first epigraph ↑");
    $(document).ready(function(){
        $("#ejemplo").hide();
        $("#pieCafe").click(function(){
            $("#ejemplo").show(); // Aquí estableces la duración de la animación en milisegundos (1000ms = 1 segundo)
        });
    });
</script>
<script>
    $("#notaTituloPrincipal").html("This one is the principal title ↑");
    $(document).ready(function(){
    $("#notaTituloPrincipal").hide();
    $(".titleEnc").click(function(){
    $("#notaTituloPrincipal").show();
    });
    });
</script>  
<script>
    $("#cap").html("This one is the news cap ↑ ");
    $(document).ready(function(){
    $("#cap").hide();
    $(".copete").click(function(){
    $("#cap").show();
    });
    });
</script>
<script>
    $("#titulo1").html("first title ↑");
    $(document).ready(function(){
    $("#titulo1").hide();
    $("#nombre1").click(function(){
    $("#titulo1").show();
    });
    });
</script>
<script>
    $("#descripcion").html("description of it ↑");
    $(document).ready(function(){
    $("#descripcion").hide();
    $("#cuerpo1").click(function(){
    $("#descripcion").show();
    });
    });
</script>
<script>
    $("#titulo2").html("the second one ↑");
    $(document).ready(function(){
    $("#titulo2").hide();
    $("#nombre2").click(function(){
    $("#titulo2").show();
    });
    });
</script>
<script>
    $("#pie2").html("the second epigraph ↑");
    $(document).ready(function(){
    $("#pie2").hide();
    $("#piePatio").click(function(){
    $("#pie2").show();
    });
    });
</script>
<script>
    $("#descripcion2").html("the second description ↑");
    $(document).ready(function(){
    $("#descripcion2").hide();
    $("#cuerpo2").click(function(){
    $("#descripcion2").show();
    });
    });
</script>
<script>
    $("#titulo3").html("the third one ↑");
    $(document).ready(function(){
    $("#titulo3").hide();
    $("#nombre3").click(function(){
    $("#titulo3").show();
    });
    });
</script>   
<script>
    $("#pieCruce").html("in front of the hamburger restaurant on avenue Boulogne Surmer");
    $("#epigraph3").html("third epigraph ↑");
    $(document).ready(function(){
    $("#epigraph3").hide();
    $("#pieCruce").click(function(){
    $("#epigraph3").show();
    });
    });
</script>
<script>    
    $("#cuerpo3").html("So popular for the reunions to watch futbol games. El Cruce Has Bigs hamburgues with veggetables");
    $("#descripcion3").html("about the final element ↑");
    $(document).ready(function(){
    $("#descripcion3").hide();
    $("#cuerpo3").click(function(){
    $("#descripcion3").show();
    });
    });
</script>
</body>
