## Shrnutá práce
- vytvořena struktura pro backend
- migrace databáze
- seed databáze
- RepositoryPattern
  - vytvořeny repositoryInterface
  - vytvořeny eloquentRepository, které implementují repositoryInterface
  - vytvořen RepositoryServiceProvider
- BusinessObject
  - vytvořeny modelInterface
  - vytvořeny eloquent modely, které implementují repository
  - eloquentRepository používá eloquent modely
  - controller pracuje s modely
  - v případě využití jiného zdroje se změní pouze repozitáře a jejich modely, které budou implementovat již definované struktury
 - vytvoření kontrollerů
   - minimální kód
   - kontroller pouze
     - předává data z requestu repozitáři
     - předává data z repozitáři do response
 - vytvoření service
   - service pomáhá kontroleru upravit předaná data pro repozitář
 - vytvoření validace requestů
   - žádný request neprojde bez absolutního schválení příchozích dat
   - nikdy nevěř uživateli
 - aplikace statické analýzy
   - parallel-lint
   - phpcs pro PSR-12
   - phpstan
- vytvořena struktura pro frontend
   - vytvoření views pro stránky
   - vytvoření formuláře pro mobilitu
   - přidání error hlášek ke každému inputu
   - vytvoření vlastní select komponenty
     - nejnáročnější část práce
     - nenašla jsem žádnou select komponentu, která by vyhovovala mým požadavkům
     - implementace vlastní komponenty from scratch
   - vytvoření service pro API requesty
     - oddělení struktury práce s backend daty od komponent → větší abstrakce
- vytvořena struktura pro postman
  - přidání requestů, složek a environmentu pro náhled requestů z backendu a lepší testování
# Závěr
V průběhu semestru jsem se rozhodla, že věnuju tento čas právě oblastem, ke kterým v práci ani ve škole nemám příležitost. Aplikace, kterou implementuji, tak již byla zhotovená jako závěrečná práce bakalářského studia, nicméně to byl můj první projekt, kterému jsem se věnovala a to včetně pro mě absolutně nových technologií a to Laravel a Vue.js.

Práci s oběma frameworky jsem si oblíbila, právě proto jsem se rozhodla je použít i pro druhou verzi mé aplikace, nicméně v naprosto jiném podání. Tentokrát jsem použila oddělenou strukturu backendu a frontendu. Laravel tedy pro vytvoření API, zatímco Vue.js jako SPA Single Page Application. Stejně jako předtím je to moje poprvé pro vytváření takovýchto projektů from scratch, jen už jsem s technologiemi více seznámena, takže začátek netrvá tak dlouho.
Největší problém je pro mě práce s frontendem, protože je to pro mě větší neznámá a na tom, co vidí uživatel je vždycky co zlepšovat. Jako jedna část mého bodu je přizpůsobit design jak pro darkmode, tak i pro lightmode, protože je to teď velmi žádaná featura. Co se mi nelíbí, tak jde velmi těžko najít návody, jak pracovat s čistým kódem na frontendu, protože většina tutoriálů je prostě naplácaná tak, aby to fungovalo a málokdy se doopravdy hledá elegantní řešení. Tomuto chci klást velký důraz i v mé závěrečné práci, proto je tam ještě spousta prostoru.

S backendem mám zkušenosti i se zaměstnání, takže implementace šla o něco rychleji. Použila jsem patterny, které se používají pro lepší čitelnost i udržitelnost kódu, protože bych si přála, aby projekt běžel co nejdéle a byl dobře udržitelný. Dále jsem využila nástroje pro statickou analýzu, které pomáhají jak s čistým kódem, tak i s ošetřením hůře viditelných problémů, které v PHP mohou nastat. K tomu jsem využila český nástroj PHPStan, který analyzuje kvalitu kódu a zahrnuje i kontroly mrtvého kódu, návratových typů, ale i špatných komentářů.

Jedna z hlavní věcí, co musím vyřešit je ale elegantní předávání objektů mezi frontendem a backendem. Na to se používají api generátory, ale nenašla jsem takový, co by mi vyhovoval, je třeba na to udělat podrobnější research.

# Zhodnocení předmětu
Čas strávený na tomto projektu byl pro mě velmi důležitý, protože mi pomohl nastavit pevné základy mé diplomové práci již s předstihem a dokázala jsem se v klidu věnovat problematikám, které se v časovém presu odevzdání projektů velmi často zanedbávají. Tyto základy můžu rozvíjet dál a věnovat se dalším problematikám, které jsem v rámci tohoto předmětu již nestihla - testování kódu, podrobnější statická analýza i na frontendu, lepší architektura na frontentu a především design aplikace a již zmíněný api generátor.

Nebyla jsem schopná dodržet svůj původní plán, kvůli přehodnocení priorit pro projekt. To mi pomohlo zajistit strukturu a dobrý začátek pro moji práci. Čas byl ovšem stráven efektivně a implementace - i když nebyla shodná s mou prací - bude velmi dobře využita. 
