<?php


namespace App\Helper;


class Helper
{
    public static function fileUpload($fileObject,$directory,$existFileUrl = null)
    {
        if ($fileObject)
        {
            if ($existFileUrl)
            {
                if (file_exists($existFileUrl))
                {
                    unlink($existFileUrl);
                }
            }
            $fileName = rand(10,1000).time().$fileObject->getClientOriginalName();
            $fileDirectory = 'admin/assets/img/upload-image/'.$directory.'/';
            $fileObject->move($fileDirectory,$fileName);
            $fileUrl = $fileDirectory.$fileName;
        }else{
          if ($existFileUrl)
          {
              $fileUrl = $existFileUrl;
          }else{
              $fileUrl = null;
          }
        }

        return $fileUrl;





    }


}
