
    <?php
    class User
    {
        public $name;
        public $username;
        public $followercount;
    }
    $placeholderobject = new User ();
    $placeholderobject->name = 'Thijs Schuurman';
    $placeholderobject->username = '@t_schuurman';
    $placeholderobject->followercount = '43';

    print_r ($placeholderobject);
    ?> 

    <?php
    class Basket
    {
        
        public $ItemsTotal;
        public $ShippingCost;
        public $discount;

        public function calculateSubTotal() {

           $subTotal = $this->ItemsTotal + $this->ShippingCost - $this->discount;
           return $subTotal;
        }
    }

    $basket = new Basket();
    $basket->ItemsTotal = 69;
    $basket->ShippingCost = 8;
    $basket->discount = 12;
    var_dump($basket->calculateSubTotal());
  
  
    ?>

    <?php
    class Song {
        public $songID;
        public $title;

    }
$songobject = new Song();
$songobject->songID = 1;
$songobject->title = 'Ares - 3000 A.D.';
print_r ($songobject);
?>





<!-- 
calculator -->


<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkopration($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "dat werkt niet he";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkopration($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Getal 1</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Getal 2</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Actie</td>
        <td><select name="op">
            <option value="+">plus</option>
            <option value="-">min</option>
            <option value="*">keer</option>
            <option value="/">gedeeld door</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

</table>
</form>