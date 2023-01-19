<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .container img {
            width: 600px;
        }

        .logo {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .nav {
            background-color: #064a90;
        }

        .nav {
            margin-bottom: 40px;
        }

        .nav-tabs>li>a {
            margin: 0;
            padding: 0 10px;
            display: inline-block;
            float: none;
            width: 100%;
            font-size: 16px;
            line-height: 50px;
            position: relative;
            font-weight: 700;
            color: #fff;
        }

        .card {
            background-color: #fff;
            border: 1px solid transparent;
            height: 300px;
            margin: 10px;

        }

        .card .card-img {
            position: relative;
            padding: 10px;
            display: table;
        }

        .card .card-body {
            display: table;
            width: 100%;
            padding: 12px;

        }

        .card-border {
            border-color: #999;
            background-color: #ededed;
        }

        .card-body h3,
        p {
            white-space: nowrap;
            width: 220px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card-body h4 {
            font-weight: bold;
        }

        .login-btn {
            display: flex;
            justify-content: end;
        }
    </style>
</head>

<body>
    <img class="logo img-responsive" src="frontend/logo.jpg" alt="">
    <div class="container">
        <ul class="nav nav-tabs nav-justified nav-tabs-dropdown" role="tablist">
            <li role="presentation" class="in active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
            <li role="presentation"><a href="#sports" aria-controls="#sports" role="tab" data-toggle="pill">Sports</a></li>
            <li role="presentation"><a href="#national" aria-controls="#national" role="tab" data-toggle="tab">National</a></li>
            <li role="presentation"><a href="#international" aria-controls="#international" role="tab" data-toggle="tab">International</a></li>
            <li role="presentation"><a href="#sharemarket" aria-controls="#sharemarket" role="tab" data-toggle="tab">Share Market</a></li>
        </ul>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active row" id="home">
                <?php
                foreach ($all_content_info as $v_content) {
                ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="card card-border">
                            <div class="card-img">
                                <img style="width:100%;" src="<?php echo $v_content->content_img; ?>" alt="">
                            </div>
                            <div class="card-body">
                                <p><?php echo $v_content->category_name; ?></p>
                                <h4><?php echo $v_content->content_title; ?></h4>
                                <p><?php echo $v_content->content_desc; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="sports">
                <?php
                $this->db->select("*");
                $this->db->from("tbl_content");
                $this->db->where("category_id", 1);
                $query_result = $this->db->get();
                $content_info_sports = $query_result->result();

                foreach ($content_info_sports as $v_content) {
                ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="card card-border">
                            <div class="card-img">
                                <img style="width:100%;" src="<?php echo $v_content->content_img; ?>" alt="">
                            </div>
                            <div class="card-body">
                                <h4><?php echo $v_content->content_title; ?></h4>
                                <p><?php echo $v_content->content_desc; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="national">
                <?php
                $this->db->select("*");
                $this->db->from("tbl_content");
                $this->db->where("category_id", 2);
                $query_result = $this->db->get();
                $content_info = $query_result->result();

                foreach ($content_info as $v_content) {
                ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="card card-border">
                            <div class="card-img">
                                <img style="width:100%;" src="<?php echo $v_content->content_img; ?>" alt="">
                            </div>
                            <div class="card-body">
                                <h4><?php echo $v_content->content_title; ?></h4>
                                <p><?php echo $v_content->content_desc; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="international">
                <?php
                $this->db->select("*");
                $this->db->from("tbl_content");
                $this->db->where("category_id", 3);
                $query_result = $this->db->get();
                $content_info = $query_result->result();

                foreach ($content_info as $v_content) {
                ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="card card-border">
                            <div class="card-img">
                                <img style="width:100%;" src="<?php echo $v_content->content_img; ?>" alt="">
                            </div>
                            <div class="card-body">
                                <h4><?php echo $v_content->content_title; ?></h4>
                                <p><?php echo $v_content->content_desc; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div role="tabpanel" class="tab-pane" id="sharemarket">
                <?php
                $this->db->select("*");
                $this->db->from("tbl_content");
                $this->db->where("category_id", 4);
                $query_result = $this->db->get();
                $content_info = $query_result->result();

                foreach ($content_info as $v_content) {
                ?>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="card card-border">
                            <div class="card-img">
                                <img style="width:100%;" src="<?php echo $v_content->content_img; ?>" alt="">
                            </div>
                            <div class="card-body">
                                <h4><?php echo $v_content->content_title; ?></h4>
                                <p><?php echo $v_content->content_desc; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>