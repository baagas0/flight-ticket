@extends('admin.layouts.app')
@section('title', 'Add Flight Schedule Data')
@section('content')
<div class="row">
	<div class="col-xl-8">
		<div class="card">
			<div class="card-body">
				{{-- <h4 class="card-title">Bootstrap Validation (Tooltips)</h4> --}}
				<form class="needs-validation" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Plane</label>
								<select class="custom-select">
									<option selected>Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<div class="valid-tooltip">
									Looks good!
								</div>
							</div>
						</div>
						<div class="form-group col-md-6">
							<label>Auto Close</label>
							<div class="input-group">
								<input type="datetime-local" class="form-control" data-provide="datepicker" data-date-format="dd M, yyyy H" data-date-autoclose="true">
								<div class="input-group-append">
									<span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
								</div>
							</div><!-- input-group -->
							<div class="valid-tooltip">
								Looks good!
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group position-relative">
								<label for="validationTooltip03">City</label>
								<input type="text" class="form-control" id="validationTooltip03" placeholder="City" required value="{{ Carbon\Carbon::parse('now') }}">
								<div class="invalid-tooltip">
									Please provide a valid city.
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group position-relative">
								<label for="validationTooltip04">State</label>
								<input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
								<div class="invalid-tooltip">
									Please provide a valid state.
								</div>
							</div>
						</div>
					</div>
					<button class="btn btn-primary" type="submit">Submit form</button>
				</form>
			</div>
		</div>
		<!-- end card -->
	</div> <!-- end col -->

	<div class="col-xl-4">
		<div class="card">
			<div class="card-body">

				<h4 class="card-title">Inline List</h4>
				<p class="card-title-desc">Remove a list’s bullets and apply some
					light <code class="highlighter-rouge">margin</code> with a combination
					of two classes, <code class="highlighter-rouge">.list-inline</code> and
					<code class="highlighter-rouge">.list-inline-item</code>.</p>

					<ul class="list-inline mb-0">
						<li class="list-inline-item">Lorem ipsum</li>
						<li class="list-inline-item">Phasellus iaculis</li>
						<li class="list-inline-item">Nulla volutpat</li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	@endsection
	@push('js')
	<script src="{{  asset('assets/admin/libs/select2/js/select2.min.js') }}"></script>
	<script src="{{  asset('assets/admin/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
	@endpush