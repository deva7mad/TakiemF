<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->

    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="stylenew.css" media="screen,projection" />
    <link rel="stylesheet" href="style.css" />



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

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
    width: 97%;
    border: 1px solid #f2f2f2;
    border-radius: 25px;
	margin-left:50px;
}

th, td {
    text-align: center;
    padding: 6px;
    font-size:14px;
    color:#929292;
     border: 1px solid #f2f2f2;
}

th:first-child, td:first-child {
    text-align: right;
}

tr:nth-child(even) {
    background-color: #fafafa;
}
table tr:first-child th:first-child {
    border-top-left-radius: 6px;
}

/* top-right border-radius */
table tr:first-child th:last-child {
    border-top-right-radius: 6px;
}

/* bottom-left border-radius */
table tr:last-child td:first-child {
    border-bottom-left-radius: 6px;
}

/* bottom-right border-radius */
table tr:last-child td:last-child {
    border-bottom-right-radius: 6px;
}

.fa-check {
    color: green;
}

.fa-remove {
    color: red;
}
.box {
    float: right;
    width: 20%;
    border: 2px solid #f2f2f2;
   border-radius : 25px;
    margin-left:50px;
    height: 100px;

}
 .clearfix{
    margin-top:35px;
    margin-right:-45px;
 }

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.buttontable{
    background-color: #ef6a6b;
    color: white;
    border: none;
    border-radius: 100px;
    font-size: 18px;
    width: 80%;
    height: 35px;
}
.side-modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 99; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content-side {
    background-color: #fefefe;
   margin: 0 ; /* 15% from the top and centered */


    border: 1px solid #888;
    width: 19%;
    height:auto;
     /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
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
.accordion {
    /*background-color: #eee;
    color: #444;*/
    background:#ffffff;
    color: #929292;
    cursor: pointer;
   /* padding: 18px;*/
    width: 100%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
.accordion1 {
    /*background-color: #eee;
    color: #444;*/
    background:#ffffff;
    color: #929292;
    cursor: pointer;
   /* padding: 18px;*/
    width: 100%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
.accordion2 {
    /*background-color: #eee;
    color: #444;*/
    background:#e4f3f0;
    color: #4ea69a;
    cursor: pointer;
   /* padding: 18px;*/
    width: 100%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
	margin-left:50px;
	border-radius:25px;
	height:40px;
	margin-bottom:6px;
}
.accordion:hover {
    /*background-color: #eee;
    color: #444;*/
    background:linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
                #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
    color: white;
    cursor: pointer;
   /* padding: 18px;*/
    width: 100%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
.accordion1:hover {
    /*background-color: #eee;
    color: #444;*/
    background:linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
                #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
    color: white;
    cursor: pointer;
   /* padding: 18px;*/
    width: 100%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}
/*.accordion2:hover {
    /*background-color: #eee;
    color: #444;*/
    /*background:linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
                #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
    color: white;
    cursor: pointer;
   /* padding: 18px;*/
    /*width: 100%;
    border: none;
    text-align: right;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}*/


.active, .accordion:hover {
    background-color: #ccc;
}
/*.active, .accordion1:hover {
    background-color: #ccc;
}*/

.accordion:after {
    font-family: 'Font Awesome 5 Free';
    content:"\f104";
    color: white;
   /* font-weight: bold;*/
    visibility: visible;
    font-weight: 900;
    float: left;
    margin-left: 15px;
    margin-top:22px;
    font-size:20px;
}


.active:after {
    font-family: 'Font Awesome 5 Free';
    content: "\f107";

    font-weight: 900;
}
.accordion2:after {
    font-family: 'Font Awesome 5 Free';
    content:"\f0d7";
    color: #4ea69a;
   /* font-weight: bold;*/
    visibility: visible;
    font-weight: 900;
    float: left;
    margin-left: 25px;
    margin-top:10px;
    font-size:20px;
}
.active1:after {
    font-family: 'Font Awesome 5 Free';
    content: "\f0d8";

    font-weight: 900;
}

.panel-new {
    padding: 0 18px;

    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
.panel2 {
    padding: 0 18px;

    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
.side-link:hover{
    color:#5eaea3;
}
.new-tog{
    background:linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
                #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad) ;
    color: white;
    cursor: pointer;
}
.add-button {
    background: #f3d02e;
    color: #ffffff;
    font-size: 15px;
    margin-top: 25px;
    margin-left: 50px;
    margin-bottom: 20px;
    border: none;
    border-radius: 30px;
    height: 35px;
    width: 135px;
    cursor: pointer;
}
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
    border: 1px solid #888;
    width: 60%; /* Could be more or less, depending on screen size */
	border-radius:25px;
	height:auto;
}

/* The Close Button */
.close {
    color: #aaa;
    float: left;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.changebtn{
            background:linear-gradient(to right,#47928b,#47948a,#48948a,#49958b,#4a968c,#4a978d,#4f9c94,#529f95,#54a197,#56a399,#55a59a,#56a69b,#57a79c,#5aa79d,#59a99e,#5ca99f,#5baba0,#5dada2,#5eaea3,
                #5fafa4 , #60b0a5,#62b2a7,#63b3a8,#62b4a8,#65b5aa,#66b6ab,#67b9ad);
            color: white;
            padding: 8px 20px;
            margin: 8px 0;
            border: none;
    /*border-color:white;*/
            border-radius: 25px;
            -webkit-border-radius: 25px;
            -moz-border-radius: 25px;
            -o-border-radius: 25px;
            -ms-border-radius: 25px;
            font-size:18px;
            cursor: pointer;
            width: 102%;
            }
.school-span{
	display:inline-block;
	margin-top:10px;
	margin-right : 30px;
}


</style>

</head>

<body>
   <nav>
        <div class="nav-wrapper teacher">
            <div class="row" style="position:relative;">
                <div class="bars" style="position:absolute;left:96%;">
                    <div id="btnSide">
                        <i class="fas fa-bars" style="font-size:25px;"></i>
                    </div>
                </div>
                <div id="myModalSide" class="side-modal">

            <!-- Modal content -->
            <div class="modal-content-side" style="float:right; height:100%;">
                    <div style="background:#e4f3f0;">

                       <img src="side.png" width=100 height=100 style="margin-left: 80px; margin-top: 10px;" />


                    </div>
                    <div lang="ar" dir="rtl">
                    <a href="http://localhost/khassmy/Teacher/dash"><button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-home" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الرئيسية</span></button></a>

                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-user-circle" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الملف الشخصى</span></button>
                        <div class="panel">
                            <a class="side-link" href="<?php echo base_url('admin/Profile')?>" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
                            <a class="side-link" href="edit-school-info.php" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
                        </div>
                    </div>
                     <div lang="ar" dir="rtl">

                    <a href="notifications.php"><button id="btn2" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-bell" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">التنبيهات</span></button></a>

                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn3" class="accordion" lang="ar" dir="rtl"><i class="fas fa-envelope" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الرسائل</span></button>
                        <div class="panel">
                            <a class="side-link" href="message-inbox.php" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الواردة</a><br>
                            <a class="side-link" href="mesaage-outbox.php" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الصادرة </a> <br>
                            <a class="side-link" href="ready-message.php" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">الرسائل الجاهزة</a>
                        </div>
                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-table" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">جدول الحصص</span></button>

                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-users" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الفصول</span></button>
                        <div class="panel">
                            <a id="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
                        </div>
                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-calendar-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الخطط الاسبوعية</span></button>
                        <div class="panel">
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
                        </div>
                    </div>
                     <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-umbrella" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">الاجازات</span></button>
                        <div class="panel">
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
                        </div>
                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-star" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">التقييمات</span></button>
                        <div class="panel">
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
                        </div>
                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion" lang="ar" dir="rtl"><i class="fas fa-file-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">التقارير</span></button>
                        <div class="panel">
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right;  text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات الحساب</a><br>
                            <a class="side-link" href="#" style="color:#c8c8c8; float:right; text-decoration: none; cursor:pointer; margin-right:45px; font-size:14px;">بيانات المدرسة</a>
                        </div>
                    </div>
                    <div lang="ar" dir="rtl">
                    <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-share-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">انصح مدرس بالتطبيق</span></button>

                    </div>
                     <div lang="ar" dir="rtl">
                   <button id="btn1" class="accordion1" lang="ar" dir="rtl"><i class="fas fa-sign-out-alt" style="font-size:18px; margin-right: 25px;"></i><span style="margin-right:10px; font-size:16px;">تسجيل خروج</span></button>

                    </div>

            </div>

            </div>
                 <div class="logo" dir="rtl" lang="ar" style="position:absolute; left:89%;">
                            <img src="header-logo.png"  height="30" width="80" style="margin-top:6px;">

                  </div>

                   <div class="envelope" style="position:absolute;
                        left:5%;">
                       <i class="fas fa-envelope" style="font-size:25px;"></i>
                   </div>




                <!-- Dropdown Structure -->


            </div>
        </div>
    </nav>

    <main>

	<div class="row">
        <div class="data-container">
            <div class="t1" style="float:right;">
                <h1 lang="ar" dir="rtl"  style=" font-size:20px; text-align:right;background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
                    -webkit-background-clip: text;-webkit-text-fill-color: transparent; ">بيانات المدرسة</h1>
             </div>
             <div id="buttons" style="float:left;">
                 <button  id="myBtn0" class="add-button" style="float: right;">إنشاء مدرسة جديدة</button>

             </div>
             <div id="myModal0" class="modal">

              <!-- Modal content -->
             <div class="modal-content">
                  <span class="close">&times;</span>
                  <!--<p>Some text in the Modal..</p>-->
                  <div class="model-main" >
                      <h3 lang="ar" dir="rtl"  style="text-align:center;
                                      background: -webkit-linear-gradient(#47928b,#47948a,#48948a);
                 -webkit-background-clip: text;
                 -webkit-text-fill-color: transparent; ">إضافة فترة جديدة</h3>
                  </div>
                  <div class="form-model">

                  <?php
                       $attributes = array('class' => ' ' );
                         echo form_open_multipart('School/create', $attributes);
                       ?>

                    <div style="float:right;">
               <div>
                        <label lang="ar" dir="rtl" style="color:#8e8e8e; float:right; margin-right:50px; font-size:20px;">المحافظة</label>

                        <input type="text" dir="rtl" lang="ar"  name="school_government" style="border:1px solid  #f2f2f2;" required>
               </div>
                <br>
                <div>
                        <label lang="ar" dir="rtl" style="color:#8e8e8e; float:right; margin-right:50px;font-size:20px;">الإدارة التعليمية</label>
                        <input type="text" dir="rtl" lang="ar"  name="school_administration" style="border:1px solid  #f2f2f2;" required>
               </div>
                <br>
                <div>
                        <label lang="ar" dir="rtl" style="color:#8e8e8e; float:right; margin-right:50px;font-size:20px;;">المرحلة</label>
                        <input type="text" dir="rtl" lang="ar"  name="school_stage" style="border:1px solid  #f2f2f2;" required>
               </div>
                <br>
                <div>
                        <label lang="ar" dir="rtl" style="color:#8e8e8e; float:right; margin-right:50px;font-size:20px;">عدد الحصص اليومية</label>
                        <input type="text" dir="rtl" lang="ar"  name="school_no_classes" style="border:1px solid  #f2f2f2;" required>
               </div>
                <br>
              </div>
              <div style="float:left;">
                <div>
                        <label lang="ar" dir="rtl" style="color:#8e8e8e; float:right; margin-right:50px;font-size:20px;">قطاع التعليم</label>
                        <input type="text" dir="rtl" lang="ar"  name="school_sector" style="border:1px solid  #f2f2f2;" required>
               </div>
                <br>
                <div>
                        <label lang="ar" dir="rtl" style="color:#8e8e8e; float:right; margin-right:50px;font-size:20px;">نوع التعليم</label>
                        <input type="text" dir="rtl" lang="ar"  name="school_type" style="border:1px solid  #f2f2f2;" required>
               </div>
                <br>
                <div>
                        <label lang="ar" dir="rtl" style="color:#8e8e8e; float:right; margin-right:50px;font-size:20px;">اسم المدرسة</label>
                        <input type="text" dir="rtl" lang="ar"  name="school_name" style="border:1px solid  #f2f2f2;" required>
               </div>
                <br>
              </div>



                      <button type="submit" name="submit" lang="ar" dir="rtl" class="changebtn">
                            إضافة
                      </button>

          <?php echo form_close(); ?>
                  </div>

              </div>
             </div>
        </div >
        <br><br><br><br>
        <div class="panel-group" style="margin-left:60px;">
          <div class="panel panel-default">
            <div class="panel-heading" style="text-align:right; background-color:#e4f3f0 ! important; ">
              <a data-toggle="collapse" href="#collapse1" style="text-align:right; decoration:none; color:#4ea69a;"><h4 class="panel-title">
                <?php echo $school_name; ?>
              </h4></a>

            </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body">
                <div style="width:100%; height:50px;">

                  <div class="dropdown pull-right" dir="rtl">
                    <label>المحافظة</label>
                    <br>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" dir="rtl" style="border-color: black;background-color:white; color:black; width:340px;"><?php echo $school_government; ?>
                      <span class="caret" dir="rtl" style="color:black; margin-right:255px;"></span></button>
                        <ul class="dropdown-menu" dir="rtl">
                          <li><a href="#">المدينة المنورة</a></li>
                          <li><a href="#">جدة</a></li>
                          <li><a href="#">مكة المكرمة</a></li>
                        </ul>
                      </div>
                      <div class="dropdown pull-right" dir="rtl" style="margin-right:70px; ">
                        <label>قطاع التعليم</label>
                        <br>
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" dir="rtl" style="border-color: black;background-color:white; color:black;  width:340px;"><?php echo $school_sector; ?>
                          <span class="caret" dir="rtl" style="color:black; margin-right:260px;"></span></button>
                            <ul class="dropdown-menu" dir="rtl">
                              <li><a href="#">بنين</a></li>
                              <li><a href="#">بنات</a></li>

                            </ul>
                          </div>

                </div>
                <br>
                <div style="width:100%; height:50px;">

                  <div class="dropdown pull-right" dir="rtl">
                    <label>الإدارة التعليمية</label>
                    <br>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" dir="rtl" style="border-color: black;background-color:white; color:black;  width:340px;"><?php echo $school_administration; ?>
                      <span class="caret" dir="rtl" style="color:black; margin-right:70px;"></span></button>
                        <ul class="dropdown-menu" dir="rtl">
                          <li><a href="#">الادارة العامة للتعليم بمنطقة الرياض</a></li>
                          <li><a href="#">الادارة العامة للتعليم بمنطقة الرياض</a></li>
                          <li><a href="#">الادارة العامة للتعليم بمنطقة الرياض</a></li>

                        </ul>
                      </div>
                      <div class="dropdown pull-right" dir="rtl" style="margin-right:70px; ">
                        <label>نوع التعليم</label>
                        <br>
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" dir="rtl" style="border-color: black;background-color:white; color:black;  width:340px;"><?php echo $school_type; ?>
                          <span class="caret" dir="rtl" style="color:black; margin-right:260px;"></span></button>
                            <ul class="dropdown-menu" dir="rtl">
                              <li><a href="#">اهلى</a></li>
                              <li><a href="#">اهلى</a></li>
                              <li><a href="#">اهلى</a></li>


                            </ul>
                          </div>

                </div>
                <br>
                <div style="width:100%; height:50px;">

                  <div class="dropdown pull-right" dir="rtl">
                    <label>المرحلة</label>
                    <br>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" dir="rtl" style="border-color: black;background-color:white; color:black;  width:340px;"><?php echo $school_stage; ?>
                      <span class="caret" dir="rtl" style="color:black; margin-right:250px;"></span></button>
                        <ul class="dropdown-menu" dir="rtl">
                          <li><a href="#">ابتدائى</a></li>
                          <li><a href="#">اعدادى</a></li>
                          <li><a href="#">ثانوى</a></li>
                        </ul>
                      </div>
                      <div class="dropdown pull-right" dir="rtl" style="margin-right:70px; ">
                        <label>اسم المدرسة</label>
                        <br>
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" dir="rtl" style="border-color: black;background-color:white; color:black;  width:340px;"><?php echo $school_name; ?>
                          <span class="caret" dir="rtl" style="color:black; margin-right:125px;"></span></button>
                            <ul class="dropdown-menu" dir="rtl">
                              <li><a href="#">ابتدائية اجيال اليرموك الاهلية</a></li>
                              <li><a href="#">ابتدائية اجيال اليرموك الاهلية</a></li>
                              <li><a href="#">ابتدائية اجيال اليرموك الاهلية</a></li>

                            </ul>
                          </div>

                </div>
                <br>
                <div style="width:100%; height:50px;">

                  <div class="dropdown pull-right" dir="rtl">
                    <label>عدد الحصص اليومية</label>
                    <br>
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" dir="rtl"style="border-color: black;background-color:white; color:black;  width:340px;" >1
                      <span class="caret" dir="rtl"style="color:black; margin-right:275px;"></span></button>
                        <ul class="dropdown-menu" dir="rtl">
                          <li><a href="#">1</a></li>
                          <li><a href="#">1</a></li>
                          <li><a href="#">1</a></li>
                        </ul>
                      </div>


                </div>
                <br>
                <div style="height:150px;">
                  <button class="changebtn" type="submit" dir="rtl" lang="ar" align="left" style="width:15%; text-align:center;     margin-left: 975px;">حفظ التغييرات </button><button class="changebtn" type="submit" dir="rtl" lang="ar" align="left" style="width:15%; text-align:center;     margin-left: 975px;">حذف المدرسة  </button>

                </div>

              </div>

            </div>
          </div>
        </div>



    </div>

    </main>


</body>
<script>
// Get the modal
var modal11 = document.getElementById('myModal0');

// Get the button that opens the modal
var btn11 = document.getElementById("myBtn0");

// Get the <span> element that closes the modal
var span11 = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn11.onclick = function() {
    modal11.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span11.onclick = function() {
    modal11.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal11) {
        modal11.style.display = "none";
    }
}
</script>
 <script>
// Get the modal
var modal = document.getElementById('myModalSide');

// Get the button that opens the modal
var btn = document.getElementById("btnSide");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
 //   modal.style.display = "none";
//}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
      $("#btnSide").click(function(){
            $(".modal-content-side").fadeIn();
            });
    $("#btn1").click(function(){
        $( "#btn1" ).toggleClass('new-tog');
    });
     $("#btn3").click(function(){
        $( "#btn3" ).toggleClass('new-tog');
    });


});
</script>
</html>
