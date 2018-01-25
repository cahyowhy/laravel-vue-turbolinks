<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model {
  /*
   * A mass-assignment vulnerability occurs when a user passes an unexpected HTTP parameter through a request,
   * and that parameter changes a column in your database you did not expect
   * */
  protected $fillable = ['name', 'email', 'body', 'flagged_at'];

  /**
   * all function with scope defined
   * always prefixed by scope
   *
   * @param $query
   * @return mixed
   */
  public function scopeIgnoreFlagged($query) {
    return $query->where('flagged_at', null);
  }

  /**
   * Flag the given signature.
   *
   * @return bool
   */
  public function flag() {
    return $this->update(['flagged_at' => \Carbon\Carbon::now()]);
  }

  /**
   * invoked from App/Resource/SignatureResource
   * see line 20, aditional attr has
   * format like this->get[AttrName]Attribute
   *
   * @return string
   */
  public function getAvatarAttribute() {
    return sprintf('https://www.gravatar.com/avatar/%s?s=100', md5($this->email));
  }
}
