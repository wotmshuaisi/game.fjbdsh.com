<?php
return array('app' => 'Admin', 'model' => 'Backup', 'action' => 'default', 'data' => '', 'type' => '1', 'status' => '1', 'name' => '备份管理', 'icon' => 'database', 'remark' => '', 'listorder' => '21', 'children' => array(array('app' => 'Admin', 'model' => 'Backup', 'action' => 'restore', 'data' => '', 'type' => '1', 'status' => '1', 'name' => '数据还原', 'icon' => '', 'remark' => '', 'listorder' => '0',), array('app' => 'Admin', 'model' => 'Backup', 'action' => 'index', 'data' => '', 'type' => '1', 'status' => '1', 'name' => '数据备份', 'icon' => '', 'remark' => '', 'listorder' => '0', 'children' => array(array('app' => 'Admin', 'model' => 'Backup', 'action' => 'index_post', 'data' => '', 'type' => '1', 'status' => '0', 'name' => '提交数据备份', 'icon' => '', 'remark' => '', 'listorder' => '0',),),), array('app' => 'Admin', 'model' => 'Backup', 'action' => 'download', 'data' => '', 'type' => '1', 'status' => '0', 'name' => '下载备份', 'icon' => '', 'remark' => '', 'listorder' => '1000',), array('app' => 'Admin', 'model' => 'Backup', 'action' => 'del_backup', 'data' => '', 'type' => '1', 'status' => '0', 'name' => '删除备份', 'icon' => '', 'remark' => '', 'listorder' => '1000',), array('app' => 'Admin', 'model' => 'Backup', 'action' => 'import', 'data' => '', 'type' => '1', 'status' => '0', 'name' => '数据备份导入', 'icon' => '', 'remark' => '', 'listorder' => '1000',),),);