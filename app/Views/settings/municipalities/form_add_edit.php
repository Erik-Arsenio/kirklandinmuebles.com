<div class="row">
	<div class="col-12 mb-3">
		<label for="city_id" class="form-label"><?= lang('Globals.city') ?></label>
		<select name="city_id" class="selectpicker form-control" id="city_id">
			<?php foreach ($getCities as $city) : ?>
				<option value="<?= $city->city_id ?>"<?php if (set_value('city_id') == $city->city_id) echo ' selected'; elseif (!empty($municipality) && $municipality->city_id == $city->city_id) echo ' selected'; ?>><?= "{$city->city_name}, {$city->state_name}" ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('city_id') ?>
	</div>
	<div class="col-12">
		<label for="municipality_name" class="form-label"><?= lang('Globals.name') ?></label>
		<input type="text" name="municipality_name" class="form-control" id="municipality_name" maxlength="96" value="<?php if (set_value('municipality_name') != null) echo set_value('municipality_name'); elseif (!empty($municipality)) echo $municipality->municipality_name; ?>">
		<?= service('validation')->showError('municipality_name') ?>
	</div>
</div>
<input type="hidden" name="municipality_id" value="<?= !empty($municipality) ? $municipality->municipality_id : null ?>">
<?= csrf_field() ?>