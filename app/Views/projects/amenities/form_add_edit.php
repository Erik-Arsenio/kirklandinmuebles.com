<div class="row">
	<?php foreach ($getLanguages as $language): ?>
		<?php $fieldName = "project_amenity_name_{$language->language_abr}"; ?>
		<div class="col-12 mb-3">
			<label for="<?= $fieldName ?>" class="form-label mb-0"><?= lang('Globals.name') . " (" . $language->language_name . ")" ?></label>
			<input name="<?= $fieldName ?>" type="text" class="form-control" id="<?= $fieldName ?>" maxlength="64" value="<?php if (set_value($fieldName) != null) echo set_value($fieldName); elseif (!empty($amenity)) echo $amenity->$fieldName; ?>">
			<?= service('validation')->showError($fieldName) ?>
		</div>
	<?php endforeach; ?>
</div>
<input type="hidden" name="project_amenity_id" value="<?= !empty($amenity) ? $amenity->project_amenity_id : null ?>">
<?= csrf_field() ?>