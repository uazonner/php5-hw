<!--Task 1
Используя цикл for вывести в столбик нечетные числа от 1 до 50-->

<h3>Task 1</h3>

<?php
for ($i = 0; $i <= 50; $i++) {
    if ($i%2!=0) {
        echo "$i <br> \n";
    }
}
?>