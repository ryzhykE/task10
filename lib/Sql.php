<?php

class Sql
{
    protected  $select;
    protected  $from;
    protected  $where;
    protected  $inserts;
    protected  $delete;
    protected  $update;
    protected  $values;
    protected  $setkey;
    protected  $distinct;
    protected  $limits;
    protected  $having;
    protected  $group;
    protected  $join;
    protected  $order;

    public function select($select)
    {
        if ($select !== '*')
        {
            $this->select = 'SELECT ' . $select;
            return $this;
        }
    }

    public function inserter($table , $data)
    {
        $this->inserts = " INSERT INTO " .  $table . " (" . $data . " )";
        return $this;
    }

    public function delites( )
    {
        $this->delete = " DELETE ";
        return $this;
    }

    public function update($table)
    {
        if(isset($table))
        {
        $this->update = "UPDATE " . $table;
        return $this;
        }
        else
        {
            return false;
        }
    }

    public function setkey($set)
    {
        $this->setkey = " SET " . " " . $set . " ";
        return $this;
    }

    public function from($from)
    {
        $this->from = " FROM " .$from;
        return $this;
    }

    public function where($value)
    {
        $this->where = " WHERE "  .  $value ;
        return $this;
    }

    public function values ($values)
    {
        $this->values = " VALUES " . " (" . $values . " )";
        return $this;
    }

    public function distinct($rows)
    {
        $this->distinct = "SELECT DISTINCT" .$rows;
        return $this;
    }

    public function join ($type, $table, $on = '')
    {
        $this->join = ' '.$type.' JOIN '.$table.(!empty($on) ? ' ON '.$on : '');
        return $this;
    }

    public function group($value)
    {
        $this->group = " GROUP BY " .$value;
        return $this;
    }

    public function having($operator,$param,$arg, $param2)
    {
        $this->having = " HAVING " . $operator."( ".$param." )" . $arg . $param2;
        return $this;
    }
    public function order($data, $sort=false)
    {
        if($sort !== false)
        {
            $sort = "DESC";
        }
        $this->order = " ORDER BY " . $data .' '. $sort;
        return $this;
    }
    public function limits($count)
    { if(is_int($count))
    {
        $this->limits = " LIMIT " . $count;
        return $this;
    }
        return false;
    }

    public function execute()
    {
        switch ($this)
        {
            case !empty($this->select):
                return $this->select.$this->from.$this->join.$this->group.$this->having.$this->order .$this->limits;
            case !empty($this->distinct):
                return $this->distinct.$this->from;

            case !empty($this->update):
                return $this->update.$this->setkey.$this->where;

            case !empty($this->delete):
                return $this->delete.$this->from.$this->where;

            case !empty($this->inserts):
                    return $this->inserts.$this->values;
        }
    }

}
