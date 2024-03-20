<?php
const FIRST_ANSWER = "paris";
const SECOND_ANSWERS = ["kiev", "berlin"];
const THIRD_ANSWER = "Мадрид";
// ^^^ для 5 завдання ^^^

// 1 завдання:
$name = "Name";
echo "1.<br>Hello! My name is '$name'<hr>".PHP_EOL;

// 2 завдання:
$age = 16;
echo "2.<br>I`m $age<hr>".PHP_EOL;

// 3 завдання:
$firstN = 70;
$secondN = 30;
$result = $firstN + $secondN;

echo "3.<br>$firstN + $secondN = $result<hr>".PHP_EOL;

// 4 завдання:
echo "4.<br><b>before swap:</b><br>firstN = $firstN<br>secondN = $secondN<br><br>".PHP_EOL;

list($firstN, $secondN) = array($secondN, $firstN);

echo "<b>after swap:</b><br>firstN = $firstN<br>secondN = $secondN<hr>";
?>

<!-- 5 завдання: -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- (a): -->
<form method="post">
    <p>5 (a).<br><b>Столиця Франції?</b></p>
    <input type="radio" id="paris" name="capital" value="paris">
    <label for="paris">Париж</label><br>
    <input type="radio" id="london" name="capital" value="london">
    <label for="london">Лонон</label><br>
    <input type="radio" id="berlin" name="capital" value="berlin">
    <label for="berlin">Берлін</label><br>
    <input type="radio" id="rome" name="capital" value="rome">
    <label for="rome">Рим</label><br><br>
    <input type="submit" name="submit1" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["capital"]) && isset($_POST["submit1"])) {
    echo $_POST["capital"] == FIRST_ANSWER ? "Правильно! - Париж" : "Неправильно";
}
?>
<hr>

<!-- (b): -->
<form method="post">
    <p>5 (b).<br><b>Оберіть правильні пари 'Країна - Столиця'</b></p>
    <input type="checkbox" id="ukraine" name="pair[]" value="kiev">
    <label for="ukraine">1. Україна - Київ</label><br>
    <input type="checkbox" id="usa" name="pair[]" value="new york">
    <label for="usa">2. США - Нью Йорк</label><br>
    <input type="checkbox" id="germany" name="pair[]" value="berlin">
    <label for="germany">3. Німеччина - Берлін</label><br>
    <input type="checkbox" id="italy" name="pair[]" value="monaco">
    <label for="italy">4. Італія - Монако</label><br><br>
    <input type="submit" name="submit2" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit2"]) && !empty($_POST["pair"])) {
    echo $_POST["pair"] == SECOND_ANSWERS ? "Правильно! - 1, 3" : "Неправильно.";
}
?>
<hr>

<!-- (c): -->
<form method="post">
    <p>5 (c).<br><b>Столиця Іспанії?</b></p>
    <label for="input">Введіть відповідь:</label><br>
    <input type="text" id="input" name="answer">
    <input type="submit" name="submit3" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit3"]) && !empty($_POST["answer"])) {
    echo $_POST["answer"] == THIRD_ANSWER ? "Правильно! - Мадрид" : "Непраильно.";
}
?>
<hr>

</body>
</html>

<!-- 6 завдання: -->
<?php
$tag = "p";

$backgroundColor = "Gray";
$color = "Black";
$width = "500";
$height = "20";

$text = "Text";

$style = "background-color: $backgroundColor; color: $color; width: $width; height: $height";

echo "<$tag style='$style'>$text</$tag>";