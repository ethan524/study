<?php

class LinkedList
{
	public $maxLength;		//最大长度
	public $list;			//数组
	public $length;			//计数

	/**
	 * [initList 初始化顺序线性表]
	 * @param  int    $maxLength [description]
	 * @return [type]            [description]
	 */
	public function initList(int $maxLength){
		if($maxLength <= 0){
			var_dump("线性表长度不能为0");
			return false;
		}

		$this->maxLength = $maxLength;
		$this->list = array_fill(0,$this->maxLength, null);
		$this->length = 0;
	}

	/**
	 * [isFull 判断是否已满]
	 * @return boolean [description]
	 */
	public function isFull(): bool {
		return $this->maxLength == $this->length;
	}

	/**
	 * [isEmpty 判断是否为空]
	 * @return boolean [description]
	 */
	public function isEmpty(): bool {
		return 1 > $this->length;
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
		
		// 插入操作：从后往前遍历
		for($i=$this->maxLength-1;$i<$index;$i--){
			$this->list[$i+1] = $this->list[$i];
		}
		$this->list[ $index-1 ] = $elem;
		$this->length++;
		return true;
	}

	/**
	 * [get 获取指定元素]
	 * @param  int    $index [description]
	 * @return [type]        [description]
	 */
	public function get(int $index){
		if( $index <= 0 || $index > $this->maxLength){
			var_dump("没有第".$index."个元素");
			return false;
		}
		return $this->list[$index-1];
	}

	/**
	 * [delete 删除指定元素]
	 * @param  int    $index [description]
	 * @return [type]        [description]
	 */
	public function delete(int $index):bool {
		if($index < 1 || $index > $this->maxLength){
			var_dump("没有第".$index."个元素");
			return false;
		}

		if( $this->isEmpty() ){
			var_dump("线性表为空，不能删除");
			return false;
		}

		// 删除操作 从前往后遍历，交换相邻两个元素位置，让下一个等于当前
		for($i=$index; $i<$this->maxLength-1; $i++){
			$this->list[ $i-1 ] = $this->list[ $i ];
		}
		$this->list[$index-1] = null;
		$this->length--;
		return true;
	}

	/**
	 * [traversal description]
	 * @return [type] [description]
	 */
	public function traversal(){
		if($this->isEmpty()){
			echo '[ ]<br>';
		}else{
			$str = '[';
			foreach ($this->list as $key => $value) {
				$value = $value == null ? 'null' : $value;
				$str .= $value.',';
			}
			echo trim($str,",").']<br>';
		}
	}

}

$list = new LinkedList();
$list->initList(20);
$list->traversal();
$list->append(1);
$list->append(2);
$list->append(3);
$list->append(4);
$list->append(5);
$list->append(6);
$list->append(7);
$list->traversal();
var_dump($list->length);
var_dump(count($list->list));

// $list->delete(1);
// // $list->delete(7);
// $list->traversal();
// var_dump($list->length);
// var_dump(count($list->list));

// $list->insert(99,10);
// $list->traversal();
// var_dump($list->length);
// var_dump(count($list->list));

// $list->delete(1);
// // $list->delete(7);
// $list->traversal();
// var_dump($list->length);
// var_dump(count($list->list));

?>