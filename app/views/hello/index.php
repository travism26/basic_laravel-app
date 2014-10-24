<?php

//phpinfo();

function isOfDrivingAge($age)
{
    return $age >= 16;
}

function notifyUserOfDriverStatus($name, $age)
{
    $message = isOfDrivingAge($age) ? 'you may drive' : 'you may not drive';

    return "{$name}: ($message}";
}

$status = notifyUserOfDriverStatus('john doe', 17);
echo $status;
