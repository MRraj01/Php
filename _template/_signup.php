<main class="form-signup">
	<form method="post" action="test.php">
		
		<h1 class="h3 mb-3 fw-normal">Please sign up</h1>



		<div class="form-floating">
			<input name="usr" type="text" class="form-control" id="floatingInputUsername"
				placeholder="name@example.com">
			<label for="floatingInput">User name</label>
		</div>
		<div class="form-floating">
			<input name="phone" type="text" class="form-control" id="floatingInputphone" placeholder="phone">
			<label for="floatingInput">phone number</label>
		</div>

		<div class="form-floating">
			<input name="name-add" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="pss-add" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="w-100 btn btn-lg btn-primary hvr-bounce-to-top" type=" submit">Sign up</button>
	</form>
</main>
