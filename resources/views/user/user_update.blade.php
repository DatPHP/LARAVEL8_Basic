@foreach($news as $user)
<form method="post" action="/user/view/update/{{ $user->id }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="id" value="{{ $user->id }}">
    <p>
        <label for="title">Name</label><br>
        <input type="text" name="name" value="{{ $user->name }}">
    </p>


    <p>
        <label for="email">Email</label><br>
        <input type="text" name="email" value="{{ $user->email }}">
    </p>   
 @endforeach

    <p>
        <button type="submit">Submit</button>
    </p>
</form>