$(window).on('load resize', function() {
  if ($(window).width() < 991) {
    $('#social').hide();
    if ($(window).width() < 768) {
      document.getElementById('logo-img').src = stylesheet_directory+"/assets/img/LMI-logo.png";
    } else if ($(window).width() > 768) {
      document.getElementById('logo-img').src = stylesheet_directory+"/assets/img/LMI-logo_wTitle.png";
    }
  } else if ($(window).width() > 991) {
    $('#social').show();
  }
});


$(function() {

  $(window).on('load resize', function() {
    if ($(window).width() > 600) {
      console.log("Parallax");
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
    } else {
      console.log("No parallax");
      // Cache the window object
      var $window = $(window);

      // Parallax background effect
      $('section[data-type="background"]').each(function() {

        var $bgobj = $(this); //assigning the object

        $(window).scroll(function() {

          //scroll the background at var spearhead
          //the yPos is a negative value because we're scrolling it UP!

          var yPos = -($window.scrollTop() / $bgobj.data('0'));

          //Put together our final background position
          var coords = '50% '+ 0 + 'px';

          //Move the background
          $bgobj.css({ backgroundPosition: coords });

        }); //end window scroll

      });
    }
  });

});

var searchBox = document.getElementsByClassName('search-field');
var searchButton = document.getElementsByClassName('search-submit');
if (searchBox.length > 0) {
  searchBox[0].style="border-radius:4px";
}
if (searchButton.length > 0) {
  $(searchButton[0]).addClass('btn-danger btn-lg');
  $(searchButton[0]).style="padding: 1px 7px 2px important!;";
}
