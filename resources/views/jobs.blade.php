<x-layout>
	<x-slot:heading>Job Listing</x-slot:heading>

	<div class="space-y-4">
		@foreach($jobs as $job)
			<a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
				<strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per year
			</a>
		@endforeach
	</div>
</x-layout>