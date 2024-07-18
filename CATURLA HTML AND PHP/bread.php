<?php
//-the breadorders array 
$BreadOrders = array(1, 2, 1, 2, 0, 1, 2, 0, 0, 2);

//-this is the function that handles the breadorder array
function buyBread() {
    global $BreadOrders;
    
    // -finds the first available slot
    $availableIndex = array_search(0, $BreadOrders);
    
    if ($availableIndex !== false) {
        //-increment
        $BreadOrders[$availableIndex] = 1;
        
        // -prof of purchase
        echo "You have purchased 1 order of bread!";
    } else {
        // -error msg when the store doesn't have any stocks 
        echo "Sorry, we don't have any stock left.";
    }
}

// -check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    buyBread();
}
?>
