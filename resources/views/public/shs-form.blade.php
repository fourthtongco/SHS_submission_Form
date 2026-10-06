<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SHS Inquiry Form</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-[#eef1f8] min-h-screen">

    <div class="max-w-2xl mx-auto px-4 py-8 sm:py-12">

        {{-- Top color bar + title card --}}
        <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-4">
            <div class="h-3 bg-[#1d4596]"></div>
            <div class="p-6 sm:p-8">
                <h1 class="text-2xl font-bold text-gray-900">Senior High School Inquiry Form</h1>
                <p class="mt-2 text-sm text-gray-600 leading-relaxed">
                    Thank you for visiting our school! Please fill out this short form so we can reach out
                    with more information about our Senior High School programs.
                </p>
                <div class="mt-4 text-xs text-[#b9870a]">* Required</div>
            </div>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg p-4 mb-4 text-sm">
                <p class="font-semibold mb-1">Please fix the following:</p>
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-lg p-4 mb-4 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <form action="/form_submission" method="POST">
            @csrf
            <input type="hidden" name="grade_level_code" value="1">

            {{-- Current grade level --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <label for="current_grade_level" class="block font-medium text-gray-900">
                    Current Grade Level <span class="text-[#b9870a]">*</span>
                </label>
                <select id="current_grade_level" name="current_grade_level" required
                    class="mt-3 block w-full border-0 border-b-2 border-gray-300 focus:border-[#1d4596] focus:ring-0 px-0 py-2 bg-transparent">
                    <option value="">Choose</option>
                    <option>Grade 10</option>
                    <option>Grade 11</option>
                </select>
            </div>

            {{-- Incoming grade level --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <label for="incoming_grade_level" class="block font-medium text-gray-900">
                    Incoming Grade Level <span class="text-[#b9870a]">*</span>
                </label>
                <select id="incoming_grade_level" name="incoming_grade_level" required
                    class="mt-3 block w-full border-0 border-b-2 border-gray-300 focus:border-[#1d4596] focus:ring-0 px-0 py-2 bg-transparent">
                    <option value="">Choose</option>

                    <option>Grade 11</option>
                    <option>Grade 12</option>
                </select>
            </div>

            {{-- First name --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <label for="first_name" class="block font-medium text-gray-900">
                    First Name <span class="text-[#b9870a]">*</span>
                </label>
                <input id="first_name" name="first_name" type="text" required placeholder="Your answer"
                    class="mt-3 block w-full border-0 border-b-2 border-gray-300 focus:border-[#1d4596] focus:ring-0 px-0 py-2 bg-transparent placeholder-gray-400">
            </div>

            {{-- Middle name --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <label for="middle_name" class="block font-medium text-gray-900">
                    Middle Name
                </label>
                <input id="middle_name" name="middle_name" type="text" placeholder="Your answer"
                    class="mt-3 block w-full border-0 border-b-2 border-gray-300 focus:border-[#1d4596] focus:ring-0 px-0 py-2 bg-transparent placeholder-gray-400">
            </div>

            {{-- Last name --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <label for="last_name" class="block font-medium text-gray-900">
                    Last Name <span class="text-[#b9870a]">*</span>
                </label>
                <input id="last_name" name="last_name" type="text" required placeholder="Your answer"
                    class="mt-3 block w-full border-0 border-b-2 border-gray-300 focus:border-[#1d4596] focus:ring-0 px-0 py-2 bg-transparent placeholder-gray-400">
            </div>

            {{-- Preferred strand --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <label class="block font-medium text-gray-900 mb-3">
                    Preferred Strand <span class="text-[#b9870a]">*</span>
                </label>
                <div class="space-y-2">
                    @foreach (['STEM', 'BAE', 'ASSH', 'TECHPRO_ict', 'TECHPRO_ht'] as $strand)
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="radio" name="preferred_strand" value="{{ $strand }}" required
                                class="w-4 h-4 text-[#1d4596] border-gray-400 focus:ring-[#1d4596]">
                            <span class="text-gray-800 text-sm">{{ $strand }}</span>
                        </label>
                    @endforeach
                </div>
            </div>

            {{-- Contact number --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-4">
                <label for="contact_number" class="block font-medium text-gray-900">
                    Contact Number <span class="text-[#b9870a]">*</span>
                </label>
                <input id="contact_number" name="contact_number" type="tel" required placeholder="09XX XXX XXXX"
                    class="mt-3 block w-full border-0 border-b-2 border-gray-300 focus:border-[#1d4596] focus:ring-0 px-0 py-2 bg-transparent placeholder-gray-400">
            </div>

            {{-- Email --}}
            <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
                <label for="email" class="block font-medium text-gray-900">
                    Email Address <span class="text-[#b9870a]">*</span>
                </label>
                <input id="email" name="email" type="email" required placeholder="your@email.com"
                    class="mt-3 block w-full border-0 border-b-2 border-gray-300 focus:border-[#1d4596] focus:ring-0 px-0 py-2 bg-transparent placeholder-gray-400">
            </div>

            {{-- Submit --}}
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="inline-flex items-center px-6 py-2.5 bg-[#1d4596] border border-transparent rounded-md font-medium text-sm text-white hover:bg-[#163570] shadow-sm transition">
                    Submit
                </button>
                <button type="reset"
                    class="text-sm text-[#1d4596] hover:bg-[#eef1f8] px-4 py-2 rounded-md transition">
                    Clear form
                </button>
            </div>
        </form>

        <p class="text-center text-xs text-gray-400 mt-8">
            Never submit sensitive information through this form.
        </p>
    </div>

</body>
</html>