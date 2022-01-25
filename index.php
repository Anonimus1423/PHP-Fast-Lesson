<?php // session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Write php code -->
    <?php ?>
    
    <!-- Write text code -->
    <?php echo "Hello world"; ?>

    <!-- vars -->
    <?php
        $intager = 45;
        $intager = 5;
        echo $intager;

        $num = 10;
        $num = 0.4;

        $str = "Hello";

        $bool = true;

        $a = 0.5;
        $b = "0.5";
        echo $a + $b; // 1
    ?>

    <!-- Add Php var -->
    <?= $intager; ?>

    <!-- Math -->
    <?php 
        $num1 = 5;
        $num2 = 10;
        
        echo $num1 + $num2;
        echo $num1 - $num2;
        echo $num1 * $num2;
        echo $num1 / $num2;
        echo $num1 % $num2;

        $num1 += 1;
        $num1 *= 2;
        $num1++;

        // Pi
        echo M_PI;
        echo M_E;

        echo abs(-22); // 22

        echo ceil(0.2); // 1

        echo round(0.2); // 0
        echo round(0.2235, 2); // 0.22

        echo mt_rand(0, 10); // rand 0 - 10

        echo min(5, 4); // 4
        echo max(5, 4); // 5
    ?>

    <!-- Concat -->
    <?php
        echo "Hi!" . $intager . $num
    ?>

    <!-- String -->
    <?php
        $str = "Hellow";
        echo "Var: $str" . 'world';

        // get string length
        echo strlen($str);

        // trim probels
        echo trim($str);

        echo strtolower($str);
        echo strtoupper($str);

        // Hash Passwords
        echo md5($str);
    ?>

    <!-- Operatorner -->
    <?php 
        $a = 5;

        // Jsi pes
        if($a == 5)
        {
            echo "Hi!";
        }
        if($a == 5)
            echo "Hi!";
        else
            echo "bye";

        // Switch case eli jsi nman
    ?>

    <!-- Massiv -->
    <?php 
        $numbers = array(4, 5, 7, 12, -5);
        $numbers[0] = 10;
        echo $numbers[0];

        $arr = [4, 5, 6, 0.4, "string", true];

        // Object
        $list = ["age" => 50, 2 => "alex"];
        echo $list["age"];

        // Matric
        $matrix = [[0,"Hi",0], [1,1,1]];
        echo $matrix[0][1];

        // Massivi elementneri chape
        echo count($numbers);
    ?>

    <!-- Cikli -->
    <?php 
        // while, dowhile nuyne
        for($i = 0; $i < 10; $i++)
        {
            echo $i;
            // continue
            // breack
        }

        foreach ($list as $item => $value)
        {
            echo $item." ".$value;
        }
    ?>

    <!-- Functions -->
    <?php
        // Js i nman
        function info($word)
        {
            // Vercnum a global vare
            global $item;

            // pahuma meje
            static $item;
            echo "info".$word;
        } 
        info("Hi");
    ?>

    <!-- Append PHP Files -->
    <?php 
        $text = "Hello World!";
        require "footer.php"; // ete sxal lini chi ani vochmiban sranic heto
        include "footer.php"; // ete sxal lini ksharunaki ughaki
        require_once "footer.php"; // mi angam karogh enq oogtagorcel 
        include_once "footer.php"; // mi angam karogh enq oogtagorcel
    ?>

    <!-- Print R to show object -->
    <?php 
        print_r($list)
    ?>

    <!-- Forms -->
    <?php 
        require "form.php";
        print_r($_POST); // cuyc a talis formayi sagh valuenere
        print_r($_GET); // cuyc a talis formayi sagh valuenere
    ?>

    <!-- Change Location -->
    <?php 
        // header("Location: https://www.google.com/");
        // exit; // prcnum a kode
    ?>

    <!-- Date -->
    <?php
        // get chars https://www.php.net/manual/ru/datetime.format.php
        echo date('m-l H:i:s')."<br>"; 
        echo date('m-l H:i:s', time() + 100)."<br>"; 
        echo date('m-l H:i:s', strtotime("+1 Day +1 Hour -1 Minute"))."<br>"; 
        echo date('m-l H:i:s', strtotime("last Monday"))."<br>"; 
        echo time(); // nmana Date.now() in
    ?>

    <!-- Base functions -->
    <?php
        $list = [1, 2, 5, 1, 50, 8];

        unset($list[0]); // delate 0 element
        $list = array_values($list); // normilize indexes

        sort($list); // lowwer to upper
        sort($list); // upper to lowwer

        // shuffle($list) // random indexes

        echo in_array(3, $list); // exist 3 in $list?

        print_r(array_slice($list, 0, 3)); // take 0 - 3 elements

        // array_merge kpcnel erku arraynere

        print_r($list);

        $x = "10";
        echo gettype($x);
        echo is_numeric($x);
        echo is_array($x);

        $str = "Hellow,W,ordld";
        print_r(strpos($str, "ow")); // vortegha trvac texte

        $str = explode(",", $str); // ashxatum a js-i pes
        echo $str.implode(" | ", $str); // ashxatum a js-i pes
    ?>

    <!-- Files -->
    <?php 
        // bacel fayle ete chka steghcel
        $file = fopen("text.txt", "a");

        // Grel text meje
        fwrite($file, "Hello\nWorld");

        // pakel fayle
        fclose($file);


        $file = fopen("text.txt", "r");
        // Read file
        $content = fread($file, filesize("text.txt"));
        fclose($file);
        echo $content;

        // miangamic sraqel ev grel meje 
        file_put_contents("a.txt", "Hello World");

        // miangamic vercnel miji texte
        echo file_get_contents("a.txt");

        // ka te chka text 
        echo file_exists("a.txt");

        // poxel anune 
        rename("a.txt", "new_name.txt");

        // Jnjel 
        unlink("new_name.txt");

        // dostupe 
        // __FILE__ veradarcnum a es fayli pute
        echo fileperms(__FILE__);
        chmod(__FILE__, 0777);
    ?>

    <!-- PHP info -->
    <?php 
        // echo phpinfo();
    ?>

    <!-- Server  -->
    <?php 
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";

        // HTTP or HTTPS
        // echo $_SERVER["HTTPS"];

        // Get Host
        echo $_SERVER["HTTP_HOST"];

        // Get host right side
        echo $_SERVER["REQUEST_URI"];

        // System INfo 
        echo $_SERVER["HTTP_USER_AGENT"];
    ?>

    <!-- Send Message -->
    <?php 
        $message = "HI!";
        $to = "ararat.armenia.02@mail.ru";
        $from = "ararat.armenia.02@mail.ru";
        $subject = "PHP MESSAGE";

        // utf 8 sarqelu hamar 
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";

        $headers = "From: $from\r\n
                    Reply-to: $from\r\n
                    Content-type:text/plain; charset=utf-8\r\n";

        mail($to, $subject, $message, $headers);
    ?>

    <!-- Cookie -->
    <?php 
        $user_name = "Alex";
       
        // Sarqel 
        // mnum a 60 vayrkayn
        // setcookie("user_name", $user_name, time() + 60);

        // Stanal
        // print_r($_COOKIE);

        // jnjel
        // setcookie("user_name", $user_name, time() - 180);

        // session_start(); // start session in up

        // $_SESSION["user_name"] = $user_name;
        // unset($_SESSION["user_name"]);
        // echo $_SESSION["user_name"];
        // session_destroy()
    ?>

    <!-- Other -->
    <?php
        // htmlspecialchars(""); //jnjum a html tegere
    ?>
</body>
</html>