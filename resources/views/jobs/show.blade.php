<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot>
    <h2 class="font-bold text-lg">{{ $job->title }}</h2>
    <p>
        this job pays $ {{ $job->salary  }} per year.
    </p>
    @can('edit', $job)
        <p class="mt-6">
            <x-button  href="{{ route('jobs.edit', $job->id)}}">Edit Job</x-button>
        </p>
    @endcan

</x-layout>
