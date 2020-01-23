// Hide submenus

$('#body-row .collapse').collapse('hide'); 

// Collapse/Expand icon
//$('#collapse-icon').addClass('fa-angle-double-left'); 
$('#collapse-icon').addClass('fa-times'); 

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
   SidebarCollapse();
});

/*$('.sm11').click(function(event) {
	//alert(22);
   //SidebarCollapse22();
   //event.target.childNodes[0].toggleClass('subicon');
   $('#sb1').toggleClass('subicon subicon_d');
   //$(this).toggleClass('subicon_d');
});*/

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('subicon');
    //$('.submenu-icon').toggleClass('subicon_d');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');
    
    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
    
    // Collapse/Expand icon
    //$('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
    $('#collapse-icon').toggleClass('fa-bars fa-times');
}

 /*function SidebarCollapse22 () {
   $('.submenu-icon').toggleClass('subicon_d');
 }
*/