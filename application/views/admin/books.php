<?php 
     $conn = mysqli_connect("localhost", "root", "");
     if(!$conn)
     {
        echo "unable to connect to the database ".mysql_error();
     }
     $db = mysqli_select_db($conn, "heritagetab");
     if(!$db)
     {
        echo "unable to connect to the database ".mysql_error();
     }
?>
<main>
        <div class="parallax-container">
            <div class="parallax"><img src="assets/img/4%20(2).jpg"></div>
            <div class="container">
                <div class="flex-container">
                    <div class="flex-items">
                        <div class="center">
                            <h4 class="uppercase white-text bold">rhema word heritage ministries int'l. Inc.</h4>
                            <h5 class="white-text bold uppercase">guidelight literature</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section white">
            <div class="container">
                <div class="row">
                    <div class="col s12 negative-margin-2">
                        <div class="card thinborder">
                            <div class="card-content">
                                <!-- <div class="container"> -->
                                <?php 
                                foreach ($row as $row) {
                                    $cat = $row['category']; ?>
                                <div class="col s12">
                                <div class="center">
                                    <h4 class="uppercase bold blue-text text-darken-4"><?php echo $cat?></h4>
                                </div>
                                <div class="divider blue darken-3"></div>
                                </div>
                                <div class="row mt-2">
                                <?php
                                     $query = "SELECT * FROM books where category ='$cat'";
                                    $result1 = mysqli_query($conn, $query);
                                    if ($result1) {
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                            ?>
                                   <?php echo '<div class="col s12 l4 m12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <img class="activator" src="books/'.$row['book_image'].'">
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator grey-text text-darken-4">'.$row['book_title'].'
                                                <i class="material-icons right small">more_vert</i></span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title grey-text text-darken-4">'.$row['book_title'].'<i class="material-icons right small">close</i></span>
                                                <p>'.nl2br($row['details']).'</p>
                                            </div>
                                        </div>
                                        <a class="btn blue darken-4" href="'.base_url().'book/'.$row['book_title'].'">remove</a>
                                    </div>'
                                    ;
                                        }
                                    }
                                }
                                     ?>
                                   
                                            </div>
                                        </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="card-content">
                           
                        </div>
                        <?php echo form_open_multipart('admin/upload_books');?>
                        <div class="input-field col s12">
                              Book Title:<input type="text" class="validate" name="title" id="title"  required></br>
                              Category: <input type="text" class="validate" name="category" id="category"  required></br> 
                              Details:
                              <textarea class="validate" name="details" id="details"  required></textarea>
                              <div class="file-field input-field">
                                <div class="btn blue darken-3">
                                <span>File</span>
                               <input type="file" class="validate" name="book_image" id="book_image" accept="image/*"  required>
                                </div>
                                <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload an image of the book">
                                </div>
                                </div>
                              <input type="submit" value="upload" name="submit" class="btn blue darken-3">
                        </div>
                        </form>
    </main>