<?php
/**
 * Set or retrieve the page title.
 *
 * @param string|null $title
 * @return string
 */
if (!function_exists('title')) {
   function title($title = null)
   {
      static $pageTitle = null;

      if ($title !== null) {
         $pageTitle = $title;
      }

      return $pageTitle
         ? config('app.name') . ' - ' . $pageTitle
         : config('app.name');
   }
}
