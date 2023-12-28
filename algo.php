<?php
class Company {
    public $name;
    public $location;
    public $tot_employees;

    public function __construct($name, $location , $tot_employees)
    {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
    }
    public function PrintCompany(){
        if ($this->tot_employees > 0) {
            echo "l'uffcio {$this->name} con sede in {$this->location} ha ben {$this->tot_employees}";
        }else{
            echo "l'uffcio {$this->name} con sede in {$this->location} non ha dipendenti";
        }
    }
}

$aulab = new Company("aulab","italia",50);

$aulab->PrintCompany();
