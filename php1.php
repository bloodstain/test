
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>数据中心管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/css/login/swiper.min.css">

    <!-- Demo styles -->
    <style>
        html, body {
            position: relative;
            height: 100%;
            font-family:'HanHei SC,PingHei', "Helvetica Neue","Helvetica","Arial","PingFang SC","Hiragino Sans GB", "Microsoft YaHei","WenQuanYi Micro Hei", 'sans-serif';
            overflow: hidden;
        }
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color:#000;
            margin: 0;
            padding: 0;
        }
        label{font-family:"微软雅黑"  !important}
        .swiper-container {
            width: 100%;
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }
        .section1 { background: url(/img/login/index_one.png) center  no-repeat;}
        .section2 { background: url(/img/login/index_two.png) center  no-repeat;}
        .content{width:646px;height: 428px;text-align: center;}
        .content_one{width:646px;height: 491px;text-align: center;}
        .content span,.content_one span{display: block;margin:0 auto;}
        .content .c_1,.content_one .c_1{font-size:48px;color:#fc5407;padding-bottom:10px;font-weight: 700;font-family: "微软雅黑";}
        .content .c_2,.content_one .c_2{font-size: 36px;color:#000;padding-bottom: 16px;font-weight: 200;font-family: "微软雅黑";}
        .content .c_b{}
        .content .c_b a,.content_one a{width: 142px;height: 48px;text-align: center;border:1px solid #fc5407;font-size: 20px;color:#fc5407;line-height: 48px;display: block;margin:0 auto;text-decoration: none;background: rgba(255,255,255,0.4);}
        .content .c_b a:hover{text-decoration: none;color:#fc5407;}
        .content_one a:hover{text-decoration: none;color:#fc5407;}
        .logo{width: 100%;height: auto;position: fixed; top:26px; left:16.5%; z-index: 99;} 
        .a_l{width: 100%;height: 100%;}
        .a_l form{width: 302px;margin:0 auto;padding-top: 50px;}
        .btns{width:301px;height: 45px;background-color: #ff8500;border:1px solid #ff8500;text-align: center;line-height: 45px;color:#fff;font-size: 16px;font-family: "微软雅黑";outline:none}
        .btns:hover{background-color: #df7706;border:1px solid #df7706;}
        body .layui-layer{background: rgba(243,243,243,0.9);}
        label{font-weight: 100 !important;color:#666;font-size: 14px;}
        .has-feedback span{display: block;float: right;color:red;}
        .modal.center .modal-dialog {
            left: 50%;
            min-width: 479px;
            max-width: 479px;
            height: 340px;
            margin-left: -239.5px;
            margin-top: -225px;
            position: fixed;
            top:50%;
            transform: translateX(-50%) translateY(-50%);
        }
        .modal-content{background-color: rgba(243,243,243,0.7 ) !important;height:450px;border:none !important;box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.1) !important;}
        .login-box{width: 338px;height:auto;margin:0 auto;}
        .modal-header{border-bottom: none !important;height: 53px;}
        .checkbox label, .radio label{margin-bottom: -4px !important;padding-left: 8px !important;min-height: 18px !important;margin-left: -3px;}
    /* checkbox  rodia 美化*/
    .chk_1,.chk_2,.chk_3,.chk_4 {
        display: none;
    }
     
    /*******STYLE 1*******/
    .chk_1 + label {
        /* background-color: #FFF; */
        border: 1px solid #9a9ba8;
        /* box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05); */
        padding: 8px;
        border-radius:3px;
        display: inline-block;
        position: relative;
        margin-right:7px;
        margin-top: 2px;
    }
    .chk_1 + label:active {
        box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
    }

    .chk_1:checked + label {
        background-color: #ff8500;
        border: 1px solid #fe740d;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05), inset 15px 10px -12px rgba(255, 255, 255, 0.1);
        color: #243441;
    }

    .chk_1:checked + label:after {
        content: '\2714';
        position: absolute;
        top:-3px;
        left: 0px;
        color: #fff;
        width: 100%;
        text-align: center;
        font-size: 1em;
        padding: 1px 0 0 0;
        vertical-align: text-top;
    }


    /*******STYLE 2*******/
    .chk_2 + label {
        background-color: #F37900;
        padding: 18px 20px 18px 23px;
        box-shadow: inset 0 50px 37px -30px rgba(255, 222, 197, 0.3), 0 0 13px rgba(0, 0, 0, 0.6);
        border-radius: 1000px;
        display: inline-block;
        position: relative;
        border-top: 1px solid #ECA14F;
        margin-right: 30px;
        color: #FFF;
        font-size: 1.7em;
        width: 113px;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        border-bottom: 1px solid #552B09;
    }

    .chk_2 + label:hover  {
        border-top: 1px solid #FC8C1E;
        background: #FC8C1E;
        box-shadow: inset 0 -50px 37px -30px rgba(255, 222, 197, 0.07), 0 0 13px rgba(0, 0, 0, 0.6);
    }

    .chk_2 + label:active  {
        border-top: none;
        background: #FC8C1E;
        padding: 19px 20px 18px 23px;
        box-shadow: inset 0 3px 8px rgba(129, 69, 13, 0.3), inset 0 -50px 37px -30px rgba(255, 222, 197, 0.07), 0 0 13px rgba(0, 0, 0, 0.6);    
    }

    .chk_2 + label:after {
        content: ' ';
        border-radius: 100px;
        width: 32px;
        position: absolute;
        top: 12px;
        right: 12px;
        box-shadow: inset 0px 16px 40px rgba(0, 0, 0, 0.4);
        height: 32px;
    }

    .chk_2 + label:before {
        content: ' ';
        border-radius: 100px;
        width: 20px;
        position: absolute;
        top: 18px;
        right: 18px;
        z-index: 999;
        box-shadow: inset 0px 16px 40px #FFF;
        height: 20px;
        display: none;
    }

    .chk_2:checked + label:before {
        display: block;
    }

    /*******STYLE 3*******/

    .chk_3 + label {
        background-color: #fafbfa;
        padding: 9px;
        border-radius: 50px;
        display: inline-block;
        position: relative;
        margin-right: 30px;
        -webkit-transition: all 0.1s ease-in;
        transition: all 0.1s ease-in;
        width: 40px;
        height: 15px;
    }

    .chk_3  + label:after {
        content: ' ';
        position: absolute;
        top: 0;
        -webkit-transition: box-shadow 0.1s ease-in;
        transition: box-shadow 0.1s ease-in;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 100px;
        box-shadow: inset 0 0 0 0 #eee, 0 0 1px rgba(0,0,0,0.4);
    }

    .chk_3  + label:before {
        content: ' ';
        position: absolute;
        background: white;
        top: 1px;
        left: 1px;
        z-index: 999999;
        width: 31px;
        -webkit-transition: all 0.1s ease-in;
        transition: all 0.1s ease-in;
        height: 31px;
        border-radius: 100px;
        box-shadow: 0 3px 1px rgba(0,0,0,0.05), 0 0px 1px rgba(0,0,0,0.3);
    }

    .chk_3:active + label:after {
        box-shadow: inset 0 0 0 20px #eee, 0 0 1px #eee;
    }

    .chk_3:active + label:before {
        width: 37px;
    }

    .chk_3:checked:active + label:before {
        width: 37px;
        left: 20px;
    }

    .chk_3  + label:active {
        box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px 1px 3px rgba(0,0,0,0.1);
    }

    .chk_3:checked + label:before {
        content: ' ';
        position: absolute;
        left: 26px;
        border-radius: 100px;
    }

    .chk_3:checked + label:after {
        content: ' ';
        font-size: 1.5em;
        position: absolute;
        background: #4cda60;
        box-shadow: 0 0 1px #4cda60;
    }


    /*******STYLE 4*******/
    .chk_4 + label {
        background-color: #FFF;
        padding: 11px 9px;
        border-radius: 7px;
        display: inline-block;
        position: relative;
        margin-right: 30px;
        background: #F7836D;
        width: 58px;
        height: 10px;
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.1), 0 0 10px rgba(245, 146, 146, 0.4);
    }

    .chk_4 + label:before {
        content: ' ';
        position: absolute;
        background: #FFF;
        top: 0px;
        z-index: 99999;
        left: 0px;
        width: 24px;
        color: #FFF;
        height: 32px;
        border-radius: 7px;
        box-shadow: 0 0 1px rgba(0,0,0,0.6);
    }

    .chk_4 + label:after {
        content: '关闭';  
        position: absolute;
        top: 7px;
        left: 37px;
        font-size: 1.2em;
        color: white;
        font-weight: bold;
        left: 8px;
        padding: 5px;
        top: 4px;
        border-radius: 100px;
    }

    .chk_4:checked + label {
        background: #67A5DF;
        box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.1), 0 0 10px rgba(146, 196, 245, 0.4);
    }

    .chk_4:checked + label:after {
        content: '开启';
        left: 10px;
    }

    .chk_4:checked + label:before {
        content: ' ';
        position: absolute;
        z-index: 99999;
        left: 52px;
    }


    .chk_4 + label:after {
        left: 35px; 
    }   

    #checkbox_d2 + label:after, #checkbox_d2 + label:before, #checkbox label {  
        -webkit-transition: all 0.1s ease-in;
        transition: all 0.1s ease-in;
    }
    .close{line-height: 0.5 !important;}
    </style>
    <link rel="stylesheet" href="/lib/bootstrap/3.3.5/css/bootstrap.min.css" >
</head>
<body>
@include('public.js')
    <!-- Swiper -->
    <div class="swiper-container" ng-app="app">
        <div class="logo">
                <img src="/img/login/logo.png">
        </div>
        <div class="swiper-wrapper" ng-controller="home-loginCtrl" >
            <div class="swiper-slide section1">
                <div class="content">
                    <span class="c_1">海量数据，全面覆盖</span>
                    <span class="c_2">能覆盖全业务流程的数据统计和分析</span>
                    <p class="c_b" style="margin-top:63px;">
                        <a href="javascript:void(0)"  ng-click="loginAlert()">登录</a>
                    </p>
                </div>
            </div>
            <div class="swiper-slide section2">
                <div class="content_one">
                    <span class="c_1">节省人力，精准结算</span>
                    <span class="c_2">能协助渠道和商户高效运营的营销助手</span>
                    <p class="c_b" style="margin-top: 95px;">
                        <a href="javascript:void(0)" ng-click="loginAlert()">登录</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <!-- <div class="swiper-pagination"></div> -->
    </div>

</body>
</html>
