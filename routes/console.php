<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command("inspire", function () {
    $this->comment("Build small. Ship useful.");
})->purpose("Display an inspiring quote");
