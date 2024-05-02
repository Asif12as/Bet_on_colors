<?php 

ob_start();

session_start();

if($_SESSION['frontuserid']=="")

{header("location:login.php");exit();}?>

<html lang="zh-CN"
    style="--status-bar-height:0px; --top-window-height:0px; --window-left:0px; --window-right:0px; --window-margin:0px; font-size: 19.7px; --window-top:calc(var(--top-window-height) + calc(44px + env(safe-area-inset-top))); --window-bottom:0px;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <script>document.addEventListener('DOMContentLoaded', function () {
            document.documentElement.style.fontSize = document.documentElement.clientWidth / 20 + 'px'
        })</script>
<link rel="stylesheet" href="https://jaguarmall.club/*/pages/person/assets/index.css">
<link rel="stylesheet" href="assets/index.css">
<link rel="stylesheet" href="https://jaguarmall.club/*/pages/person/assets/css/style.css">
<?php include'head.php' ?>
<style type="text/css">
        @charset "UTF-8";

        /**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
        /**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        .status_bar[data-v-f52bdb00] {
            height: 0;
            width: 100%;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 9999;
            background-color: #fff
        }

        #main-content[data-v-f52bdb00] {
            position: relative;
            overflow: hidden
        }

        #main-content .content[data-v-f52bdb00] {
            padding-bottom: 50px;
            overflow: scroll
        }

        .tabbar-wrapper[data-v-f52bdb00] {
            position: fixed;
            z-index: 999;
            bottom: 0;
            height: 50px;
            background-color: #fff;
            width: 100%
        }

        .tabbar-wrapper .tabbar[data-v-f52bdb00] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            height: 50px;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1
        }

        .tabbar-wrapper .tabbar .tabbar-item[data-v-f52bdb00] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .tabbar-wrapper .tabbar .tabbar-item .icon[data-v-f52bdb00] {
            height: 24px;
            width: 24px
        }

        .tabbar-wrapper .tabbar .tabbar-item .unactive[data-v-f52bdb00] {
            display: block
        }

        .tabbar-wrapper .tabbar .tabbar-item .active[data-v-f52bdb00] {
            display: none
        }

        .tabbar-wrapper .tabbar .tabbar-item uni-text[data-v-f52bdb00] {
            color: #aaa;
            font-size: 15px
        }

        .tabbar-wrapper .tabbar .tabbar-item.current .unactive[data-v-f52bdb00] {
            display: none
        }

        .tabbar-wrapper .tabbar .tabbar-item.current .active[data-v-f52bdb00] {
            display: block
        }

        .tabbar-wrapper .tabbar .tabbar-item.current uni-text[data-v-f52bdb00] {
            color: #000;
            font-size: 15px
        }

        .my-dialog-content[data-v-f52bdb00] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .my-dialog-content .rule-popup[data-v-f52bdb00] {
            font-size: 16px !important
        }

        .my-dialog-title[data-v-f52bdb00] {
            padding: 10px;
            text-align: center
        }
    </style>
<style type="text/css">
        @font-face {
            font-family: uniicons;
            src: url(/uni.ttf)
        }

        @font-face {
            font-family: pingfang-jian;
            src: url(/pingfang-jian.ttf)
        }

        @font-face {
            font-family: Roboto-Black;
            src: url(/fonts/Roboto-Black.4f5771d3.eot);
            src: local("Roboto-Black"), local("Lato-Black"), url(/fonts/Roboto-Black.4f5771d3.eot?#iefix) format("embedded-opentype"), url(/fonts/Roboto-Black.72f6fd21.woff2) format("woff2"), url(/fonts/Roboto-Black.fdd88b74.woff) format("woff"), url(/fonts/Roboto-Black.232725fa.ttf) format("truetype"), url(/img/Roboto-Black.84a27571.svg#Lato-Black) format("svg");
            font-weight: 900;
            font-style: bold
        }

        @font-face {
            font-family: Roboto-Regular;
            src: url(/fonts/Roboto-Regular.b9077621.eot);
            src: local("Roboto-Regular"), local("Lato-Black"), url(/fonts/Roboto-Regular.b9077621.eot?#iefix) format("embedded-opentype"), url(/fonts/Roboto-Regular.9feb0110.woff2) format("woff2"), url(/fonts/Roboto-Regular.94dac78e.woff) format("woff"), url(/fonts/Roboto-Regular.4312f1fb.ttf) format("truetype"), url(/img/Roboto-Regular.8528a548.svg#Lato-Black) format("svg");
            font-weight: 400;
            font-style: normal
        }

        * {
            box-sizing: border-box;
            font-family: pingfang-jian, uniicons
        }

        .uni-body {
            background: #f1f1f1
        }

        uni-button.submit {
            background-color: #007aff;
            color: #fff
        }

        uni-image {
            will-change: transform
        }

        .uni-popup__wrapper-box {
            max-height: 90%;
            max-width: 90%;
            min-width: 70%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .my-dialog {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            flex-direction: column;
            vertical-align: middle;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            background-color: #fff;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            overflow: hidden;
            height: 100%
        }

        .my-dialog-title {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            position: relative;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            min-height: 64px;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            font-weight: 700;
            color: #333;
            font-size: 24px
        }

        .my-dialog-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            position: relative;
            padding: 12px;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            flex-grow: 1;
            height: calc(100% - 140px);
            max-height: 400px
                /* overflow: scroll; */
        }

        .my-dialog-footer {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            min-height: 60px;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center
        }

        .my-dialog-btn {
            text-align: center;
            line-height: 60px;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            flex-grow: 1;
            -webkit-flex-shrink: 0;
            flex-shrink: 0;
            height: 60px;
            border-top: 1px solid #999;
            border-right: 1px solid #999
        }

        .my-dialog-btn:last-child {
            border-right: 0 solid #999;
            color: #2a67fe
        }

        .my-dialog-btn:first-child {
            color: #000
        }

        .bg-fff {
            background-color: #fff
        }

        .bg-success {
            background-color: #39b54a
        }

        .bg-primary {
            background-color: #007aff
        }

        .bg-danger {
            background-color: #ff4019
        }

        .shape-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%
        }

        .bg-rv {
            background-image: -webkit-linear-gradient(290deg, #6739b6 50%, #e54d42 0);
            background-image: linear-gradient(160deg, #6739b6 50%, #e54d42 0)
        }

        .bg-gv {
            background-image: -webkit-linear-gradient(290deg, #6739b6 50%, #39b54a 0);
            background-image: linear-gradient(160deg, #6739b6 50%, #39b54a 0)
        }

        .violet {
            background-color: #6739b6
        }

        .green {
            background-color: #3ab54b
        }

        .red {
            background-color: #e54d42
        }

        .color-green {
            color: #3ab54b
        }

        .color-red {
            color: #e54d42
        }

        .color-fff {
            color: #fff
        }

        .color-primary {
            color: #007aff
        }

        .color-success {
            color: #3fc44c
        }

        .color-danger {
            color: #d9001b
        }

        .color-fbc343 {
            color: #fbc343
        }

        .color-ffffff {
            color: #fff
        }

        .primary-btn {
            background-color: #00B8A9;
            color: #fff
        }

        .cancel-btn {
            /* 		background-color: #007aff;
color: #FFFFFF; */
        }

        #common-form-wrapper .uni-input {
            box-sizing: border-box;
            border: 1px solid #ddd;
            height: 44px;
            padding: 6px 12px;
            margin-bottom: 12px;
            background: #fff;
            border-radius: 4px
        }

        #common-form-wrapper .uni-input .input-placeholder {
            color: grey;
            font-size: 15px
        }

        #common-form-wrapper .uni-input .uni-input-input {
            font-size: 20px
        }

        .uni-easyinput .uni-easyinput__content {
            background-color: #fff;
            height: 44px;
            border: 1px solid #f2f2f2
        }

        .uni-easyinput .uni-easyinput__content uni-input {
            font-size: 16px
        }

        .icon-image {
            width: 20px;
            height: 20px
        }

        .uni-picker-action-cancel {
            color: hsla(0, 0%, 100%, 0) !important
        }

        .uni-picker-action-cancel::before {
            content: "cancel";
            width: 120px;
            color: #888 !important
        }

        .uni-picker-action-confirm {
            color: hsla(0, 0%, 100%, 0) !important
        }

        .uni-picker-action-confirm::after {
            content: "confirm";
            width: 120px;
            color: #007aff !important
        }

        .mt-72 {
            margin-top: 72px
        }

        .tabbar-wrapper .tabbar .tabbar-item uni-text {
            font-size: 11px !important
        }

        .mrl {
            margin: 0 4px
        }

        .container-07 {
            margin-bottom: -50px
        }

        .header1 {
            background: url(/img/main_bg.f5b581b8.png) 50%/cover no-repeat;
            width: 100%;
            -webkit-box-shadow: inset 0 0 51px 42px #000;
            -moz-box-shadow: inset 0 0 51px 42px #000;
            box-shadow: inset 0 0 51px 42px #000;
            color: #fff
        }

        img {
            max-width: 100%
        }

        .main_wrap {
            z-index: 8;
            -webkit-box-shadow: inset 0 0 34px 19px #000, inset 0 0 34px 19px #000, inset 0 0 34px 19px #000, inset 0 0 34px 19px #000;
            -moz-box-shadow: inset 0 0 34px 19px #000, inset 0 0 34px 19px #000, inset 0 0 34px 19px #000, inset 0 0 34px 19px #000;
            box-shadow: inset 0 0 34px 19px #000, inset 0 0 34px 19px #000, inset 0 0 34px 19px #000, inset 0 0 34px 19px #000;
            overflow: hidden;
            position: relative
        }

        .elems {
            position: absolute;
            z-index: 6
        }

        .elem1 {
            top: 20%;
            left: 8%;
            -webkit-animation: a 11s infinite;
            -moz-animation: a 11s infinite;
            animation: a 11s infinite
        }

        .elem2 {
            top: 65%;
            left: 8%;
            -webkit-animation: a 13s infinite;
            -moz-animation: a 13s infinite;
            animation: a 13s infinite
        }

        .elem3 {
            top: 88%;
            left: 8%;
            -webkit-animation: a 9s infinite;
            -moz-animation: a 9s infinite;
            animation: a 9s infinite
        }

        .elem4 {
            top: 100%;
            left: 14%;
            -webkit-animation: a 13s infinite;
            -moz-animation: a 13s infinite;
            animation: a 13s infinite
        }

        .elem5 {
            top: 15%;
            right: 6%;
            -webkit-animation: a 10s infinite;
            -moz-animation: a 10s infinite;
            animation: a 10s infinite
        }

        .elem6 {
            top: 30%;
            right: 14%;
            -webkit-animation: a 13s infinite;
            -moz-animation: a 13s infinite;
            animation: a 13s infinite
        }

        .elem7 {
            top: 50%;
            right: 5%;
            -webkit-animation: a 15s infinite;
            -moz-animation: a 15s infinite;
            animation: a 15s infinite
        }

        .elem8 {
            top: 70%;
            right: 12%;
            -webkit-animation: a 10s infinite;
            -moz-animation: a 10s infinite;
            animation: a 10s infinite
        }

        .elem9 {
            top: 80%;
            right: 13%;
            -webkit-animation: a 11s infinite;
            -moz-animation: a 11s infinite;
            animation: a 11s infinite
        }

        .roses {
            position: absolute;
            z-index: 6
        }

        .rose1 {
            top: 21%;
            left: 17%;
            -webkit-animation: a 14s infinite;
            -moz-animation: a 14s infinite;
            animation: a 14s infinite
        }

        .rose2 {
            top: 33%;
            left: 17%;
            -webkit-animation: a 15s infinite;
            -moz-animation: a 15s infinite;
            animation: a 15s infinite
        }

        .rose3 {
            top: 38%;
            left: 8%;
            -webkit-animation: a 16s infinite;
            -moz-animation: a 16s infinite;
            animation: a 16s infinite
        }

        .rose4 {
            top: 44%;
            left: 16%
        }

        .rose4,
        .rose5 {
            -webkit-animation: a 17s infinite;
            -moz-animation: a 17s infinite;
            animation: a 17s infinite
        }

        .rose5 {
            top: 50%;
            left: 8%
        }

        .rose6 {
            top: 8%;
            right: 15%;
            -webkit-animation: a 10s infinite;
            -moz-animation: a 10s infinite;
            animation: a 10s infinite
        }

        .rose7 {
            top: 28%;
            right: 6%
        }

        .rose7,
        .rose8 {
            -webkit-animation: a 16s infinite;
            -moz-animation: a 16s infinite;
            animation: a 16s infinite
        }

        .rose8 {
            top: 35%;
            right: 10%
        }

        .rose9 {
            top: 45%;
            right: 14%;
            -webkit-animation: a 16s infinite;
            -moz-animation: a 16s infinite;
            animation: a 16s infinite
        }

        .container1 {
            max-width: 1000px;
            margin: 0 auto
        }

        .top_line {
            padding: 20px 10px;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between
        }

        .top_line .logo {
            width: 165px
        }

        .top_line .logo img {
            width: 100%
        }

        .top_line .slogan_text {
            font-size: 44px;
            text-transform: uppercase;
            margin-left: 10px
        }

        .ib {
            display: inline-block
        }

        .blue {
            color: #1db3c0
        }

        .red1 {
            color: #ff4d52
        }

        .main_conent {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .main_conent>* {
            width: 50%
        }

        .main_conent .wellcome_block {
            width: 100%;
            height: 300px;
            margin: -30px 0 0;
            position: relative;
            z-index: 2
        }

        .main_conent .bonus_png {
            position: absolute;
            top: 0;
            left: -9px
        }

        .main_conent .wrap_all {
            position: absolute;
            left: 0;
            right: 0
        }

        .main_conent .wrp_cool_text {
            position: relative;
            color: transparent;
            text-align: center;
            top: 19px
        }

        .main_conent .main_name {
            font-size: 44px;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#ababab));
            background: -moz-linear-gradient(#fbfbfb, #ababab);
            background: -webkit-linear-gradient(#fbfbfb, #ababab);
            background: linear-gradient(#fbfbfb, #ababab);
            background-repeat: no-repeat;
            background-position: 50% 134%;
            -moz-background-size: 100%;
            background-size: 100%;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text
        }

        .main_conent .main_name_l {
            display: block;
            background: -webkit-gradient(linear, left top, left bottom, from(#de43ed), color-stop(#b62adb), to(#6d0ab7));
            background: -moz-linear-gradient(#de43ed, #b62adb, #6d0ab7);
            background: -webkit-linear-gradient(#de43ed, #b62adb, #6d0ab7);
            background: linear-gradient(#de43ed, #b62adb, #6d0ab7);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-text-fill-color: transparent
        }

        .main_conent .main_name_l-fr {
            font-size: 3.7em;
            margin-top: 8px
        }

        .main_conent .main_name_l-de {
            font-size: 3em
        }

        .main_conent .main_name_l-ca {
            font-size: 1.8em;
            margin-top: -7px
        }

        .main_name_l-pt {
            font-size: 2.7em;
            margin-top: 4px
        }

        .main_name_l-cad {
            font-size: 1.5em
        }

        .main_conent .bonus,
        .main_conent .main_name {
            text-transform: uppercase;
            position: relative;
            z-index: 2
        }

        .main_conent .bonus {
            font-size: 28px;
            background: -webkit-gradient(linear, left top, left bottom, from(#de43ed), color-stop(#b62adb), to(#6d0ab7));
            background: -moz-linear-gradient(#de43ed, #b62adb, #6d0ab7);
            background: -webkit-linear-gradient(#de43ed, #b62adb, #6d0ab7);
            background: linear-gradient(#de43ed, #b62adb, #6d0ab7);
            background-repeat: no-repeat;
            background-position: 50% 134%;
            -moz-background-size: 100%;
            background-size: 100%;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text
        }

        .main_conent .bonus-ca,
        .main_conent .bonus-pt,
        .main_conent .bonus-cad {
            background: -webkit-gradient(linear, left top, left bottom, from(#ffb700), to(#fffd84));
            background: -moz-linear-gradient(#ffb700, #fffd84);
            background: -webkit-linear-gradient(#ffb700, #fffd84);
            background: linear-gradient(#ffb700, #fffd84);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            margin: 20px 0 10px
        }

        .main_conent .bonus-pt {
            margin-top: 15px
        }

        .main_conent .wrp_cool_text:after {
            z-index: 1;
            top: -4px;
            text-shadow: -1px 2px 10px #403071, 1px 2px 15px #403071, 1px 2px 20px #403071
        }

        .main_conent .wrp_cool_text:after,
        .main_conent .wrp_cool_text:before {
            content: attr(data-text);
            display: block;
            width: 100%;
            font-size: 44px;
            position: absolute;
            height: auto
        }

        .main_conent-pt .main_name,
        .main_conent-pt .wrp_cool_text:after,
        .main_conent-pt .wrp_cool_text:before {
            font-size: 30px
        }

        .main_conent .wrp_cool_text:before {
            z-index: 5;
            top: 0;
            -webkit-text-stroke: 2px hsla(0, 0%, 98%, .3)
        }

        .main_conent .inherit_fz {
            font-size: 30px
        }

        .main_conent .inherit_fz .main_name,
        .main_conent .inherit_fz:after,
        .main_conent .inherit_fz:before {
            font-size: inherit
        }

        .main_conent .small_border {
            font-size: 32px
        }

        .main_conent .small_border .main_name,
        .main_conent .small_border:after,
        .main_conent .small_border:before {
            font-size: 1em !important
        }

        .main_conent .small_border .main_name {
            z-index: 4
        }

        .main_conent .small_border:before {
            z-index: 3;
            -webkit-text-stroke: 3px rgba(0, 0, 0, .5)
        }

        .main_conent .wrp_blue {
            top: 25px
        }

        .main_conent .wrp_blue.small {
            top: 18px
        }

        .main_conent .button {
            bottom: -22px;
            left: 0;
            right: 0;
            margin: 69px auto;
            text-align: center
        }

        .main_conent .btn {
            background: url(img/btn.8d0530bc.png) 50%/cover no-repeat;
            background: url(img/btn.8d0530bc.png);
            height: 96px;
            width: 302px;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            margin: -47px auto 0;
            color: #61431c;
            font-size: 25px;
            -webkit-animation: c 3s infinite;
            -moz-animation: c 3s infinite;
            animation: c 3s infinite;
            -webkit-transition: all .5s ease;
            -moz-transition: all .5s ease;
            transition: all .5s ease
        }

        .main_conent .btn:hover {
            -webkit-filter: drop-shadow(1px 1px 3px #aaa);
            filter: drop-shadow(1px 1px 3px #aaa)
        }

        .left_part {
            margin-top: 8px
        }

        .right_part {
            margin-top: -25px
        }

        .right_part .name {
            font-size: 25px;
            text-align: center;
            padding-right: 15px;
            margin-bottom: 38px
        }

        .right_part .pluses_wrap {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            -webkit-flex-direction: column;
            flex-direction: column
        }

        .right_part .plus_item {
            margin-bottom: 25px;
            margin-right: 15px;
            width: 94%;
            background: rgba(16, 44, 92, .4);
            -moz-border-radius: 15px;
            border-radius: 15px;
            padding-right: 80px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            position: relative
        }

        .right_part .wrp_cool_text {
            text-align: left;
            margin-left: 15px
        }

        .right_part .img_wrap {
            width: 200px;
            margin-right: -116px;
            position: absolute;
            right: 0
                /* margin-top: -18px */
        }

        .right_part .sub_name {
            margin: 30px 18px 20px;
            font-family: Roboto-Regular;
            font-size: 14px
        }

        .right_part .sub_name .ib {
            display: inline-block
        }

        .right_part .main_name,
        .right_part .wrp_cool_text:after,
        .right_part .wrp_cool_text:before {
            font-size: 21px
        }

        .right_part .wrp_cool_text:after {
            text-shadow: none
        }

        .second-pt {
            margin-top: 20px
        }

        .second:after,
        .second:before {
            content: "";
            position: absolute;
            height: 30px;
            width: 100%;
            z-index: 1
        }

        .special {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: justify;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            padding-top: 60px;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .special .special_text {
            font-size: 29px;
            line-height: 34px
        }

        .special .text-logo {
            width: 100px
        }

        .special .bet22 {
            font-size: 33px;
            margin-left: 10px
        }

        .special .wrp_cool_text {
            position: relative;
            color: transparent;
            text-align: center
        }

        .special .main_name {
            font-size: 21px;
            text-transform: uppercase;
            background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#ababab));
            background: -moz-linear-gradient(#fbfbfb, #ababab);
            background: -webkit-linear-gradient(#fbfbfb, #ababab);
            background: linear-gradient(#fbfbfb, #ababab);
            background-repeat: no-repeat;
            background-position: 50% 134%;
            -moz-background-size: 100%;
            background-size: 100%;
            -webkit-background-clip: text;
            -moz-background-clip: text;
            background-clip: text;
            position: relative;
            z-index: 2
        }

        .special .wrp_cool_text:after {
            z-index: 1;
            top: -4px;
            text-shadow: 1px 2px 10px #000
        }

        .special .wrp_cool_text:after,
        .special .wrp_cool_text:before {
            content: attr(data-text);
            display: block;
            width: 100%;
            font-size: 21px;
            position: absolute;
            height: auto
        }

        .special .wrp_cool_text:before {
            z-index: 5;
            top: 0;
            -webkit-text-stroke: 2px hsla(0, 0%, 98%, .3)
        }

        .special .btn_join {
            -moz-border-radius: 10px;
            border-radius: 10px;
            background: -webkit-gradient(linear, left top, left bottom, from(#2d3c93), to(#1f2968));
            background: -moz-linear-gradient(#00B8A9, #00B8A9);
            background: -webkit-linear-gradient(#00B8A9, #00B8A9);
            background: linear-gradient(#00B8A9, #00B8A9);
            border-bottom: 3px solid #111638;
            -webkit-box-shadow: inset 0 1px 0 0 hsla(0, 0%, 100%, .15), inset 0 -3px 0 0 rgba(0, 0, 0, .5);
            -moz-box-shadow: inset 0 1px 0 0 hsla(0, 0%, 100%, .15), inset 0 -3px 0 0 rgba(0, 0, 0, .5);
            box-shadow: inset 0 1px 0 0 hsla(0, 0%, 100%, .15), inset 0 -3px 0 0 rgba(0, 0, 0, .5);
            width: 231px;
            height: 65px;
            line-height: 65px;
            display: block;
            z-index: 7;
            -webkit-animation: b 11s infinite;
            -moz-animation: b 11s infinite;
            animation: b 11s infinite;
            -webkit-transition: all .3s ease-out;
            -moz-transition: all .3s ease-out;
            transition: all .3s ease-out
        }

        .special .btn_join:hover {
            background: -webkit-gradient(linear, left top, left bottom, from(#00B8A9), to(#00B8A9));
            background: -moz-linear-gradient(#00B8A9, #00B8A9);
            background: -webkit-linear-gradient(#00B8A9, #00B8A9);
            background: linear-gradient(#00B8A9, #00B8A9)
        }

        .payments {
            padding-top: 60px;
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            margin-bottom: 40px;
            -ms-flex-flow: wrap;
            -webkit-flex-flow: wrap;
            flex-flow: wrap
        }

        .payments img {
            margin: 10px 30px
        }

        .games {
            background: hsla(0, 0%, 98%, .1);
            width: 100%;
            min-height: 100px
        }

        .games_wrp {
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            padding-top: 10px;
            -ms-flex-flow: wrap;
            -webkit-flex-flow: wrap;
            flex-flow: wrap
        }

        .games_wrp img {
            margin: 10px 15px
        }

        .copy {
            font-size: 12px;
            text-align: center;
            font-family: Roboto-Regular;
            padding: 20px;
            color: #2d3e81
        }

        .show_on_scroll .in {
            -webkit-transform: scale(.7);
            -moz-transform: scale(.7);
            -ms-transform: scale(.7);
            transform: scale(.7);
            opacity: 0;
            transition: opacity .5s, -webkit-transform .5s;
            -webkit-transition: opacity .5s, -webkit-transform .5s;
            -moz-transition: transform .5s, opacity .5s, -moz-transform .5s;
            transition: transform .5s, opacity .5s;
            transition: transform .5s, opacity .5s, -webkit-transform .5s, -moz-transform .5s;
            transition: transform .5s, opacity .5s, -webkit-transform .5s
        }

        .show_on_scroll.visible .in {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1
        }

        @media (-ms-high-contrast:active),
        (-ms-high-contrast:none) {
            .wrp_cool_text .main_name {
                background: none;
                color: #ccc;
                text-shadow: 1px 1px 3px #000
            }

            .main_conent .bonus {
                background: none;
                color: #7c0fbf;
                text-shadow: 1px 1px 3px #000
            }
        }

        .lang_in .top_line .slogan_text {
            font-size: 36px
        }

        .lang_bd .right_part .img_wrap,
        .lang_in .right_part .img_wrap {
            width: 200px;
            margin-right: -164px
        }

        .kn_lang .top_line .slogan_text {
            font-size: 32px
        }

        .kn_lang .right_part .name {
            font-size: 23px
        }

        .kn_lang .main_conent .wrp_cool_text:after,
        .kn_lang .main_conent .wrp_cool_text:before {
            content: attr(data-text);
            display: block;
            width: 100%;
            font-size: 27px
        }

        .kn_lang .main_conent .main_name {
            font-size: 27px
        }

        .kn_lang .main_conent .bonus {
            font-size: 20px;
            margin: 21px 0
        }

        .kn_lang .main_conent .wrp_cool_text {
            margin-right: 25px
        }

        .lang_id .special .wrp_cool_text:after,
        .lang_id .special .wrp_cool_text:before {
            font-size: 21px
        }

        .pk_land .right_part .plus_item {
            padding-right: 0;
            padding-left: 80px
        }

        .pk_land .right_part .img_wrap {
            margin-right: 0;
            right: auto;
            margin-left: -116px;
            left: 0
        }

        .pk_land .main_conent .small_border {
            margin-top: -5px;
            margin-bottom: 5px
        }

        .fr-ch_land .top_line .slogan_text {
            font-size: 26px
        }

        .fr-ch_land .main_conent .main_name,
        .fr-ch_land .main_conent .wrp_cool_text:after,
        .fr-ch_land .main_conent .wrp_cool_text:before,
        .fr-ch_land .special .bet22 {
            font-size: 23px
        }

        .fr-ch_land .special .special_text {
            font-size: 21px;
            line-height: 33px;
            margin-left: 50px
        }

        .fr-ch_land .special .main_name,
        .fr-ch_land .special .wrp_cool_text:before {
            font-size: 14px
        }

        .fr-ch_land .main_conent .btn {
            font-size: 19px
        }

        .fr-ch_land .main_conent .bonus {
            margin-top: 10px
        }

        @media (max-width:1550px) {
            .elem1 {
                top: 20%;
                left: 2%
            }

            .elem2 {
                top: 65%;
                left: 2%
            }

            .elem3 {
                top: 88%;
                left: 3%
            }

            .elem4 {
                top: 100%;
                left: 7%
            }

            .elem5 {
                top: 15%;
                right: 3%
            }

            .elem6 {
                top: 30%;
                right: 7%
            }

            .elem7 {
                top: 50%;
                right: 2%
            }

            .elem8 {
                top: 70%;
                right: 6%
            }

            .elem9 {
                top: 80%;
                right: 5%
            }
        }

        @media (max-width:1400px) {
            .elem1 {
                top: 20%;
                left: 10px
            }

            .elem2 {
                top: 53%;
                width: 181px;
                left: 20px
            }

            .elem3 {
                top: 88%;
                left: 30px
            }

            .elem4 {
                top: 100%;
                left: 5px
            }

            .elem5 {
                top: 15%;
                right: 3%
            }

            .elem6 {
                top: 30%;
                right: 20px
            }

            .elem7 {
                top: 50%;
                right: 2%;
                width: 84px
            }

            .elem8 {
                top: 70%;
                right: 6%
            }

            .elem9 {
                top: 80%;
                right: 5%
            }

            .rose1 {
                top: 21%;
                left: 14%
            }

            .rose2 {
                top: 33%;
                left: 13%
            }

            .rose3 {
                top: 38%;
                left: 3%
            }

            .rose4 {
                top: 44%;
                left: 8%
            }

            .rose5 {
                top: 50%;
                left: 7%
            }

            .rose6 {
                top: 8%;
                right: 15%
            }

            .rose7 {
                top: 28%;
                right: 2%
            }

            .rose8 {
                top: 35%;
                right: 3%
            }

            .rose9 {
                top: 45%;
                right: 7%
            }
        }

        @media (max-width:1200px) {
            .container1 {
                max-width: 800px
            }

            .top_line .slogan_text {
                font-size: 29px
            }

            .persons_wrap {
                max-width: 367px;
                margin-top: 53px
            }

            .main_conent .main_name,
            .main_conent .wrp_cool_text:after,
            .main_conent .wrp_cool_text:before {
                font-size: 33px
            }

            .main_conent .wrp_cool_text {
                top: 18px
            }

            .main_conent .bonus {
                font-size: 19px
            }

            .main_conent .main_name,
            .main_conent .wrp_cool_text:after,
            .main_conent .wrp_cool_text:before {
                font-size: 25px
            }

            .main_conent .main_name_l-ca,
            .main_conent .main_name_l-pt {
                font-size: 2.5em;
                margin-top: 0
            }

            .main_name_l-cad {
                font-size: 2.5em
            }

            .main_conent .btn {
                -moz-background-size: cover;
                background-size: cover;
                height: 65px;
                width: 204px;
                margin: -56px auto 0;
                font-size: 15px
            }

            .right_part .name {
                font-size: 24px
            }

            .special .special_text {
                font-size: 19px;
                line-height: 28px
            }

            .main_conent .wrp_blue.small {
                top: 14px
            }

            .main_conent .small_border {
                font-size: 26px
            }

            .main_conent .inherit_fz {
                font-size: 20px
            }

            .main_conent .inherit_fz .main_name,
            .main_conent .inherit_fz:after,
            .main_conent .inherit_fz:before {
                font-size: inherit
            }

            .fr-ch_land .main_conent .main_name,
            .fr-ch_land .main_conent .wrp_cool_text:after,
            .fr-ch_land .main_conent .wrp_cool_text:before,
            .fr-ch_land .special .bet22 {
                font-size: 18px;
                margin-bottom: 10px
            }

            .fr-ch_land .main_conent .btn {
                height: 83px;
                width: 266px;
                line-height: 83px
            }

            .fr-ch_land .special .special_text {
                font-size: 19px;
                line-height: 22px
            }

            .fr-ch_land .main_conent .btn {
                font-size: 17px
            }

            .fr-ch_land .main_conent .bonus {
                margin-top: 10px
            }

            .second-pt {
                margin-top: 0
            }
        }

        @media (max-width:1110px) {
            .elem1 {
                top: 20%;
                left: -10px
            }

            .elem2 {
                top: 50%;
                width: 181px;
                left: -20px
            }

            .elem3 {
                top: 88%;
                left: -30px
            }

            .elem4 {
                top: 100%;
                left: -5px
            }

            .elem5 {
                top: 15%;
                right: -3%
            }

            .elem6 {
                top: 30%;
                right: -20px
            }

            .elem7 {
                top: 50%;
                right: -2%;
                width: 84px
            }

            .elem8 {
                top: 70%;
                right: -6%
            }

            .elem9 {
                top: 80%;
                right: -5%
            }

            .rose1 {
                top: 8%;
                left: 7%
            }

            .rose2 {
                top: 33%;
                left: 13%
            }

            .rose3 {
                top: 16%;
                left: 3%
            }

            .rose4 {
                top: 34%;
                left: 2%
            }

            .rose5 {
                top: 39%;
                left: 3%
            }

            .rose6 {
                top: 8%;
                right: 7%
            }

            .rose7 {
                top: 14%;
                right: 1%
            }

            .rose8 {
                top: 40%;
                right: 3%
            }

            .rose9 {
                top: 45%;
                right: 4%
            }

            .kn_lang .main_conent .bonus {
                font-size: 14px;
                margin: 6px 0 20px
            }

            .kn_lang .right_part .img_wrap {
                width: 200px;
                margin-right: -141px
            }

            .kn_lang .top_line .slogan_text {
                font-size: 26px
            }

            .pk_land .elems {
                display: none
            }
        }

        @media (max-width:850px) {
            .main_conent {
                display: block
            }

            .main_conent>* {
                width: 100%
            }

            .special .bet22 {
                display: inline-block
            }

            .special .bet22>span {
                margin: 0
            }

            .persons_wrap {
                max-width: 367px;
                margin-top: -18px
            }

            .main_conent .wellcome_block {
                height: 200px
            }

            .main_conent .main_name_l-fr {
                font-size: 3em;
                margin-top: 0
            }

            .main_conent .main_name_l-de {
                font-size: 2.5em
            }

            .main_conent .main_name_l-ca {
                font-size: 2em;
                margin: -5px 0 5px
            }

            .main_name_l-cad {
                font-size: 1.7em
            }

            .main_conent-pt .wrp_cool_text {
                top: 11px
            }

            .main_conent .main_name_l-pt {
                font-size: 2em
            }

            .main_conent-pt .main_name {
                margin-bottom: 7px
            }

            .right_part {
                margin-bottom: 47px
            }

            .right_part_mt {
                margin-top: 25px
            }

            .right_part_ca {
                margin-top: 0
            }

            .special {
                padding-top: 21px;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -moz-box-orient: vertical;
                -moz-box-direction: normal;
                -ms-flex-direction: column;
                -webkit-flex-direction: column;
                flex-direction: column;
                text-align: center
            }

            .special .special_text {
                font-size: 15px;
                line-height: 23px
            }

            .special .bet22 {
                font-size: 20px
            }

            .second .container1 {
                max-width: 320px
            }

            .second .btn_wrp {
                margin: 20px 0 25px
            }

            .container1 {
                max-width: 320px
            }

            .top_line {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -moz-box-orient: vertical;
                -moz-box-direction: normal;
                -ms-flex-direction: column;
                -webkit-flex-direction: column;
                flex-direction: column;
                padding: 15px 10px
            }

            .top_line .slogan_text {
                font-size: 29px;
                text-align: center
            }

            .top_line .logo {
                width: 130px;
                margin-bottom: 12px
            }

            .left_part {
                margin-top: 0
            }

            .main_conent .wellcome_block {
                margin: -7px 0 0;
                height: 188px
            }

            .right_part .name {
                font-size: 17px
            }

            .right_part .img_wrap {
                width: 112px;
                height: 116px;
                margin-right: -19px;
                margin-right: -50px;
                ght: -116px;
                position: absolute;
                right: 0
                    /* margin-top: -18px */
            }

            .right_part .main_conent .wrp_cool_text {
                top: 0
            }

            .right_part .plus_item {
                padding-right: 70px
            }

            .main_conent .right_part .main_name,
            .main_conent .right_part .wrp_cool_text:after,
            .main_conent .right_part .wrp_cool_text:before {
                font-size: 17px
            }

            .right_part .sub_name {
                margin: 22px 15px 20px;
                font-size: 13px;
                max-width: 80%
            }

            .special .btn_join {
                width: 187px;
                height: 53px;
                line-height: 55px
            }

            .special .wrp_cool_text:after {
                display: none
            }

            .lang_id .special .wrp_cool_text:after,
            .lang_id .special .wrp_cool_text:before,
            .special .main_name,
            .special .wrp_cool_text:before {
                font-size: 16px
            }

            .payments img {
                margin: 10px;
                max-width: 62px
            }

            .payments {
                padding-top: 47px;
                margin-bottom: 23px
            }

            .games_wrp {
                padding-top: 10px;
                padding-bottom: 11px
            }

            .games_wrp img {
                margin: 10px 15px;
                max-width: 62px
            }

            .copy {
                max-width: 320px;
                margin: 0 auto
            }

            .main_conent .btn {
                margin: -61px auto 0
            }

            .elem1 {
                top: 10%;
                left: -10px
            }

            .elem2 {
                top: 35%;
                width: 181px;
                left: -20px
            }

            .elem3 {
                top: 45%;
                left: -30px
            }

            .elem4 {
                top: 100%;
                left: -5px
            }

            .elem5 {
                top: 7%;
                right: -3%
            }

            .elem6 {
                top: 15%;
                right: -20px
            }

            .elem7 {
                top: 30%;
                right: -2%;
                width: 84px
            }

            .elem8 {
                top: 50%;
                right: -6%
            }

            .elem9 {
                top: 60%;
                right: -5%
            }

            .rose1 {
                top: 2%;
                left: 7%
            }

            .rose2 {
                top: 9%;
                left: 13%
            }

            .rose3 {
                top: 22%;
                left: 3%
            }

            .rose4 {
                top: 34%;
                left: 3%
            }

            .rose5 {
                display: none
            }

            .rose6 {
                top: 3%;
                right: 7%
            }

            .rose7 {
                top: 7%;
                right: 1%
            }

            .rose8 {
                top: 25%;
                right: 3%
            }

            .rose9 {
                top: 45%;
                right: 4%
            }

            .kn_lang .right_part .img_wrap {
                width: 200px;
                margin-right: -179px
            }

            .cn_lang .right_part .sub_name {
                max-width: 85%
            }

            .main_conent .small_border {
                font-size: 20px
            }

            .pk_land .right_part .img_wrap {
                margin-left: -20px
            }

            .pk_land .elems {
                display: block
            }

            .fr-ch_land .special .special_text {
                margin-left: 0
            }
        }

        @media (max-width:610px) {
            .elems {
                max-width: 10px
            }

            .right_part .sub_name {
                max-width: 100%
            }

            .right_part .img_wrap {
                margin-right: -26px
            }

            .special .special_text {
                font-size: 15px;
                line-height: 23px;
                padding: 0 10px
            }

            .rose9 {
                display: none
            }

            .main_conent .wrp_cool_text {
                top: 13px
            }

            .lang_in .top_line .slogan_text {
                font-size: 22px
            }

            .fr-ch_land .top_line .slogan_text {
                font-size: 18px
            }

            .fr-ch_land .main_conent .btn {
                font-size: 14px
            }

            .fr-ch_land .main_conent .bonus {
                margin-top: 10px
            }
        }

        @-webkit-keyframes a {
            0% {
                -webkit-transform: translateY(-17px);
                transform: translateY(-17px)
            }

            50% {
                -webkit-transform: translateY(8px) rotate(.01deg);
                transform: translateY(8px) rotate(.01deg)
            }

            to {
                -webkit-transform: translateY(-17px);
                transform: translateY(-17px)
            }
        }

        @-moz-keyframes a {
            0% {
                -moz-transform: translateY(-17px);
                transform: translateY(-17px)
            }

            50% {
                -moz-transform: translateY(8px) rotate(.01deg);
                transform: translateY(8px) rotate(.01deg)
            }

            to {
                -moz-transform: translateY(-17px);
                transform: translateY(-17px)
            }
        }

        @keyframes a {
            0% {
                -webkit-transform: translateY(-17px);
                -moz-transform: translateY(-17px);
                transform: translateY(-17px)
            }

            50% {
                -webkit-transform: translateY(8px) rotate(.01deg);
                -moz-transform: translateY(8px) rotate(.01deg);
                transform: translateY(8px) rotate(.01deg)
            }

            to {
                -webkit-transform: translateY(-17px);
                -moz-transform: translateY(-17px);
                transform: translateY(-17px)
            }
        }

        @-webkit-keyframes b {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            50% {
                -webkit-transform: scale(1.1) rotate(.01deg);
                transform: scale(1.1) rotate(.01deg)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @-moz-keyframes b {
            0% {
                -moz-transform: scale(1);
                transform: scale(1)
            }

            50% {
                -moz-transform: scale(1.1) rotate(.01deg);
                transform: scale(1.1) rotate(.01deg)
            }

            to {
                -moz-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes b {
            0% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transform: scale(1)
            }

            50% {
                -webkit-transform: scale(1.1) rotate(.01deg);
                -moz-transform: scale(1.1) rotate(.01deg);
                transform: scale(1.1) rotate(.01deg)
            }

            to {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transform: scale(1)
            }
        }

        @-webkit-keyframes c {
            0% {
                -webkit-filter: brightness(100%);
                filter: brightness(100%)
            }

            50% {
                -webkit-filter: brightness(120%);
                filter: brightness(120%)
            }

            to {
                -webkit-filter: brightness(100%);
                filter: brightness(100%)
            }
        }

        @-moz-keyframes c {
            0% {
                filter: brightness(100%)
            }

            50% {
                filter: brightness(120%)
            }

            to {
                filter: brightness(100%)
            }
        }

        @keyframes c {
            0% {
                -webkit-filter: brightness(100%);
                filter: brightness(100%)
            }

            50% {
                -webkit-filter: brightness(120%);
                filter: brightness(120%)
            }

            to {
                -webkit-filter: brightness(100%);
                filter: brightness(100%)
            }
        }

        .btn-777 {
            background-color: #00B8A9 !important;
            color: #362109 !important
        }

        .default-btn-777 {
            color: #362109 !important;
            border: 1px solid #c7984a !important
        }

        .default-no-btn-777 {
            color: #362109 !important
        }

        .line-777 {
            border-bottom: 1px solid #c7984a !important
        }

        /* 解决头条小程序组件内引入字体不生效的问题 */
        html {
            font-size: 10px !important
        }

        uni-page-head {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .25)
        }

        uni-page-body,
        page-wrapper {
            background-color: #f1f1f1
        }

        .tabbar-wrapper {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .25)
        }

        .uni-page-head {
            background-color: #fff !important
        }

        body {
            background-color: #f1f1f1
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
        /**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        @font-face {
            font-family: uniicons;
            src: url(/uni.75745d34.ttf) format("truetype")
        }

        .uni-icons[data-v-4c782b3f] {
            font-family: uniicons;
            text-decoration: none;
            text-align: center
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
        /**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        .uni-easyinput[data-v-08dfab0c] {
            width: 100%;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            position: relative;
            text-align: left;
            color: #333;
            font-size: 14px
        }

        .uni-easyinput__content[data-v-08dfab0c] {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            width: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            box-sizing: border-box;
            min-height: 36px;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .uni-easyinput__content-input[data-v-08dfab0c] {
            width: auto;
            position: relative;
            overflow: hidden;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            line-height: 2;
            font-size: 14px
        }

        .is-textarea[data-v-08dfab0c] {
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            align-items: flex-start
        }

        .is-textarea-icon[data-v-08dfab0c] {
            margin-top: 5px
        }

        .uni-easyinput__content-textarea[data-v-08dfab0c] {
            position: relative;
            overflow: hidden;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            line-height: 1.5;
            font-size: 14px;
            padding-top: 6px;
            padding-bottom: 10px;
            height: 80px;
            min-height: 80px;
            width: auto
        }

        .input-padding[data-v-08dfab0c] {
            padding-left: 10px
        }

        .content-clear-icon[data-v-08dfab0c] {
            padding: 0 5px
        }

        .label-icon[data-v-08dfab0c] {
            margin-right: 5px;
            margin-top: -1px
        }

        .is-input-border[data-v-08dfab0c] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            box-sizing: border-box;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            border: 1px solid #e5e5e5;
            border-radius: 4px
        }

        .is-required[data-v-08dfab0c] {
            color: #dd524d
        }

        .uni-error-message[data-v-08dfab0c] {
            position: absolute;
            bottom: -17px;
            left: 0;
            line-height: 12px;
            color: #dd524d;
            font-size: 12px;
            text-align: left
        }

        .uni-error-msg--boeder[data-v-08dfab0c] {
            position: relative;
            bottom: 0;
            line-height: 22px
        }

        .is-input-error-border[data-v-08dfab0c] {
            border-color: #dd524d
        }

        .uni-easyinput--border[data-v-08dfab0c] {
            margin-bottom: 0;
            padding: 10px 15px;
            border-top: 1px #eee solid
        }

        .uni-easyinput-error[data-v-08dfab0c] {
            padding-bottom: 0
        }

        .is-first-border[data-v-08dfab0c] {
            border: none
        }

        .is-disabled[data-v-08dfab0c] {
            background-color: #eee
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
        /**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        .phone-area-wrapper[data-v-ea3f4e3e] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .phone-area-wrapper .uni-easyinput[data-v-ea3f4e3e] .uni-easyinput__content {
            border: 1px solid #ddd;
            background-color: #fff;
            height: 44px;
            border-radius: 4px
        }

        .phone-area-wrapper .uni-easyinput[data-v-ea3f4e3e] .uni-easyinput__content uni-input {
            font-size: 16px
        }

        .phone-area-wrapper .icon-image[data-v-ea3f4e3e] {
            width: 20px;
            height: 20px;
            margin-left: 12px
        }

        .phone-area-wrapper .phone-area[data-v-ea3f4e3e] {
            font-size: 16px;
            line-height: 33px;
            height: 32px;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            padding-left: 10px
        }

        .phone-area-wrapper .phone-area .national_flag[data-v-ea3f4e3e] {
            margin-right: 2px;
            height: 24px;
            width: 24px
        }

        .phone-area-wrapper .phone[data-v-ea3f4e3e] {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            flex-grow: 1;
            margin-left: 4px;
            line-height: 32px;
            height: 32px
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
        /**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        .segmented-control[data-v-c72ddc8a] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            box-sizing: border-box;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            flex-direction: row;
            height: 36px;
            overflow: hidden;
            cursor: pointer
        }

        .segmented-control__item[data-v-c72ddc8a] {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: inline-flex;
            box-sizing: border-box;
            position: relative;
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            flex: 1;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }

        .segmented-control__item--button[data-v-c72ddc8a] {
            border-style: solid;
            border-top-width: 1px;
            border-bottom-width: 1px;
            border-right-width: 1px;
            border-left-width: 0
        }

        .segmented-control__item--button--first[data-v-c72ddc8a] {
            border-left-width: 1px;
            border-top-left-radius: 5px;
            border-bottom-left-radius: 5px
        }

        .segmented-control__item--button--last[data-v-c72ddc8a] {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px
        }

        .segmented-control__item--text[data-v-c72ddc8a] {
            border-bottom-style: solid;
            border-bottom-width: 3px
        }

        .segmented-control__text[data-v-c72ddc8a] {
            font-size: 16px;
            line-height: 20px;
            text-align: center
        }
    </style>

    <title>Withdrawal</title>
    <style type="text/css" id="uni-btn-font-font1647524409121">
        @font-face {
            font-family: "font1647524409121";
            src: url("/uni.ttf") format("truetype")
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <style type="text/css">
        .uni-app--showtabbar uni-page-wrapper {
            display: block;
            height: calc(100% - 50px);
            height: calc(100% - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 50px - env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-wrapper::after {
            content: "";
            display: block;
            width: 100%;
            height: 50px;
            height: calc(50px + constant(safe-area-inset-bottom));
            height: calc(50px + env(safe-area-inset-bottom));
        }

        .uni-app--showtabbar uni-page-head[uni-page-head-type="default"]~uni-page-wrapper {
            height: calc(100% - 44px - 50px);
            height: calc(100% - 44px - constant(safe-area-inset-top) - 50px - constant(safe-area-inset-bottom));
            height: calc(100% - 44px - env(safe-area-inset-top) - 50px - env(safe-area-inset-bottom));
        }
    </style>
    <style type="text/css">
        @charset "UTF-8";

        /**
* 这里是uni-app内置的常用样式变量
*
* uni-app 官方扩展插件及插件市场（https://ext.dcloud.net.cn）上很多三方插件均使用了这些样式变量
* 如果你是插件开发者，建议你使用scss预处理，并在插件代码中直接使用这些变量（无需 import 这个文件），方便用户通过搭积木的方式开发整体风格一致的App
*
*/
        /**
* 如果你是App开发者（插件使用者），你可以通过修改这些变量来定制自己的插件主题，实现自定义主题功能
*
* 如果你的项目同样使用了scss预处理，你也可以直接在你的 scss 代码中使用如下变量，同时无需 import 这个文件
*/
        /* 颜色变量 */
        /* 行为相关颜色 */
        /* 文字基本颜色 */
        /* 背景颜色 */
        /* 边框颜色 */
        /* 尺寸变量 */
        /* 文字尺寸 */
        /* 图片尺寸 */
        /* Border Radius */
        /* 水平间距 */
        /* 垂直间距 */
        /* 透明度 */
        /* 文章场景相关 */
        .recharge-wrapper[data-v-4897be6c] {
            padding: 3px 12px
        }

        .recharge-wrapper .balance[data-v-4897be6c] {
            font-size: 15px;
            margin-bottom: 20px;
            padding: 0 12px;
            height: 60px;
            line-height: 60px;
            margin-left: -12px;
            margin-right: -12px;
            background-color: #fff
        }

        .recharge-wrapper .balance[data-v-4897be6c]> :first-child {
            color: #777;
            margin-right: 10px
        }

        .recharge-wrapper .balance[data-v-4897be6c]> :nth-child(2) {
            font-size: 20px;
            color: #333
        }

        .recharge-wrapper .uni-easyinput[data-v-4897be6c] .uni-easyinput__content {
            margin-top: 30px;
            height: 60px;
            padding: 0 16px;
            border: 1px solid transparent;
            background-color: #fff
        }

        .recharge-wrapper .uni-easyinput[data-v-4897be6c] .uni-easyinput__content uni-input {
            font-size: 16px
        }

        .recharge-wrapper .icon-image[data-v-4897be6c] {
            width: 20px;
            height: 20px
        }

        .recharge-wrapper .bank-card-wrap[data-v-4897be6c] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            border-radius: 8px;
            box-shadow: 0 0 4px 0 rgba(0, 0, 0, .35);
            background-color: #fff;
            padding: 12px 16px
        }

        .recharge-wrapper .bank-card-wrap .bank-card[data-v-4897be6c] {
            margin-left: 10px;
            margin-top: -2px
        }

        .recharge-wrapper .bank-card-wrap .bank-card .uni-input[data-v-4897be6c] {
            background-color: initial;
            border: none;
            font-size: 16px;
            margin-bottom: 2px;
            text-align: left
        }

        .recharge-wrapper .bank-card-wrap .bank-card .uni-input .input-placeholder[data-v-4897be6c] {
            font-size: 16px
        }

        .recharge-wrapper .sub-title[data-v-4897be6c] {
            font-size: 16px;
            padding: 20px 0 6px;
            text-align: left
        }

        .recharge-wrapper .tips[data-v-4897be6c] {
            color: #999
        }

        .recharge-wrapper .list-item[data-v-4897be6c] {
            padding: 10px 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            font-size: 14px;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
            color: #333
        }

        .recharge-wrapper .list-item .icon[data-v-4897be6c] {
            -webkit-transition: all .3s ease;
            transition: all .3s ease
        }

        .recharge-wrapper .list-item .up[data-v-4897be6c] {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .recharge-wrapper .submit[data-v-4897be6c] {
            margin: 20px 0;
            background-color: #fc2779
        }

        .pay-pwd-btn[data-v-4897be6c] {
            color: #fc2779;
            border: 1px solid #fc2779;
            background-color: #fff
        }

        .paytype[data-v-4897be6c] {
            display: inline-block;
            border: 1px solid #ddd;
            padding: 5px 10px;
            border-radius: 5px;
            width: 160px
        }

        .paytype.item-label[data-v-4897be6c] {
            color: #777
        }

        .add-bank[data-v-4897be6c] {
            width: 30px;
            height: 30px;
            margin-left: 10px
        }

        .flex-row[data-v-4897be6c] {
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            align-items: center
        }
    </style>
            <style>
                #copied{
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 50px;
            font-size: 17px;
        }

       

        #copied.show {
            visibility: visible;
            margin-bottom: 205px;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        </style>

<style>

h3{ font-weight:normal; font-size:20px;}

.btn .error{margin-top: 55px;}

.btn-group {

box-shadow: none;

}

#alert h4{font-size: 1rem;}

#alert p{font-size: 13px; margin-top:20px;}

#alert .modal-content{border-radius:3px}

#alert .modal-dialog{padding:20px; font-weight: bold;}

#confirm .modal-dialog{padding:20px; }

.inner-addon select.error {

    font-size: 16px;

    position: unset;

}





span#total-error {

    display: block;

  

}

</style>


<style>


.btn { background-image: linear-gradient(
#00B8A9, 
#00B8A9);
    border-radius: 5px 5px 5px 5px;
    border: 0.5px solid white;
    color: white;
    transition: 0.5s;
    
}
    


.card {border-radius: 7px 7px 7px 7px;
border-size: 2 px;
border-color: white;
transition: 0.5s;
background-image: linear-gradient(#00695C, #00695C); 
}
.form-control2{ 
    border-radius: 50px 50px 50px 50px;
max-width: 210px;
height: 30px;
font-family: 'Abel', sans-serif;
 border: 0.6px solid white;
	padding: 20px;

	box-shadow: inset 0px 0px 5px #ff3300;
	transition: 0.5s;
	background-color: white;
		opacity:1px;
}


    .btn { background-image: linear-gradient(
#00B8A9, 
#00B8A9);
    border-radius: ;
    border:;
    color:black;
    transition:;
    
}

  
</style>



<style>

h3{ font-weight:normal; font-size:14px;}





    .btn { background-image: linear-gradient(

#FD349C, 

#FD349C);

    border-radius: 5px 5px 5px 5px;

    border: 0.5px solid white;

    color: white;

    transition: 0.5s;

    

}
.appHeader1 {
    	background-image: url("bg.jpg");

</style>

<style>
    .btn-bg{
        padding: 8px;
        margin-right: 3px;
    }    
</style>

</head>



<body>

<?php

include("include/connection.php");

$userid=$_SESSION['frontuserid'];?>





<body class="uni-body pages-userinfo-recharge">
<div class="appHeader1" >
<div class="left">
            <a href="#" onClick="goBack();" class="icon goBack">
                <i class="icon ion-md-arrow-back"></i>
            </a>
            <div class="pageTitle">Withdrawal</div>
              </div> <div class="right"> 
  <a  href="withdrawalrecord.php" role="button" style="font-size:20px;">
    <i class="icon ion-md-paper"></i></a>
 </div>
</div>
                    <!---->
                  
                   
                <div class="uni-placeholder"></div>
            </uni-page-head>
<uni-page-wrapper>
                <uni-page-body>
                    <uni-view data-v-4897be6c="" class="recharge-wrapper">
                        <uni-view data-v-4897be6c="" class="balance">
                            <uni-text data-v-4897be6c=""><span>Balance:</span></uni-text>
                            <uni-text data-v-4897be6c=""><span>₹ <span><?php echo number_format(wallet($con,'amount',$userid), 2);?></span></span></uni-text>
                        </uni-view>
                        
                        <form action="#" id="paymentForm" method="post" class="card-body" autocomplete="off">
                        
                        <uni-view data-v-4897be6c="" class="bank-card-wrap">
                            <uni-image data-v-4897be6c="" class="icon-image">
                                <div
                                    style="background-image: url(&quot;https://i.ibb.co/Hg6DHK3/rupee-indian-1.png&quot;); background-position: center center; background-size: contain; background-repeat: no-repeat;">
                                </div><img src="https://i.ibb.co/Hg6DHK3/rupee-indian-1.png" draggable="true">
                                <!---->
                            </uni-image>
                             
                            <uni-view data-v-4897be6c="" class="bank-card">
                                <uni-input data-v-4897be6c="" class="uni-input">
                                    <div class="uni-input-wrapper">
                                        <div class="uni-input-placeholder input-placeholder" data-v-4897be6c=""> </div>
                                        <input type="number" id="userammount" class="uni-input-input" placeholder="Enter amount" name="userammount" onKeyPress="return isNumber(event)" >
                                        <!---->
                                    </div>
                                </uni-input>
                                <uni-view data-v-4897be6c="" class="tips">
                                    <uni-text data-v-4897be6c="" class="danger"><p Style="font-size:11px; color: red;">Included 5% fee. to account :- <span ><output style="border: none;" type="text"  id="total" readonly /></span></p></uni-text>
                                    <uni-text data-v-4897be6c="" class="danger"><p>Withdrawal Timing :10AM TO 5PM<span ><output style="border: none;" type="text"  id="total" readonly /></span></p></uni-text>
                                </uni-view>
                            </uni-view>
                        </uni-view>


            <div><br>               
                     

           <p> <strong>Select Payout Option</strong></p>

      <div class="btn-group btn-group-toggle mt-1" data-toggle="buttons">


                        <label class="btn btn-outline-primary ml-1 btn-bg" style="width:97%"; 
    border: 1px solid white;
        color: white;
    height:45px;
    width:64px;background-color:#00B8A9;">

                            <input type="radio" name="optionsname" id="option2" value="bank" onChange="paytype(<?php echo $userid?>,'bank')">

                            <i class="icon ion-md-checkmark"></i>&nbsp;

                            Bank Account

                        </label>

                         <label class="btn btn-outline-primary ml-1 btn-bg" style="width:97%; 
    border: 1px solid white;
        color: white;
    height:45px; 
    width:64px;background-color:#00B8A9;"">

                            <input type="radio" name="optionsname" id="option2" value="bank" onChange="paytype(<?php echo $userid?>,'upi')">

                            <i class="icon ion-md-checkmark"></i>&nbsp;

                            UPI ID

                        </label>
          
</div>
                   <br><br>

               <div class="inner-addon left-addon mt-1">

      <i class="icon ion-md-card"></i>

        <select class="form-control select2" name="acid" id="acid" style="padding-left:45px;">

        <option value="">Select Bank Detail</option>

        </select>

      </div>  

      <br>
      
<input type="hidden" name="userid" value="<?php echo $userid;?>">


<input type="hidden" name="action" value="withdrawal">



      <div class="text-center mt-3">


<?php 

 $my_with_q="select* FROM `tbl_paymentsetting` WHERE id='1'";

$my_with=mysqli_query($con,$my_with_q);

$with_status=mysqli_fetch_array($my_with);


if ($with_status['withdrawal_status'] == 'off') {

  echo '<h3 class="" style="width:97%; 
    border: 1px solid white;
        color: white;
    height:45px; 
    width:264px ;background-color:#00B8A9 ;margin-left:50px">  WITHDRAWAL TIMING :10AM TO 5PM';
  // code...</h3>
} 



if ($with_status['withdrawal_status'] == 'on') {

  echo ' <button class="" style="width:97%; 
    border: 1px solid white;
        color: white;
    height:45px; 
    width:264px;background-color:#00B8A9;"> Withdrawal </button>';
  // code...
}

 ?>


       

        </div>

        

      </div>

    </form>



<input type="hidden" value="5" id="percent"  required/>





  </div>

</div>

<!--<div class="container d-flex justify-content-center"><a href="withdrawalrecord.php" class"badge bg-info">Withdrawal Record</a>

</div>-->

<!-- appCapsule -->

<br><br>

<?php include("include/footer.php");?>

<div id="alert" class="modal fade" role="dialog">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div class="modal-body" id="alertmessage"> </div>

      <div class="text-center pb-1">

    <a type="button" class="text-info" data-dismiss="modal">OK</a>

    </div> 

    </div>

  </div>

</div>

<script src="assets/js/lib/jquery-3.4.1.min.js"></script> 




<!-- Bootstrap--> 

<script src="assets/js/lib/popper.min.js"></script> 

<script src="assets/js/lib/bootstrap.min.js"></script> 

<!-- Owl Carousel --> 

<script src="assets/js/plugins/owl.carousel.min.js"></script> 

<!-- Main Js File --> 

<script src="assets/js/app.js"></script>

<script src="assets/js/jquery.validate.min.js"></script>

<script src="assets/js/withdrawal.js.php"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<script>

function paytype(userid,type)

{

//alert(userid);

var dataString = 'userid='+ userid+ "& type=" + type;

$.ajax

({

type: "POST",

url: "ajax_bankdetail.php",

data: dataString,

cache: false,

success: function(html)

{ //alert(html);

$("#acid").html(html);

} 

}); 

  }

</script>







<script>

// bind event handler to both input and select tag

$('#percent,#userammount').on('change input', function() {

  // parse input field value, if NaN treat as 0

  var val = Number($('#userammount').val()) || 0,

    // parse select field value, if NaN treat as 0

    per = Number($('#percent').val()) || 0;

  // calculate and update the total

  $('#total').val(val - val * per / 100)

})



</script>




</body>

</html>