<?php

namespace app\models\system\service;

class LanguageService {
    public static function list(): array {
        return [
            'uz' => 'O\'zbekcha',
            'en' => 'English',
            'ru' => 'Русский',
        ];
    }
}