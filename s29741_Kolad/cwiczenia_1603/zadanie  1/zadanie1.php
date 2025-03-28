<?php
if($_POST){
    $num1 = $_POST['firstNum'];
    $num2 = $_POST['secondNum'];
    $operation = $_POST['operation'];

    if(is_numeric($num1) && is_numeric($num2)){
        switch($operation){
            case "add":
                $result = $num1+$num2;
                break;
            case "sub":
                $result = $num1-$num2;
                break;
            case "mul":
                $result = $num1*$num2;
                break;
            case "div":
                if($num2 == 0){
                    $result = "Dividing by 0 not allowed.";
                }else {
                    $result = $num1/$num2;
                }
                break;
        }
    }else{
        $result = "Please enter a valid numbers.";
    }


}

?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 1</title>
    <link rel="stylesheet" href="./style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
<div class="divBox">
    <div class="innerDiv">
        <?php if (isset($result)) { ?>
        <h3><?php echo $result; ?></h3>
        <?php } ?>
    </div>
</div>
<form action="zadanie1.php" method="POST" name="calculator" class="btnBox">
    <div class="labelBox">
        <label for="firstNum">First number</label>
        <input id="firstNum" name="firstNum" type="number" class="divBtn" required>
    </div>
    <div class="labelBox">
        <label for="secondNum">Second number</label>
        <input id="secondNum" name="secondNum" type="number" class="divBtn" required>
    </div>
    <div class="labelBox">
        <label for="secondNum">Operation
            <select name="operation" id="operation" class="divBtn">
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="div">/</option>
                <option value="mul">*</option>
            </select>
        </label>
    </div>
    <div class="labelBox">
        <input type="submit" value="Submit" id="submitCalc" class="divBtn submitCalc">
    </div>
</form>
</body>

</html>

