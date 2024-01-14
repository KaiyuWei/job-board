<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]"/>

    <x-card class="mb-4 text-sm">
        <form action="{{route('jobs.index')}}" method="GET">
            @csrf
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="" placeholder="Search for any text"/>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="" placeholder="From"/>
                        <x-text-input name="max-salary" value="" placeholder="To"/>
                    </div>
                </div>
                <div>3</div>
                <div>4</div>
            </div>
            <button class="w-full">Filter</button>
        </form>
    </x-card>

    @foreach ($jobs as $job)
        <x-job-card class="mb-4" :job="$job">
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    View
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
