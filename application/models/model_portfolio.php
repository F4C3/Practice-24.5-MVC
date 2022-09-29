<?php

class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		
		return array(
			
			array(

	"month" => "январь",
	"lern" => "html"
    ),

    array(

        "month" => "февраль",
        "lern" => "css"
    ),

    array(

        "month" => "март",
        "lern" => "javascript"
    ),

    array(

        "month" => "апрель",
        "lern" => "php"
    ),

    array(

        "month" => "май",
        "lern" => "Работу с базами данных"
    ),
    array(

        "month" => "июнь",
        "lern" => "linux"
    ),

    array(

        "month" => "июль",
        "lern" => "ООП"
    ),

		);
	}

}
