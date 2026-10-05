<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <a href="{{ route('dashboard') }}"
               class="px-4 py-2 rounded-md text-sm font-semibold transition
                      {{ request()->routeIs('dashboard')
                          ? 'bg-indigo-600 text-white shadow-sm'
                          : 'text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                {{ __('SHS Dashboard') }}
            </a>
            <a href="{{ route('dashboard2') }}"
               class="px-4 py-2 rounded-md text-sm font-semibold transition
                      {{ request()->routeIs('dashboard2')
                          ? 'bg-indigo-600 text-white shadow-sm'
                          : 'text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                {{ __('College Dashboard') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- Stat cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4">
                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 flex items-center gap-4 border-l-4 border-indigo-500">
                    <div class="p-3 rounded-full bg-indigo-100 dark:bg-indigo-900/40 text-indigo-600 dark:text-indigo-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">Total</p>
                        <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $details->total() }}</p>
                    </div>
                </div>

               <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-rose-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">AB-ENG</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $abeng }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-amber-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">ACT</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $act }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-lime-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BEED</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $beed }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-emerald-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BSBA-HRM</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $bsbahrm }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-teal-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BSCS</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $bscs }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-cyan-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BSED</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $bsed }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-orange-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BSHM</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $bshm }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-indigo-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BSBA-MM</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $bsba_mm }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-fuchsia-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BSPSY</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $bspsy }}</p>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-5 border-l-4 border-sky-500">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">BSTM</p>
                    <p class="text-2xl font-bold text-gray-900 dark:text-gray-100">{{ $bstm }}</p>
                </div>

            </div>

            {{-- Table card --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                {{-- Card header: title + search --}}
                <div class="p-6 border-b border-gray-200 dark:border-gray-700 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Student Submissions</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">College applicants</p>
                    </div>

                    <form method="GET" action="{{ route('dashboard2') }}" class="relative w-full sm:w-72">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                        </span>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, program, email..."
                            class="w-full pl-10 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm text-sm">
                    </form>
                </div>

                {{-- Table --}}
                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left">
                        <thead class="bg-gray-50 dark:bg-gray-700/60 text-gray-600 dark:text-gray-300 uppercase text-xs tracking-wider">
                            <tr>
                                <th class="px-6 py-3">Student</th>
                                <th class="px-6 py-3">Program</th>
                                <th class="px-6 py-3">Contact</th>
                                <th class="px-6 py-3">Email</th>
                                <th class="px-6 py-3 text-center">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse ($details as $detail)
                                @php
                                    $initials = strtoupper(substr($detail->first_name, 0, 1) . substr($detail->last_name, 0, 1));
                                    $fullName = trim($detail->first_name . ' ' . $detail->middle_name . ' ' . $detail->last_name);

                                    $badge = match ($detail->preferred_strand) {
                                        'AB-ENG'   => 'bg-rose-100 text-rose-700 dark:bg-rose-900/40 dark:text-rose-300',
                                        'ACT'      => 'bg-amber-100 text-amber-700 dark:bg-amber-900/40 dark:text-amber-300',
                                        'BEED'     => 'bg-lime-100 text-lime-700 dark:bg-lime-900/40 dark:text-lime-300',
                                        'BSBA-HRM' => 'bg-emerald-100 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-300',
                                        'BSCS'     => 'bg-teal-100 text-teal-700 dark:bg-teal-900/40 dark:text-teal-300',
                                        'BSED'     => 'bg-cyan-100 text-cyan-700 dark:bg-cyan-900/40 dark:text-cyan-300',
                                        'BSHM'     => 'bg-orange-100 text-orange-700 dark:bg-orange-900/40 dark:text-orange-300',
                                        'BSBA-MM'     => 'bg-indigo-100 text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-300',
                                        'BSPSY'    => 'bg-fuchsia-100 text-fuchsia-700 dark:bg-fuchsia-900/40 dark:text-fuchsia-300',
                                        'BSTM'     => 'bg-sky-100 text-sky-700 dark:bg-sky-900/40 dark:text-sky-300',
                                        default    => 'bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300',
                                    };
                                @endphp

                                <tr class="odd:bg-white even:bg-gray-50/60 dark:odd:bg-gray-800 dark:even:bg-gray-800/60 hover:bg-indigo-50/60 dark:hover:bg-gray-700/50 transition">

                                    {{-- Student (avatar + name) --}}
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="flex items-center justify-center w-10 h-10 rounded-full bg-indigo-100 dark:bg-indigo-900/40 text-indigo-700 dark:text-indigo-300 font-semibold text-sm">
                                                {{ $initials }}
                                            </div>
                                            <div class="font-medium text-gray-900 dark:text-gray-100">
                                                {{ $fullName }}
                                            </div>
                                        </div>
                                    </td>

                                    <td class="px-6 py-4">
                                        <span class="inline-flex px-2.5 py-1 rounded-full text-xs font-semibold {{ $badge }}">
                                            {{ $detail->preferred_strand }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-4 text-gray-700 dark:text-gray-300 whitespace-nowrap">{{ $detail->contact_number }}</td>
                                    <td class="px-6 py-4 text-gray-700 dark:text-gray-300">{{ $detail->email }}</td>

                                    {{-- Actions --}}
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-center gap-1">
                                            {{-- view --}}
                                            <a href="#" title="View"
                                               class="p-2 rounded-md text-gray-500 hover:text-indigo-600 hover:bg-indigo-50 dark:hover:bg-gray-700 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                            </a>

                                            {{-- edit --}}
                                            <a href="#" title="Edit"
                                               class="p-2 rounded-md text-gray-500 hover:text-yellow-600 hover:bg-yellow-50 dark:hover:bg-gray-700 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                                </svg>
                                            </a>

                                            {{-- delete --}}
                                            <a href="#" title="Delete"
                                               class="p-2 rounded-md text-gray-500 hover:text-red-600 hover:bg-red-50 dark:hover:bg-gray-700 transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-12 text-center text-gray-500 dark:text-gray-400">
                                        @if (request('search'))
                                            Walang nahanap para sa "<strong>{{ request('search') }}</strong>".
                                        @else
                                            Wala pang submissions.
                                        @endif
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Footer --}}
                <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 text-sm text-gray-500 dark:text-gray-400">
                    Total: {{ $details->total() }} {{ Str::plural('submission', $details->total()) }}
                </div>
                <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700">
                    {{ $details->links() }}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>