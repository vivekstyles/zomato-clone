<main class="col-lg-9 align-content-end px-lg-5">
    <div class="jumbotron">
        <h1 class="display-5">Upload menu</h1>
        <p class="lead">upload your restaurant menus</p>
        <hr class="w-60">
        <form action="." method="POST" enctype="multipart/form-data" id="form_id">
            <input type="hidden" name="action" value="insert_blog_image">

            <!-- uploading images -->
            <div class="form-group mb-4">
                <label class="custom-file">
                    <input type="file" name="blog_image" id="" placeholder="" class="custom-file-input accordion-button" aria-describedby="fileHelpId">
                    <span class="custom-file-control"></span>
                </label>
                <?php if ($error == ''):?>
                <small id="fileHelpId" class="form-text text-muted">choose image from your device</small>
                <?php else:?>
                <small id="fileHelpId" class="form-text text-muted"><?php echo $error;?></small>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn col-3 btn-danger  mb-4 mt-5" id="submitID">Submit</button>

        </form>
</main>