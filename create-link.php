<?php

session_start();
require 'database.php';

$link = trim($_POST['link']);
$token = rand(1, 99999);

$sql = "INSERT INTO encurtador.links (link, token) VALUES('{$link}', '{$token}')";

query($sql);
$_SESSION['token'] = $token;

header('Location: shorter-link.php');