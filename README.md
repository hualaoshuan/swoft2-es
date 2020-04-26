
## 安装
`composer require hualaoshuan/swoft2-es`

## 使用方法
1. 在对应的`config/dev`和`config/pro`目录下新建`es.php`配置文件
```php
<?php

return [
    'host' => '192.168.60.169',
    'port' => 9200,
    'userName' => 'elastic',
    'password' => 'asdfasdf',
    'timeout' => 2,
];
```
2. 在 Controller 里调用
```php
<?php

namespace App\Http\Controller;

use Hualaoshuan\Elasticsearch\Es;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;

/**
 * Class testController
 * @Controller(prefix="/test")
 */
class TestController{
    
    /**
     * @RequestMapping(route="/test",method={RequestMethod::GET})
     */
    public function test(){
        $result = Es::getClient()->get([
                    'id' => 1,
                    'index' => 'shop',
                    'type' => '_doc'
                ]);
        print_R($result);
        return 'OK';
    }
}
```