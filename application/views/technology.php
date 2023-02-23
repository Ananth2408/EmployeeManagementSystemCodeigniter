<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/technology.css">
    <title>Technology Search</title>
</head>
<body>
    <fieldset>
    <form action="<?php echo base_url() ?>showtechnology" method="post">
        Choose technology to see employees: <br><br>
        <button type="submit" name="technology" value="1"> PHP </button>
        <button type="submit" name="technology" value="2"> JAVA </button>
        <button type="submit" name="technology" value="3"> PHYTHON </button>
        <button type="submit" name="technology" value="4"> HTML </button><br><br>
        <button type="submit" name="technology" value="5"> CSS </button>
        <button type="submit" name="technology" value="6"> JAVASCRIPT </button>
        <button type="submit" name="technology" value="7"> ANGULAR </button>
        <button type="submit" name="technology" value="8"> REACT </button>
    </form>
    </fieldset>
</body>
</html>