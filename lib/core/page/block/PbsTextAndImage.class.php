<?php

class PbsTextAndImage extends PbsAbstract {

  static $title = 'Текст + изображение';
  
  protected function initFields() {
    $this->fields = [
      [
        'title' => 'Текст',
        'name' => 'text',
        'type' => 'wisiwigSimple2',
        'jsOptions' => ['tinySettings' => [
          'content_css' => Sflm::lib('css')->getUrl('tinyContent')
        ]]
      ],
      [
        'title' => 'Изображение',
        'name' => 'image',
        'type' => 'imagePreview'
      ]
    ];
  }

}