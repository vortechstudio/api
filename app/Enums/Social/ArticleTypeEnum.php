<?php

namespace App\Enums\Social;

enum ArticleTypeEnum: string
{
    const NOTICE = 'notice';

    const EVENT = 'event';

    const NEWS = 'news';

    const SSO = 'auth';
}
