<?php

/*Challenge 3:
Create a personalised greeting system. Based on the name of the person there should be a unique message.
If the person is unknown there should be an error messsage saying "unknown user".
Make messages for at least 5 people.
Once your statement is set up you must be able to get different outputs by only changing the name.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge-3</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" role="form" method="post">

    <label> Please enter your employee name : 
    <input type ="text" name="employee" placeholder="please enter your first name">
    </label>

    <input type="submit" name="submitName">
    </form>

    <?php
    $employee_name =array('Harry','Fela','Mac','Zombie','Shadow');
    if(isset($_POST['submitName'])&&(isset($_POST['employee']))){

        $input =ucfirst(strtolower($_POST['employee']));
        if (in_array($input,$employee_name)){
            echo "Hello " . $input . "... <br>Thank you for coming in today to give your precious hours, get to work:)";
        }
        else{
            echo "YOU DONT WORK HERE!!!...but you could if you are willing to sacrifice your hours for some money.";
        }


    }
    ?>
</body>
</html>

