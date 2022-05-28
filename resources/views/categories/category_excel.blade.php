<table>
    <thead>
    <tr>
        <th><b>SL No</b></th>
        <th><b>Title</b></th>
        <th><b>Descriptiop</b></th>
        <th><b>Status</b></th>
        <th><b>Image</b></th>
    </tr>
    </thead>
    @php
         $i=1;
    @endphp
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $category->title }}</td>
            <td>{{ $category->description }}</td>
            <td>{{ $category->stock_status }}</td>
            <td>{{ $category->image }}</td>
        </tr>
    @endforeach
    </tbody>
</table>