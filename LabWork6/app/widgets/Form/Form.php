<?php
class Form
{
    

    public $fields = [];

    public function __construct($action, $type, $class = '') {
        $this->begin($action, $type, $class);
        
    }


    public function addField(Field $field)
    {
        echo $field->print();
    }



    public function begin($action, $method, $class = "")
    {
        echo "<form action='$action' method='$method' class='$class'>";
    }

    // public function run()
    // {
    //     foreach($this->fields as $field)
    //     {
    //        echo $field->print();
    //     }
    // }

    public function end()
    {
        
        echo '</form>';
    }
}
