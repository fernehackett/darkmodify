@extends('shopify.default')
@section('content')
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        {{ Form::open([
            "url" => route("shopify.stores.store"),
            "method" => "POST"
        ]) }}
        @token()
        @isset($scriptTag)
            <input type="hidden" name="script_id" value="{{ $scriptTag->script_id }}">
        @endisset
        <div class="form-group">
            <div class="form-check">
                <label class="form-label form-check-label">
                    <input class="form-check-input" name="enable" value="1" type="checkbox"
                           @if($store && $store->enable == 1) checked @endif> Enable
                    {{ config("app.name") }}
                </label>
            </div>
        </div>

        <div class="form-group">
            <div class="form-check">
                <label class="form-label form-check-label">
                    <input class="form-check-input" name="schedule" value="1" type="checkbox"
                           @if($store && $store->schedule == 1) checked @endif>Enable Schedule
                </label>
            </div>
        </div>
        <div @class(["schedule","d-none"=> !$store || $store->schedule == 0])>
            <div class="form-group">
                <label>Begin At</label>
                <input type="time" name="begin_at" class="form-control" value="{{ $store && $store->begin_at ? $store->begin_at->format("H:i") : "" }}">
            </div>

            <div class="form-group">
                <label>End At</label>
                <input type="time" name="end_at" class="form-control" value="{{ $store && $store->end_at  ? $store->end_at->format("H:i") : "" }}">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-label form-check-label">
                    <input class="form-check-input" name="customize" value="1" type="checkbox"
                           @if($store && $store->customize == 1) checked @endif> Customer can turn on/off
                </label>
            </div>
        </div>

        <div class="form-actions mT-10">
            <button type="submit" class="btn btn-outline-success">Submit</button>
        </div>
        {{ Form::close() }}
    </div>
@stop
@section('scripts')
    <script>
        actions.TitleBar.create(app, {title: 'Home'});
        $("[name=\"schedule\"]").on("change", function(e){
            if($(this).is(":checked")){
                $(".schedule").removeClass("d-none")
            }else{
                $(".schedule").addClass("d-none")
            }
        })
    </script>
@stop
