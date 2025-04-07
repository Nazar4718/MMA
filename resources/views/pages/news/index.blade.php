@extends("app")

@section("content")
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto w-full px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">From the
                    World</h2>
                <p class="mt-2 text-lg/8 text-gray-600">Learn how to grow your business with our expert advice.</p>
                <a href="{{route('news.create')}}">Create News</a>
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
                            <span class="absolute inset-0"></span>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600"><b>World News</b></p>
                    </div>
                    <br>
                    <div class="flex flex-row flex-wrap w-full">
                        @foreach ($news as $new)
                            <div class="mt-8 flex items-center w-1/3 border border-gray-950 " >
                                <div class="text-sm/6  ">
                                    <p class="font-semibold text-gray-900">
                                        <a href="{{route('news.show', ['news'=>$new->id])}}">
                                            <span class=""></span>
                                            {{$new->title}}
                                        </a>
                                    </p>
                                    <p class="text-gray-600">{{$new->description}}</p>
                                    <p class="text-gray-600">{{$new->author}}</p>
                                    <p class="text-gray-600">{{$new->date_published}}</p>

                                    <a href="{{route('news.edit', ['news'=>$new->id])}}">Edit</a>
                                    <form action="{{route('news.destroy', ['news'=>$new->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete New</button>
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
