<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/view.css">
  <title>View page</title>
</head>

<body>
  <script>

    function readMore() {
      const see = document.getElementById("see");
      const seemore = document.getElementById("seemore");
      seemore.style.display = "inline"
      see.innerHTML = "seeless...."
      see.setAttribute("onclick", "readLess()")
    }

    function readLess() {
      seemore.style.display = "none"
      see.innerHTML = "seemore..."
      see.setAttribute("onclick", "readMore()")
    }
  </script>

  <?php foreach ($employee_list as $employee) {
    include 'viewheader.php' ?>
    <div class="container">
      <div class="right-side">
        <h2>
          <?php echo "$employee->first_name ";
          echo $employee->last_name ?>
          <?php echo "($employee->employee_id)"; ?>
        </h2>
        <h5>
          <?php echo $employee->designation; ?>
        </h5>
        <p class="about"><i class="fa fa-user-o" aria-hidden="true"></i> About</p>
        <div class="contact-details">
          <p>Contact Information</p>
          <div class="contact-number">
            <div class="phone">Phone:</div>
            <div class="number">
              <?php echo "+91  $employee->contact_number"; ?>
            </div>
          </div>
          <div class="address-detail">
            <div class="address">Address:</div>
            <div class="text">
              <?php echo $employee->current_address; ?>
            </div>
          </div>
          <div class="email-detail">
            <div class="email">Email_ID:</div>
            <div class="text">
              <?php echo $employee->emailid; ?>
            </div>
          </div>
        </div>
        <div class="basic-information" id="basic-information">
          <p>Basic Information</p>
          <div class="date">
            <div class="doj">Date Of Joining:</div>
            <div class="text">
              <?php echo $employee->date_of_joining; ?>
            </div>
          </div>
          <div class="experience">
            <div class="yoe">Year Of Experience (Years):</div>
            <div class="text">
              <?php echo $employee->experience; ?>
            </div>
          </div>
          <div class="gender-detail">
            <div class="gender">Gender:</div>
            <div class="text">
              <?php echo $employee->gender; ?>
            </div>
          </div>
          <div class="seemore" id="seemore">
            <div class="middlename">
              <div class="m-name">Middle Name:</div>
              <div class="text">
                <?php echo $employee->middle_name; ?>
              </div>
            </div>
            <div class="permanentaddress">
              <div class="p-address">Permanent Address:</div>
              <div class="text">
                <?php echo $employee->permanent_address; ?>
              </div>
            </div>
            <div class="bloodgroup">
              <div class="bg">Blood Group:</div>
              <div class="text">
                <?php echo $employee->blood_group; ?>
              </div>
            </div>
            <div class="emergencynumber">
              <div class="e-number">Emergency Number:</div>
              <div class="text">
                <?php echo "+91 $employee->emergency_number"; ?>
              </div>
            </div>
            <div class="dateofbirth">
              <div class="dob">Date Of Birth:</div>
              <div class="text">
                <?php echo $employee->date_of_birth; ?>
              </div>
            </div>
          </div><br>
          <button class="see" id="see" onclick="readMore()">seemore....</button>
        </div>
      </div>
      <div class="left-side">
        <div class="imageBox">
          <img src="./images/<?php echo $employee->picture; ?>">
        </div>
        <div class="company">
          <p>Company Details</p>
          <div class="name-detail">
            <div class="name">Name:</div>
            <div class="text">
              <?php echo $employee->name; ?>
            </div>
          </div>
          <div class="branch-detail">
            <div class="branch">Branch:</div>
            <div class="text">
              <?php echo $employee->branch_name; ?>
            </div>
          </div>
          <div class="phone-number">
            <div class="phone">Phone:</div>
            <div class="number">
              <?php echo "+91  $employee->phone_number"; ?>
            </div>
          </div>
          <div class="email-detail">
            <div class="email">Email_ID:</div>
            <div class="text">
              <?php echo $employee->email_id; ?>
            </div>
          </div>
          <div class="icons">
            <div class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></div>
            <div class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></div>
            <div class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
          </div>
        </div>

      </div>
    </div>
  <?php }
  include 'footer.php' ?>
</body>

</html>