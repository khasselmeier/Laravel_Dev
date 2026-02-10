<x-layout>
    <x-slot:heading>
        Help Someone Quit Their Job
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($quitJobs as $quitJob)
            <a href="/quitjobs/{{ $quitJob->id }}" class="block px-4 py-6 border border-gray-200 rounded-lg">

                <div class="font-bold text-blue-500 text-sm">
                    {{ $quitJob->user->first_name ?? $quitJob->user->last_name ?? 'Anonymous' }}
                </div>

                <div>
                    <strong>{{ $quitJob->title }}</strong>
                </div>

                <div>
                    Why I'm Quitting: {{ $quitJob->description }}
                </div>

                <div>
                    Your Role: {{ $quitJob->job_description }}
                </div>

                <div>
                    Your Pay: ${{ $quitJob->salary }} USD
                </div>
            </a>
        @endforeach

        <div>
            {{ $quitJobs->links() }}
        </div>
    </div>
</x-layout>
