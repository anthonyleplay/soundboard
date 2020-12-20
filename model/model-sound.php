<?php
class Sound

{
    private $bdd;

    public function __construct()
    {
        try {
            //avec cette commande je me connect sur localhost 'pension_wenki' avec le compte anthonylp
            $this->bdd = new PDO('mysql:host=localhost;dbname=soundboard;charset=utf8', 'root', '');
            // Activation des erreurs PDO
            $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
            $this->bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour recuperer toutes les son d'une categorie la bdd sound
     * @param type integer
     * 
     */
    public function getAllsoundToCategory($categoryId)
    {

        $query = 'SELECT   `sound`.`sound_id`, `sound`.`sound_name`, `sound`.`sound_link`, `sound`.`sound_img`, `sound`.`sound_datetime`, `category`.`category_id`, `category`.`category_name`
        FROM `sound`
        INNER JOIN `category` 
        ON `sound`.`category_id` = `category`.`category_id`
        ORDER BY `sound`.`sound_name`';
        

        try {
            // Permet récupérer toutes les categories de la bdd category //
            $resultQuery = $this->bdd->prepare($query);
            // ici on vérifie que la parametre de fonction est bien un entier numerique
            $resultQuery->bindValue(':petId', (int)$categoryId, PDO::PARAM_INT);
            $resultQuery->execute();
            $resultSoundArray = $resultQuery->fetchall();

            if ($resultSoundArray) {
                // si le tableau existe retourne le tableau
                return $resultSoundArray;
            } else {
                // sinon false
                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }


    
}
