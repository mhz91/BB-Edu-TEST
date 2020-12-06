<?php

// public SolrDocument::getField ( string $reponse ) : SolrDocumentField
// if (getField("reponses").value=="") app.alert("This field is required!"); --> page index
function getQuestions() {
    return [
        [
            "titre" => "Quel est le classement de B ? (volume)*",
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
            "titre" => "Quel est le classement de B ? (volume)*",
            "type" => "checkbox",
            "reponses" => [
                [ "label" => "#1", "value" => "#1" ],
                [ "label" => "#2", "value" => "#2" ],
                [ "label" => "#3", "value" => "#3" ],
                [ "label" => "#4", "value" => "#4" ],
            ],
            "correctes" => ["#1", "#3"],
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
        ],
        [
            "titre" => "Quel est le classement de B ? (volume)*",
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
            "titre" => "Quel est le classement de B ? (volume)*",
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
            "titre" => "Quel est le classement de B ? (volume)*",
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
            "titre" => "Quel est le classement de B ? (volume)*",
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
            "titre" => "Quel est le classement de B ? (volume)*",
            "type" => "radio",
            "reponses" => [
                [ "label" => "#1", "value" => "#1" ],
                [ "label" => "#2", "value" => "#2" ],
                [ "label" => "#3", "value" => "#3" ],
                [ "label" => "#4", "value" => "#4" ],
            ],
            "correctes" => ["#1"],
            "images" => ["./image/img-1.jpg", "./image/img_texture@1x.jpg"]
        ]
    ];
}