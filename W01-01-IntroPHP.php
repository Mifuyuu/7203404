<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        * {
            /* margin: 0; */
            /* padding: 0; */
            /* box-sizing: border-box; */
            font-family: sans-serif;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        h2 {
            color: red;
        }
        h3 {
            font-size: 24px;
        }
        hr {
            border: 1px solid black;
            box-shadow: none;
        }
        /* table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px 16px;
            text-align: center;
        }
        th {
            background-color: #333;
            color: #fff;
        }
        tr {
            background-color: #f2f2f2;
        } */
    </style>
</head>

<body>
    <h1>Introduction to PHP</h1>
    <hr>
    <h2>Basic PHP Syntax</h2>
    <pre>
        &lt;?php&gt;

        echo "Hello, My name is Seksun Hlamwanna!&lt;br&gt;";
        print "Coding is a Magic!&lt;br&gt;";

        ?>
    </pre>
    <h3>Result</h3>
    <div style="color:blue;">
        <?php
        echo "Hello, My name is Seksun Hlamwanna!<br>";
        print "<span style='color:purple'>Coding is a Magic!</span><br>";
        ?>
    </div>
    <hr>
    <h2>PHP Variables</h2>
    <pre>
        &lt;?php&gt;

        $greeting = "Hello, World!";
        echo "$greeting&lt;br&gt;";

        ?>
    </pre>
    <h3>Result</h3>
        <?php
        $greeting = "Hello, World!";
        echo "<span style='color:blue';>".$greeting."</span><br>";
        ?>
        <hr>
    <h3>Integer Variables Example</h3>
    <?php
    $age = 22;
    echo "<span style='color:blue;'>I am ".$age." years old.</span><br>";
    echo "<span style='color:blue;'>I am $age years old.</span><br>";
    ?>
    <hr>
    <h3>Calculate with Variables</h3>
    <?php
    $num1 = 5;
    $num2 = 4;
    $sum = $num1 + $num2;
    echo "<span style='color:blue;'>The sum of $num1 and $num2 is $sum.</span><br>";
    ?>
    <hr>
    <h3>คำนวณพื้นที่สามเหลี่ยม</h3>
    <?php
    $base = 10;
    $height = 5;
    $area = 0.5 * $base * $height;
    echo "<span style='color:blue;'>พื้นที่ของสามเหลี่ยมคือ $area ตารางหน่วย</span><br>";
    ?>
    <hr>
    <h3>คำนวณอายุจากปีเกิด</h3>
    <?php
    $birthYear = 2003;
    $currentYear = date("Y");
    $age = $currentYear - $birthYear;
    echo "<span style='color:blue;'>ฉันเกิดในปี $birthYear และปัจจุบันอายุของฉันคือ $age ปี</span><br>";
    ?>
    <hr>
    <h3 style="color:purple;">IF - Else</h3>
    <!-- เกณฑ์ผ่านการสอบ ต้องได้คะแนน มากกว่า  60  คะแนน -->
    <?php

    $score = 75;
     if ($score > 60) {
        echo "คะแนนของคุณคือ $score<br>";
        echo "<br>ผลลัพธ์ : สอบผ่าน";
        } else {
        echo "คะแนนของคุณคือ $score<br>";
        echo "ผลลัพธ์ : สอบไม่ผ่าน";
     }
    ?>
    <hr>
    <h3 style="color:purple;">Boolean Variables Example</h3>
    <!-- ตรวจสอบว่าเป็นนักศึกษาหรือไม่ -->
    <?php

    $isStudent = true;
    echo "<h4>คุณเป็นนักเรียนใช่หรือไม่?</h4>";
    if (!$isStudent) {
        echo "ใช่, คุณเป็นนักเรียน";
    } else {
        echo "<p style='color:red;'>ไม่ใช่, คุณไม่ใช่นักเรียน</p>";
    }
    
    ?>
    <hr>
    <h3 style="color:purple;">Loop Example</h3>
    <h2>===== Loop for =====</h2>
    <h3>แสดงตัวเลข 1 ถึง 10 พร้อมหาผลรวมของตัวเลข</h3>
    <?php
    $sum = 0;
    for ($I=5;$I<=9;$I++) {
        echo "$I ";
        if ($I <9) {
            echo " + ";
        }
        $sum += $I;
        }
        echo "= $sum";
    echo "<br>ผลบวกของตัวเลข 5 ถึง 9 คือ $sum<br>";
    ?>
    <!-- ===================== WHILE LOOP ===================== -->
    <h2>===== สูตรคุณ ไม่ใช่สูตรผม แม่ 2 =====</h2>
    <?php
    //ค่าเริ่มต้น
    $II = 1;
    while ($II<=12) { //เงื่อนไข
    echo "2 x $II = ".(2*$II)."<br>";
    //เพิ่ม,ลด ค่า
    $II++;
    }
    ?>
        ?>
    <!-- ===================== WHILE LOOP ===================== -->
    <h2>===== สูตรคุณ ไม่ใช่สูตรผม แม่ 2 (Table) =====</h2>
    <table class="table table-bordered table-striped w-auto m-auto text-center">
        <tr class="table-success">
            <th>ลำดับที่</th>
            <th>สูตรคูณ</th>
            <th>ผลลัพธ์</th>
        </tr>
        <?php
            $Mom = 2;
        for ($num=1;$num<=12;$num++) {
        echo "
        <tr>
            <td>$num</td>
            <td>$Mom x $num</td>",
            "<td>".($Mom*$num)."</td>
        </tr>";
        }
        ?>
    </table>
</body>

</html>