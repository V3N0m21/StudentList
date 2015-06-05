<?php
class Paginator {
	public $currentPage;
	public $itemsPerPage;
	public $currentItem;
	public $start;
	public $end;
	public $pages;

	public function __construct()
	{
		$this->itemsPerPage = 10;
		$this->currentItem = 0;
		$this->currentPage = 1;
		$this->start = 0;
		$this->end = 10;
	}

	public function countPages($rows)
	{
		$this->pages = ceil($rows/$this->itemsPerPage);
		for($x=1;$x<=$this->pages; $x++)
			{$numbers[] = $x;}
		return $numbers;
	}

	public function setPages($current = 1, $max)
	{
		$this->currentPage = $current;
		$this->start = ($this->currentPage * $this->itemsPerPage) - $this->itemsPerPage;
		$this->end = $this->currentPage * $this->itemsPerPage;
		if ($this->end > $max) {
			$this->end = $max;
		}

	}

	public function paginate()
	{
		if(isset($_GET['current'])){
			$this->currentPage = $_GET['current'];
		}
	}

	public function displayButtons()
	{
		$this->pages = ceil($this->total/$this->itemsPerPage);
		$html = '<ul>';
		for ($i = 1; $i <= $this->pages; $i++){
             return $i;
	}

}
}