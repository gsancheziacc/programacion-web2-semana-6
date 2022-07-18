<div class="modal fade modal-lg" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar Auto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" action="controllers/CarController.php">
                <input type="hidden" name="txtId" id="txtId"/>
                <input type="hidden" name="action" value="update"/>
                <div class="modal-body">
                    <div class="row align-items-center">
                        <div class="col-sm-3"><label for="txtEnrollment">Matrícula</label></div>
                        <div class="col-sm-9"><input type="text" id="txtEnrollment" name="txtEnrollment" class="form-control" placeholder="Matrícula" required></div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-sm-3"><label for="txtMotorNumber">Serial Motor</label></div>
                        <div class="col-sm-9"><input type="text" id="txtMotorNumber" name="txtMotorNumber" class="form-control" placeholder="Serial Motor" required></div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-sm-3"><label for="txtBodyworkNumber">Serial Carrocería</label></div>
                        <div class="col-sm-9"><input type="text" id="txtBodyworkNumber" name="txtBodyworkNumber" class="form-control" placeholder="Serial Carrocería" required></div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-sm-3"><label for="txtBrand">Marca</label></div>
                        <div class="col-sm-9"><input type="text" id="txtBrand" name="txtBrand" class="form-control" placeholder="Marca" required></div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-sm-3"><label for="txtModel">Modelo</label></div>
                        <div class="col-sm-9"><input type="text" id="txtModel" name="txtModel" class="form-control" placeholder="Modelo" required></div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-sm-3"><label for="txtYear">Año</label></div>
                        <div class="col-sm-9"><input type="number" min="1800" max="2022" id="txtYear" name="txtYear" class="form-control" placeholder="Año" required></div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-sm-3"><label for="txtColor">Color</label></div>
                        <div class="col-sm-9"><input type="text" id="txtColor" name="txtColor" class="form-control" placeholder="Color" required></div>
                    </div>
                    <div class="row align-items-center mt-2">
                        <div class="col-sm-3"><label for="txtPrice">Precio</label></div>
                        <div class="col-sm-9"><input type="number" id="txtPrice" name="txtPrice" class="form-control" placeholder="Precio" required></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>