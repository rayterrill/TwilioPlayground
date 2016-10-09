<?php
    $this->layout = false;

    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    $digits = h($digits); 
    $digits = $digits / 100;

    echo "<Response><Say>You entered " . $digits . "</Say></Response>";
?>
