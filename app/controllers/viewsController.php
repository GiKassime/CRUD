<?php 
    namespace app\controllers;
    use app\models\viewsModels;

    class viewsController extends viewsModels{
        public function obterJanelasControlador($janela){

            if ($janela !="" ) {
                $resposta=$this->obterJanelasModelo($janela);
            } else {
                $resposta="login";
            }
            return $resposta;
            
        }
    }



?>