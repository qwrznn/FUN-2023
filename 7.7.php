<?php
define("SIGN", "Деканат");

$order = [
    "scholarship" => " Вам нараховано стипендію.",
    "expelled" => " Вас відраховано з нашого навчального закладу.",
    "thank" => " ми дякуємо Вам за успіхи у навчанні.",
    "competition" => " Вам нараховано премію за прийняття участі в олімпіаді."
];

$people = [
    "misha" => [
        "name" => "Михайло",
        "email" => "misha@mail.com",
    ],
    "arsen" => [
        "name" => "Арсеній",
        "email" => "arsen@mail.com",
    ],
    "mark" => [
        "name" => "Марк",
    ],
    "dima" => [
        "name" => "Дмитро",
        "email" => "dima@mail.com",
    ],
];

$letter["misha"] = "scholarship";
$letter["dima"] = "expelled";
$letter["mark"] = "thank";
$letter["arsen"] = "competition";