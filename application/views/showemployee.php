<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/view.css">
  <title>View page</title>
</head>

<body>
  <?php foreach ($employee_list as $employee) { ?>
    <div class="container">
      <div class="right-side">
        <div class="table">
          <table>
            <tr>
              <th>Employee-ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Email-ID</th>
              <th>Date Of Birth</th>
              <th>Contact Number</th>
              <th>Emergency Number</th>
              <th>Gender</th>
              <th>deignation</th>
              <th>Blood Group</th>
              <th>Qualification</th>
              <th>Date Of Joining</th>
              <th>Experience</th>
              <th>Current Address</th>
              <th>Permanent Address</th>
              <th>Picture</th>
            </tr>
            <!-- <tr>
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
                      <?php echo $employee->date_of_birth; ?>
                    </td>
                    <td>
                      <?php echo "+91 " . $employee->contact_number; ?>
                    </td>
                    <td>
                      <?php echo "+91 " . $employee->emergency_number; ?>
                    </td>
                    <td>
                      <?php echo $employee->gender; ?>
                    </td>
                    <td>
                      <?php echo $employee->designation; ?>
                    </td>
                    <td>
                      <?php echo $employee->blood_group; ?>
                    </td>
                    <td>
                      <?php echo $employee->qualification; ?>
                    </td>
                    <td>
                      <?php echo $employee->date_of_joining; ?>
                    </td>
                    <td>
                      <?php echo $employee->experience; ?>
                    </td>
                    <td>
                      <?php echo $employee->current_address; ?>
                    </td>
                    <td>
                      <?php echo $employee->permanent_address; ?>
                    </td>
                    <td>
                    </td>
                  </tr> -->
          <?php } ?>
        </table>
      </div>
    </div>
    <div class="left-side">
      <div class="imageBox">
        <img src="./images/<?php echo $employee->picture; ?>">
      </div>
    </div>
  </div>
</body>

</html>