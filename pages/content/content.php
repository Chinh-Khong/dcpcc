<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
</head>
<style>
    .main_show {
        border: 1px solid blue;
        width: 78%;
        height: auto;
        margin-left: 5px;
        padding: 5px 10px;
    }
</style>

<body>
    <div class="main_show">

        <?php
        if (isset($_GET['quanly'])) {
            $count = $_GET['quanly'];
        } else {
            $count = "";
        }
        if ($count == "sanpham") {
            include_once("content/sanpham.php");
        } elseif ($count == "gioithieu") {
            include_once("content/gioithieu.php");
        } elseif ($count == "dichvu") {
            include_once("content/dichvu.php");
        } elseif ($count == "chitietsanpham") {
            include_once("content/chitietsanpham.php");
        }elseif ($count == "themgiohang") {
            include_once("content/themgiohang.php");
        }  
        else {
            include_once("index.php");
        }
        ?>
    </div>
</body>

</html>