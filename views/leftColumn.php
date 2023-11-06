        <div class="container-fluid">
        <div class="row">
        
        <!-- Left Column -->
        <div class="col-md-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard"> <?php echo $textDasboardDashboard;?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="settings"> <?php echo $textDasboardSettings;?></a>
                </li>
                <li class="accordion" id="accordion_wrapper">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <?php echo $textDasboardDrinks;?>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordion_wrapper">
                        <div class="accordion-body">
                            <a class="nav-link" href="drinksCategories"><?php echo $textDasboardDrinksCategories;?></a>
                            <a class="nav-link" href="drinksList"><?php echo $textDasboardDrinksList;?></a>
                            <a class="nav-link" href="drinksAdd"><?php echo $textDasboardAddDrink;?></a>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 <?php echo $textDasboardDishes;?>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion_wrapper">
                        <div class="accordion-body">
                            <a class="nav-link" href="dishesList"><?php echo $textDasboardDishesList;?></a>
                            <a class="nav-link" href="dishesAdd"><?php echo $textDasboardAddDish;?></a>
                            <a class="nav-link" href="dishesCategories"><?php echo $textDasboardDishesCategories;?></a>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 <?php echo $textDasboardUsers;?>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion_wrapper">
                        <div class="accordion-body">
                            <a class="nav-link" href="userList"><?php echo $textDasboardUserList;?></a>
                            <a class="nav-link" href="userType"><?php echo $textDasboardUserType;?></a>
                            <a class="nav-link" href="userAdd"><?php echo $textDasboardUserAdd;?></a>
                        </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="completedTables"><?php echo $textDasboardCompletedTables;?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="statistics"> <?php echo $textDasboardStatistics;?></a>
                </li>
            </ul>
        </div>