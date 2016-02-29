<!DOCTYPE html>

<html>

<head>
    <title>Misc - some sample demos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="js/libs/easings.js"></script>
    <script src="js/mouse.js"></script>
</head>

<body>
<div id="wrapper">
    <header><h1>Some Sample Demos</h1></header>
    <div id="mouseMove" class="demo">
        <p>Move your cursor over this text.</p>
    </div>
    <div class="clearFix">
        <div id="fadeOut" class="demo">
            <button id="fadeButton">Click to activate fading</button>
            <div id="fadeText" class="demo">
                <p>If you click the button, this text will fade out and then back in again.</p>
            </div>
        </div>

        <div id="mouseSlide" class="demo">
            <p id="firstParagraph">Move your cursor over this text.</p>
            <p id="secondParagraph">If everything worked as intended, you should be able to see this now. And it'll stay
                visible
                for a few seconds before it slides up again. Here I am using the jQuery slide methods and the mouseenter
                event which makes it possible to slide
                elements up and down. Rather nifty, don't you think?</p>
        </div>
    </div>

    <div id="animation" class="demo">
        <button id="animateButton">Animate!</button>
        <div id="animatedBox"></div>
    </div>


    <footer>
        Demo page made by <a href="http://karnadesign.se/">KarnaDesign</a> 2016.
    </footer>
</div>

</body>

</html>
