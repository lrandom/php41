<?php
require_once ("listProducts.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600,700&display=swap" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/a52d4e051d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <h1 class="tittle">List Product</h1>
        </div>
        <div class="row">
            <?php
            if(!empty($products)){
                foreach($products as $val) {        
            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-product">
                    <form method="POST" action="cart.php?action=add&id=<?php echo $val['id']?>">
                        <div class="img-item-box">
                            <img src="<?=$val['thumbnail'];?>" alt="" class="img-item">
                        </div>
                        <div class="content-item-box">
                            <h4 class="name-item"><?=$val['name']?></h4>
                            <p class="price-item"><?=$val['price']?>$</p>
                        </div>
                    
                        <button type="submit" class="btn-add" style="border: none;" name="btn-add">
                            <a href="#">
                                <i class="fas fa-shopping-bag add-icon"></i>
                            </a>
                        </button>
                    </form>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>