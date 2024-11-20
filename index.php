<?php
if (isset($_POST['color'])) {
    $color = $_POST['color']; //اللون الى المستخدم حدده
    setcookie('background_color', $color, time() + (86400 * 30), "/");//الفتره  
    $_COOKIE['background_color'] = $color; //تغيير اللون
}
$background_color = isset($_COOKIE['background_color']) ? $_COOKIE['background_color'] : 'white';//قيمة الاساسية
?>

<!DOCTYPE html>
<html>
<head>
    <title>exam</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 30px; height: 30px; }
    </style>
</head>
<body style="background-color: <?php echo $background_color; ?>;">
    <!-- 11-cookie to change background color -->
    
    <br>
    <br>
<form method="post" action="">
    <label for="color">Choose a background color:</label>
    <select name="color" id="color">
        <option value="white" <?php if ($background_color == 'white') echo 'selected'; ?>>White</option>
        <option value="red" <?php if ($background_color == 'red') echo 'selected'; ?>>Red</option>
        <option value="green" <?php if ($background_color == 'green') echo 'selected'; ?>>Green</option>
        <option value="blue" <?php if ($background_color == 'blue') echo 'selected'; ?>>Blue</option>
        <option value="yellow" <?php if ($background_color == 'yellow') echo 'selected'; ?>>Yellow</option>
    </select>
    <input type="submit" value="Change Color">
</form>
<!-- 1- chessboard -->
 <br>
 <br>
 <br>
<h1> chessboard</h1>
    <table border="1">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo "<td bgcolor='#FFFFFF'></td>";
                } else {
                    echo "<td bgcolor='#000000'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
       
    </table>
    <br>
    
    <br>

<?php
// 2- shape
echo"<br> <hr> <br>";
echo "shape :";
echo "<br> <br>";
function shape($n) {
    
    for ($i = 1; $i <= $n; $i++) {
        for ($j = $i; $j < $n; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }
        echo "<br>";
    }
  
    for ($i = $n - 1; $i >= 1; $i--) {
        for ($j = $n; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j <= (2 * $i - 1); $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
$n = 5; 
shape($n);

echo "<br>";

function shape2($n) {
   
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

$n = 5;
shape2($n);
echo "<br>";

function shape3($n) {
  
    for ($i = 1; $i <= $n; $i += 2) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }

    for ($i = $n - 2; $i >= 1; $i -= 2) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}


$n = 5; 
shape3($n);

echo "<br><hr>";
echo "<br>";
// 3-sort
function count_array($arr)
 {
     $count = 0;
      foreach ($arr as $element) 
      {
         $count++;
      }
       return $count;
    }
    echo "Asc sort :";
    echo "<br> <br>";
function Asc($array) {
    $n = count_array($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$Asc = Asc($array);
print_r($Asc);

echo"<br> <hr> <br>";
echo "Desc sort :";
echo "<br> <br>";
function Desc($array) {
    $n = count_array($array);
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array;
}

$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];
$Desc = Desc($array);
print_r($Desc);

echo"<br> <hr> <br>";
echo "Average  :";
echo "<br> <br>";


function Average($numbers) {
    $sum = array_sum($numbers);
    $count = count($numbers);
    $average = $sum / $count;
    return $average;
}

$numbers = [10, 20, 30, 40, 50];
$average = Average($numbers);
echo "The average is: " . $average;
echo"<br> <hr> <br>";
echo "del even  :";
echo "<br> <br>";
function filter($arr) {
    $filtered_arr = array();
    foreach ($arr as $num) {
        if ($num % 2 != 0) {
            $filtered_arr[] = $num;
        }
    }
    return $filtered_arr;
}
$array = array(2, 4, 3, 1, 6, 7, 5, 8, 0, 9);
$result = filter($array);
print_r($result);
echo"<br> <hr> <br>";
echo "max number  :";
echo "<br> <br>";
function find_max_number($arr) {
    $max = $arr[0];
    if ($arr[1] > $max) {
        $max = $arr[1];
    }
    if ($arr[2] > $max) {
        $max = $arr[2];
    }
    return $max;
}

$array = array(10, 30, 20);
$max_number = find_max_number($array);
echo "The maximum number is: " . $max_number;
echo"<br> <hr> <br>";
echo "increment date by one month  :";
echo "<br> <br>";
function increment($date) {
    $date_obj = new DateTime($date);
    $date_obj->modify('+1 month');
    return $date_obj->format('Y-m-d');
}

$sample_date = '2012-12-21';
$new_date = increment($sample_date);
echo "New date after incrementing by one month: " . $new_date;
echo"<br> <hr> <br>";
echo "previous month  :";
echo "<br> <br>";
function previous_month() {
    $current_month = date('n');
    $previous_month = $current_month - 1;
    if ($previous_month == 0) {
        $previous_month = 12;
    }
    return $previous_month;
}

$previous_month_number = previous_month();
echo "previous month number is: " . $previous_month_number;
echo"<br> <hr> <br>";
echo "contains string  :";
echo "<br> <br>";
function contains_string($main_string, $search_string) {
    return preg_match("/$search_string/", $main_string);
}


$main_string = "Hello, world!";
$search_string = "world";
if (contains_string($main_string, $search_string)) {
    echo "The string '$search_string' was found in '$main_string'.";
} else {
    echo "The string '$search_string' was not found in '$main_string'.";
}
echo"<br> <hr> <br>";
echo "check whether a number is prime or not.   :";
echo "<br> <br>";
function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 29;
if (is_prime($number)) {
    echo $number . " is a prime number.";
} else {
    echo $number . " is not a prime number.";
}
echo "<br> <hr> <br>";
?>

</body>
</html>