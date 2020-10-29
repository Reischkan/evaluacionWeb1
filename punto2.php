<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

   <header>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ejercicios PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            </ul>
        </div>
    </nav>
    
   </header>
   <main>

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">
            
           <form action="punto2.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="peso" name="peso">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="altura" name="altura">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4" name="botonEnviar">IMC</button>
            </form>


            

            <?php 

        
                if(isset($_POST["botonEnviar"])){

                    $peso=$_POST["peso"];
                    $altura=$_POST["altura"];
                    $imc= $peso / ($altura*$altura);

                    if($imc<18.5){
                        

                        echo("Peso insuficiente");
                    }
                    elseif($imc>18.5 && $imc<=24.9){

                        echo("Normopeso");
                    }
                    elseif($imc>25 && $imc<=26.9){

                        echo("sobrepeso grado 1");
                    }
                    elseif($imc>27 && $imc<=29.9){

                        echo("Preobesidad");
                    }
                    elseif($imc>30 && $imc<=34.9){

                        echo("Obesidad 1");
                    }
                    elseif($imc>35 && $imc<=39.9){

                        echo("Obesidad 2");
                    }elseif($imc>40 && $imc<=49.9){

                        echo("Obesidad morbida");
                    }elseif($imc>50){

                        echo("Obesidad extrema");
                    }

                    
                    
                 


                }
            
            
            ?>


           </div>
       </div>
   </div>

  
   
   </main>
   <footer>
   
   </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>