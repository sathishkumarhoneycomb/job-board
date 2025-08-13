<x-card class="mb-4">
    <div class="flex justify-between mb-4">
        <h3 class="text-lg font-medium">{{ $job->title }}</h3>
        <p class="text-slate-500 text-sm"> ${{ number_format($job->salary) }} </p>
    </div>
    <div class="flex justify-between items-center mb-4 text-sm">
        <div class="flex space-x-1">
            <p>Company Name: </p>
            <p>{{ $job->company }}</p>
        </div>
        <div class="flex space-x-1">
            <x-tag>{{ Str::ucfirst($job->experience) }}</x-tag>
            <x-tag>{{ $job->category }}</x-tag>
        </div>
    </div>
    <p class="text-slate-500 text-sm mb-4">
        {!! nl2br(e( $showFullDesc === true ? $job->description :  Str::limit($job->description, 300)  )) !!}
    </p>
    {{ $slot }}

</x-card>
