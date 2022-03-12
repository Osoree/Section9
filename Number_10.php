<?php
//Создать массив
$months=array(
    'Январь'=>31,
    'Февраль'=>'28 дней, если високосный год 29',
    'Март'=>31,
    'Апрель'=>30,
    'Май'=>31,
    'Июнь'=>30,
    'Июль'=>31,
    'Август'=>31,
    'Сентябрь'=>30,
    'Октябрь'=>31,
    'Ноябрь'=>30,
    'Декабрь'=>31
);

//Определить функцию. Используйте встроенную строковую функцию, чтобы сделать каждую опцию прописной.
// Не забывайте закомментировать кавычки в вашем HTML.
function option($str){
    echo "<option value=\"$str\">" .ucfirst($str). "</option>\n";
}

//Если форма не отправлена, показать форму
if(!isset ($_POST['submit'])){
    ?>
    <form method="post" action="yourfile.php">
        <p>Выберите месяц</p>
        <select name="month">
            <?php
            //Создаем параметры, используя массив и функцию
            foreach ($months as $k => $v){
                option($k);
            }
            ?>
        </select>
        <input type="submit" name="submit" value="Выполнить" />
    </form>
    <?php
//Если форма отправлена, ответьте пользователю
} else {
//Получение пользовательского ввода
    $month = $_POST['month'];
//Разрешить февраль с использованием условного оператора
    if ($month == 'Февраль'){
        echo "Месяц Февраль имеет " . $months['Февраль'] . ".";
    }else{
        echo "Месяц $month имеет $months[$month] дней.";
    }
}
?>
