<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex justify-between">
            <p class="p-1">{{ __('Articles') }}</p>
            <a href="{{ route('posts.create') }}" class="bg-blue-400 rounded text-white p-1">Create</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-center">
                    <table class="table-fixed">
                        <thead>
                        <tr>
                            <th class="w-1/4">ID</th>
                            <th class="w-1/2">Title</th>
                            <th class="w-1/4" colspan="2">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a 
                                        class="bg-blue-400 rounded text-white p-1"
                                        href="{{ route('posts.edit', $post) }}">
                                        Editar
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('posts.destroy', $post)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input 
                                            class="bg-red-400 rounded text-white p-1"
                                            type="submit" 
                                            value="Eliminar"
                                            onclick=" return confirm('¿Desea Eliminar?')"
                                        >
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
