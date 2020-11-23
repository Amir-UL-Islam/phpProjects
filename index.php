<?php


$result = "";
$oparetor = "";
$number = "";
$cookie_nam = "number";
$cookie_val = "";
$cookie_name = "oparetor";
$cookie_value = "";



if (isset($_POST['clear'])) {
    $number = "";
}
if (isset($_POST['display'])) {
    $number = $_POST['display'];
} else {
    $number = "";
}

if (isset($_POST['oparetor'])) {
    
    $cookie_val = $_POST['display'];
    
    setcookie($cookie_nam, $cookie_val, time() + (86400 * 30), "/");
    
    $cookie_value = $_POST['oparetor'];
    
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/');
    
      $number = $_POST['display']. $_POST['oparetor'];
}







if (isset($_POST['submit'])) {
    $number = $_POST['display'] . $_POST['submit'];
} 




if (isset($_POST['equal'])) {
    $number = $_POST['display'];

    switch ($_COOKIE['oparetor']) {
        case "+":
            $result = $_COOKIE['number'] + $number;
            break;
        case "/":
            $result = $_COOKIE['number'] / $number;
            break;
        case "-":
            $result = $_COOKIE['number'] - $number;
            break;
        case "x":
            $result = $_COOKIE['number'] * $number;
            break;
    }
    $number = $result;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body class="container">
    <div class="row">
        <div class="col-3">
    <form method="POST">
        <table class="bg-light" >
            
            
            
            <input style="width:60%" name="display" value=<?php echo $number; ?>>
            
            
            
            
            <tr>
                <td><input type="submit" name="submit" value="7"></td>
                <td><input type="submit" name="submit" value="8"></td>
                <td><input type="submit" name="submit" value="9"></td>
                <td><input type="submit" name="oparetor" value="/"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="4"></td>
                <td><input type="submit" name="submit" value="5"></td>
                <td><input type="submit" name="submit" value="6"></td>
                <td><input type="submit" name="oparetor" value="x"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="3"></td>
                <td><input type="submit" name="submit" value="2"></td>
                <td><input type="submit" name="submit" value="1"></td>
                <td><input type="submit" name="oparetor" value="-"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="0"></td>
                <td><input type="submit" name="clear" value="C"></td>
                <td><input type="submit" name="equal" value="="></td>
                <td><input type="submit" name="oparetor" value="+"></td>
            </tr>
            
            
            
        </table>
    </form>
        </div>
    </div>
</body>

</html>