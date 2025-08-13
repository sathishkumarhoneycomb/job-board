<x-layout>
    <x-breadcrumbs class="mb-4" :links="[
    'Jobs' => route('jobs.index')
   ]" />

    @foreach ($jobs as $job)
        <x-job-card :job="$job" :showFullDesc="false">
            <div>
                <x-link-button :href="route('jobs.show', ['job' => $job->id])">
                    Show
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
