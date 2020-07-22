<?php echo view('templates/header');?>
<table  class="table">
	<tr>
		<th>Codigo</th>
		<th>Username</th>
		<th>Email</th>
	</tr>
	<?php foreach($users as $user) { ?>
	<tr>
		<td><?php echo $user->id; ?></td>
		<td><?php echo $user->username; ?></td>
		<td><?php echo $user->email; ?></td>
	</tr>
	<?php } ?>
</table>
<?php echo view('templates/footer');?>