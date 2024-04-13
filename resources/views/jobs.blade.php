<x-layout>
	<x-slot:heading>Job Listing</x-slot:heading>

	<ul>
		@foreach($jobs as $job)
			<a href="/jobs/">
				<li><strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year</li>
			</a>
		@endforeach
	</ul>
</x-layout>