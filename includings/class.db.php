<?php

class db
{

    /**************************************************/
    /**/                                            /**/
    /**/    //Klasse zur Verwaltung der Datenbank   /**/
    /**/                                            /**/
    /**************************************************/


    //Verbindungsaufbau beim Laden der Klasse
    public function __construct() {
        
        $conn = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS);

        //�berpr�fung ob Verbindung erfolgreich war
        if(!$conn) {
        echo "Keine Verbindung zum Server ".mysql_error()." m�glich!";
        exit;
        }

        //Verbindung zur Datenbank
        if(!mysql_select_db(MYSQL_DATABASE)) {
        echo "Keine Verbindung zur Datenbank ".mysql_error()." m�glich!";
        exit;
        }
        
    }

    //Beenden der Verbindung beim schlie�en der Klasse
    public function  __destruct() {
        mysql_close();
    }

    public function resolve_Id($FROM='', $ID='', $ID_INT=0) {
        
        $sql = "SELECT name FROM ".$FROM." WHERE ".$ID."=".$ID_INT;

        $result = mysql_query($sql);

        /*
         * Fehlerbehandlung falls die Anfrage fehlt schl�gt
         */
        if(!result) {
            echo "Die Anfrage ".$sql.
                 " konnte nicht bearbeitet werden".mysql_error();
        }

        /*
         * Datenbank ist leer ;)
         */

        if(mysql_num_rows($result)==0) {
            echo "Error: Anfrage wurde nicht durchgef�hrt,
                  da keine Zeilen zum ausgeben gefunden wurden";
        }

         while($data = mysql_fetch_assoc($result)) {

         $ausgabe = $data['name'];

         return $ausgabe;

         }

        mysql_free_result($result); //Aufr�umen
        $this->disconnect();    //Verbindung trennen
        
    }

    public function resolve_Lehrer($ID_INT=0) {

        $sql = "SELECT vorname, nachname FROM lehrer WHERE lehrer_id =".$ID_INT;

        $result = mysql_query($sql);

        /*
         * Fehlerbehandlung falls die Anfrage fehlt schl?gt
         */
        if(!result) {
            echo "Die Anfrage ".$sql.
                 " konnte nicht bearbeitet werden".mysql_error();
        }

        /*
         * Datenbank ist leer ;)
         */

        if(mysql_num_rows($result)==0) {
            echo "Error: Anfrage wurde nicht durchgef?hrt,
                  da keine Zeilen zum ausgeben gefunden wurden";
        }

         while($data = mysql_fetch_assoc($result)) {

         $ausgabe = $data['vorname']." ".$data['nachname'];

         return $ausgabe;

         }

        mysql_free_result($result); //Aufr?umen
        $this->disconnect();    //Verbindung trennen

    }

    //Trennen der Verbindung
    public function disconnect() {
        mysql_close();
    }
}

?>
