<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h3 class="text-lg font-semibold mb-4">Student Submissions</h3>

                    <div class="overflow-x-auto">

                        @foreach ($details as $detail)
                            
                        
                        <table class="min-w-full text-sm text-left border border-gray-200 dark:border-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200 uppercase text-xs">
                                <tr>
                                    <th class="px-4 py-3">Current Grade Level</th>
                                    <th class="px-4 py-3">Incoming Grade Level</th>
                                    <th class="px-4 py-3">First Name</th>
                                    <th class="px-4 py-3">Middle Name</th>
                                    <th class="px-4 py-3">Last Name</th>
                                    <th class="px-4 py-3">Preferred Strand</th>
                                    <th class="px-4 py-3">Contact Number</th>
                                    <th class="px-4 py-3">Email</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                                    <td class="px-4 py-3">{{ $detail->current_grade_level }}</td>
                                    <td class="px-4 py-3">{{ $detail->incoming_grade_level }}</td>
                                    <td class="px-4 py-3">{{ $detail->first_name }}</td>
                                    <td class="px-4 py-3">{{ $detail->middle_name }}</td>
                                    <td class="px-4 py-3">{{ $detail->last_name }}</td>
                                    <td class="px-4 py-3">{{ $detail->preferred_strand }}</td>
                                    <td class="px-4 py-3">{{ $detail->contact_number }}</td>
                                    <td class="px-4 py-3">{{ $detail->email }}</td>
                                </tr>
                               
                            </tbody>
                        </table>

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>