# interlogica
- Applicativo Pasticceria 
- Progetto ultimato

- Clonato il progetto da GitHub occorre create il database MySql
Per la creazione del DB è possibile utilizzare la migrazione con make:migration
oppure, ed è il consiglio che mi sento di dare, utilizzare i dump delle tabelle
presenti nella directory database/backup ed effettuare il restore su uno schema
di MySql (in locale è stato creato il DB 'DB_pasticceria' con utente 'db_user')

N.B.: si consiglia il restore perché contiene alcuni dati di esempio e, soprattutto,
gli account per gli utenti Luana e Maria con le rispettive password criptate

- Credenziali per accedere al Backoffice
- Tabella Gestori
Username: luana@gmail.com
Password: 2021anauL04

Username: maria@yahoo.it
Password: 2021airaM04

N.B.: Le password sono state criptate utilizzando il comando: $ php bin/console security:encode-password
che restituisce in output la password criptata inserita in input
I dati di ogni amministratore che ha accesso al Backoffice sono stati inseriti in tabella tramite:
INSERT INTO `DB_pasticceria`.`gestori` (`email`, `roles`, `password`, `nome`) VALUES ('luana@gmail.com', '[\"ROLE_ADMIN\"]', '<password criptata>', 'Luana');
//N.B.: Si noti l’escape ('\') nel ruolo;

- Configurazione ambiente locale
Per l'ambiente locale è stato creato il file .env.local con la seguente configurazione relativa al DB:
 
DATABASE_URL="mysql://127.0.0.1:3306?serverVersion=8.0.23&charset=utf8"

N.B.: sostituire in 'serverVersion' il numero di versione del database MySql che si sta utilizzando

Le configurazioni del database si trovano in config/packages/doctrine.yaml

doctrine:
    dbal:
        driver:         'pdo_mysql'
        server_version: '8.0.23'
        charset:        utf8mb4
        default_table_options:
                                charset: utf8mb4
                                collate: utf8mb4_0900_ai_ci        

        dbname:         DB_pasticceria
        user:           db_user
        password:       "%env(DATABASE_PASSWORD)%"

        override_url: true
        url: '%env(resolve:DATABASE_URL)%'

...

N.B.: andranno sostituiti i valori relativi a 'server_version', 'dbname', 'user' e 'password'
N.B.: La password è stata criptata usando il comando: $php bin/console secrets:set DATABASE_PASSWORD e richiamata in doctrine.yaml
      tramite il comando "%env(DATABASE_PASSWORD)%"
      Per eliminare la password esistente usare $php bin/console secrets:remove DATABASE_PASSWORD

Nel caso in cui dovessero sorgere problemi con la variabile d'ambiente DATABASE_PASSWORD ("%env(DATABASE_PASSWORD)%")
procedere come segue:
1- Rimuovere la password esistente con 
    $php bin/console secrets:remove DATABASE_PASSWORD

2- Se esistono in config/secrets/dev/ uno o più files dev.*.{public,private}, occorre eliminarli.

3- Generare una nuova coppia di chiavi crittografiche asimmetriche
    $ php bin/console secrets:generate-keys

4- Creare la variabile DATABASE_PASSWORD con un nuova password criptata
    $ php bin/console secrets:set DATABASE_PASSWORD

4- Cancellare tutti gli elementi della cache
    $ php bin/console cache:clear