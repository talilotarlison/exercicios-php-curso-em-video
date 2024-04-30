<?php
/*
Para configurar um cookie com a opção `httpOnly` em PHP, você pode usar a função `setcookie()` e passar `true` para o sétimo parâmetro, que é justamente o `httponly`. Aqui está um exemplo de como você pode fazer isso:

```php
setcookie("nome_do_cookie", "valor_do_cookie", time() + 3600, "/", "", false, true);
```

Neste exemplo, `nome_do_cookie` é o nome do seu cookie, `valor_do_cookie` é o valor que você quer armazenar, `time() + 3600` define o cookie para expirar em uma hora, e o último `true` é o que configura o cookie como `HttpOnly`.

Lembre-se de que a função `setcookie()` deve ser chamada antes de qualquer saída ser enviada ao navegador, o que significa que ela deve ser colocada antes de qualquer HTML ou texto. Isso é necessário porque os cookies são parte do cabeçalho HTTP⁴⁵⁶.

Source: Conversation with Bing, 4/30/2024
(1) How do you set up use HttpOnly cookies in PHP - Stack Overflow. https://stackoverflow.com/questions/36877/how-do-you-set-up-use-httponly-cookies-in-php.
(2) PHP: setcookie - Manual. https://www.php.net/manual/pt_BR/function.setcookie.php.
(3) How to Get A Httponly Cookie In PHP in 2024? - phparea.com. https://phparea.com/blog/how-to-get-a-httponly-cookie-in-php.
(4) 27: Session and Cookies in PHP | PHP Tutorial | Learn PHP Programming | PHP for Beginners. https://www.youtube.com/watch?v=jort8_4U-88.
(5) Cookies in PHP: the basics. https://www.youtube.com/watch?v=Ly34Z8DFvdE.
(6) Cookie in PHP. https://www.youtube.com/watch?v=1LSkR0i5UjA.
(7) how to get httponly cookie in php? - Stack Overflow. https://stackoverflow.com/questions/68636401/how-to-get-httponly-cookie-in-php.
(8) undefined. https://davehollingworth.net/mvcauthy.
(9) en.wikipedia.org. https://en.wikipedia.org/wiki/PHP.
