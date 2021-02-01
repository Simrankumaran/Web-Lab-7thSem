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
    <?php 
        $states = "Mississippi Alabama Texas Massachusetts Kansas";
        $statesArray=[];
        $states1=explode(" ",$states);

        echo "Original Array:<br>";
        foreach ($states1 as $i=> $value)
            print("STATES[$i]=$value<br>");
        
        foreach($states1 as $state){
            //ends with xas
            if(preg_match("/xas$/",$state)){
                $statesArray[0]=$state;
            }
            //starts with K and ends with s
            if(preg_match("/^K.*s$/",$state)){
                $statesArray[1]=$state;
            }
            //starts with M and ends with s
            if(preg_match("/^M.*s$/",$state)){
                $statesArray[2]=$state;
            }
            //ends with a
            if(preg_match("/a$/",$state)){
                $statesArray[3]=$state;
            }
        }
        ksort($statesArray);

        echo "Sorted Array:<br>";
        foreach($statesArray as $array=> $value)
            print("STATES[$array]=$value<br>");

    ?>
</body>
</html>
