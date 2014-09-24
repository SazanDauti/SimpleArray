<?php
/** SimpleArray Class
 * @author Sazan Dauti
 * @version 1.0
 * @website https://github.com/SazanDauti/SimpleArray/
 * @copyright 2014 - 2014 - Sazan Dauti
 * @license LICENSE.md
 * 
 *  Copyright (C) 2014 - 2014  Sazan Dauti
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 * 
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 * 
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>
 * 
 */
class SimpleArray {
    private $arr = array();
    
    public function addArray($array){
	   if (count($array) > 0){
		   foreach($array as $value){
			   array_push($this->arr, $value);
		   }
	   }
    }
    public function addI($index, $value) {
        if ($index >= 0 && $index <= count($this->arr) - 1) {
            $temp = array();
            for ($i = 0; $i < $index; $i++) {
                array_push($temp, $this->arr[$i]);
            }
            array_push($temp, $value);
            for ($i = $index; $i < count($this->arr); $i++) {
                array_push($temp, $this->arr[$i]);
            }
            $this->arr = array();
            for ($i = 0; $i < count($temp); $i++) {
                array_push($this->arr, $temp[$i]);
            }
        }
    }
    public function add($value) {
        array_push($this->arr, $value);
    }
    public function set($index, $value) {
        if ($index >= 0 && $index <= count($this->arr) - 1) {
            $this->arr[$index] = $value;
        }
    }
    public function change($value, $newVal) {
        $temp = array();
        for ($i = 0; $i < count($this->arr); $i++) {
            $cVal = $this->arr[$i];
            if ($cVal == $value) {
                $this->arr[$i] = $newVal;
            }
        }
    }
    public function size() {
        return count($this->arr);
    }
    public function get($index) {
        if ($index >= 0 && $index <= count($this->arr) - 1) {
            return $this->arr[$index];
        }
    }
    public function getV($value) {
        $temp = array();
        for ($i = 0; $i < count($this->arr); $i++) {
            $cVal = $this->arr[$i];
            if ($cVal == $value) {
                array_push($temp, $i);
            }
        }
        return $temp;
    }
    public function remove($index) {
        if ($index >= 0 && $index <= count($this->arr) - 1) {
            unset($this->arr[$index]);
            $this->arr = array_values($this->arr);
        }
    }
    public function removeV($value) {
    	$temp = array();
        for ($i = 0; $i < count($this->arr); $i++) {
            if ($this->arr[$i] == $value) {
                array_push($temp, $i);
            }
        }
       foreach ($temp as $val){
       	unset($this->arr[$val]);
       }
       $this->arr = array_values($this->arr);
    }
    public function clear() {
        $this->arr = array();
    }
    public function arr(){
	    return $this->arr;
    }
}
?>
