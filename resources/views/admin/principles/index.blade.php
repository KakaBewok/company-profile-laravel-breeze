<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Manage Principles') }}
            </h2>
            <a href="{{ route('admin.principles.create') }}"
                class="px-6 py-4 font-bold text-white bg-indigo-700 rounded-full">
                Add New
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex flex-col p-10 overflow-hidden bg-white shadow-sm sm:rounded-lg gap-y-5">

                @forelse ($principles as $principle)
                    <div class="flex flex-row items-center justify-between item-card">
                        <div class="flex flex-row items-center gap-x-3">
                            <img src="{{ Storage::url($principle->thumbnail) }}" alt="principle"
                                class="rounded-2xl object-cover w-[90px] h-[90px]">
                            <div class="flex flex-col">
                                <h3 class="text-xl font-bold text-indigo-950">{{ $principle->name }}</h3>
                            </div>
                        </div>
                        <div class="flex-col hidden md:flex">
                            <p class="text-sm text-slate-500">Date</p>
                            <h3 class="text-xl font-bold text-indigo-950">
                                {{ $principle->created_at }}</h3>
                        </div>
                        <div class="flex-row items-center hidden md:flex gap-x-3">
                            <a href="{{ route('admin.principles.edit', $principle) }}"
                                class="px-6 py-4 font-bold text-white bg-indigo-700 rounded-full">
                                Edit
                            </a>
                            <form action="{{ route('admin.principles.destroy', $principle) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-6 py-4 font-bold text-white bg-red-700 rounded-full">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>

                @empty
                    <p>Data not found.</p>
                @endforelse

            </div>
        </div>
    </div>
</x-app-layout>
