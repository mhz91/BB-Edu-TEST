<?php
function getQuestions() {
    return [
        [
            "titre" => "Quel est le classement de Brooklyn parmi les brasseries
            amèricaines ? (volume) *",
            "type" => "radio",
            "reponses" => [
                [ "label" => "#1", "value" => "#1" ],
                [ "label" => "#2", "value" => "#2" ],
                [ "label" => "#12", "value" => "#3" ],
                [ "label" => "#50", "value" => "#4" ],
            ],
            "correctes" => ["#3"],
            "image" => "./image/img-1.jpg"
        ],
        [
            "titre" => "Combien de brasseries y avait-il à Brooklyn avant la Prohibition? *",
            "type" => "radio",
            "reponses" => [
                [ "label" => "0", "value" => "#1" ],
                [ "label" => "48", "value" => "#2" ],
                [ "label" => "356", "value" => "#3" ],
                [ "label" => "128", "value" => "#4" ],
            ],
            "correctes" => ["#2"],
            "image" => "./image/img-2.jpg"
        ],
        [
            "titre" => "Quel était le premier métier de Steve Hindy, fondateur de The
            Brooklyn Brewery?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Banquier", "value" => "#1" ],
                [ "label" => "Journaliste", "value" => "#2" ],
                [ "label" => "Distributeur", "value" => "#3" ],
            ],
            "correctes" => ["#2"],
            "image" => "./image/img-3.jpg"
        ],
        [
            "titre" => "Quelle année a été fondée la brasserie?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "1980", "value" => "#1" ],
                [ "label" => "1987", "value" => "#2" ],
                [ "label" => "1988", "value" => "#3" ],
                [ "label" => "1994", "value" => "#4" ],
            ],
            "correctes" => ["#2"],
            "image" => "./image/img-4.jpg"
        ],
        [
            "titre" => "Qui est Garrett Oliver?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "un sommelier", "value" => "#1" ],
                [ "label" => "un mixologue", "value" => "#2" ],
                [ "label" => "un maitre brasseur", "value" => "#3" ],
                [ "label" => "un ecrivain", "value" => "#4" ],
            ],
            "correctes" => ["#3"],
            "image" => "./image/img-5.jpg"
        ],
        [
            "titre" => "En quoi consiste la règle de la «Troisième partie» de Garrett Oliver?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Elles doivent vous donner envie de changer de bière", "value" => "#1" ],
                [ "label" => "Les dernières gorgées d’une bière doivent être tout aussi savoureuses et
                accueillantes que la première", "value" => "#2" ],
                [ "label" => "Elles doivent vous enthousiasmer au point de vous faire en commander
                une autre", "value" => "#3" ],
                [ "label" => "Les dernières gorgées d’une bière doivent être tout aussi savoureuses et
                accueillantes que la première. Elles doivent vous enthousiasmer au point
                de vous faire en commander une autre", "value" => "#4" ],
            ],
            "correctes" => ["#4"],
            "image" => "./image/img-6.jpg"
        ],
        [
            "titre" => "Le quartier de Brooklyn est considéré comme un symbole de :",
            "type" => "radio",
            "reponses" => [
                [ "label" => "relations internationales", "value" => "#1" ],
                [ "label" => "culture, lifestyle, gastronomie", "value" => "#2" ],
                [ "label" => "finance, banques, multinationales", "value" => "#3" ],
            ],
            "correctes" => ["#2"],
            "image" => "./image/img-7.jpg"
        ],
        [
            "titre" => "Quels sont les trois pilliers de Brooklyn ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Produit, lieu, communauté", "value" => "#1" ],
                [ "label" => "IPA, pub, burgers", "value" => "#2" ],
                [ "label" => "Produit, visuel, volume", "value" => "#3" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-8.jpg"
        ],        
        [
            "titre" => "A quels univers s’affilie Brooklyn depuis sa création ? (plusieurs réponses)",
            "type" => "checkbox",
            "reponses" => [
                [ "label" => "mixologie", "value" => "#1" ],
                [ "label" => "mode", "value" => "#2" ],
                [ "label" => "gastronomie", "value" => "#3" ],
                [ "label" => "culture", "value" => "#4" ],
            ],
            "correctes" => ["#1", "#2", "#3", "#4"],
            "image" => "./image/img-9.jpg"
        ],
        [
            "titre" => "L’état d’esprit Brooklyn, c’est… ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Être ouvert d’esprit, réfléchi, vibrant, irrévérencieux", "value" => "#1" ],
                [ "label" => "Un peu old school, impulsif, déraisonné", "value" => "#2" ],
                [ "label" => "Make America great again", "value" => "#3" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-10.jpg"
        ],
        [
            "titre" => "Quel est le mot d’odre chez Brooklyn ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Célébrons les différences!", "value" => "#1" ],
                [ "label" => "Vive la France", "value" => "#2" ],
                [ "label" => "God bless America", "value" => "#3" ],
                [ "label" => "Defend beer", "value" => "#4" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-11.jpg"
        ],
        [
            "titre" => "Au lancement de Brooklyn en 2013, où la marque s’est-elle implantée
            en priorité ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Brasseries de quartier", "value" => "#1" ],
                [ "label" => "Pmus", "value" => "#2" ],
                [ "label" => "Bars a cocktails et restaurants branchés", "value" => "#3" ],
            ],
            "correctes" => ["#3"],
            "image" => "./image/img-12.jpg"
        ],
        [
            "titre" => "Dans quel(s) segment(s) Brooklyn est-elle leader ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "CHR", "value" => "#1" ],
                [ "label" => "GMS", "value" => "#2" ],
                [ "label" => "Les deux", "value" => ">#3" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-13.jpg"
        ],
        [
            "titre" => "Quelle est la brasserie craft anglo-saxonne de référence en
            CHR (leader en volumes) ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Lagunitas", "value" => "#1" ],
                [ "label" => "Goose Island", "value" => "#2" ],
                [ "label" => "BrewDog", "value" => ">#3" ],
                [ "label" => "Brooklyn Brewery", "value" => ">#4" ],
            ],
            "correctes" => ["#4"],
            "image" => "./image/img-14.jpg"
        ],
        [
            "titre" => "Quelle a été la première recette brassée chez Brooklyn Brewery ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Brooklyn Lager", "value" => "#1" ],
                [ "label" => "Brooklyn East IPA", "value" => "#2" ],
                [ "label" => "Black Chocolate Stout", "value" => "#3" ],
                [ "label" => "Defender IPA", "value" => "#4" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-15.jpg"
        ],
        [
            "titre" => "Un point de vente propose à sa clientèle 1664, Carlsberg,
            Grimbergen Blonde. Quelle recette de Brooklyn serait la plus
            complémentaire selon vous?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Brooklyn Lager", "value" => "#1" ],
                [ "label" => "Brooklyn Defender IPA", "value" => "#2" ],
                [ "label" => "Brooklyn Bel Air Sour", "value" => "#3" ],
            ],
            "correctes" => ["#2"],
            "image" => "./image/img-16.jpg"
        ],
        [
            "titre" => "Un point de vente veut ouvrir un bec d’IPA. Il n’en a encore jamais proposé
            à sa clientèle. Quelle IPA lui proposez-vous?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Brooklyn Lager", "value" => "#1" ],
                [ "label" => "Brooklyn East IPA", "value" => "#2" ],
                [ "label" => "Black Chocolate Stout", "value" => "#3" ],
                [ "label" => "Defender IPA", "value" => "#4" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-17.jpg"
        ],
        [
            "titre" => "Quel élément de PLV exceptionnel reflèterait le moins l’ADN de Brooklyn ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "L’enseigne extérieure", "value" => "#1" ],
                [ "label" => "Le néon", "value" => "#2" ],
                [ "label" => "La borne d’arcade", "value" => "#3" ],
                [ "label" => "La fresque murale", "value" => "#4" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-18.jpg"
        ],
        [
            "titre" => "Quelle typologie d’établissement fait le moins de sens pour
            Brooklyn selon vous ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Brasserie branchée", "value" => "#1" ],
                [ "label" => "Sports bar", "value" => "#2" ],
                [ "label" => "Style bar", "value" => "#3" ],
                [ "label" => "Bar traditionnel", "value" => "#4" ],
            ],
            "correctes" => ["#4"],
            "image" => "./image/img-19.jpg"
        ],
        [
            "titre" => "Vous êtes sollicités pour 3 partenariats Brooklyn.
            Selon vous lequel est le plus pertinent ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Skate Festival (skate, concerts, live street art ...)", "value" => "#1" ],
                [ "label" => "Festival Americain (Concert de Country, Cowgirls, Rodeo...)", "value" => "#2" ],
                [ "label" => "US Vintage Cars Show (Mustang, Lowriders, Hummer...)", "value" => "#3" ],
            ],
            "correctes" => ["#1"],
            "image" => "./image/img-20.jpg"
        ],
        [
            "bonus" => true,
            "titre" => "- Comment allons-nous faire de Brooklyn une réussite cette année ?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "En vendant des bouteilles de Special Effects à la librairie Bobo du quartier", "value" => "#1" ],
                [ "label" => "En élargissant notre distribution avec Brooklyn Lager et Defender IPA en
                piliers, le tout dans la continuité de la marque et de son identité", "value" => "#2" ],
                [ "label" => "En en mettant partout pour faire comme Bud et Lagunitas !", "value" => "#3" ],
            ],
            "correctes" => ["#2"],
            "image" => "./image/img-21.jpg"
        ]
    ];
}