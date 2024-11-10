<div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
    <div
        class="grid items-start max-w-2xl grid-cols-1 grid-rows-1 mx-auto gap-x-8 gap-y-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <?= print $courses ?>
        {{-- @foreach ($courses as $course)
            <div class="p-6 bg-white rounded-lg shadow-md ring-1 ring-gray-900/5">
                <h2 class="text-xl font-semibold text-gray-900">{{ $course->title }}</h2>
                <p class="mt-4 text-gray-600">{{ $course->description }}</p>
                <p class="mt-2 text-gray-800">Price: ${{ $course->price }}</p>
                <p class="mt-2 text-gray-800">Instructor: {{ $course->instructor->name }}</p>
                <p class="mt-2 text-gray-800">Category: {{ $course->category }}</p>
                <a href="{{ route('courses.show', $course->id) }}"
                    class="inline-block mt-4 text-indigo-600 hover:text-indigo-900">View Details</a>
            </div>
        @endforeach --}}
    </div>
</div>
