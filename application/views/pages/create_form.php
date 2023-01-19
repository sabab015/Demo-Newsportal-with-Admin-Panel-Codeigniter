<?php
$message = $this->session->userdata("message");
if ($message) {
    echo "<p class= 'alert alert-danger'>$message</p>";
    $this->session->unset_userdata("message");
}
?>


<form action="<?php echo base_url(); ?>save-content" method="post" enctype="multipart/form-data">
    <div class="">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="content_title" type="textarea" class="form-control" value="<?php echo set_value('title'); ?>" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <textarea class="form-control" name="content_desc" rows="4" value="<?php echo set_value('description'); ?>" placeholder="Description"></textarea>
        </div>

        <label>Choose news category: </label>
        <select class="form-control" name="category_id">
            <option value="">Select Category</option>
            <?php
            foreach ($get_category as $g_cat) {
            ?>
                <option value="<?php echo $g_cat->category_id; ?>"><?php echo $g_cat->category_name; ?></option>
            <?php
            } ?>
        </select>

        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <input name="content_img" type="file" id="exampleInputFile">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
