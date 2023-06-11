<?php
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM
artikel
WHERE
judul LIKE '%$keyword%'
";
$students = query($query);
