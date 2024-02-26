<?php

namespace pyrech;

use Castor\Attribute\AsTask;
use Symfony\Component\Console\Style\SymfonyStyle;

use function Castor\io;

#[AsTask(description: 'Hello from foobar!')]
function foobar(): void
{
    io()->title('This is foobar!');
}
