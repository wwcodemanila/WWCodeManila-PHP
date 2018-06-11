@include('includes.head')
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="{{url('/posts')}}">Posts</a>
                    <a href="{{url('/create')}}">Create a Post</a>
                </div>
@include('includes.footer')

