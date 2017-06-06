/* Contact Us */
$('.address').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    if ( $(this).hasClass('type-contact') )
    {
        $("#type").val("General Inquiry");
    }
    else if ( $(this).hasClass('type-demo') )
    {
        $("#type").val("Demo Request");
    }
    else if ( $(this).hasClass('type-support') )
    {
        $("#type").val("Technical Support");
    }
});