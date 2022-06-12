<?php
namespace officeApp\Model;

use officeApp\Database\DbHandler;
// include('Database/DbHandler.php');

class Employee {
    private $id;
    private $employee_id; // this is uid in db
    private $fname;
    private $lname;
    private $mobile;
    private $address;
    private $email;
    private $roles = [];
    public $dbHandler;
    public $results = [];

    public function __construct($id = "", $employee_id = "", $fname = "", $lname="", $mobile = "", $address = "", $email = "", $roles = [])
    {
        $this->id = $id;
        $this->employee_id = $employee_id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->mobile = $mobile;
        $this->address = $address;
        $this->email = $email;
        $this->roles = $roles;
        $this->dbHandler = new DbHandler();
        $this->results = [];
    }

    public function set_id($id){
        $this->id = $id;
    }

    public function set_employee_id($employee_id){
        $this->employee_id = $employee_id;
    }

    public function set_fname($fname){
        $this->fname = $fname;
    }

    public function set_lname($lname){
        $this->lname = $lname;
    }

    public function set_mobile($mobile){
        $this->mobile = $mobile;
    }

    public function set_address($address){
        $this->address = $address;
    }

    public function set_email($email){
        $this->email = $email;
    }

    public function set_roles($roles){
        $this->roles = $roles;
    }

    public function set_mode($mode){
        $this->mode = $mode;
    }

    public function get_id(){
        return $this->id;
    }

    public function get_employee_id(){
        return $this->employee_id;
    }

    public function get_fname(){
        return $this->fname;
    }

    public function get_lname(){
        return $this->lname;
    }

    public function get_mobile(){
        return $this->mobile;
    }

    public function get_address(){
        return $this->address;
    }

    public function get_email(){
        return $this->email;
    }

    // public function get_mode(){
    //     return $this->mode;
    // }

    public function get_roles(){
        return $this->roles;
    }

    // save the data to the employee table
    public function save($id="null")
    {
        // check if db connection is established
        // assign sanitized form values to the fields
        if($this->dbHandler->results['status'] == "success"){ 
            $id = $this->id;
            $employee_id = $this->employee_id;
            $fname = $this->fname;
            $lname = $this->lname;
            $mobile = $this->mobile;
            $address = $this->address;
            $email = $this->email;
            $roles = $this->roles;           
            
            if($fname){ // if $fname has some value

                // To avoid the sql injection, we bind the params
                $stmt = $this->dbHandler->con->prepare("INSERT INTO `employee`(`uid`,`fname`, `lname`, `mobile`, `address`, `email`) VALUES (?,?,?,?,?,?)");
                $stmt->bind_param("ssssss", $employee_id, $fname, $lname, $mobile, $address, $email);
                
                if($stmt->execute()){ // true
                    $this->results['mode'] = "new";
                    $this->results['status'] = "success";
                    $this->results['message'] = "New Employee Data inserted successfully.";
                    $stmt->store_result();                    
                }else{ // false
                    $this->results['mode'] = "new";
                    $this->results['status'] = "error";
                    $this->results['message'][]  = $stmt->error;
                }
                foreach ($this->roles as $role) {
                    echo $role;
                    echo $this->employee_id;
                    
                    $stmtRole = $this->dbHandler->con->prepare("INSERT INTO `employee_role`(`employee_id`, `role_id`) VALUES (?,?)");
                    $stmtRole->bind_param("ss", $this->employee_id, $role);
                    if($stmtRole->execute()){
                        $stmtRole->store_result();
                        $this->results['mode'] = "new";
                        $this->results['status'] = "success";
                        $this->results['message'] = "New Employee inserted successfully.";
                    } else {
                        $this->results['mode'] = "new";
                        $this->results['status'] = "error";
                        $this->results['message'] = $stmtRole->error;
                    }
                }
            } 
        } 
        return $this->results;
    }

    // get all the records from the employee table
    public function getAll(){

    }

    // get the record for the id
    public function get_from_id(){

    }

    public function uniqidReal($lenght = 13) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }
}
?>