<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\UnauthorizedException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use ErrorException;
use Throwable;


class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }


//    public function render($request, Throwable $exception)
//    {
////        if ($request->has('*api*')){
////            if ($exception instanceof ModelNotFoundException || $exception instanceof NotFoundHttpException) {
////                return response()->json(['success' => false,'message' => "Not Found",], 404);
////            }
////            if ($exception instanceof UnauthorizedHttpException || $exception instanceof UnauthorizedException) {
////                return response()->json(['success' => false,'message' => "Un Authorized",], 401);
////            }
////            if ($exception instanceof MethodNotAllowedHttpException) {
////                return response()->json(['success' => false,'message' => 'Method Not Allowed',], 404);
////            }
////            if ($exception instanceof ErrorException) {
////                if (preg_match('/^file_put_contents/', $exception->getMessage())) {
////                    return;
////                }
////            }
////        }
////        else{
//////            if ($exception instanceof ModelNotFoundException || $exception instanceof NotFoundHttpException) {
//////                return response()->view('admin.errors.404');
//////            }
//////            if ($exception instanceof UnauthorizedHttpException || $exception instanceof UnauthorizedException) {
//////                return response()->view('admin.errors.404');
//////            }
//////            if ($exception instanceof MethodNotAllowedHttpException) {
//////                return response()->view('admin.errors.404');
//////            }
//////            if ($exception instanceof ErrorException) {
//////                if (preg_match('/^file_put_contents/', $exception->getMessage())) {
//////                    return;
//////                }
//////            }
////        }
//
////        return parent::render($request, $exception);
//    }
}
