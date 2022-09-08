<?php  

Class Dash Extends Controller {
    private $db;
    public $dataInfo;


    function __construct () { 
        $this->db = new Database;
    }

    public function lookDash ($value) { 
 
        $this->db->query($value);
        $this->dataInfo = $this->db->resultSet();
        $this->dataInfo = json_decode(json_encode($this->dataInfo), true);
        
        return $this->dataInfo;
    }

    function __destructu () {
        $this->db = null;
    }

}