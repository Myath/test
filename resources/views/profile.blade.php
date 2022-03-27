<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>mail</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
@foreach ($test as $key)
    <tr>
        <td>{{ $key-> name }}</td>
        <td>{{ $key-> email }}</td>
        <td>
            <a href="delete/{{ $key-> id }}">Delete

            </a>
        </td>
    </tr>
@endforeach
        

    </tfoot>
</table>