<!-- Record Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Record', 'Record:') !!}
    {!! Form::number('Record', null, ['class' => 'form-control']) !!}
</div>

<!-- Partnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PartNumber', 'Partnumber:') !!}
    {!! Form::number('PartNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Productname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductName', 'Productname:') !!}
    {!! Form::text('ProductName', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Manufacturer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Manufacturer', 'Manufacturer:') !!}
    {!! Form::text('Manufacturer', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Productlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductLabel', 'Productlabel:') !!}
    {!! Form::text('ProductLabel', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Inventoryreceived Field -->
<div class="form-group col-sm-6">
    {!! Form::label('InventoryReceived', 'Inventoryreceived:') !!}
    {!! Form::text('InventoryReceived', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Inventoryshipped Field -->
<div class="form-group col-sm-6">
    {!! Form::label('InventoryShipped', 'Inventoryshipped:') !!}
    {!! Form::text('InventoryShipped', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>

<!-- Inventoryonhand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('InventoryOnHand', 'Inventoryonhand:') !!}
    {!! Form::text('InventoryOnHand', null, ['class' => 'form-control','maxlength' => 50,'maxlength' => 50]) !!}
</div>