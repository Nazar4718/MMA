
<html>
@include("partials.head")
<body class="h-screen flex flex-col">
    @include("partials.header")
    <div class="container mx-auto flex-grow">
        @yield("content")
    </div>
    @include("partials.footer")
</body>
</html>

