<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
    return __DIR__ . '/' . $path;
};

/**
 * Load view
 * 
 * @param string $name
 * @param array $data
 * @return void
 */
function loadView($name, $data = [])
{

    $viewPath = basePath("App/views/{$name}.view.php");


    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo
        '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error: </strong>
                <span class="block sm:inline">View \'' . $name . '\' not found!</span>
              </div>';
    }
};

/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name)
{
    $partialPath = basePath("App/views/partials/{$name}.php");
    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo
        '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error: </strong>
                <span class="block sm:inline"> Partial \'' . $name . '\' not found!</span>
              </div>';
    }
}

/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value)
{
    echo '<pre>';
    echo var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value)
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * Format salary
 * 
 * @param string $salary
 * @return string formatted salary
 */
function formatSalary($salary)
{
    return '$' . number_format(floatval($salary));
}
