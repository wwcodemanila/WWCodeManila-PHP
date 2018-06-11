@include('includes.head')
<div class="title m-b-md">
    Create your post
</div>
<form action="{{url('/store')}}" method="POST">
    @csrf
    <label>Title</label>
    <input type="text" name="postTitle"><br>
    <label>Content</label>
    <textarea name="postContent" rows="8" cols="80"></textarea><br>
    <input type="submit">
</form>
@include('includes.footer')