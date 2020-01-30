<?php
error_reporting(E_ERROR | E_PARSE);


class Burger {
    private $name ="";
    private $bread ="";
    private $meat ="";
    private $price ="";
    private $extra1="";
    private $extra1Price ="1.0";
    private $extra2="";
    private $extra2Price ="2.0";
    private $extra3="";
    private $extra3Price ="3.0";
    private $extra4="";
    private $extra4Price="4.0";


    public function __construct($name, $bread, $meat, $price) {
        $this->name = $name;
        $this->bread = $bread;
        $this->meat = $meat;
        $this->price =$price;

    }
    public function newBurx() {
        $newPrice = $this->price;
        $newPrice = $newPrice+ $this->extra1Price;
        $newPrice = $newPrice+ $this->extra2Price;
        $newPrice = $newPrice+ $this->extra3Price;
        $newPrice = $newPrice+ $this->extra4Price;


        return  "Your order is: ".$this->name. $this->meat. $this->bread. $this->price."<br>". $this->extra1 .$this->extra1Price ."<br>".$this->extra2
            .$this->extra2Price."<br>". $this->extra3. $this->extra3Price .'<br>'. $this->extra4 .$this->extra4Price. "<br>"."Your total cost is: ".$newPrice;

    }

    //valitakse burgerile lisa asju

    public function extraChoice1 ($extra1, $extra1Price){
        $this->extra1=$extra1;
        $this->extra1Price=$extra1Price;
    }

    public function extraChoice2 ($extra2, $extra2Price){
        $this->extra2=$extra2;
        $this->extra2Price=$extra2Price;
    }

    public function extraChoice3($extra3, $extra3Price){
        $this->extra3=$extra3;
        $this->extra3Price=$extra3Price;
    }

    public function extraChoice4($extra4, $extra4Price){
        $this->extra4=$extra4;
        $this->extra4Price=$extra4Price;
    }
}

$generate = new Burger("Bacon burger with ", "regular ", "beef ", 2.00 ."€");
echo "<br>";
echo "<br>";
$generate ->extraChoice1("bacon ", 1.0."€");
$generate ->extraChoice2("cheese ", .5 ."€");
$generate ->extraChoice3("bbq sauce ", .6 ."€");
$generate ->extraChoice4("pickles ", .5 ."€");

$total = $generate->newBurx();

echo "<h2>Regular Burger</h2>";
echo "<br>";
echo  $total . "&euro;";


echo "<hr>";

echo "<h2>Healthy burger</h2>";
class healthyBurger extends Burger {
    private $extra5="";
    private $extra5Price="";
    private $extra6="";
    private $extra6Price="";
    private $name="";
    private $bread="";
    private $meat="";
    private $price="";


    public function __construct($name, $bread, $meat, $price)
    {
        $this->name = $name;
        $this->bread = $bread;
        $this->meat = $meat;
        $this->price =$price;

    }
    public function newHealthy() {
        $newPrice = $this->price;
        $newPrice = $newPrice+$this->extra5Price;
        $newPrice = $newPrice+$this->extra6Price;
        return  "Your order is: ".$this->name. $this->bread .$this->meat. $this->price. "<br>".$this->extra5 .$this->extra5Price ."<br>".$this->extra6 .$this->extra6Price."<br>"."Your total cost is: ".$newPrice ;

    }

    public function extraChoice5($extra5, $extra5Price){
        $this->extra5=$extra5;
        $this->extra5Price=$extra5Price;
    }
    public function extraChoice6($extra6, $extra6Price){
        $this->extra6=$extra6;
        $this->extra6Price=$extra6Price;
    }


}
$generate = new healthyBurger("Big healthy with ","Sprouted whole grain and ", "Fish", 6.00 ."€");
$generate ->extraChoice5("Salad " , 3 ."€");
$generate ->extraChoice6("soy sauce " , 3 ."€");

$totalHealthy=$generate->newHealthy();
$burger=$generate->newBurx();

echo  $totalHealthy. "&euro;";



echo "<br>";
echo "<hr>";
echo "<h2>Lux Burx</h2>";


class luxBurx extends Burger {
    private $extra7 ="";
    private $extra7Price="";
    private $extra8 ="";
    private $extra8Price="";
    private $name="";
    private $bread="";
    private $meat="";
    private $price="";

    public function __construct($name, $bread, $meat, $price){

        $this->name = $name;
        $this->bread = $bread;
        $this->meat = $meat;
        $this->price =$price;

    }
    public function newLuxBurx(){
        $newPrice = $this->price;
        $newPrice = $newPrice+$this->extra7Price;
        $newPrice = $newPrice+$this->extra8Price;
        return  "Your order is: ".$this->name. $this->bread .$this->meat. $this->price."<br>".$this->extra7 .$this->extra7Price."<br>".$this->extra8 .$this->extra8Price."<br>"."Your total cost is: ".$newPrice ;
    }

    public function extraChoice7($extra7, $extra7Price){
        $this->extra7=$extra7;
        $this->extra7Price=$extra7Price;
    }
    public function extraChoice8($extra8, $extra8Price){
        $this->extra8=$extra8;
        $this->extra8Price=$extra8Price;
    }
}
$generate = new luxBurx("Lux Burx with ","Golden bread and ","Gold meat ",860.0 ."€");
$generate ->extraChoice7("Golden potatoes", 10000.0 ."€");
$generate->extraChoice8("Golden whiskey",1000.0 ."€");

$totalLux=$generate->newLuxBurx();
$burger=$generate->newBurx();
echo  $totalLux. "&euro;";