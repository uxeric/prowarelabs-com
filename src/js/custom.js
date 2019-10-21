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

$( document ).ready(function() {
  let contact_type = getParameter('type');

  if ( contact_type === 'contact' )
  {
      $("#type").val("General Inquiry");
      $('.type-contact').addClass('active');
    }
    else if ( contact_type === 'demo' )
    {
      $("#type").val("Demo Request");
      $('.type-demo').addClass('active');
    }
    else if ( contact_type === 'support' )
    {
      $("#type").val("Technical Support");
      $('.type-support').addClass('active');
  }
});

function getParameter(parameterName) {
// https://stackoverflow.com/questions/5448545/how-to-retrieve-get-parameters-from-javascript/

var result = null,
    tmp = [];
location.search
    .substr(1)
    .split("&")
    .forEach(function (item) {
      tmp = item.split("=");
      if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
    });
return result;
}