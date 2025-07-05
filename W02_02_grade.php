<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="container-fluid text-center">
            <h1>PHP Check Grade A-E from Score</h1>
            <hr>
            <p>กรุณากรอกคะแนนเพื่อตรวจสอบว่าได้เกรดอะไร</p>
            <form action="" method="post">
                <div class="form-group mb-3 d-flex">
                    <input type="number" class="form-control text-center w-50 m-auto"
                    id="score" name="score"
                    value="<?php echo isset($_POST['score']) ? $_POST['score'] : ''; ?>" placeholder="Enter a Score" required>
                </div>
            <button type="submit" class="btn btn-primary px-5">DONE</button>
            <button type="button" onclick="clearGrade()" class="btn btn-danger px-5">RESET</button>
            </form>

            <div id="grade">
            <?php
            $get_score = $_POST['score'] ?? null;

            if ($get_score>=0 && $get_score<= 100) {
            if ($get_score >= 80) {
                echo "<h3 class='text-success' id='grade'>Your Grade is A</h3>";
            } else if ($get_score >= 70) {
                echo "<h3 class='text-success' id='grade'>Your Grade is B</h3>";
            } else if ($get_score >= 60) {
                echo "<h3 class='text-success' id='grade'>Your Grade is C</h3>";
            } else if ($get_score >= 50) {
                echo "<h3 class='text-success' id='grade'>Your Grade is D</h3>";
            } else if ($get_score >= 0) {
                echo "<h3 class='text-success' id='grade'>Your Grade is E</h3>";
            } 
        } else {
                echo "<h3 class='text-danger' id='grade'>Your Score is Invalid</h3>";
            }
            ?>
            </div>
        </div>
        <hr>
        <a href="index.php">Back to Home</a>
    </div>
    <script>
        // ฟังก์ชันสำหรับล้างผลลัพธ์เกรดและช่องกรอกคะแนน
        function clearGrade() {
            document.getElementById('grade').innerHTML = '';
            document.getElementById('score').value = '';
        }  
</script>
</body>
</html>