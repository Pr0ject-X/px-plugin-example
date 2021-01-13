<?php

declare(strict_types=1);

namespace Pr0jectX\PxPluginExample\ProjectX\Plugin\CommandType;

use Pr0jectX\Px\ProjectX\Plugin\PluginTasksBase;
use Pr0jectX\Px\ConfigTreeBuilder\ConfigTreeBuilder;
use Pr0jectX\Px\ProjectX\Plugin\PluginCommandRegisterInterface;
use Pr0jectX\Px\ProjectX\Plugin\PluginConfigurationBuilderInterface;
use Pr0jectX\PxPluginExample\ProjectX\Plugin\CommandType\Commands\ExampleCommands;
use Symfony\Component\Console\Question\Question;

/**
 * Define the example plugin command type.
 */
class ExampleCommandType extends PluginTasksBase implements PluginCommandRegisterInterface, PluginConfigurationBuilderInterface {

    /**
     * {@inheritDoc}
     */
    public static function pluginId(): string {
        return 'example';
    }

    /**
     * {@inheritDoc}
     */
    public static function pluginLabel(): string {
        return 'Example';
    }

    /**
     * {@inheritDoc}
     */
    public function registeredCommands(): array {
        return [
            ExampleCommands::class,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function pluginConfiguration(): ConfigTreeBuilder {
        $configTreeBuilder = new ConfigTreeBuilder();

        $configTreeBuilder
            ->createNode('api_key')
                ->setValue($this->doAsk(new Question(
                    $this->formatQuestion('Set API Key'))
                ))
            ->end();

        return $configTreeBuilder;
    }
}
