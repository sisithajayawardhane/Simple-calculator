<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Result</title>
</head>
<body>
<?php
    $num1=$_GET['number_1'];
    $num2=$_GET['number_2'];
    $num1=$num1+0;
    $num2=$num2+0;
    $opr=$_GET['symbol'];
    if($opr==' '){
        $opr='+';
    }
    switch($opr){
        case '+':
            $anw=$num1+$num2;
            break;
        case '-':
            $anw=$num1-$num2;
            break;
        case '*':
            $anw=$num1*$num2;
            break;
        case '/':
            $anw=$num1/$num2;
            break;        
    }
    if($opr=='*'){
        $opr='&times;';
    }
    if($opr=='/'){
        $opr='&#247;';
    }
    
    ?>   
<script> src="script.js" </script>
    <div id="box">
        <div id="value"><?php echo $anw ?></div>
        <div id="history"><?php echo '='.$num1.$opr.$num2 ?></div>
        <button id="ab"><a  id="ab" href="index.php">Back</a></button>
    </div>
    
    <script src="script.js" > </script>
    
</body>
</html>