<?php

if (! function_exists('flash')) {
    /**
     * Return a flash instance
     *
     * @return \Cube\Flash\Flash
     */
    function flash()
    {

    	return app('flash');

    }
}
