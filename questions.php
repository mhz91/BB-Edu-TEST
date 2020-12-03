<?php

function getQuestions() {
    return [
        [
            "titre" => "Quel est le classement de Brooklyn parmi les brasseries américaines ? (volume)*",
            "type" => "radio",
            "reponses" => [
                [ "label" => "#1", "value" => "#1" ],
                [ "label" => "#2", "value" => "#2" ],
                [ "label" => "#3", "value" => "#3" ],
                [ "label" => "#4", "value" => "#4" ],
            ],
            "correctes" => ["#1"],
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
        ],
        [
            "bonus" => true,
            "titre" => "Quel est le classement de Brooklyn parmi les brasseries américaines ? (volume)*",
            "type" => "checkbox",
            "reponses" => [
                [ "label" => "#1", "value" => "#1" ],
                [ "label" => "#2", "value" => "#2" ],
                [ "label" => "#3", "value" => "#3" ],
                [ "label" => "#4", "value" => "#4" ],
            ],
            "correctes" => ["#1", "#3"],
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
        ]
    ];
}