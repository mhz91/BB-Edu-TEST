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
                        <a href="#" class="links"><i class="fas fa-envelope fa-2x" id="icon-nav"></i></a>
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
                <input class="form-element1" type="text" id="nom" name="nom" value="<?php if (isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']);?>" placeholder="Nom" required="Veuillez remplir ce champs">
                <input class="form-element1" type="text" id="prenom" name="prenom" value="<?php if (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']);?>" placeholder="Prénom" required="Veuillez remplir ce champs">
                <input class="form-element1" type="text" id="society" name="society" value="<?php if (isset($_POST['society'])) echo htmlspecialchars($_POST['society']);?>" placeholder="Société">
                <input class="form-element1" type="tel" id="phone" name="phone" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>" placeholder="Téléphone" required="Veuillez remplir ce champs">
                <input class="form-element" type="email" id="mail" name="mail" value="<?php if (isset($_POST['mail'])) echo htmlspecialchars($_POST['mail']);?>"placeholder="E-Mail" required="Veuillez remplir ce champs">
                </div>

               <!--  <input class="btn-primmary" type="submit" value="Start now">
               <a href="#"><button class="btn-primmary">Start now</button></a>

                <button class="btn-primmary">Start now</button>-->
    </div>

    </header>

    <main>
     

    <section class="QCM container">
    <div class="odd">

                <div class="img-wrapper-odd">
                    <div class="img-odd"><img src="./image/img-1.jpg" alt="" class="img-front-right"></div>
                    <div class="img-odd"><img src="./image/img_texture@1x.jpg" alt="" class="img-back-right"></div>
                </div>

                <div class="odd-questions">
                    <p>
                       1 Quel est le classement de Brooklyn parmi les brasseries américaines ? (volume)*<br />
                        <label><input type="radio" name="question1" value="#1" /> #1</label><br />
                        <label><input type="radio" name="question1" value="#2" /> #2</label><br />
                        <label><input type="radio" name="question1" value="#12" /> #12</label><br />
                        <label><input type="radio" name="question1" value="#50" /> #50</label>
                    </p>
                </div>
    </div>
   
    <div class="even">
                <div class="even-questions">
                    <p>
                       2 Combien de brasseries y avait-il à Brooklyn avant la Prohibition ?<br />
                        <label><input type="radio" name="question2" value="0" /> 0</label><br />
                        <label><input type="radio" name="question2" value="48" /> 48</label><br />
                        <label><input type="radio" name="question2" value="356" /> 356</label><br />
                        <label><input type="radio" name="question2" value="128" /> 128</label>
                    </p>
                </div>

                <div class="img-wrapper-even">
                        <div class="img-even"><img src="./image/img-1.jpg" alt="" class="img-front-right"></div>
                        <div class="img-even"><img src="./image/img_texture@1x.jpg" alt="" class="img-back-right"></div>
                </div>
    </div>
    
        <div class="odd">
                <div class="img-wrapper-odd">
                        <div class="img-odd"><img src="" alt="" class="img-front-right"></div>
                        <div class="img-odd"><img src="" alt="" class="img-back-right"></div>
                </div>
        </div>
        <div class="odd">

                    <div class="img-wrapper-odd">
                        <div class="img-odd"><img src="./image/img-1.jpg" alt="" class="img-front-right"></div>
                        <div class="img-odd"><img src="./image/img_texture@1x.jpg" alt="" class="img-back-right"></div>
                    </div>

                    <div class="odd-questions">
                        <p>3 Quel était le premier métier de Steve Hindy, fondateur de The Brooklyn Brewery?<br />
                        <label><input type="radio" name="question3" value="Vendeur de tapis" /> Vendeur de tapis</label><br />
                        <label><input type="radio" name="question3" value="Banquier" /> Banquier</label><br />
                        <label><input type="radio" name="question3" value="Journaliste" /> Journaliste</label><br />
                        <label><input type="radio" name="question3" value="Distributeur" /> Distributeur</label>
                        </p>
                    </div>
        </div>

                
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

