<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('SHS Submission Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('edit', $detail->id)  }}" method="POST" class="space-y-6">
                       @csrf 
                       @method('PUT')
                        
                        {{-- Grade Levels --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="current_grade_level" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Current Grade Level
                                </label>
                                <select id="current_grade_level"
                                            name="current_grade_level"
                                            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">

                                        <option value="">Select grade level</option>

                                        <option value="Grade 11"
                                            @selected(old('current_grade_level', $detail->current_grade_level) == 'Grade 11')>
                                            Grade 11
                                        </option>

                                        <option value="Grade 12"
                                            @selected(old('current_grade_level', $detail->current_grade_level) == 'Grade 12')>
                                            Grade 12
                                        </option>

                                    </select>
                            </div>

                            <div>
                                <label for="incoming_grade_level" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Incoming Grade Level
                                </label>
                          
                                    <select id="incoming_grade_level"
                                            name="incoming_grade_level"
                                            class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">

                                        <option value="">Select grade level</option>

                                        <option value="Grade 11"
                                            @selected(old('incoming_grade_level', $detail->incoming_grade_level) == 'Grade 11')>
                                            Grade 11
                                        </option>

                                        <option value="Grade 12"
                                            @selected(old('incoming_grade_level', $detail->incoming_grade_level) == 'Grade 12')>
                                            Grade 12
                                        </option>

                                    </select>
                            </div>
                        </div>

                        {{-- Name --}}
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                            <div>
                                <label for="first_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    First Name
                                </label>
                                <input id="first_name" name="first_name" type="text" value="{{ $detail->first_name }}"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="middle_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Middle Name
                                </label>
                                <input id="middle_name" name="middle_name" type="text" value="{{ $detail->middle_name }}"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="last_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Last Name
                                </label>
                                <input id="last_name" name="last_name" type="text" value="{{ $detail->last_name }}"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>
                        </div>

                        {{-- Strand --}}
                        <div>
                            <label for="preferred_strand" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                Preferred Strand
                            </label>
                            <select id="preferred_strand" name="preferred_strand"
                                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="">Select a strand</option>

                                <option value="STEM"
                                            @selected(old('preferred_strand', $detail->preferred_strand) == 'STEM')>
                                           STEM
                                </option>

                                <option value="BAE"
                                            @selected(old('preferred_strand', $detail->preferred_strand) == 'BAE')>
                                            BAE
                                </option>   
                                <option value="ASSH"
                                            @selected(old('preferred_strand', $detail->preferred_strand) == 'ASSH')>
                                            ASSH
                                </option>
                                <option value="TECHPRO_ict"
                                            @selected(old('preferred_strand', $detail->preferred_strand) == 'TECHPRO_ict')>
                                            TECHPRO_ict
                                </option>
                                <option value="TECHPRO_ht"
                                            @selected(old('preferred_strand', $detail->preferred_strand) == 'TECHPRO_ht')>
                                            TECHPRO_ht
                                </option>
                            </select>
                        </div>

                        {{-- Contact --}}
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="contact_number" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Contact Number
                                </label>
                                <input id="contact_number" name="contact_number" type="tel"  value="{{ $detail->contact_number}}" 
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>

                            <div>
                                <label for="email" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                    Email
                                </label>
                                <input id="email" name="email" type="email" value="{{ $detail->email }}"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <input type="hidden" name="grade_level_code" value="1">
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="flex items-center justify-end gap-3">
                            {{-- <button type="reset"
                                class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Clear
                            </button> --}}

                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Submit
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>