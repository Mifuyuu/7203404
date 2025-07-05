<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oddEvenNumber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="container-fluid text-center">
            <h1>Odd Even Number Checker</h1>
            <hr>
            <p>Please enter a number to check if it is odd or even.</p>
            <form action="" method="post">
                <div class="form-group mb-3 d-flex">
                    <input type="number" class="form-control text-center w-50 m-auto" id="number" name="number" placeholder="Enter a number" required>
                </div>
                <button type="submit" class="btn btn-primary px-5">DONE</button>
            </form>
            <?php
            $Number = $_POST['number'] ?? null;
            
            if ($Number % 2 == 0) {
                echo "<h3 class='text-success'>$Number This is an even number</h3>";
            } else {
                echo "<h3 class='text-danger'>$Number This is an odd number</h3>";
            }
            ?>
        </div>
    <hr>
    <a href="index.php">Back to Home</a>
    </div>
</body>
</html>