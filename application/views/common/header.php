<header class="construct header-curvy">
    <div class="search-box">
        <div class="container">
            <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <form action="#">
                    <input type="text" placeholder="Search Here"> <button type="submit"><i class="icon icon-Search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="cart-box">
        <div class="container">
            <div class="pull-right cart col-lg-6 col-xs-12">
                <p><i class="icon icon-FullShoppingCart"></i> You Have <span>1 Item</span> in your Cart. Price is <span>$199</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="clearfix">
            <div class="pull-left logo">
                <a href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url('assets') ?>/img/resources/logo-2.png" alt="Plumberx">
                </a>
            </div>
            <nav class="pull-right mainmenu-container clearfix">
                <ul class="mainmenu pull-right">
                    <li><a href="<?php echo base_url() ?>">Home</a></li>
                    <li><a href="<?php echo base_url('about_us') ?>">About us</a></li>
                    <li class="current dropdown">
                        <a href="javascript:void(0)">Services</a>
                        <ul class="submenu">
                            <li><a href="blog-v2.html">AC Repair</a></li>  
                            <li><a href="blog.html">Refrigerator Repair</a></li>
                            <li><a href="blog-single.html">Microwave Repair</a></li>
                        </ul>
                        <i class="fa fa-bars"></i>
                    </li>
                    <li><a href="<?php echo base_url('about_us') ?>">Contact us</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>