<?php
    /**
     * Undocumented function
     *Get the lst of values of array
        * @param [type] $array
        * @return void
        */
    function getLst($array) {
        foreach ($array as $value) {
            echo "<li>$value</li>";
        }
    }

    /**
     * Undocumented function
     *Get even numbers of array
        * @param [type] $array
        * @return void
        */
    function getLstEvenNumber($array) {
        foreach ($array as $value) {
            if($value % 2 === 0) {
                echo "<li>$value</li>";
            }
        }
    }

    /**
     * Undocumented function
     *Get numbers of even index of array
    * @param [type] $array
    * @return void
    */
    function getLstEvenIndex($array) {
        foreach ($array as $i => $value) {
            if($i % 2 === 0) {
                echo "<li>$value</li>";
            }
            $array[$i]++;
        }
    }

    /**
     * Undocumented function
     *Get the values of array * 2 
        * @param [array] $array
        * @return void
        */
    function getLstCalcDoubleValue($array) {
        foreach ($array as $value) {
            $value = $value * 2;
            echo "<li>$value</li>";
        }
    }

    /**
     * Undocumented function
     *Get the values of array / from the param nbr
        * @param [type] $array
        * @param integer $nbr
        * @return void
        */
    function getLstCalcDivisionValue($array, int $nbr ) {
        foreach ($array as $value) {
            $value = $value / $nbr;
            echo "<li>$value</li>";
        }
    }

    /**
     * Undocumented function
     *Supp occurences of array
        * @param [array] $array
        * @return void
        */
    function supOccurence($array) {
        return array_unique($array);
    }

    /**
     * Undocumented function
     *Get the intersection of two arrays 
        * @param [array] $array1
        * @param [array] $array2
        * @return void
        */
    function getIntersect($array1,
    $array2) {
        return array_intersect($array1, $array2);
    }

    /**
     * Undocumented function
     *Get the differences of two arrays 
    * @param [array] $array1
    * @param [array] $array2
    * @return void
    */
    function getDiff($array1,
    $array2) {
        return array_diff($array1, $array2);
    }

    /**
     * Undocumented function
     *Get the differences of two arrays wihtout double
    * @param [array] $array1
    * @param [array] $array2
    * @return void
    */
    function getDiffWihtoutDouble($array1,
    $array2, $booleen = true) {
        return supOccurence(array_diff($array1, $array2));
    }

    /**
     * Undocumented function
     *get the number values 
        * @param [array] $array
        * @param integer $n
        * @return void
        */
    function GetNValues($array, int $n ) {
        for($i= 0; $i <= $n; $i++) {
            echo "<li>$array[$i]</li>";
        }
    }
?>