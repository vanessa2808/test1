<div id="add">
	<form action="admin/users/add_users">
		@csrf
		<p> Name:
			<input type="text" name="name">
		</p>
		<p> Password:
			<input type="password" name="password">
		</p>
	</form>
</div>