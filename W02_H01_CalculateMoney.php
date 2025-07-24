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
            <form action="" method="post" class="d-flex justify-content-center flex-column text-center">
                <div class="mb-3 d-flex gap-5 justify-content-center">
                    <div class="d-flex flex-column w-25">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control text-center m-auto" id="price" name="price" value="<?php echo isset($_POST['price']) ? $_POST['price'] : ''; ?>" placeholder="Enter a Price">
                    </div>
                    <div class="d-flex flex-column w-25">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control text-center m-auto" id="amount" name="amount" value="<?php echo isset($_POST['amount']) ? $_POST['amount'] : ''; ?>" placeholder="Enter a Amount">
                    </div>
                </div>
                <label>Are you Membership ?</label>
                <div class="d-flex justify-content-center gap-4 py-4">
                    <div>
                        <input type="radio" name="member" id="member" value="1"
                        <?php echo isset($_POST['member']) && $_POST['member'] == '1' ? 'checked' : ''; ?>
                        >
                        <label for="member">Member (10% Discount)</label>
                    </div>
                    <div>
                        <input type="radio" name="member" id="notmember" value="0"
                        <?php echo isset($_POST['member']) && $_POST['member'] == '0' ? 'checked' : ''; ?>
                        >
                        <label for="member">Not a Member</label>
                    </div>
                </div>
                <div class="d-flex justify-content-center gap-4">
                    <button type="submit" class="btn btn-primary px-5">Calculate</button>
                    <button type="button" onclick="clearResult()" class="btn btn-danger px-5">Reset All</button>
                </div>
            </form>
            <div id="ResultBox">
                <?php
                if (isset($_POST['price']) && isset($_POST['amount'])) {
                    $price = $_POST['price'];
                    $amount = $_POST['amount'];

                    if (is_numeric($price) && is_numeric($amount)) {
                        $price = floatval($price);
                        $amount = floatval($amount);
                        $total = $price * $amount;

                        //ตรวจสอบว่ามีการเลือกสมาชิกหรือไม่
                        if (isset($_POST['member']) && $_POST['member'] == '1') {
                            $totalpaid = $total - ($total * 0.1);
                        } else {
                            $totalpaid = floatval($total);
                        }

                        echo '<div class="card overflow-hidden w-50 mt-3 m-auto">';
                        echo '<div class="card-header bg-info text-light text-center p-1">';
                        echo '<h4>Show Result</h4>';
                        echo '</div>';
                        echo '<div class="card-body text-start">';
                        echo '<p>Price of Product: <b>' . number_format($price, 2) . '</b></p>';
                        echo '<hr class="my-2">';
                        echo '<p>Amount of Product: <b>' . number_format($amount, 2) . '</b></p>';
                        if ($_POST['member'] == '1') {
                            echo '<hr class="my-2">';
                            echo '<p class="text-success">Discount: <b>' . number_format($total - $totalpaid, 2) . '</b></p>';
                        }
                        echo '<hr class="my-2">';
                        echo '<p>Total: <b>' . number_format($total, 2) . '</b></p>';
                        echo '<hr class="my-2">';
                        echo '<p class="text-primary">Total Paid: <b>' . number_format($totalpaid, 2) . '</b></p>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo '<div class="card w-50 my-3 m-auto alert alert-danger text-center p-3">Please input valid numeric value for Price or Amount</div>';
                        // exit();
                    }
                } else {
                    echo '<div class="card w-50 my-3 m-auto alert alert-secondary text-center p-3">Please input Price and Amount</div>';
                    // exit();
                }
                ?>
            </div>
        </div>
        <hr>
        <a href="index.php">Back to Home</a>
    </div>
    </div>
    <script>
        function clearResult() {
            document.getElementById('ResultBox').innerHTML = '';
            document.getElementById('price').value = '';
            document.getElementById('amount').value = '';
            document.getElementById('member').checked = false;
            document.getElementById('notmember').checked = false;
        }
    </script>
</body>

</html>