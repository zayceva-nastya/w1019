<?php

namespace View\Html;

class TableEdited extends Table
{
    protected $type;

    public function setControllerType(string $type)
    {
        $this->type = $type;
        return $this;
    }
    public function data(array $data): self
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "\t<tr>\n";
            foreach ($row as $cell) {
                $str .= "\t\t<td>$cell</td>\n";
            }
            $str .= "\t\t<td><a href='?action=del&type=$this->type&id=$row[id]'>❌</a></td>\n";
            $str .= "\t\t<td><a href='?action=showedit&type=$this->type&id=$row[id]'>✏</a></td>\n";
            $str .= "\t</tr>\n";
        }

        $this->data = $str;
        return $this;
    }
}
