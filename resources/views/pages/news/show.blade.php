@extends("app")

@section("content")
    <div>
        <div class="flex items-center justify-center border-2">
            <span><b><i>Title:</i></b></span><br>
            <div>
            {{$news->title}}<br>
            </div>
        </div>
        <div class="flex items-center justify-center border-2">
            <span><b><i>Desc:</i></b></span><br>
            <div>
                {{$news->description}}<br>
            </div>
        </div>
        <div class="flex items-center justify-center border-2">
            <span><b><i>Date:</i></b></span><br>
            <div>
                {{$news->date_published}}<br>
            </div>
        </div>
        <div class="flex items-center justify-center border-2">
            <span><b><i>Author:</i></b></span><br>
            <div>
                {{$news->author}}<br>
                {{$news->getFirstMedia()}}
            </div>
        </div>
    </div>
@endsection
