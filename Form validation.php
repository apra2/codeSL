<?php
                        // isset,empty,trim,preg_match,filter_var
                        if ($_SERVER['REQUEST_METHOD'] == 'POST')
                        {
                        $error = [];
                            if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name']))
                            {
                                $name = $_POST['name'];
                                if (!preg_match('/^[A-Za-z]{3,50}$/', $name))
                                        {
                                         $error['name'] = "Enter a valid name";
                                        }


                                
                            } 
                        }

                        else
                            {
                                $error['name'] =  'Enter your name';
                            }


                            if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) 
                            {
                                $phone = $_POST['phone'];
                                if (!preg_match('/^98[0-9]{8}$/',$phone)) 
                                {
                                    $error['phone']="enter a valid number";
                                }
                            }
                            else
                            {
                                $error['phone'] =  'Enter your phone';
                            }



                        if (isset($_POST['phone']) && !empty($_POST['phone']) && trim($_POST['phone'])) 
                        {
                            $phone = $_POST['phone'];
                            if (!preg_match('/^98[0-9]{8}$/',$phone)) 
                            {
                                $error['phone']="enter a valid number";
                            }
                        }
                        else
                        {
                            $error['phone'] =  'Enter your phone';
                        }
                        
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link rel="stylesheet" href="form.css">
    <style>
    h1 {
        text-align: center;
    }

    fieldset {
        width: 65%;
        margin: auto;
    }
    </style>
</head>

<body>
    <h1>Form Handling </h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <fieldset>
            <legend>Registration Details</legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text"  id="name" name="name" placeholder="Enter name" value=" <?php echo isset($name)?$name:'' ?>" />
                <?php echo isset($error['name'])?$error['name']:'' ?>
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text"  id="name" name="phone" placeholder="Enter phone"
                    value="<?php echo isset($phone)?$phone:'' ?>" />
                <?php echo isset($error['phone'])?$error['phone']:'' ?>

            </div>

            <div class="form-group">
                <label for="alphanumeric
                                        ">alphanumeric

                </label>
                <input type="text" name="alphanumeric
                                        " placeholder="Enter alphanumeric
                                        " value="<?php echo isset($alphanumeric)?$alphanumeric:'' ?>" />
                <?php echo isset($error['alphanumeric'])?$error['alphanumeric']:'' ?>




            </div>

            <div class="form-group">
                <input type="submit" name="register" value="Register" />
            </div>

            <button type="submit">clear </button>
        </fieldset>
    </form>
</body>

</html>




<!--- Regular Expression (regex): pattern check garxa   

                        ^(caret): starting value of any string. 9841*******,9841*****
                        $: end of the string. vvjvjcfvj@pkmc....
                        . = everything except new line character (ab.def=ab9def.abcdef) . ko thauma j rakhna  ni milxa except new line character
                        \s: yesko thauma space or Tab rakhna matra milxa
                        \S : not a whitespace character.
                        \w: a word character (_is not allowed(a-z, A-Z0-9))
                        \W: Not a word character
                        /n:special whitespace charcter


                        Quantifier
                        *:  0 or more occurence of character ca*t=ct, caaaaat
                        + : min 1 , max : No limit
                        ?: 0 or 1
                        (m): exactly time
                        character(m,n)
                        charcter(m\n)



                        \^
                        \$ : escape sequences




                        Character Range
                        [abcd]: vita vako matra lina paiiyo.
                        [^abcd]: abcd bata suru huna mildaina.
                        [a-z]: a dekhi z samma
                        [^a]: except a
                        (ab): grouping


                        SPSS->


                        if(!preg_match('/^[A-Za-z]{3,50}$/',$name'))
                                {
                                    $error['name']="enter a valid name'';
                                }