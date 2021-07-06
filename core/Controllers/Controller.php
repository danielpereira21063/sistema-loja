<?php

class Controller {
    public static function view($structs, $data = null) {
        if(!is_array($structs)) {
            throw new \Exception('Coleção de estruturas inválidas');
        }
        
        if(!empty($data) && is_array($data)) {
            extract($data);
        }

        foreach($structs as $struct) {
            include("../core/views/$struct.php");
        }
    }

    public function notFount404() {
        
    }
}