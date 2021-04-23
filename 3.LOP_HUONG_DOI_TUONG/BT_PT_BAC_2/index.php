<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pt bậc 2</title>
</head>
<body>
<form action="" method="POST">
<div>Nhập số a</div>
    <input type="number" name="so_a"/>
<div>Nhập số b</div>
    <input type="number" name="so_b"/>
<div>Nhập số c</div>
    <input type="number" name="so_c"/>
    <input type="submit" value="kết quả"/>
</form>
    <?php
    class QuadraticEquation{
        public $so_a;
        public $so_b;
        public $so_c;
        public $delta;
        public function __construct($so_a, $so_b, $so_c){
            $this->so_a = $so_a;
            $this->so_b = $so_b;
            $this->so_c = $so_c;
            $this->delta = $this->so_b*$this->so_b - 4*$this->so_a*$this->so_c;
        }
        public function get_so_a(){
            return $this->so_a;
        }
        public function get_so_b(){
            return $this->so_b;
        }
        public function get_so_c(){
            return $this->so_c;
        }
        public function getDiscriminant(){
           return $this->delta;
        }
        public function getRoot1(){
            return (-$this->so_b + pow($this->delta,0.5))/(2*$this->so_a);
        }
        public function getRoot2(){
            return (-$this->so_b - pow($this->delta,0.5))/(2*$this->so_a);
        }
    };
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $so_a = $_POST["so_a"];
        $so_b = $_POST["so_b"];
        $so_c = $_POST["so_c"];
    
        $delta = $so_b*$so_b - 4*$so_a*$so_c;
        $can_bac_2 = new QuadraticEquation($so_a, $so_b, $so_c);
        if($delta > 0){
            echo "Nghiệm của phương trình là x1 = {$can_bac_2->getRoot1()} và x2 = {$can_bac_2->getRoot2()}";
        }else if($delta == 0){
            echo "Nghiệm của phương trình là x1 = x2 =".-$so_b/(2*$so_a);
        }else{
            echo "Phương trình vô nghiệm";
        }
    }
    ?>
</body>
</html>
