<?php
class Paginator {
	public $currentPage;
	public $itemsPerPage;
	public $currentItem;
	public $start;
	public $end;
	public $pages;
	public $rows;

	public function __construct($rows, $current)
	{
		$this->itemsPerPage = 10;
		$this->currentItem = 0;
		$this->currentPage = $current;
		$this->rows = $rows;
		$this->start = 0;
		$this->end = 10;
	}

	public function countPages()
	{
		$this->pages = ceil($this->rows/$this->itemsPerPage);
		for($x=1;$x<=$this->pages; $x++)
			{$numbers[] = $x;}
		if (!empty($numbers)) {
			return $numbers;
		} else {return null;}
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
	$link .= "&amp;sort=$sort";
	$link .= "&amp;dir=$dir";
	$link .= "&amp;search=" . h($search);
	return $link;
}


}
