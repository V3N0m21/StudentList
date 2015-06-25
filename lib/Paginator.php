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


		$this->start = ($this->currentPage * $this->itemsPerPage) - $this->itemsPerPage;
		$this->end = $this->currentPage * $this->itemsPerPage;
		if ($this->end > $this->rows) {
			$this->end = $this->rows;
		};
	}

	public function countPages()
	{
		
		for($x=1;$x<=$this->pages; $x++)
			{$this->numbers[] = $x;}
			return $this->numbers;
	}

	


	function pagesLinks($page, $sort, $dir, $search)
{
	
	$data = array('current' => "$page",
				  'sort' =>"$sort",
				  "dir"=>"$dir",
				  "search" => "$search");
	$link = http_build_query($data);
	return $link;
}


}
