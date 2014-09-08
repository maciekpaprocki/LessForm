<?php

define('LeForm_Base_Path',dirname(dirname(__DIR__)));

namespace LeForm\Form;

Class Form {

    public $namespace;
    public $creationData = array();
    public $inputData;
    //base path from where all the resources will be taken (by default vendor folder)
    static $basePath = LeForm_Base_Path;
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

        if (!is_array($creationData)) {
            $creationData = $this->getJson($creationData);
        }
        $this->creationData = $creationData;
    }
    
    public function getJson($file) {
        $file = self::$basePath.'/'.$file.'.json';
        if(file_exists($file))
        return json_decode(file_get_contents(),true);
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
