<?php
class Registration
{
    public string $fullname = '';
    public string $email = '';
    public string $password = '';
    public string $confirm_password = '';
    protected $db_table;
    private Database $db;
    private $conn;
    private array $db_columns;
    public array $errors = [];



    public function __construct() {
        $this->db = Database::getInstance();
        $this->con = $this->db->getConnection();
        $this->setTable('users');
        $this->setColumns();
    }


    public function setColumns()
    {
        $this->db_columns = [
            'fullname',
            'email',
            'password'
        ];
    }


    public function getErrors()
    {
        if($this->errors)
            return $this->errors;
    }
    public function loadData($data)
    {
      
        foreach ($data as $key => $value) {
            if(property_exists($this, $key)){
                                
                $this->{$key} = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);

            }
        }
       
    }


    public function setTable($table)
    {
        $this->db_table = $table;
    }

    public function setProperty($key, $value)
    {
        $this->$key = $value;
    }

    public function validate()
    {
        //TODO : Do some action
        $ok = true;
        if(strlen($this->fullname) <= 0) {
            $this->errors['fullname'][0] = "This field is requried. ";
            $ok = false;
        }

        if(strlen($this->email) <= 0) {
            $this->errors['email'][0] = "This field is requried. ";
            $ok = false;

        }

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'][0] = 'The email is not valid.';
            $ok = false;

        }

        if(strlen($this->password) < 8)
        {
            $this->errors['password'][0] = 'The Length of password should be at least 8.';
            $ok = false;

        }

        if(strlen($this->confirm_password) <= 0)
        {
            $this->errors['confirm_password'][0] = 'The Field can not be empty';
            $ok = false;

        }

        if($this->password !== $this->confirm_password)
        {
            $this->errors['confirm_password'][0] = "The password doesn't match.";
            $ok = false;

        }
        
        
        if($ok) return true;
        else return false;
    }


    public function save()
    {


        //necessery security 

        $values = [];
        foreach ($this->db_columns as $key => $value) {
            $values[$value] = $this->{$value};
        }
        $values['password'] = password_hash($values['password'], PASSWORD_DEFAULT);

        $col = implode(',', $this->db_columns);
        $values = array_map(fn($d)=>"'$d'", $values);
        $val = implode(',', $values);
        
        if($this->validate()){
            
            $sql = "INSERT INTO $this->db_table ($col)VALUES($val)";
            $stmt = $this->con->query($sql);
            if($stmt === true)
            {
                echo 'User Registration Successful.';
            }            
        }

        
    }





}
