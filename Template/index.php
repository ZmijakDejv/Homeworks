<?php
require "Template.php";

$data = array(
    "title" => "Document",
    "message" => "zprava",
    "h1" => "nadpis"
);

$test = new Template();
$test->setData($data);
$test->setFileName("page.html");
$test->render();
