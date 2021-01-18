<!DOCTYPE html >
<html>
<head >
<title>PHP Simple Calculator, Matrix operations </title>
<style>
    body{
        background-color: #FFF8DA;
        color:#806E21;
        margin: 30px;
    }
    #calculator{
        margin: 20px;
        padding: 20px;
        float: center;
        border: thin solid black;
    }
</style>
</head>
<body>
    <h1> PHP Simple Calculator, Matrix operations</h1>
    <div id ="calculator">
        <h3> Simple Calculator</h3>
        <form method = "get" action ="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="num1" placeholder="Number 1" />
            <input type="text" name="num2" placeholder="Number 2" />
            <select name="operator">
                <option value = "+">Add</option>
                <option value ="-">Subtract</option>
                <option value ="*">Multiply</option>
                <option value ="/">Divide<option>
            </select>
            <input type="submit" name="submit" value = "Calculate" />
        </form>
        <?php
            if(isset($_GET['submit'])){
                $n1= $_GET['num1']; $n2 = $_GET['num2'];
                $op = $_GET["operator"];
                if(is_numeric($n1) && is_numeric($n2) ){
                    $result = eval("return $n1 $op $n2;");
                }
                else
                    $result = "undefined";

                echo "<p> The result is : $result</p>";
            }
        ?>
    </div>
    <div>
        <h2> Matrix Operations</h2>
        <ul>
            <li> <a href="matTranspose.php">Transpose of a matrixx</a></li>
            <li> <a href="matAM.php?op=mult">Multiply 2 Matrices</a></li>
            <li> <a href="matAM.php?op=add">Add 2 Matrices</a></li>
        </ul>
    </div>
</body>
</html>
