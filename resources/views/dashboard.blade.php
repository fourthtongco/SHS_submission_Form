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
                                    <td class="px-4 py-3">Grade 10</td>
                                    <td class="px-4 py-3">Grade 11</td>
                                    <td class="px-4 py-3">Juan</td>
                                    <td class="px-4 py-3">Santos</td>
                                    <td class="px-4 py-3">Dela Cruz</td>
                                    <td class="px-4 py-3">STEM</td>
                                    <td class="px-4 py-3">09171234567</td>
                                    <td class="px-4 py-3">juan@example.com</td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                                    <td class="px-4 py-3">Grade 10</td>
                                    <td class="px-4 py-3">Grade 11</td>
                                    <td class="px-4 py-3">Maria</td>
                                    <td class="px-4 py-3">Reyes</td>
                                    <td class="px-4 py-3">Garcia</td>
                                    <td class="px-4 py-3">ABM</td>
                                    <td class="px-4 py-3">09181234567</td>
                                    <td class="px-4 py-3">maria@example.com</td>
                                </tr>
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                                    <td class="px-4 py-3">Grade 11</td>
                                    <td class="px-4 py-3">Grade 12</td>
                                    <td class="px-4 py-3">Pedro</td>
                                    <td class="px-4 py-3">—</td>
                                    <td class="px-4 py-3">Bautista</td>
                                    <td class="px-4 py-3">HUMSS</td>
                                    <td class="px-4 py-3">09191234567</td>
                                    <td class="px-4 py-3">pedro@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>