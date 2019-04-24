<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="UTF-8">
    <link href="http://khassmy.com/static/site_scripts/css/animate.css" rel="stylesheet" type="text/css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $('.card').click(function(){
    $(this).toggleClass('flipped');
});
});
</script>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700);

body {
    font-family: 'Roboto Slab', serif;
    font-weight: 300;
    font-size: 16px;
    line-height: 1.4em;
    color: #333;
    background: #eee;
}

input,
button {
    font-family: 'Roboto Slab', serif;
    font-weight: 300;
    font-size: 16px;
    border: 0;
    padding: 3px 5px;
    border-radius: 3px;
}

h1 {
    margin: 0.5em 0 1em 0;
    font-size: 1.8em;
    font-weight: 700;
    color: #096AA3;
}

h2, h3 {
    font-weight: bold;
}

p {
    margin-bottom: 1em;
}

.animation {
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}

.wrapper {
    width: 80%;
    padding: 4%;
    margin: 20px auto;
    background: #fff;
}

.wrapper.cards {
    background: 0;
    width: 88%;
    padding: 20px 0 0 0;
}

.container {
    position: relative;
    float: left;
    width: 48%;
    height: 260px;
    margin: 10px 0 10px 4%;
    background: #fff;


    /* Set the depth of the elements */
    -webkit-perspective: 800px;
    -moz-perspective: 800px;
    -o-perspective: 800px;
    perspective: 800px;
}

.container:first-child {
    margin-left: 0;
}

.card {
    width: 100%;
    height: 100%;
    position: absolute;
    cursor: pointer;


    /* Set the transition effects */
    -webkit-transition: -webkit-transform 0.4s;
    -moz-transition: -moz-transform 0.4s;
    -o-transition: -o-transform 0.4s;
    transition: transform 0.4s;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    -o-transform-style: preserve-3d;
    transform-style: preserve-3d;
}

.card.flipped {
    -webkit-transform: rotateX( 180deg );
    -moz-transform: rotateX( 180deg );
    -o-transform: rotateX( 180deg );
    transform: rotateX( 180deg );
}

.card .front,
.card .back {
    display: block;
    height: 100%;
    width: 100%;
    line-height: 260px;
    color: white;
    text-align: center;
    font-size: 4em;
    position: absolute;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -o-backface-visibility: hidden;
    backface-visibility: hidden;

    box-shadow: 3px 5px 20px 2px rgba(0, 0, 0, 0.25);
}

.card .back {
    width: 94%;
    padding-left: 3%;
    padding-right: 3%;
    font-size: 16px;
    text-align: left;
    line-height: 25px;

}

.formItem:first-child {
    margin-top: 20px;
}

.card .back label {
    display: inline-block;
    width: 70px;
    text-align: left;
}

.card .front {
    background: #222222;
}

.card .back {
    background: #444444;
    -webkit-transform: rotateX( 180deg );
    -moz-transform: rotateX( 180deg );
    -o-transform: rotateX( 180deg );
    transform: rotateX( 180deg );
}

.container:first-child .card .front {
    background:#efa5a9;
}

.container:first-child .card .back {
    background: #efa5a9;
}

.cardTitle {
    font-size: 1.4em;
    line-height: 1.2em;
    margin: 0;
}

.content {
    padding: 4%;
    font-weight: 100;
    text-align: left;
}

button.btnSend {
    display: inline-block;
    min-width: 100px;
    padding: 3px 5px;
    margin-top: 10px;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    color: #03446A;
    background: #fff;
    border: 0;
    border-radius: 3;
}
<script src="https://aj
</style>
</head>
<body>
<!--<h1 style="color:#cc00c6;
    animation-name: flipInY;">Hello Aia :) </h1>-->
    <div>
        <div class="container">
        <div class="card">
            <div class="front"><h2>Click</h2></div>
            <div class="back">
                <div class="content">
                    <!--<h3 class="cardTitle">Content here</h3>-->
                    <p style="color:#7f9fd0; text-align:center; margin-top: 90px; font-size:30px; font-weight:500;">Hello Aia :)</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>