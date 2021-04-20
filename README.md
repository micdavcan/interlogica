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

Tabella Gestori