<?php

require 'functions.php'; //Inclui e executa o conteúdo de um arquivo PHP dentro desse arquivo PHP

$heading = 'About Us';

echo $_SERVER['REQUEST_URI'];

require "views/about.view.php";