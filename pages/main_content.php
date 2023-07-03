<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .content {
        display: flex;
    }

    .danhmuc {
        display: block;
        border: 1px solid red;
        height: 600px;
        width: 20%;
    }

    .danhmuc ul li {
        border-bottom: 1px solid yellow;
        padding: 10px 5px;


        text-align: left;

    }

    .danhmuc ul li:hover {
        color: #00ffff;
    }

    .danhmuc ul li a {
        display: block;
        text-decoration: none;
    }

    .sanpham {
        border: 1px solid black;
        height: auto;
        width: 78%;
        margin-left: 5px;
    }

    /* responsive */
    @media screen and (max-width: 768px) {
        .content {
            flex-direction: left;
            text-align: center;
        }
    }
</style>

<body>
    <div class="wrapper">
        <div class="content">

            <?php
            require_once("danhmuc/danhmuc.php");
            
            require_once("content/content.php");
            ?>
        </div>
    </div>
</body>

</html>