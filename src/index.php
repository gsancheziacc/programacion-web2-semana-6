
<html lang="ES">
<head>
    <title>IACC - TAREA SEMANA 06</title>
	<?php include 'views/shared/head.php'; ?>
</head>
<body class="container">
	<section style="display: flex; flex-direction: row">
		<div style="display: flex; flex-shrink: 1; width: 100%">
			<h1>Listado de Autos</h1>
		</div>
		<div style="display: flex; flex-grow:0; width: 100%; align-items: center; justify-content: flex-end">
			<a class="btn btn-primary"
			   style="min-width: 125px; max-height: 40px"
			   data-bs-toggle="modal" data-bs-target="#addCarModal">Nuevo</a>
		</div>
	</section>
	<section style="height: 80vh">
        <?php include 'views/carList.php' ?>
	</section>

    <?php include 'views/addModal.php' ?>
	<?php include 'views/editModal.php' ?>
    <?php include 'views/deleteModal.php' ?>
</body>
<script>
	const editModal = document.getElementById('editModal');
	editModal.addEventListener('show.bs.modal', event => {
		const button = event.relatedTarget;
		const form = editModal.querySelector('form');
		form.querySelector('#txtId').value = button.getAttribute('data-id');
		form.querySelector('#txtEnrollment').value = button.getAttribute('data-enrollment');
		form.querySelector('#txtMotorNumber').value = button.getAttribute('data-motor-number');
		form.querySelector('#txtBodyworkNumber').value = button.getAttribute('data-bodywork-number');
		form.querySelector('#txtBrand').value = button.getAttribute('data-brand');
		form.querySelector('#txtModel').value = button.getAttribute('data-model');
		form.querySelector('#txtYear').value = button.getAttribute('data-year');
		form.querySelector('#txtColor').value = button.getAttribute('data-color');
		form.querySelector('#txtPrice').value = button.getAttribute('data-price');
	});

	const deleteModal = document.getElementById('deleteModal');
	deleteModal.addEventListener('show.bs.modal', event => {
		const button = event.relatedTarget;
		const form = deleteModal.querySelector('form');
		form.querySelector('#txtId').value = button.getAttribute('data-id');
	});
</script>
</html>
