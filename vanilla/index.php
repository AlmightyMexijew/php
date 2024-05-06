<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <h1>My first PHP page</h1>
        <?php
        echo "Hello World!";
        #this is our first echo/write to page :)
        //And this is our second comment
        /*Because we can comment in all 3 of these methods but only this one is multi-line*/
        $varone = "Hello";
        $vartwo = "World!";
        echo $varone;
        //This seems to achieve little.
        ?>
        <div id="test1">
            <?php
            //test of var adds
            echo $varone."".$vartwo;
            //vardump /typing stuff
            echo var_dump($varone);
            ?>
        </div>
    </body>
</html>