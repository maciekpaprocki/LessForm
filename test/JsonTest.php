<?php
/**
 * @author Maciej Paprocki <maciekpaprocki@gmail.com>
 * @covers LeForm\Form\Form::getJson
 */
use LeForm\Form\Form;

class JsonTest extends PHPUnit_Framework_TestCase {

   
    public function invalidJson() {
        $nacho = new Form();
        $this->assertFalse();
    }
    public function JsonDontExist(){
        
    }

    public function WrongJsonFile() {
        
    }

    public function GoodJsonFile() {
        
    }

}
