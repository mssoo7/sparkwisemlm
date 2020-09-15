@if ($sortBy !== $field)
<i  class=" text-light fas fa-sort"></i>
@elseif ($sortDirection == 'asc')
<i style="color:white" class="fas fa-sort-up"></i>
@else
<i style="color:white" class="fas fa-sort-down"></i>
@endif