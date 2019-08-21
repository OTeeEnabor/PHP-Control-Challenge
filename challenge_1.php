<!--Getting Started:
Create a new index.php file
Copy the code below into the window
Add a virtual host linking to the file in WAMP
Then start the challenge -->

<!-- Create a traffic light system that tells a driver what to do.
When the light colour is red, the output must be 'stop'.
When it is yellow the output must be 'slow down'.
When it is green the output must be 'go'.
Once your statement is set up you must be able to get different ouputs by only changing the light colour. -->


<?php
$traffic_light = array('red','yellow','green');
$rand_no = rand(0,2);

//Control statement
if ($traffic_light[$rand_no] == 'red'){
    echo<<<END
    <img src="images/stop.jpg">
    <br>
    <br>
    Stop!
    
END;

}
elseif ($traffic_light[$rand_no] == 'yellow'){
    echo<<<END
    <img src="images/slow.jpg">
    <br>
    <br>
    Slow Down!

END;

}

else{
    echo<<<END
    <img src="images/go.jpg">
    <br>
    <br>
    "Go!"
END;
}

?>