<div class="row">
	<div class="col-12 mb-3">
		<label for="state_id" class="form-label"><?= lang('Globals.state') ?></label>
		<select name="state_id" class="selectpicker form-control" id="state_id">
			<?php foreach ($getStates as $state) : ?>
				<option value="<?= $state->state_id ?>"<?php if (set_value('state_id') == $state->state_id) echo ' selected'; elseif (!empty($city) && $city->state_id == $state->state_id) echo ' selected'; ?>><?= $state->state_name ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('state_id') ?>
	</div>
	<div class="col-12">
		<label for="city_name" class="form-label"><?= lang('Globals.name') ?></label>
		<input type="text" name="city_name" class="form-control" id="city_name" maxlength="96" value="<?php if (set_value('city_name') != null) echo set_value('city_name'); elseif (!empty($city)) echo $city->city_name; ?>">
		<?= service('validation')->showError('city_name') ?>
	</div>
</div>
<input type="hidden" name="city_id" value="<?= !empty($city) ? $city->city_id : null ?>">
<?= csrf_field() ?>