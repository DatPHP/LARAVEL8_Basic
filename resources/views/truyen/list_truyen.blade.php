<html>  
   <head>
      <title>List Truyện</title>
   </head>  
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Tên Truyện</td>
            <td>Tác Giả</td>
            <td>Số Chương</td>
         </tr>
         @foreach ($list_truyen as $truyen)
         <tr>
            <td>{{ $truyen->id}}</td>
            <td>{{ $truyen->tentruyen}}</td>
            <td>{{ $truyen->tacgia}}</td>
            <td>{{ $truyen->chap}}</td>
         </tr>
         @endforeach
      </table>
   </body>
</html>