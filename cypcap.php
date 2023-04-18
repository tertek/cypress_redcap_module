<?php

// Set the namespace defined in your config file
namespace STPH\cypcap;


// Declare your module class, which must extend AbstractExternalModule 
class cypcap extends \ExternalModules\AbstractExternalModule {

    private $moduleName = "Cypcap";  

   /**
    * Constructs the class
    *
    */
    public function __construct()
    {        
        parent::__construct();
       // Other code to run when object is instantiated
    }

   /**
    * Hooks Cypcap module to redcap_every_page_top
    *
    */
    public function redcap_every_page_top($project_id = null) {
        $this->renderModule();
    }

   /**
    * Renders the module
    *
    * @since 1.0.0
    */
    private function renderModule() {
        
        

        print '<p class="cypcap">'.$this->helloFrom_cypcap().'<p>';

    }

    /**
    * Returns a test string including module name.
    *
    * @since 1.0.0
    */    
    public function helloFrom_cypcap() {

                
        return 'Hello from '.$this->moduleName;
        

    }

    

    
}