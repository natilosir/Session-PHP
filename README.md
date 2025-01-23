# sessions-PHP
A simple library for creating and managing sessions in PHP


## Installation

You can install this package via Composer:

```bash
composer require natilosir/Session
```

## Overview
The `Session` class provides a simple and effective way to manage session variables in PHP. It includes methods for setting, getting, deleting, clearing, and listing session variables, as well as destroying the entire session.

## Features
- Set session variables
- Get session variables
- Delete individual session variables
- Clear all session variables
- Destroy the session
- List all session variables

## Usage

### Setting a Session Variable
To set a session variable, use the `set` method:

```php
Session::set('username', 'John Doe');
```
### Getting a Session Variable
To retrieve a session variable, use the get method:

```php
$username = Session::get('username');
echo 'Username: ' . $username; // Outputs: Username: John Doe
```
### Deleting a Session Variable
To delete a specific session variable, use the delete method:
```php
Session::delete('username');
```
### Clearing All Session Variables
To clear all session variables, you can use the clear method:
```php
Session::set('user_id', 1);
Session::clear(); // Clears all session variables
```
### Destroying the Session
To destroy the entire session, use the destroy method:
```php
Session::destroy();
```
Listing All Session Variables
To list all session variables currently set, use the list method:
```php
$all = Session::list();
print_r($all); // Outputs all session variables
```
Example Code
Here’s a complete example demonstrating the usage of the Session class:

```php
// Set a session variable
Session::set('username', 'John Doe');

// Get the session variable
$username = Session::get('username');
echo 'Username: ' . $username; // Outputs: Username: John Doe

// Delete the session variable
Session::delete('username');

// Clear all session variables
Session::clear(); // Clears all session variables

// Check if all session variables are cleared
$userId = Session::get('user_id');
echo 'User ID after clearing: ' . ($userId ?? 'Not set'); // Outputs: User ID after clearing: Not set

// Destroy the session
Session::destroy();

// List all session variables
$all = Session::list();
print_r($all); // Outputs all session variables
```
## Conclusion
The Session class simplifies session management in PHP applications, providing a clean and intuitive interface for working with session variables. Feel free to contribute to this project by submitting issues or pull requests!
