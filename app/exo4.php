<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 4</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 4</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">
                <ul>
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

                    var_dump(getLst($array));
                ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
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

                        var_dump(getLstEvenNumber($array));
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
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

                        var_dump(getLstEvenIndex($array));
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
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

                        var_dump(getLstCalcDoubleValue($array));
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 4 bis -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
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

                        var_dump(getLstCalcDivisionValue($array, 2));
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">
                <?php
                /**
                 * Undocumented function
                 *Supp occurences of array
                 * @param [array] $array
                 * @return void
                 */
                    function supOccurence($array) {
                        return array_unique($array);
                    }

                    var_dump(supOccurence($arrayA));
                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">
                <?php
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

                    var_dump(getIntersect($arrayA, $arrayB));
                ?>
            </div>
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">
                <?php
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

                        var_dump(getDiff($arrayA, $arrayB));
                    ?>
                </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">
                <?php
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

                        var_dump(getDiffWihtoutDouble($arrayA, $arrayB));
                ?>
            </div>
        </section>


        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
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

                        var_dump(GetNValues($array, 2));
                    ?>
                </ul>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>