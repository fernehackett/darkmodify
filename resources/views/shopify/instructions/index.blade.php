@extends('shopify.default')

@section('page-header')
    Hello, {{ auth()->user()->name }}
@stop
@section('content')
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <a class="btn btn-primary" href="{{ route("home") }}">Home</a>
        <div class="row mt-1">
            <div class="col-md-12">
                <dl>
                    <dt>Step 1</dt>
                    <dd>
                        After install <b>DarkModify</b>, you will the options page.
                    </dd>
                    <dt>Step 2</dt>
                    <dd>
                        Click to <i>Enable DarkModify</i> to turn on the dark mode.
                        Click to <i>Enable Schedule </i> to turn on the schedule. You must choose the begin and end time to turn on the dark mode.
                        Click to <i>Customer can turn on/off</i> if you want the visitor can be turn on or turn off.
                    </dd>
                    <dt>Step 3</dt>
                    <dd>
                        Click to submit to save your config.
                    </dd>
                    <dt>Step 4</dt>
                    <dd>
                        If you enable <i>Customer can turn on/off</i>, you need go to <b>Online Store > Themes > Customizes</b>.
                        Go to <b>Theme settings</b> then click to <b>App embeds</b> tab.
                        Click to <b>Dark Mode Toggle</b>, you will see some options.
                        1. Width: The width of widget of storefront
                        2. Top: The space to top of storefront
                        3. Bottom: The space to bottom of storefront
                        4. Left: The space to left of storefront
                        5. Right: The space to right of storefront
                        6. Index: The index of storefront
                    </dd>
                </dl>
            </div>
        </div>
    </div>
@stop
