<?php
/**
 * @var \App\Core\LinkGenerator $link
 * @var \App\Core\IAuthenticator $auth
 */
?>

<div class="container">
    <div class="text-center py-5d">
        <h1>NoteHub – váš sprievodca organizácie a produktivity!</h1>

        <p>
            NoteHub je dôveryhodný nástroj v správe úloh a ukladaní myšlienok.
            Pomáhame vám udržiavať prehľad nad vašimi povinnosťami a nápadmi, aby ste mohli dosiahnuť vaše ciele s ľahkosťou.
        </p>
    </div>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="/public/images/calendar.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Váš čas, vaše plány, náš kalendár.</h5>
                    <p class="card-text">
                        Náš kalendár je nástrojom, ktorý vám pomôže zlepšiť organizáciu vášho času a mať všetky dôležité dátumy na dosah ruky.
                        Už nezabudnite na dôležité udalosti a buďte lepšie pripravení na svoj každodenný život.<br>
                        Ďalšou výhodou nášho kalendára je schopnosť priradiť dôležitosť a prioritu vašim udalostiam, čo vám pomáha identifikovať, ktoré z nich sú najdôležitejšie.
                        Vďaka farebnej kategorizácii môžete jednoducho rozlíšiť medzi osobnými, pracovnými a rodinnými udalosťami.
                    </p>
                    <?php if ($auth->isLogged()) { ?>
                        <a href="<?= $link->url("home.note") ?>" class="btn btn-primary">Nastavte svoj čas podľa svojich potrieb ešte dnes!</a>
                    <?php } else { ?>
                        <a onclick="NeedLogin()" class="btn btn-primary">Nastavte svoj čas podľa svojich potrieb ešte dnes!</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="/public/images/notes.png" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Vytvárajte a spravujte svoje poznámky a myšlienky.</h5>
                    <p class="card-text">
                        Vstupte do sekce Poznámky, kde sa vaše myšlienky stávajú realitou.
                        Toto je miesto, kde môžete vytvárať, upravovať a organizovať svoje poznámky bez obmedzení.
                        Naše užívateľské rozhranie vám poskytuje jednoduchý a intuitívny spôsob práce s vašimi myšlienkami.
                        Nemusíte sa ničoho obávať. Vaše myšlienky sú vždy na dosah ruky, takže ich môžete zaznamenávať a sledovať, ako sa menia a rozvíjajú.
                    </p>
                    <?php if ($auth->isLogged()) { ?>
                        <a href="<?= $link->url("home.note") ?>" class="btn btn-primary">Nechajte kreativitu voľne plynúť a začnite písať!</a>
                    <?php } else { ?>
                        <a onclick="NeedLogin()" class="btn btn-primary">Nechajte kreativitu voľne plynúť a začnite písať!</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="/public/images/nastenka.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Úlohy - Vaša cesta k efektivite</h5>
                    <p class="card-text">
                        <span style="color: hotpink;">To-Do (Na vykonanie):</span>
                        Miesto, kde vaše plány začínajú. Vytvorte si zoznam úloh, ktoré chcete splniť, a sledujte ich, ako sa menia na skutočnosť.<br>
                        <span style="color: orange;">In Progress (V procese):</span>
                        Úlohy, na ktorých aktuálne pracujete. Udržujte si prehľad o pokroku a posúvajte sa bližšie k vašim cieľom.<br>
                        <span style="color: green;">Done (Hotovo):</span>
                        Tá najlepšia časť. V tejto kategórii zhromažďujete úlohy, ktoré ste úspešne dokončili.
                        Oslavujte svoje úspechy a majte prehľad o splnených veciach.<br>
                        S touto prehľadnou organizáciou úloh budete mať stále všetko pod kontrolou.
                        Bez ohľadu na to, či ide o malé bežné úlohy alebo veľké projekty, jednoduché a efektívne rozdelenie vám pomôže dosiahnuť vaše ciele s ľahkosťou.<br>
                    </p>
                    <?php if ($auth->isLogged()) { ?>
                        <a href="<?= $link->url("home.note") ?>" class="btn btn-primary">Začnite plánovať, pracovať a oslavovať svoje úspechy už dnes!</a>
                    <?php } else { ?>
                        <a onclick="NeedLogin()" class="btn btn-primary">Začnite plánovať, pracovať a oslavovať svoje úspechy už dnes!</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

