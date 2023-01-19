<?php
$message = $this->session->userdata("message");
if ($message) {
    echo "<p class= 'alert alert-danger'>$message</p>";
    $this->session->unset_userdata("message");
}
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Category</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($all_content_info as $v_content) {
        ?>
            <tr>
                <td><?php echo $v_content->content_id ?></td>
                <td><?php echo $v_content->content_title ?></td>
                <td><?php echo $v_content->content_desc ?></td>
                <td><?php echo $v_content->category_name ?></td>

                <td><img width="50px" height="50px" src="<?php echo $v_content->content_img; ?>"></td>
                <td>
                    <a href="<?php base_url(); ?>edit-form/<?php echo $v_content->content_id ?>"><i class="fa fa-pencil-square-o"></i></a>
                    <a href="<?php base_url(); ?>delete-form/<?php echo $v_content->content_id ?>"><i style="margin-left: 5px;" class="fa fa-trash-o"></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
