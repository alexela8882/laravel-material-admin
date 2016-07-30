@extends('layouts.app')

@section('content')
<div id="content">
	<section>
		<div class="section-header">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-primary text-xxxl">Dashboard</h2>
					<article class="margin-bottom-xxl">
						<p class="lead">Sample cards for dashboard</p>
					</article>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-head">
							<header>Chart 1</header>
							<div class="tools">
								<div class="btn-group">
									<a class="btn btn-icon-toggle btn-refresh">
										<i class="md md-refresh"></i>
									</a>
									<a class="btn btn-icon-toggle btn-collapse">
										<i class="fa fa-angle-down"></i>
									</a>
									<a class="btn btn-icon-toggle btn-close">
										<i class="md md-close"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							Chart
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card">
						<div class="card-head">
							<header>Chart 2</header>
							<div class="tools">
								<div class="btn-group">
									<a class="btn btn-icon-toggle btn-refresh">
										<i class="md md-refresh"></i>
									</a>
									<a class="btn btn-icon-toggle btn-collapse">
										<i class="fa fa-angle-down"></i>
									</a>
									<a class="btn btn-icon-toggle btn-close">
										<i class="md md-close"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							Chart goes here...
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection