使用的是yii2的rbac，menu H+后台模板整合
```
php composer require flash20/yii2-adminH-asset
```

```php
'components' => [
    'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/flash20/yii2-adminH-asset/views'
             ],
         ],
    ],
],
```
