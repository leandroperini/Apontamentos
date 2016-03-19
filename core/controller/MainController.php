<?php

/**
 * Description of MainController
 *
 * @author Leandro Perini
 */

class MainController extends AppController {

    public function index($params) {
        echo $this->repeatDeuCerto();
        echo "estou executando a rota:" . URLPATH;
    }

    public function repeatDeuCerto() {
        $return = '';
        $row    = 0;
        while ($row < 5) {
            $return .= 'opa deu certo<br>';
            $row++;
        }
        return $return;
    }

}
