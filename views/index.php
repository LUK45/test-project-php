<h1>PHP Test Application</h1>

<div class="container">
	<div class="form-group row">
		<div class="col-sm-3 filter">
			<input name="name" input="text" id="city_filter" placeholder="filter by city" class="form-control"/>
		</div>
	</div>

	<div class="table-wrapper-scroll-y my-custom-scrollbar row">
		<table class="table table-bordered table-striped mb-0" id="table_users">
			<thead>
				<tr>
					<th class="col-sm-3">Name</th>
					<th class="col-sm-3">E-mail</th>
					<th class="col-sm-3">Phone number</th>
					<th class="col-sm-3">City</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($users as $user){?>
				<tr>
					<td><?php echo $user->getName()?></td>
					<td><?php echo $user->getEmail()?></td>
					<td><?php echo $user->getPhoneNumber()?></td>
					<td><?php echo $user->getCity()?></td>
				</tr>
				<?php }?>
			</tbody>
		</table>				
	</div>


	<form class="form-horizontal add-user" id="add-user">

		<div class="form-group row">
			<label for="name" class="col-sm-1 col-form-label">Name:</label>
			<div class="col-sm-3">
				<input name="name" input="text" id="name" required placeholder="Name" class="form-control"/>
				<div class="invalid-feedback"></div>
			</div>
			
		</div>

		<div class="form-group row">
			<label for="email" class="col-sm-1 col-form-label">E-mail:</label>
			<div class="col-sm-3">
				<input name="email" input="text" id="email" required placeholder="E-mail" class="form-control"/>
				<div class="invalid-feedback"></div>
			</div>
		</div>

		<div class="form-group row">
			<label for="email" class="col-sm-1 col-form-label">Phone:</label>
			<div class="col-sm-3">
				<input name="phone_number" input="text" id="phone_number" required placeholder="Phone number" class="form-control"/>
				<div class="invalid-feedback"></div>
			</div>
		</div>

		<div class="form-group row">
			<label for="city" class="col-sm-1 col-form-label">City:</label>
			<div class="col-sm-3">
				<input name="city" input="text" id="city" required placeholder="City" class="form-control"/>
				<div class="invalid-feedback"></div>
			</div>
		</div>
			
		<div class="form-group row">
			<div class="col-sm-10">
				<button class="btn btn-primary">Create new row</button>
				<div id="success_message" class="ajax_response">Created!</div>
			</div>
		</div>
	</form>
</div>
