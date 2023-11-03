<?php
    class Router
    {
        private $pages = array();

        function addRoute($url, $path){
            $this->pages[$url] = $path;
        }

        function route($url){   
            $path = $this->pages[$url];
            $file_dir = "C:/OSPanel/domains/DEALFLOW.com/pages/".$path;

            if(file_exists($file_dir)){
                require $file_dir;
            }
        }
    }    
 ?>
