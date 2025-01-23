<?php

namespace natilosir\session;

class Session
{
    protected static $defaultLifetime = 86400;

    public static function init($lifetime = null)
    {
        // Set the session cookie lifetime before starting the session
        if ($lifetime !== null) {
            self::$defaultLifetime = $lifetime * 86400;
        }

        if (session_status() === PHP_SESSION_NONE) {
            session_set_cookie_params(self::$defaultLifetime);
            ini_set('session.gc_maxlifetime', self::$defaultLifetime);
            session_start(); // Start the session if it hasn't been started
        }
    }

    public static function set($key, $value, $lifetime = null)
    {
        self::init($lifetime); // Ensure the session is started
        $_SESSION[$key] = $value; // Set the session variable

        return new static(); // Return the instance for chaining
    }

    public static function get($key)
    {
        self::init(); // Ensure the session is started

        return isset($_SESSION[$key]) ? $_SESSION[$key] : null; // Return the session variable or null
    }

    public static function delete($key)
    {
        self::init(); // Ensure the session is started
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]); // Unset the session variable
        }

        return new static(); // Return the instance for chaining
    }

    public static function list()
    {
        self::init(); // Ensure the session is started

        return $_SESSION; // Return all session variables
    }

    public static function clear()
    {
        self::init(); // Ensure the session is started
        session_unset(); // Clear all session variables

        return new static(); // Return the instance for chaining
    }

    public static function destroy()
    {
        self::init(); // Ensure the session is started
        session_destroy(); // Destroy the session

        return new static(); // Return the instance for chaining
    }
}
