@extends("app")

@section("content")
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
             aria-hidden="true">
            <div
                class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Edit Post</h2>
        </div>
        <form action="{{route('blog.update', ['blog'=>$post->id])}}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div class="sm:col-span-2">
                    <label for="title" class="block text-sm/6 font-semibold text-gray-900">Title</label>
                    <div class="mt-2.5">
                        <input type="text" value="{{old('title', $post)}}" name="title" id="title"
                               class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                    </div>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="sm:col-span-2">
                    <label for="description" class="block text-sm/6 font-semibold text-gray-900">Description</label>
                    <div class="mt-2.5">
                        <input type="text" value="{{old('description', $post)}}" name="description" id="description"
                               class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="sm:col-span-2">
                    <label for="is_public" class="block text-sm/6 font-semibold text-gray-900">Public</label>
                    <div class="mt-2.5">

                        <input type="checkbox" value="1" name="is_public" id="is_public" {{old('is_public', $post)=='1' ? 'checked' : ''}} class="block rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                    </div>
                    @error('is_public')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


            </div>
            <div class="mt-10">
                <button type="submit"
                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Edit
                </button>
            </div>
        </form>
    </div>
@endsection
