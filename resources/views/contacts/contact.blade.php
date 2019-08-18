@extends('layouts.app', ['title' => 'Contact'])


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 my-4">
				<h2>Get In Touch</h2>
				<p class="text-muted">If you having trouble with this service, please <a href="mailto:mercuriseries@gmail.com">ask for help</a>.</p>

				<form action="{{ route('contact_path') }}" method="POST" novalidate>
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" id="name" required="required">
						<div class="invalid-feedback">
						{!! $errors->first('name', '<span class="help-block">:message</span>') !!}</div>
					</div>
					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" id="email" required="required">
						<div class="invalid-feedback">
						{!! $errors->first('email', '<span class="help-block">:message</span>') !!}
					</div>

					</div>
					<div class="form-group ">
						<label for="message" class="control-label sr-only">Message</label>
						<textarea class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message" id="message" cols="30" rows="10"></textarea>
						<div class="invalid-feedback">
						{!! $errors->first('message', '<span class="help-block">:message</span>') !!}
					</div>

					</div>
					<div class="form-group">
						<button class="btn btn-secondary btn-block" type="submit">Submit Enquiry&raquo;</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@stop