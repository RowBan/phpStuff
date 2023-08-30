<?php
include 'includes/autoloader.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script defer src="app.js"></script>
        <title></title>
    </head>
<body>
<header>
    <h1>This is a header a very long header</h1>
</header>
<sidebar>
    <ul class="leftEntry">
        <li>Home</li>
        <li>Test1</li>
    </ul>
</sidebar>
<main>
    <div class="container">
        <div class="leftEntry">
            <?php
            $url = $_SERVER['HTTP_POST'] . $_SERVER['REQUEST_URI'];
            echo $url . "<br>";
            ?>
        </div>
        <div class="rightEntry">
            <?php
            $person1 = new Person('Robert', 'Blue', 33);
            echo $person1->getName();
            echo "<br>";
            $person1->setName('David');
            echo $person1->getName();
            echo "<br>";

            $house = new House("Goodyear Street", "Red", 1987);
            echo $house->getAddress() . $house->getColor() . $house->yearBuilt;
            echo "<br>";
            ?>
            <div class="leftEntry">
                <form action="includes/calculatorS.php" method="post">
                    <p>My calc</p>
                    <label>
                        <input type="number" name="num1" aria-placeholder="#1">
                    </label>
                    <label>
                        <select name="operator">
                            <option value="add">Addition</option>
                            <option value="subtract">Subtract</option>
                            <option value="multiply">Multiply</option>
                            <option value="division">Division</option>
                        </select>
                    </label>
                    <label>
                        <input type="number" name="num2" aria-placeholder="#2">
                    </label>
                    <button type="submit" name="submit">Calculate</button>
                </form>
            </div>
        </div>
    </div>
        <div class="card-container">
            <div class="card">First card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
            <div class="card">Another card</div>
        </div>
</main>
</body>
</html>
