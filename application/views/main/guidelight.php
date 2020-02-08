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
                                foreach($cat as $cat) {
                                    $category = $cat['category']; ?>
                                <div class="col s12">
                                <div class="center">
                                    <h4 class="uppercase bold blue-text text-darken-4"><?php echo $category?></h4>
                                </div>
                                <div class="divider blue darken-3"></div>
                                </div>
                                <div class="row mt-2">
                                <?php
                                     $query = $this->db->get_where('books', array('category'=>$category));
                                    $result = $query->result_array();
                                    if ($result) {
                                       foreach ($result as $result) {
                                           ?>
                                   <?php echo '<div class="col s12 l4 m12">
                                        <div class="card">
                                            <div class="card-image waves-effect waves-block waves-light">
                                                <img class="activator" src="books/'.$result['book_image'].'">
                                            </div>
                                            <div class="card-content">
                                                <span class="card-title activator grey-text text-darken-4">'.$result['book_title'].'
                                                <i class="material-icons right small">more_vert</i></span>
                                            </div>
                                            <div class="card-reveal">
                                                <span class="card-title grey-text text-darken-4">'.$result['book_title'].'<i class="material-icons right small">close</i></span>
                                                <p>'.nl2br($result['details']).'</p>
                                            </div>
                                        </div>
                                    </div>'
                                    ;
                                        }
                                    }
                                }
                                     ?>
                                   
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
    </main>