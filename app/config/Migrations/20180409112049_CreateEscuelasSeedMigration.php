<?php
use Migrations\AbstractMigration;

class CreateEscuelasSeedMigration extends AbstractMigration
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
        $populator->addEntity('Escuelas', 1000, [
            'cue' => function() use($faker){
//                220006400
                $val = $faker->numberBetween($min = 1000, $max = 9000);
                return '22'.$val.'00';
            },
            'name' => function() use($faker){
                $val = $faker->numberBetween($min = 1, $max = 1000);
                return 'Escuela Nº '.$val;
            },
            'address' => function() use($faker){
                return $faker->streetAddress();
            },
            'tipo' => 'central',
            'email' => function() use($faker){
                return $faker->safeEmail();
            }, 
            'telefono' => function() use($faker){
                return $faker->tollFreePhoneNumber();
            },
            'latitud' => function() use($faker){
                return $faker->latitude($min = -26, $max = -27);
            },
            'longitud' => function() use($faker){
                return $faker->longitude($min = -58, $max = -61);
            },
            'descripcion' => function() use($faker){
                return $faker->realText($maxNbChars = 50, $indexSize = 2);
            }, 
            'created' => function() use($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },
            'modified' => function() use($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            }, 
            'regionale_id' => function() {
                return rand(1,8);
            },        
        ]);
        
        $populator->execute();
    }
}
