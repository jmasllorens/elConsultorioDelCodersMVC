<?php require_once("Components/Layout.php"); ?>

<body>
    <?php require_once("Components/Header.php"); ?>

    <main class="container text-center">

        <h2 class="text-center">Nueva Consulta</h2>

        <form action='?action=store' method="post">
            <input type="text" name="coder" required placeholder="Coder">
            <br>
            <input type="text" name="issue" required placeholder="Issue">
            <br>
            <br>
            <input type="submit" value="Crear">
            <input type="reset" value="Reset">
        </form>
    </main>

</body>