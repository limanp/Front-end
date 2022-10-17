<html>
    <body style="padding: 20px;">
      <a style="text-decoration: none; border: 1px solid black; padding: 10px;" 
      href='index.php?roll=true'>Кинути кубік</a><br><br>
      
    </body>
    <?php 
        function diceRoll() {
            $dice = mt_rand(1, 6);
            echo "Виводимо кубік...\n
            Випало число $dice";
        }
        if(isset($_GET['roll'])) {
            diceRoll();
        }
    ?>
</html>
