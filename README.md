# Backend

Tento projekt je ukázkou jednoduché aplikace pro práci s databází, která implementuje rozhraní IDB a využívá MySQL driver pro komunikaci s MySQL databází. Aplikace se připojuje k databázi, načítá data a zobrazuje je v podobě HTML tabulky.

## Struktura projektu

- `design.php`: Tento soubor obsahuje kód pro zobrazení dat v podobě HTML tabulky.
- `db.php`: Obsahuje třídu `MySQL`, která implementuje rozhraní `IDB` a poskytuje metody pro práci s databází.
- `index.php`: Je hlavním řídicím programem, který se stará o připojení k databázi, načítání dat a předání dat pro zobrazení v `design.php`.
- `MojeDatabaze.sql`: Příklad databáze.

## Jak spustit aplikaci

1. Otevřete soubor `db.php` a upravte připojovací údaje pro připojení k vaší MySQL databázi.
2. Na webovém serveru nastavte adresu cesty k tomuto projektu jako kořenový adresář.
3. Otevřete webový prohlížeč a přistupte k adrese, která odpovídá adrese kořenového adresáře na serveru.

## Předpoklady

- PHP 5.6 nebo vyšší
- MySQL databáze