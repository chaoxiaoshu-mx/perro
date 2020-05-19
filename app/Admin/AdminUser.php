<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

/**
 * 自己创建的管理员模型
 */
class AdminUser extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    // 定义当前模型需要关联的数据表
    protected $table = 'admin_users';
    // 使用trait，就相当于将整个trait代码段复制到这个位置
    use \Illuminate\Auth\Authenticatable;
}
