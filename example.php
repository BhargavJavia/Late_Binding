<?php
    class a
    {
        public static $name ="Bhargav";

        public static function author()
        {
            return "Author name is: " .self::$name;
        }

        public static function getauthor()
        {
            echo static::author();
        }
    }

    class b extends a
    {
        public static function author()
        {
            echo "The author name are: " .self::$name."And Het";
        }
    }

    a::getauthor();

    b::getauthor();
?>