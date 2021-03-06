@extends('admin.layouts.master')

@section('content')
 <div class="col-sm-12">
        <!-- Nestable card start -->
        <div class="card">
            <div class="card-header">
                <h5>{{ trans('quickadmin::templates.templates-view_create-add_new') }}</h5>
            </div>
            <div class="card-block">
<div class="row">
    <div class="col-md-12 col-sm-offset-2">

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {!! implode('', $errors->all('<li class="error">:message</li>')) !!}
                </ul>
        	</div>
        @endif
    </div>
</div>

{!! Form::open(array('route' => config('quickadmin.route').'.themesetting.store', 'id' => 'form-with-validation', 'class' => 'form-horizontal')) !!}

<div class="form-group">
    {!! Form::label('user_id', 'Nama User', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::select('user_id', $user, old('user_id'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('navbarbg', 'Navbar Baground', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('navbarbg', old('navbarbg'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('headerbg', 'Header Background', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('headerbg', old('headerbg'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('menucaption', 'Menu Caption', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('menucaption', old('menucaption'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('bgpattern', 'Background Pattern', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('bgpattern', old('bgpattern'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('activeitemtheme', 'Active Item Theme', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('activeitemtheme', old('activeitemtheme'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('frametype', 'Frame Type', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('frametype', old('frametype'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('layout_type', 'Layout Type', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('layout_type', old('layout_type'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('layout_width', 'Layout Width', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('layout_width', old('layout_width'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('menu_effect_desktop', 'Menu Effect Desktop', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('menu_effect_desktop', old('menu_effect_desktop'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('menu_effect_phone', 'Menu Effect Phone', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('menu_effect_phone', old('menu_effect_phone'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('menu_icon_style', 'Menu Icon Style', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('menu_icon_style', old('menu_icon_style'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('DropDownIconStyle', 'Dropdown Icon Styel', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('DropDownIconStyle', old('DropDownIconStyle'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('FixedNavbarPosition', 'Fixwd Navbar Position', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('FixedNavbarPosition', old('FixedNavbarPosition'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('FixedHeaderPosition', 'Fixed Header Position', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('FixedHeaderPosition', old('FixedHeaderPosition'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('VerticalSubMenuItemIconStyle', 'Vertical Sub Menu Item Icon Style', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('VerticalSubMenuItemIconStyle', old('VerticalSubMenuItemIconStyle'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('defaultVerticalMenu', 'Default Vertical Menu', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('defaultVerticalMenu', old('defaultVerticalMenu'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div><div class="form-group">
    {!! Form::label('onToggleVerticalMenu', 'On Toggle Vertical Menu', array('class'=>'control-label')) !!}
    <div class="col-md-12">
        {!! Form::text('onToggleVerticalMenu', old('onToggleVerticalMenu'), array('class'=>'form-control form-control-primary')) !!}
        
    </div>
</div>

<div class="form-group">
    <div class="col-md-12 col-sm-offset-2">
      {!! Form::submit( trans('quickadmin::templates.templates-view_create-create') , array('class' => 'btn btn-sm btn-primary')) !!}
    </div>
</div>

{!! Form::close() !!}
</div>
</div>
</div>
@endsection