<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/showemployees.css">
  <title>Document</title>
</head>

<body>
  <table>
    <tr>
      <th>Employee-ID</th>
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Last Name</th>
      <th>Email-ID</th>
      <th>Experience</th>
      <th>Operations</th>
    </tr>
    <?php foreach ($employee_list as $employee) { ?>
      <tr>
        <td>
          <?php echo $employee->id; ?>
        </td>
        <td>
          <?php echo $employee->first_name; ?>
        </td>
        <td>
          <?php echo $employee->middle_name; ?>
        </td>
        <td>
          <?php echo $employee->last_name; ?>
        </td>
        <td>
          <?php echo $employee->emailid; ?>
        </td>
        <td>
          <?php echo $employee->experience; ?>
        </td>
        <td>
          <?php echo $employee->picture; ?>
        </td>
        <td>
          <a href="<?php echo base_url();?>index.php/createController/edit?id=<?php echo $employee->id; ?>">Edit\</a>
          <a href="<?php echo base_url();?>index.php/createController/delete?id=<?php echo $employee->id; ?>">Delete</a>
        </td>
      </tr>
    <?php }  ?>
  </table>
</body>

</html>