<?php
class Field{
    public $type;
    public $controller;
    public $lable;
    public $name;

    public function __construct($type, $controller, $label, $name) {
        $this->type = $type;
        $this->controller = $controller;
        $this->lable = $label;
        $this->name = $name;
       // $this->print();

    }


    public function valid()
    {
        if(isset($this->controller->errors[$this->name]))
            return $this->controller->errors[$this->name];
        else return false;
    }
    public function print()
    {
       return sprintf("
            <div class='d-flex flex-row align-items-center mb-4'>
                <div class='form-outline flex-fill mb-0'>
                    <label class='form-label'>%s</label>
                    <input type='%s' name='%s' class='form-control %s' value='%s'/>
                    <div class='invalid-feedback'>%s</div>
                </div>
            </div>",
            $this->lable,
            $this->type,
            $this->name,
            ($this->valid())? "is-invalid" : "",
            $this->controller->{$this->name},
            ($this->valid())? $this->valid()[0]: "",
            );
    }

    public function addLable($lable)
    {
        $this->lable = $lable;
    }

    public function addName($name)
    {
        $this->name = $name;
    }

}