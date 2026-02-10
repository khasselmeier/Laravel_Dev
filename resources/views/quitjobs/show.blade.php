<x-layout>
    <x-slot:heading>
        Quit Request
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $quitJob->title }}</h2>

    <p class="mt-2">
        Reason for Quitting: {{ $quitJob->description }}
    </p>

    <p class="mt-2">
        Your Role: {{ $quitJob->job_description }}
    </p>

    <p class="mt-2">
        Offered Pay: ${{ $quitJob->salary }} USD
    </p>

    <p class="mt-6">
        <x-button href="/quitjobs/{{ $quitJob->id }}/edit">Edit Request</x-button>
    </p>
</x-layout>
