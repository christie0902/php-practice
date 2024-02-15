<?php

/**
 * "helper" functions that simplify accessing methods of classes
 */

/**
 * alias for Session::instance()
 */
function session(): Session
{
    return Session::instance();
}

/**
 * alias for Session::instance()->old()
 */
function old(string $key, mixed $default = null): mixed
{
    return session()->old($key, $default);
}

/**
 * redirect to another URL
 *
 * just a convenience function, providing a more
 * readable name to sending the Location header
 */
function redirect(string $location): void
{
    header('Location: ' . $location);

    exit();
}

/**
 * flash the current request data and redirect
 *
 * just a convenience function, combining two tasks
 * that are often done together
 */
function redirectWithData(string $location): void
{
    session()->flashRequest();

    redirect($location);
}