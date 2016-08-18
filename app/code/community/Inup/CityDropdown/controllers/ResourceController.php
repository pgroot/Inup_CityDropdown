<?php
/**
 * User: GROOT (pzyme@outlook.com)
 * Date: 2016/8/18
 * Time: 16:04
 */

class Inup_CityDropdown_ResourceController extends Mage_Core_Controller_Front_Action {

    public function citiesAction() {
        $stateId = $this->getRequest()->getParam('state_id');
        $selected = $this->getRequest()->getParam('selected');
        $result = [];
        $result['cities'] = Mage::helper('inup_citydropdown')->getCitiesAsDropdown($selected,$stateId);
        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    }
}