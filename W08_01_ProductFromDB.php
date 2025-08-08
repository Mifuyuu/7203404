<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop for Show Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <style>
        * {
            font-family: sans-serif;
        }
        body {
            margin: 20px;
        }
        p {
            color: #333;
            font-size: 16px;
        }

        .container {
            max-width: 800px;
        }
    </style>
</head>
<body>
    <?php

    require 'W07_01_ConnectDB.php';

    $sql = "SELECT * FROM products";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // print_r($data);

    ?>
    <div class="container mt-5">
        <h1>Product List</h1>
        <form action="" method="post" class="mb-3">
            <div>
                <input type="text" name="price" placeholder="Enter price" class="form-control mb-2">
                <input type="submit" value="Search" class="btn btn-primary">
            </div>
        </form>
        <table class="table table-striped table-bordered" id="productTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_POST['price']) && !empty($_POST['price'])) {
                    $filterPrice = $_POST['price'];
                    $filteredProducts = array_filter($products, function($product) use ($filterPrice){
                        return $product['price'] == $filterPrice;
                    });
                $filteredProducts = array_values($filteredProducts);
                } else {
                    $filteredProducts = $data;
                }


                foreach ($filteredProducts as $index => $product) {
                echo "<tr>";
                echo "<td>".($index+1)."</td>";
                echo "<td>".$product['product_id']."</td>";
                echo "<td>".$product['product_name']."</td>";
                echo "<td>".$product['category']."</td>";
                echo "<td>".$product['price']."</td>";
                echo "<td>".$product['stock_quantity']."</td>";
                echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#productTable');
    </script>
</body>
</html>