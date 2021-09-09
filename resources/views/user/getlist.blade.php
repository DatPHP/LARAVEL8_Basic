<html>  
   <head>
      <title>View User Records</title>
   </head>  
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>           
            <td>Email</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>Edit | Delete</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>