<div class="row">
    <div class="form-group col-sm-12">
        {!! Form::label('name', 'name of property') !!}
        {!! Form::text('name', null,  ['class' => 'form-control']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-3">
        {!! Form::label('available', 'Date', ['class' => 'col-sm-12']) !!}
        <input type="date" class="form-control" name="available">
    </div>
</div>

    <div class="form-group">
        {!! Form::label('num_bedrooms', 'Number of rooms') !!}
        {!! Form::select('num_bedrooms', ['1' => '1', '2' => '2', '3' => '3', '4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10'], '1',  ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::select('status', ['' => 'Status', '1' => 'Available', '0' => 'Not available'], null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('service_id', 'Service') !!}
        {!! Form::select('service_id', (['' => 'select a Service']+ $services), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('country_id', 'Country') !!}
        {!! Form::select('country_id', (['' => 'select a Country']+ $countries), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state_id', 'State') !!}
        {!! Form::select('state_id', (['' => 'select a State']+ $states), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city_id', 'City') !!}
        {!! Form::select('city_id', (['' => 'select a City']+ $cities), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('property_type_id', 'Property type') !!}
        {!! Form::select('property_type_id', (['' => 'select a Property type']+ $property_types), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('user_id', 'Select Admin') !!}
        {!! Form::select('user_id', (['' => 'select a Admin']+ $users), null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'image') !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('slogan', 'Short description') !!}
        <textarea name="slogan" class="form-control" rows="3"></textarea>
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Long description') !!}
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>
