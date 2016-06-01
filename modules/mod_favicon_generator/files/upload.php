<?php

error_reporting(0);

function errorOut($err) {
    echo json_encode(array(
        'rcode' => 'ER',
        'error_text' => $err
    ));
    exit;
}

$valid_img_types = array(1, 2, 3, 6, 17);

if (!empty($_FILES)) {
    $file = array_shift($_FILES);
    $token = uniqid();
    $meta_code = <<<CODE
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
CODE;
    $res = array(
        'rcode' => 'OK',
        'dl_url' => "_data/{$token}/fav_icons.zip",
        'test_url' => "_data/{$token}/favicon.ico",
        'meta_code' => urlencode($meta_code),
    );
    mkdir("_data/{$token}");

    // check some stuff first
    if (!file_exists($file['tmp_name'])) {
        errorOut("The upload didn't work.");
    }
    if (!in_array(exif_imagetype($file['tmp_name']), $valid_img_types)) {
        errorOut("That's not a valid image type.");
    }

    // pack it up into one ICO
    $im_cmd = "convert " .
            " \( -resize 16x16! {$file['tmp_name']} \) " .
            " \( -resize 24x24! {$file['tmp_name']} \) " .
            " \( -resize 32x32! {$file['tmp_name']} \) " .
            " \( -resize 64x64! {$file['tmp_name']} \) " .
            " -colors 256 _data/{$token}/favicon.ico";
    exec($im_cmd);

    // get a PNG for apple touch devices, because apple says so
    $im_cmd = "convert " .
            " \( -resize 114x114! {$file['tmp_name']} \) " .
            " _data/{$token}/apple-touch-icon.png";
    exec($im_cmd);

    // zip em up
    $zip_cmd = "zip -j _data/{$token}/fav_icons.zip _data/{$token}/favicon.ico _data/{$token}/apple-touch-icon.png";
    exec($zip_cmd);

    if (!file_exists("_data/{$token}/fav_icons.zip")) {
        errorOut("Something went wrong!!");
    }

    echo json_encode($res);
} else {
    errorOut('No files were uploaded');
}