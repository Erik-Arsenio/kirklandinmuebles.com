<?php if (count($getCities) > 0) : ?>
	<option value=""><?= lang('Globals.select') ?></option>
	<?php foreach ($getCities as $city) : ?>
		<option value="<?= $city->city_id ?>"<?php if (set_value('city_id') == $city->city_id) echo ' selected'; ?>><?= $city->city_name ?></option>
	<?php endforeach; ?>
<?php endif; ?>