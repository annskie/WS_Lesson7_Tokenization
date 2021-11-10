<div class="table-responsive">
    <table class="table" id="inventories-table">
        <thead>
            <tr>
                <th>Record</th>
        <th>Partnumber</th>
        <th>Productname</th>
        <th>Manufacturer</th>
        <th>Productlabel</th>
        <th>Inventoryreceived</th>
        <th>Inventoryshipped</th>
        <th>Inventoryonhand</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($inventories as $inventory)
            <tr>
                <td>{{ $inventory->Record }}</td>
            <td>{{ $inventory->PartNumber }}</td>
            <td>{{ $inventory->ProductName }}</td>
            <td>{{ $inventory->Manufacturer }}</td>
            <td>{{ $inventory->ProductLabel }}</td>
            <td>{{ $inventory->InventoryReceived }}</td>
            <td>{{ $inventory->InventoryShipped }}</td>
            <td>{{ $inventory->InventoryOnHand }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['inventories.destroy', $inventory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('inventories.show', [$inventory->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('inventories.edit', [$inventory->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
