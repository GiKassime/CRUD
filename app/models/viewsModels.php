<?php 
    namespace app\models;

    class viewsModels{
        protected function obterJanelasModelo($janela){
            $lista=["dashboard"];
            
            if(in_array($janela,$lista)){
                if (is_file("./app/views/content/".$janela."-view.php")) {
                    $conteudo ="./app/views/content/".$janela."-view.php";
                } else {
                    $conteudo="404";

                }
                
            }elseif($janela =="login" || $janela =="index"){
                $conteudo = "login";
            }else{
                $conteudo = "404";
            }

        }
    }
    
?>