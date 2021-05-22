<?php
session_start();
require_once ("listProducts.php");

if(!empty($_GET['action'])) {
    switch($_GET['action']) {
        case "add":
            $itemArr = null;
            $id = isset($_GET['id']) ? (int) $_GET['id'] : '';

            foreach($products as $k => $v) {
                if($v['id'] == $id) {
                    $itemArr = $v;
                }
            }
            if($itemArr) {
                if(isset($_SESSION['cart_item'])) {
                    $isFound = false;
                    foreach($_SESSION['cart_item'] as $key => $val) {
                        if($val['id'] === $id) {
                            $isFound = true;
                            $_SESSION['cart_item']["$key"]['quantity'] ++;
                            break; 
                        }
                    }
                    if(!$isFound) {
                        $itemArr['quantity'] = 1;
                        $_SESSION['cart_item'][] = $itemArr;
                    }
                }
                else {
                    $itemArr['quantity'] = 1;
                    $_SESSION['cart_item'][] = $itemArr;
                }
            }
        break; 
        case "plus":
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            if(isset($_SESSION['cart_item'])) {
                foreach($_SESSION['cart_item'] as $key => $val) {
                    if($val['id'] == $id) {
                        $_SESSION['cart_item'][$key]['quantity'] ++;
                        break;
                    }
                }
            }
        break;
        case "minus":
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            if(isset($_SESSION['cart_item'])) {
                foreach($_SESSION['cart_item'] as $key => $val) {
                    if($val['id'] == $id) {
                        $_SESSION['cart_item'][$key]['quantity'] --;
                        if($_SESSION['cart_item'][$key]['quantity'] < 1) {
                            $_SESSION['cart_item'][$key]['quantity'] = 1;
                        }
                        break;
                    }
                }
            }
        break;
        case "del":
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            if(isset($_SESSION['cart_item'])) {
                $isFound = false;
                foreach($_SESSION['cart_item'] as $key => $val) {
                    if($val['id'] == $id) {
                        $isFound = true;
                        unset($_SESSION['cart_item'][$key]);
                        break;
                    }
                }   
            }

        break;      
        case "empty": 
            if(isset($_SESSION['cart_item'])){
                unset($_SESSION["cart_item"]);
            }
        break;     
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a52d4e051d.js" crossorigin="anonymous"></script>

    <style>
       .img-item 
       {
           width: 150px;
           height: auto;
           object-fit: cover;
       }
       td, th.index 
       {
           vertical-align: middle;
       }
       td,th {
           text-align: center;
       }
       #btn-empty {
           float: right;
       }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }       
        /* Firefox */
        input[type=number] {
        -moz-appearance: textfield;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="products.php" class="btn btn-success mt-3">Home</a>

        <a href="cart.php?action=empty" class="btn btn-danger mt-3" id="btn-empty">
            Clear cart
        </a>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <?php
                if(isset($_SESSION['cart_item'])){
                    foreach($_SESSION['cart_item'] as $key => $val) {
                        $total = $_SESSION['cart_item'] > 0 ? $val['price'] * $val['quantity'] : 0; 
            ?>
            <tbody>
                <tr>
                    <th class="index"><?=$key+1;?></th>
                    <td>
                        <img src="<?=$val['thumbnail'];?>" alt="" class="img-item">
                    </td>
                    <td><?=$val['name'];?></td>
                    <td><?=$val['price'];?> $</td>
                    <!-- <td><?=$val['quantity'];?></td> -->
                    <td>
                        <a href="cart.php?action=plus&id=<?php echo $val['id']?>" class="btn btn-danger">+</a>
                        <input type="number" value="<?=$val['quantity'];?>" class="i-quantity">
                        <a href="cart.php?action=minus&id=<?php echo $val['id']?>" class="btn btn-danger">-</a>
                    </td>
                    <td><?=$total?> $</td>
                    <td>
                        <a href="cart.php?action=del&id=<?php echo $val['id']?>" class="btn btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php
                }
            }
            ?>    
            </tbody>
        </table>
        <?php if(empty($_SESSION['cart_item'])) {
            echo "<p class='text-center fw-bold'>Your cart is Empty now...</p>";
        }
        ?>
     
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="./js/cart.js"></script>
</body>
</html>

