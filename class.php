<?php 
declare(strict_types = 1);
class superHero {
    // Se puede crear el constructor como en java solo que con $this->variable = $variable;
    // Se puede crear apartir de php 8.0 de esta forma corta.
    public function __construct( 
        private string $name,
        private array $powers,
        private string $origin){
            
        }

    public function attack(){
        $power = implode(", ",$this->powers); // Metodo para separar arrays.
        return "$this->name is attacking. The super power is $power and the super is from $this->origin";
    }
    public static function randomHero(){
        $names = ["thor","superman","batman"];
        $powers = [["volar", "Superfuerza"],["Velocidad", "rayos lazer"]];
        $origins = ["Fate","Dragon ball","One Punch"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $origin = $origins[array_rand($origins)];

        return new self($name,$power,$origin);
    }
}

$hero = new superHero("Saber",["Sgrima", "Magia", "Teletransportación", "Super resistencia", "Super fuerza", "Armadura"],"Fate");

$objeto = superHero::randomHero();
echo $objeto->attack();

?>