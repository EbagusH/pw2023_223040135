<?php
define('BASE_URL', '/pw2023_223040135/kuliah/pertemuan9/');

 function checkActive($url) {
    return ($_SERVER["REQUEST_URI"] == BASE_URL . $url ? 'active' : '');
 }