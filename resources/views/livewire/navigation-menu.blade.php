<div>
    @auth
        @if (auth()->user()->hasRole('admin'))
            @livewire('navigation.admin-menu')
        @elseif(auth()->user()->hasRole('instructor'))
            @livewire('navigation.instructor-menu')
        @elseif(auth()->user()->hasRole('student'))
            @livewire('navigation.student-menu')
        @endif
    @else
        @livewire('navigation.guest-menu')
    @endauth
</div>
