<!-- Productname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductName', 'Productname:') !!}
    {!! Form::text('ProductName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Partnumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PartNumber', 'Partnumber:') !!}
    {!! Form::text('PartNumber', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Productlabel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ProductLabel', 'Productlabel:') !!}
    {!! Form::text('ProductLabel', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Startinginventory Field -->
<div class="form-group col-sm-6">
    {!! Form::label('StartingInventory', 'Startinginventory:') !!}
    {!! Form::text('StartingInventory', null, ['class' => 'form-control','id'=>'StartingInventory']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#StartingInventory').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Inventoryreceived Field -->
<div class="form-group col-sm-6">
    {!! Form::label('InventoryReceived', 'Inventoryreceived:') !!}
    {!! Form::text('InventoryReceived', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Inventoryshipped Field -->
<div class="form-group col-sm-6">
    {!! Form::label('InventoryShipped', 'Inventoryshipped:') !!}
    {!! Form::text('InventoryShipped', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Inventoryonhand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('InventoryOnHand', 'Inventoryonhand:') !!}
    {!! Form::text('InventoryOnHand', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Minimumrequired Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MinimumRequired', 'Minimumrequired:') !!}
    {!! Form::text('MinimumRequired', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<input type="hidden" name="user_id" value="{{ Auth::id() }}">
