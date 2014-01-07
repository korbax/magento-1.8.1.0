<?php
class Ct_SetBackground_Block_Background extends Mage_Core_Block_Template
{
	protected $_background = false;

	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
    public function getBackground()     
     { 
        Mage::log('1===' . print_r($this->getData()) );
//        if (!$this->_background) {
//
//                //$background_id = $this->getData('id');
//                $background_id = $this->getBackgroundId();
//
//                //echo $background_id;
//
//                if ($background_id) {
//                        $background = Mage::getModel('setbackground/background')->load($background_id);
//                        //var_dump($background);	exit;
//                        if ($background->getId()==0) {
//                                $background = Mage::getModel('setbackground/background')->load($background_id, 'identifier');
//                        }
//                        $this->_background = $background;
//                }
//        }
//        return $this->_background;       
    }

	public function isVisible() {
//            return $this->getBackground() && $this->getBackground()->getStatus();
            return true;
	}

	public function getBackgroundItems($storeId = 1) {
            
            Mage::log('2===' . $this->_background);
            if ($this->isVisible()) {
//                    $background = $this->getBackground();

                    $collection = Mage::getModel('setbackground/backgrounditem')->getCollection()
                            ->addFieldToFilter('store', $storeId)
                            ->addFieldToFilter('status', true)
//                            ->addFieldToFilter('background_id', $background->getId())
                            ->setOrder('background_order','ASC');
                    return $collection;
            }
            return false;
	}
        
        public function getBackgImgByTitle($title) {
            if ($this->isVisible()) {
                    $background = $this->getBackground();

                    $collection = Mage::getModel('setbackground/backgrounditem')->getCollection()
                            ->addFieldToFilter('status', true)
                            ->addFieldToFilter('title', $title)
                            ->setOrder('background_order','ASC');
                    
                    $image = null;
                    foreach ($collection as $_background_image){
                        $image = $_background_image->getImage(); 
                    }

                    return $image;
            }
            return false;
	}
          
}