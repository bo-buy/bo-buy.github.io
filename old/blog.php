<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title>BoBuy</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="stylesheet" href="assets/css/main.css"/>
        <link rel="stylesheet" href="assets/css/custom.css"/>
        <link rel="icon" href="images/bobuy_newlogo.png">
        
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
			.wrap-word p{
				display: block;
			    display: -webkit-box !important;
			    -webkit-line-clamp: 8;
			    -webkit-box-orient: vertical;
			    overflow: hidden;
			    text-overflow: ellipsis;
			    line-height: 1.8em;
			    margin-bottom: 1rem;
			}
			.item{
				margin-bottom:2em;
			}
        </style>
    </head>
    <body>
    <body class="subpage">
        <?php
        include 'connection.php';
        require ("header.php");
        ?>
		<div class="container main-div">
        	<header class="align-center">
				<h2>Blogs</h2>
			</header>
            
            <?php 
            	$sql = "SELECT * FROM tbl_blog";
				$result = mysqli_query($conn, $sql);
			?>
            
            <div id="products" class="row list-group">
            	<?php 
            		if (mysqli_num_rows($result) > 0) {
				    	// output data of each row
				    	while($row = mysqli_fetch_assoc($result)) { ?>
			            	<div class="item  col-xs-4 col-lg-4">
			                    <div class="thumbnail">
			                        <img class="group list-group-image" src="https://hello.bo-buy.com/uploads/<?php echo $row['thumbnail_file']; ?>" alt="" />
			                        <div class="caption">
			                            <h4 class="group inner list-group-item-heading">
			                            	<?php echo $row['title']; ?>
			                            </h4>
			                            <span class="group inner list-group-item-text wrap-word">
			                                <?php echo $row['content']; ?>
			                            </span>
			                            <div class="row">
			                                <div class="col-xs-12 col-md-6">
			                                    <p class="lead">
			                                    	<?php 
			                                    		echo date_format(date_create($row['create_time']),"d M Y");
			                                    	?>
			                                    </p>
			                                </div>
			                                <div class="col-xs-12 col-md-6 text-right">
			                                    <a class="btn btn-success" href="#">More</a>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
                
                <?php }
					} else {
					    echo "No blogs availabel";
					}
                ?>
                <!--<div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item  col-xs-4 col-lg-4">
                    <div class="thumbnail">
                        <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        
        <?php require ("footer.php"); ?>
    </body>
</html>