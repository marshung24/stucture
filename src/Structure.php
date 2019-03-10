<?php
namespace marshung\structure;

/**
 * Structure Builder
 *
 * After the structure is described using the array data, the constructor is used to generate the code.
 *
 * @author Mars.Hung
 *        
 */
class Structure
{

    /**
     * Construct
     */
    public function __construct()
    {}

    /**
     * Destruct
     */
    public function __destruct()
    {}
    
    /**
     * *********************************************
     * ************** Public Function **************
     * *********************************************
     */
    
    
    public static function render($options)
    {
        return \marshung\structure\types\TableBuilder::render($options);
    }
    
    /**
     * **********************************************
     * ************** Private Function **************
     * **********************************************
     */
}