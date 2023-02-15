<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> create
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

    <?php echo form_open('createController/insertData'); ?>

    <label for="firstname">First Name: </label>
    <input class='fname' type="text" name="firstname" value="<?php echo set_value('firstname'); ?>">
    <?php echo form_error('firstname'); ?><br><br>

    <label for="middlename">Middle Name: </label>
    <input class='mname' type="text" name="middlename" value="<?php echo set_value('middlename'); ?>">
    <?php echo form_error('middlename'); ?><br><br>

    <label for="lastname">Last Name: </label>
    <input class='lname' type="text" name="lastname" value="<?php echo set_value('lastname'); ?>">
    <?php echo form_error('lastname'); ?><br><br>

    <label for="photo">Upload Picture: </label>
    <input class='photo' type="file" name="photo" value="<?php echo set_value('photo'); ?>">
    <?php echo form_error('photo'); ?><br><br>


    <label for="date_of_birth">Date of birth: </label>
    <input class='dob' type="date" name="date_of_birth" value="<?php echo set_value('date_of_birth'); ?>">
    <?php echo form_error('date_of_birth'); ?><br><br>

    <label for="gender">Gender :</label>
    <input type="radio" name="gender" value="male" <?php echo set_radio('gender', 'male'); ?>>
    <span>Male</span>
    <input type="radio" name="gender" value="female" <?php echo set_radio('gender', 'female'); ?>>
    <span>Female</span>
    <input type="radio" name="gender" value="others" <?php echo set_radio('gender', 'others'); ?>>
    <span>others</span>
    <?php echo form_error('gender'); ?><br><br>


    <label for="phonenumber">Phone Number: </label>
    <input class='name' type="number" name="phonenumber" value="<?php echo set_value('phonenumber'); ?>">
    <?php echo form_error('phonenumber'); ?><br><br>

    <label for="email">Email-Id : </label>
    <input class='email' type="text" name="email" value="<?php echo set_value('email'); ?>">
    <?php echo form_error('Email_id'); ?><br><br>

    <label for="date_of_joining">Date of joining: </label>
    <input class='name' type="date" name="date_of_joining" value="<?php echo set_value('date_of_joining'); ?>">
    <?php echo form_error('date_of_joining'); ?><br><br>

    <label for="designation">Designation: </label>
    <select name="designation" id="designation">
        <option value=""></option>
        <option value="Computer systems manager" <?php echo set_select('designation', 'Computer systems manager'); ?>>
            Computer systems manager</option>
        <option value="Network architect" <?php echo set_select('designation', 'Network architect'); ?>>Network
            architect</option>
        <option value="Systems analyst" <?php echo set_select('designation', 'Systems analyst'); ?>>Systems analyst
        </option>
        <option value="IT coordinator" <?php echo set_select('designation', 'IT coordinator'); ?>>IT coordinator
        </option>
        <option value="Network administrator" <?php echo set_select('designation', 'Network administrator'); ?>>Network
            administrator</option>
        <option value="Network engineer" <?php echo set_select('designation', 'Network engineer'); ?>>Network engineer
        </option>
        <option value="Service desk analyst" <?php echo set_select('designation', 'Service desk analyst'); ?>>Service
            desk analyst</option>
        <option value="System administrator" <?php echo set_select('designation', 'System administrator'); ?>>System
            administrator</option>
        <option value="Database administrator" <?php echo set_select('designation', 'Database administrator'); ?>>
            Database administrator</option>
        <option value="Database analyst" <?php echo set_select('designation', 'Database analyst'); ?>>Database analyst
        </option>
        <option value="SQL database administrator" <?php echo set_select('designation', 'SQL database administrator'); ?>>SQL database administrator</option>
        <option value="Business intelligence specialist/analyst" <?php echo set_select('designation', 'Business intelligence specialist/analyst'); ?>>Business intelligence specialist/analyst</option>
        <option value="Business systems analyst" <?php echo set_select('designation', 'Business systems analyst'); ?>>
            Business systems analyst</option>
        <option value="Data analyst" <?php echo set_select('designation', 'Data analyst'); ?>>Data analyst</option>
        <option value="Data analytics developer" <?php echo set_select('designation', 'Data analytics developer'); ?>>
            Data analytics developer</option>
        <option value="Data modeling analyst" <?php echo set_select('designation', 'Data modeling analyst'); ?>>Data
            modeling analyst</option>
        <option value="Data warehouse manager" <?php echo set_select('designation', 'Data warehouse manager'); ?>>Data
            warehouse manager</option>
        <option value="Back-end developer" <?php echo set_select('designation', 'Back-end developer'); ?>>Back-end
            developer</option>
        <option value="Cloud/software architect" <?php echo set_select('designation', 'Cloud/software architect'); ?>>
            Cloud/software architect</option>
        <option value="Cloud/software developer" <?php echo set_select('designation', 'Cloud/software developer'); ?>>
            Cloud/software developer</option>
        <option value="Cloud/software applications engineer" <?php echo set_select('designation', 'Cloud/software applications engineer'); ?>>Cloud/software applications engineer</option>
        <option value="DevOps engineer" <?php echo set_select('designation', 'DevOps engineer'); ?>>DevOps engineer
        </option>
        <option value="Front-end developer" <?php echo set_select('designation', 'Front-end developer'); ?>>Front-end
            developer</option>
        <option value="Full-stack developer" <?php echo set_select('designation', 'Full-stack developer'); ?>>Full-stack
            developer</option>
        <option value="Java developer" <?php echo set_select('designation', 'Java developer'); ?>>Java developer
        </option>
        <option value="Release manager" <?php echo set_select('designation', 'Release manager'); ?>>Release manager
        </option>
        <option value="Software engineer" <?php echo set_select('designation', 'Software engineer'); ?>>Software
            engineer</option>
        <option value="UI (user interface) designer" <?php echo set_select('designation', 'UI (user interface) designer'); ?>>UI (user interface) designer</option>
        <option value="Web developer" <?php echo set_select('designation', 'Web developer'); ?>>Web developer</option>
        <option value="IT security engineer" <?php echo set_select('designation', 'IT security engineer'); ?>>IT
            security engineer</option>
        <option value="IT support specialist" <?php echo set_select('designation', 'IT support specialist'); ?>>IT
            support specialist</option>
        <option value="Customer service representative" <?php echo set_select('designation', 'Customer service representative'); ?>>Customer service representative</option>
        <option value="Technical product manager" <?php echo set_select('designation', 'Technical product manager'); ?>>
            Technical product manager</option>
        <option value="Project manager" <?php echo set_select('designation', 'Project manager'); ?>>Project manager
        </option>
        <option value="Program manager" <?php echo set_select('designation', 'Program manager'); ?>>Program manager
        </option>
    </select>
    <?php echo form_error('designation'); ?><br><br>

    <label for="year_of_experience">Year of experience: </label>
    <input class='name' type="number" name="year_of_experience" value="<?php echo set_value('year_of_experience'); ?>">
    <?php echo form_error('year_of_experience'); ?><br><br>

    <label for="bloodgroup">Bloodgroup: </label>
    <select name="bloodgroup" id="blood">
        <option value=""></option>
        <option value="A+ve" <?php echo set_select('bloodgroup', 'A+ve'); ?>>A+ve</option>
        <option value="B+ve" <?php echo set_select('bloodgroup', 'B+ve'); ?>>B+ve</option>
        <option value="AB+ve" <?php echo set_select('bloodgroup', 'AB+ve'); ?>>AB+ve</option>
        <option value="O+ve" <?php echo set_select('bloodgroup', 'O+ve'); ?>>O+ve</option>
        <option value="A-ve" <?php echo set_select('bloodgroup', 'A-ve'); ?>>A-ve</option>
        <option value="B-ve" <?php echo set_select('bloodgroup', 'B-ve'); ?>>A-ve</option>
        <option value="AB-ve" <?php echo set_select('bloodgroup', 'AB-ve'); ?>>AB-ve</option>
        <option value="O-ve" <?php echo set_select('bloodgroup', 'O-ve'); ?>>O-ve</option>
    </select>
    <?php echo form_error('bloodgroup'); ?><br><br>

    <label for="qualification">Qualification: </label>
    <input class='name' type="text" name="qualification" value="<?php echo set_value('qualification'); ?>">
    <?php echo form_error('qualification'); ?><br><br>

    <label for="tecnology">Known Languages: </label><br>
    <select name = "technology[ ]" id = "technology" multiple>
        <option value="1" <?php echo set_select('technology[]', '1'); ?>>Php</option>
        <option value="2" <?php echo set_select('technology[]', '2'); ?>>Java</option>
        <option value="3" <?php echo set_select('technology[]', '3'); ?>>Phython</option>
        <option value="4" <?php echo set_select('technology[]', '4'); ?>>Html</option>
        <option value="5" <?php echo set_select('technology[]', '5'); ?>>Css</option>
        <option value="6" <?php echo set_select('technology[]', '6'); ?>>JavaScript</option>
        <option value="7" <?php echo set_select('technology[]', '7'); ?>>Angular</option>
        <option value="8" <?php echo set_select('technology[]', '8'); ?>>React</option>
    </select><br /><br>

    <label for="emergencynumber">Emergency Number: </label>
    <input class='name' type="number" name="emergencynumber" value="<?php echo set_value('emergencynumber'); ?>">
    <?php echo form_error('emergencynumber'); ?><br><br>

    <label for="current_address">Current Address: </label>
    <textarea name="current_address"></textarea>
    <?php echo form_error('current_address'); ?><br><br>

    <label for="permanent_address">Permanent Address: </label>
    <textarea name="permanent_address"></textarea>
    <?php echo form_error('permanent_address'); ?><br><br>

    <input class='submit' type="submit" name="Submit">

    </form>
</body>

</html>