<div class="row">
	<div class="col">
		<h5><?= lang('Globals.amenities') ?></h5>
	</div>
	<div class="col text-end">
		<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEditModal" data-modal-title="<?= lang('Globals.add') ?>" data-uri-load-form="<?= base_url('projects/load_form_add_edit_amenity') ?>"><?= lang('Globals.add') ?></button>
	</div>
</div>
<table class="table">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col"><?= lang('Globals.name') . " (English)" ?></th>
			<th scope="col"><?= lang('Globals.name') . " (Español)" ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if ($getAmenities != null && count($getAmenities) > 0): ?>
			<?php foreach ($getAmenities as $amenity): ?>
				<tr>
					<td>
						<div class="dropdown position-static">
							<a href="javascript:void(0)" class="dropdown-toggle text-uppercase text-decoration-none position-relative d-block" role="button" id="<?= "dropdown-actions-{$amenity->project_amenity_id}" ?>" data-bs-toggle="dropdown" aria-expanded="false"><?= hash('adler32', $amenity->project_amenity_id) ?></a>
							<ul class="dropdown-menu" aria-labelledby="<?= "dropdown-actions-{$amenity->project_amenity_id}" ?>">
								<li>
									<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addEditModal" data-modal-title="<?= lang('Globals.modify') ?>" data-uri-load-form="<?= base_url('projects/load_form_add_edit_amenity') ?>" data-element-id="<?= $amenity->project_amenity_id ?>"><?= lang('Globals.modify') ?></a>
								</li>
							</ul>
						</div>
					</td>
					<td><?= $amenity->project_amenity_name_EN ?></td>
					<td><?= $amenity->project_amenity_name_ES ?></td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="3" class="text-center">
					<?= lang('Globals.text_3') ?>
				</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>
<div class="modal fade add-edit-modal" id="addEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addEditModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url('projects/add_edit_amenity') ?>" class="form-add-edit" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="addEditModalLabel"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang('Globals.close') ?>"></button>
				</div>
				<div class="modal-body form-content"></div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= lang('Globals.close') ?></button>
					<button type="submit" class="btn btn-primary"><?= lang('Globals.save') ?></button>
				</div>
			</form>
		</div>
	</div>
</div>