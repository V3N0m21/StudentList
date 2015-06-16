<?php
class Paginator {
	public $currentPage;
	public $itemsPerPage;
	public $currentItem;
	public $start;
	public $end;
	public $pages;
	public $rows;
	public $numbers;

	public function __construct($rows, $current)
	{
		$this->itemsPerPage = 10;
		$this->currentPage = $current;
		$this->rows = $rows;
		$this->end = 10;
		$this->pages = ceil($this->rows/$this->itemsPerPage);
		$this->numbers = array();
	}

	public function countPages()
	{
		
		for($x=1;$x<=$this->pages; $x++)
			{$this->numbers[] = $x;}
			return $this->numbers;
	}

	public function setPages()
	{
		$this->start = ($this->currentPage * $this->itemsPerPage) - $this->itemsPerPage;
		$this->end = $this->currentPage * $this->itemsPerPage;
		if ($this->end > $this->rows) {
			$this->end = $this->rows;
		}

	}

	public function paginate()
	{
		if(isset($_GET['current'])){
			$this->currentPage = $_GET['current'];
		}
	}

	function pagesLinks($page, $sort, $dir, $search)
{
	$link = "?current=$page";
	$link .= "&sort=$sort";
	$link .= "&dir=$dir";
	$link .= "&search=" . u($search);
	return $link;
}


}
