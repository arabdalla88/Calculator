
   
            



    <?php

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $process = $_POST['process'];


    if ($process == "+") {
        echo "<p>Result : </p> 
        <div style='width: 100px ; hight: 50px ; border: blue 3px solid ; background-color: lightblue' >"
            . $num1 + $num2 .
            "</div>";
    } elseif ($process == "-") {
        echo "<p>Result : </p> 
        <div style='width: 100px ; hight: 50px ; border: blue 3px solid ; background-color: lightblue' >"
            . $num1 - $num2 .
            "</div>";
    } elseif ($process == "*") {
        echo "<p>Result : </p> 
        <div style='width: 100px ; hight: 50px ; border: blue 3px solid ; background-color: lightblue' >"
            . $num1 * $num2 .
            "</div>";
    } elseif ($process == "/") {
        echo "<p>Result : </p> 
        <div style='width: 100px ; hight: 50px ; border: blue 3px solid ; background-color: lightblue' >"
            . $num1 / $num2 .
            "</div>";
    }elseif ($process == "%") {
        echo "<p>Result : </p> 
        <div style='width: 100px ; hight: 50px ; border: blue 3px solid ; background-color: lightblue' >"
            . $num1 % $num2 .
            "</div>";
    }

includ("index.html")
    ?>
    