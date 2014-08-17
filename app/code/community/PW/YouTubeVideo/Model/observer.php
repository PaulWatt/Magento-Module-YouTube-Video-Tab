<?php
class PW_YouTubeVideo_Model_Observer
{

   public function youtubeVideo(Varien_Event_Observer $observer)
    {
    	
    	if (!Mage::getStoreConfigFlag('advanced/modules_disable_output/PW_YouTubeVideo')) {

    		if(Mage::registry('current_product')){
    		$block = $observer->getEvent()->getBlock();
    		$product_id = Mage::registry('current_product')->getId();
    		$product= Mage::getModel('Mage_Catalog_Model_Product')->load($product_id);
	    		if ($product->isConfigurable() && ($product->getData('youtube_video') != NULL)) {
						$update = Mage::getSingleton('core/layout')->getUpdate();	
    					$update->addHandle('youtube_new_handle');
    					}
	        
	    }
    	}
  	}
}