<?php 

class html {
    
    function header($title) { ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?php print $title?></title>
        <meta name="author" content="Eli Bressert">
        <link rel= "stylesheet" type="text/css" href= "new_style.css" media="screen"/>
        <!-- Date: 2009-02-28 -->
    </head>

    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>

    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-7729954-1");
            pageTracker._trackPageview();
        } catch(err) {  
        }
    </script>

    <body>
    
        <!-- The "holder" is used as a container for all the content on the website. 
        This is how all the elements are positioned center-wise. -->
        <div id="holder">
    
<?php
    } 
    
    function footer() { ?>
        
        </div>
    </body>
</html>
        
<?php
    }
}
?>