<div class="row">
	<?php foreach ($getLanguages as $language): ?>
		<?php $fieldName = "property_characteristic_name_{$language->language_abr}"; ?>
		<div class="col-12 mb-3">
			<label for="<?= $fieldName ?>" class="form-label mb-0"><?= lang('Globals.name') . " (" . $language->language_name . ")" ?></label>
			<input name="<?= $fieldName ?>" type="text" class="form-control" id="<?= $fieldName ?>" maxlength="64" value="<?php if (set_value($fieldName) != null) echo set_value($fieldName); elseif (!empty($characteristic)) echo $characteristic->$fieldName; ?>">
			<?= service('validation')->showError($fieldName) ?>
		</div>
	<?php endforeach; ?>
</div>
<input type="hidden" name="property_characteristic_id" value="<?= !empty($characteristic) ? $characteristic->property_characteristic_id : null ?>">
<?= csrf_field() ?>