## City Dropdown For China

#### Installation

* modman clone https://github.com/pgroot/Inup_CityDropdown.git

or

* Copy the files into magento ROOT Directory


#### Add Script

* app/design/frontend/[theme]/default/template/customer/address/edit.phtml
* app/design/frontend/[theme]/default/template/customer/form/address.phtml
* app/design/frontend/[theme]/default/template/persistent/customer/form/register.phtml

```
<script type="text/javascript">
	function updateCity(event) {
        var action = "<?php echo $this->getUrl('citydropdown/resource/cities'); ?>";
		var stateId = $('region_id').value;
		var request = new Ajax.Request(action,
			{
				method: 'GET',
				onSuccess: function (data) {
					var json = data.responseText.evalJSON(true);
                    if(json.cities.length > 0)
						$('city').replace('<select id="city" name="city" class="required-entry">' + '<option value=""></option>' + json.cities + '</select>');
				},
				onFailure: '',
				parameters: {state_id: stateId,selected : $('city').value}
			}
		);
    }
    Event.observe($('region_id'), 'change', updateCity);
	if($('region_id').value) updateCity();
</script>
```

* app/design/frontend/[theme]/default/template/persistent/checkout/onepage/billing.phtml

```
<script type="text/javascript">
	function updateCity(event) {
        var action = "<?php echo $this->getUrl('citydropdown/resource/cities'); ?>";
		var stateId = $('billing:region_id').value;
		var request = new Ajax.Request(action,
			{
				method: 'GET',
				onSuccess: function (data) {
					var json = data.responseText.evalJSON(true);
                    if(json.cities.length > 0)
						$('billing:city').replace('<select id="billing:city" name="billing[city]">' + '<option value=""></option>' + json.cities + '</select>');
				},
				onFailure: '',
				parameters: {state_id: stateId,selected : $('billing:city').value}
			}
		);
    }
    Event.observe($('billing:region_id'), 'change', updateCity);
	if($('billing:region_id').value) updateCity();
</script>
```

* app/design/frontend/[theme]/default/template/checkout/onepage/shipping.phtml

```
<script type="text/javascript">
	function updateCity(event) {
        var action = "<?php echo $this->getUrl('citydropdown/resource/cities'); ?>";
		var stateId = $('shipping:region_id').value;
		var request = new Ajax.Request(action,
			{
				method: 'GET',
				onSuccess: function (data) {
					var json = data.responseText.evalJSON(true);
                    if(json.cities.length > 0)
						$('shipping:city').replace('<select id="shipping:city" name="shipping[city]">' + '<option value=""></option>' + json.cities + '</select>');
				},
				onFailure: '',
				parameters: {state_id: stateId,selected : $('shipping:city').value}
			}
		);
    }
    Event.observe($('shipping:region_id'), 'change', updateCity);
	if($('shipping:region_id').value) updateCity();
</script>
```

* app/design/frontend/[theme]/default/template/checkout/cart/shipping.phtml

```
<script type="text/javascript">
    var cityActive = <?php echo $this->getCityActive() ? '1' : '0';?>;
    function updateCity(event) {
        if(parseInt(cityActive) === 0) {
            return;
        }
        var action = "<?php echo $this->getUrl('citydropdown/resource/cities'); ?>";
        var stateId = $('region_id').value;
        var request = new Ajax.Request(action,
            {
                method: 'GET',
                onSuccess: function (data) {
                    var json = data.responseText.evalJSON(true);
                    if(json.cities.length > 0)
                        $('city').replace('<select id="city" name="city" class="required-entry">' + '<option value=""></option>' + json.cities + '</select>');
                },
                onFailure: '',
                parameters: {state_id: stateId,selected : $('city').value}
            }
        );
    }
    Event.observe($('region_id'), 'change', updateCity);
    if($('region_id').value) updateCity();
</script>
```