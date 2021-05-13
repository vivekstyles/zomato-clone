<main class="col-lg-9 align-content-end px-lg-5">
    <div class="jumbotron">
        <h1 class="display-5">Upload hotel banner</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="w-60">
        <form action="." method="POST" enctype="multipart/form-data" id="form_id">
            <input type="hidden" name="action" value="insert_banner_and_menu_image">

            <!-- uploading images -->
            <div class="form-group mb-4">
                <label class="custom-file">
                    <input type="file" name="banner_image" id="" placeholder="" class="custom-file-input accordion-button" aria-describedby="fileHelpId">
                    <span class="custom-file-control"></span>
                </label>
                <?php if ($error == ''):?>
                <small id="fileHelpId" class="form-text text-muted">choose image from your device</small>
                <?php else:?>
                <small id="fileHelpId" class="form-text text-muted"><?php echo $error;?></small>
                <?php endif; ?>
            </div>
            <div class="form-group col-lg-8">
                <label for="">Tell what special about your hotel</label>
                <textarea class="form-control" name="about" id="" rows="1"></textarea>
                <span>*</span>
            </div>
            <div class="form-group col-lg-3">
                <label for="">per person</label>
                <input type="text"class="form-control form-control-sm" name="per_person" id="per_person" aria-describedby="helpId" placeholder="">
                <span id="category_error">*</span>
            </div>
            <button type="submit" class="btn col-3 btn-danger  mb-4 mt-5" id="submitID">Submit</button>
            <br>
        </form>
</main>