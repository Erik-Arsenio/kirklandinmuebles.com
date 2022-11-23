<div class="row">
	<div class="col">
		<h5><?= lang('Globals.listing') ?></h5>
	</div>
	<div class="col text-end">
		<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addEditModal" data-modal-title="<?= lang('Globals.add') ?>" data-uri-load-form="<?= base_url('projects/load_form_add_edit_listing') ?>"><?= lang('Globals.add') ?></button>
	</div>
</div>
<table class="table">
	<thead>
		<tr>
			<th scope="col"><?= lang('Globals.code') ?></th>
			<th scope="col"><?= lang('Globals.name') ?></th>
			<th scope="col"><?= lang('Globals.city') ?></th>
			<th scope="col"><?= lang('Globals.state') ?></th>
			<th scope="col"><?= lang('Globals.municipality') ?></th>
			<th scope="col"><?= lang('Globals.mode') ?></th>
			<th scope="col" class="text-end"><?= lang('Globals.total') . " (" . lang('Globals.properties') . ")" ?></th>
			<th scope="col" class="text-end"><?= lang('Globals.total') . " (" . lang('Globals.characteristics') . ")" ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if ($getProjects != null && count($getProjects) > 0): ?>
			<?php foreach ($getProjects as $project): ?>
				<tr>
					<td>
						<div class="dropdown position-static">
							<a href="javascript:void(0)" class="dropdown-toggle text-uppercase text-decoration-none position-relative d-block" role="button" id="<?= "dropdown-actions-{$project->project_id}" ?>" data-bs-toggle="dropdown" aria-expanded="false"><?= $project->project_code ?></a>
							<ul class="dropdown-menu" aria-labelledby="<?= "dropdown-actions-{$project->project_id}" ?>">
								<li>
									<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#addEditModal" data-modal-title="<?= lang('Globals.modify') ?>" data-uri-load-form="<?= base_url('projects/load_form_add_edit_listing') ?>" data-element-id="<?= $project->project_id ?>"><?= lang('Globals.modify') ?></a>
								</li>
								<li>
									<a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteModal" data-modal-title="<?= lang('Globals.delete') ?>" data-uri-load-form="<?= base_url('projects/load_form_delete_listing') ?>" data-element-id="<?= $project->project_id ?>" data-element-name="<?= $project->project_name ?>" data-status-id="<?= $project->status_id ?>" data-menu-action="<?php if ($project->status_id == 1) echo lang('Globals.to disable'); else echo lang('Globals.enable'); ?>" ><?php if ($project->status_id == 1) echo lang('Globals.to disable'); else echo lang('Globals.enable'); ?></a>
								</li>
							</ul>
						</div>
					</td>
					<td><?= $project->project_name ?></td>
					<td><?= $project->city_name ?></td>
					<td><?= $project->state_name ?></td>
					<td><?= $project->municipality_name ?></td>
					<td><?= $project->$statusNameField ?></td>
					<td class="text-end"><?= $project->total_property ?></td>
					<td class="text-end"><?= $project->total_amenity ?></td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="6" class="text-center">
					<?= lang('Globals.text_3') ?>
				</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>
<?= $footer ?>
<div class="modal fade add-edit-modal" id="addEditModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addEditModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<form action="<?= base_url('projects/add_edit_listing') ?>" class="form-add-edit" method="POST">
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
<div class="modal fade delete-modal" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<form action="<?= base_url('projects/delete_listing') ?>" class="form-delete" method="POST">
				<div class="modal-header">
					<h5 class="modal-title" id="deleteModalLabel"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="<?= lang('Globals.close') ?>"></button>
				</div>
				<div class="modal-body content">
					<p>Está seguro de querer <span class="fs-5 fw-semibold" id="action_name"></span> el proyecto de <span class="fs-5 fw-semibold" id="project_name"></span></p>
					<p class="mt-1 action-unable">Esto eliminará todas las propiedades (lotes) asociadas a éste.</p>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?= lang('Globals.close') ?></button>
					<button type="submit" class="btn btn-danger" id="buttom_name"></button>
					<!-- <button type="submit" class="btn btn-danger" id="buttom_name"></button> -->
				</div>
				<input type="hidden" name="project_id" id="project_id">
				<input type="hidden" name="status_id" id="status_id">
			</form>
		</div>
	</div>
</div>
