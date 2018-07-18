<?php
/**
 * Created by PhpStorm.
 * User: georg
 * Date: 7/13/2018
 * Time: 10:05 PM
 */

namespace Helper;


class CheckoutData
{
    public static $unitPrice = "ERROR";
    public static $quantity = "ERROR";
    public static $shipping = "ERROR";
    public static $totalProducts = "ERROR";
    public static $total = "ERROR";
    public static $productName = "ERROR";

    /**
     * @param $text sanitizes input for float
     */
    public static function sanitizeFloatInput($text)
    {
        return filter_var($text, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    }

}