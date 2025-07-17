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
    echo "<span style='color:blue';>" . $greeting . "</span><br>";
    ?>
    <hr>
    <h3>Integer Variables Example</h3>
    <?php
    $age = 22;
    echo "<span style='color:blue;'>I am " . $age . " years old.</span><br>";
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
    for ($I = 5; $I <= 9; $I++) {
        echo "$I ";
        if ($I < 9) {
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
    while ($II <= 12) { //เงื่อนไข
        echo "2 x $II = " . (2 * $II) . "<br>";
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
        for ($num = 1; $num <= 12; $num++) {
            echo "
        <tr>
            <td>$num</td>
            <td>$Mom x $num</td>",
            "<td>" . ($Mom * $num) . "</td>
        </tr>";
        }
        ?>
    </table>
    <!-- ======================================================== -->

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
    <hr>
    <?php
    $fruits = ['appLe', 'banaNa', 'orAnge', 'watermeloN', 'Durian'];
    ?>
    <h3>แสดงรายการผลไม้ โดยใช้ index</h3>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        echo $fruits[0] . "<br>";
        echo $fruits[1] . "<br>";
        echo $fruits[2] . "<br>";
        echo $fruits[3] . "<br>";
        echo $fruits[4] . "<br>";
        ?>
    </div>
    <br>
    <div style="color:red; background-color: lightgray; padding: 10px;">
        <?php
        echo 'รายการผลไม้: <br>';
        echo 'ผลไม้ที่ 1: ' . $fruits[0] . "<br>";
        echo 'ผลไม้ที่ 2: ' . $fruits[1] . "<br>";
        echo 'ผลไม้ที่ 3: ' . $fruits[2] . "<br>";
        echo 'ผลไม้ที่ 4: ' . $fruits[3] . "<br>";
        echo 'ผลไม้ที่ 5: ' . $fruits[4] . "<br>";

        ?>
    </div>
    <br>
    <h3>แสดงรายการผลไม้ โดยใช้ print readable</h3>
    <div style="color:red; background-color: lightgray; padding: 10px;">
        <?php
        print_r($fruits);
        ?>
    </div>
    <br>
    <h3>แสดงจำนวนสมาชิกในอาเรย์</h3>
    <div style="color:red; background-color: lightgray; padding: 10px;">
        <?php
        echo "จํานวนผลไม้: " . count($fruits) . " ชนิด<br>";
        ?>
    </div>
    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
        // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
        echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
        echo "<br>";
        ?>
    </div>
    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
        foreach ($fruits as $fruit) {
            echo 'ผลไม้: ' . $fruit . "<br>";
        }
        echo "<br>";
        ?>
    </div>
    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        echo "รายการผลไม้: ";
        foreach ($fruits as $fruit) {
            if ($fruit === end($fruits)) {
                echo $fruit;
            } else {
                echo $fruit . ', ';
            }
        }
        echo "<br>";
        ?>
    </div>
    <!-- ======================================================== -->

    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 2: Associative Array</h2>
    <h6>เป็น array ซ้อนกันหลายชุด (Multidimensional array)</h6>
    <h6>แต่ละชุดเป็น associative array ที่ระบุชื่อ key ชัดเจน เช่น "name" และ "price"</h6>
    <h6>ใช้สำหรับเก็บข้อมูลที่มีความสัมพันธ์กัน key => value เช่น รายการสินค้า</h6>


    <?php
    // สร้างอาเรย์ของผลไม้ที่มีชื่อและราคา
    $products = [
        ["name" => "Apple", "price" => 30],
        ["name" => "Banana", "price" => 20],
        ["name" => "Cherry", "price" => 15]
    ];
    ?>
    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        // แสดงผลลัพธ์ของการเข้าถึงข้อมูลในอาเรย์
        echo $products[0]["name"] . "<br>";  // Apple
        echo $products[2]["price"] . "<br>"; // 15


        ?>
    </div>
    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการสินค้า ด้วยคำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
        foreach ($products as $product) {
            echo 'สินค้า: ' . $product["name"] . " ราคา: " . $product["price"] . " บาท <br>";
            $total += $product["price"];
        }
        echo "<br>";
        echo "ราคารวมของผลไม้ทั้งหมด: " . $total . " บาท";
        ?>
    </div>
</body>

</html>