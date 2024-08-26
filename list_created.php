                <?php
                require_once 'book function.php';
                if (isset($_GET['id'])) 
                {
                    $id = $_GET['id'];
                    if (deleteBookCategory($id)) 
                    {
                        $error['message'] = "Category delete success";
                    } else {
                        $error['message'] = "Category delete failed";
                    }
                }
                $data =getAllBookCategory();
                ?>
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                    <style>
                    .success {
                        color: green;
                        font-weight: bold;
                        padding: 50px;
                    }
                    .error {
                        color: red;
                        font-weight: bold;
                        padding: 50px;
                    }
                    .rank {
                        background-color: orange;
                    }
                    .sn {
                        background-color: beige;
                    }
                    .h1 {
                        color: Green;
                        text-align: center;
                    }
                    img {
                        height: 200px;
                        width: 200px;
                        padding: 0 0 0 400px;
                    }
                    .img3 {
                        padding: 0 0 0 300px;
                    }
                    </style>
                </head>
                <body>
                    <h1 class="h1">Book List Category</h1>
                    <img class="img3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3ASBdvOPPiR8oQB2H-uNtuIAkbdrdnIK8BA&s"
                        alt="image">
                    <img src="https://wordsrated.com/wp-content/uploads/2022/02/Number-of-Books-Published-Per-Year.jpg" alt="image">
                    <table border="25" width="100%">
                        <tr class="rank">
                            <th> SN</th>
                            <th> Title</th>
                            <th> Rank</th>
                            <th> Status</th>
                            <th> created_at</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($data as $key => $category)    
                        {?>
                        <tr>
                            <td class="sn"><?php echo $key+1 ?></td>
                            <!-- serial number is incremented by 1 -->
                            <td><?php echo $category['title']?></td>
                            <td><?php echo $category ['rank']?></td>
                            <td><?php echo printStatus($category['status']);?></td>
                            <td><?php echo $category ['created_at']?></td>
                            <td>
                                <a href="list_created.php?id=<?php echo $category['ID'] ?>" onclick="return confirm('Are you sure to delete?')">Delete</a>
                            </td>
                            <td>
                                <a href="edit_category.php?id=<?php echo $category['ID']?>">Edit The Book</a>
                            </td>
                            <!-- edit _category.php le xai euta link create garxa jata click garyo vani edit_.. tyo page ma lanxa
                            ?id=... adds id parameter in the URL -->
                        </tr>
                        <?php }?>
                    </table>
                </body>
                </html>

                <!-- hidden , readonly , disabled -->