<?php

class rights {

    /**
     * Erster Paramter ist admin f�r Admin
     *                     lehrer f�r Lehrer
     *                     schueler f�r Schueler
     *                 und sekret�rin f�r Sekret�rin
     *
     * Der Zweite Paramteter gibt an welches level die Person hat.
     * 0 ist das default-level.
     */

    /**********UNTERTEILUNGEN******************************************************/
    /**/                                                                        /**/
    /**/    //ADMIN         ->  ALLES!                                          /**/
    /**/                                                                        /**/
    /**/    //SCHUELER      ->  LEVEL -> 0 ->   Profile lesen/(schreiben)!      /**/
    /**/    //                             ->   Eigene Noten1                   /**/
    /**/    //                             ->   Stundenberichtsheft!            /**/
    /**/    //                             ->   News!                           /**/
    /**/    //                             ->   Stundenplan!                    /**/
    /**/    //                             ->   Klassen�bersicht!               /**/
    /**/    //                  LEVEL -> 1 ->   (Englisch)                      /**/
    /**/                                                                        /**/
    /**/    //LEHRER        ->  LEVEL -> 0 ->   Stundenplan (lesen)             /**/
    /**/    //                             ->   Anwesenheit (nachtragen)        /**/
    /**/    //                             ->   Stundenberichtsheft (kein FBL)  /**/
    /**/    //                             ->   Profile                         /**/
    /**/    //                             ->   Klassen�bersicht                /**/
    /**/    //                             ->   News                            /**/
    /**/    //                             ->   Noten (eingeschr�nkt)           /**/
    /**/    //                  LEVEL -> 1 ->   Stundenberichtsheft (FBL)       /**/
    /**/    //                             ->   Klassen aktivieren/deaktivieren /**/
    /**/                                                                        /**/
    /**/    //Sekret�rin                   ->   Anwesendheit!                   /**/
    /**/                                                                        /**/
    /******************************************************************************/


    public function getRights($typ) {

        switch($typ)
        {
            case ADMIN:
                {
                    
                }
                
            case FBL:
                {

                }

            case LEHRER:
                {

                }

            case SCHUELER:
                {

                }

            default:
                {
                    // :) Reality is for people with no imagination!
                }
        }

    }

}

?>
