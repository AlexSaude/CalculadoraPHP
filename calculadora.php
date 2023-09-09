<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<body>
    <form action="" method="post">
        Digite o seu primeiro Numero:<br>
        <input type=" text" name="num1"><br><br>
        Digite o seu segundo Numero:<br>
        <input type=" text" name="num2">
        <input type="submit" name="operacao" value="+">
        <input type="submit" name="operacao" value="-">
        <input type="submit" name="operacao" value="*">
        <input type="submit" name="operacao" value="/">
    </form>

    <?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $op = $_POST['operacao'];

    if(!empty($op)){
        if($op == '+'){
            $c = $a + $b;
        }
        else if($op == '-'){
            $c = $a - $b;
        }
        else if($op == '*'){
            $c = $a * $b;
        }
        else if($op == '/'){
            $c = $a / $b;
        }
            echo("O resultado da operação é: $c");
    }

    ?>
    
</body>
</html>
