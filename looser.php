<?php 
    require_once "questions.php";
    $questions = getQuestions();
    // Récupérer la note de l'utilisateur
    $id = $_GET["note"]; 
    $note = $_GET["note"]


?>
<!DOCTYPE html>
<html>
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
    <body>
<section class="page-content">
    <header class="top-content ">

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
    </header>

    <div class="content-title container">
                <?php if ($note <= 2) {
                echo '<H1 class="results-title">LOSER !</H1> <H2 class="results-secondtitle">VOUS AVEZ OBTENU <span style="color: #ca0505;"> ' . $note . ' </span> RÉPONSES EXACTES SUR UN TOTAL DE 21 QUESTIONS ! RETOURNEZ D’URGENCE RÉVISER VOS CLASSIQUES !</H2> ';
                }?>
        </div>

    <div class="content-results container">
                <h2 class="results-thirdtitle">MERCI D’AVOIR PARTICIPÉ !</h2>
    </div>
    </section>
<?php include("footer.php"); ?>
        </body>
</html>