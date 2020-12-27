@props(['property'])

<div class="w-full sm:max-w-md mt-6  bg-white shadow-md overflow-hidden sm:rounded-lg">
    <!-- This is an example component -->
<div class="m-auto  max-w-xl">
    {{-- <div class="bg-white shadow-2xl" > --}}
        <div>
            <img src="{{$property->pictures[0]->url()}}">
        </div>
        <div class="px-4 py-2 mt-2 bg-white">
            <h2 class="font-bold text-2xl text-gray-800">{{$property->title}}</h2>
                <p class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
                    {{$property->description}}
                </p>
            <div class="user flex items-center -ml-3 mt-8 mb-4">
                <div class="user-logo">
                    <img class="w-10 h-10 sm:w-12 sm:h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1607789382281-1152591ec0da?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2000&q=80" alt="avatar">
                </div>
                    <a target="_blank" class="text-gray-500">{{$property->user->name}}</a>
            </div>
        </div>
    {{-- </div> --}}
</div>
</div>