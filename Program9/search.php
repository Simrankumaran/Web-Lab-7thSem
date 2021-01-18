<!DOCTYPE html>
<html>
<head>
    <title>Search </title>
    <style>
        body {
            background-color: #F4FF81;
            color: #00080f;
            margin: 30px;
        }
        #calculator {
            margin: 20px;
            padding: 20px;

            float: center;
            border: thin solid black;
        }
    </style>
</head>
<body>
    <h1> Search in states</h1>
    <?php include("states.php");
        echo "<hr />";
        // search for word ending in xas
        preg_match( '/\b (\w*xas) \b/', $states, $match);
        $statesList[0] = $match[0];
        preg_match('/\b(k\w*s)\b/i', $states,$match);
        $statesList[1] = $match[0];
        preg_match('/\b(M\w*s)\b/', $states,$match);
        $statesList[2] = $match[0];
        preg_match('/\b(\w*a)\b/', $states,$match);
        $statesList[3] = $match[0];
        list($a, $b, $c, $d) = $statesList;
        echo "<h4> State ending in xas </h4>";
        echo $a;
        echo "<h4> State beginning with k and ending in s -case insensitive </h4>";
        echo $b;
        echo "<h4> State beginning with M and ending in s</h4>";
        echo $c;
        echo "<h4> State ending with a</h4>";
        echo $d;
    ?>
</body>
</html>
