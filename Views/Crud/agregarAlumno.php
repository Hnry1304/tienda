<?php require_once 'Views/Assets/Layouts/header.php'?>

<div class="agregar_alumno">
    <a href="?class=Crud&function=vistaCrud" class="back_Crud">Regresar Al Crud</a>
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

        <label for="sex">
            Sex:
            <input type="text" name="sex" value="<?php if(isset($_SESSION['sex'])) echo $_SESSION['sex'] ?>">
        </label>

        <label for="fecha_nacimiento">
            Fecha Nacimiento:
            <br>
            Day:
            <input type="text" name="day" value="<?php if(isset($_SESSION['day'])) echo $_SESSION['day'] ?>">
            Month:
            <input type="text" name="month" value="<?php if(isset($_SESSION['month'])) echo $_SESSION['month'] ?>">
            Anio:
            <input type="text" name="year" value="<?php if(isset($_SESSION['year'])) echo $_SESSION['year'] ?>">
        </label>

        <input type="submit" name="submit" value="Agregar">
    </form>

</div>

<?php require_once 'Views/Assets/Layouts/footer.php'?>