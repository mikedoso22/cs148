<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets the current page to not be a link. Repeat this if block for
        //  each menu item 
        if ($path_parts['filename'] == "index") {
            print '<li class="activePage">Home</li>';
        } else {
            print '<li><a href="index.php">Home</a></li>';
        }
        
        if ($path_parts['filename'] == "tables") {
            print '<li class="activePage">Display Tables</li>';
        } else {
            print '<li><a href="tables.php">Display Tables</a></li>';
        }
                
        if ($path_parts['filename'] == "select") {
            print '<li class="activePage">Select</li>';
        } else {
            print '<li><a href="select.php">Select</a></li>';
        }
        
        if ($path_parts['filename'] == "q01") {
            print '<li class="activePage">Q01</li>';
        } else {
            print '<li><a href="q01.php">Q01</a></li>';
        }
        
        if ($path_parts['filename'] == "q02") {
            print '<li class="activePage">Q02</li>';
        } else {
            print '<li><a href="q02.php">Q02</a></li>';
        }
        
        if ($path_parts['filename'] == "q03") {
            print '<li class="activePage">Q03</li>';
        } else {
            print '<li><a href="q03.php">Q03</a></li>';
        }
        
        if ($path_parts['filename'] == "q04") {
            print '<li class="activePage">Q04</li>';
        } else {
            print '<li><a href="q04.php">Q04</a></li>';
        }
        
        if ($path_parts['filename'] == "q05") {
            print '<li class="activePage">Q05</li>';
        } else {
            print '<li><a href="q05.php">Q05</a></li>';
        }
        
        if ($path_parts['filename'] == "q06") {
            print '<li class="activePage">Q06</li>';
        } else {
            print '<li><a href="q06.php">Q06</a></li>';
        }
        
        if ($path_parts['filename'] == "q07") {
            print '<li class="activePage">Q07</li>';
        } else {
            print '<li><a href="q07.php">Q07</a></li>';
        }
        
        if ($path_parts['filename'] == "q08") {
            print '<li class="activePage">Q08</li>';
        } else {
            print '<li><a href="q08.php">Q08</a></li>';
        }
        
        if ($path_parts['filename'] == "q09") {
            print '<li class="activePage">Q09</li>';
        } else {
            print '<li><a href="q09.php">Q09</a></li>';
        }
        
        if ($path_parts['filename'] == "q10") {
            print '<li class="activePage">Q10</li>';
        } else {
            print '<li><a href="q10.php">Q10</a></li>';
        }
        
        /*if ($path_parts['filename'] == "populate-table.php") {
            print '<li class="activePage">Populate Tables</li>';
        } else {
            print '<li><a href="populate-table.php">Populate Tables</a></li>';
        }*/
        
        ?>
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->

