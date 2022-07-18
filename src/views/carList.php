<?php
require_once 'models/CarModel.php';
$cars = getAllCars();
?>
<table class="table table-striped mt-3">
    <thead>
    <tr>
        <th>Matrícula</th>
        <th>Serial Motor</th>
        <th>Serial Carrocería</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Año</th>
        <th>Color</th>
        <th>Precio</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($cars as $car): ?>
        <tr>
            <td class="align-middle"><?php echo $car->getEnrollment(); ?></td>
            <td class="align-middle"><?php echo $car->getMotorNumber(); ?></td>
            <td class="align-middle"><?php echo $car->getBodyworkNumber(); ?></td>
            <td class="align-middle"><?php echo $car->getBrand(); ?></td>
            <td class="align-middle"><?php echo $car->getModel(); ?></td>
            <td class="align-middle"><?php echo $car->getYear(); ?></td>
            <td class="align-middle"><?php echo $car->getColor(); ?></td>
            <td class="align-middle"><?php echo $car->getPrice(); ?></td>
            <td>
                <a class="btn btn-primary"
                   style="min-width: 75px; max-height: 35px"
                   data-bs-toggle="modal" data-bs-target="#editModal"
                   data-id="<?php echo $car->getId(); ?>"
                   data-enrollment="<?php echo $car->getEnrollment(); ?>"
                   data-motor-number="<?php echo $car->getMotorNumber(); ?>"
                   data-bodywork-number="<?php echo $car->getBodyworkNumber(); ?>"
                   data-brand="<?php echo $car->getBrand(); ?>"
                   data-model="<?php echo $car->getModel(); ?>"
                   data-year="<?php echo $car->getYear(); ?>"
                   data-color="<?php echo $car->getColor(); ?>"
                   data-price="<?php echo $car->getPrice(); ?>">Editar</a>
                <a class="btn btn-danger"
                   style="min-width: 75px; max-height: 35px"
                   data-bs-toggle="modal" data-bs-target="#deleteModal"
                   data-id="<?php echo $car->getId(); ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
