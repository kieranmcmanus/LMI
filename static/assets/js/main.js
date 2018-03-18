$(function() {

  // Cache the window object
  var $window = $(window);

  // Parallax background effect
  $('section[data-type="background"]').each(function() {

    var $bgobj = $(this); //assigning the object

    $(window).scroll(function() {

      //scroll the background at var spearhead
      //the yPos is a negative value because we're scrolling it UP!

      var yPos = -($window.scrollTop() / $bgobj.data('speed'));

      //Put together our final background position
      var coords = '50% '+ yPos + 'px';

      //Move the background
      $bgobj.css({ backgroundPosition: coords });

    }); //end window scroll

  });
});


$(window).on('load resize', function() {
  if ($(window).width() < 768) {
    document.getElementById('logo-img').src = "assets/img/LMI-logo.png";
    $('#social').hide();
  } else if ($(window).width() > 768) {
    document.getElementById('logo-img').src = "assets/img/LMI-logo_wTitle.png";
    $('#social').show();
  }
});

// if ($(window).width() < 768) {
//   document.getElementById('logo-img').src = "assets/img/LMI-logo.png";
//   $('#social').hide();
// } else if ($(window).width() > 768) {
//   document.getElementById('logo-img').src = "assets/img/LMI-logo_wTitle.png";
//   $('#social').show();
// }
