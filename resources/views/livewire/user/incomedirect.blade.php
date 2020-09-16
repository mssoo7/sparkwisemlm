<div>


  <table>
      <tr>
          <th>UserID</th>
          <th>Comission</th>
      </tr>
      
      <tr>
        @forelse ($shoppingincome as $item)

          <td>{{$item->user_name}}</td>
          <td>{{$item->comission}}</td>
      @empty
      
        <td colspan="2">No Records Here..</td>
        
      @endforelse
      </tr>
  </table>
      

      
 
</div>
