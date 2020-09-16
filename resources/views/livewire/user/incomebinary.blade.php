<div>
    <table>
        <tr>
            <th>User Name</th>
            <th>Sponser Name</th>
            <th>Purchase Amt</th>
            <th>Comission</th>
            <th>Date</th>
        </tr>
        
        <tr>
          @forelse ($shoppingincome as $item)
  
            <td>{{$item->user_name}}</td>
            <td>{{$item->sponser_name}}</td>
            <td>{{$item->amount}}</td>
            <td>{{$item->comission}}</td>
            <td>{{$item->date}}</td>
        @empty
        
          <td colspan="2">No Records Here..</td>
          
        @endforelse
        </tr>
    </table>
        
</div>
