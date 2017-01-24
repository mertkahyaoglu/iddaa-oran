# iddaa-oran
İddaa.com sitesini parse ederek haftalık futbol ve basketbol maçlarının oranlarını döndürür.


## Değişkenler ve Kullanımları

### Tanımlar

Öncelikle ana istek parcacığı sistemin **mac** olarak belirlenmişti. 

Eğer maçların kodlarını çekmek istiyorsanız. Aşağıdaki örnekte bulunan kullanımı yapmalısınız.
```php
$mac->kod;
```

Maç sonuç oranlarını almak istiyorsanız, ev sahibinin kazanması durumunda ki oran bilgisi aşağıdaki örnek kullanımı gibi karşınıza gelmektedir.
```php
$mac->macsonucu[1];
```
