@extends("app")

@section("content")
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto w-full px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">From the
                    blog</h2>
                <p class="mt-2 text-lg/8 text-gray-600">Learn how to grow your business with our expert advice.</p>
            </div>
            <div
                class="mx-auto mt-10 grid w-full grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16">
                <article class="flex w-full flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                           class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="flex flex-row flex-wrap w-full">
                        @foreach ($posts as $post)
                            <div class="mt-8 flex items-center w-1/3 border border-gray-950">
                                <div class="text-sm/6  ">
                                    <p class="font-semibold text-gray-900">
                                        <a href="{{route('blog.show', ['blog'=>$post->id])}}">
                                            <span class=""></span>
                                            {{$post->title}}
                                        </a>
                                    </p>
                                    <p class="text-gray-600">{{$post->description}}</p>

                                    <a href="{{route('blog.edit', ['blog'=>$post->id])}}">Edit</a>
                                    <form action="{{route('blog.destroy', ['blog'=>$post->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </div>
    </div>

@endsection
