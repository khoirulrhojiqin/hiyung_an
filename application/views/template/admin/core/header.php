<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo site_url('assets/logo.png'); ?>" type="image/ico" />

    <title>Dashboard Billco</title>

    <!-- Bootstrap -->
    <link href="<?php echo site_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo site_url('assets/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo site_url('assets/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo site_url('assets/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo site_url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo site_url('assets/vendors/jqvmap/dist/jqvmap.min.css')?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo site_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php //echo site_url('assets/datatables/jquery.dataTables.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    
    <link href="<?php echo site_url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/> -->
    
    <link rel="stylesheet" href="<?php //echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link rel="stylesheet" href="<?php //echo base_url('assets/css_refres/cssrefresh.js') ?>"/>
    <script src="<?php echo site_url('assets/js/lib/react.js')?>"></script>


    <!-- Custom Theme Style -->
    <link href="<?php echo site_url('assets/build/css/custom.min.css')?>" rel="stylesheet">
    <style type="text/css">
  body {
    color: #4d4f51;
    background: #ededed;
    font-family: "Helvetica Neue",Roboto,Arial,"Droid Sans",sans-serif;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.471;
  }
  .rainbow {
  width: 100%;
  height:2.2px;
  background: -webkit-linear-gradient(left, red,orange,yellow,green,blue,indigo,violet,red);
  background: -moz-linear-gradient(left, red,orange,yellow,green,blue,indigo,violet,red);
  background: -o-linear-gradient(left, red,orange,yellow,green,blue,indigo,violet,red);
  background: -ms-linear-gradient(left, red,orange,yellow,green,blue,indigo,violet,red);
  background: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet,red);
  background-repeat:repeat-x;
  
  -webkit-animation:go 1s linear infinite;
  -moz-animation:go 1s linear infinite;
  -o-animation:go 1s linear infinite;
  -ms-animation:go 1s linear infinite;
  animation:go 1s linear infinite;
  position: fixed;
  z-index: 1;
}

@-webkit-keyframes go{
  0%{background-position:0;}
  100%{background-position:200px 0;}

}
@-moz-keyframes go{
  0%{background-position:0;}
  50%{background-position:100px 0;}
  100%{background-position:200px 0;}

}
@-o-keyframes go{
  0%{background-position:0;}
  100%{background-position:200px 0;}

}
@-ms-keyframes go{
  0%{background-position:0;}
  100%{background-position:200px 0;}

}
@keyframes go{
  0%{background-position:0;}
  100%{background-position:200px 0;}

}
  .left_col{
    background-color: #ededed;
  }
  .nav_title{
    width: 230px;
    /*float: left;*/
    background: #cc3333;
    border-radius: 0;
    height: 57px;
  }
  .nav.side-menu>li.active>a {
    text-shadow: rgba(0,0,0,.25) 0 -1px 0;
    background: linear-gradient(#cc3333,#ce4d4d),#672929;
    box-shadow: rgba(0,0,0,.25) 0 1px 0, inset rgba(255,255,255,.16) 0 1px 0;
    color: white;
}
.nav.child_menu>li>a {
    color: rgba(0, 0, 0, 0.75);
    font-size: 12px;
}
.nav.child_menu>li>a, .nav.side-menu>li>a {
    color: #484646;
    font-weight: 500;
}
.nav li li.current-page a, .nav.child_menu li li a.active, .nav.child_menu li li a:hover {
    color: #b90101;
}
.nav.child_menu>li>a, .nav.side-menu>li>a {
    color: #271a1a;
    font-weight: 500;
}
.nav.side-menu>li>a:hover {
    color: #6b1919!important;
}
.menu_section h3 {
    color: #fb5252;
    text-transform: uppercase;
    letter-spacing: .5px;
    font-weight: 700;
    font-size: 11px;
    text-shadow: 1px 1px #c5c5c5;
}
.nav-sm .nav.child_menu li.active, .nav-sm .nav.side-menu li.active-sm {
    border-right: 5px solid #adabab;
}
.profile_info h2 {
    font-size: 14px;
    color: #5f6061;
    /*margin: 0;*/
    font-weight: 300;
}
.profile_info span {
    font-size: 13px;
    line-height: 30px;
    color: #8e8a8a;
}
.nav.side-menu>li.active, .nav.side-menu>li.current-page {
    border-right: 5px solid #adabab;
}
.sidebar-footer {
    background: #b11e1e;
    z-index: 999;
}
.sidebar-footer a {
    padding: 7px 0 3px;
    text-align: center;
    width: 25%;
    font-size: 17px;
    display: block;
    float: left;
    background: #c11818;
    cursor: pointer;
}
.bg-green {
    background: #f23333!important;
    border: 1px solid #bb2424!important;
    color: #fff;
}
.green {
    color: #d33838;
}
.nav-sm ul.nav.child_menu {
    background: #ededed;
  }
.pagination>li>a, .pagination>li>span {
    color: #c11818;
}
.form-control>select>option>a:hover{
  background-color: red;
}
  td.yellow{
    background: rgba(246,255,114,0.5);
  }
  td.blues{
    background: rgba(93,210,255,0.5);
  }
  .yellow{
    background: rgba(246,255,114,0.5);
    text-align: center;
  }
  .blues{
    background: #3cd7e7!important;
    border: 1px solid #45d4e3!important;
    text-align: center;
    color: #fff;
    font-weight: 750;
  }

  .gren1{
    background-color: #6ddf7b;
    width: 100px;
    height: 40px;
    text-align: center;
  }
  .gren2{
    background-color: #da79b8;
    width: 100px;
    height: 40px;
    text-align: center;
  }
  .red{
    background-color: #ff5c5c;
    width: 100px;
    height: 40px;
    text-align: center;
    color: #000;
  }
  .grey{
    background-color: #cecccc;
    color: #fff;
  }
  .green{
    background-color: #6ddf7b;
    color: #fff;
    /*text-shadow: 2px 1px grey;*/

  }
  .yellow2{
   background: #fbfd4b!important;
  border: 1px solid #eff15a!important;
  color: #514c4c;
  font-weight: 750;
  }
  .purple{
    background-color: purple;
    color: #fff;
  }
/*loading data table*/
  .spinners {
  margin: 100px auto;
  width: 50px;
  height: 40px;
  text-align: center;
  font-size: 10px;
}

.spinners > div {
  background-color: #c33;
  height: 100%;
  width: 6px;
  display: inline-block;
  
  -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
  animation: sk-stretchdelay 1.2s infinite ease-in-out;
}
.spinners .rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}
  .spinners .rect3 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}
.spinners .rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

.spinners .rect5 {
  -webkit-animation-delay: -0.8s;
  animation-delay: -0.8s;
}
@-webkit-keyframes sk-stretchdelay {
  0%, 40%, 100% { -webkit-transform: scaleY(0.4) }  
  20% { -webkit-transform: scaleY(1.0) }
}

@keyframes sk-stretchdelay {
  0%, 40%, 100% { 
    transform: scaleY(0.4);
    -webkit-transform: scaleY(0.4);
  }  20% { 
    transform: scaleY(1.0);
    -webkit-transform: scaleY(1.0);
  }
}
/*end loading data table*/
.nav-md .container.body .col-md-3.left_col {
    
    z-index: 1;
    position: fixed;
    box-shadow: 0 16px 38px -12px rgba(124, 124, 124, 0.56), 0 4px 25px 0 rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}
.nav-sm .container.body .col-md-3.left_col {
  
    z-index: 9999;
    position: fixed;
    box-shadow: 0 16px 38px -12px rgba(124, 124, 124, 0.56), 0 4px 25px 0 rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
}
.x_panel {
   
    box-shadow: 0 1px 4px 0 rgba(0,0,0,.14);
    border-radius: 6px;
    /*z-index: 0;*/
}
</style>
  </head>