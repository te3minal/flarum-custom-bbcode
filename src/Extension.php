<?php

namespace Acme\CustomBBCode;

use Flarum\Extend;
use Illuminate\Events\Dispatcher;
use Flarum\Formatter\Event\Configuring;
use Flarum\Post\Event\Posted;

return [
    (new Extend\Formatter)
        ->extend(function (Configuring $event) {
            $event->configurator->BBCodes->addCustom(
                '[glowgold]{TEXT}[/glowgold]',
                '<span class="glow-gold">{TEXT}</span>'
            );
        })
];
