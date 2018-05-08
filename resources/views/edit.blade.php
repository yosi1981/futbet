<form method="POST" v-on:submit.prevent="updatePais(fillPais.id)">
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4>
					Editar
				</h4>
			</div>
			<div class="modal-body">
				<label for="pais">Actualizar Pais</label>
				<input type="text" name="pais" class="form-control" v-model="fillPais.nombre">
				<span v-for="error in errors" class="text-danger"> @{{ error }}</span>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Actualizar">
			</div>
		</div>
	</div>
</div>
</form>
