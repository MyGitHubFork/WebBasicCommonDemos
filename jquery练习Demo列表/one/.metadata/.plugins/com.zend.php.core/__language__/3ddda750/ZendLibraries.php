<?php
/**
 * Returns a deployed library path.
 * @param $libname string Library name.
 * @param $version string Library version. Version resolution will happen on a best-match basis: no version -> latest, '2' -> latest 2.x, '2.1' -> latest 2.1, '2.1.4' -> 2.1.4 
 * @return string Full path to matched library. Will return best matching library path if partial version is provided.
 * @since ZendServer 6.1
 */
function zend_deployment_library_path($libname, $version = "") {
}

?>