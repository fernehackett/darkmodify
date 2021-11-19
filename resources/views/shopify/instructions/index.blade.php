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
                        After install <b>DarkModify</b>, you will go to the set up page.
                    </dd>
                    <dt>Step 2</dt>
                    <dd>
                        Click to <i>Enable DarkModify</i> to turn on the dark mode.<br>
                        Click to <i>Enable Schedule </i> to turn on the schedule. You must choose the begin and end time to turn on the dark mode.<br>
                        Click to <i>Customer can turn on/off</i> if you want the visitor can be turn on or turn off. You must enable the switcher in the Theme settings<br>
                    </dd>
                    <dt>Step 3</dt>
                    <dd>
                        Click to submit to save your config.
                    </dd>
                    <dt>Step 4</dt>
                    <dd>
                        If you enable <i>Customer can turn on/off</i>, you need go to <b>Online Store > Themes > Customizes</b>.<br>
                        Go to <b>Theme settings</b> then click to <b>App embeds</b> tab.<br>
                        Click to <b>Dark Mode Toggle</b>, you will see some options.<br>
                        1. Width: The width of widget of storefront.<br>
                        2. Top: The space from top of storefront to the widget.<br>
                        3. Bottom: The space from bottom of storefront to the widget.<br>
                        4. Left: The space from left of storefront to the widget.<br>
                        5. Right: The space from right  of storefront to the widget.<br>
                        6. Index: The priotity index of widget in storefront.<br>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
@stop
