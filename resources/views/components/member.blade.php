<!-- Team Members Section -->
<div class="container mx-auto py-16 px-4">
    <div class="text-center mb-16">
        <p class="text-lg text-blue-400">Our</p>
        <h2 class="text-3xl font-bold text-gray-900">Team Members</h2>
        <p class="text-gray-600 mt-4">Meet our talented team of professionals</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach($teammembers as $member)
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm transition-all duration-300 hover:shadow-md hover:-translate-y-2">
                <div class="relative overflow-hidden h-64">
                    <img 
                        src="{{ asset('storage/' . $member->image) }}" 
                        alt="{{ $member->name }}" 
                        class="w-full h-full object-cover object-center transition-transform duration-500 hover:scale-105"
                    >
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-1">{{ $member->name }}</h3>
                    <p class="text-blue-500 mb-3">{{ $member->position }}</p>
                    <p class="text-gray-600">{{ $member->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>