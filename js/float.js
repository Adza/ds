function floating() {
       $('.balon').animate({top:'+=20'}, 1000);
       $('.balon').animate({top:'-=20'}, 1000, floating);
   }

   function sunce() {
          $('.sunce').animate({top:'+=10'}, 1000);
          $('.sunce').animate({top:'-=10'}, 1000, sunce);
      }

      function oblak() {
             $('.oblak').animate({right:'+=20'}, 1000);
             $('.oblak').animate({right:'-=20'}, 1000, oblak);
         }



$(document).ready(function(){
  $( ".skew1" ).animate({
    left: "+=150",
    top: "+=150"
  }, 800, function() {
  });

  $( ".skew2" ).animate({
    left: "-=150",
    top: "-=150"
  }, 800, function() {
  });

  $( "#skew3" ).animate({
    left: "+=150",
    top: "+=150"
  }, 800, function() {
  });

  $( "#skew4" ).animate({
    left: "-=150",
    top: "+=150"
  }, 800, function() {
  });

  $( "#skew5" ).animate({
    left: "+=200",
    top: "-=200"
  }, 800, function() {
  });

  $( "#skew6" ).animate({
    left: "+=200",
    top: "-=150"
  }, 800, function() {
  });

  $( "#skew7" ).animate({
    left: "-=150",
    top: "+=150"
  }, 800, function() {
  });

$( "#skew9" ).animate({
    left: "+=150",
    top: "-=150"
  }, 800, function() {
  });

 $('.balon').animate({
    top: "-=320"
  }, 1200, function() {
  });

  floating();
  sunce();
  oblak();

});

