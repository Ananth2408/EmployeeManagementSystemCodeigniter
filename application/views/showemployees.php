<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href='<?php echo base_url() ?>css/showemployees.css'>
  <title>View page</title>
</head>

<body>
  <?php include 'header.php' ?>
  <table>
    <tr>
      <th>Employee-ID</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email-ID</th>
      <th>Designation</th>
      <th>Experience (yrs)</th>
      <th>Actions</th>
    </tr>
    <?php foreach ($employee_list as $employee) { ?>
      <tr>
        <td>
          <?php echo $employee->employee_id; ?>
        </td>
        <td>
          <div class="firstname">
            <?php echo $employee->first_name; ?>
          </div>
        </td>
        <td>
          <div class="lastname">
            <?php echo $employee->last_name; ?>
          </div>
        </td>
        <td>
          <?php echo $employee->emailid; ?>
        </td>
        <td>
          <div class="designation">
            <?php echo $employee->designation; ?>
          </div>
        </td>
        <td>
          <?php echo $employee->experience; ?>
        </td>
        <td>
          <a href="<?php echo base_url(); ?>view?id=<?php echo $employee->id; ?>"><i class="fa fa-eye"
              aria-hidden="true"></i> </a>
          <a href="<?php echo base_url(); ?>edit?id=<?php echo $employee->id; ?>"><i
              class="fa fa-pencil-square-o"></i> </a>
          <a href="<?php echo base_url(); ?>delete?id=<?php echo $employee->id; ?>"><i class="fa fa-trash-o"></i></a>
        </td>
      </tr>
    <?php } ?>
  </table>
  <div id="pagination">
    <ul class="tsc_pagination">

      <!-- Show pagination links -->
      <?php foreach ($links as $link) {
        echo "<li>" . $link . "</li>";
      } ?>
  </div>
</body>

</html>