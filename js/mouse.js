
function changeColour()
{
    $("#mouseMove > p").mouseenter(function()
    {
        $(this).css("color", "red");
    }).mouseleave(function()
    {
        $(this).css("color", "black");
    });
}

function fadeText()
{
    $("#fadeButton").click(function()
    {
        $("#fadeText").fadeOut(2000, function()
        {
            $(this).fadeIn(2000);
        });
    });
}

function slideText()
{
    $("#firstParagraph").mouseenter(function()
    {
        $("#secondParagraph").slideDown(3000, function()
        {
            $(this).slideUp(10000);
        });
    });
}

function animateBox()
{
    $("#animateButton").click(function()
    {
       var animationWidth = $("#animation").width();
       $("#animatedBox").animate({left: animationWidth + "px"}, 3000, "easeOutBounce");
    });
}

$(document).ready(function()
{
    changeColour();
    fadeText();
    slideText();
    animateBox();
});