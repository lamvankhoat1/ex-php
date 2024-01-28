<?php

  function is_empty($label) {
    return !empty($_POST[$label]);
  }

  function set_value($label) {
    global $$label;
    if(!empty($$label)) return $$label;
  }

  function is_fullname($label) {
    if(!empty($_POST[$label])) {
        $pattern = '/^[A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*(?:[ ][A-ZÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐ][a-zàáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđ]*)*$/';
        if(!preg_match($pattern, $_POST[$label], $matchs)) {
            return false;
        }
        global $$label;
        $$label = $_POST[$label];
        return true;
    }
  }

  function is_username($label) {
    if(!empty($_POST[$label])) {
        $pattern = '/^[a-z0-9_-]{3,15}$/';
        if(!preg_match($pattern, $_POST[$label], $matchs)) {
            return false;
        }
        global $$label;
        $$label = $_POST[$label];
        return true;
    }
  }

  function is_password($label) {
      if(!empty($_POST[$label])) {
        $pattern = '/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/';
        if(!preg_match($pattern, $_POST[$label], $matchs)) {
            return false;
        }
        global $$label;
        $$label = $_POST[$label];
        return true;
      }
  }

  function is_phone($label) {
    if(!empty($_POST[$label])) {
      $pattern = '/^(0|84)(2(0[3-9]|1[0-689]|2[0-25-9]|3[2-9]|4[0-9]|5[124-9]|6[0369]|7[0-7]|8[0-9]|9[012346789])|3[2-9]|5[25689]|7[06-9]|8[0-9]|9[012346789])([0-9]{7})$/';
      if(!preg_match($pattern, $_POST[$label], $matchs)) {
          return false;
      }
      global $$label;
      $$label = $_POST[$label];
      return true;
    }
}


  function form_error($label) {
    global $error;
    if(!empty($error[$label])){
      return '<p class="error">'.$error[$label].'</p>';
    }
  }
?>