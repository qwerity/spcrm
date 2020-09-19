@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.service.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.services.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.service.fields.type') }}</label>
                @foreach(App\Service::TYPE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('type') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="type_{{ $key }}" name="type" value="{{ $key }}" {{ old('type', 'Համատիրություն') === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="type_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tariff">{{ trans('cruds.service.fields.tariff') }}</label>
                <input class="form-control {{ $errors->has('tariff') ? 'is-invalid' : '' }}" type="text" name="tariff" id="tariff" value="{{ old('tariff', '') }}" required>
                @if($errors->has('tariff'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tariff') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.service.fields.tariff_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection