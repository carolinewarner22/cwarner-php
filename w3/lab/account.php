<?php
abstract class Account 
{
	protected $accountId;
	protected $balance;
	protected $startDate;

	
	public function __construct ($id, $bal, $startDt) 
	{
		$this->accountId = $id;
		$this->balance = $bal;
		$this->startDate = $startDt;
	} 
	
	public function deposit ($amount) 
	{
        $amount = (float)$amount;
        if ($amount > 0){
            $this->balance += $amount;
            return true;
        }
        else{
            return false;
        }
	} 

	abstract public function withdrawal($amount);
	
	public function getStartDate() 
	{
		return $this->startDate;
	} 

	public function getBalance() 
	{
		return $this->balance;
	}

	public function getAccountId() 
	{
		return $this->accountId;
	}
	protected function getAccountDetails()
	{
		echo "<li>ID: ", $this->accountId, "</li>";
		echo "<li>Balance: ", $this->balance, "</li>";
		echo "<li>Start Date: ", $this->startDate, "</li>";
	} 
	
}

