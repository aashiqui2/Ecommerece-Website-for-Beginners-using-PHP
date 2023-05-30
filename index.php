<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerece Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php

    include './partials/connect.php';
    include './partials/header.php';
    ?>
    <h1 class="text-center text-primary my-3">Welcome to our store</h1>
    <h1 class="text-center text-success my-4">Shop by Cataegory</h1>

    <div class="container">

        <div class="row">

            <!-- php code  -->

            <?php
            $sql = "select * from cloths";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                // echo $row['category_name'];
                while ($row = mysqli_fetch_assoc($result)) {
                    $category_id = $row['category_id'];
                    $category_name = $row['category_name'];
                    $category_desc = $row['category_desc'];
                    $category_price = $row['category_price'];
                    $category_image = $row['category_image'];
                    echo ' <div class="col-md-4 col-sm-6 col-xm-12 mb-5">
        <div class="card">
            <img src=' . $category_image . ' class="card-img-top" alt="Card image cap" style="height:300px;object-fir:contain">
            <div class="card-body">
                <h5 class="card-title">'.$category_name.'</h5>
                <p class="card-text">'.substr($category_desc,0,55).'....</p>
                <p>Rs '.$category_price.'-/</p>
                <a href="./details.php?detailsid='.$category_id .'" class="btn btn-primary">Shop Now</a>
            </div>
        </div>
    </div>  ';
                }
            }


            ?>

            <!-- <div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                <div class="card">
                    <img src="./Images/cloth1.jpg" class="card-img-top" alt="..." style="height:300px;object-fit:contain;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                <div class="card">
                    <img src="./Images/cloth2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                <div class="card">
                    <img src="./Images/cloth3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                <div class="card">
                    <img src="./Images/cloth4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                <div class="card">
                    <img src="./Images/cloth8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6-col-xm-12 mb-5">
                <div class="card">
                    <img src="./Images/cloth6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div> -->

        </div>

    </div>

</body>

</html>