<?php

namespace App\Enums;

enum ProjectStatus: string
{
    const Draft = 'draft';
    const ACTIVE = 'active';
    const ARCHIVED = 'archived';

    public static function getValues(): array
    {
        return [
            self::Draft,
            self::ACTIVE,
            self::ARCHIVED,
        ];
    }

    public static function getLabels(): array
    {
        return array(
            self::Draft => self::Draft,
            self::ACTIVE => self::ACTIVE,
            self::ARCHIVED => self::ARCHIVED,
        );
    }


}
