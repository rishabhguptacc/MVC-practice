<?php

global $settings;

// print_r($data['products']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <p>This is contact template!</p>

    <form action="<?php echo $settings['siteurl']; ?>/pages/contactformsubmission" method="post">
        <label for="fname">First Name <input type="text" name="fname" id="fname"></label>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>