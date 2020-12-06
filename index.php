<?php
require_once "questions.php";
$questions = getQuestions();
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="...">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BROOKLYN BREWERY | Questionnaire</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link rel="stylesheet" href="styles.css">
</head>

<body class="home">

    <header class="top ">

        <div class="page-header container">

            <div class="logo-header">
                <a href="index.html" title="Accueil"><img src="./image/brooklyn-logo-circle-black.svg" alt=""></a>
            </div>

            <div class="topnav" >
                <nav>
                        <a href="https://brooklynbrewery.com/" class="links" target="_blank"><i
                                class="fas fa-home fa-2x" id="icon-nav"></i></a>
                </nav>
            </div>

        </div>
            <div class="header-inner container">
                <h1 class="first-title">BROOKLYN EDU</h1> 
                <h2 class="second-title">EXAMEN D’ACQUISITION DE COMPÉTENCES</h2>
            </div>      
        </div>

        <form action="traitement.php" method="post">

     <div class="info">
        <div class="info-candidate container">               
                <input class="form-element1" type="text" id="nom" name="nom" placeholder="Nom" required="Veuillez remplir ce champs">
                <input class="form-element1" type="text" id="prenom" name="prenom" placeholder="Prénom" required="Veuillez remplir ce champs">
                <input class="form-element1" type="text" id="society" name="society" placeholder="Société">
                <input class="form-element1" type="tel" id="phone" name="phone" placeholder="Téléphone" required="Veuillez remplir ce champs">
                <input class="form-element" type="email" id="mail" name="mail" placeholder="E-Mail" required="Veuillez remplir ce champs">
                </div>

               <!--  <input class="btn-primmary" type="submit" value="Start now">
               <a href="#"><button class="btn-primmary">Start now</button></a>

                <button class="btn-primmary">Start now</button>-->
    </div>

    </header>

    <main>
     

    <section class="QCM container">

        <?php foreach ($questions as $index => $question) : ?>
            <div class="odd">
                <div class="questions">
                    <p>

                        <?php if (isset($question["bonus"]) && $question["bonus"] === true) : ?>
                            Bonus
                        <?php else: ?>
                            <?= $index + 1; ?>
                        <?php endif; ?>
                        
                        <?= $question["titre"]; ?><br />
                        <?php foreach ($question["reponses"] as $reponse) : ?>
                            <label>
                                <input type="<?= $question["type"]; ?>" name="reponses-<?= $index + 1; ?>[]" value="<?= $reponse["value"]; ?>" />
                                <?= $reponse["label"]; ?>
                            </label>
                            <br />
                        <?php endforeach; ?>
                    </p>
                </div>

                    <div class="img">
                        <?php foreach ($question as $image): ?>
                                <img src="./image/<?= $image["images"]; ?>" alt="">
                        <?php endforeach; ?>
                    </div>
            
            </div>
        <?php endforeach; ?>
               
            <section class="QCM container">
                <div class="btn-validate">
                    <input class="btn-primmary" type="submit" value="Valider vos réponses">
                </div>
            </section>
        
        </form>
</main>

    <section class="footer-top">
       <!-- <div class="header-inner container">
            <h2>Merci d'avoir participé !</h2>
        </div> -->
    </section>

    </main>
    

    <?php include("footer.php"); ?>
</body>
</html>

