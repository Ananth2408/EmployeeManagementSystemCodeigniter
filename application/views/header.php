<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href='<?php echo base_url() ?>css/header.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>

<body>
  <div class="topnav">
    <form action="<?php echo base_url() ?>search" method="post">
    <input class="search" type="text" placeholder="Search..." name="firstname">
    <div class="input-icons">
      <button  class="search-button" ><i class="fa fa-search"></i></button>
    </div>
</form>
  </div>
  <a class="create" href="<?php echo base_url() ?>create">Create Employee</a>
  <div class="dropdown">
      <button class="dropbtn">Sort</button>
      <div class="dropdown-content">
        <a href="<?php echo base_url() ?>name">By Name</a>
        <a href="<?php echo base_url() ?>experience">By Experience</a>
        <a href="<?php echo base_url() ?>technology">By Technology</a>
      </div>
    </div>
</body>

</html>