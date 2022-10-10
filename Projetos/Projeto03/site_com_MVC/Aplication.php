<?php

    class Aplication{

        const DEFAUL = "Home";

        public function run(){
            if(isset($_GET["url"])){ 
                $url = explode("/", $_GET["url"]);
                $class = "controllers\\".ucfirst($url[0])."Controller";
            }else{
                $url[0] = self::DEFAUL;
                $class = "controllers\\".ucfirst(self::DEFAUL)."Controller";
            }

            $view = "views\\".ucfirst($url[0])."View";
            $model = "models\\".ucfirst($url[0])."Model";

            $controller = new $class(new $view, new $model);
            $controller->index();

        }
    } 

?>