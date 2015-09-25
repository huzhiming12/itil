<?php $_config_vars = array (
  'sections' => 
  array (
    'db' => 
    array (
      'vars' => 
      array (
        'host' => 'localhost:3308',
        'user' => 'root',
        'password' => '123456',
        'db' => 'itildemo',
      ),
    ),
    'uploadfile' => 
    array (
      'vars' => 
      array (
        'extFilters' => '".doc" ,".docx" ,".ppt" ,".pptx" ,".xml" ,".xmlx" ,".pdf" ,".txt" ,".php" ,".html" ,".wmv" ,".asf" ,".rm" ,".rmvb" ,".mpg" ,".mpe" ,".3gp" ,".mov" ,".mp4" ,".avi" ,".mkv" ,".flv" ,".rar" ,".zip" ,".tar" ,".iso" ,".jar" ,".exe" ,".msi"',
        'MaxFileSize' => 10485760,
        'MaxFileCount' => 10,
      ),
    ),
    'email_message' => 
    array (
      'vars' => 
      array (
        'title_1' => '请求指派通知',
        'content_1' => '系统给您指派了一个请求任务，请尽快解决！',
        'title_2' => '请求响应通知',
        'content_2' => '您提出的请求系统已经处理，目前已经指派工程师为您服务！',
        'title_3' => '变更请求响应通知',
        'content_3' => '您提出的变更工程师的请求系统已经处理，目前已经指派其他工程师解决该请求！',
        'title_4' => '请求逾期未处理通知',
        'content_4' => '由于您逾期未解决用户提出的请求，目前系统已经指派其他工程师解决该请求！',
        'title_5' => '请求解决通知',
        'content_5' => '您提出的请求工程师已经帮您解决，请及时查看。',
      ),
    ),
  ),
  'vars' => 
  array (
  ),
); ?>