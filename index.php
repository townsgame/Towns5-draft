<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Prototyp</title>
    <link rel="stylesheet" href="style.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

    <script src="script.js"></script>
</head>
<body>

<iframe src="https://towns.cz/onlymap" width="100%" height="100%" frameborder="0"></iframe>

    <nav class="menu">
        <div class="menu-logo">
            <img src="logo1.png" alt="Towns.cz logo"/>
        </div>

        <ul class="menu-list menu-list-left">
            <li class="menu-list-item">
                <a href="#">tvorba</a>

                <ul class="menu-dlist">
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                </ul>
            </li>
            <li class="menu-list-item">
                <a href="#">zprávy</a>

                <ul class="menu-dlist">
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                </ul>
            </li>
            <li class="menu-list-item">
                <a href="#">mapa</a>

                <ul class="menu-dlist">
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                </ul>
            </li>
            <li class="menu-list-item">
                <a href="#">hráč</a>

                <ul class="menu-dlist">
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                </ul>
            </li>
            <li class="menu-list-item">
                <a href="#">dristy</a>

                <ul class="menu-dlist">
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                    <li class="menu-dlist-item"><a href="#">Link</a></li>
                </ul>
            </li>

            <li class="menu-list-item" style="margin-left: 15px; margin-top: 17px; margin-right: 5px;"><img src="test2.png" alt=""/></li>
        </ul>

        <ul class="menu-list menu-list-right">


            <li class="menu-list-item menu-list-item-registration"><a href="#" id="popup-opener">Dokončit registraci</a></li>

            <li class="menu-list-item menu-list-item-icon"><img src="notification.png" alt="notification"/></li>
            <li class="menu-list-item menu-list-item-icon"><img src="gear.png" alt="sound"/></li>
            <li class="menu-list-item menu-list-item-icon"><img src="fullscreen.png" alt="fullscreen"/></li>
        </ul>

        <div class="cleaner"></div>
    </nav>

    <aside class="sidebar">

        <?php for($i = 1; $i < 50; $i++): ?>

        <div class="sidebar-action-wrapper">
            <div class="sidebar-action-box"><?= $i ?></div>

            <div class="sidebar-action-popup">
                <div class="sidebar-action-arrow"></div>
                <div class="sidebar-action-content">
                    <h2>Názov dristu</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio eligendi et ex fuga mollitia nisi obcaecati possimus sint, tenetur vitae? A aspernatur officiis quas quis ratione. Atque fugit optio suscipit?</p>
                    <button>Postaviť drist!</button>
                </div>
                <div class="sidebar-action-close"><img src="close-white.png" alt=""/></div>
            </div>
        </div>

        <?php endfor ?>
    </aside>


    <div class="overlay"></div>

    <div class="popup">
        <div class="popup-header">
            Príbeh
        </div>
        <div class="popup-content">
            <h1>Aneb o původu Magie a Technologie</h1>
                <p>V dávných dobách k ostrovu připlula dřevěná loď, která tvarem připomínala roztažená labutí křídla a barvou peří orla. Byl to koráb z jiného světa, který po mnoho dní plul podél pobřeží a hledal vhodné místo k vylodění uprostřed bujné vegetace. Když konečně dorazil k písčitému břehu, z jeho paluby se vylodilo několik bojovníků v kostkovaných kalhotách a plátěných košilích. Měli železné meče, jasanové štíty a na krku zlaté náhrdelníky, které odrážely každý paprsek slunce.</p>
                <p>Jeden z těchto mužů se jmenoval Myddgar. Dříve býval farmářem, byl ale vyhnán ze své země, aby se naučil moudrosti. Po vzdání díků svým bohům celá skupina vyrazila směrem k neproniknutelnému Rudému lesu, kde se nakonec usadila. První dny byly obtížné, ale bojovníci byli silní a dokázali se ubránit nástrahám lesa a jeho trnitým šlahounům. Proto si je les oblíbil a řekl jim: „Dám vám tento ostrov, pokud budete vládnout v míru.“ Bojovníci s nadšením souhlasili a skutečně je pak ostrov začal poslouchat jako své pány. Avšak časy se mění a konce bývají jiné než začátky. Po několika letech se bojovníci mezi sebou znesvářili a vyhlásili si válku u Modrých hor. Všichni bojovali statečně, ale zároveň zběsile. Jediný Myddgar se boje neúčastnil a zůstal věrný Rudému lesu. Protože však jeho spolubojovníci porušili slib, Rudý les jim ostrov doslova vyrval z rukou a poručil: „Síly přírody, ukažte, co dokážete!“ V tu chvíli celý ostrov zahalil stín řevu, který se začal šířit z nitra Modrých hor. Zanedlouho se všichni dověděli, co to bylo. Přes zasněžené vrcholky, které se dotýkají nebe, přeletělo nespočet draků, kteří se vrhli na bojovníky a všechny je pobili. Jediný, kdo přežil a koho Rudý les ušetřil, byl Myddgar. On však musel Rudý les opustit a nikdy se nevrátit. Tak začala jeho cesta na severozápad, do míst nad míru podivných. Rostliny tam uměly chodit, zvířata mluvit a kameny skákat jako kobylky. Po několika týdnech dorazil do vesnice lidí, kteří žili v míru a pokoji, i když museli občas vzdorovat nájezdům sousedních osadníků. Myddgar všem vyložil svůj příběh a lidé ho přijali s otevřenou náručí. Celý den se slavil jeho příchod a on děkoval vesničanům za jejich vřelá srdce. Za několik měsíců si našel nevěstu, se kterou měl dvojčata. Obě měla vlastní rozum a jen co trochu vyrostla, odešla z domu směrem k Rudému lesu pěšinkou vedoucí kolem potoka života.</p>
                <p>Dvojčata si zpočátku velmi rozuměla. Obě chtěla dobývat a získávat prostor pro své záměry. Ambice jim rozhodně nechyběly, ovšem jejich srdce zaplnila chamtivost, která nezná mezí. Brzy se jejich cesty rozešly, protože každý chtěl úspěchu dosáhnout jiným způsobem, i když obě cesty byly založeny na stejné filozofii a vedly ke stejnému cíli. Když už jako statní mládenci dorazili k Rudému lesu, našli jen holou pláň pokrytou stébly trávy. Nikde nebyl žádný les, nikde žádný život. V tu chvíli začali jeden druhého obviňovat, že sešli z cesty a ztratili se. Došlo ke krutým hádkám a k ještě krutějšímu boji na život a na smrt. Jejich běsnění doprovázelo běsnění bouře, která se zničehonic objevila na jasně modrém nebi. Kam jen může člověka žárlivost, zášť a nenávist zavést? „To by stačilo,“ pravil jeden z bratrů, „mě poslechne každá bytost, moji vůli nelze odmítnout!“ V tu chvíli jakoby odnikud přiletěl drak a vrhl se na druhého bratra. Ten však byl pohotový a pravil: „Já znám zákony, já beru věci a měním je. Moji vůli nelze přehlédnout!“ V tu chvíli vytáhl z rukávu malou zbraň, kterou vyrobil cestou, a okamžitě z ní vyšlehl blesk o síle mnohaset bouří a spálil draka na popel. Když to uviděl první bratr, rozzlobil se a pohybem ruky vyvolal zemětřesení. Jejich boj trval dlouho. Mezi staršími se říká, že mezitím oba zestárli o deset let a vlasy jim zbělaly.</p>
                <p>&nbsp;<img src="https://towns.cz/tmp/world2/imgresizewurl/162/120/289315.jpg" alt="" width="100%"></p>
                <p>Než stačili celý ostrov zničit, objevil se kolem nich Rudý les, jako kdyby vystoupil z mlhy. Najednou je obklopila nepředstavitelná síla a tato síla byla dobrá, protože oba bratři byli opět obyčejní, nemohli nic ovládat ani nic užitečného vyrábět. Jejich moc byla pryč. V tu chvíli pravil les: „Zmizte odtud, prašiví červi. Nikdy se tu neukazujte!“ Šlahouny ostružiníku začaly šlehat všude kolem nich a několikrát bratry zasáhly. Bratři se svíjeli v nepředstavitelných bolestech, ale povedlo se jim z lesa odejít, každý zmizel na opačné světové straně. Netrvalo dlouho a získali si své příznivce, kteří realizovali jejich vize a stvořili tak věčný boj mezi Magií a Technologií.</p>
                <p>Avšak nikomu tento ostrov nepatří, patří jen Rudému lesu. Toho si byli ostrované vědomi, a tak po několika letech o Rudý les bojovali v dalším krutém boji. Byli tací, kteří se drželi stranou, stavěli, budovali a žili šťastně – ale těch bylo málo. Když obě strany zjistily, že se Rudý les nedá ovládnout, rozhodly se ho společnými silami zničit. Proč zrovna strach dokáže donutit ke spolupráci? Proč ne láska? Rudý les znal jejich motivy i jejich zkažená srdce a opět se změnil v prázdnou poušť. Nenávist mezi příznivci Magie a Technologie neustala, ale získala jiné rozměry, o kterých není vhodné se zmiňovat. Když se vítr uklidnil, Rudý les se opět objevil.</p>
        </div>
        <div class="popup-close"><img src="close-white.png" alt=""/></div>
    </div>

</body>
</html>