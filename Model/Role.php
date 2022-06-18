<?php
namespace officeApp\Model;

use officeApp\Database\DbHandler;
include('Database/DbHandler.php');

class Role {
    private $id;
    private $role_name;
    public $dbHandler;
    private $results = [];
    private $table;

    public function __construct($id="", $role_name="")
    {
        $this->id = $id;
        $this->role_name = $role_name;
        $this->dbHandler = new DbHandler();
        $this->table = "role";
    }

    public function get_all(){
        $sqlQuery = "SELECT DISTINCT `id`, `role_name` FROM " .$this->table. " WHERE 1";
        $results = $this->dbHandler->getresults($sqlQuery);
        return $results;
    }

    public function check_if_id_exists($id)
    {
        $table = $this->table;
        $results = $this->dbHandler->check_id($id, $table);
        return $results;
    }

    public function get_all_distinct(){
        $sqlQuery = "SELECT DISTINCT `id`, `role_name` FROM " .$this->table. " WHERE 1";
        $results = $this->dbHandler->getresults($sqlQuery);
        return $results;
    }

    public function get_role_name_from_id($uid)
    { 
        // $sqlQuery = "SELECT distinct role_id FROM employee_role WHERE `employee_id`= '$uid'";
        $sqlQuery= "SELECT role_name FROM role INNER JOIN employee_role ON employee_role.role_id = role.id INNER JOIN employee ON employee.uid=employee_role.employee_id WHERE employee.uid = '" . $uid."'; ";
        
        $results = $this->dbHandler->getresults($sqlQuery);
        return $results;
    }
}
?>