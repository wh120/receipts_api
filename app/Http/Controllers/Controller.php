<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/** @OA\Info(title="Receipts API", version="0.1") */

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendList( $items, $key='items'  ): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => '',
            'result' => [
                $key=>$items
            ],
            'error'=> Null
        ], 200);
    }
    public function sendItem( $item=null ,$message ='', $code = 200)
    {

        return response()->json([
            'success' => true,
            'message' => $message,
            'result' => $item,
            'error'=>  Null
        ], $code);
    }
    public function sendError($message='',$error =null, $code = 400)
    {
        return response()->json([
            'success' => false,
            'message' => '',
            'result' => Null,
            'error' => [
                "message"=>$message,
                "details" =>$error
            ]
        ], $code);
    }
    public function successfully($item=null)
    {
        return $this->sendItem($item,$this->getMessage('Done successfully') );
    }
    public function created($object =null)
    {
        return $this->sendItem($object,$this->getMessage('Created successfully') ,);
    }
    public function updated($object =null)
    {
        return $this->sendItem($object,$this->getMessage('Updated successfully') );
    }
    public function deleted()
    {
        return $this->sendItem(null,$this->getMessage('Deleted successfully') );
    }
    public function notFoundError($e = null)
    {
        return $this->sendError($this->getMessage('Not found'),$e,404);
    }
    public function catchError($error)
    {
        return $this->sendError($this->getMessage('Catch Error'),$error,409);
    }
    public function validationError($error=null)
    {
        return $this->sendError($this->getMessage('Validation Error'),$error,400);
    }
    public function AuthenticationError($error=null)
    {
        return $this->sendError($this->getMessage('authentication error'),$error,401);
    }
    public function LoginError($error=null)
    {
        return $this->sendError($this->getMessage('credentials do not match'),$error,404);
    }


    protected function getMessage($message , $lang='ar')
    {
        if(array_key_exists($message, $this->messages))
            return $this->messages[$message][$lang];
        else
            return $message;
    }

    public $messages = [
        'Done successfully' => [
            'ar' =>'تم العملية بنجاح',
            'en' =>'Done successfully'
        ],
        'Updated successfully' => [
            'ar' =>'تم التعديل بنجاح',
            'en' =>'Updated successfully'
        ],
        'Created successfully'=>[
            'ar' =>'تمت الإضافة بنجاح',
            'en' =>'Created successfully'
        ],
        'Deleted successfully'=>[
            'ar' =>'تم الحذف بنجاح',
            'en' =>'Deleted successfully'
        ],

        'Not found'=>[
            'ar' =>'غير موجود',
            'en' =>'Not found'
        ],
        'Catch Error'=>[
            'ar' =>'حدث خطأ غير متوقع',
            'en' =>'Catch Error'
        ],
        'Validation Error'=>[
            'ar' =>'المعلومات المدخلة غير صحيحة',
            'en' =>'Validation Error'
        ],
        'Error occurred while saving image'=>[
            'ar' =>'حدث خطأ اثناء تحميل الصورة',
            'en' =>'Error occurred while saving image'
        ],
        'System records cannot be modified'=>[
            'ar' =>'لايمكن التعديل على سجلات النظام',
            'en' =>'System records cannot be modified'
        ],
        'Record is already in use by another records'=>[
            'ar' =>'السجل مستخدم من قبل سجل أخر',
            'en' =>'Record is already in use by another records'
        ],

        'already exists'=>[
            'en' =>'already exists',
            'ar' =>'موجود مسبقاً'
        ],

        'authentication error'=>[
            'en' =>'Please login',
            'ar' => "يرجى تسجيل الدخول"
        ],

        'credentials do not match'=>[
            'en' =>'These credentials do not match our records.',
            'ar' => "الحساب وكلمة المرور غير متطابقين"
        ],

        'can not approve receipt'=>[
            'en' =>'You do not have the appropriate role to accept the receipt',
            'ar' => "ليس لديك الدور المناسب لقبول الإيصال"
        ],

        'receipt already approved'=>[
            'en' =>'The receipt has already been approved',
            'ar' => "تمت الموافقة على الإيصال بالفعل"
        ],


    ];
}
