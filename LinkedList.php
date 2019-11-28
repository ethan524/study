<?php

class LinkedList
{
	public $maxLength;		//最大长度
	public $list;			//数组
	public $length;			//计数

	/**
	 * [__construct 初始化]
	 * @param [type] $len [description]
	 * @param Array  $arr [description]
	 */
	public function __construct($len, Array $arr){
		if($len <= 0){
			var_dump("线性表长度不能为0");
			return false;
		}

		if(count($arr) == 0){
			var_dump("数组不能为空");
			return false;
		}

		$this->maxLength = $len;
		$this->list = $arr;
		$this->length = count($arr);
	}

	/**
	 * [isFull 判断是否已满]
	 * @return boolean [description]
	 */
	public function isFull(): bool{
		return $this->maxLength == count($this->list);
	}

	/**
	 * [append 添加元素]
	 * @param  [type] $elem [要添加的元素]
	 * @return [type]       [bool]
	 */
	public function append($elem): bool {
		if( $this->isFull() ){
			return false;
		}
		$this->list[ $this->length ] = $elem;
		$this->length++;
		return true;
	}

	/**
	 * [insert 在指定位置插入元素]
	 * @param  [type] $elem  [description]
	 * @param  int    $index [description]
	 * @return [type]        [description]
	 */
	public function insert($elem, int $index): bool{
		if($index <=0 || $index > $this->maxLength){
			var_dump("插入范围出错");
			return false;
		}

		for($i=$this->maxLength-1;$i>$index-1;$i--){
			$this->list[$i-1] = $this->list[$i];
		}

		$this->list[$index] = $elem;
		$this->length++;
		return true;
	}

}

$list = new LinkedList(20, [1,2,3,4,5,6,7,8,9]);
var_dump($list->list);

$list->insert(10,1);
var_dump($list->list);
?>