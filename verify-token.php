<?php

require 'database.php';

$t = trim($_GET['t']);

$sql = "SELECT id, link, token FROM encurtador.links WHERE token='{$t}'";

$links = query($sql);

if(count($links) > 0) {
    header('Location: ' . $links[0]['link']);
}