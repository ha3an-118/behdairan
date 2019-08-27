
jQuery(function($){
    var navbar;
    var sticky;

    $(document).ready(function(){
    navbar = document.getElementById("hafs");
    if(navbar != undefined){
        sticky = navbar.offsetTop;
    }
    $("#moveup").hide();
    
    });
    window.onscroll = function() {myFunction()};

    // Get the navbar

    // Get the offset position of the navbar

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        
    console.log(sticky);
        console.log(window.pageYOffset);
    $("#test").remove(); 
    if(window.pageYOffset>=sticky){
            $("#hafs").addClass("fixed-top");
            $("#moveup").show();
            $("#slidenave").show();
        } 
        else{
            $("#hafs").removeClass("fixed-top");
            $("#moveup").hide();
            $("#slidenave").hide();
        }
    }

    //this is part of navigation clapss
    $(document).ready(function(){
        $("#navbtn").click(function(e){
            e.stopPropagation();
            $("#sidenave").toggleClass("sideopen");
            $("#sidenave").toggleClass("sideclose");
            });
        $("#navbtn-onlist").click(function(e){
            e.stopPropagation();
            $("#sidenave").toggleClass("sideopen");
            $("#sidenave").toggleClass("sideclose");
            });

        });
    $(document).ready(function(){
        $(document.body).on('click',function(e){
            $("#sidenave").removeClass("sideopen").addClass("sideclose");
            }
            );
        
        });
    $(document).ready(function(){
        $("#sidenave").click(function(e){
            e.stopPropagation();
            });
        });
});