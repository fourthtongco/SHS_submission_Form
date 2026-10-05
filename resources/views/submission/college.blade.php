<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('College Submission Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Validation errors --}}
            @if ($errors->any())
                <div class="bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 text-red-700 dark:text-red-300 rounded-lg p-4">
                    <p class="font-semibold text-sm mb-2">Please fix the following:</p>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Success message --}}
            @if (session('success'))
                <div class="bg-emerald-50 dark:bg-emerald-900/30 border border-emerald-200 dark:border-emerald-800 text-emerald-700 dark:text-emerald-300 rounded-lg p-4 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="h-2 bg-indigo-600"></div>

                <div class="p-6 sm:p-8">

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">College Applicant Details</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Fill out all fields below to submit your application.</p>
                    </div>

                    <form action="/form_submission" method="POST" class="space-y-8">
                        @csrf

                        <input type="hidden" name="grade_level_code" value="2">

                        {{-- Academic Information --}}
                        <div>
                            <h4 class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 0 0-.491 6.347A48.627 48.627 0 0 1 12 20.904a48.627 48.627 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.57 50.57 0 0 0-2.658-.813A59.905 59.905 0 0 1 12 3.493a59.902 59.902 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                </svg>
                                Academic Information
                            </h4>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="current_grade_level" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        Current Year
                                    </label>
                                    <select id="current_grade_level" name="current_grade_level"
                                        class="mt-1 block w-full border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option value="">Select year level</option>
                                        <option>Freshman</option>
                                        <option>First Year</option>
                                        <option>Second Year</option>
                                        <option>Third Year</option>
                                        <option>Fourth Year</option>
                                        <option>Graduating</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="incoming_grade_level" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        Incoming Year Level
                                    </label>
                                    <select id="incoming_grade_level" name="incoming_grade_level"
                                        class="mt-1 block w-full border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                        <option value="">Select year level</option>
                                        <option>Second Year</option>
                                        <option>Third Year</option>
                                        <option>Fourth Year</option>
                                        <option>Graduating</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-6">
                                <label for="preferred_strand" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Preferred Program
                                </label>
                                <select id="preferred_strand" name="preferred_strand"
                                    class="mt-1 block w-full sm:w-1/2 border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="">Select a program</option>
                                    <option>BSTM</option>
                                    <option>BSCS</option>
                                    <option>BSHM</option>
                                    <option>BSBA</option>
                                </select>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 dark:border-gray-700"></div>

                        {{-- Personal Information --}}
                        <div>
                            <h4 class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                                Personal Information
                            </h4>

                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                                <div>
                                    <label for="first_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        First Name
                                    </label>
                                    <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}"
                                        class="mt-1 block w-full border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div>

                                <div>
                                    <label for="middle_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        Middle Name
                                    </label>
                                    <input id="middle_name" name="middle_name" type="text" value="{{ old('middle_name') }}"
                                        class="mt-1 block w-full border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div>

                                <div>
                                    <label for="last_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        Last Name
                                    </label>
                                    <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}"
                                        class="mt-1 block w-full border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-100 dark:border-gray-700"></div>

                        {{-- Contact Information --}}
                        <div>
                            <h4 class="flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-gray-500 dark:text-gray-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                </svg>
                                Contact Information
                            </h4>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="contact_number" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        Contact Number
                                    </label>
                                    <input id="contact_number" name="contact_number" type="tel" value="{{ old('contact_number') }}" placeholder="09XX XXX XXXX"
                                        class="mt-1 block w-full border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div>

                                <div>
                                    <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                        Email
                                    </label>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="juan@example.com"
                                        class="mt-1 block w-full border-black dark:border-black dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="flex items-center justify-end gap-3 pt-2">
                            <button type="reset"
                                class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border