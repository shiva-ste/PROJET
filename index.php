<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PROJET </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .container-fluid {
            margin: 0 ; 
            padding: 0 ;
            max-width: 100vw;
        }
        .container {
            max-width: 1080px; 
            min-height: 90vh;
        }
        nav{
            height : 5rem; 
        }
        .navbar-brand{
            font-size: 2rem; 
            color: white;
        }
        .navbar-nav{
            line-height: 2rem; 
            margin: 0 auto;
            font-size: 1.3rem; 
            color: white;
        }
        
        #footer{
            position: absolute; 
            width: 100%;
            left: 0;
            bottom: 0; 
            min-height : 2rem;
        }
    </style>

</head>
<body>

<div class="container-fluid">
    <div id="nav" class="row text-center">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
                <a class="navbar-brand" href="#">Projet </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Plan  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Do </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Check </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Act </a>
                    </li>
                    </ul>
                </div>
            </nav>  <!-- / fin de la navigation  -->
        </div> <!-- / fin de la colonne -->
    </div> <!-- / fin de la ligne id=nav --> 
</div> <!-- / fin du container-fluid -->

<div class="container bg-secondary">
    <div id="content" class="row text-center p-4">
        <div class="col-6 offset-3">

            <h2>Outil de gestion de projet</h2>
            <p>
            voici l'outil de gestion et de suivi de projet 
            </p>
        </div>
    </div> <!-- / fin de la ligne id=content --> 
</div> <!-- / fin du container  --> 
    
<div id="footer" class="container-fluid bg-secondary">
    <div class="row text-center">
        <div class="col">
            &copy;
        </div>
    </div> <!-- / fin de la ligne id=footer --> 
</div>

</body>
</html>
