<?php
use Migrations\AbstractMigration;

class CreateRegionalesSeedMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);
        $populator->addEntity('Regionales', 8, [
            'name' => function() {
                return 'Zona'.rand(1, 10);
            },
           'descripcion' => function() use($faker){
                return $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
           },
           'created' => function() use($faker) {
              return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },
            'modified' => function() use($faker) {
              return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },        
        ]);
            
        $populator->execute();     
    }
}
