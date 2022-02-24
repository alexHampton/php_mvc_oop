<?php
    require('model/Language.php');

    $lang = new Language($db);

    $lang->name = $name;

    $countries = $lang->read();

    include('view/citiesList.php');
?>