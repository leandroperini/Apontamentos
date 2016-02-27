<?php

class Database {

    var $db_conf = [
        'apontamentos' => [
            'host' => '127.0.0.1',
            'user' => 'root',
            'pass' => '',
            'db' => 'apontamentos',
        ],        
    ];

    function Database() {
        mysql_connect($this->host, $this->user, $this->pass) or die("erro na conexao com a base de dados");
        mysql_select_db($this->db) or die("banco de dados nao existe");
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
    }

    /**
     * 
     */
    function connect($host = null, $user = null, $pass = null, $db = null) {

        mysql_connect($host, $user, $pass) or die("erro na conexao com a base de dados");
        mysql_select_db($db) or die("banco de dados nao existe");
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
    }

    function reconect() {
        mysql_connect($this->host, $this->user, $this->pass) or die("erro na conexao com a base de dados");
        mysql_select_db($this->db) or die("banco de dados nao existe");
        mysql_query("SET NAMES 'utf8'");
        mysql_query('SET character_set_connection=utf8');
        mysql_query('SET character_set_client=utf8');
        mysql_query('SET character_set_results=utf8');
    }

    function close() {
        mysql_close();
    }

    /**
     * 
     */
    function conect_sqlserver() {
        mssql_connect($this->host_sqlserver, $this->user_sqlserver, $this->pass_sqlserver) or die("erro na conexao com a base de dados");
        mssql_select_db($this->db_sqlserver) or die("banco de dados nao existe");
    }

}

?>
