<x-layout>
    <x-slot:heading>
        Help Me Quit My Job
    </x-slot:heading>

    <form method="POST" action="/quitjobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Submit a Quit Job Request</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Tell us why you're quitting and what kind of help you're looking for.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <x-form-field>
                        <x-form-label for="title">Your Job Title</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Retail Manager" />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="description">Reason for Quitting</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="description" id="description" placeholder="Burnout, bad management, etc." />
                            <x-form-error name="description" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="job_description">What You Want Someone To Do</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="job_description" id="job_description" placeholder="Call my boss and resign dramatically" />
                            <x-form-error name="job_description" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Offered Pay</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$100 USD" />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/quitjobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Submit Request</x-form-button>
        </div>
    </form>
</x-layout>
