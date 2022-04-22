<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OneXTable extends Component
{

	public $firstNum;
	public $secondNum;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($firstNum, $secondNum)
    {
        $this->firstNum = $firstNum;
        $this->secondNum = $secondNum;
    }
    
    public function MultiResult():int {
    	return $this->firstNum * $this->secondNum;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.one-x-table');
    }
}
