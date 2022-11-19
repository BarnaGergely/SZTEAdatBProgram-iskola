<h2>Módosítások a sablonon: </h2>
<ul>
    <li>Adatbázis kapcsolat megjavítása (hibás volt a sablon karakter készlete)</li>
    <li>Adatbázis olvasás hiba függvényének cseréje (mysqli-t használunk, aminek nincs mysql_error() függvénye, ezért mysqli_error($conn) -t írtam a helyére)</li>
    <li>menü és footer újra alkotása (head footer)</li>
    <li>stílus létrehozása</li>
    <li>Logo beillesztése</li>
</ul>

<h2>TODO: </h2>
<ul>
    <li>Tesztelni, hogy megfelelően működik e a mysqli_error (nem tudom tényleg jó e)</li>
    <li>Személyre szabni a menüt (legalább hogy merre van zárva vagy ilyesmi)</li>
    <li>Személyre szabní a stílust (üresen hagytam egy csomó mindent, amit hibaként ír a style.css)</li>
    <li>személyre szabni a kommenteket, függvényeket, fájlneveket, , mappa rendszert stb., hogy ne annyira látszódjon hogy másolt</li>
    <li>Megírni a lényegi működését a programnak</li>
</ul>
