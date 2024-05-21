
<body>
    
</body>
</html>
<div class="users-table">
                    <h2> Usuarios Registrados </h2>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Direccion</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row=mysqli_fetch_array($query)): ?>
                            <tr>
                                <th> <?= $row['id'] ?> </th>
                                <th> <?= $row['name'] ?> </th>
                                <th> <?= $row['lastname'] ?> </th>
                                <th> <?= $row['direccion'] ?> </th>
                                <th> <?= $row['celular'] ?> </th>
                                <th> <?= $row['email'] ?> </th>
            
                                <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit" >Editar</a></th>
                                <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete"> Eliminar</a></th>
                            </tr>
                            <?php endwhile; ?>
            
                        </tbody>
                    </table>
                </div>
