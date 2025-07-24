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
    $products = [
        ['id'=>1001, 'name'=>'Apple', 'price'=>50,'quantity'=>10],
        ['id'=>1002, 'name'=>'Banana', 'price'=>20,'quantity'=>5],
        ['id'=>1003, 'name'=>'Orange', 'price'=>30,'quantity'=>8],
        ['id'=>1004, 'name'=>'Grapes', 'price'=>40,'quantity'=>12],
        ['id'=>1005, 'name'=>'Mango', 'price'=>60,'quantity'=>15],
        ['id'=>1006, 'name'=>'Pineapple', 'price'=>70,'quantity'=>7],
        ['id'=>1007, 'name'=>'Strawberry', 'price'=>90,'quantity'=>20],
        ['id'=>1008, 'name'=>'Watermelon', 'price'=>80,'quantity'=>25],
        ['id'=>1009, 'name'=>'Peach', 'price'=>55,'quantity'=>18],
        ['id'=>1010, 'name'=>'Kiwi', 'price'=>65,'quantity'=>22],
        ['id'=>1011, 'name'=>'Blueberry', 'price'=>75,'quantity'=>30],
        ['id'=>1012, 'name'=>'Raspberry', 'price'=>85,'quantity'=>28],
        ['id'=>1013, 'name'=>'Blackberry', 'price'=>50,'quantity'=>35],
        ['id'=>1014, 'name'=>'Papaya', 'price'=>45,'quantity'=>14],
        ['id'=>1015, 'name'=>'Coconut', 'price'=>50,'quantity'=>9]
    ];

    // foreach ($products as $product) {
    //     echo "<p>{$product['id']} สินค้า: {$product['name']} ราคา: {$product['price']} บาท จำนวน: {$product['quantity']} ชิ้น</p>";
    // }

    ?>
    <div class="container mt-5">
        <h1>Product List</h1>
        <form action="" method="post" class="mb-3">
            <div>
                <input type="text" name="price" placeholder="Enter price" class="form-control mb-2">
                <input type="submit" value="Search" class="btn btn-primary">
            </div>
        </form>
        <table class="table table-striped table-bordered text-center" id="productTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>ID</th>
                    <th>Name</th>
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
                    $filteredProducts = $products;
                }


                foreach ($filteredProducts as $index => $product) {
                echo "<tr>";
                echo "<td>".($index+1)."</td>";
                echo "<td>".$product['id']."</td>";
                echo "<td>".$product['name']."</td>";
                echo "<td>".$product['price']."</td>";
                echo "<td>".$product['quantity']."</td>";
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