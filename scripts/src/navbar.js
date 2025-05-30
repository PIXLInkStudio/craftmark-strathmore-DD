$(document).ready(function() {

    // Community Switch Menu 
   $("#menu-button").on("click", function () {
    $(".animated-icon3").toggleClass("open");
   });

    // Floorplan Dropdown Toggle: 
    $('.dropdown-toggle').click(function() {
        // Toggle the 'active' class on the dropdown-toggle element
        $(this).toggleClass('active');
        // Toggle the 'show' class on the associated dropdown menu
        $(this).next('.dropdown-menu').toggleClass('show');
        // Remove active from other nav-link classes. 
        $('.main-nav .nav-link').removeClass('active');
        $('.main-nav .dropdown-item').removeClass('active');
    });

    // Optionally, close the dropdown if clicking outside of it
    $(document).click(function(event) {
        var $target = $(event.target);
        if(!$target.closest('.nav-item.dropdown').length) {
            $('.dropdown-menu').removeClass('show');
        }
    });

    // Close the dropdown menu when a dropdown-item is clicked
    $('.dropdown-item').click(function() {
        // Remove the 'show' class from all dropdown menus
        $(this).closest('.dropdown-menu').removeClass('show');
        // Optionally, you can also remove the 'active' class from the dropdown-toggle
        $(this).closest('.dropdown-menu').prev('.dropdown-toggle').removeClass('active');
    });
});
