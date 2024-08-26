    <pre>
    <?php
    print_r($_Server);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> h1
    {
        text-allign:center;
    }

        </style>

</head>
<body>
    <!---
    1. form must contion attrubute:
        -kanh jani vanera vanxa location to send form data.
        Default action: Same Page

        2. form must contain method attribute.
        -how to send data to server(GET ,POST,PUT,PATCH,DELETE they are http methods)

        3. form elements must contain name attribute: used to data from server side.
        4. form data must be accessed  using $_POST or $_GET or $_REQUEST array / variable in PHP and accessed using 'name'
    --->

    <h1> form handling</h1>
    <form action ="<?php echo $_Server
</body>
</html>