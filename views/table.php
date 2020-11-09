<?php foreach($users as $user){?>
<tr>
	<td><?php echo $user->getName()?></td>
	<td><?php echo $user->getEmail()?></td>
	<td><?php echo $user->getPhoneNumber()?></td>
	<td><?php echo $user->getCity()?></td>
</tr>
<?php }?>
