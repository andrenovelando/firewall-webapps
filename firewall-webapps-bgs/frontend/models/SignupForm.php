<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $fullname;
    public $email;
    public $role;
    //public $desciption;
    public $password;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['fullname', 'required'],
            ['fullname', 'string', 'min' => 2, 'max' => 255],

            ['role', 'required'],
            ['role', 'string', 'min' => 2, 'max' => 255],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        
            $user = new User();
            $user->username = $this->username;
            $user->full_name = $this->fullname;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->role = $this->role;
            $user->verification = 'No';
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
        

        return null;
    }
}
