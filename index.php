<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro PHP</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #f0f0f0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        header {
            text-align: center;
            margin-bottom: 3rem;
        }

        header h1 {
            font-size: 2.2rem;
            font-weight: 500;
            color: #f0f0f0;
        }

        header p {
            color: #aaa;
            font-size: 1.1rem;
        }

        section {
            margin-bottom: 3rem;
            border-top: 1px solid #444;
            padding-top: 2rem;
        }

        h2 {
            font-size: 1.8rem;
            font-weight: 500;
            color: #9b59b6; /* Accent color */
            margin-bottom: 1rem;
            border: none;
            padding: 0;
        }

        h3 {
            font-size: 1.4rem;
            font-weight: 500;
            margin-top: 1.5rem;
            margin-bottom: 0.5rem;
        }

        pre, .result-box {
            background: #252525;
            padding: 1rem;
            border-radius: 4px;
            border: 1px solid #444;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        pre {
            color: #a6e22e;
            font-family: 'Menlo', 'Consolas', 'Monaco', monospace;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 0.5rem;
        }

        ul li a {
            color: #f0f0f0;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.2s ease;
        }

        ul li a:hover {
            color: #9b59b6;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Introduction to PHP</h1>
        <p>A journey into server-side scripting</p>
    </header>

    <main>
        <section>
            <h2>Basic PHP Syntax</h2>
            <pre>
&lt;?php
    echo "Hello, My name is Seksun Hlamwanna!&lt;br&gt;";
    print "Coding is a Magic!&lt;br&gt;";
?&gt;</pre>
            <h3>Result</h3>
            <div class="result-box">
                <?php
                echo "Hello, My name is Seksun Hlamwanna!<br>";
                print "<span style='color:#9b59b6;'>Coding is a Magic!</span><br>";
                ?>
            </div>
        </section>

        <section>
            <h2>My Menu</h2>
            <ul>
                <li><a href="W01-01-IntroPHP.php">Intro PHP</a></li>
                <li><a href="W02_01_oddEvenNumber.php">Odd-Even-Number</a></li>
                <li><a href="W02_02_grade.php">Calculate Grade</a></li>
                <li><a href="W02_H01_CalculateMoney.php">Calculate Money</a></li>
                <li><a href="W06_01_LoopProduct.php">Show Product (fix data)</a></li>
                <li><a href="W07_01_ConnectDB.php">Connect Database</a></li>
                <li><a href="W07_02_FetchData.php">Fetch Data</a></li>
                <li><a href="W08_01_ProductFromDB.php">Show Product (From Database)</a></li>
            </ul>
        </section>
    </main>

</body>
</html>