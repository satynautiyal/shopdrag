<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .adds {
            width: 90%;
            margin: auto;
            background-color: white;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body style="background-color: rgb(241, 241, 241);">

    <head>
        <?php
        include 'header.php';
        ?>
    </head>


    <main>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" >
                    <img src="carousel/4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="carousel/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="carousel/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="carousel/1.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="adds">
            <h1>Men's Fashion</h1>
            <div class="card-group">
                <div class="card"  >
                    <div style="width:30%;align-self:center" ><img src="men/m1.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Shirts</h5>
                        <p class="card-text">Get some Branded Shirts at special prices</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="card">
                    <div style="width:30%;align-self:center"><img src="men/m2.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Footwear</h5>
                        <p class="card-text">We have stylish footwear at special prices</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>

                <div class="card">
                    <div style="width:30%;align-self:center"><img src="men/m3.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Clothes</h5>
                        <p class="card-text">Get some Branded clothes at special prices</p>
                        <a href="#" class="btn btn-primary">Explore all</a>
                    </div>
                </div>
                <div class="card">
                    <div style="width:30%;align-self:center"> <img src="men/m4.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Watches</h5>
                        <p class="card-text">We have some stylish watches check it out</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="adds" style="width:90%;margin:auto;background-color:white;">
            <h1>Women's Fashion</h1><br>
            <div class="card-group">
                <div class="card">
                    <div style="width:30%;align-self:center"><img src="men/m1.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Shirts</h5>
                        <p class="card-text">Get some Branded Shirts at special prices</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="card">
                    <div style="width:30%;align-self:center"><img src="men/m2.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Footwear</h5>
                        <p class="card-text">We have stylish footwear at special prices</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>

                <div class="card">
                    <div style="width:30%;align-self:center"><img src="men/m3.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Clothes</h5>
                        <p class="card-text">Get some Branded clothes at special prices</p>
                        <a href="#" class="btn btn-primary">Explore all</a>
                    </div>
                </div>
                <div class="card">
                    <div style="width:30%;align-self:center"> <img src="men/m4.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Watches</h5>
                        <p class="card-text">We have some stylish watches check it out</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="adds" style="width:90%;margin:auto;background-color:white;">
            <h1>Footwear</h1><br>

            <div class="card">
                <div style="width:100%;align-self:center"><img src="footwear/footwear.png" class="card-img-top" alt="..."></div>
            </div>
            <a href="#" class="btn btn-primary" style="width:100%">Explore all</a>
        </div>

        <br>
        <div class="adds" style="width:90%;margin:auto;background-color:white;">
            <h1>Watches</h1><br>
            <div class="card-group">
                <div class="card">
                    <div style="width:30%;align-self:center"><img src="watches/w1.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Shirts</h5>
                        <p class="card-text">Get some Branded Shirts at special prices</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
                <div class="card">
                    <div style="width:30%;align-self:center"><img src="watches/w2.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Footwear</h5>
                        <p class="card-text">We have stylish footwear at special prices</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>

                <div class="card">
                    <div style="width:30%;align-self:center"><img src="watches/w3.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Clothes</h5>
                        <p class="card-text">Get some Branded clothes at special prices</p>
                        <a href="#" class="btn btn-primary">Explore all</a>
                    </div>
                </div>
                <div class="card">
                    <div style="width:30%;align-self:center"> <img src="watches/w4.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                        <h5 class="card-title">Watches</h5>
                        <p class="card-text">We have some stylish watches check it out</p>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary" style="width:100%">Explore all</a>
        </div>
    </main>

</body>

</html>