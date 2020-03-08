<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Construction Press || Responsive HTML Template</title>
        <?php $this->load->view('common/css') ?>
    </head>
    <body>
        <?php $this->load->view('common/header_top') ; $this->load->view('common/header') ; ?>
        <section id="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- .title -->
                        <div class="title pull-left">
                            <h1>About Us</h1>
                        </div>
                        <div class="page-breadcumb pull-right">
                            <i class="fa fa-home"></i> <a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <span>About Us</span>
                        </div>
                        <!-- /.page-breadcumb -->
                    </div>
                </div>
            </div>
        </section>


        <section id="why-choose-us" class="style-two">
            <div class="container">
                <div class="section-title">
                    <h1>testimonials</h1>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tem</p>
                </div>
                <div class="why-choose-us-wrap row">
                    <div class="col-md-6">
                        <ul class="why-choose-us-facts">
                            <li>
                                <div class="icon-holder">
                                    <i class="icon icon-ChartUp"></i>
                                </div>
                                <div class="content">
                                    <h4>We have 15 years experience</h4>
                                    <p>Adipisci velit, sed quia non numquam eius modi  pora incidunt <br>ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-holder">
                                    <i class="icon icon-Plaine"></i>
                                </div>
                                <div class="content">
                                    <h4>We have 15 years experience</h4>
                                    <p>Adipisci velit, sed quia non numquam eius modi  pora incidunt <br>ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <div class="accrodion-wrap">
                            <div class="accrodion clearfix active">
                                <div class="accrodion-header">
                                    <h4>Perfect Blog Platform</h4>
                                    <div class="expander minus"></div>
                                </div>
                                <div class="accrodion-content" style="display: block;">
                                    <p>Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque eros quis massa convallis feugiat eu quis urna.</p>
                                </div>
                            </div>
                            <div class="accrodion clearfix">
                                <div class="accrodion-header">
                                    <h4>Fully Responsive Wordpress Theme</h4>
                                    <div class="expander plus"></div>
                                </div>
                                <div class="accrodion-content">
                                    <p>Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque eros quis massa convallis feugiat eu quis urna.</p>
                                </div>
                            </div>
                            <div class="accrodion clearfix">
                                <div class="accrodion-header">
                                    <h4>Carefully Crafted Elements</h4>
                                    <div class="expander plus"></div>
                                </div>
                                <div class="accrodion-content">
                                    <p>Praesent in nisl egestas mauris aliquam luctus. Ut auctor faucibus orci semper purus ultrices idorbi nec lorem risus orbi vitae felis gravida Pellentesque eros quis massa convallis feugiat eu quis urna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="great-construct-team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>Great Construction Company</h2>
                        <p>If you have any construction and renovation work  need, simply <br>call our 24 hour emergecny number.</p>
                        <p class="has-btn"><b>01865 524 8503</b> or <a href="#" class="hvr-bounce-to-right">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('common/footer') ?>
        <?php $this->load->view('common/js') ?>
        
    </body>
</html>