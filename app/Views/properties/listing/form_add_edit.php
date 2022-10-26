<div class="row">
	<div class="col-lg-4 mb-3">
		<label for="property_name" class="form-label"><?= lang('Globals.name') ?><span class="text-danger ms-1">*</span></label>
		<input type="text" name="property_name" class="form-control" id="property_name" maxlength="48" value="<?php if (set_value('property_name') != null) echo set_value('property_name');
																												elseif (!empty($property)) echo $property->property_name; ?>">
		<?= service('validation')->showError('property_name') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_type_id" class="form-label"><?= lang('Globals.type') ?><span class="text-danger ms-1">*</span></label>
		<select name="property_type_id" class="form-select" id="property_type_id">
			<option value=""><?= lang('Globals.select') ?></option>
			<?php foreach ($getTypes as $type) : ?>
				<option value="<?= $type->property_type_id ?>" <?php if (set_value('property_type_id') == $type->property_type_id) echo ' selected';
																elseif (!empty($property) && $property->property_type_id == $type->property_type_id) echo ' selected'; ?>><?= $type->$propertyTypeNameField ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('property_type_id') ?>
	</div>
	<?php if (empty($property)) : ?>
		<div class="col-lg-4 mb-3">
			<label for="property_qty" class="form-label"><?= lang('Globals.quantity') ?><span class="text-danger ms-1">*</span></label>
			<input type="number" name="property_qty" class="form-control" id="property_qty" maxlength="5" min="1" max="1000" value="<?php if (set_value('property_qty') != null) echo set_value('property_qty'); else echo '1'; ?>">
			<?= service('validation')->showError('property_qty') ?>
		</div>
	<?php endif; ?>
	<div class="col-lg-4 mb-3">
		<label for="property_characteristic_id" class="form-label"><?= lang('Globals.characteristics') ?><span class="text-danger ms-1">*</span></label>
		<select name="property_characteristic_id[]" class="form-select" id="property_characteristic_id" style="max-height: 38px;" multiple>
			<?php foreach ($getCharacteristics as $characteristic) : ?>
				<option value="<?= $characteristic->property_characteristic_id ?>" <?php if (!empty($formPost) && isset($formPost['property_characteristic_id']) && in_array($characteristic->property_characteristic_id, $formPost['property_characteristic_id'])) echo ' selected';
																					elseif (!empty($property) && in_array($characteristic->property_characteristic_id, $listPropertyCharacteristics)) echo ' selected'; ?>><?= $characteristic->$propertyCharacteristicNameField ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('property_characteristic_id.*') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="project_id" class="form-label"><?= lang('Globals.project') ?></label>
		<select name="project_id" class="form-select" id="project_id">
			<option value=""><?= lang('Globals.select') ?></option>
			<?php foreach ($getProjects as $project) : ?>
				<option value="<?= $project->project_id ?>" <?php if (set_value('project_id') == $project->project_id) echo ' selected';
															elseif (!empty($property) && $property->project_id == $project->project_id) echo ' selected'; ?>><?= $project->project_name ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('project_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_category_id" class="form-label"><?= lang('Globals.category') ?></label>
		<select name="property_category_id" class="form-select" id="property_category_id">
			<option value=""><?= lang('Globals.select') ?></option>
			<?php foreach ($getCategories as $category) : ?>
				<option value="<?= $category->property_category_id ?>" <?php if (set_value('property_category_id') == $category->property_category_id) echo ' selected';
																		elseif (!empty($property) && $property->property_category_id == $category->property_category_id) echo ' selected'; ?>><?= $category->$propertyCategoryNameField ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('property_category_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_stage_id" class="form-label"><?= lang('Globals.stage') ?></label>
		<select name="property_stage_id" class="form-select" id="property_stage_id">
			<option value=""><?= lang('Globals.select') ?></option>
			<?php foreach ($getStages as $stage) : ?>
				<option value="<?= $stage->property_stage_id ?>" <?php if (set_value('property_stage_id') == $stage->property_stage_id) echo ' selected';
																	elseif (!empty($property) && $property->property_stage_id == $stage->property_stage_id) echo ' selected'; ?>><?= $stage->$propertyStageNameField ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('property_stage_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="state_id" class="form-label"><?= lang('Globals.state') ?></label>
		<select name="state_id" class="form-select select-linked" id="state_id" data-target="#city_id" data-uri="<?= base_url('settings/dropdown_cities') ?>">
			<option value=""><?= lang('Globals.select') ?></option>
			<?php foreach ($getStates as $state) : ?>
				<option value="<?= $state->state_id ?>" <?php if (set_value('state_id') == $state->state_id) echo ' selected';
														elseif (!empty($property) && $property->state_id == $state->state_id) echo ' selected'; ?>><?= $state->state_name ?></option>
			<?php endforeach; ?>
		</select>
		<?= service('validation')->showError('state_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="city_id" class="form-label"><?= lang('Globals.city') ?></label>
		<select name="city_id" class="form-select select-linked" id="city_id" data-target="#municipality_id" data-uri="<?= base_url('settings/dropdown_municipalities') ?>" <?php if (empty($getCities)) echo ' disabled'; ?>>
			<?php if (!empty($getCities)) : ?>
				<?php foreach ($getCities as $city) : ?>
					<option value="<?= $city->city_id ?>" <?php if (set_value('city_id') == $city->city_id) echo ' selected';
															elseif (!empty($property) && $property->city_id == $city->city_id) echo ' selected'; ?>><?= $city->city_name ?></option>
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
																			elseif (!empty($property) && !empty($property->municipality_id) && $property->municipality_id == $municipality->municipality_id) echo ' selected'; ?>><?= $municipality->city_name ?></option>
				<?php endforeach; ?>
			<?php endif; ?>
		</select>
		<?= service('validation')->showError('municipality_id') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_address" class="form-label"><?= lang('Globals.address') ?></label>
		<input type="text" name="property_address" class="form-control" id="property_address" value="<?php if (set_value('property_address') != null) echo set_value('property_address');
																										elseif (!empty($property)) echo $property->property_address; ?>">
		<?= service('validation')->showError('property_address') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_availability" class="form-label"><?= lang('Globals.availability_date') ?></label>
		<input type="text" name="property_availability" class="form-control" id="property_availability" maxlength="48" value="<?php if (set_value('property_availability') != null) echo set_value('property_availability');
																																elseif (!empty($property)) echo $property->property_availability; ?>">
		<?= service('validation')->showError('property_availability') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_financing" class="form-label"><?= lang('Globals.financing') ?></label>
		<input type="text" name="property_financing" class="form-control" id="property_financing" maxlength="128" value="<?php if (set_value('property_financing') != null) echo set_value('property_financing');
																															elseif (!empty($property)) echo $property->property_financing; ?>">
		<?= service('validation')->showError('property_financing') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_down_payment" class="form-label"><?= lang('Globals.down_payment') ?></label>
		<input type="text" name="property_down_payment" class="form-control" id="property_down_payment" maxlength="5" value="<?php if (set_value('property_down_payment') != null) echo set_value('property_down_payment');
																																elseif (!empty($property)) echo $property->property_down_payment; ?>">
		<?= service('validation')->showError('property_down_payment') ?>
	</div>
	<div class="col-lg-4 mb-3">
		<label for="property_area_lot" class="form-label"><?= lang('Globals.area') . " m<sup>2</sup> (" . lang('Globals.lot') . " / " . lang('Globals.built') . ")" ?></label>
		<div class="input-group">
			<input type="text" name="property_area_lot" class="form-control" id="property_area_lot" maxlength="5" value="<?php if (set_value('property_area_lot') != null) echo set_value('property_area_lot');
																															elseif (!empty($property)) echo $property->property_area_lot; ?>">
			<input type="text" name="property_area_build" class="form-control" id="property_area_build" maxlength="5" value="<?php if (set_value('property_area_build') != null) echo set_value('property_area_build');
																																elseif (!empty($property)) echo $property->property_area_build; ?>">
		</div>
		<?= service('validation')->showError('property_area_lot') ?>
		<?= service('validation')->showError('property_area_build') ?>
	</div>
	<div class="col-lg-8 mb-3">
		<label for="property_price_square" class="form-label"><?= lang('Globals.price') . " (m<sup>2</sup>/Total)" ?></label>
		<div class="input-group">
			<input type="text" name="property_price_square" class="form-control" id="property_price_square" maxlength="5" value="<?php if (set_value('property_price_square') != null) echo set_value('property_price_square');
																																	elseif (!empty($property)) echo $property->property_price_square; ?>">
			<input type="text" name="property_price_overall" class="form-control" id="property_price_overall" maxlength="5" value="<?php if (set_value('property_price_overall') != null) echo set_value('property_price_overall');
																																	elseif (!empty($property)) echo $property->property_price_overall; ?>">
			<select name="currency_id" class="form-select" id="currency_id">
				<?php foreach ($getCurrencies as $currency) : ?>
					<option value="<?= $currency->currency_id ?>" <?php if (set_value('currency_id') == $currency->currency_id) echo ' selected';
																	elseif (!empty($property) && $property->currency_id == $currency->currency_id) echo ' selected'; ?>><?= $currency->currency_iso ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<?= service('validation')->showError('property_price_square') ?>
		<?= service('validation')->showError('property_price_overall') ?>
	</div>
	<div class="col-12">
		<label for="property_description" class="form-label"><?= lang('Globals.description') ?></label>
		<textarea name="property_description" class="form-control" id="property_description" rows="6"><?php if (set_value('property_description') != null) echo set_value('property_description');
																										elseif (!empty($property)) echo $property->property_description; ?></textarea>
		<?= service('validation')->showError('property_description') ?>
	</div>
</div>
<input type="hidden" name="property_id" value="<?= !empty($property) ? $property->property_id : null ?>">
<?= csrf_field() ?>