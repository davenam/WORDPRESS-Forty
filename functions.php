<?php 
    

    function register_my_menu() {
    
        register_nav_menu( 'header-menu', __('Menu Głowne'));           // pkt 10         // __()   pozwalaja na przetlumaczenie tego elementu na dowolny jezyk w wordpress

    }  add_action('init', 'register_my_menu');


    function contact_form_widget_init() {                           // pkt 11   contact form
        
        register_sidebar( array(
            
            'name'      => __('Widget w stopce'),
            'id'      => 'footer_widget',
            'before_widget'      => '<div>',
            'after_widget'      => '</div>',
            'before_title'      => '<h2>',
            'after_title'      => '</h2>',
        
        ));
        
            
    } add_action('widgets_init', 'contact_form_widget_init');




?> 




