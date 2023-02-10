<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php echo form_open('createController/searchEmployee'); ?>
    <label for="firstname">First Name: </label>
    <input class='name' type="text" name="firstname">

    <input class='submit' type="submit" name="Submit">
    </form>
</body>

</html>