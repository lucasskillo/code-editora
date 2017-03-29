{!! Html::openFormGroup('title', $errors) !!}
    {!! Form::label('title', 'Título', ['class' => 'control-label']) !!}
    <div class="col-lg-6">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! Form::error('title', $errors) !!}
    </div>
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('subtitle', $errors) !!}
{!! Form::label('subtitle', 'Sub-Título', ['class' => 'control-label']) !!}
<div class="col-lg-6">
    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
    {!! Form::error('subtitle', $errors) !!}
</div>
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('price', $errors) !!}
{!! Form::label('price', 'Preço', ['class' => 'control-label']) !!}
<div class="col-lg-6">
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
    {!! Form::error('price', $errors) !!}
</div>
{!! Html::closeFormGroup() !!}