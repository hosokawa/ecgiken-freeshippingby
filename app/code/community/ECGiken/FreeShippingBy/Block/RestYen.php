<?php
class ECGiken_FreeShippingBy_Block_RestYen extends Mage_Core_Block_Template {

    public function isDisplayRestBlock() {
        return true;
    }

    public function getRestYen() {
        return Mage::helper('core')->currency(320, true, false);
    }
}
