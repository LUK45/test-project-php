<h1>PHP Test Application</h1>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>E-mail</th>
			<th>City</th>
		</tr>
	</thead>
	<tbody>
		<?foreach($users as $user){?>
		<tr>
			<td><?=$user->getName()?></td>
			<td><?=$user->getEmail()?></td>
			<td><?=$user->getCity()?></td>
		</tr>
		<?}?>
	</tbody>
</table>				

<form method="post" action="create.php" class="form-horizontal">

	<div class="form-group row">
		<label for="name" class="col-sm-1 col-form-label">Name:</label>
		<div class="col-sm-3">
			<input name="name" input="text" id="name" placeholder="Name" class="form-control"/>
		</div>
	</div>

	<div class="form-group row">
		<label for="email" class="col-sm-1 col-form-label">E-mail:</label>
		<div class="col-sm-3">
			<input name="email" input="text" id="email" placeholder="E-mail" class="form-control"/>
		</div>
	</div>

	<div class="form-group row">
		<label for="city" class="col-sm-1 col-form-label">City:</label>
		<div class="col-sm-3">
			<input name="city" input="text" id="city" placeholder="City" class="form-control"/>
		</div>
	</div>
		
	<div class="form-group row">
		<div class="col-sm-10">
			<button class="btn btn-primary">Create new row</button>
		</div>
	</div>
</form>
