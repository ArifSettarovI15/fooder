@php
$items  = [
    ['title'=>'Hot Dishes','active'=>1],
    ['title'=>'Cold Dishes','active'=>0],
    ['title'=>'Soup','active'=>0],
    ['title'=>'Grill','active'=>0],
    ['title'=>'Appetizer','active'=>0],
    ['title'=>'Dessert','active'=>0],
    ];
@endphp
<div class="filters">
    <div class="filters_items_list">
        @foreach($items as $item)
            <div class="filters_items_item">
                @include('components.filter_item.filter_item', [$item])
            </div>
        @endforeach
    </div>
    <div class="filters_line"></div>
</div>
