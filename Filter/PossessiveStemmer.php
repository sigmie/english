<?php

declare(strict_types=1);

namespace Sigmie\English\Filter;

use Sigmie\Base\Analysis\TokenFilter\TokenFilter;

use function Sigmie\Helpers\name_configs;

class PossessiveStemmer extends TokenFilter
{
    public function __construct($priority = 0)
    {
        parent::__construct('english_possessive_stemmer', [], $priority);
    }

    public function type(): string
    {
        return 'stemmer';
    }

    public static function fromRaw(array $raw):static
    {
        [$name, $config] = name_configs($raw);

        return new static($config['priority']);
    }

    protected function getValues(): array
    {
        return [
            'language' => 'possessive_english',
        ];
    }
}
