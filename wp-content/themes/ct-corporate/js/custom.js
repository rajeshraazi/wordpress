/**
 * Custom file to add and update the functions.
 */
 
 /**
  * Scroll event to get the header part sticky
  * @dependency on 'sticky' css class.
  */

    window.onscroll = function() {myFunction()};
        var navbar = document.getElementById("masthead");
        var sticky = navbar.offsetTop;
        
        function myFunction() {
          if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky")
          } else if(window.pageYOffset == sticky){
            navbar.classList.remove("sticky");
          }
        }
