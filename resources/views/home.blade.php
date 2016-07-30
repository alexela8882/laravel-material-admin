@extends('layouts.app')

@section('content')
<div id="content">
	<section>
		<div class="section-header">
			<h1 class="text-xxxxl text-light text-center">Welcome {{ Auth::user()->role == 1 ? 'Administrator' : 'User' }}!</h1>
		</div>
	</section>
</div>
@endsection