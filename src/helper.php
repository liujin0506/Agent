<?php

function is_mobile($agent = '')
{
    return \jliu\agent\Agent::isMobile($agent);
}

function is_wechat($agent = '')
{
    return \jliu\agent\Agent::isMicroMessage($agent);
}

function deviceType()
{
    $os = \jliu\agent\Agent::deviceType();
    if($os == \jliu\agent\Agent::DEVICE_MOBILE) {
        $os = 'mobile';
    } elseif($os == \jliu\agent\Agent::DEVICE_DESKTOP) {
        $os = 'windows';
    } else {
        $os = 'unknown';
    }
    return $os;
}

function browserType()
{
    $browser = \jliu\agent\Agent::browserType();
    if(\jliu\agent\Agent::isMicroMessage() == \jliu\agent\Agent::MICRO_MESSAGE_YES) {
        $browser = 'wechat';
    } elseif ($browser == \jliu\agent\Agent::BROWSER_TYPE_ANDROID) {
        $browser = 'android';
    } elseif ($browser == \jliu\agent\Agent::BROWSER_TYPE_IPAD) {
        $browser = 'ipad';
    } elseif ($browser == \jliu\agent\Agent::BROWSER_TYPE_IPHONE) {
        $browser = 'iphone';
    } elseif ($browser == \jliu\agent\Agent::BROWSER_TYPE_IPOD) {
        $browser = 'ipod';
    } else {
        $browser = 'unknown';
    }
    return $browser;
}