<div class="additional_info">
    <div class="container">
        <div class="sap_tabs">  
            <div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
                <ul>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Reviews</span></li>
                </ul>           
                <div class="tab-2 resp-tab-content additional_info_grid" aria-labelledby="tab_item-1">
                    <h4>(2) Reviews</h4>
                    <div class="additional_info_sub_grids">
                        <div class="col-xs-2 additional_info_sub_grid_left">
                            <img src="images/1.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-xs-10 additional_info_sub_grid_right">
                            <div class="additional_info_sub_grid_rightl">
                                <a href="single.html">Laura</a>
                                <h5>April 03, 2016.</h5>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
                                    velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
                                    quo voluptas nulla pariatur.</p>
                            </div>
                            <div class="additional_info_sub_grid_rightr">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="images/star-.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star-.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star-.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="additional_info_sub_grids">
                        <div class="col-xs-2 additional_info_sub_grid_left">
                            <img src="images/2.png" alt=" " class="img-responsive" />
                        </div>
                        <div class="col-xs-10 additional_info_sub_grid_right">
                            <div class="additional_info_sub_grid_rightl">
                                <a href="single.html">Michael</a>
                                <h5>April 04, 2016.</h5>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate 
                                    velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat 
                                    quo voluptas nulla pariatur.</p>
                            </div>
                            <div class="additional_info_sub_grid_rightr">
                                <div class="rating">
                                    <div class="rating-left">
                                        <img src="images/star-.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star-.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="rating-left">
                                        <img src="images/star.png" alt=" " class="img-responsive">
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="review_grids">
                        <h5>Add A Review</h5>
                        <form action="#" method="post">
                            <input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                            <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                            <input type="text" name="Telephone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
                            <textarea name="Review" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Add Your Review';}" required="">Add Your Review</textarea>
                            <input type="submit" value="Submit" >
                        </form>
                    </div>
                </div>                                                            
            </div>  
        </div>
        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab1').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion           
                    width: 'auto', //auto or any width like 600px
                    fit: true   // 100% fit in a container
                });
            });
        </script>
    </div>
</div>
