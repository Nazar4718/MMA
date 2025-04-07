@extends("app")
@section("content")
    <div class="container mx-auto h-full flex items-center justify-center flex-col">
        <div class="flex items-center gap-x-6 ">
            <img class="size-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            <div>
                <h3 class="/7 font-semibold tracking-tight text-gray-900">{{ $user->name }}</h3>
                <p class="text-sm/6 font-semibold text-indigo-600">{{ $user->email }}</p>
            </div>
        </div>
        @if($user->nickname && $user->last_name && $user->birthday)
            <div class="mt-6 bg-white shadow-md rounded px-8 pt-6 pb-8">
                <p class="mb-2">Ваші дані профілю вже заповнені:</p>
                <p class="mb-2"><span class="font-semibold">Нікнейм:</span> {{ $user->nickname }}</p>
                <p class="mb-2"><span class="font-semibold">Прізвище:</span> {{ $user->last_name }}</p>
                <p class="mb-2"><span class="font-semibold">Дата народження:</span> {{ $user->birthday }}</p>
                @if ($user->description)
                    <p><span class="font-semibold">Опис:</span> {{ $user->description }}</p>
                @endif
            </div>
        @else
            <form action="{{route('profile.update', ['profile' => auth()->user()])}}" method="POST" class=" flex flex-col space-y-10  items-center">
                @csrf
                @method('PUT')
                Додайте нікнейм
                <input class="border-2" type="text" name="nickname" placeholder="Додайте нікнейм...">
                Додайте Прізвище
                <input class="border-2" type="text" name="last_name" placeholder="Додайте прізвище...">
                Додайте дату народження
                <input class="border-2" type="date" name="birthday">
                Додайте опис(необов'язково)
                <input class="border-2" type="text" name="description" placeholder="Додайте опис...">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </form>
    @endif
@endsection
