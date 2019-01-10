<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Telephone</th>
			<th>Address</th>
			<th>Code Postal</th>
			<th>City</th>
			<th>Detail</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($addresses as $address){ ?>
		<tr>
			<td><?=$address['id'] ?></td>
			<td><?=$address['nom'] ?></td>
			<td><?=$address['telephone'] ?></td>
			<td><?=$address['address'] ?></td>
			<td><?=$address['code_postal'] ?></td>
			<td><?=$address['city'] ?></td>
			<td><a href="address_detail.php?add_id=<?=$address['id']?>">voir le detail..</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
