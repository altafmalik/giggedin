<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-05-26 12:35:53 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
2013-05-26 12:35:53 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/kohana/cookie.php [ 152 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/cookie.php(67): Kohana_Cookie::salt('SQLiteManager_c...', NULL)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(202): Kohana_Cookie::get('SQLiteManager_c...')
#2 /Users/Macbookpro/Documents/searchnoweasy/index.php(108): Kohana_Request::factory()
#3 {main}
2013-05-26 12:54:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-05-26 12:54:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL upload was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-26 13:42:23 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/images/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2013-05-26 13:42:23 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/images/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(49): Kohana_Upload::save(Array, NULL, '/Users/Macbookp...')
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(21): Controller_Uploadimage->_save_image(Array)
#2 [internal function]: Controller_Uploadimage->action_upload()
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#7 {main}
2013-05-26 13:49:59 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/logs/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2013-05-26 13:49:59 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/logs/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(50): Kohana_Upload::save(Array, NULL, '/Users/Macbookp...')
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(21): Controller_Uploadimage->_save_image(Array)
#2 [internal function]: Controller_Uploadimage->action_upload()
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#7 {main}
2013-05-26 13:56:57 --- ERROR: Kohana_Exception [ 0 ]: Directory DOCROOT/logs/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
2013-05-26 13:56:57 --- STRACE: Kohana_Exception [ 0 ]: Directory DOCROOT/logs/ must be writable ~ SYSPATH/classes/kohana/upload.php [ 80 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(50): Kohana_Upload::save(Array, NULL, '/Users/Macbookp...')
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(21): Controller_Uploadimage->_save_image(Array)
#2 [internal function]: Controller_Uploadimage->action_upload()
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#7 {main}
2013-05-26 13:57:38 --- ERROR: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/controller/uploadimage.php [ 54 ]
2013-05-26 13:57:38 --- STRACE: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/controller/uploadimage.php [ 54 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 14:20:08 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ali - assumed 'ali' ~ APPPATH/classes/controller/uploadimage.php [ 52 ]
2013-05-26 14:20:08 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ali - assumed 'ali' ~ APPPATH/classes/controller/uploadimage.php [ 52 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(52): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 52, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(21): Controller_Uploadimage->_save_image(Array)
#2 [internal function]: Controller_Uploadimage->action_upload()
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#7 {main}
2013-05-26 14:22:07 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 9920 bytes) ~ MODPATH/image/classes/kohana/image/gd.php [ 147 ]
2013-05-26 14:22:07 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 9920 bytes) ~ MODPATH/image/classes/kohana/image/gd.php [ 147 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 14:23:27 --- ERROR: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 2480 bytes) ~ MODPATH/image/classes/kohana/image/gd.php [ 147 ]
2013-05-26 14:23:27 --- STRACE: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 2480 bytes) ~ MODPATH/image/classes/kohana/image/gd.php [ 147 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 14:28:34 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'type' ~ APPPATH/classes/controller/uploadimage.php [ 52 ]
2013-05-26 14:28:34 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'type' ~ APPPATH/classes/controller/uploadimage.php [ 52 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 14:29:47 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'type' ~ APPPATH/classes/controller/uploadimage.php [ 46 ]
2013-05-26 14:29:47 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'type' ~ APPPATH/classes/controller/uploadimage.php [ 46 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 14:35:14 --- ERROR: ErrorException [ 2 ]: pathinfo() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/uploadimage.php [ 46 ]
2013-05-26 14:35:14 --- STRACE: ErrorException [ 2 ]: pathinfo() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/uploadimage.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'pathinfo() expe...', '/Users/Macbookp...', 46, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(46): pathinfo(Array, 4)
#2 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(21): Controller_Uploadimage->_save_image(Array)
#3 [internal function]: Controller_Uploadimage->action_upload()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-26 14:36:08 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be an array, none given, called in /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php on line 46 and defined ~ SYSPATH/classes/kohana/upload.php [ 146 ]
2013-05-26 14:36:08 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Upload::type() must be an array, none given, called in /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php on line 46 and defined ~ SYSPATH/classes/kohana/upload.php [ 146 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/upload.php(146): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/Macbookp...', 146, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(46): Kohana_Upload::type(Array)
#2 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(21): Controller_Uploadimage->_save_image(Array)
#3 [internal function]: Controller_Uploadimage->action_upload()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-26 14:42:00 --- ERROR: ErrorException [ 2 ]: pathinfo() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/uploadimage.php [ 46 ]
2013-05-26 14:42:00 --- STRACE: ErrorException [ 2 ]: pathinfo() expects parameter 1 to be string, array given ~ APPPATH/classes/controller/uploadimage.php [ 46 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'pathinfo() expe...', '/Users/Macbookp...', 46, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(46): pathinfo(Array, 4)
#2 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(21): Controller_Uploadimage->_save_image(Array)
#3 [internal function]: Controller_Uploadimage->action_upload()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#8 {main}
2013-05-26 15:17:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/uploadimage/upload.php [ 3 ]
2013-05-26 15:17:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/uploadimage/upload.php [ 3 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 3, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 15:18:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/uploadimage/upload.php [ 3 ]
2013-05-26 15:18:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: uploaded_file ~ APPPATH/views/uploadimage/upload.php [ 3 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 3, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(16): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 16:19:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: x1 ~ APPPATH/views/uploadimage/upload.php [ 66 ]
2013-05-26 16:19:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: x1 ~ APPPATH/views/uploadimage/upload.php [ 66 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 66, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(18): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 16:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/css/imgareaselect-animated.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/css/imgareaselect-animated.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.load.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.load.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/css/style.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.imgareaselect.pack.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.imgareaselect.pack.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:21:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:21:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/css/imgareaselect-animated.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/css/imgareaselect-animated.css ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.imgareaselect.pack.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.imgareaselect.pack.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.load.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/js/jquery.load.js ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:23:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:23:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:27:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:27:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 16:27:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 16:27:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/image.jpg ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 17:03:41 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH/classes/kohana/response.php [ 160 ]
2013-05-26 17:03:41 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ SYSPATH/classes/kohana/response.php [ 160 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_Core::error_handler(4096, 'Object of class...', '/Users/Macbookp...', 160, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/fun.php(10): Kohana_Response->body(Object(Database_MySQL_Result))
#2 [internal function]: Controller_Fun->action_index()
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fun))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#7 {main}
2013-05-26 17:17:57 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Tags class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
2013-05-26 17:17:57 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Tags class ~ MODPATH/orm/classes/kohana/orm.php [ 621 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/fun.php(22): Kohana_ORM->__get('name')
#1 [internal function]: Controller_Fun->action_results()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fun))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 17:20:44 --- ERROR: ErrorException [ 8 ]: Use of undefined constant list_tags - assumed 'list_tags' ~ APPPATH/classes/controller/fun.php [ 28 ]
2013-05-26 17:20:44 --- STRACE: ErrorException [ 8 ]: Use of undefined constant list_tags - assumed 'list_tags' ~ APPPATH/classes/controller/fun.php [ 28 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/fun.php(28): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 28, Array)
#1 [internal function]: Controller_Fun->action_show()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fun))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 17:25:09 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Fun::$action_getresults ~ APPPATH/classes/controller/fun.php [ 8 ]
2013-05-26 17:25:09 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Fun::$action_getresults ~ APPPATH/classes/controller/fun.php [ 8 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/fun.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Macbookp...', 8, Array)
#1 [internal function]: Controller_Fun->action_index()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fun))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 17:25:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Fun::$getresults ~ APPPATH/classes/controller/fun.php [ 8 ]
2013-05-26 17:25:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Fun::$getresults ~ APPPATH/classes/controller/fun.php [ 8 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/fun.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/Macbookp...', 8, Array)
#1 [internal function]: Controller_Fun->action_index()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fun))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 17:26:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: list_tags ~ APPPATH/classes/controller/fun.php [ 24 ]
2013-05-26 17:26:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: list_tags ~ APPPATH/classes/controller/fun.php [ 24 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/fun.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 24, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/fun.php(8): Controller_Fun->action_getresults()
#2 [internal function]: Controller_Fun->action_index()
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Fun))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#7 {main}
2013-05-26 17:29:39 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Fun::action_get_tags() ~ APPPATH/classes/controller/fun.php [ 8 ]
2013-05-26 17:29:39 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Fun::action_get_tags() ~ APPPATH/classes/controller/fun.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 17:52:54 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:52:54 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:54:59 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:54:59 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:55:04 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:55:04 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:55:05 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:55:05 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:55:20 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:55:20 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:55:22 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:55:22 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:55:43 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:55:43 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:55:45 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:55:45 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:55:46 --- ERROR: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
2013-05-26 17:55:46 --- STRACE: ErrorException [ 8 ]: Use of undefined constant tags_styles - assumed 'tags_styles' ~ APPPATH/views/uploadimage/upload.php [ 36 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(36): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/Macbookp...', 36, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(23): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_show()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 17:56:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 17:56:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:01:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:01:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:04:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:04:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:19:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:19:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:20:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:20:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:21:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:21:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:32:29 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:32:29 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:32:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:32:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:33:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:33:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:33:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:33:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:45:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:45:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:45:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:45:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:47:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:47:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:48:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:48:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:48:36 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
2013-05-26 18:48:36 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Macbookp...', 26, Array)
#1 [internal function]: Controller_Uploadimage->action_deltag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 18:48:55 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
2013-05-26 18:48:55 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Macbookp...', 26, Array)
#1 [internal function]: Controller_Uploadimage->action_deltag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 18:50:22 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
2013-05-26 18:50:22 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Macbookp...', 26, Array)
#1 [internal function]: Controller_Uploadimage->action_deltag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 18:50:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:50:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/id/2 ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:51:46 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
2013-05-26 18:51:46 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_deltag() ~ APPPATH/classes/controller/uploadimage.php [ 26 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(26): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Macbookp...', 26, Array)
#1 [internal function]: Controller_Uploadimage->action_deltag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 18:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:58:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:58:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 18:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 18:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/deltag/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:01:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:01:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:01:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:01:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:02:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:02:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:04:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:04:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:04:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/includes/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:04:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/includes/function.php ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:12:29 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_addtag() ~ APPPATH/classes/controller/uploadimage.php [ 34 ]
2013-05-26 19:12:29 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_addtag() ~ APPPATH/classes/controller/uploadimage.php [ 34 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Macbookp...', 34, Array)
#1 [internal function]: Controller_Uploadimage->action_addtag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 19:13:31 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_addtag() ~ APPPATH/classes/controller/uploadimage.php [ 34 ]
2013-05-26 19:13:31 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_addtag() ~ APPPATH/classes/controller/uploadimage.php [ 34 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Macbookp...', 34, Array)
#1 [internal function]: Controller_Uploadimage->action_addtag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 19:13:45 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_addtag() ~ APPPATH/classes/controller/uploadimage.php [ 34 ]
2013-05-26 19:13:45 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Uploadimage::action_addtag() ~ APPPATH/classes/controller/uploadimage.php [ 34 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(34): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/Macbookp...', 34, Array)
#1 [internal function]: Controller_Uploadimage->action_addtag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 19:25:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploadimage/uploadimage/addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
2013-05-26 19:25:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploadimage/uploadimage/addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 111 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-26 19:27:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-05-26 19:27:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-26 19:30:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploadiamge/addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-05-26 19:30:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploadiamge/addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-26 19:31:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL uploadiamge/addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-05-26 19:31:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL uploadiamge/addtag was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-26 19:46:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
2013-05-26 19:46:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL show was not found on this server. ~ SYSPATH/classes/kohana/request/client/internal.php [ 87 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#3 {main}
2013-05-26 19:47:11 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagid ~ APPPATH/classes/controller/uploadimage.php [ 39 ]
2013-05-26 19:47:11 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagid ~ APPPATH/classes/controller/uploadimage.php [ 39 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 39, Array)
#1 [internal function]: Controller_Uploadimage->action_addtag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 19:47:58 --- ERROR: ErrorException [ 8 ]: Undefined variable: tagid ~ APPPATH/classes/controller/uploadimage.php [ 47 ]
2013-05-26 19:47:58 --- STRACE: ErrorException [ 8 ]: Undefined variable: tagid ~ APPPATH/classes/controller/uploadimage.php [ 47 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(47): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 47, Array)
#1 [internal function]: Controller_Uploadimage->action_addtag()
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#6 {main}
2013-05-26 19:48:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:48:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:48:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:48:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:49:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:49:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:49:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:49:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:50:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:50:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:50:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:50:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:50:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 19:50:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 19:56:13 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Tags::delete_all() ~ APPPATH/classes/controller/uploadimage.php [ 56 ]
2013-05-26 19:56:13 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Tags::delete_all() ~ APPPATH/classes/controller/uploadimage.php [ 56 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 20:11:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags_styles ~ APPPATH/views/uploadimage/upload.php [ 26 ]
2013-05-26 20:11:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags_styles ~ APPPATH/views/uploadimage/upload.php [ 26 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 26, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(87): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_upload()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 20:13:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags_styles ~ APPPATH/views/uploadimage/upload.php [ 26 ]
2013-05-26 20:13:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags_styles ~ APPPATH/views/uploadimage/upload.php [ 26 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/application/views/uploadimage/upload.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/Macbookp...', 26, Array)
#1 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(61): include('/Users/Macbookp...')
#2 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(343): Kohana_View::capture('/Users/Macbookp...', Array)
#3 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/view.php(228): Kohana_View->render()
#4 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/response.php(160): Kohana_View->__toString()
#5 /Users/Macbookpro/Documents/searchnoweasy/application/classes/controller/uploadimage.php(87): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Uploadimage->action_upload()
#7 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client/internal.php(116): ReflectionMethod->invoke(Object(Controller_Uploadimage))
#8 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request/client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 /Users/Macbookpro/Documents/searchnoweasy/system/classes/kohana/request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#11 {main}
2013-05-26 20:16:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Uploadimage::array() ~ APPPATH/classes/controller/uploadimage.php [ 88 ]
2013-05-26 20:16:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Uploadimage::array() ~ APPPATH/classes/controller/uploadimage.php [ 88 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2013-05-26 20:20:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:20:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:22:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:22:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:23:13 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:23:13 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:23:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:23:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:23:48 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:23:48 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:25:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:25:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:30:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:30:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:30:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:30:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:30:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:30:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:35:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:35:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:42:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:42:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}
2013-05-26 20:44:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
2013-05-26 20:44:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: uploadimage/images/tag_hotspot_62x62.png ~ SYSPATH/classes/kohana/request.php [ 1142 ]
--
#0 /Users/Macbookpro/Documents/searchnoweasy/index.php(109): Kohana_Request->execute()
#1 {main}