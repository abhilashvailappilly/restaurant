<?php include('partials-front/menu.php');?>
	
    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Dinner with us  <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates" data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Aaaaaa aaaaaa aaaaaaaaa aa </h2>
                            <p>AAAAA AAAA AAAAA  AAAAAA AAA AAAA AAAAAAA AAAA AAAAAAAAA  AA AAAAAAAAA AAAAAAAA AAAAAA AAAAAA AAAAAAA</p>
                            <div class="book-btn"> 
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Book book my Table</a>
                            </div>
                            <a href="#about">
                                <div class="mouse"></div>
                            </a>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="about" class="about-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title"> About Us </h2>
                        <h3>Welcome to .....</h3>
                        <p>Our menu features a curated selection of dishes that have been passed down through generations, each one crafted with care by our skilled chefs using only the freshest and highest-quality ingredients.</p>
                        <p>Our dining room exudes an inviting and sophisticated ambiance, perfect for a romantic night out or a special occasion with friends and family. Whether you're in the mood for a casual bite or a multi-course meal, we have something for everyone.</p>

                        <p>We take pride in our exceptional service and we're dedicated to making sure your experience is nothing less than extraordinary. Our knowledgeable servers are ready to guide you through the menu, recommend a wine pairing and make sure your every need is met. </p>
                         <p>Thank you for choosing...... We can't wait to share our love of great food and warm hospitality with you.

                            Make a reservation today and let us take you on a culinary adventure!</p> 
                        </div>
                </div>
                <!-- end col -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <div class="about-images">
                            <img class="about-main" src="images/about-main.jpg" alt="About Main Image">
                            <img class="about-inset" src="images/about-inset.jpg" alt="About Inset Image">
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>

    <div class="special-menu pad-top-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title color-white text-center"> Today's Specials </h2>
                        <h5 class="title-caption text-center"> “To be a good server you need an elevated personality with a good heart.” .. </h5>
                    </div>
                    <div class="special-box">
                        <div id="owl-demo">
                   

                            <?php
                            //create sql query to display categories
                            $sql=" SELECT * FROM category  WHERE active ='Yes' AND featured='Yes' LIMIT 8";
                            $res =mysqli_query($conn,$sql);

                            $count=mysqli_num_rows($res);
                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    //
                                    $id=$row['id'];
                                    $tittle=$row['tittle'];
                                    $image_name=$row['image_name'];
                                    ?>
                                                               
                            <div class="item item-type-zoom">

                                                          <a href="#" class="item-hover">
                                                        <div class="item-info">
                                                            <div class="headline">
                                                                <?php echo $tittle;?>
                                                                <div class="line"></div>
                                                                <div class="dit-line">it is a popular dish consisting of bread that has been brushed with garlic butter .</div>
                                                               
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="item-img">
                                                        <img src="<?php echo SITEURL;?>images/category/<?php echo $image_name;?>" alt="sp-menu">
                                                    </div>
                                                    </div> 
                                                      
                               
                                                   
                                         
                                                                            
                                                
                                            
                                            <!-- end special-box -->
                                       
                                                            
                                    <?php
                                }

                            }
                            else{
                                echo "<div class='error'>Category not added</div>";

                            }
                            


                            ?> 
                              </div>
                            </div>
                                  
                            
                            <!--additioanal-->
                             </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end container -->
                            </div>
                            <!-- end special-menu -->
                
                                
                        
                        <div id="menu" class="menu-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Menu 	
					</h2>
                        <p class="title-caption text-center">"Cooking is an art and patience a virtue... Careful shopping, fresh ingredients and an unhurried approach are nearly all you need. There is one more thing - love. Love for food and love for those you invite to your table."</p>
                    </div>

                   
                    <div class="tab-menu">
                        <div class="slider slider-nav">
                            <div class="tab-title-menu">
                                <h2>STARTERS</h2>
                                <p> <i class="flaticon-canape"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>MAIN DISHES</h2>
                                <p> <i class="flaticon-dinner"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DESERTS</h2>
                                <p> <i class="flaticon-desert"></i> </p>
                            </div>
                            <div class="tab-title-menu">
                                <h2>DRINKS</h2>
                                <p> <i class="flaticon-coffee"></i> </p>
                            </div>
                        </div>

                        <?php
                    $sql2="SELECT * FROM food WHERE active='Yes' AND featured='Yes' LIMIT 4";
                    $res2=mysqli_query($conn,$sql2);

                    $count2=mysqli_num_rows($res2);

                    if($count2>0){

                        while($row=mysqli_fetch_assoc($res2))
                        {
                            $id=$row['id'];
                            $tittle=$row['tittle'];
                            $price=$row['price'];
                            $description=$row['description'];
                            $image_name=$row['image_name'];
                            ?>
                           
                            <div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
                                    <div class="offer-item">
                                       
                                          <img src="<?php echo SITEURL;?>images/food/<?php echo $image_name;?>" alt="" class="img-responsive">
                                         

                                            

                                    
                                        
                                        <div>
                                            <h3><?php echo $tittle; ?></h3>
                                            <p> <?php echo $description;?></p>
                                            <a href="#" class="btn btn-primary">Add to cart</a>
                                        </div>
                                        <span class="offer-price"><?php echo $price;?></span>
                                    </div>
                               
                                <!-- end col -->
                              
                                <!-- end col -->
                                
                                <!-- end col -->
                            
                                </div>
                            
                          </div>
                             
                     


                            <?php
                        }

                    }else{
                        echo"<div class='error'>Food not available.</div>";
                    }

                    ?>

                    </div>
                    </div>
                    <!-- end tab-menu -->
                   <a href="products.php"> <i class="glyphicon glyphicon-chevron-down moreicon"></i></a>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>  
        <!-- end container -->
    </div> 
    <!-- end menu -->

    <div id="our_team" class="team-main pad-top-100 pad-bottom-100 parallax">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Team 	
					</h2>
                        <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                    </div>
                    <div class="team-box">

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="images/staff-01.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>John Doggett</h3>
                                        <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="images/staff-02.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Jeffrey Spender</h3>
                                        <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-md-4 col-sm-6">
                                <div class="sf-team">
                                    <div class="thumb">
                                        <a href="#"><img src="images/staff-03.jpg" alt=""></a>
                                    </div>
                                    <div class="text-col">
                                        <h3>Monica Reyes</h3>
                                        <p>Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Aenean commodo ligula.</p>
                                        <ul class="team-social">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end team-box -->

                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end team-main -->

    <div id="gallery" class="gallery-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                        <h2 class="block-title text-center">
						Our Gallery	
					</h2>
                        <p class="title-caption text-center">There are many variations of passages of Lorem Ipsum available </p>
                    </div>
                    <div class="gal-container clearfix">
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#1">
                                    <img src="images/gallery_01.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="1" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_01.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 1 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#2">
                                    <img src="images/gallery_02.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_02.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 2 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#3">
                                    <img src="images/gallery_03.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="3" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_03.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 3 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#4">
                                    <img src="images/gallery_04.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="4" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_04.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 4 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#5">
                                    <img src="images/gallery_05.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="5" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_05.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 5 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#9">
                                    <img src="images/gallery_06.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="9" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_06.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 6 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#10">
                                    <img src="images/gallery_07.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="10" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_07.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 7 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#11">
                                    <img src="images/gallery_08.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="11" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_08.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 8 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#12">
                                    <img src="images/gallery_09.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="12" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_09.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 9 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="#" data-toggle="modal" data-target="#13">
                                    <img src="images/gallery_10.jpg" alt="" />
                                </a>
                                <div class="modal fade" id="13" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            <div class="modal-body">
                                                <img src="images/gallery_10.jpg" alt="" />
                                            </div>
                                            <div class="col-md-12 description">
                                                <h4>This is the 10 one on my Gallery</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end gal-container -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end gallery-main -->

   
   

    <!--new review-->

    <div class="bg-secondary p-5 mb-5 blog-main pad-top-100 pad-bottom-100 parallax" id="newreview">
        <div class="container">
            <h2 class="text-center review_header">Customer Reviews</h2>

            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center p-3" >
                        <i class="fa-solid fa-house-circle-check display-1 text-info"></i>
                        <div class="card-body review_card">
                          <h4 class="card-title review_customer_name">Abhay c g </h4>
                         <!--rating satr-->
                          
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star"></span>
                         <span class="fa fa-star"></span>
                          
                          <!-- rating.js file -->
                          <script src="js/addons/rating.js"></script>
                          <!--rating star-->
                          <p class="card-text">Over priced and very low quantity of food. </p>
                        </div>
                      </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-center p-3">
                        <i class="fa-solid fa-house-circle-check display-1 text-info"></i>
                        <div class="card-body review_card">
                            <h4 class="card-title review_customer_name">Abhay c g </h4>
                            <!--rating satr-->
                          
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star"></span>
                         <span class="fa fa-star"></span>
                          
                          <!-- rating.js file -->
                          <script src="js/addons/rating.js"></script>
                          <!--rating star-->
                            <p class="card-text">Over priced and very low quantity of food. </p>
                         </div>
                      </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center p-3">
                        <i class="fa-solid fa-house-circle-check display-1 text-info"></i>
                        <div class="card-body review_card">
                            <h4 class="card-title review_customer_name">Abhay c g </h4>
                              <!--rating satr-->
                          
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star"></span>
                         <span class="fa fa-star"></span>
                          
                          <!-- rating.js file -->
                          <script src="js/addons/rating.js"></script>
                          <!--rating star-->
                            <p class="card-text">Over priced and very low quantity of food. </p>
                        </div>
                      </div>
                </div>
            </div>

                <div class="row pt-4">

                <div class="col-md-4">
                    <div class="card text-center p-3" >
                        <i class="fa-solid fa-house-circle-check display-1 text-info"></i>
                        <div class="card-body review_card">
                            <h4 class="card-title review_customer_name">Abhay c g </h4>
                            <!--rating satr-->
                          
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star"></span>
                         <span class="fa fa-star"></span>
                          
                          <!-- rating.js file -->
                          <script src="js/addons/rating.js"></script>
                          <!--rating star-->
                          <p class="card-text">Over priced and very low quantity of food. </p>
                        </div>
                      </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="card text-center p-3">
                        <i class="fa-solid fa-house-circle-check display-1 text-info"></i>
                        <div class="card-body review_card">
                            <h4 class="card-title review_customer_name">Abhay c g </h4>
                              <!--rating satr-->
                          
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star"></span>
                         <span class="fa fa-star"></span>
                          
                          <!-- rating.js file -->
                          <script src="js/addons/rating.js"></script>
                          <!--rating star-->
                            <p class="card-text">Over priced and very low quantity of food. </p>
                        </div>
                      </div>
                </div>
               <div class="col-md-4">
                    <div class="card text-center p-3" >
                        <i class="fa-solid fa-house-circle-check display-1 text-info"></i>
                        <div class="card-body review_card">
                          <h4 class="card-title review_customer_name">Abhay c g </h4>
                         <!--rating satr-->
                          
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star checked"></span>
                         <span class="fa fa-star"></span>
                         <span class="fa fa-star"></span>
                          
                          <!-- rating.js file -->
                          <script src="js/addons/rating.js"></script>
                          <!--rating star-->
                          <p class="card-text">Over priced and very low quantity of food. </p>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <!--end of new review-->

    



    <div id="reservation" class="reservations-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="form-reservations-box">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
						Reservations			
					</h2>
                        </div>
                        <h4 class="form-title">BOOKING FORM</h4>
                        <p>PLEASE FILL OUT ALL REQUIRED* FIELDS. THANKS!</p>

                        <form id="contact-form" method="post" style="    line-height: 3.80857;" class="reservations-box" name="contactform" action="mail.php">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="form_name" id="form_name" placeholder="Name" required="required" data-error="Firstname is required.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="email" name="email" id="email" placeholder="E-Mail ID" required="required" data-error="E-mail id is required.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="phone" id="phone" placeholder="contact no.">
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="no_of_persons" id="no_of_persons" class="selectpicker">
                                        <option selected disabled>No. Of persons</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <input type="text" name="date-picker" id="date-picker" placeholder="Date" required="required" data-error="Date is required." />
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box " style="min-height:53px;">
                                    <input type="text" name="time-picker" id="time-picker" placeholder="Time" required="required" data-error="Time is required." />
                                </div>
                            </div>
                              <!-- end col -->
                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-box">
                                    <select name="table_no" id="table_no" class="selectpicker">
                                        <option selected disabled>Table Number</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                </div>
                            </div>
                            
                            <!-- end col -->
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-box text-center">
                                    <select name="preferred_food" id="preferred_food" class="selectpicker">
                                        <option selected disabled>preferred food</option>
                                        <option>Indian</option>
                                        <option>Continental</option>
                                        <option>Mexican</option>
                                    </select>
                                </div>
                            </div>
                            <!-- end col -->
                            
                            <!-- end col -->

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="reserve-book-btn text-center">
                                    <button class="hvr-underline-from-center" type="submit" value="SEND" id="submit">BOOK MY TABLE </button>
                                </div>
                            </div>
                            <!-- end col -->
                        </form>
                        <!-- end form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end reservations-box -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end reservations-main -->

    <!-- new reservation -->

    <?php

        //start session
        session_start();

        //create constant to store non repeating values
        define('SITEURL','http://localhost/restaurant/');
        define('LOCALHOST','localhost');
        define('DB_USERNAME','root');
        define('DB_PASSWORD','');
        define('DB_NAME','restaurant');
        
         //executr query and save data in database
         $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));//database connecction
         $db_select = mysqli_select_db($conn,DB_NAME) or  die(mysqli_error($conn));


?>

    <div class="main-content">
    <div class="wrapper">
    <h1>Add admin</h1><br><br>

    <?php
          if(isset($_SESSION['add']))//check the session add or no
          {
              echo $_SESSION['add'];//to display message
              unset($_SESSION['add']);//for removing message
          }

    ?>

    <form action=" " method="POST">

        <table class="tbl-30">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullname" placeholder="enter your name"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="enter your username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="enter your password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add admin" class="btn-secondary">
                </td>
            </tr>
        </table>
    </form>

    </div>

</div>
<?php 
    //processing value from form and save to database
    //check whether the submit button is clicked or not

   if(isset($_POST['submit']))
   {
     $fullname=$_POST['fullname'];
     $username=$_POST['username'];
     $password=$_POST['password'];
     // $password=md5($_POST['password']);

     //query to save data to database
     $sql="INSERT INTO admin SET
            fullname='$fullname',
            username='$username',
            password='$password'
            ";

       
           
            //executing query and save data into database
           $res = mysqli_query($conn,$sql) or die(mysqli_error($conn));

          // check wheather the query is executed or not and display message
          if($res==TRUE)
          {
                //echo "data entered sucessfully";
                $_SESSION['add']="Admin Added Sucessfully";
                //redirect page to manage admin
                header("location:".SITEURL.'admin/manage-admin.php');
          }
          else{
           // echo "failed to insert data";
           $_SESSION['add']="Failed to add admin";
           //redirect page to manage admin
           header("location:".SITEURL.'admin/add-admin.php');
          }


   }
  
    

?>

    <!-- end of new reservationsn -->

    <div id="footer" class="footer-main">
        <div class="footer-news pad-top-100 pad-bottom-70 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="ft-title color-white text-center"> Newsletter </h2>
                            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                        <form>
                            <input type="email" placeholder="Enter your e-mail id">
                            <a href="#" class="orange-btn"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>
                        </form>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end footer-news -->

        <?php include('partials-front/footer.php');?>
        

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>