<?php
class User

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
     * Méthode pour vérifier que le mail est bien dans la bdd et si c'est le cas vérifier que le mdp correspond (userMail, userPassword) 
     * @param type varchar, varchar
     * @return type boolean
     */
    public function verifyLogin($loginMail, $loginPassword)
    {

        $query = 'SELECT `user_mail`, `user_password` FROM `user` WHERE `user_mail` = :user_mail ';

        try {

            $resultQuery = $this->bdd->prepare($query);
            $resultQuery->bindValue(':user_mail', $loginMail);
            $resultQuery->execute();

            $resultUser = $resultQuery->fetch();

            if ($resultUser) {

                return password_verify($loginPassword, $resultUser['user_password']);
            } else {

                return false;
            }
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }



}
