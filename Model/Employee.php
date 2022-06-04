"<?php
namespace officeApp\Model;

use officeApp\Database\DbHandler;
include('Database/DbHandler.php');

class Employee {
    private $id;
    private $fname;
    private $lname;
    private $mobile;
    private $address;
    private $email;
    public $dbHandler;
    public $results = [];

    public function __construct($id = "", $fname = "", $lname="", $mobile = "", $address = "", $email = "")
   {
        $this->id = $id;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->mobile = $mobile;
        $this->address = $address;
        $this->email = $email;
        $this->dbHandler = new DbHandler();
    }

    public function set_id($id){
        $this->id = $id;
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

    public function get_id(){
        return $this->id;
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

    // save the data to the employee table
    public function save($id="null")
    {
        if($this->dbHandler->results['status'] == "success"){
            $id = $this->dbHandler->sanitize($this->id);
            $fname = $this->dbHandler->sanitize($this->fname);
            $lname = $this->dbHandler->sanitize($this->lname);
            $mobile = $this->dbHandler->sanitize($this->mobile);
            $address = $this->dbHandler->sanitize($this->address);
            $email = $this->dbHandler->sanitize($this->email);
            
            if($id){
                $stmt = $this->dbHandler->con->prepare("INSERT INTO `employee`(`fname`, `lname`, `mobile`, `address`, `email`) VALUES (?,?,?,?,?)");
                $stmt->bind_param("sssss", $id, $fname, $lname, $mobile, $address, $email);
                
                if($stmt->execute()){
                    $this->results['mode'] = "new";
                    $this->results['status'] = "success";
                    $this->results['message'] = "New Data inserted successfully.";
                }else{
                    $this->results['mode'] = "new";
                    $this->results['status'] = "error";
                    $this->results['message']  = $stmt->error;
                }
            } 

        } 
    }

    // get all the records from the employee table
    public function getAll(){

    }

    // get the record for the id
    public function get_from_id(){

    }
}
?>