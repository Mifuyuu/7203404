<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="container-fluid text-center">
            <h1>PHP Calculate Money</h1>
            <hr>
            <p>กรุณากรอกข้อมูลเพื่อทำการคำนวณยอดเงิน</p>
            <form action="" method="post">
                <div class="mb-3 d-flex gap-5 justify-content-center">
                    <div class="d-flex flex-column w-25">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control text-center m-auto" id="price" name="price" value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>" placeholder="Enter a Price" required>
                    </div>
                    <div class="d-flex flex-column w-25">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="number" class="form-control text-center m-auto" id="amount" name="amount" value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>" placeholder="Enter a Amount" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary px-5">Calculate</button>
                <button type="button" onclick="clearGrade()" class="btn btn-secondary px-5">Reset All</button>
            </form>
            <div id="grade" class="card overflow-hidden w-50 mt-3 m-auto">
                <div class="card-header bg-info text-light text-center p-1">
                    <h4>Show Result</h4>
                </div>
                <div class="card-body text-start">
                    <p>Price of Product: <b><?php echo isset($_POST['price']) ? $_POST['price'] : 0; ?></b></p>
                    <hr class="my-2">
                    <p>Amount of Product: <b><?php echo isset($_POST['amount']) ? $_POST['amount'] : 0; ?></b></p>
                    <hr class="my-2">
                    <p class="text-primary">Total Paid: <b><?php echo isset($_POST['price']) && isset($_POST['amount']) ? $_POST['price'] * $_POST['amount'] : 0; ?></b></p>
                </div>
            </div>
        </div>
        <hr>
        <a href="index.php">Back to Home</a>
    </div>
    <script>
        function clearGrade() {
            document.getElementById('grade').innerHTML = '';
            document.getElementById('price').value = '';
            document.getElementById('amount').value = '';
        }  
</script>
</body>
</html>