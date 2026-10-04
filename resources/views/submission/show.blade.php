<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SHS Submission Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            {{-- Details card --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-4">
                        Academic Information
                    </h4>
                    <dl class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-5 mb-8">
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Current Grade Level</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $detail->current_grade_level }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Incoming Grade Level</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $detail->incoming_grade_level ?? '—' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Preferred Strand / Program</dt>
                            <dd>
                                <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold bg-indigo-100 text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-300">
                                    {{ $detail->preferred_strand }}
                                </span>
                            </dd>
                        </div>
                    </dl>

                    <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-4">
                        Personal Information
                    </h4>
                    <dl class="grid grid-cols-1 sm:grid-cols-3 gap-x-6 gap-y-5 mb-8">
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">First Name</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $detail->first_name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Middle Name</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $detail->middle_name ?? '—' }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Last Name</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $detail->last_name }}</dd>
                        </div>
                    </dl>

                    <h4 class="text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-4">
                        Contact Information
                    </h4>
                    <dl class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-5">
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Contact Number</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $detail->contact_number }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm text-gray-500 dark:text-gray-400">Email</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-gray-100">{{ $detail->email }}</dd>
                        </div>
                    </dl>

                </div>

                {{-- Footer actions --}}
                <div class="px-6 py-4 bg-gray-50 dark:bg-gray-900/40 border-t border-gray-200 dark:border-gray-700 flex justify-end gap-3">
                    {{-- <a href="{{ route('edit', $detail->id) }}"
                       class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                        Edit
                    </a> --}}
                    <form method="POST" action="{{ route('submissions.destroy', $detail) }}"
                          onsubmit="return confirm('Sigurado ka bang buburahin ito?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 transition">
                            Delete
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>