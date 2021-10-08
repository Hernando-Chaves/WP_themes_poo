<?php get_header() ?>

<?php  


trait Singleton
{
    public static function get_instance()
    {
        static $instance = [];
        $called_class = get_called_class();
        
        if(!isset($instance[$called_class])){
            echo "Desde Singleton Trait <br>";
            $instance[$called_class] = new $called_class;
        }

        return $instance[$called_class];
    }
}




?>


<div class="content">
    

    
 
</div>

<?php get_footer() ?>





