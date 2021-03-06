<div class='btn-group btn-group-sm'>
  @can('mainCategories.show')
  <a data-toggle="tooltip" data-placement="bottom" title="{{trans('lang.view_details')}}" href="{{ route('mainCategories.show', $id) }}" class='btn btn-link'>
    <i class="fa fa-eye"></i>
  </a>
  @endcan

  @can('mainCategories.edit')
  <a data-toggle="tooltip" data-placement="bottom" title="{{trans('lang.main_categorie_edit')}}" href="{{ route('mainCategories.edit', $id) }}" class='btn btn-link'>
    <i class="fa fa-edit"></i>
  </a>
  @endcan

  @can('mainCategories.destroy')
{!! Form::open(['route' => ['mainCategories.destroy', $id], 'method' => 'delete']) !!}
  {!! Form::button('<i class="fa fa-trash"></i>', [
  'type' => 'submit',
  'class' => 'btn btn-link text-danger',
  'onclick' => "return confirm('Are you sure?')"
  ]) !!}
{!! Form::close() !!}
  @endcan
</div>
