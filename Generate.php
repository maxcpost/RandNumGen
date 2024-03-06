<?php
// Get the hours of operation from Monique
$hour = readline("Enter the number of hours you were open: ");

// Check if the hour variable is a positive whole number
if(is_numeric($hour) && $hour == intval($hour)) {
    echo "It looks like you were open for $hour hours. That means that we are going to have $hour stratum.\n";
    echo "\n";

    // Get the number of customers that are going o be pulled for each stratum
    $cust_per_strat = readline("How many random customers do you want pick per stratum: ");
    echo "\n";

    // This will run for each hour you were open
    for($i = $hour; $i > 0; $i--) {
        // Get the number of customers that came each hour
        $num_of_cust = readline("How many customers came in hour $i: ");

        // Generate some random customers
        $previous_num = 0;
        for($n = $cust_per_strat; $n > 0; $n--) {
            do {
                $rand = mt_rand(0, $num_of_cust);
            } while ($rand === $previous_num); 
            $previousNumber = $rand;

            //List the customers
            echo "Customer: $rand \n";
        }
        echo "\n";
    }
    echo "SEND THOSE EMAILS!!";
}
else {
    echo "It looks like you have entered a bad value.\n Make sure that you are entering a whole value and try again...";
    exit;
}


?>
