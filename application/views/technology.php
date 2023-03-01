<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/technology.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Technology Search</title>
</head>

<body>
    <div class="top-bar">
        <script>
            document.write('<a href="' + document.referrer + '"><div class="icon" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></div></i></a>');
        </script>
        <h1>View Employee By Technologies</h1>
    </div>
    <fieldset>
        <form action="<?php echo base_url() ?>showtechnology" method="post">
            Choose technology to see employees: <br><br><br>
            <button type="submit" name="technology" value="1"> PHP </button>
            <button type="submit" name="technology" value="2"> JAVA </button>
            <button type="submit" name="technology" value="3"> PHYTHON </button>
            <button type="submit" name="technology" value="4"> HTML </button><br><br><br>
            <button type="submit" name="technology" value="5"> CSS </button>
            <button type="submit" name="technology" value="6"> JAVASCRIPT </button>
            <button type="submit" name="technology" value="7"> ANGULAR </button>
            <button type="submit" name="technology" value="8"> REACT </button>
        </form>
    </fieldset>
</body>

</html>