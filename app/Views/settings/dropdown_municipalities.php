<?php if (count($getMunicipalities) > 0) : ?>
	<option value=""><?= lang('Globals.select') ?></option>
	<?php foreach ($getMunicipalities as $municipality) : ?>
		<option value="<?= $municipality->municipality_id ?>"<?php if (set_value('municipality_id') == $municipality->municipality_id) echo ' selected'; ?>><?= $municipality->municipality_name ?></option>
	<?php endforeach; ?>
<?php endif; ?>