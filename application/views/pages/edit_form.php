<link href="../frontend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../frontend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="../frontend/vendors/nprogress/nprogress.css" rel="stylesheet">
<link href="../frontend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<link rel="stylesheet" href="../frontend/dashboard.css">
<link href="../frontend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<link href="../frontend/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
<link href="../frontend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="../frontend/build/css/custom.min.css" rel="stylesheet">


<?php
$message = $this->session->userdata("message");
if ($message) {
    echo "<p class= 'alert alert-danger'>$message</p>";
    $this->session->unset_userdata("message");
}
?>


<form action="<?php echo base_url(); ?>update-content" method="post" enctype="multipart/form-data">
    <div class="">

        <input name="content_id" type="hidden" class="form-control" value="<?php echo $all_content_info_by_id->content_id ?>">

        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="content_title" type="textarea" class="form-control" value="<?php echo $all_content_info_by_id->content_title ?>" placeholder="Title">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">description</label>
            <input name="content_desc" type="textarea" rows="4" class="form-control" value="<?php echo $all_content_info_by_id->content_desc ?>" placeholder="Description">
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Image</label>
            <input type="hidden" name="old_img" value="<?php echo $all_content_info_by_id->content_img ?>">
            <input name="content_img" type="file">
        </div>

        <button type="submit" class="btn btn-primary">Update Content</button>
    </div>
</form>