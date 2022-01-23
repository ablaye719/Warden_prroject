<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EspaceMembre.css" media="screen" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B3E5FC;">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Warden Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Statistiques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pronostiques</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Langues
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>
        <form class="d-flex">
        <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </div>
</nav>


<body>
    <section class="sec1">
        <div class="content">
            <h1>Information sur le compte</h1>
            <a id="Information" href="Information.php">Information</a>
            <a id="Modifier" href="#"><span>Modifier</span></a>

        </div>

        

    </section>
       
    <section class="sec2">

        <div class="quizz">
            <button class="button1" role="button">  <a id='quizz' href="quizz.html"><span class="text">Quizz</span></a></button> 
            <p>Ce quizz a pour objectif de vous sensibilisé à l'écologie a travers diverses questions.</p> 
        </div>


        <div>              
            
            <button class="button1" role="button"><span class="text">Déconnection</span></button>
        </div>

        
    </section>
    


    <?php include_once('footer.php'); ?>

    
    
</body>



</html>