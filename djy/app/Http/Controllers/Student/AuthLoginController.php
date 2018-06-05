<?php

namespace App\Http\Controllers\Auth;

use App\Models\Students;
use App\Http\Controllers\Controller;
/*use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;*/
/*use Overtrue\LaravelSocialite\Socialite;
use Overtrue\Socialite\AuthorizeFailedException;
use Overtrue\Socialite\UserInterface;*/
use Faker\Factory;

class AuthLoginController extends Controller
{

    /**
     * Create user through third party service login
     * @param UserInterface $provider
     * @return User
     */
    public function createUserByProvider(UserInterface $provider, array $providerType)
    {
        list($providerId, $providerName) = $providerType;

        // by email find user Is there
        if ($user =Students::where('email', $provider['email'])->first()) {
            // if user already exists, bind the account only
            $user->$providerId = $provider['id'];
            $user->$providerName = $provider['nickname'];
            $user->save();

        } else {
            $data = $this->getFormatFiledData($provider, $providerId, $providerName);
            $user = Students::create($data);
        }

        return $user;
    }

    /**
     * Formats the data returned by the third party into a database field
     * $providerId possible is github_id || qq_id ...
     * @param $provider
     * @param $providerId
     * @param $providerName
     * @return array
     */
    public function getFormatFiledData($provider, $providerId, $providerName)
    {
        // 数据库填充对象
        $faker = Factory::create();

        $data = [
            'name' => $faker->uuid,
            'email' => $faker->email
        ];



        if (! User::where('name', $provider['nickname'])->first()) {
            $data['name'] = $provider['nickname'];
        }


        if (isset($provider['email']) && $provider['email']) {
            $data['email'] = $provider['email'];
        }

        if (isset($provider['sex'])) {
            $data['sex'] = $provider['sex'];
        }

        $data[$providerId] = $provider['id'];
        $data[$providerName] = $provider['nickname'];
        $data['password'] = bcrypt('123456');

        return $data;
    }

}
