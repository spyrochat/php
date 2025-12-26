## Run this on linux to get the public IP to use for the server

```bash
ip route show | grep default | awk '{print $3}'
```

## Start PHP FPM service

```bash
sudo service php8.5-fpm start5
```

## Start nginx server
```bash
sudo service nginx restart
```

## Generate Random Tokwn

### With Linux

```bash
openssl rand -hex 32
```

### On Powershell
```bash
[Convert]::ToHexString((1..32 | % { [byte](Get-Random -Min 0 -Max 256) }))
```

## Add to env and export

```bash
echo 'export SPYROCHAT_UNIX_SECRET="secret_key"' >> ~/.bashrc
source ~/.bashrc
```
