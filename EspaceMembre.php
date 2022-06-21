<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="EspaceMembre.css" media="screen" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
    <?php include_once('header.php'); ?>
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
            
            <button class="button1" role="button"><a id='deconnexion'href="FormulaireConnexion.php"><span class="text">Déconnection</span></a></button>
        </div>

        
    </section>
    


    <?php include_once('footer.php'); ?>

    
    
</body>



</html>