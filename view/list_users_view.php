
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>Name</th>
            <th>Telephone</th>
            <th>Email Adress</th>
            <th>Detail</th>
            <th>Delete</th>
            <th>Edit</th>

        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user) {?>
        <tr>
            <td><?=$user['user_id']?></td>
            <td><?=$user['nom']?></td>
            <td><?=$user['prenom']?></td>
            <td><?=$user['telephone']?></td>
            <td><?=$user['email']?></td>
            <td><a href="detail_user.php?id=<?=$user['user_id']?>">voir le detail..</a></td>
            <td><a href="delete_user.php?id=<?=$user['user_id']?>" onClick="return confirm('Are you sure to delete this recrod?');"><i class="fas fa-trash"></i></a></td>
            <td><a href="update_user.php?id=<?=$user['user_id']?>"><i class="far fa-edit"></i></a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
    <a href="add_user.php">ajouter un Utilisateur </a>
