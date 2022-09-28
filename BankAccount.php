<?php 
class BankAccount{
    private $balance; 

    public function __construct($balance){
        $this->balance = $balance;
    }
    function getBalance(){
        return $this->balance;
    }

    public function deposit($amount){
        if($amount > 0 ){
            return $this->balance += $amount;
        }
    }
}

class SavingAccount extends BankAccount{
    private $interestRate;
    public function __construct($balance, $interestRate){
        parent::__construct($balance);
        $this->interestRate = $interestRate;
    }

    public function setInterestRate($interestRate){
        $this->interestRate = $interestRate;
    }

    public function addInterest(){
        $interest = $this->interestRate * $this->getBalance();
        $this->deposit($interest);
    }
}

$account = new SavingAccount(100, 0.05);
$account->addInterest();
echo $account->getBalance();
?>