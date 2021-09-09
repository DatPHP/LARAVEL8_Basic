<table border="1">

<a href="/user/news/create" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>           
        </tr>
    </thead>
    <tbody>
        @foreach($users as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td><a href="/user/view/edit/{{$row->id}}">Edit</a> | 
            
            
                <form method="POST" action="/user/view/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>

        </td>
        </tr>
        @endforeach
    </tbody>
</table>