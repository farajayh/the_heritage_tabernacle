<?php
$msg='';
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col s12 l6 offset-l3">
                <div class="card-top-margin card-bottom-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="center">
                                <h5 class="capitalize">login</h5>
                            </div>
                        </div>
                        <div class="card-content grey lighten-4">
                            <div class="center"> <h6 class="red-text"> <?php if (isset($info)){echo $info;}?> </h6> </div>
                           <?php echo form_open('login');?>
                                <div class="input-field col s12">
                                    <input id="username" value="Admin" name="username" type="text" required>
                                    <label for="username">USERNAME</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" name="password" type="password" class="validate" required>
                                    <label for="password">PASSWORD</label>
                                </div>
                                <div class="center">
                                    <input type="submit" value="Login" name="login" class="btn blue darken-3">
                                </div>
                        <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <style>
        .capitalize {
            text-transform: capitalize;
        }

        .card-top-margin {
            margin-top: 40%;
        }

        .card-bottom-margin {
            margin-bottom: 5%;
        }

    </style> 
    </main> 
