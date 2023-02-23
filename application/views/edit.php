<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Page</title>
  <link rel="stylesheet" href='<?php echo base_url() ?>css/create.css' />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(function () {
      $("#designation").select2();
    }); 
  </script>
</head>

<body>

  <?php
  foreach ($employee_list as $employee) {
    echo form_open('editemployee'); ?>

    <input type="hidden" name="id" value=<?php echo $employee->id; ?>>

    <label for="firstname">First Name: </label>
    <input class='firstname' type="text" name="firstname" value="<?php echo $employee->first_name; ?>">
    <?php echo form_error('firstname'); ?><br><br>

    <label for="middlename">Middle Name: </label>
    <input class='middlename' type="text" name="middlename" value="<?php echo $employee->middle_name;?>">
    <?php echo form_error('middlename'); ?><br><br>

    <label for="lastname">Last Name: </label>
    <input class='lastname' type="text" name="lastname" value="<?php echo $employee->last_name; ?>">
    <?php echo form_error('lastname'); ?><br><br>

    <label>Upload Profie Picture: </label>
    <input class='photo' type="file" name="photo" value="<?php echo $employee->picture; ?>">
    <?php echo form_error('photo'); ?><br><br>


    <label for="date_of_birth">Date of birth: </label>
    <input class='dob' type="date" name="date_of_birth" value="<?php echo $employee->date_of_birth; ?>">
    <?php echo form_error('date_of_birth'); ?><br><br>

    <label for="gender">Gender :</label>
    <input  class='gender' type="radio" name="gender" value="male" <?php if ($employee->gender == 'male')
      echo 'checked="checked"'; ?>>
    <span for="male">Male</span>
    <input class='gender' type="radio" name="gender" value="female" <?php if ($employee->gender == 'female')
      echo 'checked="checked"'; ?>>
    <span for="female">Female</span>
    <input class='gender' type="radio" name="gender" value="others" <?php if ($employee->gender == 'others')
      echo 'checked="checked"'; ?>>
    <span for="others">others</span>
    <?php echo form_error('gender'); ?><br><br>


    <label for="phonenumber">Phone Number: </label>
    <input class='phonenumber' type="number" name="phonenumber" value="<?php echo $employee->contact_number; ?>">
    <?php echo form_error('phonenumber'); ?><br><br>

    <label for="emergencynumber">Emergency Number: </label>
    <input class='emergencynumber' type="number" name="emergencynumber" value="<?php echo $employee->emergency_number; ?>">
    <?php echo form_error('emergencynumber'); ?><br><br>

    <label for="email">Email-Id : </label>
    <input class='email' type="text" name="email" value="<?php echo $employee->emailid; ?>">
    <?php echo form_error('Email_id'); ?><br><br>

    <label for="date_of_joining">Date of joining: </label>
    <input class='doj' type="date" name="date_of_joining" value="<?php echo $employee->date_of_joining; ?>">
    <?php echo form_error('date_of_joining'); ?><br><br>

    <label class="designation" for="designation">Designation: </label>
    <select  name="designation" id="designation">
      <option value="Computer systems manager" <?php if ($employee->designation == "Computer systems manager") {
        echo "selected";
      } ?>>
        Computer systems manager</option>
      <option value="Network architect" <?php if ($employee->designation == "Network architect") {
        echo "selected";
      } ?>>Network
        architect</option>
      <option value="Systems analyst" <?php if ($employee->designation == "Systems analyst") {
        echo "selected";
      } ?>>Systems
        analyst
      </option>
      <option value="IT coordinator" <?php if ($employee->designation == "IT coordinator") {
        echo "selected";
      } ?>>IT coordinator
      </option>
      <option value="Network administrator" <?php if ($employee->designation == "Network administrator") {
        echo "selected";
      } ?>>
        Network
        administrator</option>
      <option value="Network engineer" <?php if ($employee->designation == "Network engineer") {
        echo "selected";
      } ?>>Network
        engineer
      </option>
      <option value="Service desk analyst" <?php if ($employee->designation == "Service desk analyst") {
        echo "selected";
      } ?>>
        Service
        desk analyst</option>
      <option value="System administrator" <?php if ($employee->designation == "System administrator") {
        echo "selected";
      } ?>>
        System
        administrator</option>
      <option value="Database administrator" <?php if ($employee->designation == "Database administrator") {
        echo "selected";
      } ?>>
        Database administrator</option>
      <option value="Database analyst" <?php if ($employee->designation == "Database analyst") {
        echo "selected";
      } ?>>Database
        analyst
      </option>
      <option value="SQL database administrator" <?php if ($employee->designation == "SQL database administrator") {
        echo "selected";
      } ?>>SQL database administrator</option>
      <option value="Business intelligence specialist/analyst" <?php if ($employee->designation == "Business intelligence specialist/analyst") {
        echo "selected";
      } ?>>Business intelligence specialist/analyst</option>
      <option value="Business systems analyst" <?php if ($employee->designation == "Business systems analyst") {
        echo "selected";
      } ?>>
        Business systems analyst</option>
      <option value="Data analyst" <?php if ($employee->designation == "Data analyst") {
        echo "selected";
      } ?>>Data analyst
      </option>
      <option value="Data analytics developer" <?php if ($employee->designation == "Data analytics developer") {
        echo "selected";
      } ?>>
        Data analytics developer</option>
      <option value="Data modeling analyst" <?php if ($employee->designation == "Data modeling analyst") {
        echo "selected";
      } ?>>
        Data
        modeling analyst</option>
      <option value="Data warehouse manager" <?php if ($employee->designation == "Data warehouse manager") {
        echo "selected";
      } ?>>Data
        warehouse manager</option>
      <option value="Back-end developer" <?php if ($employee->designation == "Back-end developer") {
        echo "selected";
      } ?>>
        Back-end
        developer</option>
      <option value="Cloud/software architect" <?php if ($employee->designation == "Cloud/software architect") {
        echo "selected";
      } ?>>
        Cloud/software architect</option>
      <option value="Cloud/software developer" <?php if ($employee->designation == "Cloud/software developer") {
        echo "selected";
      } ?>>
        Cloud/software developer</option>
      <option value="Cloud/software applications engineer" <?php if ($employee->designation == "Cloud/software applications engineer") {
        echo "selected";
      } ?>>Cloud/software applications engineer</option>
      <option value="DevOps engineer" <?php if ($employee->designation == "DevOps engineer") {
        echo "selected";
      } ?>>DevOps
        engineer
      </option>
      <option value="Front-end developer" <?php if ($employee->designation == "Front-end developer") {
        echo "selected";
      } ?>>
        Front-end
        developer</option>
      <option value="Full-stack developer" <?php if ($employee->designation == "Full-stack developer") {
        echo "selected";
      } ?>>
        Full-stack
        developer</option>
      <option value="Java developer" <?php if ($employee->designation == "Java developer") {
        echo "selected";
      } ?>>Java developer
      </option>
      <option value="Release manager" <?php if ($employee->designation == "Release manager") {
        echo "selected";
      } ?>>Release
        manager
      </option>
      <option value="Software engineer" <?php if ($employee->designation == "Software engineer") {
        echo "selected";
      } ?>>Software
        engineer</option>
      <option value="UI (user interface) designer" <?php if ($employee->designation == "UI (user interface) designer") {
        echo "selected";
      } ?>>UI (user interface) designer</option>
      <option value="Web developer" <?php if ($employee->designation == "Web developer") {
        echo "selected";
      } ?>>Web developer
      </option>
      <option value="IT security engineer" <?php if ($employee->designation == "IT security engineer") {
        echo "selected";
      } ?>>IT
        security engineer</option>
      <option value="IT support specialist" <?php if ($employee->designation == "IT support specialist") {
        echo "selected";
      } ?>>
        IT
        support specialist</option>
      <option value="Customer service representative" <?php if ($employee->designation == "Customer service representative") {
        echo "selected";
      } ?>>Customer service representative</option>
      <option value="Technical product manager" <?php if ($employee->designation == "Technical product manager") {
        echo "selected";
      } ?>>
        Technical product manager</option>
      <option value="Project manager" <?php if ($employee->designation == "Project manager") {
        echo "selected";
      } ?>>Project
        manager
      </option>
      <option value="Program manager" <?php if ($employee->designation == "Program manager") {
        echo "selected";
      } ?>>Program
        manager
      </option>
    </select>
    <?php echo form_error('designation'); ?><br><br>

    <label for="year_of_experience">Year of experience: </label>
    <input class='experience' type="number" name="year_of_experience" value="<?php echo $employee->experience; ?>">
    <?php echo form_error('year_of_experience'); ?><br><br>

    <label for="bloodgroup">Bloodgroup: </label>
    <select class="bloodgroup" name="bloodgroup" id="blood">
      <option value="A+ve" <?php if ($employee->blood_group == "A+ve") {
        echo "selected";
      } ?>>A+ve</option>
      <option value="B+ve" <?php if ($employee->blood_group == "B+ve") {
        echo "selected";
      } ?>>B+ve</option>
      <option value="AB+ve" <?php if ($employee->blood_group == "AB+ve") {
        echo "selected";
      } ?>>AB+ve</option>
      <option value="O+ve" <?php if ($employee->blood_group == "O+ve") {
        echo "selected";
      } ?>>O+ve</option>
      <option value="A-ve" <?php if ($employee->blood_group == "A-ve") {
        echo "selected";
      } ?>>A-ve</option>
      <option value="B-ve" <?php if ($employee->blood_group == "B-ve") {
        echo "selected";
      } ?>>A-ve</option>
      <option value="AB-ve" <?php if ($employee->blood_group == "AB-ve") {
        echo "selected";
      } ?>>AB-ve</option>
      <option value="O-ve" <?php if ($employee->blood_group == "O-ve") {
        echo "selected";
      } ?>>O-ve</option>
    </select>
    <?php echo form_error('bloodgroup'); ?><br><br>

    <span class="note">(* Select only newly konwn languages)</span><br>
    <label for="tecnology">Known Languages: </label>
    <select class="technology" name="technology[ ]" id="technology" multiple>
        <option value="1" <?php echo set_select('technology[]', '1'); ?>>Php</option>
        <option value="2" <?php echo set_select('technology[]', '2'); ?>>Java</option>
        <option value="3" <?php echo set_select('technology[]', '3'); ?>>Phython</option>
        <option value="4" <?php echo set_select('technology[]', '4'); ?>>Html</option>
        <option value="5" <?php echo set_select('technology[]', '5'); ?>>Css</option>
        <option value="6" <?php echo set_select('technology[]', '6'); ?>>JavaScript</option>
        <option value="7" <?php echo set_select('technology[]', '7'); ?>>Angular</option>
        <option value="8" <?php echo set_select('technology[]', '8'); ?>>React</option>
    </select><br /><br>


    <label for="qualification">Qualification: </label>
    <input class='qualification' type="text" name="qualification" value="<?php echo $employee->qualification; ?>">
    <?php echo form_error('qualification'); ?><br><br>

    <label for="current_address">Current Address: </label>
    <textarea class="currentaddress" name="current_address"><?php echo $employee->current_address; ?></textarea>
    <?php echo form_error('current_address'); ?><br><br>

    <label for="permanent_address">Permanent Address: </label>
    <textarea class="permanentaddress" name="permanent_address"><?php echo $employee->permanent_address; ?></textarea>
    <?php echo form_error('permanent_address'); ?><br><br>

    <input class='submit' type="submit" name="Update" value="Update">
    <input class='back' type="button" onclick = javascript:history.go(-1) name="Back" value="Back">
  <?php } ?>
  </form>
</body>

</html>