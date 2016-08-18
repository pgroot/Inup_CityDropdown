<?php
/**
 * User: GROOT (pzyme@outlook.com)
 * Date: 2016/8/18
 * Time: 16:09
 */

class Inup_CityDropdown_Helper_Data extends Mage_Core_Helper_Abstract {

    public function getCities($stateId) {
        $resource = Mage::getSingleton('core/resource');
        $connection = $resource->getConnection('core_read');
        $tableName = $resource->getTableName('directory_region_city');
        $query = "SELECT * FROM $tableName WHERE region_id = ".intval($stateId);
        $results = $connection->fetchAll($query);

        $cities = [];
        if(count($results) > 0) {
            foreach ($results as $city) {
                $cities[$city['city_id']] = $city['default_name'];
            }
        }
        return $cities;
    }

    public function getCitiesAsDropdown($selectedCity = '',$stateId)
    {
        $cities = $this->getCities($stateId);
        $options = '';
        if(count($cities) > 0)
        {
            foreach($cities as $city)
            {
                $isSelected = $selectedCity == $city ? ' selected="selected"' : null;
                $options .= '<option value="' . $city . '"' . $isSelected . '>' . $city . '</option>';
            }
        }
        return $options;
    }
}