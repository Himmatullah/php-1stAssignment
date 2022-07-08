<?php
    function compute(){
        $num1 = $_POST['FirstNum'];
        $num2 = $_POST['SecondNum'];
        
        switch($_POST['dropdown']){
            case "Addition":
                $sum = $num1 + $num2;
                return $sum;
                break;
                
            case "Subtraction":
                $diff = $num1 - $num2;
                return $diff;
                break;
            case "Multiplication":
                $prod = $num1 * $num2;
                return $prod;
                break;
                        
            case "Division":
                $qou = $num1 / $num2;
                return $qou;
                break;
            default:
                echo "Invalid Operation";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Himmatullah Ferozee</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Select an operation</label>
        <select name="dropdown">
            <option></option>
            <option value="Addition">Addition</option>
            <option value="Subtraction">Subtraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select><br><br>
        Enter the first number: <input type="number" name="FirstNum" required><br>
        Enter the Second number: <input type="number" name="SecondNum" required><br>
        <input type="submit" value="Show Result"><br>
        <input type="text" value="<?php echo compute();?>">
    </form>
</body>
</html>
