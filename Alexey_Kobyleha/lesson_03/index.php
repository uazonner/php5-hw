<!--Task 1-->

<h3>Task 1</h3>

<?php

$age = 28;

if ($age > 18 && $age <= 59) {
    echo "Вам еще работать и работать";
} elseif ($age > 59) {
    echo "Вам пора на пенсию";
} elseif ($age > 1 && $age <= 17) {
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}

?>