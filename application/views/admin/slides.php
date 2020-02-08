<main>
    <div class="container mt-2">
        <div class="row">
    <?php if ($result) {
          foreach ($result as $row){
        ?>
              <?php echo '
                <div class="col s2">
                <img src="slides/'.$row['image_name'].'" alt="" class="responsive-img">
                <a class="btn blue darken-4 mt-2 mb-2" href="'.base_url()."images/".urlencode($row['image_name']).'">remove</a></div>';

                
    }
}
                ?>
                
              </div>
        </div>
        <div class="container">
        <?php if(isset($error)){echo $error;}?>
        <?php echo form_open_multipart('admin/upload_slides');?>
                    <div class="file-field input-field">
                 <div class="btn blue darken-3">
            <span>File</span>
            <input type="file" name="slide" id="slide" accept="image/*">
            </div>
            <div class="file-path-wrapper">
            <input class="file-path validate" type="text" placeholder="Upload an image">
           </div>
            </div>
            <input type="submit" value="upload" name="submit" class="btn blue darken-3">
        </form>
        </div> 
        </main>
