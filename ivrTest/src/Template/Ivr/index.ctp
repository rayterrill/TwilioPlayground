<?php
    $this->layout = false;

    //array of numbers and people we know about
    $people = array(
        "+15035555555"=>"Bob"
    );

    //get the value of the $from variable from our controller
    $from = h($from);

    //if the $from value is in our array, get the name so we can
    //refer to the user by name. if not, just refer to them as "caller"
    if (array_key_exists($from, $people)) {
        $name = $people[$from];
    } else {
        $name = "caller";
    }

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>

<Response>
    <Gather action="/TwilioPlayground/ivrTest/gather" method="GET">
        <Say voice="woman">Hello, <?php echo $name ?>.</Say>
        <Say voice="woman">Thank you for calling Ray's Test Service. Please enter your sales for today. Enter sales numbers without decimal points. Press pound to save your data.</Say>
    </Gather>
    <Say>We didn't receive any input. Goodbye.</Say>
</Response>
