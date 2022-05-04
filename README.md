# lb_plugin

Rename custom_plugin.ini and move to /etc/lanbilling/phpclient/client/

Move Custom/ and Custom_Plugin.php into /usr/share/lanbilling/phpclient/client/components/plugins/

Add plugin name in '[plugins]' section in /etc/lanbilling/phpclient/client/main.ini
like this

```
[plugins]
0 = 'Custom_Plugin'
```
