document.addEventListener("DOMContentLoaded", function(){
    document.querySelectorAll('.sidebar .nav-link').forEach(function(element){
      
      element.addEventListener('click', function (e) {
  
        let nextEl = element.nextElementSibling;
        let parentEl  = element.parentElement;	
          if(nextEl) {
              e.preventDefault();	
              let mycollapse = new bootstrap.Collapse(nextEl);
              
              if(nextEl.classList.contains('showi')){
                  $(".chevron_change").addClass('fa-chevron-right').removeClass('fa-chevron-down');
                  $(".submenu").removeClass('showi');
                  mycollapse.hide();

              } else {
                  $(".chevron_change").addClass('fa-chevron-down').removeClass('fa-chevron-right');
                  $(".submenu").addClass('showi');
                  mycollapse.show();
                  // find other submenus with class=show

                  var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                  // if it exists, then close all of them
                  if(opened_submenu){
                    new bootstrap.Collapse(opened_submenu);
                  }
              }
          }
      }); // addEventListener
    }) // forEach
  }); 