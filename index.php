<?php

class BasicInspection {

	public function getCost()
	{
		return 19;
	}
}

echo (new BasicInspection())->getCost();