<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>BoBuy</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="../assets/css/main.css"/>
        <link rel="stylesheet" href="../assets/css/custom.css"/>
        <link rel="icon" href="../images/bobuy_newlogo.png">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <style>
            .main-div{
                padding: 6em 0;
            }
            .thumbnail>.list-group-image{
                width:100%;
                height: 180px;
            }
            .item{
                margin-bottom:2em;
            }
            .grid-post-date{
                color: #888;
                font-size: 12px;
            }
            .main-ancer:hover{
                text-decoration: none;
            }
            .full-img{
                width:100%;
            }
            .content{
                margin-top: 3em;
                line-height: 29px;
            }
            .list-group-image {
                width: 100%;
            }
        </style>
    </head>
    <body>
    <body class="subpage">
        <?php
        include '../connection.php';
        require ("../header.php");
        ?>
        <div class="container main-div">
            <?php if (empty($_GET['d'])) { ?>
                <header class="align-center col-md-12">
                    <h3>BoBuy's Blog</h3>
                </header>
            <?php } ?>
            <?php
            $sql = "SELECT * FROM tbl_blog";
            $result = mysqli_query($conn, $sql);
            ?>

            <div id="products" class="row list-group">
                <?php
                if (empty($_GET['d'])) {
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <div class="item col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <a href="?d=<?php echo $row['permalink']; ?>" class="main-ancer">
                                    <div class="thumbnail">
                                        <img class="group list-group-image" src="https://hello.bo-buy.com/uploads/<?php echo $row['thumbnail_file']; ?>" alt="" />
                                        <div class="caption">
                                            <div class="row">
                                                <div class="col-xs-12 col-md-8">
                                                    <h5 class="group inner list-group-item-heading">
                                                        <?php echo $row['title']; ?>
                                                    </h5>
                                                </div>
                                                <div class="col-xs-12 col-md-4 text-right grid-post-date">
                                                    <?php
                                                    echo date_format(date_create($row['create_time']), "d M Y");
                                                    ?>
                                                </div>
                                            </div>
                                            <span class="group inner list-group-item-text wrap-word">
                                                <?php echo substr(strip_tags($row['content']), 0, 130) . '...'; ?>
                                            </span>
                                        </div>
                                    </div>
                                </a>   
                            </div>
                            <?php
                        }
                    } else {
                        echo "No blogs availabel";
                    }
                } else {
                    $get_blog_sql = "SELECT * FROM tbl_blog WHERE permalink='" . $_GET['d'] . "' limit 1";
                    $result = mysqli_query($conn, $get_blog_sql);
                    $blog = mysqli_fetch_array($result);
                    //print_r($blog);
                    ?>

                    <div class="item  col-md-12">
                        <h1 class="text-center" ><?php echo $blog['title']; ?></h1>
                        <div class="col-xs-12 col-md-12 text-right grid-post-date">
                            <?php
                            echo date_format(date_create($blog['create_time']), "d M Y");
                            ?>
                        </div>
                        <div class="col-xs-12 col-md-12">
                            <img class="full-img" src="https://hello.bo-buy.com/uploads/<?php echo $blog['thumbnail_file']; ?>" alt="" />
                        </div>
                        <div class="col-xs-12 col-md-12 content">
                            <?php echo $blog['content']; ?>
                        </div>
                    </div>	

                    <?php
                }
                ?>
            </div>
        </div>

        <?php require ("../footer.php"); ?>
        <script>
            function setHeight(col) {
                var $col = jQuery(col);
                var $maxHeight = 0;
                $col.each(function () {
                    var $thisHeight = jQuery(this).outerHeight();
                    if ($thisHeight > $maxHeight) {
                        $maxHeight = $thisHeight;
                    }
                });
                $col.height($maxHeight);
            }
            setHeight(jQuery('#products > .item'));        
        </script>
    </body>
</html>