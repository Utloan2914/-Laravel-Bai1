<h1>Upload File</h1>
<form method="POST" action="<?php echo route('categories.add'); ?>" 
enctype="multipart/form-data">
    <div>
        <input type= "file" name="photo" id="" />">
    </div>
    <?php echo csrf_field();?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token();?>"> -->
    <button type="submit">Upload</button>
</form>