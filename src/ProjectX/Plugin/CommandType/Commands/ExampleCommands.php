<?php

declare(strict_types=1);

namespace Pr0jectX\PxPluginExample\ProjectX\Plugin\CommandType\Commands;

use Pr0jectX\Px\ProjectX\Plugin\PluginCommandTaskBase;

/**
 * Define the example commands.
 */
class ExampleCommands extends PluginCommandTaskBase {

    /**
     * Say hello to the world!
     */
    public function exampleHelloWorld(): void {
        $this->say('Hello World!!');
    }
}
