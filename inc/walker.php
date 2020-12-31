<?php 
/* Collection of Walker Classes */
    /*
        When we run -> wp_nav_menu()
        
        Wordpress generates: 

        <div class="menu-container>
            <ul> //start_lvl()
                <li><a>  //start_el()
                    Link
                </a></li> //end_el()
                ETC.
                <li><a>Link</a></li>
                <li><a>Link</a></li>
                <li><a>Link</a></li>
            <ul> // end_lvl
        </div>
    */    

    // class Tree_Nav_Primary extends Walker_Nav_menu {
    //     function start_lvl( &$output, $depth ) { //ul
    //         $indent = str_repeat('\t',$depth);
    //         $submenu = ($depth > 0) 'sub-menu' : '';
    //         $output .= "\n$indent<ul class=dropdown-menu$submenu depth_$depth\">\n";
    //     }

    //     function start_el() {

    //     }

    //     function end_el() {

    //     }

    //     function end_lvl() {

    //     }
    // }


?>