
       
    <h2>Bienvenu sur votre porfile monsieur <?=$user['prenom']?></h2>

    <table class="table">
        <thead>
			<tr>
				<th>ID</th>
				
				<th>First Name</th>
				<th>Expediteur</th>
				<th>Description</th>
				<th>Adress</th>
				<th>Postal Code</th>
				<th>City</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?=$user["user_id"]?></td> 
			 	
				<td><?=$user["prenom"]?></td> 

		<!--	<td><?=$user["nom"]?></td>
				<td><?=$user["sexe"]?></td>
				<td><?=$user["date_naissance"]?></td> 
				<td><?=$user["email"]?></td>
				<td><?=$user["telephone"]?></td>
				<td><?=$user["identifiant_id"]?></td>
				<td><?=$user["pays"]?></td>
				<td><?=$user["password"]?></td>		-->
				<td><?=$user["expediteur"]?></td>
				<td><?=$user["description"]?></td>
				<td><?=$user["address"]?></td>

				<td><?=$user["code_postal"]?></td>
				<td><?=$user["city"]?></td>

				<td><a href="update_user.php?id=<?=$user['user_id']?>"> <i class="far fa-edit"></i></a></td>
			</tr>

		</tbody>
	</table>