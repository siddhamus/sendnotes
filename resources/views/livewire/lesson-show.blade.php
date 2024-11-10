<div class="container px-4 mx-auto">
    <h1 class="text-2xl font-bold">{{ $lesson->title }}</h1>
    <div class="flex">
        <div class="w-3/4">
            <video src="{{ $lesson->video_url }}" controls></video>
            <p>{{ $lesson->description }}</p>
        </div>
        <div class="w-1/4">
            <h2 class="text-xl">Table of Contents</h2>
            <ul>
                @foreach ($lesson->course->lessons as $lesson)
                    <li>
                        <a href="{{ route('lesson.show', $lesson) }}">{{ $lesson->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
