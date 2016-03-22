<?php

class Database {

    var $db_conf = [
        'apontamentos' => [
            'host' => '127.0.0.1',
            'user' => 'root',
            'pass' => '',
            'db'   => 'apontamentos',
        ],
        'sga'          => [
            'host' => '127.0.0.1',
            'user' => 'root',
            'pass' => '',
            'db'   => 'sga',
        ],
    ];

    /** 
      i corresponding variable has type integer
      d	corresponding variable has type double
      s	corresponding variable has type string
      b	corresponding variable is a blob and will be sent in packets
     */
    function execute($sql = null, array $params = [], $connectionConf = 'sga') {
        $return    = false;
        $types     = '';
        $bindParam = [];
        try {
            $connection = new mysqli($this->db_conf[$connectionConf]['host'], $this->db_conf[$connectionConf]['user'], $this->db_conf[$connectionConf]['pass'], $this->db_conf[$connectionConf]['db']);

            $stmt = $connection->prepare($sql);
            if (!empty(@$params['types']) && !empty(@$params['values'])) {
                foreach (@$params['types'] as $type) {
                    $types .= $type;
                }

                array_push($bindParam, $types);

                foreach (@$params['values'] as &$value) {
                    array_push($bindParam, $value);
                }

                call_user_func_array([$stmt, 'bind_param'], $this->refValues($bindParam));
            }
            $stmt->execute();
            $return = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $exc) {
            throw Exception;
        } finally {
            $connection->close();
            return $return;
        }
    }

    function refValues($arr) {
        $refs       = array();
        foreach ($arr as $key => $value)
            $refs[$key] = &$arr[$key];
        return $refs;
    }

}
