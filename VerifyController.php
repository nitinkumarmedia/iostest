<?php
/*  VerifyController - Used to handle multiple request on the server through GET/POST/REQUEST
 *  Author: Nitin
 *  Date: 11-Jan-2013
 *  Version: 1.7.2.1
 */ 
class VerifyControllerDemo
{
    public $postVars;
    public $getVars;
    public $response;
   
    public function __construct($get, $post)
    {
        $this->postVars = $post;
	$this->getVars  = $get;
        $ObjModel = new VerifyModel($this->getVars, $this->postVars);
        $this->response = $ObjModel->response;
    }
}
?>