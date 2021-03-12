<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if (session('status'))
                        <div class="rounded bg-green-400 text-green-800 p-1">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form 
                        action="{{ route('posts.store') }}" 
                        method="post"
                        encType="multipart/form-data">
                        <div class="flex flex-col my-5">
                            <label class="text-xl my-2">Title *</label>
                            <input class="rounded border-gray-400" type="text" name="title" required>
                        </div>
                        <div class="my-5 flex justify-around">
                            <label class="text-xl my-2">Image</label>
                            <input class="text-xl" type="file" name="file">
                        </div>
                        <div class="my-5 flex flex-col">
                            <label class="text-xl my-2">Content *</label>
                            <textarea class="rounded border-gray-400" name="body" rows="6" required></textarea>
                        </div>
                        <div class="my-5 flex flex-col">
                            <label class="text-xl my-2">Embeded Content</label>
                            <textarea class="rounded border-gray-400" name="iframe"></textarea>
                        </div> 
                        <div class="my-5 flex justify-around">
                            @csrf
                            <input class="bg-blue-400 rounded text-white p-1 text-xl" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
