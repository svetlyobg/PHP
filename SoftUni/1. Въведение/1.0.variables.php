<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    #https://softuni.bg/trainings/resources/video/1236/video-vyvedenie-v-php-chast-i-php-mysql-jun-2014
        $person = "Batman";
        $quality = "Awsome";
        echo "$person is $quality";
        echo "<br /> \n";
        echo "<br /> \n";

        $person1 = "Robin";
        $quality1 = "Minion";
        $person2 = "Cat Woman";
        $quality2 = "Sexy";

        $personQualities = array(
          $person1 => $quality1,
          $person2 => $quality2
        );

        print_r($personQualities);
        echo "<br /> \n";
        echo "<br /> \n";
        var_dump($personQualities);
        echo "<br /> \n";
        echo "<br /> \n";
        echo $personQualities['Cat Woman'];

    ?>
</body>
</html>
