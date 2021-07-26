<div class="container-fluid">
    <form action="{{ $sendto }}" method="{{ $via }}" class="d-flex search-bar">
    <input class="form-control me-2" name="search" type="search" placeholder="Search for degrees, pathways courses or universities " aria-label="Search">
        {{$slot}}
    </form>
</div>
