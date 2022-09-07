<div class="row">
	<div class="col-lg-4 mb-3">
		<label for="project_name" class="form-label"><?= lang('Globals.name') ?><span class="text-danger ms-1">*</span></label>
		<input type="text" name="project_name" class="form-control" id="project_name" maxlength="48" value="<?php if (set_value('project_name') != null) echo set_value('project_name');
																											elseif (!empty($project)) echo $project->project_name; ?>">
		<?= service('validation')->showError('project_name') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="state_id" class="form-label"><?= lang('Globals.state') ?><span class="text-danger ms-1">*</span></label>
		<select name="state_id" class="form-select select-linked" id="state_id" data-target="#city_id" data-uri="<?= base_url('settings/dropdown_cities') ?>">
			<option value=""><?= lang('Globals.select') ?></option>
			<?php foreach ($getStates as $state) : ?>
				<option value="<?= $state->state_id ?>"<?php if (set_value('state_id') == $state->state_id) echo ' selected';
														elseif (!empty($project) && $project->state_id == $state->state_id) echo ' selected'; ?>><?= $state->state_name ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('state_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="city_id" class="form-label"><?= lang('Globals.city') ?><span class="text-danger ms-1">*</span></label>
		<select name="city_id" class="form-select" id="city_id"<?php if (empty($getCities)) echo ' disabled'; ?>>
			<?php if (!empty($getCities)) : ?>
				<?php foreach ($getCities as $city) : ?>
					<option value="<?= $city->city_id ?>"<?php if (set_value('city_id') == $city->city_id) echo ' selected';
															elseif (!empty($project) && $project->city_id == $city->city_id) echo ' selected'; ?>><?= $city->city_name ?></option>
				<?php endforeach; ?>
			<?php endif; ?>
		</select>
		<?= service('validation')->showError('city_id') ?>
	</div>
</div>
<input type="hidden" name="project_id" value="<?= !empty($project) ? $project->project_id : null ?>">
<?= csrf_field() ?>