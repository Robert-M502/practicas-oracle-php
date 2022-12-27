<?php

class Conexion
{
    private $db = 'oci:dbname=localhost/orcl';
    private $user = 'db_project';
    private $pass = 'admin';

    public function Conectar()
    {
        try {
            $base = new PDO($this->db, $this->user, $this->pass);
            if ($base) {
                echo "Conexion exitosa PHP y Oracle";
                return $base;
            }
        } catch (Exception $e) {
            echo "Error de conexion: " . $e->getMessage();
        }
    }
}



/* //Conexion simple
$conn = oci_connect('db_project', 'admin', 'localhost/orcl');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
} */

/* //Conexion pdo
$base = new PDO('oci:dbname=localhost/orcl', 'db_project', 'admin');
 */