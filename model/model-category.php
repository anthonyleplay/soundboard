<?php
class Category

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
     * Méthode pour recuperer toutes les categories de la bdd category
     * @param none
     * 
     */
    public function getAllCategory()
    {

        $query = 'SELECT `category`.`category_id`, `category`.`category_name`
        FROM `category` 
        ORDER BY `article`.`article_id`';
        

        try {
            // Permet récupérer toutes les categories de la bdd category //
            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->execute();
            $resultContacts = $resultQuery->fetchAll();

            if ($resultContacts) {

                return $resultContacts;
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    /**
     * Méthode pour ajouter une nouvelle categorie dans la BDD avec les données renseignées.
     * @param type varchar
     * 
     */
    public function addCategory($categoryName)
    {

        $query = 'INSERT INTO `category` (`category_name`) 
            VALUES (:categoryName)';

        try {
            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':categoryName', $categoryName);

            $resultQuery->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }



}
