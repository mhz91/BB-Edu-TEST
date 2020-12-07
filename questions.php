<?php

// public SolrDocument::getField ( string $reponse ) : SolrDocumentField
// if (getField("reponses").value=="") app.alert("This field is required!"); --> page index
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
            "images" => [ "./image/001.jpg", "./image/002.jpg"]
        ],
        [
            //"bonus" => true,
            "titre" => "Combien de brasseries y avait-il à Brooklyn avant la Prohibition? *",
            "type" => "checkbox",
            //"type" => "radio",
            "reponses" => [
                [ "label" => "0", "value" => "1" ],
                [ "label" => "48", "value" => "2" ],
                [ "label" => "356", "value" => "3" ],
                [ "label" => "128", "value" => "4" ],
            ],
            "correctes" => ["#2"],
            "images" => ["./image/003.jpg", "./image/002.jpg"]
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
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
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
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
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
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
        ],
        [
            "titre" => "En quoi consiste la règle de la «Troisième partie» de Garrett Oliver?",
            "type" => "radio",
            "reponses" => [
                [ "label" => "Elles doivent vous donner envie de changer de bière", "value" => "" ],
                [ "label" => "Les dernières gorgées d’une bière doivent être tout aussi savoureuses et
                accueillantes que la première", "value" => "" ],
                [ "label" => "Elles doivent vous enthousiasmer au point de vous faire en commander
                une autre", "value" => "#3" ],
                [ "label" => "Les dernières gorgées d’une bière doivent être tout aussi savoureuses et
                accueillantes que la première. Elles doivent vous enthousiasmer au point
                de vous faire en commander une autre", "value" => "#4" ],
            ],
            "correctes" => ["#4"],
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
        ],
        [
            "titre" => "Le quartier de Brooklyn est considéré comme un symbole de :",
            "type" => "radio",
            "reponses" => [
                [ "label" => "relations internationales", "value" => "" ],
                [ "label" => "culture, lifestyle, gastronomie", "value" => "" ],
                [ "label" => "finance, banques, multinationales", "value" => "" ],
            ],
            "correctes" => ["#2"],
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
        ]
    ];
}