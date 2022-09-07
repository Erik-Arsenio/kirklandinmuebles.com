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
				<option value="<?= $state->state_id ?>" <?php if (set_value('state_id') == $state->state_id) echo ' selected';
														elseif (!empty($project) && $project->state_id == $state->state_id) echo ' selected'; ?>><?= $state->state_name ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('state_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="city_id" class="form-label"><?= lang('Globals.city') ?><span class="text-danger ms-1">*</span></label>
		<select name="city_id" class="form-select select-linked" id="city_id" data-target="#municipality_id" data-uri="<?= base_url('settings/dropdown_municipalities') ?>" <?php if (empty($getCities)) echo ' disabled'; ?>>
			<?php if (!empty($getCities)) : ?>
				<?php foreach ($getCities as $city) : ?>
					<option value="<?= $city->city_id ?>" <?php if (set_value('city_id') == $city->city_id) echo ' selected';
															elseif (!empty($project) && $project->city_id == $city->city_id) echo ' selected'; ?>><?= $city->city_name ?></option>
				<?php endforeach; ?>
			<?php endif; ?>
		</select>
		<?= service('validation')->showError('city_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="municipality_id" class="form-label"><?= lang('Globals.municipality') ?></label>
		<select name="municipality_id" class="form-select" id="municipality_id" <?php if (empty($getMunicipalities)) echo ' disabled'; ?>>
			<?php if (!empty($getMunicipalities)) : ?>
				<?php foreach ($getMunicipalities as $municipality) : ?>
					<option value="<?= $municipality->municipality_id ?>" <?php if (set_value('municipality_id') == $municipality->municipality_id) echo ' selected';
																			elseif (!empty($project) && !empty($project->municipality_id) && $project->municipality_id == $municipality->municipality_id) echo ' selected'; ?>><?= $municipality->city_name ?></option>
				<?php endforeach; ?>
			<?php endif; ?>
		</select>
		<?= service('validation')->showError('municipality_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="project_location" class="form-label"><?= lang('Globals.location') ?></label>
		<input type="text" name="project_location" class="form-control" id="project_location" maxlength="128" value="<?php if (set_value('project_location') != null) echo set_value('project_location');
																														elseif (!empty($project)) echo $project->project_location; ?>">
		<?= service('validation')->showError('project_location') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="project_title" class="form-label"><?= lang('Globals.title') ?></label>
		<input type="text" name="project_title" class="form-control" id="project_title" maxlength="128" value="<?php if (set_value('project_title') != null) echo set_value('project_title');
																												elseif (!empty($project)) echo $project->project_title; ?>">
		<?= service('validation')->showError('project_title') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="project_offer" class="form-label"><?= lang('Globals.offer') ?></label>
		<input type="text" name="project_offer" class="form-control" id="project_offer" maxlength="128" value="<?php if (set_value('project_offer') != null) echo set_value('project_offer');
																												elseif (!empty($project)) echo $project->project_offer; ?>">
		<?= service('validation')->showError('project_offer') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="project_lot_min_sq" class="form-label"><?= lang('Globals.lot') . " (Min/Max m<sup>2</sup>)" ?></label>
		<div class="input-group">
			<input type="text" name="project_lot_max_sq" class="form-control" id="project_lot_max_sq" maxlength="5" value="<?php if (set_value('project_lot_max_sq') != null) echo set_value('project_lot_max_sq');
																															elseif (!empty($project)) echo $project->project_lot_max_sq; ?>">
			<input type="text" name="project_lot_min_sq" class="form-control" id="project_lot_min_sq" maxlength="5" value="<?php if (set_value('project_lot_min_sq') != null) echo set_value('project_lot_min_sq');
																															elseif (!empty($project)) echo $project->project_lot_min_sq; ?>">
		</div>
		<?= service('validation')->showError('project_lot_min_sq') ?>
		<?= service('validation')->showError('project_lot_max_sq') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="project_lot_min_price_sq" class="form-label"><?= lang('Globals.lot') . " (Min/Max " . lang('Globals.price') . "/m<sup>2</sup>)" ?></label>
		<div class="input-group">
			<input type="text" name="project_lot_min_price_sq" class="form-control" id="project_lot_min_price_sq" maxlength="5" value="<?php if (set_value('project_lot_min_price_sq') != null) echo set_value('project_lot_min_price_sq');
																																		elseif (!empty($project)) echo $project->project_lot_min_price_sq; ?>">
			<input type="text" name="project_lot_max_price_sq" class="form-control" id="project_lot_max_price_sq" maxlength="5" value="<?php if (set_value('project_lot_max_price_sq') != null) echo set_value('project_lot_max_price_sq');
																																		elseif (!empty($project)) echo $project->project_lot_max_price_sq; ?>">
			<select name="currency_id" class="form-select" id="currency_id">
				<?php foreach ($getCurrencies as $currency) : ?>
					<option value="<?= $currency->currency_id ?>" <?php if (set_value('currency_id') == $currency->currency_id) echo ' selected';
																	elseif (!empty($project) && $project->currency_id == $currency->currency_id) echo ' selected'; ?>><?= $currency->currency_iso ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<?= service('validation')->showError('project_lot_min_price_sq') ?>
		<?= service('validation')->showError('project_lot_max_price_sq') ?>
	</div>
	<div class="col-12">
		<label for="project_description" class="form-label"><?= lang('Globals.description') ?></label>
		<textarea name="project_description" class="form-control" id="project_description" rows="6"><?php if (set_value('project_description') != null) echo set_value('project_description');
																									elseif (!empty($project)) echo $project->project_description; ?></textarea>
		<?= service('validation')->showError('project_description') ?>
	</div>
</div>
<input type="hidden" name="project_id" value="<?= !empty($project) ? $project->project_id : null ?>">
<?= csrf_field() ?>