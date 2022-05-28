<table id="datatablesSimple">
    <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Title</th>
            <th class="text-center">Description</th>
            <th class="text-center">Status</th>
            <th class="text-center">Image</th>
        </tr>
    </thead>
    @php
        $i=1;
    @endphp
    <tbody>
        @foreach ($categories as $category )
        <tr>
            <td class="text-center">{{ $i++ }}</td>
            <td class="text-center">{{ $category->title}}</td>
            <td class="text-center">{{ $category->description }}</td>
            <td class="text-center">{{ $category->stock_status }}</td>
            <td class="text-center">{{ $category->image }}</td>
        </tr>
        @endforeach
       
    </tbody>
</table>

<style>
    table, th, td{
        padding: 20px;
        border: 2px solid black;
        border-collapse: collapse;
    }
</style>