<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        //allways the first line
        parent::__construct();
    }
    // default lagi si index function
    public function index()
    {
        //tatawagin si home_view.php from the views folder and will load it on the page
        $this->load->helper('url'); //for loading the css
        $this->load->view('home_view');
    }

    //Problem number 1
    public function MarioFlagPole($argu)
    {
        echo '<body style="    display: flex; justify-content: center;align-items: center;height: 100vh;background-color: rgb(110, 110, 110);;text-align: center;">';
        echo '<div class="my_class" style="text-align: right;">'; // moving to the right to match the given output 
        echo "<pre> Argument is equal to: " . $argu . " </pre>"; //printing the argument in the URI

        $count = 1; // initialize to start in 1
        for ($i = 1; $i <= $argu; $i++) { // the number of lines will depend on the input value of argument
            for ($x = 0; $x <= $i; $x++) {
                echo $count . " ";
                $count++;
            }
            echo '<br/>';
        }
        echo '</div>';
    }

    //Problem number 2
    public function BoxedFrame($argu1, $argu2)
    {
    }


    //Problem number 3
    public function HoneyComb($argu1, $argu2)
    {
        echo "<pre> Arg1 is equals to:" . $argu1 . "</pre>"; //printing the argument in the URI
        echo "<pre> Arg2 is equals to:" . $argu2 . " </pre>"; //printing the argument inthe URI


        for ($a = 1; $a < 7 * $argu1; $a++) {
            for ($b = 1; $b < 7 * $argu2; $b++) {
                if ($a == 1 || $a == 6 || $a == 11) {
                    if ($b != 3 && $b != 4 && $b != 8 && $b != 9) {
                        echo "&nbsp";
                    } else {
                        echo "*";
                    }
                }
                if ($a == 2 || $a == 5 || $a == 7 || $a == 10) {
                    if ($b != 2 && $b != 5 && $b !== 7 && $b != 10) {
                        echo "&nbsp";
                    } else {
                        echo "*";
                    }
                }
                if ($a == 3 || $a == 4 || $a == 8 || $a == 9) {
                    if ($b != 1 && $b != 6 && $b != 12) {
                        echo "&nbsp";
                    } else {
                        echo "*";
                    }
                }
            }
            echo "<br>";
        }
    }
}

//Code by Justine Rome M. Guillermo
//code from: https://github.com/romeJG/TSA-1