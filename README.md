## Вариации отправки сообщений:
- Отправка фото, вместе с текстом и кнопкой.
```PHP
send_photo($token_bot, $chat_id, $text, $button,'фото.png');
```
- Отправка кнопок с текстом.
```PHP
send_btn($token_bot, $chat_id, $text, $button);
```
- Отправка сообщения
```PHP
send($token_bot, $chat_id, $text);
```
## Вариации кнопок смена положения кнопок в файле (button.php):
- Одна inline кнопка
```PHP
btn_inline_1($text, $callback);
```
- две inline кнопка
```PHP
btn_inline_2($text, $callback, $text2, $callback2);
```
- три inline кнопка
```PHP
btn_inline_3($text, $callback,$text2, $callback2,$text3, $callback3);
```
- Inline кнопка-ссылка 
```PHP
btn_inline_url_3($text, $url);
```
