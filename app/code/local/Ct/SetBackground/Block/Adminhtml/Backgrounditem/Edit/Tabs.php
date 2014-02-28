<?php
/**
* NOTICE OF LICENSE
*
* You may not sell, sub-license, rent or lease
* any portion of the Software or Documentation to anyone.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade to newer
* versions in the future.
*
* @category   Ct
* @package    Ct_SetBackground
* @copyright  Copyright (c) 2014 Ct Web Solutions (http://codetiburon.com/)
* @contacts   info@codetiburon.com
* @license    http://shop.etwebsolutions.com/etws-license-free-v1/   ETWS Free License (EFL1)
*/

class Ct_SetBackground_Block_Adminhtml_Backgrounditem_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('setbackgrounditem_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('setbackground')->__('Background Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('setbackground')->__('Item Information'),
          'title'     => Mage::helper('setbackground')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('setbackground/adminhtml_backgrounditem_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}