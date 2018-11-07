<!DOCTYPE html>
<html>
<head>
	<title>Admin Portal | Manage Posts</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h3")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
 
<script>
    
    $(function () {
    $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    });
});
</script>

 <script type="text/javascript">
            $(document).ready(function() {
                CKEDITOR.replace( 'editor2');
                CKEDITOR.replace( 'ckeditor',{
                        skin: "kama"
                });

            });


        </script>
 
</head>
<body>
</body>