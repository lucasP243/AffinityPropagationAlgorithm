<?php
session_start();

if (isset($_GET["lang"]) || !isset($_SESSION["loc"]))
{
    $loc = json_decode(file_get_contents("../core/loc.json"), true)["loc"];
    $lang = $_SESSION["lang"] = $_GET["lang"] ?? "en";
    $_SESSION["loc"] = $loc[$lang] ?? $loc["en"];
}

require_once('../core/tpl/layout.php');