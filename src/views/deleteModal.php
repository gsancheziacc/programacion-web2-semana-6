<div class="modal fade modal-lg" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="controllers/CarController.php">
                <input type="hidden" name="txtId" id="txtId"/>
                <input type="hidden" name="action" value="delete"/>
                <div class="modal-body">
                    <p>¿Está seguro que desea eliminar el registro del auto de matrícula?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>