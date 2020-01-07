<?php

namespace uiuifree\WhoDomain;
class WhoDomain
{

    public static function who($domain)
    {
        if (self::isGmail($domain)) {
            return "Google";
        } else if (self::isApple($domain)) {
            return "Apple";
        } else if (self::isMicrosoft($domain)) {
            return "Microsoft";
        } else if (self::isAu($domain)) {
            return "au";
        } else if (self::isDocomo($domain)) {
            return "NTT docomo";
        } else if (self::isSoftback($domain)) {
            return "Softback";
        } else if (self::isYahoo($domain)) {
            return "Yahoo";
        } else if (self::isJPhone($domain)) {
            return "J-Phone";
        } else if (self::isTuka($domain)) {
            return "J-Phone";
        }
        return false;
    }

    public static function isGmail($domain)
    {
        return in_array($domain, DomainList::gmail());
    }

    public static function isApple($domain)
    {
        return in_array($domain, DomainList::apple());
    }

    public static function isMicrosoft($domain)
    {
        return in_array($domain, DomainList::microsoft());
    }

    public static function isAu($domain)
    {
        return in_array($domain, DomainList::au());
    }

    public static function isDocomo($domain)
    {
        return in_array($domain, DomainList::docomo());
    }

    public static function isSoftback($domain)
    {
        return in_array($domain, DomainList::softback());
    }

    public static function isYahoo($domain)
    {
        return in_array($domain, DomainList::yahoo());
    }

    public static function isJPhone($domain)
    {
        return in_array($domain, DomainList::jPhone());
    }

    public static function isTuka($domain)
    {
        return in_array($domain, DomainList::tuKa());
    }


}