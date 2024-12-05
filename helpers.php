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
 * @return void
 */
function loadView($name)
{

    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
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
    $partialPath = basePath("views/partials/{$name}.php");
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
