<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
    <title>Ugly Number Assignment</title>
</head>

<body>

    <section id="container" class="hero is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="column has-text-centered">
                    <div class="box">
                        <h1 class="title">Ugly Number Assignment</h1>
                        <form action="" method="post">
                            Enter a number to see if its ugly or not: <input type="text" name="number">
                            <input type="submit" value="Check">
                        </form>
                        <div class="column has-text-centered">
                            Result: <input type="text" name="result" id="result" readonly>
                        </div>
                    </div>
                </div>
            </div>
    </section>
<!-- The PHP script checks if the number entered is set, and if so, it calls the isUgly() function which checks if the number is divisible by 2, 3 and 5.
If the number is divisible by any of these prime numbers, the number is divided by that prime number until it can no longer be divided.
If the final result is 1, the number is considered an ugly number, and the script will set the result variable with "X is an ugly number", otherwise it will set the variable with "X is not an ugly number".
Then the script will use javascript to set the value of the output text field with the result variable.
Note that for this example to work you'll need to run this code on a PHP enabled server, also you may need to adjust the file name in action to match your file name. -->

    <?php
    if (isset($_POST['number'])) {
        $num = $_POST['number'];
        if (isUgly($num)) {
            $result = $num . " is an ugly number";
        } else {
            $result = $num . " is not an ugly number";
        }
        echo "<script>
        document.getElementById('result').value = '$result';
        </script>";
    }

    function isUgly($num)
    {
        while ($num % 2 == 0) {
            $num /= 2;
        }
        while ($num % 3 == 0) {
            $num /= 3;
        }
        while ($num % 5 == 0) {
            $num /= 5;
        }
        return $num == 1;
    }
    ?>


</body>

</html>