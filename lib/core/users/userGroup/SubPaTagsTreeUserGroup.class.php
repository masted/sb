<?php

class SubPaTagsTreeUserGroup extends SubPaTagsTree {

  protected function getTags() {
    $oTags = parent::getTags();
    $oTags->getCond()->addF('userGroupId', $this->ctrl->userGroup['id']);
    return $oTags;
  }

}
