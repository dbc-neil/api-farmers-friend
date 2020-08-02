@extends('layouts.app')

@section('title', 'Home page')

@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="md-col-8 md-offset-2">
                <div class="panel shadow--1">
                    <div class="panel__header">Create Api Token</div>
                    <div class="panel__body">
                        <form action="{{ route('apitokens.store') }}" method="post">
                            @csrf
                            @if(session('tokenmessage'))
                                <h3>Api Token</h3>
                                <p>Copy and save api token in save place, as this will never be seen again.</p>
                                <div class="notify notify--success notify__dismissable">
                                    {{ session('tokenmessage') }}
                                </div>
                            @endif

                            <div class="form__group {{ $errors->has('email') ? ' has__danger' : '' }} ">
                                <label for="name" class="form__label font--bold">{{ __('Token Name') }}</label>
                                <div class="form__wrap">
                                    <input type="name" name="name" id="name" class="form__item" value="{{ old('name') }}">
                                </div>
                                @if ($errors->has('name'))
                                    <strong class="form__helper">
                                        {{ $errors->first('name') }}
                                    </strong>
                                @endif
                            </div>
                            <div class="form__group">
                                <button type="submit" class="btn btn--primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
