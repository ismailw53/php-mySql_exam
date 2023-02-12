<?php

require "db.php";
if (isset($_POST['del'])) {
    $q = "delete from manufacturer where id='" . $_POST['manid'] . "'";
    $conn->query($q);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Menu:<br> <select name="manid" id="">
            <option value="1">action_1 </option>
            <option value="2">action_2</option>
            <option value="3">action_3</option>

        </select>
        <input type="submit" value="Delete" name="del">

    </form>

</body>

</html>