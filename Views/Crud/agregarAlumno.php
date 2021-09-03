<?php require_once 'Views/Assets/Layouts/header.php'?>

<div class="agregar_alumno">
    <h1>Agregar Alumno</h1>
    <form action="?class=Crud&function=validarAlumno" method="post">
        <label for="name">
            Name:
            <input type="text" name="nombre" value="<?php if(isset($_SESSION['nombre'])) echo $_SESSION['nombre'] ?>">
        </label>

        <label for="lastname">
            Last Name:
            <input type="text" name="lastname" value="<?php if(isset($_SESSION['lastname'])) echo $_SESSION['lastname'] ?>">
        </label>

        <label for="age">
            Age:
            <input type="text" name="age" value="<?php if(isset($_SESSION['age'])) echo $_SESSION['age'] ?>">
        </label>

        <label for="sex">
            Sex:
            <input type="text" name="sex" value="<?php if(isset($_SESSION['sex'])) echo $_SESSION['sex'] ?>">
        </label>

        <label for="fecha_nacimiento">
            Fecha Nacimiento:
            <input type="text" name="fechaNacimiento" value="<?php if(isset($_SESSION['fecha'])) echo $_SESSION['fecha'] ?>">
        </label>

        <input type="submit" name="submit" value="Agregar">
    </form>
</div>


<?php require_once 'Views/Assets/Layouts/footer.php'?>