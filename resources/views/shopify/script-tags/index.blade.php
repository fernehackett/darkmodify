let toggle = document.querySelector("#dark-mode-toggle");
let css = `:root {
    --invert: 1;
    --hue: 180deg;
    --htmlbg: #000;
}
html {
    filter: invert(var(--invert)) hue-rotate(var(--hue));
    background: var(--htmlbg) !important;
}
html, img, video, svg, iframe, frame, [wotsearchtarget] {
    filter: invert(var(--invert)) hue-rotate(var(--hue));
}`;
var darkmode = function(){
    if(toggle){
        toggle.querySelector(".light").style.display = `block`
        toggle.querySelector(".dark").style.display = `none`
    }
    let style = document.createElement(`style`)
    style.id = `dark-mode-toggle-style`
    style.innerHTML = css
    document.head.appendChild(style)
}
var lightmode = function(){
    if(toggle){
        toggle.querySelector(".dark").style.display = `block`
        toggle.querySelector(".light").style.display = `none`
    }
    let style = document.querySelector(`style#dark-mode-toggle-style`)
    if(style) style.remove()
}
if(toggle){
    toggle.querySelector(".light").addEventListener("click", function(e){
        e.preventDefault()
        lightmode()
    })
    toggle.querySelector(".dark").addEventListener("click", function(e){
        e.preventDefault()
        darkmode()
    })
}
@if($store->customize != 1)
    if(toggle){
        toggle.remove();
    }
@endif
@if($store->schedule == 1 && $store->begin_at && $store->end_at)
    let current = new Date();
    let begin_at = new Date(`{{ $store->begin_at }}`);
    if(current < begin_at)  begin_at.setDate(begin_at.getDate() - 1)
    let end_at = new Date(`{{ $store->end_at }}`);
    if(end_at < begin_at) end_at.setDate(end_at.getDate() + 1)
    if(current >= begin_at && current <= end_at){
        darkmode()
    }else{
        lightmode()
    }
    console.log(begin_at)
    console.log(end_at)
    console.log(current)
@else
    @if($store->enable == 1)
        darkmode()
    @endif
@endif