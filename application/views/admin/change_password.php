<div class="container">
        <div class="row">
            <div class="col s12 l6 offset-l3">
                <div class="card-top-margin card-bottom-margin">
                    <div class="card">
                        <div class="card-content">
                            <div class="center">
                                <h5 class="capitalize">change password</h5>
                            </div>
                        </div>
                        <div class="card-content grey lighten-4">
                            <div class="center"><?php if(isset($msg)){
                                echo $msg;
                            }?> </h6> </div>
                            <?php echo form_open('change_pass');?>
                                <div class="input-field col s12">
                                    <input id="old_pass"  name="old_pass" type="password" class="validate"  minlength="6" required>
                                    <label for="old_pass">OLD PASSWORD</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="new_pass" name="new_pass" type="password" class="validate" minlength="6" required>
                                    <label for="new_pass">NEW PASSWORD</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="conf_pass" name="conf_pass" type="password" class="validate"  minlength="6" required>
                                    <label for="conf_pass">NEW PASSWORD</label>
                                </div>
                                <div class="center">
                                    <input type="submit" value="change" name="change" class="btn blue darken-3">
                                </div>
                            </form>
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
