<x-layout>
    @foreach ($jobs as $job)
        <x-card class="mb-4">
            <div class="mb-4 flex justify-between">
                <h2 class="text-lg font-medium">{{ $job->title }}</h2>
                <div class="text-slate-500">
                    ${{ number_format($job->salary) }}
                </div>
            </div>
            <div class="mb-4 flex items-center justify-between text-sm text-slate-500">
                <div class="flex space-x-4">
                    <div>Company Name</div>
                    <div>{{ $job->location }}</div>
                </div>
                <div class="flex space-x-1 text-xs">
                    <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
                    <x-tag>{{ $job->category }}</x-tag>
                </div>
            </div>
            <p class="mb-4 text-sm text-slate-500">
                {!! nl2br(e($job->description)) !!}
            </p>
            <div>
                <a href="{{route('jobs.show', $job)}}"
                   class="rounded-md border border-slate-300 bg-white px-2.5 py-1.5 text-center text-sm font-semibold text-black shadow-sm hover:bg-slate-100">
                    View
                </a>
            </div>
        </x-card>
    @endforeach
</x-layout>
