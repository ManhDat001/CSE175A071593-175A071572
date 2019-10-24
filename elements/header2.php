<?php
    session_save_path('tmp/');
    session_start();
    error_reporting(0);
?>
<div class="head head-desktop">
    <div class="wrapper row top_head">
        <div class="col-md-3 hotline">
            HOTLINE: <span id="hotline-1">0902.298.300 - 0906.298.300</span>
        </div>
        <div class="col-md-5 ">
            <a class="col" href="">SINH VIÊN</a>
            <a class="col" href="">GIẢNG VIÊN</a>
            <a class="col" href="">ĐÀO TẠO QUỐC TẾ</a>
        </div>
        <div class="col-md-4 input d-flex justify-content-end">
            <form>
                <input type="text" name="" placeholder="Tìm kiếm thông tin ">
                <i class="fa fa-search" aria-hidden="true"></i>
            </form>
            
            <img src="http://ntt.edu.vn/web/frontend/images/ico-flagen.jpg">
            <?php if(isset($_SESSION['uid']) && $_SESSION['uid'] != '') { ?>
            <span><?php echo $_SESSION['uname']; ?></span><a href="logout.php">Thoát</a>
            <?php } else { ?>
            <form>
                <input class="btn btn-primary" type="button" value="Đăng nhập" onclick="javascript:location.href='login.php'">
            </form>
            <?php } ?>
        </div>
        
    </div>
</div>
<div class="head-responsive">
    <div class="row">
        <div class="col left">
            <i style="color: white;" id="showMenuRes" class="fa fa-bars c-blue-a5"></i>
        </div>
        <div class="col-10 input">
            <form>
                <input type="text" name="" placeholder="Tìm kiếm thông tin ">
                <button>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                
            </form>		
        </div>
        <div class="col right">
            <img src="http://ntt.edu.vn/web/frontend/images/ico-flagen.jpg">
        </div>
        </div>
        
        
    </div>
    
    
    
    <div class="menu">
        <!-- start responsive -->
        <div class="content-responsive">
            <ul>
                <li><a href="#">HOTLINE: 0902.298.300 - 0906.298.300</a></li>
                <li><a href="#">SINH VIÊN</a></li>
                <li><a href="#">GIẢNG VIÊN</a></li>
                <li><a href="#">ĐÀO TẠO QUỐC TẾ</a></li>
            </ul>
        </div>
        <!-- end head-responsive -->
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg">
                <img src="image/logo_cntt.png">
                <button style="outline: none;" class="navbar-toggler" type="button" >
                    <i id="showCollapse2" style="border: 1px solid #d0d0d0;padding: 10px;" class="fa fa-bars c-blue-a5"></i>
                </button>
                <div class="collapse navbar-collapse row" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item col">
					      	<i class="fa fa-info-circle"></i>
					        <a class="nav-link" href="#">Giới thiệu </a>
                        </li>
                        <li class="nav-item col">
					      	<i class="fa fa-graduation-cap"></i>
					        <a class="nav-link" href="#">Tuyển sinh </a>
                        </li>
                        <li class="nav-item col">
					      	<i class="fa fa-book"></i>
					        <a class="nav-link" href="#">Đào tạo </a>
                        </li>
                        <li class="nav-item col">
					      	<i class="fa fa-bookmark"></i>
					        <a class="nav-link" href="#">Nghiên cứu </a>
                        </li>
                        <li class="nav-item col-3">
					      	<i class="fas fa-handshake"></i>
					        <a class="nav-link" href="#">Hợp tác doanh nghiệp</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    
    <div class="slide">
        
        <div class="wrapper slide-wrapper">
            
            <!-- slide -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="triangle-wrapper">
                    <div class="triangle">
                        
                        <a id="showCollapse"><i class="fa fa-bars c-blue-a5"></i></a>
                        
                    </div>
                    <!-- <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div> -->
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="image/slide1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/slide2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image/slide3.jpg" alt="Third slide">
                    </div>
                </div>
                
                <div class="collapse-handmade" id="collapse-handmade">
                    <div class="row">
                        <div class="col-md-6 col-lg-9 row">
                            <div class="col-12 col-md-6 col-lg-4 item">
                                
                                <ul>
                                    <li><h5><a href="">Giới thiệu chung </a></h5></li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 item">
                                
                                <ul>
                                    <li><h5><a href="">Tuyển sinh</a>  </h5></li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 item">
                                
                                <ul>
                                    <li><h5><a href="">Đào tạo</a>  </h5></li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 item">
                                
                                <ul>
                                    <li><h5><a href="">Đào tạo</a>  </h5></li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="col-12 col-md-6 col-md-4 item">
                                
                                <ul>
                                    <li><h5><a href="">Đào tạo</a>  </h5></li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a>	
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-double-right"></i>
                                        <a href="">giới thiệu chung </a> 	
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-3 sociaty">
                            <ul>
                                <li><a href=""><i class="fab fa-facebook-square"></i>Facebook</a></li>
                                <li><a href=""><i class="fab fa-google-plus-g"></i>Google Plus</a></li>
                                <li><a href=""><i class="fab fa-youtube"></i>Youtube</a></li>
                                <li><a href=""><i class="fas fa-envelope"></i>E-mail</a></li>
                                <li><a href=""><i class="fa fa-wechat"></i>Zalo</a></li>
                                <li><a href=""><i class="fa fa-mortar-board"></i>E-office</a></li>
                                <li><a href=""><i class="fa fa-users"></i>Tuyển dụng</a></li>
                            </ul>
                        </div>
                        
                        
                        
                    </div>
                </div>
                
                <div class="line-slide">
                    <h3>Chính sách học bổng của trường đại học Nguyễn Tất Thành</h3>
                    <div class="control-button">
                        <div class="right">
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span> -->
                                <i class="fas fa-angle-left"></i>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span> -->
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
            <!-- end slide -->
        </div>
    </div>    