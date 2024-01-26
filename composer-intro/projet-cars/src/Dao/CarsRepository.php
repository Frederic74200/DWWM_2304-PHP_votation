<?php 

namespace App\Dao;

use PDO;
use App\Models\Car;

/**
 * Contient les requêtes vers la base de données pour la talbe "cars"
 */
class CarsRepository 
{
    private PDO $db;


    public function __construct()
    {
        $this->db = DbConnect::getInstance();
    }

    /**
     * Récupère toutes les lignes de la table
     */
    public function selectAll(): array 
    {
        $rq = "SELECT car_id, car_brand, car_model, car_price FROM cars;";

        $stmt = $this->db->query($rq);

        $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'App\\Models\\Car');


        return $result;
    }

    /**
     * Récupère 1 élément de la table identifié par $car_id
     * @param int $car_id l'identifiant de l'élément à récupérer
     * @return Car l'élément trouvé ou null si aucune correspondance
     */
    public function selectOne(int $car_id): ?Car 
    {
        return new Car();
    }

    /**
     * Ajoute un nouvel élément dans la table
     * @param Car $new_car les données du nouvel élément à ajouter
     * @return bool TRUE si l'ajout a réussi, sinon FALSE
     */
    public function insert(Car $new_car): bool
    {
        return false;
    }

    /**
     * Met à jour un élément existant dans la table
     * @param Car $car_to_update les données de l'élément à modifier
     * @return bool TRUE si la modification a réussi, sinon FALSE
     */
    public function update(Car $car_to_update): bool
    {
        return false;
    }

    /**
     * Supprime un élément de la table identifié par $car_id
     * @param int $car_id l'identifiant de l'élément à supprimer
     * @return bool TRUE si la suppression a réussi, sinon FALSE
     */
    public function delete(int $car_id): bool
    {
        return false;
    }
}
