<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>social | Plumebin</title>
        <link rel="stylesheet" href="social.css" charset="utf-8">
    </head>
    <body>
        <a href="welcome.php"><p style='color: white; position: absolute; cursor: pointer'>
            <–– back
        </p></a>
        <a href="find.php"><div class = 'soc_div'><p id = 'social_text'>find</p></div>
        <?php
        include('function.php');
        post();
        ?>
    </body>
</html>
