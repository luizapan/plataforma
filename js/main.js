// menu smooth scroll
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("div#navbar > ul > li > a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});


// form script
$(document).ready(function() {
  $('#myform').submit(function() {
    var abort = false;
    $("div.error").remove();
    $(':input[required]').each(function() {
      if ($(this).val()==='') {
        $(this).after('<div class="error">Opa! Preencha o campo indicado.</div>');
        abort = true;
      }
    }); //go through each required value
    if (abort) { return false; } else { return true; }
  }); //on submit
}); //ready

$('input[placeholder]').blur(function() {
  $("div.error").remove();
  var myPattern = $(this).attr('pattern');
  var myPlaceholder = $(this).attr('placeholder');
  var isValid = $(this).val().search(myPattern) >= 0;

  if (!isValid) {
    $(this).focus();
    $(this).after('<div class="error">Ops! Dados não correpondem ao padrão de ' + myPlaceholder + '</div>');
  }
});