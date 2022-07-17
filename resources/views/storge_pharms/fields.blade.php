@if($customFields)
<h5 class="col-12 pb-4">{!! trans('lang.main_fields') !!}</h5>
@endif
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
  <!-- Food Id Field -->
  <div class="form-group row ">
    {!! Form::label('food_id', trans("lang.extra_food_id"),['class' => 'col-3 control-label text-right']) !!}
    <div class="col-9">
      {!! Form::select('product_id', $products, null, ['class' => 'select2 form-control']) !!}
      <div class="form-text text-muted">{{ trans("lang.extra_food_id_help") }}</div>
    </div>
  </div>

  <!-- Extra Group Id Field -->
  <div class="form-group row ">
    {!! Form::label('extra_group_id', trans("lang.extra_extra_group_id"),['class' => 'col-3 control-label text-right']) !!}
    <div class="col-9">
      {!! Form::select('pharm_id', $pharms, null, ['class' => 'select2 form-control']) !!}
      <div class="form-text text-muted">{{ trans("lang.extra_extra_group_id_help") }}</div>
    </div>
  </div>




</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
  <!-- Price Field -->
  <div class="form-group row ">
    {!! Form::label('price', trans("lang.quantity"), ['class' => 'col-3 control-label text-right']) !!}
    <div class="col-9">
      {!! Form::number('quantity', null,  ['class' => 'form-control','step'=>"any",'placeholder'=>  trans("lang.extra_price_placeholder")]) !!}
      <div class="form-text text-muted">
        {{ trans("lang.extra_price_help") }}
      </div>
    </div>
  </div>
</div>
@if($customFields)
<div class="clearfix"></div>
<div class="col-12 custom-field-container">
  <h5 class="col-12 pb-4">{!! trans('lang.custom_field_plural') !!}</h5>
  {!! $customFields !!}
</div>
@endif
<!-- Submit Field -->
<div class="form-group col-12 text-right">
  <button type="submit" class="btn btn-{{setting('theme_color')}}" ><i class="fa fa-save"></i> {{trans('lang.save')}} {{trans('lang.storge_pharm')}}</button>
  <a href="{!! route('storgePharms.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{trans('lang.cancel')}}</a>
</div>
