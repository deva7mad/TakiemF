<?php
header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->

    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <link type="text/css" rel="stylesheet" href="stylenew.css" media="screen,projection" />
    <link rel="stylesheet" href="style.css" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="datepicker.min.css" />
   <style>
.teacher{
       background: linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
    #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
}
nav {
    color: #fff;
    background-color: #ee6e73;
    width: 100%;
    height: 56px;
    line-height: 56px
}
nav.nav-extended {
    height: auto
}
nav.nav-extended .nav-wrapper {
    min-height: 56px;
    height: auto
}
nav.nav-extended .nav-content {
    position: relative;
    line-height: normal
}
nav a {
    color: #fff
}
nav i,
nav [class^="mdi-"],
nav [class*="mdi-"],
nav i.material-icons {
    display: block;
    font-size: 24px;
    height: 56px;
    line-height: 56px
}
nav .nav-wrapper {
    position: relative;
    height: 100%
}
@media only screen and (min-width: 993px) {
    nav a.button-collapse {
        display: none
    }
}
nav .button-collapse {
    float: left;
    position: relative;
    z-index: 1;
    height: 56px;
    margin: 0 18px
}
nav .button-collapse i {
    height: 56px;
    line-height: 56px
}
nav .brand-logo {
    position: absolute;
    color: #fff;
    display: inline-block;
    font-size: 2.1rem;
    padding: 0
}
nav .brand-logo.center {
    left: 50%;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%)
}
@media only screen and (max-width: 992px) {
    nav .brand-logo {
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }
    nav .brand-logo.left,
    nav .brand-logo.right {
        padding: 0;
        -webkit-transform: none;
        transform: none
    }
    nav .brand-logo.left {
        left: 0.5rem
    }
    nav .brand-logo.right {
        right: 0.5rem;
        left: auto
    }
}
nav .brand-logo.right {
    right: 0.5rem;
    padding: 0
}
nav .brand-logo i,
nav .brand-logo [class^="mdi-"],
nav .brand-logo [class*="mdi-"],
nav .brand-logo i.material-icons {
    float: left;
    margin-right: 15px
}
nav .nav-title {
    display: inline-block;
    font-size: 32px;
    padding: 28px 0
}
nav ul {
    margin: 0
}
nav ul li {
    -webkit-transition: background-color .3s;
    transition: background-color .3s;
    float: left;
    padding: 0
}
nav ul li.active {
    background-color: rgba(0, 0, 0, 0.1)
}
nav ul a {
    -webkit-transition: background-color .3s;
    transition: background-color .3s;
    font-size: 1rem;
    color: #fff;
    display: block;
    padding: 0 15px;
    cursor: pointer
}
nav ul a.btn,
nav ul a.btn-large,
nav ul a.btn-large,
nav ul a.btn-flat,
nav ul a.btn-floating {
    margin-top: -2px;
    margin-left: 15px;
    margin-right: 15px
}
nav ul a.btn>.material-icons,
nav ul a.btn-large>.material-icons,
nav ul a.btn-large>.material-icons,
nav ul a.btn-flat>.material-icons,
nav ul a.btn-floating>.material-icons {
    height: inherit;
    line-height: inherit
}
nav ul a:hover {
    background-color: rgba(0, 0, 0, 0.1)
}
nav ul.left {
    float: left
}
nav form {
    height: 100%
}
nav .input-field {
    margin: 0;
    height: 100%
}
nav .input-field input {
    height: 100%;
    font-size: 1.2rem;
    border: none;
    padding-left: 2rem
}
nav .input-field input:focus,
nav .input-field input[type=text]:valid,
nav .input-field input[type=password]:valid,
nav .input-field input[type=email]:valid,
nav .input-field input[type=url]:valid,
nav .input-field input[type=date]:valid {
    border: none;
    -webkit-box-shadow: none;
    box-shadow: none
}
nav .input-field label {
    top: 0;
    left: 0
}
nav .input-field label i {
    color: rgba(255, 255, 255, 0.7);
    -webkit-transition: color .3s;
    transition: color .3s
}
nav .input-field label.active i {
    color: #fff
}
.navbar-fixed {
    position: relative;
    height: 56px;
    z-index: 997
}
.navbar-fixed nav {
    position: fixed
}
@media only screen and (min-width: 601px) {
    nav.nav-extended .nav-wrapper {
        min-height: 64px
    }
    nav,
    nav .nav-wrapper i,
    nav a.button-collapse,
    nav a.button-collapse i {
        height: 64px;
        line-height: 64px
    }
    .navbar-fixed {
        height: 64px
    }
}
@font-face {
    font-family: "Roboto";
    src: local(Roboto Thin), url("../fonts/roboto/Roboto-Thin.woff2") format("woff2"), url("../fonts/roboto/Roboto-Thin.woff") format("woff");
    font-weight: 100
}
@font-face {
    font-family: "Roboto";
    src: local(Roboto Light), url("../fonts/roboto/Roboto-Light.woff2") format("woff2"), url("../fonts/roboto/Roboto-Light.woff") format("woff");
    font-weight: 300
}
@font-face {
    font-family: "Roboto";
    src: local(Roboto Regular), url("../fonts/roboto/Roboto-Regular.woff2") format("woff2"), url("../fonts/roboto/Roboto-Regular.woff") format("woff");
    font-weight: 400
}
@font-face {
    font-family: "Roboto";
    src: local(Roboto Medium), url("../fonts/roboto/Roboto-Medium.woff2") format("woff2"), url("../fonts/roboto/Roboto-Medium.woff") format("woff");
    font-weight: 500
}
@font-face {
    font-family: "Roboto";
    src: local(Roboto Bold), url("../fonts/roboto/Roboto-Bold.woff2") format("woff2"), url("../fonts/roboto/Roboto-Bold.woff") format("woff");
    font-weight: 700
}

.container .row {
    margin-left: -.75rem;
    margin-right: -.75rem
}
.row {
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 20px
}
.row:after {
    content: "";
    display: table;
    clear: both
}
.row .col {
    float: left;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    padding: 0 .75rem;
    min-height: 1px
}
.row .col[class*="push-"],
.row .col[class*="pull-"] {
    position: relative
}
.row .col.s1 {
    width: 8.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s2 {
    width: 16.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s3 {
    width: 25%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s4 {
    width: 33.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s5 {
    width: 41.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s6 {
    width: 50%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s7 {
    width: 58.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s8 {
    width: 66.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s9 {
    width: 75%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s10 {
    width: 83.3333333333%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s11 {
    width: 91.6666666667%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.s12 {
    width: 100%;
    margin-left: auto;
    left: auto;
    right: auto
}
.row .col.offset-s1 {
    margin-left: 8.3333333333%
}
.row .col.pull-s1 {
    right: 8.3333333333%
}
.row .col.push-s1 {
    left: 8.3333333333%
}
.row .col.offset-s2 {
    margin-left: 16.6666666667%
}
.row .col.pull-s2 {
    right: 16.6666666667%
}
.row .col.push-s2 {
    left: 16.6666666667%
}
.row .col.offset-s3 {
    margin-left: 25%
}
.row .col.pull-s3 {
    right: 25%
}
.row .col.push-s3 {
    left: 25%
}
.row .col.offset-s4 {
    margin-left: 33.3333333333%
}
.row .col.pull-s4 {
    right: 33.3333333333%
}
.row .col.push-s4 {
    left: 33.3333333333%
}
.row .col.offset-s5 {
    margin-left: 41.6666666667%
}
.row .col.pull-s5 {
    right: 41.6666666667%
}
.row .col.push-s5 {
    left: 41.6666666667%
}
.row .col.offset-s6 {
    margin-left: 50%
}
.row .col.pull-s6 {
    right: 50%
}
.row .col.push-s6 {
    left: 50%
}
.row .col.offset-s7 {
    margin-left: 58.3333333333%
}
.row .col.pull-s7 {
    right: 58.3333333333%
}
.row .col.push-s7 {
    left: 58.3333333333%
}
.row .col.offset-s8 {
    margin-left: 66.6666666667%
}
.row .col.pull-s8 {
    right: 66.6666666667%
}
.row .col.push-s8 {
    left: 66.6666666667%
}
.row .col.offset-s9 {
    margin-left: 75%
}
.row .col.pull-s9 {
    right: 75%
}
.row .col.push-s9 {
    left: 75%
}
.row .col.offset-s10 {
    margin-left: 83.3333333333%
}
.row .col.pull-s10 {
    right: 83.3333333333%
}
.row .col.push-s10 {
    left: 83.3333333333%
}
.row .col.offset-s11 {
    margin-left: 91.6666666667%
}
.row .col.pull-s11 {
    right: 91.6666666667%
}
.row .col.push-s11 {
    left: 91.6666666667%
}
.row .col.offset-s12 {
    margin-left: 100%
}
.row .col.pull-s12 {
    right: 100%
}
.row .col.push-s12 {
    left: 100%
}
@media only screen and (min-width: 601px) {
    .row .col.m1 {
        width: 8.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m2 {
        width: 16.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m3 {
        width: 25%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m4 {
        width: 33.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m5 {
        width: 41.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m6 {
        width: 50%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m7 {
        width: 58.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m8 {
        width: 66.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m9 {
        width: 75%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m10 {
        width: 83.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m11 {
        width: 91.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.m12 {
        width: 100%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.offset-m1 {
        margin-left: 8.3333333333%
    }
    .row .col.pull-m1 {
        right: 8.3333333333%
    }
    .row .col.push-m1 {
        left: 8.3333333333%
    }
    .row .col.offset-m2 {
        margin-left: 16.6666666667%
    }
    .row .col.pull-m2 {
        right: 16.6666666667%
    }
    .row .col.push-m2 {
        left: 16.6666666667%
    }
    .row .col.offset-m3 {
        margin-left: 25%
    }
    .row .col.pull-m3 {
        right: 25%
    }
    .row .col.push-m3 {
        left: 25%
    }
    .row .col.offset-m4 {
        margin-left: 33.3333333333%
    }
    .row .col.pull-m4 {
        right: 33.3333333333%
    }
    .row .col.push-m4 {
        left: 33.3333333333%
    }
    .row .col.offset-m5 {
        margin-left: 41.6666666667%
    }
    .row .col.pull-m5 {
        right: 41.6666666667%
    }
    .row .col.push-m5 {
        left: 41.6666666667%
    }
    .row .col.offset-m6 {
        margin-left: 50%
    }
    .row .col.pull-m6 {
        right: 50%
    }
    .row .col.push-m6 {
        left: 50%
    }
    .row .col.offset-m7 {
        margin-left: 58.3333333333%
    }
    .row .col.pull-m7 {
        right: 58.3333333333%
    }
    .row .col.push-m7 {
        left: 58.3333333333%
    }
    .row .col.offset-m8 {
        margin-left: 66.6666666667%
    }
    .row .col.pull-m8 {
        right: 66.6666666667%
    }
    .row .col.push-m8 {
        left: 66.6666666667%
    }
    .row .col.offset-m9 {
        margin-left: 75%
    }
    .row .col.pull-m9 {
        right: 75%
    }
    .row .col.push-m9 {
        left: 75%
    }
    .row .col.offset-m10 {
        margin-left: 83.3333333333%
    }
    .row .col.pull-m10 {
        right: 83.3333333333%
    }
    .row .col.push-m10 {
        left: 83.3333333333%
    }
    .row .col.offset-m11 {
        margin-left: 91.6666666667%
    }
    .row .col.pull-m11 {
        right: 91.6666666667%
    }
    .row .col.push-m11 {
        left: 91.6666666667%
    }
    .row .col.offset-m12 {
        margin-left: 100%
    }
    .row .col.pull-m12 {
        right: 100%
    }
    .row .col.push-m12 {
        left: 100%
    }
}
@media only screen and (min-width: 993px) {
    .row .col.l1 {
        width: 8.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l2 {
        width: 16.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l3 {
        width: 25%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l4 {
        width: 33.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l5 {
        width: 41.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l6 {
        width: 50%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l7 {
        width: 58.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l8 {
        width: 66.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l9 {
        width: 75%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l10 {
        width: 83.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l11 {
        width: 91.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.l12 {
        width: 100%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.offset-l1 {
        margin-left: 8.3333333333%
    }
    .row .col.pull-l1 {
        right: 8.3333333333%
    }
    .row .col.push-l1 {
        left: 8.3333333333%
    }
    .row .col.offset-l2 {
        margin-left: 16.6666666667%
    }
    .row .col.pull-l2 {
        right: 16.6666666667%
    }
    .row .col.push-l2 {
        left: 16.6666666667%
    }
    .row .col.offset-l3 {
        margin-left: 25%
    }
    .row .col.pull-l3 {
        right: 25%
    }
    .row .col.push-l3 {
        left: 25%
    }
    .row .col.offset-l4 {
        margin-left: 33.3333333333%
    }
    .row .col.pull-l4 {
        right: 33.3333333333%
    }
    .row .col.push-l4 {
        left: 33.3333333333%
    }
    .row .col.offset-l5 {
        margin-left: 41.6666666667%
    }
    .row .col.pull-l5 {
        right: 41.6666666667%
    }
    .row .col.push-l5 {
        left: 41.6666666667%
    }
    .row .col.offset-l6 {
        margin-left: 50%
    }
    .row .col.pull-l6 {
        right: 50%
    }
    .row .col.push-l6 {
        left: 50%
    }
    .row .col.offset-l7 {
        margin-left: 58.3333333333%
    }
    .row .col.pull-l7 {
        right: 58.3333333333%
    }
    .row .col.push-l7 {
        left: 58.3333333333%
    }
    .row .col.offset-l8 {
        margin-left: 66.6666666667%
    }
    .row .col.pull-l8 {
        right: 66.6666666667%
    }
    .row .col.push-l8 {
        left: 66.6666666667%
    }
    .row .col.offset-l9 {
        margin-left: 75%
    }
    .row .col.pull-l9 {
        right: 75%
    }
    .row .col.push-l9 {
        left: 75%
    }
    .row .col.offset-l10 {
        margin-left: 83.3333333333%
    }
    .row .col.pull-l10 {
        right: 83.3333333333%
    }
    .row .col.push-l10 {
        left: 83.3333333333%
    }
    .row .col.offset-l11 {
        margin-left: 91.6666666667%
    }
    .row .col.pull-l11 {
        right: 91.6666666667%
    }
    .row .col.push-l11 {
        left: 91.6666666667%
    }
    .row .col.offset-l12 {
        margin-left: 100%
    }
    .row .col.pull-l12 {
        right: 100%
    }
    .row .col.push-l12 {
        left: 100%
    }
}
@media only screen and (min-width: 1201px) {
    .row .col.xl1 {
        width: 8.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl2 {
        width: 16.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl3 {
        width: 25%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl4 {
        width: 33.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl5 {
        width: 41.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl6 {
        width: 50%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl7 {
        width: 58.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl8 {
        width: 66.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl9 {
        width: 75%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl10 {
        width: 83.3333333333%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl11 {
        width: 91.6666666667%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.xl12 {
        width: 100%;
        margin-left: auto;
        left: auto;
        right: auto
    }
    .row .col.offset-xl1 {
        margin-left: 8.3333333333%
    }
    .row .col.pull-xl1 {
        right: 8.3333333333%
    }
    .row .col.push-xl1 {
        left: 8.3333333333%
    }
    .row .col.offset-xl2 {
        margin-left: 16.6666666667%
    }
    .row .col.pull-xl2 {
        right: 16.6666666667%
    }
    .row .col.push-xl2 {
        left: 16.6666666667%
    }
    .row .col.offset-xl3 {
        margin-left: 25%
    }
    .row .col.pull-xl3 {
        right: 25%
    }
    .row .col.push-xl3 {
        left: 25%
    }
    .row .col.offset-xl4 {
        margin-left: 33.3333333333%
    }
    .row .col.pull-xl4 {
        right: 33.3333333333%
    }
    .row .col.push-xl4 {
        left: 33.3333333333%
    }
    .row .col.offset-xl5 {
        margin-left: 41.6666666667%
    }
    .row .col.pull-xl5 {
        right: 41.6666666667%
    }
    .row .col.push-xl5 {
        left: 41.6666666667%
    }
    .row .col.offset-xl6 {
        margin-left: 50%
    }
    .row .col.pull-xl6 {
        right: 50%
    }
    .row .col.push-xl6 {
        left: 50%
    }
    .row .col.offset-xl7 {
        margin-left: 58.3333333333%
    }
    .row .col.pull-xl7 {
        right: 58.3333333333%
    }
    .row .col.push-xl7 {
        left: 58.3333333333%
    }
    .row .col.offset-xl8 {
        margin-left: 66.6666666667%
    }
    .row .col.pull-xl8 {
        right: 66.6666666667%
    }
    .row .col.push-xl8 {
        left: 66.6666666667%
    }
    .row .col.offset-xl9 {
        margin-left: 75%
    }
    .row .col.pull-xl9 {
        right: 75%
    }
    .row .col.push-xl9 {
        left: 75%
    }
    .row .col.offset-xl10 {
        margin-left: 83.3333333333%
    }
    .row .col.pull-xl10 {
        right: 83.3333333333%
    }
    .row .col.push-xl10 {
        left: 83.3333333333%
    }
    .row .col.offset-xl11 {
        margin-left: 91.6666666667%
    }
    .row .col.pull-xl11 {
        right: 91.6666666667%
    }
    .row .col.push-xl11 {
        left: 91.6666666667%
    }
    .row .col.offset-xl12 {
        margin-left: 100%
    }
    .row .col.pull-xl12 {
        right: 100%
    }
    .row .col.push-xl12 {
        left: 100%
    }
}
nav {
    color: #fff;
    background-color: #ee6e73;
    width: 100%;
    height: 56px;
    line-height: 56px
}
nav.nav-extended {
    height: auto
}
nav.nav-extended .nav-wrapper {
    min-height: 56px;
    height: auto
}
nav.nav-extended .nav-content {
    position: relative;
    line-height: normal
}
nav a {
    color: #fff
}
nav i,
nav [class^="mdi-"],
nav [class*="mdi-"],
nav i.material-icons {
    display: block;
    font-size: 24px;
    height: 56px;
    line-height: 56px
}
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
   border:1px solid black;

    border-collapse: collapse;

    border-radius: 25px;
}

th, td {
    text-align: center;
    padding: 16px;
}
td{
    border-radius:25px;
}

th:first-child, td:first-child {
    text-align: right;
}
table tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
}

table tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
}

/*tr:nth-child(even) {
    background-color: #f2f2f2
} */

.fa-check {
    color: green;
}

.fa-remove {
    color: red;
}
.box {
    float: right;
    width: 20%;
    border: 1px solid blue;
   border-radius : 25px;
    margin-left:50px;
    height: 140px;

}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.buttontable{
    background-color:red;
    color:white;
    border:none;
    border-radius:100px;
    font-size:25px;
    width:80%;
    height: 50px;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* 15% from the top and centered */
    padding: 20px;
    border: none;
    height:550px;
    border-radius: 50px;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    float:left;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.container-login{
    position: relative;
}

.loginbox{

    width: 590px;
    height:420px;
    top:50%;
    left:50%;
    position:absolute;
    transform: translate(-50%,-50%);
   /* border:3px solid black*/;
    margin-top:290px;

}
input[type=text], input[type=password] {

    outline: none;
    border: 1px solid #c1c1c1;
    background: white;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -o-border-radius: 25px;
    -ms-border-radius: 25px;
     padding: 14px 20px;
    margin-bottom:20px;
    width: 88%;
    font-size: 20px;
    color: #c1c1c1;
    text-align: right;
    font-family: 'Raleway', sans-serif;
}
textarea{
         outline: none;
    border: 1px solid #c1c1c1;
    background: white;
    border-radius: 25px;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    -o-border-radius: 25px;
    -ms-border-radius: 25px;
     padding: 14px 20px;
    margin-bottom:20px;
    width: 88%;
    font-size: 20px;
    color: #c1c1c1;
    text-align: right;
    font-family: 'Raleway', sans-serif;
    resize: none;
}

          .containerinput input[type=text],input[type=password]{
          padding-right: 50px;
          }
          .containerinput{
              position: relative;
          }
          .containerinput i{
              position:absolute;
              right: 10px;
              top: 12px;
              padding :9px 8px;
              color:#c1c1c1;
          }
          /*button {
            background:linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
                #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
    /*border-color:white;*/
            /*border-radius: 25px;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            -o-border-radius: 25px;
            -ms-border-radius: 25px;
            font-size:25px;
            cursor: pointer;
            width: 102%;
            }*/
            .ovalbutton button
            {
                background:white;
                font-size:25px;
                background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                padding: 14px 20px;
                margin: 8px 0;
                /*border: none;*/
                /*border-color:#67b9ad ! important;*/
                border : 2px solid #67b9ad;
                border-radius: 25px;
                -webkit-border-radius: 25px;
                -moz-border-radius: 25px;
                -o-border-radius: 25px;
                -ms-border-radius: 25px;
                cursor: pointer;
                width: 102%;
            }

            .one{
                margin: 30px;
            }

            .one a{
                text-align:left;
                color: #aaa;
                padding: 14px 20px;
                text-decoration: none;
                font-size:20px;
                /* margin: 20px 0;*/
                border: none;
                cursor: pointer;
                 width: 100%;
            }

            ::placeholder {
    color: #c1c1c1;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color: #c1c1c1;
}

::-ms-input-placeholder { /* Microsoft Edge */
   color: #c1c1c1;
}
#form-one{
    margin-top: -50px;
}
.add-button{
    background: #f3d02e;
    color:#ffffff;
    font-size: 25px;
    margin-top:30px;
    margin-left: 25px;
    border:none;
    border-radius: 25px;
    height:50px;
    width:250px;
    cursor:pointer;
}
.delete-button{
    background: #ef6a6b;
    color:#ffffff;
    font-size: 25px;
    margin-top:31px;
    margin-left: 45px;
    border:none;
    border-radius: 25px;
    height:50px;
    width:250px;
    cursor:pointer;
}
.send-button{
    background:linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
                #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
    /*border-color:white;*/
            border-radius: 25px;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            -o-border-radius: 25px;
            -ms-border-radius: 25px;
            font-size:25px;
            cursor: pointer;
            width: 95%;
}

</style>

</head>

<body>
   <nav>
        <div class="nav-wrapper teacher">
            <div class="row" style="position:relative;">
                <div class="bars" style="position:absolute;
                      left:96%;">
                    <i class="fas fa-bars" style="font-size:35px;"></i>
                </div>
                <div class="logo" dir="rtl" lang="ar" style="position:absolute;
                      left:88%; font-size:22px;">
                                                    تطبيق المعلم

                </div>
                 <div class="bell" style="width:50px;
                 height:50px; position:absolute;
                      left:9%;">
                      <i class="fas fa-bell" style="font-size:35px;"></i>
                 </div>
                 <div class="envelope" style="position:absolute;
                      left:5%;">
                     <i class="fas fa-envelope" style="font-size:35px;"></i>
                 </div>
                 <div class="dots" style="width:50px;
                 height:50px; position:absolute;
                      left:2%;">
                     <i class="fas fa-ellipsis-h" style="font-size:35px;"></i>
                 </div>



                <!-- Dropdown Structure -->


            </div>
        </div>
    </nav>

    <main>
        <div class="row">
        <div class="data-container">
        <div class="main-title" style="float:right;">
        <h1 lang="ar" dir="rtl"  style="text-align:right;
              background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; ">الرسائل الصادرة </h1>
        </div>
    <div class="main-buttons" style="float:left;" lang="ar" dir="rtl">
        <button class="delete-button" style="float:left;">حذف جميع الرسائل</button>
    </div>

    </div>

     <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <!--<p>Some text in the Modal..</p>-->
        <div class="model-main">
            <h3 lang="ar" dir="rtl"  style="text-align:center;
                            background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; ">انشاء رسالة جديدة</h3>
        </div>
        <div class="form-model" style="margin-left:35px;">
        <div>
            <label lang="ar" dir="rtl" style="float:right; margin-right:80px; margin-bottom:10px;">المرسل اليه</label>
            <input type="text" dir="rtl" lang="ar" placeholder="" name="reciver" required>
        </div>
          <div>
              <label lang="ar" dir="rtl" style="float:right; margin-right:80px; margin-bottom:10px;">نوع الرسالة </label>
              <select style="width:95%; height:58px; border-radius:25px; font-size:20px; margin-bottom:20px;"  lang="ar" dir="rtl">
                <option >رسالة نصية</option>
                <option >رسالة نصية</option>
                <option >رسالة نصية</option>
            </select>

          </div>
          <div>
            <label lang="ar" dir="rtl" style="float:right; margin-right:80px; margin-bottom:10px;">نص الرسالة</label>
            <textarea dir="rtl" lang="ar" name="message" required></textarea>

        </div>
        <div>
            <button class="send-button" lang="ar" dir="rtl">
                  إرسال
            </button>
        </div>
        </div>
    </div>

</div>
<div class="inbox-message" style="padding-top:110px;">




       <div class="all" id="myBtn" style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 98%; height:40px; border-radius:25px; margin-left: 37px; margin-bottom: 10px;">
           <div style="display:inline-block; float:right;">

               <i class="fas fa-user-circle" style="float:right; margin-right: 30px; font-size:25px; margin-top:8px;"></i>  <span style="float:left; margin-right:15px; font-size:20px;">تقرير-الطالب-زياد-رجب-عبدالله .pdf</span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px;">
               12:51 / 2018-07-16
           </div>
       </div>
       <div class="all"   style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 98%; height:40px; border-radius:25px; margin-left: 37px; margin-bottom: 10px;">
           <div style="display:inline-block; float:right;">
               <i class="fas fa-user-circle" style="float:right; margin-right: 30px; font-size:25px; margin-top:8px;"></i>  <span style="float:left; margin-right:15px; font-size:20px;">شكرا</span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px;">
               12:51 / 2018-07-16
           </div>
       </div>
       <div class="all" style="display:block; border:none; cursor:pointer; background:#f2f2f2; color:#939393; width: 98%; height:40px; border-radius:25px; margin-left: 37px; margin-bottom: 10px;">
           <div style="display:inline-block; float:right;">
               <i class="fas fa-user-circle" style="float:right; margin-right: 30px; font-size:25px; margin-top:8px;"></i>  <span style="float:left; margin-right:15px; font-size:20px;">لا عليك هذا واجبنا</span>
           </div>
           <div style="display:inline-block; float:left; margin-left:20px;">
               12:51 / 2018-07-16
           </div>
       </div>









    </div>
    </main>

</body>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</html>
