<?php

function maps($indirizzo)
{
    return '
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=' . urldecode($indirizzo) . '&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
        </div>
    </div>
    ';
}
