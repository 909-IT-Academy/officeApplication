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
    private $table2;

    public function __construct($id="", $role_name="")
    {
        $this->id = $id;
        $this->role_name = $role_name;
        $this->dbHandler = new DbHandler();
        $this->table = "role";
        $this->table = "employee_role";
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

    public function get_role_name_from_id($id)
    {
        $results = $this->check_if_id_exists($id);

        if ($results['status'] == "success") {
            $sqlQuery = "SELECT `location` FROM ".$this->table. " WHERE `id`=$id Limit 1";

            $results = $this->dbHandler->getresults($sqlQuery);
            if ($results['status'] == "success") {
                foreach ($results['data'] as $data) {                    
                    $this->location = $data['location'];
                }
            }
        }
        return $this->location;
    }

    // public function get_role_for_employee($uid){
    //     $sqlQuery = "SELECT `role.role_name` from `employee_role` JOIN `role` ON `role.id` =$uid";
    //              $results = $this->dbHandler->getresults($sqlQuery);
    //              return $results;


    // }
}
?>