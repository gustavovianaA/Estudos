<a href="README.md">Segurança</a> / Session Hijacking


# Session Hijacking

## Introdução

A cada cliente é atribuído um identificador de sessão. Depois que a sessão é criada

``` session_start(); ```

a função

``` session_id(); ```

retorna o id da sessão. O servidor associa uma requisição à uma sessão que foi inicializada.

Clientes(Usuários do sistema) podem informar a sessão através de cookies. Essa parte de leitura da sessão é feita de forma automática, o que possibilita ao usuário efetuar login em um sistema. Apesar disso se um invasor apresenta o id de sessão de outro usuário, ele pode se passar por aquele usuário.

## Protegendo o sistema

As configurações se destinam ao ambiente de produção.

<strong>1)</strong> Inspecionando o tráfico cliente/servidor o invasor pode ler o identificador de sessão. Você pode encriptar o identificador de sessão. Tornar os cookies de sessão disponíveis somente sobre HTTPS. Configurar php.ini

``` session.cookie_secure = 1```

<strong>2)</strong> Se o PHP não conseguir usar cookies irá utilizar um parâmetro de URL (pode ser escrito pelo cliente). Para evitar isso configurar em php.ini

``` session.use_only_cookies = 1 ```

