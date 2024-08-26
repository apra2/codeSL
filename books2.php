<?php 
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
   
    if (isset($_POST['title']) && !empty($_POST['title']) && trim($_POST['title'])) 
    {
        $title = $_POST['title'];
        if (!preg_match('/^[A-Za-z]{3,15}$/', $title))
         {
            $error['title'] = "Enter a valid title";
        }
    } 
    else
     {
        $error['title'] = 'Enter your title';
    }


    if (isset($_POST['rank']) && !empty($_POST['rank']) && trim($_POST['rank'])) 
    {
        $rank = $_POST['rank'];
        if (!preg_match('/^[1-9][0-9]*$/', $rank))
         {
            $error['rank'] = "Enter a valid rank";
        }
    } 
    else
     {
        $error['rank'] = 'Enter your rank';
    }

    if (isset($_POST['author']) && !empty($_POST['author']) && trim($_POST['author'])) 
    {
        $author = $_POST['author'];
        if (!preg_match('/^[A-Za-z]{3,15}$/', $author))
         {
            $error['author'] = "Enter a valid author";
        }
    } 
    else
     {
        $error['author'] = 'Enter your author';
    }


    if (isset($_POST['isbn_no']) && !empty($_POST['isbn_no']) && trim($_POST['isbn_no'])) 
    {
        $isbn_no = $_POST['isbn_no'];
        if (!preg_match('/^\d{10}$|^\d{13}$/', $isbn_no))
        {
            $errors['isbn_no'] = "ISBN No must be exactly 10 or 13 digits.";
        }
    } 
    else
     {
        $error['isbn_no'] = 'Enter your isbn_no';
    }
    /* /:start huni bela ani end huni bela rakhni
    ^: yo rakhesi surmai j xa tei huna paryo (start) beginning of the input
    \d{10}: digit huna paryo {0-9} 10 ota 
    $: yo vayesi sakyo 
    |: OR operator ho ki 10 ota huna paryo ki aba paxadi ko huna paryo
    \d{13}: ki ta isbn number 13 ota huna paryo */
    

    
    if (isset($_POST['no_of_pages']) && !empty($_POST['no_of_pages']) && trim($_POST['no_of_pages'])) 
    {
        $no_of_pages = $_POST['no_of_pages'];
        if (!preg_match('/^\d+$/', $no_of_pages)) 
        {
            $errors['no_of_pages'] = "No. of Pages must be a positive number.";
        }
    } 
    else
     {
        $error['no_of_pages'] = 'Enter your no_of_pages';
    } 
    //+ : one or more occurence


    if (isset($_POST['price']) && !empty($_POST['price']) && trim($_POST['price'])) 
    {
        $price = $_POST['price'];
        if (!is_numeric($price) && $price >=0) 
        {
            $errors['price'] = "Price must be a positive number.";
        }
    }

    else
     {
        $error['price'] = 'Enter your price';
    }
    //!is_numeric: number nai huna pary price ( string yeta huni huna vayena)
    // &&: number pani huna paryo ani...
    //price> 0: positive huna paryo price


    if (isset($_POST['publication']) && !empty($_POST['publication']) && trim($_POST['publication'])) 
    {
        $publication = $_POST['publication'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $publication)) 
        {
            $errors['publication'] = "Publication name should contain only letters and spaces.";
        }
    }
    else
     {
        $error['publication'] = 'Enter your publication';
    } //publication ma space pani huna paaiyo.



    if (isset($_POST['edition']) && !empty($_POST['edition']) && trim($_POST['edition'])) 
    {
        $edition = $_POST['edition'];
        if (!preg_match('/^[a-zA-Z0-9\s]+$/', $edition)) {
            $errors['edition'] = "Edition should contain only letters, numbers, and spaces.";
        }
    }
    else
     {
        $error['edition'] = 'Enter your edition';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body> 
    
    <form action="" method="post">
        <fieldset>
            <legend>Books</legend>

            <label for="book_category_id">Book Category:</label>
            <select name="book_category_id" id="book_category_id">
                <option value=""></option>
                <option value="novel">Novel</option>
                <option value="philosophy">Philosophy</option>
                <option value="biography">Biography</option>
                <option value="fictional">Fictional</option>
            </select> <br>

            <label for="title">Title:</label>
            <input type="text" id="title" name="title"> <br>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author"> <br>

            <label for="isbn_no">ISBN No:</label>
            <input type="text" id="isbn_no" name="isbn_no"> <br>

            <label for="no_of_pages">No. of Pages:</label>
            <input type="text" id="no_of_pages" name="no_of_pages"> <br>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price"> <br>

            <label for="publication">Publication:</label>
            <input type="text" id="publication" name="publication"> <br>

            <label for="edition">Edition:</label>
            <input type="text" id="edition" name="edition"> <br>

            <label>Status:</label>
            <input type="radio" id="status_active" name="status" value="Active">
            <label for="status_active">Active</label>
            <input type="radio" id="status_deactive" name="status" value="Deactive">
            <label for="status_deactive">Deactive</label> <br>

            <button type="submit"> Add The Cart</button>
        </fieldset>
    </form>
</body>

</html>