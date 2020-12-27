<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Register Property') }}
        </h2>
    </x-slot>

    <div class="flex justify-center">
        <div class="w-full sm:max-w-lg mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <!--TODO: revert changes -->
            <form method="POST" action="{{ route('property.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div>
                    <x-label for="title" :value="__('Title')" />

                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                        required autofocus />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="type" :value="__('Type')" />

                    {{-- <x-input id="email" class="block mt-1 w-full" type="select" name="email" :value="old('email')" required /> --}}
                    <select id='type' name="type" class="block mt-1 w-full">
                        @forelse ($property_types as $type => $label)
                        <option value="{{$type}}">
                            {{$label}}
                        </option>
                        @empty
                        <option>
                            There is not any Type
                        </option>
                        @endforelse

                    </select>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="area" :value="__('Area')" />

                    <select id='area' name="area_id" class="block mt-1 w-full">
                        @forelse ($areas as $area)
                        <option value="{{$area->id}}">
                            {{$area->name}}
                        </option>
                        @empty
                        <option>
                            There is not any Area
                        </option>
                        @endforelse
                    </select>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="description" :value="__('Description')" />

                    <textarea id="description" class="block mt-1 w-full" name="description" required></textarea>
                </div>
                <div class="mt-4">
                    <x-label for="pictures" :value="__('Pictures')" />

                    <x-input id="pictures" class="block mt-1 w-full" type="file" accept="image/*" multiple
                        name="pictures[]" required></x-input>
                </div>

                <div class="flex items-center justify-end mt-4">


                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>