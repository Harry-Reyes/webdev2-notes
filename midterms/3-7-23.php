<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-7-23</title>
</head>
<body>
    <?php 
        $x = 0xFF; echo "<br>";
        /*  1.2 x 1000      e3
            1.2 x 0.0001    e-3
            0b1101  |   Binary
            0xDD    |   Hexadecimal
        */
        echo $x . "<br>";

        echo "---<br>";

        // Strings
        $y = 1 + "2";       echo "<br>";
        $y = 1 + "2.0";     echo "<br>";
        $y = 1 + "10 word"; echo "<br>"; // php will get the first integer, error if char at [0]
        echo $y . "<br>";

        echo "-<br>";
        
        $name = "Name";
        echo $name[0]; echo "<br>"; // N
        echo $name[-1]; echo "<br>"; // e

        echo "---<br>";

        // Boolean
        $b = true; // not case-sensitive
        // echo $b; // 1
        // $b = false; echo $b; // no output
        var_dump($b); echo "<br>";
        echo "-<br>";

        $age = 18;

        var_dump($age == "18");     echo "<br>"; // true
        var_dump($age === "18");    echo "<br>"; // false
        echo "-<br>";
        
        var_dump($age != 18);   echo "<br>"; // not equal
        var_dump($age <> 18);   echo "<br>"; // false
        var_dump($age !== 18);  echo "<br>"; // false
        echo "-<br>";
        
        var_dump($age > 18);    echo "<br>"; // false
        var_dump($age >= 18);   echo "<br>"; // true
        echo "-<br>";
        
        var_dump($age < 18);    echo "<br>"; // false
        var_dump($age <= 18);   echo "<br>"; // true
        echo "-<br>";

        var_dump(!true);    echo "<br>"; // NOT operator
        var_dump(!false);   echo "<br>";
        echo "-<br>";

        var_dump($age <= 18 and $age >= 9); echo "<br>"; // AND operator
        var_dump($age <= 18 && $age >= 9);  echo "<br>";
        echo "-<br>";

        var_dump(true and true);    echo "<br>"; // true
        var_dump(true and false);   echo "<br>"; // false
        var_dump(false and true);   echo "<br>"; // false
        var_dump(false and false);  echo "<br>"; // false
        echo "-<br>";

        var_dump($age <= 18 or $age >= 9); echo "<br>"; // OR operator
        var_dump($age <= 18 || $age >= 9); echo "<br>";
        echo "-<br>";

        var_dump(true or true);     echo "<br>"; // true
        var_dump(true or false);    echo "<br>"; // true
        var_dump(false or true);    echo "<br>"; // true
        var_dump(false or false);   echo "<br>"; // false
        echo "-<br>";

        var_dump($age <= 18 xor $age >= 9); echo "<br>"; // XOR operator
        echo "-<br>";

        var_dump(true xor true);    echo "<br>"; // false
        var_dump(true xor false);   echo "<br>"; // true
        var_dump(false xor true);   echo "<br>"; // true
        var_dump(false xor false);  echo "<br>"; // false

        echo "---<br>";

        // Conditional
        if ($age >= 18) {
            echo "You are 18 years old or older.";
        } elseif ($age >= 13 and $age < 18) {
            echo "You are 13 to 17 years old.";
        } elseif ($age >= 9 and $age < 13) {
            echo "You are 9 to 12 years old.";
        } elseif ($age >= 4 and $age < 9) {
            echo "You're too young.";
        } elseif ($age >= 0 and $age < 4) {
            echo "You're a baby.";
        } else {
            echo "You're a quantum physics.";
        } echo "<br>";

        echo "---<br>";

        // Switch
        switch($age) {
            case $age >= 18:
                echo "You are 18 years old or older.";
                break;
            case $age >= 13 and $age < 18:
                echo "You are 13 to 17 years old.";
                break;
            case $age >= 9 and $age < 13:
                echo "You are 9 to 12 years old.";
                break;
            case $age >= 4 and $age < 9:
                echo "You're too young.";
                break;
            case $age >= 0 and $age < 4:
                echo "You're a baby.";
                break;
            default:
                echo "You're a quantum physics.";
        } echo "<br>";

        echo "---<br>";

        $isAdult;
        if ($age >= 18) {
            $isAdult = true;
        } else {
            $isAdult = false;
        }
        //         condition  ? true : false
        $isAdult = $age >= 18 ? true : false; // Ternary operator

        var_dump($isAdult); echo "<br>";

        echo "---<br>";

        // TRUE in PHP
        if ($age) { // any num but 0 is true
            echo "True";
        } else {
            echo "False";
        } echo "<br>";
        // $x = [1];    is true
        // $x = [];     is false
        // $x = null;   is false

        echo "---<br>";

        // Array
        //     [0][1][2]
        $arr = [1, 2, 3];
        // $arr = array(1, 2, 3);

        $arr[] = 4; // push/append element into array
        // array_push($arr, 9);

        $arr_len = count($arr);
        echo $arr[$len - 1]; echo "<br>";
        echo "-<br>";

        echo "<pre>";
        var_dump($arr);
        echo "</pre>"; echo "<br>";
        echo "-<br>";

        $arr_irreg = $arr;
        $arr_irreg[20] = 5; // makes array irregular
        $arr_irreg[] = 6; // into index 21
        echo current($arr_irreg)    . "<br>";
        echo next($arr_irreg)       . "<br>";
        echo current($arr_irreg)    . "<br>";
        echo next($arr_irreg)       . "<br>";
        echo prev($arr_irreg)       . "<br>";
        echo end($arr_irreg)        . "<br>";
        var_dump(next($arr))        . "<br>"; // false
        reset($arr); // sets back to [0]
        echo current($arr_irreg)    . "<br>";
        echo "-<br>";

        $arr_mixed = [ // mixed array
            1,
            "two",
            true,
            [
                "second dimension",
                ["3rd dimension"]
                ]
            ];
        echo $arr_mixed[3][1][0]; echo "<br>";
        echo "-<br>";

        $assoc = [ // Associative Array
            'name' => 'John Doe',
            'wife' => 'Jane Doe'
        ];
        echo $assoc['wife']; echo "<br>";
        // echo "{$assoc['wife']} <br>"; // alternative
        echo "-<br>";

        $students = [
            'S01' => ['name' => 'John Doe', 'grade' => '3'],
            'S02' => ['name' => 'Jane Doe', 'grade' => '4']
        ];
        echo $students['S01']['grade']; echo "<br>";
        var_dump(key($students)); // get current key value
        echo "-<br>";

        next($students);
        echo "<pre>";
        var_dump(current($students)); echo "<br>";
        print_r(current($students));
        echo "</pre>"; echo "<br>";
        echo "-<br>";

        // Loop (for loop, foreach, while, do-while)

        for ($i = 0; $i < 5; $i++) { // (definition; condition; increment/decrement)
            echo "$i<br>";
        }
        echo "-<br>";

        foreach ($arr as $j) { // iteration
            echo "$j<br>";
        }
        echo "-<br>";

        foreach ($assoc as $k => $v) { // iteration for associative arrays
            echo "$key : $value<br>";
        }
        echo "-<br>";

        $i = 0;
        while ($i < 5) {
            echo "$i<br>";
            $i++;
        }
        echo "-<br>";

        reset($arr);
        do {
            echo current($arr);
            echo "<br>";
        } while (next($arr));

        echo "---<br>";

        // Functions
        function functionName() { // no return = NULL
            echo "This is a function<br>";
        }
        functionName(); // not case-sensitive
        /* Function hoisting
        functionName();
        function functionName() {
            echo "This is a function<br>";
        }
        */
        echo "-<br>";

        function sum(int $a = 0, int $b) {
            return $a + $b;
        }
        var_dump(sum(1, 2)); echo "<br>";
        var_dump(sum(b: 5)); echo "<br>"; // specific assign
        echo "-<br>";
        function getFirstChar(string $str) : string { // for fixed return value type
            return $str[0];
        }

        function null() : ?int { // nullable types
            return null;
        }
    ?>
</body>
</html>