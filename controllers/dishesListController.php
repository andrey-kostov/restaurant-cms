<?php 

    require_once ('classes.php');

    class dishesListController extends Controller{

        private $dishesListController;
        
        public function __construct() {
            // Instantiate the Controller class
            $this->dishesListController = new Controller();
        }

        public function index(){
        
            require ('language/textDishes.php');
            require ('language/textCommon.php');
            require('models/dishesModel.php');
            require ('config.php');
        
            $root = $globalRoot;
            $storeCurrency = $globalCurrency;
            $dishesModelInstance = new dishesModel;
    
            
            //Add new dish
            if (isset($_POST["action"]) && $_POST['action'] == 'addNewDish') {
                $formDishName = $_POST["formDishName"];
                $formDishCategory = $_POST["formDishCategory"];
                $formDishRecepie = $_POST["formDishRecepie"];
                $formDishIngredients = serialize($_POST["formDishIngredients"]);
                $formDishPrice = $_POST["formDishPrice"];

                $dishesModelInstance->addNewDish($formDishName,$formDishCategory,$formDishRecepie,$formDishIngredients,$formDishPrice);
            }

            // //Display categories
            $dishesCategories = $dishesModelInstance->getdishesCategories();
            
            

            
            
            require ('views/dishes/dishesList.php');
        }

        function ajaxSearchIngredients(){
            //Search for ingredients
            if (isset($_POST['action']) && $_POST['action'] == 'searchIngredients') {
                require('models/dishesModel.php');
                $dishesModelInstance = new dishesModel;
                    
                $searchIngredients = $_POST["searchedVal"];
                $searchResults = $dishesModelInstance->searchIngredients($searchIngredients);
                
                echo json_encode(['searchResults' => $searchResults]);
            }
        }
    }

?>