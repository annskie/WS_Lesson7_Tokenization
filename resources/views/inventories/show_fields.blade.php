<!-- Record Field -->
<div class="col-sm-12">
    {!! Form::label('Record', 'Record:') !!}
    <p>{{ $inventory->Record }}</p>
</div>

<!-- Partnumber Field -->
<div class="col-sm-12">
    {!! Form::label('PartNumber', 'Partnumber:') !!}
    <p>{{ $inventory->PartNumber }}</p>
</div>

<!-- Productname Field -->
<div class="col-sm-12">
    {!! Form::label('ProductName', 'Productname:') !!}
    <p>{{ $inventory->ProductName }}</p>
</div>

<!-- Manufacturer Field -->
<div class="col-sm-12">
    {!! Form::label('Manufacturer', 'Manufacturer:') !!}
    <p>{{ $inventory->Manufacturer }}</p>
</div>

<!-- Productlabel Field -->
<div class="col-sm-12">
    {!! Form::label('ProductLabel', 'Productlabel:') !!}
    <p>{{ $inventory->ProductLabel }}</p>
</div>

<!-- Inventoryreceived Field -->
<div class="col-sm-12">
    {!! Form::label('InventoryReceived', 'Inventoryreceived:') !!}
    <p>{{ $inventory->InventoryReceived }}</p>
</div>

<!-- Inventoryshipped Field -->
<div class="col-sm-12">
    {!! Form::label('InventoryShipped', 'Inventoryshipped:') !!}
    <p>{{ $inventory->InventoryShipped }}</p>
</div>

<!-- Inventoryonhand Field -->
<div class="col-sm-12">
    {!! Form::label('InventoryOnHand', 'Inventoryonhand:') !!}
    <p>{{ $inventory->InventoryOnHand }}</p>
</div>

