<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 1</title>
</head>
<body>
    <?php
        // 1
        // phpinfo();

        // 2
        function reversi(string $str) {
            $new_str = [];
            $len = strlen($str);
            for ($i = -1; $i >= ($len * -1); $i--) {
                array_push($new_str, $str[$i]);
            }
            return implode('',$new_str);
        }
        $str = 'apple';
        var_dump(reversi($str)); echo '<br><br>';

        // 3
        function power(float $base, int $exponent) {
            if ($exponent != 0 and $exponent != 1) {
                $exponent--;
                $result = $base;
                for ($i = 0; $i < $exponent; $i++) {$result *= $base;}
                if ($exponent > 0) {return $result;}
                else {return 1 / $result;}
            } else if ($exponent == 1) {
                return $base;
            } else {return 1;}
        }
        echo power(4,2) . '<br>';
        echo power(4,3) . '<br>';
        echo power(4,4) . '<br>';

        echo '<br>';

        // 4
        $students = [
            ['name'=>'Julius', 'age'=> 22],
            ['name'=>'Mark', 'age'=> 17],
            ['name'=>'Ali', 'age'=> 30],
            ['name'=>'Riza', 'age'=> 18]
        ];

        function isPresent($key, $arr) {
            foreach ($arr as $k) {
                foreach ($k as $v) {
                    if ($key == $v) {return 'true';}
                }
            } return 'false';
        }
        echo isPresent('Julius', $students) . '<br>'; // will return true
        echo isPresent(18, $students)       . '<br>'; // will return true
        echo isPresent('Marky', $students)  . '<br>'; // will return false
        echo isPresent(77, $students)       . '<br>'; // will return false 
    ?>
</body>
</html>