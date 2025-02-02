<?php
 


class CheckingAccount extends Account 
{
	const OVERDRAW_LIMIT = -200;

	public function withdrawal($amount) 
	{
        
        $amount = (float)$amount;

        if ($amount > 0 && $this->balance - $amount >= self::OVERDRAW_LIMIT) {
            $this->balance -= $amount;
            return true;
        } else {
            return false;
        }

	}
	public function getAccountDetails() 
	{
		$accountDetails = "<h2>Checking Account</h2>";
		$accountDetails .= parent::getAccountDetails();
		
		return $accountDetails;
	}
}