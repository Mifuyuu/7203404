<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
    <style>
        * {
            /* margin: 0; */
            /* padding: 0; */
            /* box-sizing: border-box; */
            font-family: sans-serif;
        }
        h1 {
            color: #333;
            /* text-align: center; */
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
    </style>
</head>
<body>
<h1>Introduction to PHP</h1>
<p>This is a simple PHP application</p>
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
    <h2>My Menu</h2>
    <ul>
        <li><a href="W01-01-IntroPHP.php">Intro PHP</a></li>
        <li><a href="W02_01_oddEvenNumber.php">Odd-Even-Number</a></li>
        <li><a href="W02_02_grade.php">Calculate Grade</a></li>
    </ul>
</html>
</body>