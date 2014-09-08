<?php

namespace \LeForm\Form;

Class Form {

    public $namespace;
    public $creationData = array();
    public $inputData;
    /**
     * @todo How the hack to use this $basePath?
     */

    public $settings = array(
        'includeSctipts' => array(
            'angular' => true,
            'jQuery' => false,
        ),
        'includeLess' => array(
        ),
        'wrap' => '<div class="row">@{field}</div>'
    );
   
    /* Constructing form from data
     * 
     * @param $creationData array data used for form creation can also supply json file
     * @param $settings
     * @return Form 
     */

    public function __construct($creationData, array $settings = array()) {

//        if (!is_array($creationData)) {
//            $creationData = $this->getJson($creationData);
//        }
//        $this->creationData = $creationData;
    }
    static function setBaseJsonPath(){
        
    }

    public function getJson($file) {
        
        $file = \LeForm\Form\Path::$Json.'/'.$file.'.json';
        if(!file_exists($file)) 
            throw new \LeForm\Exception\NotFound;
        
        $json = json_decode(file_get_contents($file),true);
        if($json == false)
            throw new \LeForm\Exception\InvalidJson;
        
        return $json;
    }

    public function _extends($creationData) {
        
        $this->extendExistingData();
    }

    private function extendExistingData() {
        if (!isset($this->creationData['_extend'])){
            $this->creationData['_extend'] = false;
        }
        while ($this->creationData['_extend']) {
            
        }
    }

}
