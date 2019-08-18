@extends('layouts.app', ['title' => 'Contact'])


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 my-4">
				<h2>Get In Touch</h2>
				<p class="text-muted">If you having trouble with this service, please <a href="mailto:mercuriseries@gmail.com">ask for help</a>.</p>

				<form action="#" method="POST">
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" class="form-control" name="email" id="email">
					</div>
					<div class="form-group">
						<label for="message" class="control-label sr-only">Message</label>
						<textarea class="form-control" name="message" id="message" cols="30" rows="10"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-secondary btn-block" type="submit">Submit Enquiry&raquo;</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop