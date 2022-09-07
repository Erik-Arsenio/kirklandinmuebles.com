<footer class="py-2">
	<div class="row align-items-center g-0">
		<div class="col-6 text-center text-start">
			<?= !empty($pager) ? $pager->links() : null ?>
		</div>
		<div class="col-6 text-end text-muted">
			<?= $itemStart . " - " . $itemEnd . " " . lang('Globals.of') . " " . $totalRows . " " . lang('Globals.items') ?>
		</div>
	</div>
</footer>