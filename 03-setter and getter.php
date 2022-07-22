<?php
    class Cart{
        private string $firstName;
        private int $cartNum;
        private string $expDate;
        private int $cvv2;
        protected string $bankName;
        
        public function __construct($name,$cartNum){
            $this->firstname = $name;
            $this->cartNum = $cartNum;
        }
        public function setCart($paramNum)
        {
            $this->cartNum = $paramNum;
        }
        public function getNum()
        {
            return $this->cartNum;
        }
    }
    $mehdibaqeriCart = new Cart("mehdi",'6037701182265121');
    echo  $mehdibaqeriCart->getNum();
    $mehdibaqeriCart->setCart(6037701532343974);
    $mehdibaqeriCart->getNum();

    