-----------------------------------------------------------------------------
RECO - многофункциональная инновационная хрень для построения рекомендаций
и формирования надежды на счастливое будущее.
Что-то собирает, что-то собирает, что-то собирает.

TODO: красива всё эта написувать, без глупости.

-----------------------------------------------------------------------------
v0.0 - обмен данными
v0.1 - общие рекомендации
v0.2 - персональные рекомендации
v1 - быстрые персональные рекомендации, с Go на месте сервера

Текущая - v0.0

-----------------------------------------------------------------------------
Всякое необходимое:

CLIENT.txt - api клиента
SERVER.txt - api сервера

SERVER - корневой урл для RECO-SERVER-API
CLIENT - корневой урл для RECO-CLIENT-API

-----------------------------------------------------------------------------
Всё работает через обычные GET-параметры и POST-запросы без лишней зауми.
Везде ожидается UTF-8 для вопросов и JSON для ответов.

-----------------------------------------------------------------------------
RECO-клиент
В задачи клиента входит:
- выдача имеющихся данных
- сохранение полученных рекомендаций
- слив накопленных логов
- запросы на рекомендации
- реакция на сообщения о готовности какой-нибудь рекомендации

-----------------------------------------------------------------------------
RECO-сервер
Принимает данные от клиента, что-то считает и отдаёт готовые списки
рекомендаций по запросу. Иногда получаются корабли в бутылках.

-----------------------------------------------------------------------------
