<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <style>
        .carousel {
            position: unset !important;
        }

        .slide .aa img {
            height: 500px;
            margin-top: 20px;
        }

        .btnslide {
            margin-top: 100px;
        }

        .carousel-item {
            width: 100%;
        }

        .product {
            display: block;
            border: 1px solid blue;
        }

        /* .display{
            display: flex;
            overflow: hidden;
        } */

        .thongtin_sp span {
            margin: 40px;
            Font: Roboto, sans-serif;
            font-family: 20px;
        }

        .thongtin_sp del {
            margin-left: 20px;
            Color: #999999;
            Font: Roboto, sans-serif;
            font-family: 14px;
        }

        .thongtin_sp p {
            margin-left: 20px;
            font-weight: 600;
            font-family: 16px;
            color: #D70909;
            font-family: Roboto, sans-serif;
        }

        .row {
            max-width: 1225px;
        }

        .img {
            position: relative;
            overflow: hidden;
        }

        .MuaNgay a {
            text-decoration: none;
            color: white;
            background-color: #ef3340;
            max-width: 100%;
            display: block;
            padding: 10px 0px;
            text-transform: uppercase;
            text-align: center;
            font-weight: 600;
            position: absolute;
            bottom: -45px;
            width: 100%;
            transition: 0.25s ease-in-out;
        }

        .img:hover .MuaNgay a {

            bottom: 0px;
        }

        .MuaNgay a:hover {
            background-color: #ff2f00;
        }
        #eye{
            position: absolute;
           
        }
        #eye i{
            color: white;
            font-size: 15px;
            font-weight: 600;
            margin-right: 10px;
            float: left;
        }

    </style>
</head>

<body>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../slide/pc/pc1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../slide/pc/pc4.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../slide/pc/pc3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../slide/pc/pc4.jpg" alt="4 slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <?php
    $sql_sp = "SELECT * FROM sanpham,danhmuc WHERE  sanpham.id_danhmuc = danhmuc.id_danhmuc ORDER BY sanpham.id_sp ASC";
    $query_sp = mysqli_query($conn, $sql_sp);
    ?>
    <div class="row">
        <?php
        while ($row_sp = mysqli_fetch_array($query_sp)) {

            ?>
            <div class="col-md-3">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <div class="img">
                  <a id="eye" href="index.php?quanly=chitietsanpham&id=<?php echo $row_sp['id_sp']; ?>"><i class="fa-solid fa-eye"></i></a>
                    <img width="100%" src="\DC_PC\admin\quanlysanpham\uploads/<?php echo $row_sp['hinhanh']; ?>" alt="">
                        <div class="MuaNgay">
                            <a href="">mua ngay</a>
                        </div>
                    </div>
                    <div class="thongtin_sp">
                        <div>
                            <?php echo $row_sp['tensp'] ?>
                        </div>
                        <p>
                            <?php echo number_format($row_sp['giasp'], 0, ',', '.') . 'vnđ' ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>

</html>