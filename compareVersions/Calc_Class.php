<?php 
class Calculator { 

    private $x, $y, $op, $result; 
     
    public function __construct ($x, $y, $op) {     
        $this->x     = $x; 
        $this->y     = $y; 
        $this->op    = $op; 
       // $this->result = $result; 
    }         
     
    public function __get ($var){ 
        return $this->$var; 
    } 
     
    private function validateInput () { 
        if (!preg_match("/(\+|-|\*|\/)/", $this->op)) { 
            throw new Exception("Operator \"$this->op\" not recognized ... only + - * / allowed\n"); 
        } 
        elseif (!is_numeric($this->x) || !is_numeric($this->y)) { 
            throw new Exception("x and y must to be numeric ... please re-enter values\n"); 
        } 
        else { 
            return TRUE; 
        } 
    } 
     
    public function calculate () { 
        if ($this->validateInput()) { 
            if ($this->op == '/' && $this->y == 0) { 
                $this->result = '&infin;'; 
            } 
            else { 
                $evalString = "\$this->result = $this->x $this->op $this->y;"; 
                eval("$evalString"); 
            } 
            return $this->result; 
        } 
    }         
} 

?>