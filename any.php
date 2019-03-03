<?php
    echo $_POST['latitude'];
    echo $_POST['longitude'];
    $postfields = array('latitude'=>$_GET['latitude'], 'longitude'=>$_GET['longitude']);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://35.235.101.252:5000/schedule?latitude=' . $_GET['latitude'] . '&longitude=' . $_GET['longitude']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    // Edit: prior variable $postFields should be $postfields;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    $result = curl_exec($ch);
?>