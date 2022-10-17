<html>

<body style="padding: 20px;">
    <a style="text-decoration: none; border: 1px solid black; padding: 10px;" href='index.php?roll=true'>Кинути кубік</a>
    <a style="text-decoration: none; border: 1px solid black; padding: 10px;" href='index.php'>Очистити сторінку</a><br>


    <?php
    function diceRoll()
    {
        $diceOne = mt_rand(1, 6);
        $diceTwo = mt_rand(1, 6);
        return $diceOne + $diceTwo;
    }
    if (isset($_GET['roll'])) {
        $human = diceRoll();
        $robot = diceRoll();
        $win = $human === $robot ? 'Перемогла дружба!!!' : ($human > $robot ? 'Ви перемогли' : 'Робот переміг');
        echo "<div>
            <p>Випало вам $human</p>
            <p>Випало роботу $robot</p>
            <p>Результат: $win</p>
        </div>";
    }
    ?>

</body>

</html>