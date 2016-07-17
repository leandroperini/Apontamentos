
<?php

/**
 * Description of MainController
 */
class PermissionController extends AppController {

    public function index($param) {
        
        $this->page = 'permission/permission';
        
        $query = $this->db->execute("SELECT * FROM user");
        // Atribui os valores da conulta para passagem para a view
        $this->nomeUsuarios = $query;
    }
}