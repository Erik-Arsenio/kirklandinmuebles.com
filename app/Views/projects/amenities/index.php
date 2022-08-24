<div class="row">
	<div class="col">
		<h5><?= lang('Globals.amenities') ?></h5>
	</div>
	<div class="col text-end">
		<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEditModal" data-modal-title="<?= lang('Globals.add') ?>" data-uri-load-form="<?= base_url('projects/load_form_add_edit_amenity') ?>"><?= lang('Globals.add') ?></button>
	</div>
</div>
<div class="modal fade add-edit-modal" id="addEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addEditModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('projects/add_edit_amenity') ?>" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="addEditModalLabel"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang('Globals.close') ?>"></button>
				</div>
				<div class="modal-body form-content"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= lang('Globals.close') ?></button>
					<button type="button" class="btn btn-primary"><?= lang('Globals.save') ?></button>
				</div>
			</form>
		</div>
	</div>
</div>