<?php

namespace FYKOS\dokuwiki\template\Jumbotron;

/**
 * Translated to en by Matěj Mezera <m.mezera@fykos.cz>
 */
class JumbotronData {

    private function getEvents(string $lang = 'cs'): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'Zážitky, na které se nezapomíná',
                    'Stává se ti, že už si večer nevzpomeneš, co jsi vlastně dělal přes den ve škole. Na FYKOSím soustředění ti tohle nehrozí, zážitky jako hraní famfrpálu nebo trávení dne poslepu se prostě nezapomínají.',
                    // Mimo to žádná zmrzlina nechutná tak, jako ta čerstvě připravená pomocí kapalného dusíku. ',
                    5,
                    5
                );

            case 'en':
            default:
                return new JumbotronItem(
                    'Unforgettable experiences',
                    'Does it happen to you that you can\'t remember what were you doing all day in school. At the FYKOS Camp, this is not the case. You can\'t just forget experiences like Quidditch or being blind for one day. ',
                    // Besides that, there is no better ice-cream then ice-cream prepared using liquid oxygen. ',
                    5,
                    5
                );
        }
    }

    private function getBrawl(string $lang = 'cs'): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'Týmové soutěže',
                    'Sestav tým na Fyziklání a Fyziklání online a poměřte svoje síly s ostatními.
                    Chceš na fyzikální souboj vyzvat svoje učitele nebo kamarády ze zahraničí? Žádný problém,
                    Fyziklání online je dostupné pro celý svět a v kategorii open se může zúčastnit i ten, kdo už není středoškolák.',
                    1,
                    1,
                );

            case 'en':
            default:
                return new JumbotronItem(
                    'Team contests',
                    'Put together a team for Physics Brawl and Online Physics Brawl to compare your strengths with others.
                    Do you want to challenge your teachers or foreign friends? No problem,
                    Online Physics Brawl is available for the whole world and anyone (even non hing school student) can take part in open category.',
                    1,
                    1
                );
        }
    }

    private function getActualBrawl(string $lang = 'cs', bool $addButton = false): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    '12. ročník FYKOSího Fyziklání',
                    'Máš tým 5 středoškoláků, které baví fyzika a chtěli by si zasoutěžit v mezinárodní
                     soutěži? Sestav tým na Fyziklání a poměř svoje síly s ostatními v Praze 16. 2.! Na ty nejlepší
                     čekají zajímavé ceny.' . ($addButton ? '<div><a class="btn" href="/rocnik31/fyziklani/start">Více informací</a></div>' : ''),
                    7,
                    1
                );

            case 'en':
            default:
                return new JumbotronItem(
                    '12th Physics Brawl',
                    'Do you have a team of 5 high school students who enjoy physics and would like to compete
                     in the international competition? Make a team and come to compete with others in Prague on February 16th!
                     The best teams will receive attractive prizes.'
                    . ($addButton ? '<div><a class="btn" href="/year31/physicsbrawl/start">More information</a></div>' : ''),
                    7,
                    1
                );
        }
    }

    private function getVaf(string $lang = 'cs', bool $addButton = false): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'Víkend s aplikovanou fyzikou',
                    'Po FYKOSím Fyziklální se můžete těšit na Víkend s aplikovanou fyzikou plný exkurzí, přednášek a deskových her. Navštívíme hvězdárnu, Národní technické muzeum a spoustu dalších zajímavých míst.' . ($addButton ? '<div><a class="btn" href="/rocnik31/vaf/start">Více informací</a></div>' : ''),
                    'vaf',
                    1
                );

            case 'en':
            default:
                return new JumbotronItem(
                    'Weekend With Applied Physics',
                    'You can enjoy Weekend With Applied Physics after FYKOS Physics Brawl. It is a weekend full of excursions, lectures and board games. We are going to visit the observatory, the National Technical Museum and many other interesting places.'
                    . ($addButton ? '<div><a class="btn" href="/year31/wap/start">More information</a></div>' : ''),
                    'vaf',
                    1
                );
        }
    }

    private function getCamps(string $lang = 'cs'): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'Nezapomenutelná soustředění',
                    'FYKOSí soustředění patří k nejzábavnějším akcím v této galaxii.
                    Pořádána jsou dvakrát ročně jako odměna pro nejlepší řešitele v nějakém malebném kouty naší vlasti. ',
                    // Jedná se o více než týden zážitkového programu, který doplňuje také odborný program v podobě přednášek a experimentů.',
                    3,
                    3
                );
            case 'en':
            default:
                return new JumbotronItem(
                    'Unforgettable camps',
                    'FYKOS Camp is one of the most entertaining events in our galaxy.
                    Is is being held twice a year in some beautiful part of our country as a reward for the best participants of FYKOS.  ',
                    // It is more then one week full of entertaining program including professional lectures and experiments.',
                    3,
                    3
                );
        }
    }

    /**
     * @param $lang string language code
     * @return JumbotronItem
     */
    private function getDsef(string $lang = 'cs'): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'Exkurze na vědecká pracoviště', 'Už jsi byl v CERNu, viděl tokamak nebo jaderný reaktor? FYKOS pořádá exkurze na ta nejzajímavější pracoviště z oblasti fyziky a jejích aplikací, nenechej si je ujít. ',
                    6,
                    6
                );
            case 'en':
            default:
                return new JumbotronItem(
                    'Excursion to scientific workplaces and research institutes', 'Have you been to CERN? Have you seen the tokamak or nuclear reactor? FYKOS organizes excursions to the most interesting workplaces if physics, don\'t miss it. ',
                    6,
                    6
                );
        }
    }

    /**
     * @param $lang string language code
     * @return JumbotronItem
     */
    private function getSex(string $lang = 'cs'): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'Věda zábavným způsobem',
                    'Nudíš se ve škole? Pak jsi na ni možná až moc chytrý.
                    Zapojte se do FYKOSu a získáš možnost poznat se s vědou zblízka zajímavějším způsobem.
                    Naše úlohy jsou mnohem komplexnější než ty, které znáš z hodin fyziky. ',
                    //A také pořádáme spoustu exkurzí a odborných přednášek. ',
                    4,
                    4
                );
            case 'en':
            default:
                return new JumbotronItem(
                    'Science through an entertaining way',
                    'Are you bored at school? Then you are maybe too smart.
                    Take part in FYKOS and you get to know science in a more interesting way.
                    Our tasks are much more complex than those you know from physics classes. ',
                    //And we also organize a lot of excursions and professional lectures. ',
                    4,
                    4
                );
        }
    }

    /**
     * @param $lang string language code
     * @return JumbotronItem
     */
    private function getNewFriends(string $lang = 'cs'): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'Noví kamarádi', 'Neberou tě jen řeči o fotbale, nebo barvě laku na nehty. Přidej se k FYKOSu a poznej spoustu lidí, kteří mají stejné zájmy jako ty.',
                    2,
                    2
                );
            case 'en':
            default:
                return new JumbotronItem('New friends', 'You don\'t like just talking about football or the color of your nail polish.
                    Join FYKOS and meet a bunch of people with same interests as you.',
                    2,
                    2
                );
        }
    }

    /**
     * @param $lang string language code
     * @return JumbotronItem
     */
    private function getFOFIntro(string $lang = 'cs'): JumbotronItem {
        switch ($lang) {
            case 'cs':
                return new JumbotronItem(
                    'FYKOSí Fyziklání',
                    'Fyziklání je tradiční soutěž maximálně 5členných týmů středoškoláků, kteří se zajímají o matematiku a fyziku. Jejich úlohou bude v daném časovém limitu získat za řešení úloh co nejvíce bodů.',
                    1,
                    1
                );
            case 'en':
            default:
                return new JumbotronItem(
                    'Physics Brawl',
                    'Physics Brawl is a traditional competition of a maximum of 5-member teams of high school students with interest in maths and physics.  Their task is to obtain as many points as possible for solving physics problems in given time limit.',
                    1,
                    1
                );
        }
    }

    public function getJumbotronDataByPage(string $page): JumbotronGroup {
        if (preg_match('/^rocnik31:fyziklani.*/', $page)) {
            return new JumbotronGroup([$this->getActualBrawl('cs', false)]);
        }
        if (preg_match('/^year31:physicsbrawl.*/', $page)) {
            return new JumbotronGroup([$this->getActualBrawl('en', false)]);
        }
        if (preg_match('/^rocnik31:vaf.*/', $page)) {
            return new JumbotronGroup([$this->getVaf('cs', false)]);
        }
        if (preg_match('/^year31:wap.*/', $page)) {
            return new JumbotronGroup([$this->getVaf('en', false)]);
        }
        switch ($page) {
            case 'start':
                return new JumbotronGroup([
                    //$this->getBrawl(),
                    $this->getActualBrawl('cs', true),
                    $this->getVaf('cs', true),
                    /*$this->getCamps(),
                    $this->getDsef(),
                    $this->getEvents(),
                    $this->getNewFriends(),
                    $this->getSex(),*/
                ]);
            case 'en':
                return new JumbotronGroup([
                    //$this->getBrawl('en'),
                    $this->getActualBrawl('en', true),
                    $this->getVaf('en', true),
                    /*$this->getCamps('en'),
                    $this->getDsef('en'),
                    $this->getEvents('en'),
                    $this->getNewFriends('en'),
                    $this->getSex('en'),*/
                ]);
            case 'akce:fyziklani:start':
                //return new JumbotronGroup([$this->getFOFIntro()]);
                return new JumbotronGroup([$this->getActualBrawl('cs', true)]);
            case 'events:physicsbrawl:start':
                //return new JumbotronGroup([$this->getFOFIntro('en')]);
                return new JumbotronGroup([$this->getActualBrawl('en', true)]);
            default:
                return new JumbotronGroup([]);
        }
    }
}
