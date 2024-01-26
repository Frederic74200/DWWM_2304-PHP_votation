<?php 

namespace App\Controllers;

use App\Dao\CarsRepository;
use App\Models\Car;

use function trim, file_get_contents;

/**
 * Contrôleur pour la gestion du modèle 'Car'
 */
class CarsController 
{
    // private Car $car;

    public function __construct()
    {
        //echo __CLASS__;
    }

    /**
     * Affiche le contenu de la table
     */
    public function index()
    {
        $repo = new CarsRepository();

        $result = $repo->selectAll();

       echo '<pre>' . var_export($result, true) . '</pre>';

       //echo json_encode($result, JSON_PRETTY_PRINT);
    }

     /**
     * Affiche les informations d'un élément de la table
     */
    public function details($id)
    {
        
    }

        /**
     * Ajoute un nouvbel élément dans la table
     */
    public function insert()
    {
        echo __METHOD__;
    }

     /**
     * Modifie un élément existant en base de données
     */
    public function update($id)
    {

    }

     /**
     * Supprime un élément existant en base de données
     */
    public function delete($id)
    {

    }
}