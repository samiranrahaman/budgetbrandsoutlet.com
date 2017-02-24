<?php
class BrandsApi_BrandsApi_Adminhtml_BrandsapibackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('brandsapi/brandsapibackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Backend Page Title"));
	   $this->renderLayout();
    }
}