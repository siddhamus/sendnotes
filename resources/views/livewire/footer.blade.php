<footer class="py-8 text-white bg-gray-800">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- About Section -->
            <div>
                <h3 class="mb-2 text-lg font-bold">About</h3>
                <p class="text-sm">
 Welcome to the world of resourceful nerds, where your curiosity to find multiple classroom solutions can meet its resolution. We are a team of zealous educators who are attempting to make learning for our students more adaptive and intriguing. 
For the simple reason learners see English with a ‘wing it’ approach, sparked our fuel to guide learners with right approach towards the subject. Our comprehensive resources are made with an approach to make the navigation through them easier for all the stakeholders.
                </p>
            </div>
            <!-- Quick Links Section -->
            <div>
                <h3 class="mb-2 text-lg font-bold">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('courses') }}" class="hover:underline">Courses</a></li>
                    <li><a href="{{ route('resources') }}" class="hover:underline">Resources</a></li>
                    <li><a href="{{ route('blog') }}" class="hover:underline">Blog</a></li>

                    <li><a href="{{ route('contact') }}" class="hover:underline">Contact Us</a></li>
                </ul>
            </div>
            <!-- Contact Section -->
            <div>
                <h3 class="mb-2 text-lg font-bold">Contact</h3>
                <ul class="space-y-2 text-sm">
                    <li>Email: info@sidhantchaudhary.com</li>
                    {{-- <li>Phone: +1 234 567 890</li> --}}
                    <li>Address: Gurugram, India</li>
                </ul>
            </div>
        </div>
        <div class="pt-4 mt-8 text-sm text-center border-t border-gray-700">
            &copy; 2024 Sidhant Chaudhary. All rights reserved.
        </div>
    </div>
</footer>
