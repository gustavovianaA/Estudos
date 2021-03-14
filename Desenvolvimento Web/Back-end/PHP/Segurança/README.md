# (PHP) Segurança

## Introdução

Segurança da informação é um tópico prioritário no Desenvolvimento Web. Acredito que não haja sistema 100% seguro, mas garantir o maior nível de segurança é um dever do desenvolvedor. Não apenas o código fonte e servidores podem gerar brechas de segurança, há também a engenharia social. Aqui estudaremos aspectos de código fonte e servidores.

## Configuração

Mantenha-se atento às atualizações e utilize os melhoramentos que elas trazem. De preferência à última versão estável do PHP.

## Erros e Alertas

Em ambiente de produção (ambiente que roda a aplicação para usuários finais) não exiba erros e alertas. Eles podem mostrar à invasores detalhes do funcionamento do sistema.

Você pode configurar a exibição de erros em seu arquivo php.ini ou em tempo de execução com a função: 

```php
error_reporting();
```
<strong>Configuração padrão e recomendada para o ambiente de produção:</strong>

Configuar em php.ini

```php
display_errors = 0
log_errors = 1
```
Configurar em tempo de execução (script php)

```php
error_reporting : E_ALL	 & ~E_DEPRECATED & ~E_STRICT
```

Detalhes da função: <a href="https://www.php.net/manual/pt_BR/function.error-reporting" target="_blank">php.net</a>

## Desabilitando Funções e classes

Pode ser definido no arquivo php.ini, não pode ser alterado em tempo de execução.


```php
disable_functions
disable_classes
```
Funções comuns à serem desabilitadas: exec, passthru, shell_exec, system.

## Segurança de Sessões

<ul>
<li><a href="sessionHijacking.md">Session Hijacking</a></li>
</ul>

  
