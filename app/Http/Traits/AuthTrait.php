<?php

namespace App\Http\Traits;

use App\Providers\RouteServiceProvider;

trait AuthTrait
{
  public function checkGuard($request)
  {
      if ($request->type=='user')
      {
          $guardName='web';
      }
      elseif ($request->type=='admin')
      {
          $guardName='admin';
      }
      else
      {
          $guardName='service';
      }

      return $guardName;
  }

  public function redirect($request)
  {

      if ($request->type=='user')
      {
          return redirect()->intended(RouteServiceProvider::HOME);
      }
      elseif ($request->type=='admin')
      {
          return redirect()->intended(RouteServiceProvider::ADMIN);
      }
      else
      {
          return redirect()->intended(RouteServiceProvider::SERVICE);
      }
  }



}
