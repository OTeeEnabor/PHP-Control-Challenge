
<?php
/*
Challenge 2:
Make an amusement park admission system that displays different prices based on the age of the customer.
Children below 2 are free.
Children from 2 to 12 pay R20.
Children from 13 to 17 pay R30.
People 18 to 25 pay R40.
People 26 to 64 pay R60.
People 65 and up pay R30.
Once your statement is set up you must be able to get different outputs by only changing the age.
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challeng2-2</title>
</head>
<body>
    <form role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <label> Please Enter your age: 
    <input type="number" name="age" min="1" max="100">
    </label>

    <input type="submit" name="submitForm">
    </form>

    <?php
    if(isset($_POST['submitForm'])&& (isset($_POST['age']))){
        $age = $_POST['age'];
        echo 'You are '. $age .' years old:<br>';
        switch(true) {
            case ($age < 2):
                echo "Admission is free";
                break;
            case ($age > 2 && $age<=12):
                echo "Please pay R20";
                 break;

            case ($age >= 13 && $age <= 17):
                echo "Please pay R30";
                break;
            case ($age >18 && $age <= 25):
                echo "Please pay R40";
                break;

            case ($age > 26 && $age <= 64):
                echo "Please pay R60";
                break;
            default:
                echo "Please pay R30";
                break;


        }



        



    
    }
    ?>
</body>
</html>
