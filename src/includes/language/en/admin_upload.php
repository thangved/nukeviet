<?php

/**
* @Project NUKEVIET 4.x
* @Author VINADES.,JSC <contact@vinades.vn>
* @Copyright (C) 2017 VINADES.,JSC. All rights reserved
* @Language English
* @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
* @Createdate Mar 04, 2010, 08:22:00 AM
*/

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    die('Stop!!!');
}

$lang_translator['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2010 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['upload_manager'] = 'Upload Manager';
$lang_module['upload_delimg_confirm'] = 'Are you sure you want to delete the file ?';
$lang_module['upload_delimgs_confirm'] = 'Are you sure you want to delete %s file ?';
$lang_module['upload_delimg_success'] = 'Delete files successfully !';
$lang_module['upload_delimg_unsuccess'] = 'Error: Can not delete file!';
$lang_module['upload_create_too_bigimg'] = 'The size of the image is too large';
$lang_module['upload_create_invalid_filetype'] = 'File format is not valid';
$lang_module['upload_file_created'] = 'File was created successfully';
$lang_module['upload_file_maxsize'] = 'File exceed the allowed limit';
$lang_module['upload_file_error_movefile'] = 'Error can not create a file, check directory chmod';
$lang_module['upload_file_error_invalidurl'] = 'Invalid path file';
$lang_module['upload_error_browser_ie6'] = 'Error: The system does not support this function on Internet Explorer 6, You need update to new version or switch to: Mozilla Firefox, Safari, Opera, Chrome.';
$lang_module['upload_empty_path'] = 'Notice: You need select the folder to browse files';
$lang_module['upload_size'] = 'Size';
$lang_module['upload_width'] = 'Width';
$lang_module['upload_height'] = 'Height';
$lang_module['upload_file'] = 'Upload file';
$lang_module['upload_mode'] = 'Select upload mode';
$lang_module['upload_mode_remote'] = 'Remote upload';
$lang_module['upload_mode_local'] = 'Local upload';
$lang_module['upload_otherurl'] = 'Other URL';
$lang_module['upload_delfile'] = 'Delete file';
$lang_module['upload_cancel'] = 'Cancel';
$lang_module['upload_createimage'] = 'Create Image';
$lang_module['upload_add_files'] = 'Add files';
$lang_module['type_file'] = 'All file';
$lang_module['type_image'] = 'File Image';
$lang_module['type_flash'] = 'Flash';
$lang_module['rename'] = 'Rename';
$lang_module['renamefolder'] = 'Rename Folder';
$lang_module['deletefolder'] = 'Delete Folder';
$lang_module['createfolder'] = 'Create Folder';
$lang_module['recreatethumb'] = 'Recreate thumb images';
$lang_module['recreatethumb_note'] = 'Note: This function will erase all the thumbs under the folder, both sub-folders and recreate the thumb image according to the new configuration. This process can take a long time, you can not close the browser';
$lang_module['recreatethumb_result'] = 'Recreated thumb images for';
$lang_module['rename_newname'] = 'New name:';
$lang_module['rename_noname'] = 'You not enter a new file name';
$lang_module['rename_error_folder'] = 'Error: System can not rename folder';
$lang_module['rename_nonamefolder'] = 'You not enter new name for the folder or directory names incorrect standard';
$lang_module['preview'] = 'Preview';
$lang_module['movefolder'] = 'Move to';
$lang_module['select_folder'] = 'Select';
$lang_module['delete_folder'] = 'Do you realy want to delete folder? It also delete all folder\'s content.';
$lang_module['download'] = 'Download';
$lang_module['select'] = 'Select';
$lang_module['move'] = 'Move';
$lang_module['move_multiple'] = 'Move the file %s';
$lang_module['origSize'] = 'Original size';
$lang_module['sizenotchanged'] = 'Image you want to create new varieties as original size';
$lang_module['name_folder_error'] = 'You not enter name of the folder or name is incorrect standard';
$lang_module['foldername'] = 'Folder name';
$lang_module['folder_exists'] = 'Error! Same name already exists directory';
$lang_module['notlevel'] = 'You are not granted the right to perform this operation';
$lang_module['notupload'] = 'Not allowed to upload directory';
$lang_module['errorInfo'] = 'Announcement';
$lang_module['selectfiletype'] = 'Display file type';
$lang_module['refresh'] = 'refresh';
$lang_module['author'] = 'File author';
$lang_module['author0'] = 'of all';
$lang_module['author1'] = 'my';
$lang_module['uploadError1'] = 'You need to select a file on a PC or paste the file path to the URL box';
$lang_module['uploadError2'] = 'Error: URL not in accordance with standard';
$lang_module['uploadError3'] = 'Error: Chunk data is invalid';
$lang_module['pubdate'] = 'Updated';
$lang_module['newSize'] = 'Create a new image';
$lang_module['prView'] = 'View';
$lang_module['prViewExample'] = 'View Example';
$lang_module['prViewExampleError'] = 'Please select the directory, a medias and input full size, thumb thumb thumb quality';
$lang_module['prViewExampleError1'] = 'Example Error';
$lang_module['prViewExampleError2'] = 'The system did not find any photos to give an example. You need to upload at least one image in the upload directory';
$lang_module['errorMinX'] = 'Error: The width is less than the permitted level';
$lang_module['errorMaxX'] = 'Error: The width is greater than the permitted level';
$lang_module['errorMinY'] = 'Error: height less than the permitted level';
$lang_module['errorMaxY'] = 'Error: height greater than allowed';
$lang_module['errorEmptyX'] = 'Error: unknown width';
$lang_module['errorEmptyY'] = 'Error: unknown height';
$lang_module['clickSize'] = 'Double click to get the the original size';
$lang_module['goNewPath'] = 'Access to the new folder';
$lang_module['mirrorFile'] = 'Save a copy in the old directory';
$lang_module['errorNotSelectFile'] = 'Error: File not selected';
$lang_module['errorNotCopyFile'] = 'Error: For some reason, the system can not transfer files to new folders';
$lang_module['errorNotRenameFile'] = 'Error: For some reason the system could not rename the new file';
$lang_module['nopreview'] = 'File doesn\'t support preview.';
$lang_module['errorNewSize'] = 'You only create new image width: 10 to %d px, height: 10 to %d px';
$lang_module['maxSizeSize'] = 'Maximum size: %dx%dpx';
$lang_module['enter_url'] = 'Enter url';
$lang_module['configlogo'] = 'Configuringf insert logo';
$lang_module['addlogo'] = 'Add logo';
$lang_module['addlogosave'] = 'Save';
$lang_module['notlogo'] = 'Error: the system do not find any logo';
$lang_module['upload_logo'] = 'Logo to be inserted into the picture';
$lang_module['upload_logo_pos'] = 'The position of the logo';
$lang_module['selectimg'] = 'Select image';
$lang_module['autologo'] = 'Automatically insert the logo on the picture of the module';
$lang_module['autologo_for_upload'] = 'Insert the logo into the upload file (if it is an image)';
$lang_module['autologomodall'] = 'All module';
$lang_module['logosizecaption'] = 'Logo size';
$lang_module['imagewith'] = 'If the image width';
$lang_module['logowith'] = 'The width of the logo';
$lang_module['logosize3'] = 'Using the original logo size, maximum size of the logo';
$lang_module['logoposbottomright'] = 'Bottom, right';
$lang_module['logoposbottomleft'] = 'Bottom, left';
$lang_module['logoposbottomcenter'] = 'Bottom, middle';
$lang_module['logoposcenterright'] = 'Center, right';
$lang_module['logoposcenterleft'] = 'Center, left';
$lang_module['logoposcentercenter'] = 'Center';
$lang_module['logopostopright'] = 'Top, right';
$lang_module['logopostopleft'] = 'Top, left';
$lang_module['logopostopcenter'] = 'Top, Center';
$lang_module['fileimage'] = 'image';
$lang_module['filerelativepath'] = 'Relative path';
$lang_module['fileabsolutepath'] = 'Absolute path';
$lang_module['altimage'] = 'Note for image';
$lang_module['filepathcopied'] = 'The path has been copied';
$lang_module['uploadconfig'] = 'Upload Configuration';
$lang_module['uploadconfig_ban_ext'] = 'Forbidden Extensions';
$lang_module['uploadconfig_ban_mime'] = 'Forbidden Mimes';
$lang_module['uploadconfig_types'] = 'Allowed file types';
$lang_module['sys_max_size'] = 'Your server only allows upload maximum';
$lang_module['nv_max_size'] = 'Maximum size of uploaded file';
$lang_module['nv_max_width_height'] = 'Maximum size file upload';
$lang_module['nv_auto_resize'] = 'Automatically resize larger image';
$lang_module['upload_checking_mode'] = 'Upload Checking Mode';
$lang_module['strong_mode'] = 'Hight';
$lang_module['mild_mode'] = 'Medium';
$lang_module['lite_mode'] = 'Low';
$lang_module['none_mode'] = 'None';
$lang_module['upload_checking_note'] = 'Your server does not support some functions defined file types. If you chose "Strong", you will not be able to upload files to your host';
$lang_module['thumbconfig'] = 'Configuring thumbnail';
$lang_module['thumb_width_height'] = 'Thumbnail size';
$lang_module['thumb_note'] = 'Thumbnail image will be used in place using small image size will not change the existing file';
$lang_module['thumb_type'] = 'resize according plan';
$lang_module['thumb_type_1'] = 'resize according width';
$lang_module['thumb_type_2'] = 'resize according height';
$lang_module['thumb_type_3'] = 'resize according two dimensions';
$lang_module['thumb_type_4'] = 'resize and crop image according size';
$lang_module['thumb_type_5'] = 'Resize and crop top photos by size';
$lang_module['thumb_quality'] = 'Resize image quality';
$lang_module['thumb_dir'] = 'Folder';
$lang_module['thumb_dir_default'] = 'Default configuration';
$lang_module['search'] = 'Search';
$lang_module['order0'] = 'Sort by date new';
$lang_module['order1'] = 'Sort by date old';
$lang_module['order2'] = 'Sort by file name';
$lang_module['searchdir'] = 'Search in folder';
$lang_module['searchkey'] = 'Search key';
$lang_module['original_image'] = 'Original image';
$lang_module['thumb_image'] = 'thumb mage';
$lang_module['crop'] = 'Crop image';
$lang_module['crop_error_small'] = 'This image size is too small, do not cut';
$lang_module['crop_keep_original'] = 'Crop as a new image and keep original image';
$lang_module['rotate'] = 'rotate image';
$lang_module['waiting'] = 'Loading, please wait ...';
$lang_module['file_no_exists'] = 'file no exists';
$lang_module['file_name'] = 'file name';
$lang_module['upload_status'] = 'Tstatus';
$lang_module['upload_info'] = 'Uploaded %s/%s file. Speed %s/s';
$lang_module['upload_stop'] = 'Stop';
$lang_module['upload_finish'] = 'Finish';
$lang_module['upload_continue'] = 'Continue';
$lang_module['addlogo_error_small'] = 'This image size is too small to insert the logo';
$lang_module['upload_alt_require'] = 'Required to enter description when uploading';
$lang_module['upload_auto_alt'] = 'Self-defined description of the image name';
$lang_module['upload_alt_note'] = 'Please enter a description for the file first';
$lang_module['upload_view_thumbnail'] = 'Switch to grid view';
$lang_module['upload_view_detail'] = 'Switch to a list view';
$lang_module['upload_chunk'] = 'Chunk Upload';
$lang_module['upload_chunk_help'] = 'This function supports splitting the upload file into several small packages, support to upload large files to the server. If you do not intend to allow large files to upload, please leave blank above';
$lang_module['drag_and_drop_upload'] = 'Drag and drop files here to upload';
