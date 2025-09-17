<?php
class DogApp{
    private $api;

    public function __construct(DogApi $api){
        $this->api = $api;
    }

    public function showRandomDogs($limit = 5){
        $dogs = $this->api->getRandomDogs($limit);

        if(empty($dogs)){
            echo "<p>No Dogs found</p>";
            return;
        } 
        ?>
    

<section class="dog-gallery">
    <h2>Explore a gallery of pawsome dogs - a dose of pure joy</h2>
        <div class="row">
            <?php foreach($dogs as $dog): ?>
                <div class="col">
                    <img src="<?= htmlspecialchars($dog['url']) ?>" alt="Dog Image">
            </div>
            <?php endforeach;?>
            </div>
        </section>
        <?php
    }
}
?>