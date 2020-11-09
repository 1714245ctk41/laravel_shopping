<?php

namespace App\Components;

use App\Models\Menu;

class Recusive
{

    private $data;
    private $htmlSelect = '';
    private $htmlMenuSelect = '';
    public function __construct($data)
    {
        $this->data = $data;
    }





    public function categoryRecusive($parentId, $id = 0, $text = '')
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                if (!empty($parentId) && $parentId == $value['id']) {
                    $this->htmlSelect .= "<option selected value=" . $value['id'] . ">" . $text  . $value['name'] . "</option>";
                } else {
                    $this->htmlSelect .= "<option value=" . $value['id'] . ">" . $text  . $value['name'] . "</option>";
                }
                $this->categoryRecusive($parentId, $value['id'], $text . '-');
            }
        }
        return $this->htmlSelect;
    }
    // ! cách đệ quy 2:
    public function menuRecusive($parentId = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem) {
            $this->htmlMenuSelect .= '<option value="' . $data['id'] . '">' . $subMark . $dataItem . '</option>';
            $this->menuRecusive($dataItem['id'], $subMark = '--');
        }
        return $this->htmlMenuSelect;
    }
}